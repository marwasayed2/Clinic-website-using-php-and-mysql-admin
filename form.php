
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv=" X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link rel="stylesheet" href=" css.css">
        <title>انضم الان</title>
        
    </head>
    <body>
<?php
// define variables and set to empty values*/
$nameErr = $phoneErr = $genderErr = $emailErr =$passwordErr= "";
$name = $phone = $gender=$password = $datea = $email = "";


 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {

              if (empty($_POST["name"])) {
                $nameErr = "Name is required";
              } else {
                 $name = test_input($_POST["name"]);
                // if (!preg_match("/^[a-z A-Z  ي-ا]*$/",$name)){ 
                //   $nameErr = "Only letters and white space allowed";
                // }
              }
              
              if (empty($_POST["phone"])) {
                $phoneErr = "phone  is required";
              } else {
                $phone = test_input($_POST["phone"]);
              }
                
              if (empty($_POST["email"])) {
                $emailErr = " email is required";
              } else {
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format";
                }
              }
            
              if (empty($_POST["password"])) {
                $passwordErr = " password is required";
              } else {
                $password = test_input($_POST["password"]);
              }
            
              if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
              } else {
                $gender = test_input($_POST["gender"]);
              }
          
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;}
  
  
?>
<h1 style=" background-color:blue;" >انضم الان   </h1>
<p><span class="error"> هذا الحقل مطلوب*</span></p>
<form method="post" action="login.php" accept-charset="utf-8">  
  <input type="text" name="name" placeholder="ادخل اسمك هنا">:الاسم
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
    <input type="text" name="phone">:رقم الموبيل
    <span class="error">* <?php echo $phoneErr;?></span>
  <br><br>
    <input type="email" name="email">:البريد الاكتروني
    <span class="error"> *<?php echo $emailErr;?></span>

  <br><br>
  <input type="date" name="date" >:تاريخ الميلاد
  <br><br>
  النوع:
  <input type="radio" name="gender" value="female">انثي
  <input type="radio" name="gender" value="male">ذكر
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="password" name="password"  placeholder=" ادخل كلمه مرور قويه">:كلمه المرور
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  
  <button type="submit" name="send"> send-ارسال</button>
<h4> هل مسجل بالفعل لدينا؟<a href="enter.php">دخول</a>
</h4>
</form>
<h1> <a href="project.php"> للرجوع للصفحه الرئسيه </a> </h1>;


</body>
</html>