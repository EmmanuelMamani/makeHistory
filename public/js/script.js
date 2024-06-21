// script.js
document.addEventListener("DOMContentLoaded", function() {
    const story = document.getElementById("story");
    const commentDisplay = document.getElementById("comment-display");
    const saveButton = document.getElementById("save-button");
    const versionsList = document.getElementById("versions-list");
    const modal = document.getElementById("modal");
    const closeModalButton = document.querySelector(".close-button");
    const modalTitle = document.getElementById("modal-title");
    const modalText = document.getElementById("modal-text");
    const modalActionButton = document.getElementById("modal-action-button");
    let comments = [];
    let selectedText = '';
    let modalAction = '';

    function initialize() {
        loadVersions();
        story.addEventListener("mouseup", handleMouseUp);
        story.addEventListener("click", handleStoryClick);
        document.addEventListener("click", handleDocumentClick);
        saveButton.addEventListener("click", handleSaveButtonClick);
        closeModalButton.addEventListener("click", closeModal);
        modalActionButton.addEventListener("click", handleModalAction);
    }

    function handleMouseUp() {
        selectedText = window.getSelection().toString();
        if (selectedText) {
            modalTitle.textContent = "Añadir Comentario";
            modalText.placeholder = "Escribe tu comentario...";
            modalText.value = '';
            modalActionButton.textContent = "Añadir Comentario";
            modalAction = 'addComment';
            openModal();
        }
    }

    function handleStoryClick(event) {
        if (event.target.classList.contains("comment-highlight")) {
            const commentData = comments.find(c => c.text === event.target.textContent);
            if (commentData) {
                showComment(event.target, commentData.comment);
            }
        }
    }

    function handleDocumentClick(event) {
        if (!event.target.classList.contains("comment-highlight") && event.target !== commentDisplay) {
            commentDisplay.style.display = 'none';
        }
    }

    function addComment(selectedText, comment) {
        comments.push({ text: selectedText, comment: comment });

        const highlightedText = `<span class="comment-highlight">${selectedText}</span>`;
        const storyHTML = story.innerHTML;
        const updatedStoryHTML = storyHTML.replace(selectedText, highlightedText);

        story.innerHTML = updatedStoryHTML;
        closeModal();
    }

    function showComment(element, comment) {
        commentDisplay.innerHTML = `<strong>Comentario:</strong> ${comment}`;
        const rect = element.getBoundingClientRect();
        commentDisplay.style.top = `${rect.bottom + window.scrollY}px`;
        commentDisplay.style.left = `${rect.left + window.scrollX}px`;
        commentDisplay.style.display = 'block';
    }

    function handleSaveButtonClick() {
        modalTitle.textContent = "Guardar Versión";
        modalText.placeholder = "Nombre de la versión...";
        modalText.value = '';
        modalActionButton.textContent = "Guardar Versión";
        modalAction = 'saveVersion';
        openModal();
    }

    function saveVersion(versionName) {
        if (versionName) {
            const versionData = {
                story: story.innerHTML,
                comments: comments
            };
            localStorage.setItem(versionName, JSON.stringify(versionData));
            loadVersions();
            clearHighlights();
            closeModal();
        }
    }

    function loadVersions() {
        versionsList.innerHTML = '';
        for (let i = 0; i < localStorage.length; i++) {
            const key = localStorage.key(i);
            const button = document.createElement("button");
            button.textContent = key;
            button.value = key;
            button.addEventListener("click", () => loadVersion(key));
            versionsList.appendChild(button);
        }
    }

    function loadVersion(versionName) {
        const versionData = JSON.parse(localStorage.getItem(versionName));
        if (versionData) {
            story.innerHTML = versionData.story;
            comments = versionData.comments;
        }
    }

    function clearHighlights() {
        const highlightedText = story.querySelectorAll('.comment-highlight');
        highlightedText.forEach(node => {
            const parent = node.parentNode;
            parent.replaceChild(document.createTextNode(node.textContent), node);
        });
    }

    function openModal() {
        modal.style.display = 'block';
    }

    function closeModal() {
        modal.style.display = 'none';
        modalText.value = '';
        selectedText = '';
        modalAction = '';
    }

    function handleModalAction() {
        const text = modalText.value.trim();
        if (modalAction === 'addComment' && text) {
            addComment(selectedText, text);
        } else if (modalAction === 'saveVersion' && text) {
            saveVersion(text);
        }
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            closeModal();
        }
    }

    initialize();
});
