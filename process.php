<?php

include "config.php";

date_default_timezone_set("Asia/Calcutta");
$date = date("Y-m-d");
$datetime = date('Y-m-d H:i:s');

if(isset($_POST['fourthform']) && $_SERVER['REQUEST_METHOD'] == "POST"){
    $uid = cleanup($_POST['uid']);
    $location1 = cleanup( $_POST['location1'] );
    $budget1 = cleanup($_POST['budget1']);
//    if(empty($location1) && empty($budget1)){
//        echo "mandatory";
//        die();
//    }
    if(empty($location1)){
        $location1 = "NA";
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
                    if($dindustry == "NA" || $dactivity == "NA" || $location1 == "NA" || $budget1 == "NA" || $demail == "NA" || $dcontact == "NA"){
                        $complete = 0;
                    }
                    else{
                        $complete = 1;
                    }
                    if(!empty($demail) && !empty($dcontact)){
                        if($location1 !== "NA" && $budget1 !== "NA"){
                            if($budget1 >= 10000){
                                $update = "UPDATE `userdata` SET `location` = '$location1', `budget` = '$budget1', `submitted` = '$datetime', `complete` = '$complete' WHERE `userid` = '$uid'";
                                $result1 = mysqli_query($con, $update);
                                if($result1){
                                    echo "success";
                                }
                            }
                            else{
                                echo "budgetless";
                            }
                        }
                        if($location1 == "NA" && $budget1 !== "NA"){
                            if($budget1 >= 10000){
                                $update = "UPDATE `userdata` SET `location` = '$location1', `budget` = '$budget1', `submitted` = '$datetime', `complete` = '$complete' WHERE `userid` = '$uid'";
                                $result1 = mysqli_query($con, $update);
                                if($result1){
                                    echo "success";
                                }
                            }
                            else{
                                echo "budgetless";
                            }
                        }
                        if($location1 !== "NA" && $budget1 == "NA"){
                            $update = "UPDATE `userdata` SET `location` = '$location1', `budget` = '$budget1', `submitted` = '$datetime', `complete` = '$complete' WHERE `userid` = '$uid'";
                            $result1 = mysqli_query($con, $update);
                            if($result1){
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
    $location = "NA";
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
        $insert = "INSERT INTO `userdata`(`userid`, `email`, `contact`, `activity`, `industry`, `location`, `budget`, `date`, `submitted`, `complete`,`mode`) VALUES ('$uid','$emailid1','$contact1','$activity','$category','$location','$budget','$date','$datetime','$complete','$mode')";
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
    //            $mail->addAddress('info@anciapp.com', 'Admin');
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
    $location = cleanup( $_POST['location'] );
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
        if(empty($activity) || empty($category) || empty ($location) || empty($budget)){
            $complete = 0;
        }
        if(empty($activity)){
            $activity = "NA";
        }
        if(empty($category)){
            $category = "NA";
        }
        if(empty($location)){
            $location = "NA";
        }
        
        if(empty($budget)){
            $budget = "NA";
            $insert = "INSERT INTO `userdata`(`userid`, `email`, `contact`, `activity`, `industry`, `location`, `budget`, `date`, `submitted`, `complete`,`mode`) VALUES ('$uid','$emailid','$contact','$activity','$category','$location','$budget','$date','$datetime','$complete','$mode')";
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
    //            $mail->addAddress('info@anciapp.com', 'Admin');
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
                    echo "Thank you for sharing the requirement, Our Team will connect with a Tailored media plan";
                }
            }
            else{
                echo mysqli_error($con);
            }
        }
        else if($budget >= 10000){
            $insert = "INSERT INTO `userdata`(`userid`, `email`, `contact`, `activity`, `industry`, `location`, `budget`, `date`, `submitted`, `complete`, `mode`) VALUES ('$uid','$emailid','$contact','$activity','$category','$location','$budget','$date','$datetime','$complete', '$mode')";
//            echo $insert;
            $result = mysqli_query($con, $insert);
//            echo $result;
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
    //            $mail->addAddress('info@anciapp.com', 'Admin');
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
                    echo "Thank you for sharing the requirement, Our Team will connect with a Tailored media plan";
                }
            }
            else{
                echo mysqli_error($con);
            }
        }
        else{
            echo "Budget cannot be less than 10000 INR";
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