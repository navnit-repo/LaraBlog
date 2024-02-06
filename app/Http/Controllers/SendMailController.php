<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception\SMTPException;

class SendMailController extends Controller
{
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    // public function index(Request $request)
    // {
    //     return view('sendemail');
    // }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $email = $request->input_1;
        $message = $request->textArea;
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
            $mail->isSMTP();                                            
            $mail->Host       = env('MAIL_HOST');                     
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = env('MAIL_USERNAME');                     
            $mail->Password   = env('MAIL_PASSWORD');                               
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
            $mail->Port       = 465;                                   

            //Recipients
            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress(env('TO_MAIL'), env('TO_NAME'));     


            //Content
            $mail->isHTML(true);                                  
            $mail->Subject = 'Query';
            $mail->Body    = "Query From  : {$email} <br>  <br> Query:{$message}";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            // $mail->send();
             if( !$mail->send() ) {
                // echo "error".$mail->ErrorInfo;
            return back()->with("error", "Email not sent.")->withErrors($mail->ErrorInfo);
            }   
            else {
                return back()->with("success", "Email has been sent.");
            }
        }   catch (Exception $e) {
               return back()->with('error','Message could not be sent.');

        }
    }
}
