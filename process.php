<?php

include "config.php";

date_default_timezone_set("Asia/Calcutta");
$date = date("Y-m-d");
$datetime = date('Y-m-d H:i:s');

if(isset($_POST['fourthform']) && $_SERVER['REQUEST_METHOD'] == "POST"){
    $uid = cleanup($_POST['uid']);
    $audience1 = cleanup( $_POST['audience1'] );
    $agegroup1 = cleanup( $_POST['agegroup1']);
    $budget1 = cleanup($_POST['budget1']);
    if(empty($audience1)){
        $audience1 = "NA";
    }
    if(empty($agegroup1)){
        $agegroup1 = "NA";
    }
    if(empty($budget1)){
        $budget1 = "NA";
    }
    
    $checkid = "SELECT *  FROM `userdata` WHERE `userid` = '$uid'";
    $result = mysqli_query($con, $checkid);
    $count = mysqli_num_rows($result);
    if($count > 0){
//        echo "success";
            while($row = mysqli_fetch_assoc($result)){
                if($row['userid'] == $uid){
                    $demail = trim($row['email']);
                    $dcontact = trim($row['contact']);
                    $dactivity = trim($row['activity']);
                    $dindustry = trim($row['industry']);
                    if($dindustry == "NA" || $dactivity == "NA" || $audience1 == "NA" || $agegroup1 == "NA" || $budget1 == "NA" || $demail == "NA" || $dcontact == "NA"){
                        $complete = 0;
                    }
                    else{
                        $complete = 1;
                    }
                    if(!empty($demail) && !empty($dcontact)){
                                $update = "UPDATE `userdata` SET `audience` = '$audience1', `agegroup` = '$agegroup1', `budget` = '$budget1', `submitted` = '$datetime', `complete` = '$complete' WHERE `userid` = '$uid'";
                                $result1 = mysqli_query($con, $update);
                                if($result1){
                                    
                                    require_once 'PHPMailer-master/PHPMailerAutoload.php';
                                    $mail1 = new PHPMailer; 
                                    $mail1->isSMTP();           
                                    $mail1->Host = 'iabp.org.in';   
                                    $mail1->SMTPAuth = true;     
                                    $mail1->Username = 'test@iabp.org.in';        
                                    $mail1->Password = 'support@2019';    
                                    $mail1->SMTPSecure = 'tls';   
                                    $mail1->Port = 587;
                                    $mail1->setFrom('info@enable.online', 'ENABLE');
                //                    $mail1->addAddress($emailid, 'User');
                                    $mail1->addBCC('faizan.kazi@enlyft.in', 'User'); 
                                    $mail1->isHTML(true);
                                    $mail1->Subject = 'ENABLE Lead - Website';
                                    $mail1->Body = "<p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'>Hi, </p>
                                    <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'>Please find the lead details below to connect for further requirements.</p><br>
                                    <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'><span style'text-decoration:underline'><u><strong>Registration Details:</strong></u></span></p>
                                    <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'><span>Email ID: $demail</span></p>
                                    <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'><span>Mobile Number: $dcontact</span></p><br>
                                    <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'><span style'text-decoration:underline'><u><strong>Requirement Details:</strong></u></span></p>
                                    <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'><span>Marketing Activity: $dactivity</span></p>
                                    <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'><span>Industry: $dindustry</span></p>
                                    <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'><span>Target Audience: $audience1</span></p>
                                    <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'><span>Age Group: $agegroup1</span></p>
                                    <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'><span>Marketing Budget: $budget1</span></p><br>
                                    <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'>Please connect with customer for more information.</p><br>
                                    <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'>Regards, <br>ENABLE - Internal</p>
                                    <br>";
                                    if(!$mail1->send()){
                                        echo "fail";
                                    }
                                    else{
                                        echo "success";
                                    }
                                }
                    }
                    else{
                        echo "fail";
                    }
                }
            }
    }
    else{
        echo "fail";
    }
}

if(isset($_POST['thirdform']) && $_SERVER['REQUEST_METHOD'] == "POST"){
    $uid = cleanup($_POST['uid']);
    $category1 = cleanup( $_POST['category1'] );
    
    $checkid = "SELECT `userid`, `email`, `contact`  FROM `userdata` WHERE `userid` = '$uid'";
    $result = mysqli_query($con, $checkid);
    $count = mysqli_num_rows($result);
    if($count > 0){
//        echo "success";
            while($row = mysqli_fetch_assoc($result)){
                if($row['userid'] == $uid){
                    $demail = trim($row['email']);
                    $dcontact = trim($row['contact']);
                    if(!empty($demail) && !empty($dcontact)){
                        $update = "UPDATE `userdata` SET `industry` = '$category1', `submitted` = '$datetime' WHERE `userid` = '$uid'";
                        $result1 = mysqli_query($con, $update);
                        if($result1){
                            echo "success";
                        }
                    }
                    else{
                        echo "fail";
                    }
                }
            }
    }
    else{
        echo "fail";
    }
}

