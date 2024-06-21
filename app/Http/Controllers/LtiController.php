<?php

namespace App\Http\Controllers;
use CT\LTI\LTI_Message_Launch;
use Illuminate\Http\Request;

class LtiController extends Controller
{
    public function launch(Request $request)
    {
        try {
            $launch = LTI_Message_Launch::new(new \App\Services\LtiDataStore())
                ->set_client_id(env('LTI_CLIENT_ID'))
                ->set_deployment_id(env('LTI_DEPLOYMENT_ID'))
                ->set_public_key(env('LTI_PUBLIC_KEY'))
                ->set_private_key(env('LTI_PRIVATE_KEY'))
                ->validate();

            $user = $launch->get_launch_data()['https://purl.imsglobal.org/spec/lti/claim/username'];
            
            // Autenticar al usuario en tu aplicación Laravel
            //Auth::loginUsingId($user);

            return redirect('/');
        } catch (\Exception $e) {
            return response('Unauthorized', 401);
        }
    }
}
