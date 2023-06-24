<!-- ناقص لينكات الفورم -->
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
<html lang="en">

<head>

      <meta charset="UTF-8">

      <meta http-equiv=" X-UA-Compatible" content="IE=edge">

      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title> افضل دكاترة جلدية</title>

      <link rel="stylesheet" href="project.css">

      <!-- import stylesheet -->
      <style>
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
    echo" <h1> لا يوجد نتيجه بحث</h1>";
}
else{
foreach($SEARCH AS $data ){
    echo" <h1 style='font-style:italic;color:blueviolet;'>: اسم الدكتور</h1>";
    echo"<h1> ". $data['Name']."</h1>" ;
    echo" <h3>:التخصص <img src='imag/Screenshot 2022-08-07 191840.gif' </h3>";
    echo "<h3> ". $data['degree']."</h3>";
    echo " <h2 style='color:seagreen'>&starf; &starf; &starf; &starf; &star;:التقييم العام من 250 زائر</h2>";
    echo" <h1 style='font-style:italic;color:blueviolet;'>: معلومات عن الدكتور </h1>";
    echo "<h3> ". $data['specialty']."</h3>";
    echo" <h3>:العنوان <img src= 'imag/Screenshot 2022-08-07 192958.gif'</h3>";
    echo "<h3> ". $data['address']."</h3>";
    echo" <h3>: المحافظه <img src='imag/Screenshot 2022-08-07 192958.gif'</h3>";
    echo "<h3> ". $data['governorate']."</h3>";
    echo" <h3>:السعر  <img src='imag/Screenshot 2022-08-07 193107.gif'</h3>";
    echo "<h3> ". $data['price']."</h3>";
    echo" <h3>16676:للحجز الان كلم  </h3>";
    echo"<button type='submit' >احجز الان</button>";echo"<br>";
    echo"******************************************************************************************************************************************";

    }
    }
 }
   
    ?>
    </form>
</div>
    <div class="top">
   
<br>
<br>
      <header>


           <h1> <a href="project.php" class="logo"> مستشفي المستقبل التخصصي</a></h1>

            <nav>

            <h1> <a href="form.php"> انضم الان</a> </h1>
            <!-- sign up form -->


                 <h3> <a href="enter.php">دخول</a></h3>

                  <!-- sign in form -->

                  <a href="http://https://future-hospital.com/?fbclid=IwAR325kz3psDUdB5nhryW7lgzC4C5Zf40j7wIOlrY274ww7Xs5iItWXadmj0">google</a>

                  <!-- google link -->

                  <a href="mailto:info@future-wedge.com"> اتصل بنا</a>

                  <!-- hospital mail -->

            </nav>

      </header>

      <section>

            <article>
                  <div>

                        <h1 style="color: red; font-size: 25px;">اجحز مع افضل دكتور جلدية</h1>
                        <p> احجز اونلاين او كلم 16676</p>
                  </div>
               
<br>
<br>
</div>
<div>
                  <nav id="بحث"  style=" font-size:larger; background-color:pink; border: 5px solid;">
            <form  method="GET" style="center;" >
            <ul>
            <li><button type="submit" name="search">ابحث</button></li>
            <li><input type="text" name="Name"    placeholder="ابحث هنا بالتخصص او اسم الدكتور او المحافظه">:اكتب اسم الدكتور او التخصص او المحافظه  </li>
            

                   </form>
            </nav>
                  </div>
                 
            </article>
            <br>
<br>
            <br>
            <div class="second">
            <article class="جلديه">
