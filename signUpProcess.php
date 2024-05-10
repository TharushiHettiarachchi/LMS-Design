<?php
 include "connection.php";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$mobile = $_POST["mobile"];
$indexNo = $_POST["indexNo"];
$grade = $_POST["grade"];
$password = $_POST["password"];
$email = $_POST["email"];



if (empty($fname)) {
    echo ("Please enter your First Name");
} else if (strlen($fname) > 50) {
    echo ("First Name must have less than 50 characters");
} else if (empty($lname)) {
    echo ("Please enter your Last Name!!!");
} else if (strlen($lname) > 50) {
    echo ("Last Name must have less than 50 characters");
} else if (empty($email)) {
    echo ("Please enter your Email!!!");
} else if (strlen($email) >= 100) {
    echo ("Email must have less than 100 characters");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Invalid Email");
} else if (empty($password)) {
    echo ("Please enter your Password");
} else if (strlen($password) < 5 || strlen($password) > 20) {
    echo ("Password must be between 5 and 20 characters!");
} else if (empty($mobile)) {
    echo ("Please enter your Mobile Number");
} else if (strlen($mobile) > 10) {
    echo ("Mobile must have 10 Characters");
} else if (!preg_match("/07[0,1,2,4,5,6,7,8][0-9]/", $mobile)) {
    echo ("Invalid Mobile Number");
} else {

    $rs = Database::search("SELECT *FROM `student` WHERE `index_no`='" . $indexNo . "' OR `mobile`='" . $mobile . "'");
    $n = $rs->num_rows;

    if ($n > 0) {
        echo ("User with a same Index Number or Mobile Number already exists");
    } else {
        $d =  new DateTime();
        $tz =  new DateTimeZone("Asia/Colombo");
        $d->setTimezone($tz);
        $date = $d->format("Y-m-d H:i:s");

        Database::iud("INSERT INTO `student`(`fname`,`lname`,`email`,`mobile`,`password`,`index_no`,`date_registered`,`grade_grade_id`)
VALUES ('" . $fname . "','" . $lname . "','" . $email . "','" . $mobile . "','" . $password . "','" . $indexNo . "','" . $date . "','" . $grade . "')");
        echo ("Success");
    }
}
