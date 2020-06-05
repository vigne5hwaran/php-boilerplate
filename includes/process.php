<?php
require("vendor/phpmailer/phpmailer/src/PHPMailer.php");
require("vendor/phpmailer/phpmailer/src/SMTP.php");

if (empty($_POST['captcha'])) {
	echo 'Please set recaptcha variable';
}

// validate recaptcha
$response = $_POST['captcha'];
$post = http_build_query(
 	array (
 		'response' => $response,
 		'secret' => '6LdR9rAUAAAAAL8Gxaw_FlB60CB30RvJL_6M0Ey7', // your secret key goes here
 		'remoteip' => $_SERVER['REMOTE_ADDR']
 	)
);
$opts = array('http' => 
	array (
		'method' => 'POST',
		'header' => 'application/x-www-form-urlencoded',
		'content' => $post
	)
);
$context = stream_context_create($opts);
$serverResponse = @file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
if (!$serverResponse) {
	echo 'Failed to validate Recaptcha';
}
$result = json_decode($serverResponse);

if($result -> success) {

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $mail = new PHPMailer\PHPMailer\PHPMailer();
        
        //From email address and name
        $mail->From = "info@chennaiskinhairclinic.com";
        $mail->FromName = "Enquiry";
		
        //To address and name
        $mail->addAddress("briteinfomediaa@gmail.com");
        $mail->addAddress("knee.news@gmail.com"); //Recipient name is optional
        
        // adding cc
        $mail->addCC("chennaimedinfo.in@gmail.com");

	      //Address to which recipient will reply
        $mail->addReplyTo($_POST['email'], "Reply");

	      //Send HTML or Plain Text email
        $mail->isHTML(true);
        $mail->Subject = "Enquiry From chennaiskinhairclinic.com";
        
        $mail_body_head = "<html>
                            <body>
                                <table>";

        $mail_body_foot = "</table>
                      </body>
                  </html>";

        $mail_body_body = "<tr>
                            <td><strong>Full Name</strong></td><td>:</td><td>".$_POST['name']."</td>					
                        </tr>
                        <tr>
                            <td><strong>Email ID</strong></td><td>:</td><td>".$_POST['email']."</td>					
                        </tr>
                        <tr>
                            <td><strong>Mobile</strong></td><td>:</td><td>".$_POST['phone']."</td>					
                        </tr>
                        <tr>
                            <td><strong>Message</strong></td><td>:</td><td>".$_POST['message']."</td>			
                        </tr>";

        $day = $_POST['htime'];
        $h_day = explode(',',$day);
        $date = $_POST['date'];
        $h_date = explode('/', $date);

        if(isset($_POST['hospital'])) {
          $mail_body_body .= "<tr>
                          <td><strong>Hospital</strong></td><td>:</td><td>".$_POST['hospital']."</td>					
                        </tr>
                        <tr>
                          <td><strong>Day & Time</strong></td><td>:</td><td>".$h_day[1]."</td>					
                        </tr>
                        <tr>
                          <td><strong>Date</strong></td><td>:</td><td>".$_POST['date']."</td>					
                        </tr>";
        }
        
        

        $mail_body = $mail_body_head.$mail_body_body.$mail_body_foot;

	    $mail->Body = $mail_body;
        $mail->AltBody = "This is the plain text version of the email content for Testing.";
        if(!$mail->send()) {
            echo 'Something went wrong, Try again later!';
                // echo $mail->ErrorInfo;
        } else {
            echo 'success';
        }
    }

} else if(!$result -> success) {
    echo 'Please Check the recaptcha and Try again';
}

// echo 'success';
// echo $_POST['name'];
// echo $_POST['email'];
// echo $_POST['country'];


?>