<div>
      <!--******************دكتورة قمرية البنا******************************-->
                  <div class="first" >

                        <img src="media/قمرية.png" alt="">

                        <h3 style="color: red;font-size: 23px;" >
                        <?php $id='1';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");

                         echo mysqli_fetch_array($query)[1];
                        ?> 
                        </h3>
                        <p style="font-size: 16px;"><b>
                              <?php $id='1';
                        $query = mysqli_query($con,"select *from leather where ID='$id'");
                                    echo mysqli_fetch_array($query)[2];
                              ?> 
                        </b></p>
                        <p style="color: blue;">
                        <?php $id='1';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");

                         echo mysqli_fetch_array($query)[3];
                        ?> 
                        <p> &starf; &starf; &starf; &starf; &starf;  التقييم العام من 172 زائر</p>
                       
                  
                        <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                        <p>  
                              العنوان:
                        <?php $id='1';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");

                         echo mysqli_fetch_array($query)[5];
                        ?> 
                        </p>
                      <!--  <pre>شارع عبد الحميد لطفي متفرع من شارع البطل احمد عبد العزيز </pre>-->
                      
                      <b><p>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</p></b>
                        <p>  سعر الكشف:-
                        <?php $id='1';
                              $query = mysqli_query($con,"select *from leather where ID='$id'");

                              echo mysqli_fetch_array($query)[4];
                        ?>  
                        جنيه</p>
                        <p> مدة الانتظار:- 
                        <?php $id='1';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[7];
                        ?>  
                        دقيقة</p>
                        <p> للاتصال :16676 بسعر المكالمة العادية</p>
                  

                
                        <h4 style="color: red;">معلومات عن الدكتور</h4>
                        <p>اخصائية الجلدية والتجميل والليزر</p>
                  </div>

            </article>

            <br>
            <hr>
            <br>

            <article>
<!--***********************************دكتور عزمي عبد اللطيف-->
                  <div  class="first">

                        <img src="media/Screenshot 2022-08-07 at 15-47-18 دكتور عزمي عبد اللطيف أستاذ جلدية فيزيتا.png" alt="">

                        <h3 style="color: red;font-size: 23px;" >
                        <?php $id='2';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[1];
                        ?>  
                        </h3>
                        <p  style="font-size: 16px;"><b>
                        <?php $id='2';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[2];
                        ?>  
                        </b></p>

                        <p style="color: blue;">
                        <?php $id='2';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[3];
                        ?>  
                        </p>
                        <p>  &starf; &starf; &starf; &starf; &starf; التقييم العام من 763 زائر</p>
                        <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                        <p>
                              العنوان:
                        <?php $id='2';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[5];
                        ?>  
                        </p>

                        <b><p>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</p></b>

                        <p>سعر الكشف:-
                        <?php 
                         $id='2';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[4];
                        ?>   جنيه
                        </p>
                        <p> مدة الانتظار:-
                        <?php 
                         $id='2';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[7];
                        ?>  
                         دقيقة
                        </p>
                        <p> للاتصال :16676 بسعر المكالمة العادية</p>
                 

                
                        <h4>معلومات عن الدكتور</h4>
                        <p>علاج ضوئى و علاج الميثوثيرابى و حقن البوتوكس و الفيلر. <br>جلسات بلازما للشعر و البشرة . جلسات نضاره
                              البشره عن طريق جهاز الديرمابريشن<br> تقليص المسامات المتضخمة و الحد من ندبات حب الشباب و علاج العقم
                              و
                              الضعف الجنس و سرعة القذف دكتوراه الامراض الجلدية<br> و التناسلية و العقم , زميل الجمعية الامريكية
                              للخصوبة , زميل الجمعية الامريكية للامراض الجلدية و عضو الجمعية الاوروبية للامراض الجلدية </p>

                  </div>
            </article>
