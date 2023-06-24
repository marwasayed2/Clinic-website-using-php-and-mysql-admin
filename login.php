<!Doctype html>
<html>
    <head>
        <meta  charset="utf-8">

        <meta http-equiv=" X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
     body{
        text-align: center ;
        background-color:lightblue;
     }
     
</style>

</head>

<body>


<?php
//include "form.php";
// create connection

// define variables and set to empty values

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$datea = $_POST['date'];
$gender=$_POST['gender'];
$password =$_POST['password'];


if(!empty($name)  && !empty($phone)  && !empty($email)  && !empty($gender)  && !empty($password) )
{
            $servername = "localhost";
            $username = "root";
            $password1 = "";
            $dbname = "user";

            // Create connection
            $conn = new mysqli($servername, $username, $password1, $dbname);
            mysqli_query($conn,"SET NAMES 'UTF8'");        //لدعم اللغه العربيه 
         mysqli_query($conn,"SET CHARACTER SET UTF8");

            // $conn->query("COLLATE=utf8_decode");
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            else{
                echo 
                "DATEBASE is connected";
                echo"<br>";
            

                $SELECT="SELECT email From user Where email= ? Limit 1";
                $INSERT="INSERT Into user (name,phone,email,date,Gender,Password)
                values(?,?,?,?,?,?)";
                //prepare statement
                $stmt=$conn->prepare($SELECT);
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $stmt->bind_result($email);
                $stmt->store_result();
                $rnum=$stmt->num_rows;



                if($rnum==0){
                    $stmt->close();
                    $stmt=$conn->prepare($INSERT);
                    $stmt->bind_param("sssssi",$name,$phone,$email,$datea,$gender,$password);
                    $stmt->execute();
                    echo "<h1 >تم تسجيل البيانات بنجاح </h1>";
                    echo"<br";
                    echo " <h1> welcome $name </h1>";
                }else{
                    echo" <h1>شخص ما لديه بالفعل هذا الحساب</h1>";
                    echo"<br";
                    echo " <h1>  </h1>";
                    echo "<h1> $email </h1>";
                    echo" <h1><a href= form.php> لتسجيل مره اخري اضغط هنا   </a> </h1>";

                }

                $stmt->close();
                $conn->close();
            }
                
            
        

        }else{
   echo       "<h1> برجاء ادخال جميع البيانات المطلوبه</h1>";
   echo"<br>";
   echo"<h1>    الاسم,رقم الموبيل,البريد الالكتروني,النوع,كلمه المرور </h1>";
    echo" <h1><a href= form.php> الرجوع الي عمليه التسجيل</a> </h1>";
    die();
    }

?>

</body>
</html>