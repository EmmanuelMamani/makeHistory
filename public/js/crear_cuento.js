const firebaseConfig = {
    apiKey: "AIzaSyBFmm6zjjxVc3T77T-Jw1uzBK_Ld5PipyE",
    authDomain: "eva2024.firebaseapp.com",
    databaseURL: "https://eva2024-default-rtdb.firebaseio.com",
    projectId: "eva2024",
    storageBucket: "eva2024.appspot.com",
    messagingSenderId: "807706610268",
    appId: "1:807706610268:web:f88ef15dc460181a7ab499",
    measurementId: "G-JEGHV15FCK"
  };
  
  firebase.initializeApp(firebaseConfig);
  let db =firebase.firestore();
  var storage=firebase.storage();

  //Guardar el tema
  function GuardarCuento(cuento){
      db.collection("Cuentos").add({
          cuento
      });
  }
  function guardar(){
    
    var titulo=$("#validationServer01").val()
    var contenido=$("#validationTextarea").val()
    const cuento={titulo,contenido}
    GuardarCuento(cuento);
  }