<!--***********************************لمياء**************************************-->
            <br>
           <hr>
            <br>

            <article>

                  <div class="first">
                    

                        <img src="media/لمياء.png" alt="">

                        <h3  style="color: red;font-size: 23px;">
                        <?php 
                         $id='3';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[1];
                        ?>  
                        </h3>

                        <p style="font-size: 16px;">
                        <?php 
                         $id='3';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[2];
                        ?>  
                        </p>
                        <!--<p  style="color: blue;">دكتورة جلدية متخصص في جلدية اطفال، تجميل وليزر و جلدية بالغين</p>-->

                        <p>  &starf; &starf; &starf; &starf; &starf; التقييم العام من 60 زائر</p>
                        <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                        <p>
                              العنوان:
                        <?php 
                         $id='3';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[5];
                        ?>  
                        </p>
                        <b><p>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</p></b>

                        <p >سعر الكشف:-
                        <?php 
                              $id='3';
                              $query = mysqli_query($con,"select *from leather where ID='$id'");
                              echo mysqli_fetch_array($query)[4];
                        ?>   جنيه
                        </p>
                        <p> مدة الانتظار:-
                        <?php 
                         $id='3';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[7];
                        ?>  
                         دقائق
                        </p>
                        <p> للاتصال :16676 بسعر المكالمة العادية</p>

                 

                  

                        <h4>معلومات عن الدكتور</h4>

                        <p>استشاري امراض الجلد والتجميل الغير جراحي , عضو الجمعية الامريكية<br> لتجميل الجلد ، عضو الجمعية الاروبية
                              للامراض الجلدية . حقن البوتوكس والفلير ، ليزر لازالة الشعر ، علاج علامات تقدم السن <br>، ليزر لشد الوجه
                              و خيوط لشد الوجه . وعلاج الحبوب و اثار الحبوب والحفر و اثار الجروح<br> ، اجهزة شد الجسم و التخسيس ، علاج
                              جميع مشاكل الشعر و التساقط ، عمليات زراعة الشعر<br> . دكتور لمياء متواجدة يوم السبت و الخميس يتواجد
                              اطباء مساعدين يقومون بالخدمات التاليه <br>: الليزر -التقشير -ديرمابن -ميزوثرابي - بلازما</p>
                  </div>

            </article>
            <br>
            <hr>
            <br>
                             <!--******************رفيان*****************-->
            <article>

                  <div class="first">

                        <img src="media/رفيان.png" alt="">

                        <h3 style="color: red;font-size: 23px;">
                        <?php 
                         $id='4';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[1];
                        ?>  
                        </h3>

                        <p style="font-size: 16px;">
                        <?php 
                         $id='4';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[2];
                        ?>  
                        </p>

                        <p style="color: blue;">   
                         <?php 
                         $id='4';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[3];
                        ?>  
                        </p>

                        <p> &starf; &starf; &starf; &starf; &starf;  التقييم العام من 435 زائر</p>
                        <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                        <p>  
                              العنوان:
                         <?php 
                         $id='4';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[5];
                        ?>  
                        </p>
                        <p ><b>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</p></b>

                        <p >سعر الكشف:-   
                         <?php 
                         $id='4';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[4];
                        ?>   جنيه
                        </p>
                        <p> مدة الانتظار:-    
                        <?php 
                         $id='4';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[7];
                        ?>  دقيقة
                        </p>
                        <p> للاتصال :16676 بسعر المكالمة العادية</p>

                  
                  

                        <h4> معلومات عن الدكتور</h4>

                        <p>استشاري الجلديه و التجميل والليزر. عضو الجمعيه الامريكيه للجلديه و التجميل.<br> عضو الجمعيه الاوربيه
                              للجلديه و التجميل.</p>
                  </div>
            </article>

            <br>
            <hr>
            <br>

            <article>
