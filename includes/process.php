<?php
require("vendor/phpmailer/phpmailer/src/PHPMailer.php");
require("vendor/phpmailer/phpmailer/src/SMTP.php");

// Functions to filter user inputs
function filterName($field) {
    // Sanitize user name
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    
    // Validate user name
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
        return $field;
    } else {
        return FALSE;
    }
}
function filterEmail($field) {
    // Sanitize e-mail address
    $field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);
    
    // Validate e-mail address
    if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return $field;
    } else {
        return FALSE;
    }
}
function filterPhone($field) {
    // Sanitize user name
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    
    // Validate e-mail address
    if(is_numeric($field) && strlen($field) <= 11 && strlen($field) >= 10 ) {
        return $field;
    } else {
        return FALSE;
    }
}
function filterData($field){
    // Sanitize string
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if(!empty($field)) {
        return $field;
    } else {
        return FALSE;
    }
}
 
// Define variables and initialize with empty values
$nameErr = $emailErr = $messageErr = "";
// $name = $email = $subject = $message = "";
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$comments = $_POST["comments"];
$captcha = $_POST['captcha'];
// $recapt = $_POST["recaptcha_response_field"];
$privatekey = "6Lfu-bIUAAAAALlpYrg6YL7F0ThKiJ2Hi7R9VMDm";
$userIP = $_SERVER['REMOTE_ADDR'];
$url = "https://www.google.com/recaptcha/api/siteverify?secret={$privatekey}&response={$captcha}";
$response = file_get_contents($url);
$response = json_decode($response);

if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate user name
    if(empty($name)){
        die('<div class="alert alert-danger">
                <p>Please enter your name.</p>
            </div');
    } else{
        $name = filterName($name);
        if($name == FALSE){
            die('<div class="alert alert-danger">
                    <p>Please enter a valid name.</p>
                </div');
        }
    }
    
    // Validate email address
    if(empty($email)){
        die('<div class="alert alert-danger">
                <p>Please enter your email address.</p>
            </div');
    } else{
        $email = filterEmail($email);
        if($email == FALSE){
            die('<div class="alert alert-danger">
                    <p>Please enter a valid email address.</p>
                </div');
        }
    }
    
    // Validate message subject
    if(empty($phone)){
        die('<div class="alert alert-danger">
                <p>Please enter your Phone number.</p>
            </div');
    } else{
        $phone = filterPhone($phone);
        if($phone == FALSE){
            echo $phone;
            die('<div class="alert alert-danger">
                    <p>Please enter a valid phone number.</p>
                </div');
            
        }
    }
    
    // Validate user comment
    if(empty($comments)){
        die('<div class="alert alert-danger">
                <p>Please enter some Message.</p>
            </div');
    }

    // Validate captcha
    if(empty($captcha)){
        die('<div class="alert alert-danger">
                <p>Please check the captcha.</p>
            </div');
    }

    if($response -> success) {

        $mail = new PHPMailer\PHPMailer\PHPMailer();
        
        //From email address and name
        $mail->From = "info@chennaioncologist.com";
        $mail->FromName = "Enquiry";

        //To address and name
        $mail->addAddress("chennaimedinfo.in@gmail.com");
        $mail->addAddress("vickydevu007@gmail.com"); //Recipient name is optional

        //Address to which recipient will reply
        $mail->addReplyTo($_POST['email'], "Reply");

        //Send HTML or Plain Text email
        $mail->isHTML(true);
        $mail->Subject = "Enquiry From chennaioncologist.com";
        $mail->Body = "<html>
            <head>
                <title>HTML email</title>
            </head>
            <body>
                <table>
                    <tr>
                        <td><strong>Full Name</strong></td><td>:</td><td>".$name."</td>					
                    </tr>
                    <tr>
                        <td><strong>Email ID</strong></td><td>:</td><td>".$email."</td>					
                    </tr>
                    <tr>
                        <td><strong>Mobile</strong></td><td>:</td><td>".$phone."</td>					
                    </tr>
                    <tr>
                        <td><strong>Message</strong></td><td>:</td><td>".$message."</td>			
                    </tr>
                </table>
            </body>
        </html>";
        $mail->AltBody = "This is the plain text version of the email content for Testing.";
        if(!$mail->send()) 
        {
            echo 'Sorry mail was not send due to some server problem, please try again later!';
                // echo $mail->ErrorInfo;
        } 
        else 
        {
            echo '<div class="alert alert-success">
					<h3>Email Sent Successfully</h3>
					<p>Thank you <strong>'.$name.'</strong>, Your message has been submitted to us!</p>
				</div>';
        }
    

    } else {
        die('<div class="alert alert-danger">
                <p>Want to send another Message? try after 1 minute</p>
            </div');
    }
}


?>
