<?php
  @$con=mysqli_connect("localhost","root","","user");
   mysqli_query($con,"SET NAMES 'UTF8'");
        mysqli_query($con,"SET CHARACTER SET UTF8");//للغه  العربيه
  if(isset($_POST["submit"]))
  {
    
  @$name=$_POST['name'];
  @$phone=$_POST['phone'];
  @$medicine=$_POST['medicine'];
  @$address=$_POST['address'];

    $sql="INSERT INTO pharmacy (username, namberphone ,medicine ,useraddress)
    VALUES ('$name','$phone','$medicine','$address');";
     
    $q=mysqli_query($con,$sql);

  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="hospital.css">
    <title>الصيدليه</title>
  </head>

  <body>
        <form method="POST">
            <div class="input-box">
                <label class="ww">اسم العميل</label>
                <input type="text" class="in" name="name"required>
              </div>

              <br>

                <div>
                  <label class="ww" >رقم التليفون</label>
                  <input type="phone" class="in" name ="phone" required   >
                </div>

                    <br>

                <div>
                  <label class="ww" >اسم الدواء</label>
                  <input type="text" class="in" name="medicine" required >
                </div>

                    <br>

                  <div>
                    <label class="ww" >العنوان</label>
                    <input type="text" class="in" name="address" required>
                  </div> 

                     <br>

                  <div classd="buttom">
                    <input type="submit" value='اطلب الان ' name='submit'>
                  </div>
                  <h1> <a href="project.php"> للرجوع للصفحه الرئسيه </a> </h1>;

            </div>
        </form> 
    </body>
</html>