<!--***********************دكتور سالم صلاح سالم***************************************-->
                  <div  class="first">

                        <img src="media/سالم.png" alt="">

                        <h3 style="color: red;font-size: 23px;">
                        <?php 
                         $id='5';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[1];
                        ?>  
                        </h3>

                        <p style="font-size: 16px;">
                        <?php 
                         $id='5';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[2];
                        ?> 
                        </p>

                        <p style="color: blue;">
                        <?php 
                         $id='5';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[3];
                        ?> 
                        </p>

                        <p> &starf; &starf; &starf; &starf; &starf;  التقييم العام من 294 زائر</p>
                        <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                        <p>العنوان:
                        <?php 
                         $id='5';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[5];
                        ?> 
                        </p>
                      <b>  <P>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</P></b>

                        <p>سعر الكشف:-
                        <?php 
                         $id='5';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[4];
                        ?>  جنيه</p>
                        <p> مدة الانتظار:-
                        <?php 
                         $id='5';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[7];
                        ?> دقيقة
                        </p>
                        <p> للاتصال :16676 بسعر المكالمة العادية</p>

                  
                        <h4>معلومات عن الدكتور</h4>
                        <p>نقدم جميع خدمات علاج وتجميل الجلد والشعر والأظافر بأحدث العلاجات والأجهزة.</p>
                  </div>

            </article>

            <br>
            <hr>
            <br>
<!--*****************************************************-->
            <article>

                  <div  class="first">

                        <img src="media/محمد السيد حسن.png" alt="">

                        <h3 style="color: red;font-size: 23px;">
                        <?php 
                         $id='6';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[1];
                        ?> 
                        </h3>

                        <p style="font-size: 16px;">
                        <?php 
                         $id='6';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[2];
                        ?> 
                        </p>

                        <p style="color: blue;">
                        <?php 
                         $id='6';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[3];
                        ?> 
                        </p>

                        <p> &starf; &starf; &starf; &starf; &starf;التقييم العام من 1150 زائر</p>
                        <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                        <p>العنوان:-
                        <?php 
                         $id='6';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[5];
                        ?> 
                        </p>
                        <b><P>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</P></b>

                        <p>سعر الكشف:-
                        <?php 
                         $id='6';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[4];
                        ?>  جنيه
                        </p>
                        <p> مدة الانتظار:-
                        <?php 
                         $id='6';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[7];
                        ?> دقيقة
                        </p>
                        <p> للاتصال :16676 بسعر المكالمة العادية</p>

                
                        <h4>معلومات عن الدكتور</h4>
                        <p>امراض الجلدية والتناسلية والتجميل والليزر عضو الجمعية الأوروبية للتجميل والليزر</p>
                  </div>

            </article>

            <br>
            <hr>
            <br>
<!--******************************************************************-->
            <article>

                  <div  class="first">

                        <img src="media/مصطفي سند.png" alt="">

                        <h3  style="color: red;font-size: 23px;"> 
                        <?php 
                         $id='7';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[1];
                        ?> 
                        </h3>

                        <p  style="font-size: 16px;">
                        <?php 
                         $id='7';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[2];
                        ?> 
                        </p>

                        <p  style="color: blue;">
                        <?php 
                         $id='7';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[3];
                        ?> 
                        </p>

                        <p>  &starf; &starf; &starf; &starf; &starf;  التقييم العام من 198 زائر</p>
                        <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                        <p>
                              العنوان:-
                        <?php 
                         $id='7';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[5];
                        ?> 
                        </p>
                        <b><P>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</P></b>
                        <p>سعر الكشف:-
                         <?php 
                         $id='7';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[4];
                        ?>  جنيه
                        </p>

                        <p> مدة الانتظار:
                         <?php 
                         $id='7';
                         $query = mysqli_query($con,"select *from leather where ID='$id'");
                         echo mysqli_fetch_array($query)[7];
                        ?>  دقيقة</p>

                        <p> للاتصال :16676 بسعر المكالمة العادية</p>

                  

                        <h4>معلومات عن الدكتور</h4>

                        <p>دكتور مصطفى سند متخصص فى منظار الشعر والجلد، <br>وهو عضو الجمعية الأوروبية للأمراض الجلدية والتناسلية
                              وأمراض المناعة والحساسية،<br> حاصل على الزمالة المصرية للأمراض الجلدية وماجيستير أمراض الجلدية والذكورة،
                              كما لديه خبرة في أمراض جلد الأطفال، </p>
                  </div>

            </article>

            <br>
            <hr>
            <br>

            <article>
