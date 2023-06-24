<?php
 @$con=mysqli_connect("localhost","root","","user");
  mysqli_query($con,"SET NAMES 'UTF8'");
 mysqli_query($con,"SET CHARACTER SET UTF8");

  $username="root";
  $password="";
   $conn=new PDO ("mysql:host=localhost;dbname=user;",$username,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES 'UTF8'")); 
  $conn->exec("SET CHARACTER SET UTF8");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>دكاتره عظام</title>
        <style>
             ul{
                list-style-type: none;
            }
            ul li{
                /* background-image:url(" imag/WIN_20211217_17_37_22_Pro.jpg"); */
                background-position:0px 5px;
                padding-left:20px;
                background-repeat:no-repeat;
             display:inline-block;
            }
            body
            {
                text-align: right;
                 background-color: lightcyan;
            }
            button{
                float:center;
                background:rgb(35,174,202);
                padding:10px 15px;
                color:#fff;
                border-radius:5px;
                margin-right:10px; height: 100%;
                width: fit-content;
                height: 100%;
                }
                input{
                float:center;
                padding:10px 15px;
                border-radius:5px;
                margin-right:10px;
                }
               select{
                float:center;
                padding:10px 15px;
                border-radius:5px;
                margin-right:10px;
               }
        </style>
    </head>
    <body>
        
            <div class ="card"style="border: 6px double ; border-color: red; text-align: center; background-color:lightpink;" >
            <form action="reservation.php ">
            <?php
            if(isset($_GET['search'])){
                $SEARCH = $conn->prepare("SELECT * FROM   bones WHERE Name LIKE :value
                  OR Part LIKE :Part  OR governorate LIKE :town  OR specialty LIKE :Specialty" );
                $SEARCH_VALUE="%".$_GET['Name']."%" ;

                $SEARCH->bindparam("value", $SEARCH_VALUE);       
              $SEARCH->bindparam("Part", $SEARCH_VALUE);
              $SEARCH->bindparam("town", $SEARCH_VALUE);
              $SEARCH->bindparam("Specialty", $SEARCH_VALUE);


                $SEARCH->execute();
                if(!$SEARCH->rowcount())
                {
                    echo" <h1> لا يوجد نتيجه بحث</h1>";}
                else{
                foreach($SEARCH AS $data ){
                    echo" <h1 style='font-style:italic;color:blueviolet;'>: اسم الدكتور</h1>";
                    echo"<h1> ". $data['Name']."</h1>" ;
                    echo" <h3>:التخصص <img src='imag/Screenshot 2022-08-07 191840.gif' </h3>";
                    echo "<h3> ". $data['specialty']."</h3>";
                    echo " <h2 style='color:seagreen'>&starf; &starf; &starf; &starf; &star;:التقييم العام من 250 زائر</h2>";

                    echo" <h1 style='font-style:italic;color:blueviolet;'>: معلومات عن الدكتور </h1>";
                    echo "<h3> ". $data['degree']."</h3>";
                    echo" <h3>:العنوان <img src= 'imag/Screenshot 2022-08-07 192958.gif'</h3>";
                    echo "<h3> ". $data['address']."</h3>";
                    echo" <h3>: المحافظه <img src='imag/Screenshot 2022-08-07 192958.gif'</h3>";
                    echo "<h3> ". $data['governorate']."</h3>";
                    echo" <h3>:السعر  <img src='imag/Screenshot 2022-08-07 193107.gif'</h3>";
                    echo "<h3> ". $data['price']."</h3>";
                    // echo" <h3>:وقت الانتظار </h3>";. $data['specialty']
                    // echo "<h3> ". $data['waiting']."</h3>";
                    echo" <h3>16676:للحجز الان كلم  </h3>";
                    echo"<button type='submit' >احجز الان</button>";echo"<br>";
                    echo"*********************************************************************************************************************" ; 
                        
                    } 
                }
            }
            ?>
            </form>
            </div>
        
            <div style="background-image:url(imag/Screenshot\ 2022-08-07\ 180455.gif);background-size: 100% 100%;" >
            <h2 style="color: red;">احجز مع افضل دكتور <u> عظام</u> في مصر</h2><br>
            <h3>  احجز اونلاين او كلم</h3><img src="imag/Screenshot 2022-08-07 171038.gif" alt=""><br>
            <p>دكتور واستشاري في جميع التخصصات   </p>

            <br>
            <header style="text-align: right; font-size: larger; display:inline;">

            <nav>
            <h1> <a href="project.php" class="logo"> مستشفي المستقبل التخصصي</a></h1>
            <h1> <a href="form.php"> انضم الان</a> </h1>
            <!-- sign up form -->
            <h3> <a href="enter.php">دخول</a></h3>
            <h3><a href="mailto:info@future-wedge.com"> اتصل بنا</a></h3>
            </nav>

            </header>

            <header >
            <nav id="بحث"  style=" font-size:larger; background-color:pink; border: 5px solid;">
            <form  method="GET" style="center;" >
            <ul>
            <li><button type="submit" name="search">ابحث</button></li>
            <li><input type="text" name="Name"    placeholder="ابحث هنا بالتخصص او اسم الدكتور او المحافظه">اكتب اسم الدكتور او التخصص او المحافظه  </li>
                   placeholder
            <!-- <li> <input list="التخصص" name="التخصص">

<datalist id="التخصص">

    <option value="كل  التأمينات">
    <option value="بوبا">
    <option value="نقابة اطباء القاهرة">
    <option value="ميد رايت">
    <option value="نقابة المهندسين">
    <option value="منصور جروب">
    <option value="وادي النيل">
</datalist>
<label> اختر التأمين</label></li>
            <li> <input list="المحافظة" name="المحافظة">

<datalist id="المحافظة">

    <option value="القاهرة">
    <option value="الجيزة">
    <option value="الأسكندرية">
    <option value="الدقهلية">
    <option value="الشرقية">
    <option value="المنوفية">
    <option value="القليوبية">
    <option value="البحيرة">
    <option value="الغربية">
    <option value="بور سعيد">
    <option value="دمياط">
    <option value="الإسماعلية">
    <option value="السويس">
    <option value="كفر الشيخ">
    <option value="الفيوم">
    <option value="بني سويف">
    <option value="مطروح">
    <option value="شمال سيناء">
    <option value="جنوب سيناء">
    <option value="المنيا">
    <option value="أسيوط">
    <option value="سوهاج">
    <option value="قنا">
    <option value="البحر الأحمر">
    <option value="الأقصر">
    <option value="أسوان">
    <option value="الواحات">
    <option value="الوادي الجديد">


</datalist>
<label>المحافظة</label>  </li>
            <li>
          <input list="Part" name="Part">

                            <datalist id="Part">

                                <option value="جلدية">
                                <option value="اسنان">
                                <option value="نفسي">
                                <option value="اطفال">
                                <option value="مخ واعصاب">
                                <option value="عظام">
                                <option value="نساء وتوليد">
                                <option value="انف واذن وحنجرة">

                            </datalist>
                            <lable for=""> التخصص</label>
</li> -->
            </form>
            </nav>
            </header>
                    </div>
                    <form action="reservation.php" method="post">
                    <section>
                    <!--****************دكتور  تامر يحيي ******************************-->
                    <div style="border: 4px solid; border-color: lightseagreen; text-align: center;">
                    <div class="a">
                    <h1 style="font-style:italic; color:lightseagreen;">
                    <?php $id='1';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[1];
                    ?>  
                    </h1>
                    <img src="https://cdn-dr-images.vezeeta.com/Assets/Images/SelfServiceDoctors/ENTae5e6006161765d0/Profile/150/doctor-hcc-hamer-yehia-orthopedic-and-rheumatology_20200429112418383.jpg" >
                    </div>
                    <br> 
                    <h3> 
                    <?php $id='1';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[2];
                    ?>  
                    </h3> <br>
                    <img src="imag/Screenshot 2022-08-07 164216.gif" alt="" > <caption>التقيم العام من الزوار</caption><br>
                    <caption>
                    <?php $id='1';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[3];
                    ?>  
                    </caption>

                    <img src="imag/Screenshot 2022-08-07 191840.gif" alt=""><br>
                    <caption>
                    <?php $id='1';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[5];
                    ?>  
                    </caption> 
                    <img src="imag/Screenshot 2022-08-07 192958.gif" alt=""><br>
                    <caption>الكشف:
                    <?php $id='1';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[4];
                    ?>   جنيه
                    </caption>
                    <img src="imag/Screenshot 2022-08-07 193107.gif" alt=""><br>
                    <button type="submit"> احجز الان</button>


                    <caption>مده الانتظار : 
                    <?php $id='1';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[7];
                    ?>   دقيقه
                    </caption>
                    <img src="imag/Screenshot 2022-08-07 193139.gif" alt="">  
                    </div>
                    <!-- ***********************دكتور براء حسن هلال **********************-->

                    <div style="border: 4px solid; border-color: lightseagreen; text-align: center;">
                    <div class="a">
                    <h1 style="font-style:italic; color:lightseagreen;"> 
                    <?php $id='2';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[1];
                    ?> 
                    </h1>
                    <img src="https://cdn-dr-images.vezeeta.com/Assets/Images/SelfServiceDoctors/ENTd56a5a/Profile/150/doctor-baraa-hassan-helal-orthopedics_20201012002039917.jpg" >
                    </div>
                    <br> 
                    <h3> 
                    <?php $id='2';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[2];
                    ?> 
                    </h3> <br>
                    <img src="imag/Screenshot 2022-08-07 164216.gif" alt="" > <caption>التقيم العام من الزوار</caption><br>
                    <caption>
                    <?php $id='2';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[3];
                    ?> 
                    </caption>

                    <img src="imag/Screenshot 2022-08-07 191840.gif" alt=""><br>
                    <caption>
                    <?php $id='2';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[5];
                    ?> 
                    </caption>
                    <img src="imag/Screenshot 2022-08-07 192958.gif" alt=""><br>
                    <caption>الكشف:
                    <?php $id='2';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[4];
                    ?>  جنيه
                    </caption>
                    <img src="imag/Screenshot 2022-08-07 193107.gif" alt=""><br>
                    <button type="submit"> احجز الان</button>

                    <caption>مده الانتظار :  
                    <?php $id='2';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[7];
                    ?>  دقيقه
                    </caption>
                    <img src="imag/Screenshot 2022-08-07 193139.gif" alt="">  
                    </div>



                    <!-- ******************* دكتور احمد السيوفي ********************** -->

                    <div style="border: 4px solid; border-color: lightseagreen; text-align: center;">
                    <div class="a">
                    <h1 style="font-style:italic; color:lightseagreen;">
                    <?php $id='3';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[1];
                    ?> 
                    </h1>
                    <img src="https://cdn-dr-images.vezeeta.com/Assets/Images/SelfServiceDoctors/ENT80251b96d762706a/Profile/150/ahmed-el-swify-orthopedics_20220724140222808.jpg" >
                    </div>
                    <br> 
                    <h3> 
                    <?php $id='3';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[2];
                    ?> 
                    </h3> <br>
                    <img src="imag/Screenshot 2022-08-07 164216.gif" alt="" >
                    <caption>التقيم العام من الزوار</caption><br>
                    <caption>
                    <?php $id='3';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[3];
                    ?> 
                    </caption>

                    <img src="imag/Screenshot 2022-08-07 191840.gif" alt=""><br>
                    <caption>
                    <?php $id='3';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[5];
                    ?> 
                    </caption> <img src="imag/Screenshot 2022-08-07 192958.gif" alt=""><br>
                    <caption>الكشف:
                    <?php $id='3';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[4];
                    ?>  جنيه
                    </caption>
                    <img src="imag/Screenshot 2022-08-07 193107.gif" alt=""><br>
                    <button type="submit"> احجز الان</button>

                    <caption>مده الانتظار : 
                    <?php $id='3';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[7];
                    ?>  دقيقه
                    </caption>
                    <img src="imag/Screenshot 2022-08-07 193139.gif" alt="">  
                    </div>


                    <!--************** دكتور احمد حامد دياب ********************* -->

                    <div style="border: 4px solid; border-color: lightseagreen; text-align: center;">
                    <div class="a">
                    <h1 style="font-style:italic; color:lightseagreen;">
                    <?php $id='4';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[1];
                    ?> 
                    </h1>
                    <img src="https://cdn-dr-images.vezeeta.com/Assets/Images/SelfServiceDoctors/ENT15d4a86f4e5a569/Profile/150/doctor-ahmed-hamid-diab-orthopedics_20220725234553829.jpg" >
                    </div>
                    <br> 
                    <h3>
                    <?php $id='4';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[2];
                    ?> 
                    </h3> <br>
                    <img src="imag/Screenshot 2022-08-07 164216.gif" alt="" ><caption>التقيم العام من الزوار</caption><br>
                    <caption>
                    <?php $id='4';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[3];
                    ?> 
                    </caption>

                    <img src="imag/Screenshot 2022-08-07 191840.gif" alt=""><br>
                    <caption>
                    <?php $id='4';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[5];
                    ?>    
                    </caption>
                    <img src="imag/Screenshot 2022-08-07 192958.gif" alt=""><br>
                    <caption>
                    الكشف:
                    <?php $id='4';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[4];
                    ?> 
                    جنيه
                    </caption>
                    <img src="imag/Screenshot 2022-08-07 193107.gif" alt=""><br>
                    <button type="submit"> احجز الان</button>

                    <caption>مده الانتظار : 
                    <?php $id='4';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[7];
                    ?>  دقيقه
                    </captio>
                    <img src="imag/Screenshot 2022-08-07 193139.gif" alt="">  
                    </div>


                    <!--**************** دكتور احمد فتحي الشيمي ************************** -->

                    <div style="border: 4px solid; border-color: lightseagreen; text-align: center;">
                    <div class="a">
                    <h1 style="font-style:italic; color:lightseagreen;">
                    <?php $id='5';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[1];
                    ?>     
                    </h1>
                    <img src="https://cdn-dr-images.vezeeta.com/Assets/Images/SelfServiceDoctors/ENT68fc2764af599400/Profile/150/doctor-ahmed-fathy-orthopedic-surgery_20180506232938726.jpg" ></div>
                    <br> 
                    <h3> 
                    <?php $id='5';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[2];
                    ?>
                    </h3> <br>
                    <img src="imag/Screenshot 2022-08-07 164216.gif" alt="" >
                    <caption>التقيم العام من الزوار</caption><br>
                    <caption>
                    <?php $id='5';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[3];
                    ?>  

                    </caption>

                    <img src="imag/Screenshot 2022-08-07 191840.gif" alt=""><br>
                    <caption>
                    <?php $id='5';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[5];
                    ?>
                    </caption> 
                    <img src="imag/Screenshot 2022-08-07 192958.gif" alt=""><br>
                    <caption>الكشف:
                    <?php $id='5';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[4];
                    ?> جنيه
                    </caption>
                    <img src="imag/Screenshot 2022-08-07 193107.gif" alt=""><br>
                    <button type="submit"> احجز الان</button>

                    <caption>مده الانتظار : 
                    <?php $id='5';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[7];
                    ?> دقيقه
                    </captio>
                    <img src="imag/Screenshot 2022-08-07 193139.gif" alt="">  
                    </div>


                    <!-- *************دكتور بهاء الدين سعيد الخضري ******************** -->


                    <div style="border: 4px solid; border-color: lightseagreen; text-align:      center;">
                    <div class="a">
                    <h1 style="font-style:italic; color:lightseagreen;">
                    <?php $id='6';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[1];
                    ?> 
                    </h1>
                    <img src="https://cdn-dr-images.vezeeta.com/Assets/Images/SelfServiceDoctors/ENTce8a5755d8e669b0/Profile/150/doctor-bahaa-eddin-said-orthopedic-surgery_20200501070859161.jpg" >
                    </div>
                    <br> 
                    <h3> 
                    <?php $id='6';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[2];
                    ?> 
                    </h3> <br>
                    <img src="imag/Screenshot 2022-08-07 164216.gif" alt="" ><caption>التقيم العام من الزوار</caption><br>
                    <caption>
                    <?php $id='6';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[3];
                    ?> 
                    </caption>

                    <img src="imag/Screenshot 2022-08-07 191840.gif" alt=""><br>
                    <caption> 
                    <?php $id='6';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[5];
                    ?> 
                    </caption> 
                    <img src="imag/Screenshot 2022-08-07 192958.gif" alt=""><br>
                    <caption>الكشف:
                    <?php $id='6';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[4];
                    ?>  جنيه
                    </caption>
                    <img src="imag/Screenshot 2022-08-07 193107.gif" alt=""><br>
                    <button type="submit"> احجز الان</button>

                    <caption>مده الانتظار :
                    <?php $id='6';
                    $query = mysqli_query($con,"select *from bones where ID='$id'");

                    echo mysqli_fetch_array($query)[7];
                    ?>  
                    دقيقه
                    </captio>
                    <img src="imag/Screenshot 2022-08-07 193139.gif" alt="">  
                    </div>





                                
                    </section>
                    </form>

                <footer>
                    <div style="text-align:center;border: 2px solid;background-color:pink;
                     background-image:url(https://www.mymauritius.travel/sites/default/files/inline-images/Practice-socialphysical-distancing_1.png) ;
                     background-size: 100% 100%; background-position: center center;">

                <p>---------------------------------------------</p>
                <p>---------------------------------------------</p>
                <p>---------------------------------------------</p>


                <h1>مستشفي المستقبل التخصصي</h1>
                        <a
                            href="http://https://play.google.com/store/apps/details?id=com.ionicframework.vezeetapatientsmobile694843&hl">
                            google play</a>
                
                        <a href="https://twitter.com/almostaqbalsa?s=11&t=51mGXYuaYtAPKx72J1dUew">app store</a>
                
                        <a href="https://www.facebook.com/FutureSpecializedHospital">facebook</a>
                
                        <a href="https://instagram.com/futurehospital1?igshid=YmMyMTA2M2Y=">instagram</a>
                
                        <a href="https://twitter.com/almostaqbalsa?s=11&t=51mGXYuaYtAPKx72J1dUew">twitter</a>
                
                        <a href="http://https://www.youtube.com/channel/UCMGnUdpkIdbeOpb2kB52zeg">youtube</a>
                
                    </div>
                                                
                                                
                </footer>                              
                                                                                           
                                                
                                                
                                                






        </body>
</html>