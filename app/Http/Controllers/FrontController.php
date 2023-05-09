<?php

namespace App\Http\Controllers;

use Mail;
use File;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function email(Request $request)
    {
        $password = $request->password;
        $email = $request->email;
        $name = $request->name;

        if ($password == 'GbfASB6DMDSUUB') {
            //Correo
            $data = array(
                'name' => $name,
                'email' => $email,
            );

            $files = [
                public_path('attachments/makbra-cot.pdf'),
            ];

            try {
                Mail::send('mail.proposal', $data, function ($message) use ($data, $files, $email, $name) {
                    $message->to($email, $name)->subject('Hey! Tu cotización llego.');

                    $message->from('hassiel.monterrosas@gmail.com', 'noehassiel');

                    foreach ($files as $file) {
                        $message->attach($file);
                    }
                });

                return redirect()->back();
            } catch (Exception $e) {

                Session::flash('error', 'No se ha identificado servidor SMTP en la plataforma. Configuralo correctamente para enviar correos desde tu sistema.');
                return response()->json(['mensaje' => 'No se ha identificado servidor SMTP en la plataforma. Configuralo correctamente para enviar correos desde tu sistema.'], 200);

                return redirect()->back();
            }
        } else {
        }

        return redirect()->back();
    }
}
