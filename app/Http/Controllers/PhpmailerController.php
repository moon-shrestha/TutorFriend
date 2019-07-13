<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailerPHPMailerPHPMailer;
use PHPMailerPHPMailerException;


class PhpmailerController extends Controller
{
    public function sendEmail (Request $request) {
        // dd("hi");
    
              // require 'C:/xampp/php/pear/PEAR/vendor/autoload.php';													// load Composer's autoloader
                require 'vendor/autoload.php';
              $email=$request->input('email');
              $teacherEmail=$request->input('teacher');

              $mail = new PHPMailer(true);                            // Passing `true` enables exceptions
  
              try {
                  // Server settings
              $mail->SMTPDebug = 0;                                	// Enable verbose debug output
                  $mail->isSMTP();                                     	// Set mailer to use SMTP
                  $mail->Host = 'smtp.deerwalk.edu.np';												// Specify main and backup SMTP servers
                  $mail->SMTPAuth = true;                              	// Enable SMTP authentication
                  $mail->Username = 'moon.shrestha@deerwalk.edu.np';             // SMTP username
                  $mail->Password = 'deerwalK#70419';              // SMTP password
                  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                  $mail->Port = 587;                                    // TCP port to connect to
  
                  //Recipients
                  $mail->setFrom('moon.shrestha@deerwalk.edu.np', 'Mailer');
                  $mail->addAddress($teacherEmail, 'Optional name');	// Add a recipient, Name is optional
                //   $mail->addReplyTo('your-email@gmail.com', 'Mailer');
                  $mail->addCC($email);
                //   $mail->addBCC('his-her-email@gmail.com');
  
                  //Attachments (optional)
                  // $mail->addAttachment('/var/tmp/file.tar.gz');			// Add attachments
                  // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');	// Optional name
  
                  //Content
                  $mail->isHTML(true); 																	// Set email format to HTML
                //   $mail->Subject = Request::input('subject');
                  $mail->Body    = Request::input('message');						// message
  
                  $mail->send();
                  return back()->with('success','Message has been sent!');
              } catch (Exception $e) {
                  return back()->with('error','Message could not be sent.');
              }
      
          return view('phpmailer');
    }
}