<!--*******************************اماني****************************************-->
                  <div  class="first">

                        <img src="media/اماني.png" alt="">

                        <h3  style="color: red;font-size: 23px;">
                              <?php 
                              $id='8';
                              $query = mysqli_query($con,"select *from leather where ID='$id'");
                              echo mysqli_fetch_array($query)[1];
                              ?> 
                        </h3>

                        <p style="font-size: 16px;">
                              <?php 
                              $id='8';
                              $query = mysqli_query($con,"select *from leather where ID='$id'");
                              echo mysqli_fetch_array($query)[2];
                              ?> 
                        </p>

                        <p  style="color: blue;">
                              <?php 
                              $id='8';
                              $query = mysqli_query($con,"select *from leather where ID='$id'");
                              echo mysqli_fetch_array($query)[3];
                              ?> 
                        </p>

                        <p> &starf; &starf; &starf; &starf; &starf;   التقييم العام من 902 زائر</p>
                        <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                        <p>العنوان:-
                              <?php 
                              $id='8';
                              $query = mysqli_query($con,"select *from leather where ID='$id'");
                              echo mysqli_fetch_array($query)[5];
                              ?> 
                        </p>
                        <b><P>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</P></b>

                        <p>سعر الكشف:-
                               <?php 
                              $id='8';
                              $query = mysqli_query($con,"select *from leather where ID='$id'");
                              echo mysqli_fetch_array($query)[4];
                              ?>  جنيه
                        </p>

                        <p> مدة الانتظار:- 
                              <?php 
                              $id='8';
                              $query = mysqli_query($con,"select *from leather where ID='$id'");
                              echo mysqli_fetch_array($query)[7];
                              ?>  دقيقة
                        </p>

                        <p> للاتصال :16676 بسعر المكالمة العادية</p>

                 
                        <h4>معلومات عن الدكتور</h4>

                        <p>علاج أمراض الجلد و الشعر العناية بالبشرة تقشير كيميائى إزالة الشعر بالليزر<br> تجديد البشرة بالليزر جلسات
                              PRP فيلرز - بوتكس ماجيستير الأمراض الجلدية و التجميل و الليزر دبلوم الليزر و تجميل <br>الجلد - القصر
                              العينى - جامعة القاهرة عضو الجمعية الأفروأسيوية للتجميل و الليزر </p>
                  </div>

            </article>

            <br>
            <hr>
            <br>

            <article>
<!--********************************حسام الدين********************************-->
                  <div  class="first">

                        <img src="media/حسام الدين.png" alt="">

                        <h3 style="color: red;font-size: 23px;">
                              <?php 
                              $id='9';
                              $query = mysqli_query($con,"select *from leather where ID='$id'");
                              echo mysqli_fetch_array($query)[1];
                              ?> 
                        </h3>

                        <p style="font-size: 16px;">
                              <?php 
                              $id='9';
                              $query = mysqli_query($con,"select *from leather where ID='$id'");
                              echo mysqli_fetch_array($query)[2];
                              ?> 
                        </p>

                        <p style="color: blue;">
                              <?php 
                              $id='9';
                              $query = mysqli_query($con,"select *from leather where ID='$id'");
                              echo mysqli_fetch_array($query)[3];
                              ?> 
                        </p>

                        <p> &starf; &starf; &starf; &starf; &starf;  التقييم العام من 276 زائر</p>
                        <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                        <p>العنوان:-
                              <?php 
                              $id='9';
                              $query = mysqli_query($con,"select *from leather where ID='$id'");
                              echo mysqli_fetch_array($query)[5];
                              ?>
                         </p>
                        <b><P>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</P></b>

                        <p>سعر الكشف:-
                              <?php 
                              $id='9';
                              $query = mysqli_query($con,"select *from leather where ID='$id'");
                              echo mysqli_fetch_array($query)[4];
                              ?>  جنيه
                        </p>

                        <p> مدة الانتظار:- 
                              <?php 
                              $id='9';
                              $query = mysqli_query($con,"select *from leather where ID='$id'");
                              echo mysqli_fetch_array($query)[7];
                              ?>  دقيقة
                        </p>

                        <pre> للاتصال :16676 بسعر المكالمة العادية</pre>

                 

                        <h4>معلومات عن الدكتور</h4>

                        <p>استشاري الامراض الجلدية والتناسلية والعقم - عضو الجمعية الامريكية لامراض الجلد والتناسلية والليزر</p>
                  </div>

            </article>

            <br>
            <hr>
            <br>

            <article>
