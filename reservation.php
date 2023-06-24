<?php
  @$con=mysqli_connect("localhost","root","","user");
  mysqli_query($con,"SET NAMES 'UTF8'");
  mysqli_query($con,"SET CHARACTER SET UTF8");


  $username1="root";
  $password1="";
  $conn=new PDO ("mysql:host=localhost;dbname=user;",$username1,$password1,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES 'UTF8'")); 
  $conn->exec("SET CHARACTER SET UTF8");
  //?>
   <div class ="card"style="border: 6px double ; border-color: red; text-align: center; background-color:lightblue;" >
    <form action="project.php">
  <?php

  if(isset($_POST['send'])){
    $SEARCH = $conn->prepare("SELECT * FROM  reservation WHERE username LIKE :value ");
    $SEARCH_VALUE="%". $_POST['username']."%";
        $SEARCH->bindparam("value", $SEARCH_VALUE);
    $SEARCH->execute();
    if(!$SEARCH->rowcount())
    {
        echo" <h1> انت ليس لديك حجز مسبق   </h1>";
      echo'  <h1> <a href="reservation.php"> احجز الان</a> </h1>';
    
    }
    else{
    foreach($SEARCH AS $data ){
        echo" <h1 style='font-style:italic;color:blueviolet;'> لديك حجز باسم : </h1>";
        echo"<h1> ". $data['username']."</h1>" ;
        echo" <h1 style='font-style:italic;color:blueviolet;'> التليفون : </h1>";
        echo "<h3> ". $data['phone']."</h3>";
        echo" <h3 style='font-style:italic;color:blueviolet;'>يوم الحجز : </h3>";
        echo "<h3>". $data['BookingDay']."</h3>";
        echo" <h3 style='font-style:italic;color:blueviolet;'>التخصص :  </h3>";
        echo "<h3>". $data['specialty']."</h3>";
        echo" <h3 style='font-style:italic;color:blueviolet;'>رقم الحجز :  </h3>";
        echo "<h3>". $data['ID']."</h3>";
        }
        }
    }
?>
</form>
  </div>
<?php
  if(isset($_POST["submitt"]))
  {
    
  @$username=$_POST['username'];
  @$National=$_POST['National'];
  @$phone=$_POST['phone'];
  @$Insurance=$_POST['Insurance'];
  @$Nationality=$_POST['Nationality'];
  @$date=$_POST['date'];
  @$specialty=$_POST['التخصص'];

    $sql="INSERT INTO reservation (username,IDNational,phone ,InsuranceNumber,Nationality,BookingDay,specialty)
    VALUES ('$username','$National','$phone','$Insurance','$Nationality','$date' ,'$specialty');";
     $q=mysqli_query($con,$sql);

  }
  if (isset($_POST["update"])){

    @$username=$_POST['username'];
  @$National=$_POST['National'];
  @$phone=$_POST['phone'];
  @$Insurance=$_POST['Insurance'];
  @$Nationality=$_POST['Nationality'];
  @$date=$_POST['date'];
  @$specialty=$_POST['التخصص']; 
$sql= "UPDATE reservation SET username='$username',specialty='$specialty', BookingDay='$date' WHERE InsuranceNumber=$Insurance";
$retval = mysqli_query( $con, $sql );
 if(! $retval )
 {
  die('لم يتم تعديل الحجز يرجي المحاوله ثانيه   ');
 }
 echo  '<h1>"تم تعديل الحجز بنجاح يمكنك الاستعلام عنه لان  </h1>';
 mysqli_close($con);
 }



  ?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>فورم الحجز</title>
  <link rel="stylesheet" href="css/styl.css">
</head>
<body>


  


  <div class="container">
    <h1><div class="title">للحجز</div></h1>
    <form  method="POST">
      <div class="user-details">
        <div>
        <!--name for username-->
        <div class="input-box">
          <span class="details">اسم المريض</span>
          <input type="text" placeholde="ادخل اسم المريض" name="username" required>
        </div>
        <!--name for National ID	-->
        <div class="input-box">
          <span class="details">الرقم القومي</span>
          <input type="text" placeholde="ادخل الرقم القومي" name="National">
        </div>
        <!--name for Insurance number	-->
        <div class="input-box">
          <span class="details">رقم التامين </span>
          <input type="text" placeholde="ادخل رقم التامين" name="Insurance">
        </div>
        <!-- for phone number	-->
        <div class="input-box">
          <span class="details">رقم التليفون</span>
          <input type="text" placeholde="ادخل رقم التلفون" name="phone">
        </div>
         <!-- for choose specialty	-->
         <div class="input-box">
          <lable for=""> التخصص</label>
          <input list="التخصص" name="التخصص">

                            <datalist id="التخصص">

                                <option value="جلدية">
                                <option value="اسنان">
                                <option value="نفسي">
                                <option value="اطفال">
                                <option value="مخ واعصاب">
                                <option value="عظام">
                                <option value="نساء وتوليد">
                                <option value="انف واذن وحنجرة">

                            </datalist>

          </div>
        <!-- for Booking day		-->
        <div class="date">
          <lable for="">يوم الحجز</label>
          <input type="date" name="date">
          </div>
        
          
        <!-- for Nationality-->
          <div class="gender-details">
            <input type="radio"  id="dot-1" name="Nationality" value="مصري">
            <input type="radio"  id="dot-2" name="Nationality" value="سوري">
            <input type="radio"  id="dot-3" name="Nationality" value="فلسطيني">
            <input type="radio"  id="dot-4" name="Nationality" value="جزائري">
            <span class="gender-title"> جنسيه المريض</span>
            <div class="category">
              <label for="dot-1">
                <span class="dot one"></span>
                <span class="gender">مصري</span>
              </label>
  
              <label for="dot-2">
                <span class="dot two"></span>
                <span class="gender">سوري</span>
              </label>
  
              <label for="dot-3">
                <span class="dot three"></span>
                <span class="gender">فلسطيني</span>
              </label>
  
              <label for="dot-4">
                <span class="dot four"></span>
                <span class="gender">جزائري</span>
              </label>
            </div> 
            <!-- for submitt-->
            <div class="button">
              <input type="submit" value="تاكيد الحجز" name="submitt" >
              <!-- <input type="submit" value="الاستعلام علي الحجز" name="send" > -->
          </div>
          <div class="button" style="pading: 5px; margin: 5px;"> 
          <input type="submit" value="الاستعلام علي الحجز" name="send" >
</div>
</div>
          <div class="button" style="pading: 5px; margin: 5px;"> 
          <input type="submit" value="تعديل علي الحجز" name="update" >
</div>
      </div>
       <h1> <a href="project.php"> للرجوع للصفحه الرئسيه </a> </h1>;

    </form>

  </body>
</html>