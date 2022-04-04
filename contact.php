<?php

include "config.php";
date_default_timezone_set("Asia/Calcutta");
$date = date("Y-m-d");
$datetime = date('Y-m-d H:i:s');

if(isset($_POST['btncontact']) && $_SERVER['REQUEST_METHOD'] == "POST"){
    $contactname = cleanup($_POST['contactname']);
    $contactemail = cleanup($_POST['contactemail']);
    $contactsubject = cleanup($_POST['contactsubject']);
    $contactmessage = cleanup($_POST['contactmessage']);
    if(!filter_var($contactemail, FILTER_VALIDATE_EMAIL)){
        echo "validemail";
        die();
    }
    if(empty($contactname) && empty($contactemail) && empty($contactsubject) && empty($contactmessage)){
        echo "mandatory";
    }
    else{
//        echo "success";
        $insert = "INSERT INTO `contactform`(`name`, `email`, `subject`, `message`, `date`, `submitted`) VALUES ('$contactname','$contactemail','$contactsubject','$contactmessage','$date','$datetime')";
            $result = mysqli_query($con, $insert);
        if($result){
            require_once 'PHPMailer-master/PHPMailerAutoload.php';
            $mail = new PHPMailer; 
            $mail->isSMTP();           
            $mail->Host = 'smtp.gmail.com';   
            $mail->SMTPAuth = true;     
            $mail->Username = 'enable.onl@gmail.com';        
            $mail->Password = '';    
            $mail->SMTPSecure = 'tls';   
            $mail->Port = 587;
            $mail->setFrom('info@enable.online', 'ENABLE');
//            $mail->addAddress('info@anciapp.com', 'Admin');
            $mail->addBCC('faizan.kazi@enlyft.in', 'User'); 

            $mail->isHTML(true);
            $mail->Subject = 'ENABLE Contact Form';
            $mail->Body    = "<table width='500' border='0' align='center' cellpadding='0' cellspacing='0' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; border:solid 1px #eaeaea;'>
                <tr>
                    <td width='25%' height='25' align='left' valign='top'>Name :</td>
                    <td width='75%' height='25' align='left' valign='top'>$contactname</td>
                </tr>
                <tr>
                    <td width='25%' height='25' align='left' valign='top'>Email:</td>
                    <td width='75%' height='25' align='left' valign='top'>$contactemail</td>
                </tr>
                  <tr><td width='25%' height='25' align='left' valign='top'>Subject :</td>
                  <td width='75%' height='25' align='left' valign='top'>$contactsubject</td>
                </tr>
                <tr>
                    <td width='25%' height='25' align='left' valign='top'>Message :</td>
                    <td width='75%' height='25' align='left' valign='top'>$contactmessage</td>
                </tr>

                </table></td>
                </tr>
            </table><br>";
            if(!$mail->send()){
                echo "fail";
            }
            else{
                echo "success";
            }
        }
        else{
            echo mysqli_error($con);
        }
    }
}

function cleanup( $data ) {
    global $con;
    $data = trim( $data );
    $data = htmlspecialchars( $data );
    $data = mysqli_real_escape_string($con, $data);
    return $data;
}
?>