if(isset($_POST['secondform']) && $_SERVER['REQUEST_METHOD'] == "POST"){
    $uid = cleanup($_POST['uid']);
    $activity1 = cleanup( $_POST['activity1'] );
//    echo "success";
    $checkid = "SELECT `userid`, `email`, `contact`  FROM `userdata` WHERE `userid` = '$uid'";
    $result = mysqli_query($con, $checkid);
    $count = mysqli_num_rows($result);
    if($count > 0){
//        echo "success";
            while($row = mysqli_fetch_assoc($result)){
                if($row['userid'] == $uid){
                    $demail = trim($row['email']);
                    $dcontact = trim($row['contact']);
                    if(!empty($demail) && !empty($dcontact)){
                        $update = "UPDATE `userdata` SET `activity` = '$activity1', `submitted` = '$datetime' WHERE `userid` = '$uid'";
                        $result1 = mysqli_query($con, $update);
                        if($result1){
                            echo "success";
                        }
                    }
                    else{
                        echo "fail";
                    }
                }
            }
    }
    else{
        echo "fail";
    }
}

if(isset($_POST['firstform']) && $_SERVER['REQUEST_METHOD'] == "POST"){
    $uid = cleanup($_POST['uid']);
    $emailid1 = cleanup( $_POST['emailid1'] );
    $contact1 = cleanup( $_POST['contact1'] );
    $complete = 0;
    $contactlen = strlen($contact1);
    $mode = "Website";
    $activity = "NA";
    $category = "NA";
    $audience = "NA";
    $agegroup = "NA";
    $budget = "NA";
    if(!empty($emailid1) && !empty($contact1)){
        if(!filter_var($emailid1, FILTER_VALIDATE_EMAIL)){
            echo "validemail";
            die();
        }
        if(preg_match("[gmail|yahoo|rediff]", $emailid1)){
            echo "officialemail";
            die();
        }
        if($contactlen !== 10){
            echo "validnumber";
            die();
        }
        $insert = "INSERT INTO `userdata`(`userid`, `email`, `contact`, `activity`, `industry`, `audience`, `agegroup`, `budget`, `date`, `submitted`, `complete`,`mode`) VALUES ('$uid','$emailid1','$contact1','$activity','$category','$audience','$agegroup','$budget','$date',
        '$datetime','$complete','$mode')";
        $result = mysqli_query($con, $insert);
        if($result){
//            echo "success";
                require_once 'PHPMailer-master/PHPMailerAutoload.php';
                $mail = new PHPMailer; 
                $mail->isSMTP();           
                $mail->Host = 'iabp.org.in';   
                $mail->SMTPAuth = true;     
                $mail->Username = 'test@iabp.org.in';        
                $mail->Password = 'support@2019';    
                $mail->SMTPSecure = 'tls';   
                $mail->Port = 587;
                $mail->setFrom('info@enable.online', 'ENABLE');
                $mail->addAddress($emailid1, 'User');
                $mail->addBCC('faizan.kazi@enlyft.in', 'User'); 

                $mail->isHTML(true);
                $mail->Subject = 'Welcome To ENABLE';
                $mail->Body    = "<p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'>Hi,</p>
                <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'>We are happy to have you on board,</p>
                <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'>The thing you must know, <strong>ENABLE</strong> is designed to give your marketing activity maximum exposure using various trending digital platforms to get your brand recognized with right set of audience.</p>
                <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'>We provide <strong>TAILOR MADE</strong> solution with multiple platform options to give your business maximum exposure.</p>
                <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'>We take off your challenges like:
                <ul>
                    <li>Media Planning</li>
                    <li>Expense Planning</li>
                    <li>Budget Planning</li>
                    <li>Right Resource</li>
                </ul></p>
                <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'>We provide <strong>ZERO DEPENDENCY</strong> plan which is easy to execute &amp; value to your business.</p>
                <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'>Our media expert team will get in touch with you design the perfect media plan for your business to get maximum ROI</p>
                <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'>Regards, <br>ENABLE</p>
                <br>";
                if(!$mail->send()){
                    echo "fail";
                }
                else{
                    echo "success";
                }
        }
        else{
            echo "fail";
        }
    }
    else{
        echo "mandatory";
    }
}

