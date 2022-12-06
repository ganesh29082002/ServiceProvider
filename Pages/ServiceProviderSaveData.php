<?php
                                                                                $FNAME = $_POST['fname'];
                                                                                $LNAME = $_POST['lname'];
                                                                                // $Age = $_POST['lname'];

                                                                                $GMAIL = $_POST['gmail'];
                                                                                $GENDER = $_POST['gender'];
                                                                                $ADDRESS = $_POST['address'];
                                                                                $AADHAR = $_POST['uploadadhar'];
                                                                                $ADHARNO = $_POST['adharno'];
                                                                                $COMPANY = $_POST['company'];
                                                                                $REGISTERDATE = $_POST['regdate'];
                                                                                
                                                                                
                                                                                
                                                                                $DOB = $_POST['dbd'];
                                                                                $SCATEGORY = $_POST['selectCategory'];
                                                                                $SSERVICE = $_POST['selectService'];
                                                                                $PASSWORD = $_POST['password'];
                                                                                $CPASSWORD = $_POST['cpassword'];
                                                                                $MESSAGE = $_POST['message'];
                                                                                $STATE = $_POST['state'];
                                                                                $CITY = $_POST['city'];
                                                                                



$conn = mysqli_connect("localhost", "root", "", "miniproject") or die("connection feild");
$sql = "INSERT INTO serviceprovider (faname, lname, gmail, gender, companyName, address , city,state,registrtiondate, addharcard,addharnumber,dob,scategory,sservice,password,cpassword,desp) VALUES ('{$FNAME}','{$LNAME}','{$GMAIL}','{$GENDER}','{$COMPANY}','{$ADDRESS}','{$CITY}','{$STATE}',{$REGISTERDATE} ,'{$AADHAR}','{$ADHARNO}','{$DOB}'
,'{$SCATEGORY}','{$SSERVICE}','{$PASSWORD}','{$CPASSWORD}','{$MESSAGE}') ";
$result = mysqli_query($conn, $sql) or die("unSUCCESS");


    header("Location: http://localhost/MiniProject%20V.1/Pages/HomePage.php");
    echo "<SCRIPT> alert('YOU ARE SUCCESS REGISTER AS A SERVICE PROVIDER')  </SCRIPT> ";

    mysqli_close($conn);