<!--****************دكتورة سهير طه***********************************************-->
                  <div  class="first">

                        <img src="media/سهير.png" alt="">

                        <h3 style="color: red;font-size: 23px;">
                              <?php 
                              $id='10';
                              $query = mysqli_query($con,"select *from leather where ID='$id'");
                              echo mysqli_fetch_array($query)[1];
                              ?> 
                        </h3>

                        <p style="font-size: 16px;">
                               <?php 
                              $id='10';
                              $query = mysqli_query($con,"select *from leather where ID='$id'");
                              echo mysqli_fetch_array($query)[2];
                              ?> 
                        </p>

                        <p style="color: blue;"> 
                              <?php 
                              $id='10';
                              $query = mysqli_query($con,"select *from leather where ID='$id'");
                              echo mysqli_fetch_array($query)[3];
                              ?> 
                        </p>

                        <p>  &starf; &starf; &starf; &starf; &starf;  التقييم العام من 478 زائر</p>
                        <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                        <p>العنوان: 
                              <?php 
                              $id='10';
                              $query = mysqli_query($con,"select *from leather where ID='$id'");
                              echo mysqli_fetch_array($query)[5];
                              ?> 

                        </p>
                        <b><P>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</P></b>

                        <p>سعر الكشف:- 
                              <?php 
                              $id='10';
                              $query = mysqli_query($con,"select *from leather where ID='$id'");
                              echo mysqli_fetch_array($query)[4];
                              ?>  جنيه
                        </p>

                        <p> مدة الانتظار:- 
                              <?php 
                              $id='10';
                              $query = mysqli_query($con,"select *from leather where ID='$id'");
                              echo mysqli_fetch_array($query)[7];
                              ?> 
                              دقيقة
                        </p>

                        <p> للاتصال :16676 بسعر المكالمة العادية</p>

                 

                        <h4>معلومات عن الدكتور</h4>

                        <p>ماجستير الأمراض الجلدية والتجميل كلية الطب جامعة الأزهر الزمالة المصرية في الامراض الجلدية </p>
                  </div>

            </article>
        </div>
            <br>
            <hr>
            <br>
    </div>
    <!--********************************************************************-->
            <article>

                  <div class="finsh">

                        <h1 style="color:red ;">اسئلة مكررة</h1>

                        <h3  style="color:blue ;">ازاي احجز موعد في نفس اليوم مع دكتور جلدية؟</h3>
                        <p>تستطيع أن تدخل على موقع أو تطبيق مستشفي المستقبل التخصصي <br>وتبحث عن دكاترة جلدية في منطقتك، اختار
                              'اليوم' من المواعيد
                              المتاحة في محدد البحث اعلى الصفحة واحجز في أقل من دقيقة.</p>

                        <h3  style="color:blue ;">ازاي اقدر ابحث عن دكتور جلدية تابع للتأمين الخص بي</h3>

                        <p>مستشفي المستقبل التخصصي توفر لك فرصة البحث عن دكاترة جلدية<br> يقبلون التامين الخاص بك على وجه التحديد.
                              اختار شركه التامين
                              الخاصة بك من محدد البحث اعلى الصفحة واحجز في أقل من دقيقة.</p>

                        <h3  style="color:blue ;">ازاي اقدر احجز موعد من علي الانترنت مع دكتور جلدية</h3>

                        <P>مستشفي المستقبل التخصصي هي خدمه مجانيه على الانترنت، تساعد المرضى في ايجاد دكاترة جلدية أو أي تخصص
                              آخر وحجز ميعاد
                              فورا. ثم عند اختيار الموعد المطلوب والمنطقة يمكنك اختيار شركة التامين الخاصة بك <br>اذا توفر لديك.
                              وبناءا على المعلومات التي ادخلتها، ستظهر لك قائمه بكل الدكاترة الذين يطابقون معايير البحث، بالاضافة
                              لقائمة مواعيدهم المتاحة.</P>

                        <h3  style="color:blue ;"> هل اقدر اختار دكتور جلدية</h3>

                        <P>عند البحث عن دكاترة جلدية في مستشفي المستقبل التخصصي، تستطيع تحديد نتائج البحث الخاصة بك حسب الجنس،
                              بالاضافة لمعايير<br>
                              بحث اخرى. وبهذه الطريقة، سيتم عرض الدكاترة الذين يطابقون تفضيلاتك فقط.</P>

                        <h3  style="color:blue ;">هل اقدر ابحث عن مواعيد ف نفس اليوم لدكتور جلدية</h3>

                        <P>تستطيع استخدام بحث مستشفي المستقبل التخصصي للعثور على دكاترة جلدية حسب الاعلى تصنيفا من خلال تقييمات
                              المرضى السابقين<br>
                              الذين قاموا باتمام الزيارة حيث ان في كل مرة يكمل فيها المريض موعد محجوز من على مستشفي المستقبل
                              التخصصي، تتم دعوته<br>
                              لمراجعه وتقييم تجربته وابداء رأيه في الزيارة.</P>

                  </div>

            </article>
            <br>
            <hr>
            <br>

            <article>
                  <div>

                        <h4  style="color:red ;">التخصصات الفرعية الأكثر اختياراً</h4>

                        <p  style="color:blue ;">دكتور جلدية بالغين - دكتور جلدية اطفال - دكتور تجميل وليزر - دكتور امراض تناسلية</p>

                        <h4  style="color:red ;" >جلدية</h4>

                        <p  style="color:blue ;">بتدور على احسن دكتور دكتور جلدية في مصر قريب منك؟ دلوقتي مستشفي المستقبل التخصصي بتوفرلك امكانية حجز
                              موعد مع افضل
                              دكاترة<br>
                              دكتور جلدية متخصصين في مجالات مختلفة مثل جلدية بالغين، جلدية اطفال، تجميل وليزر وغيرها.<br> احجز ميعادك
                              اونلاين مجانا من غير ما تدفع اي رسوم اضافية. وعشان نساعدك انك تختار انسب دكتور دكتور جلدية ليك، تقدر
                              تشوف تقييم مرضى حقيقيين وتجاربهم مع الدكاترة <br>,وكمان ممكن تعرف مستشفيات وعيادات دكتور جلدية في مصر
                              اللي
                              بتبقل تأمينك.</p>

                  </div>

            </article>

      </section>

      <footer>

            <div>

                  <h3>مستشفي المستقبل التخصصي</h3>

                  <a href="https://www.facebook.com/FutureSpecializedHospital">facebook</a>

                  <a href="https://instagram.com/futurehospital1?igshid=YmMyMTA2M2Y=">instagram</a>

                  <a href="https://twitter.com/almostaqbalsa?s=11&t=51mGXYuaYtAPKx72J1dUew">twitter</a>

                  <a href="http://https://www.youtube.com/channel/UCMGnUdpkIdbeOpb2kB52zeg">youtube</a>

            </div>
      </footer>

</body>
</html>