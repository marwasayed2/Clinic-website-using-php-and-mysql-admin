<?php
$username="root";
$password1="";
$con=new PDO ("mysql:host=localhost;dbname=user;",$username,$password1,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES 'UTF8'")); 
$con->exec("SET CHARACTER SET UTF8");

$conn=new mysqli("localhost","root","","user");
mysqli_query($conn,"SET NAMES 'UTF8'");
mysqli_query($conn,"SET CHARACTER SET UTF8");




?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv=" X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link rel="stylesheet" href="enter.css">
        <title> دخول</title>
    </head>
    <body>
    <div class ="card"style="border: 6px double ; border-color: red; text-align: center; background-color:lightblue;" >
    <form action="project.php">
        <!-- لينك الواجهه هنا -->
<?php

if(isset($_GET['search'])){
$SEARCH = $con->prepare("SELECT * FROM  user WHERE email LIKE :value ");
//  OR governorate LIKE :value  ");
$SEARCH_VALUE="%".$_GET['email']."%";
    $SEARCH->bindparam("value", $SEARCH_VALUE);
$SEARCH->execute();
if(!$SEARCH->rowcount())
{
    echo" <h1> انت ليس لديك حساب   </h1>";
  echo'  <h1> <a href="form.php"> انضم الان</a> </h1>';

}
else{
foreach($SEARCH AS $data ){
    echo" <h1 style='font-style:italic;color:blueviolet;'>: اهلا بك  </h1>";
    echo"<h1> ". $data['name']."</h1>" ;
    echo" <h1 style='font-style:italic;color:blueviolet;'>:  التليفون  </h1>";
    echo "<h3> ". $data['phone']."</h3>";
    echo" <h3 style='font-style:italic;color:blueviolet;'>:البريد الاكتروني </h3>;
    echo '<h3>". $data['email'].'</h3>';

    echo"<button type='submit' > للرجوع للصفحه الرئيسه</button>";
    }
    }
}
   
?>   
    </form>
</div>

<?php
 $emailErr =$passwordErr= "";
$password =  $email = "";


 if ($_SERVER["REQUEST_METHOD"] == "GET")
 {
                
              if (empty($_GET["email"])) {
                $emailErr = " email is required";
              } else {
                $email = test_input($_GET["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format";
                }
              }
            
              if (empty($_GET["password"])) {
                $passwordErr = " password is required";
              } else {
                $password = test_input($_GET["password"]);
              }

// لتسجيل الخروج
                     if (isset($_GET["logout"])){
                $password=$_GET["password"];  
                   $in_sql="delete from user where password=$password";   
                   if($conn->query($in_sql)===true)
                   {
                       echo " <h2>     تم تسجيل الخروج بنجاح</h2>";  
                       echo'  <h1> <a href="project.php"> للرجوع للصفحه الرئسيه </a> </h1>';
// لينك الصفحه الرئسيه
          
                   }
                   else{
                       echo "error";
                   }
              }




          
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;}


  
?>

<h1 style=" background-color:rgb(35,174,202);" > دخول   </h1>
<p><span class="error"> هذا الحقل مطلوب*</span></p>
<form method="GET"  id="s" accept-charset="utf-8">  
  
    
    <input type="email" name="email" required>:البريد الاكتروني
    <span class="error"> *<?php echo $emailErr;?></span>
  <br><br>
  <input type="password" name="password" required>:كلمه المرور
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  <button type="submit" name="search"> دخول</button>
  <button type="submit" name="logout"> تسجيل الخروج</button>

</form>

</body>
</html>