if(isset($_POST['btnsubmit']) && $_SERVER['REQUEST_METHOD'] == "POST"){
    $uid = cleanup($_POST['uid']);
    $emailid = cleanup( $_POST['emailid'] );
    $contact = cleanup( $_POST['contact'] );
    $activity = cleanup( $_POST['activity'] );
    $category = cleanup( $_POST['category'] );
    $audience = cleanup( $_POST['audience'] );
    $agegroup = cleanup( $_POST['agegroup'] );
    $budget = cleanup( $_POST['budget'] );
    $complete = 1;
    $contactlen = strlen($contact);
    $mode = "Website";

    if(!empty($emailid) && !empty($contact)){
        if(!filter_var($emailid, FILTER_VALIDATE_EMAIL)){
            echo "Please Enter Valid Email ID";
            die();
        }
        if(preg_match("[gmail|yahoo|rediff]", $emailid)){
            echo "Please Enter Official Email ID";
            die();
        }
        if($contactlen !== 10){
            echo "Please Enter Valid Contact Number";
            die();
        }
        if(empty($activity) || empty($category) || empty($audience) || empty($agegroup) || empty($budget)){
            $complete = 0;
        }
        if(empty($activity)){
            $activity = "NA";
        }
        if(empty($category)){
            $category = "NA";
        }
        if(empty($audience)){
            $audience = "NA";
        }
        if(empty($agegroup)){
            $agegroup = "NA";
        }
        if(empty($budget)){
            $budget = "NA";
        }
            $insert = "INSERT INTO `userdata`(`userid`, `email`, `contact`, `activity`, `industry`, `audience`, `agegroup`, `budget`, `date`, `submitted`, `complete`,`mode`) VALUES ('$uid','$emailid','$contact','$activity','$category','$audience','$agegroup','$budget','$date','$datetime','$complete','$mode')";
            $result = mysqli_query($con, $insert);
            if($result){
                require_once 'PHPMailer-master/PHPMailerAutoload.php';
                $mail = new PHPMailer; 
                $mail->isSMTP();           
                $mail->Host = 'iabp.org.in';   
                $mail->SMTPAuth = true;     
                $mail->Username = 'test@iabp.org.in';        
                $mail->Password = 'support@2019';    
                $mail->SMTPSecure = 'tls';   
                $mail->Port = 587;
                $mail->setFrom('info@enable.online', 'ENABLE');
                $mail->addAddress($emailid, 'User');
                $mail->addBCC('faizan.kazi@enlyft.in', 'User'); 

                $mail->isHTML(true);
                $mail->Subject = 'Welcome To ENABLE';
                $mail->Body    = "<p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'>Hi,</p>
                <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'>We are happy to have you on board,</p>
                <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'>The thing you must know, <strong>ENABLE</strong> is designed to give your marketing activity maximum exposure using various trending digital platforms to get your brand recognized with right set of audience.</p>
                <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'>We provide <strong>TAILOR MADE</strong> solution with multiple platform options to give your business maximum exposure.</p>
                <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'>We take off your challenges like:
                <ul>
                    <li>Media Planning</li>
                    <li>Expense Planning</li>
                    <li>Budget Planning</li>
                    <li>Right Resource</li>
                </ul></p>
                <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'>We provide <strong>ZERO DEPENDENCY</strong> plan which is easy to execute &amp; value to your business.</p>
                <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'>Our media expert team will get in touch with you design the perfect media plan for your business to get maximum ROI</p>
                <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'>Regards, <br>ENABLE</p>
                <br>";
                if(!$mail->send()){
                    echo "fail";
                }
                else{
                    $mail1 = new PHPMailer; 
                    $mail1->isSMTP();           
                    $mail1->Host = 'iabp.org.in';   
                    $mail1->SMTPAuth = true;     
                    $mail1->Username = 'test@iabp.org.in';        
                    $mail1->Password = 'support@2019';    
                    $mail1->SMTPSecure = 'tls';   
                    $mail1->Port = 587;
                    $mail1->setFrom('info@enable.online', 'ENABLE');
//                    $mail1->addAddress($emailid, 'User');
                    $mail1->addBCC('faizan.kazi@enlyft.in', 'User'); 
                    $mail1->isHTML(true);
                    $mail1->Subject = 'ENABLE Lead - Website';
                    $mail1->Body = "<p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'>Hi, </p>
                    <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'>Please find the lead details below to connect for further requirements.</p><br>
                    <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'><span style'text-decoration:underline'><u><strong>Registration Details:</strong></u></span></p>
                    <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'><span>Email ID: $emailid</span></p>
                    <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'><span>Mobile Number: $contact</span></p><br>
                    <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'><span style'text-decoration:underline'><u><strong>Requirement Details:</strong></u></span></p>
                    <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'><span>Marketing Activity: $activity</span></p>
                    <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'><span>Industry: $category</span></p>
                    <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'><span>Target Audience: $audience</span></p>
                    <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'><span>Age Group: $agegroup</span></p>
                    <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'><span>Marketing Budget: $budget</span></p><br>
                    <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'>Please connect with customer for more information.</p><br>
                    <p style='font-family:Arial, Helvetica, san-serif; font-size:12px;'>Regards, <br>ENABLE - Internal</p>
                    <br>";
                    if(!$mail1->send()){
                        echo "fail";
                    }
                    else{
                        echo "Thank you for sharing the requirement, Our Team will connect with a Tailored media plan";
                    }
                }
            }
            else{
                echo mysqli_error($con);
            }
    }
    else{
        echo "Please fill Email ID and Contact Number Properly";
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