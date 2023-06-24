<!-- ناقص لينكات الفورم -->
<?php
@$con=mysqli_connect("localhost","root","","user");mysqli_query($con,"SET NAMES 'UTF8'");
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

      <title> افضل دكاترة مخ واعصاب</title>

      <link rel="stylesheet" href="two.css">

      <!-- import stylesheet -->
</head>
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


          <h1>  <a href="project.php" class="logo"> مستشفي المستقبل التخصصي</a></h1>

            <nav>

            <h1> <a href="form.php"> انضم الان</a> </h1>
            <!-- sign up form -->

                <h3>  <a href="enter.php">دخول</a></h3>

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

                        <h1 style="color: red; font-size: 25px;">اجحز مع افضل دكتور مخ واعصاب فى مصر</h1>
                        <p> احجز اونلاين او كلم 16676</p>
                        <p>١٥٠٠٠  دكتور -٩٠٠٠ استاذ واستشاري - اكثر من ٤٠ تخصص</p>
                  </div>
               
<br>
<br>
</div>
                  <div>
                  <nav id="بحث"  style=" font-size:larger; background-color:pink; border: 5px solid;">
            <form  method="GET" style="center;" >
            <ul>
            <li><button type="submit" name="search">ابحث</button></li>
            <li><input type="text" name="Name"    placeholder="ابحث هنا بالتخصص او اسم الدكتور او المحافظه">اكتب اسم الدكتور او التخصص او المحافظه  </li>
            <!-- <li><button type="submit" name="search">ابحث</button></li> -->

                   </form>
            </nav>
                  </div>
            </article>
            <br>
<br>
            <br>
            <h2> مخ واعصاب</h2>
            <div class="second">
            <article class="مخ واعصاب">
<!--****************كتور وائل محمود عزت******************************-->
                  <div class="first" >

                        <img src="image/doctor-wael--mahmoud-ezzat--neurology_20200818171726298.jpg" alt="">

                        <h1 style="color: red;font-size: 35px;" >
                        <?php $id='1';
                         $query = mysqli_query($con,"select *from brain where ID='$id'");

                         echo mysqli_fetch_array($query)[1];
                        ?> 
                        </h1>
                        <p >
                        <?php $id='1';
                         $query = mysqli_query($con,"select *from brain where ID='$id'");

                         echo mysqli_fetch_array($query)[2];
                        ?> 
                        </p>
                        <p style="color: blue;"></p>
                        <?php $id='1';
                         $query = mysqli_query($con,"select *from brain where ID='$id'");

                         echo mysqli_fetch_array($query)[3];
                        ?> 
                        </p>

                        <p> &starf; &starf; &starf; &starf; &starf; التقييم العام من 422 زائر</p>
                       
                  
                        <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                        <p> العنوان :- 
                        <?php $id='1';
                         $query = mysqli_query($con,"select *from brain where ID='$id'");

                         echo mysqli_fetch_array($query)[5];
                        ?> 
                        <b> <p>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</p></b>
                        </p>
                        <p>سعر الكشف:-
                        <?php $id='1';
                         $query = mysqli_query($con,"select *from brain where ID='$id'");

                         echo mysqli_fetch_array($query)[4];
                        ?>  جنيه
                        </p>
                        <p> مدة الانتظار:
                        <?php $id='1';
                         $query = mysqli_query($con,"select *from brain where ID='$id'");

                         echo mysqli_fetch_array($query)[7];
                        ?> دقيقه

                        </p>
                        <p> للاتصال :16676 بسعر المكالمة العادية</p>
                  

                
                        <h3 style="color: red;">معلومات عن الدكتور</h3>
                        <p>اخصائي مخ واعصاب</p>
                  </div>

            </article>

           

            <br>
           <hr>
            <br>
<!--*************************************************************-->
            <article>

                  <div class="first">
                    

                        <img src="image/doctor-moustafa-zakria-pediatrics-and-new-born_20170722114227.jpg" alt="">

                        <h1  style="color: red;font-size: 35px;">
                        <?php $id='2';
                         $query = mysqli_query($con,"select *from brain where ID='$id'");

                         echo mysqli_fetch_array($query)[1];
                        ?> 
                        </h1>

                        <p >
                        <?php $id='2';
                         $query = mysqli_query($con,"select *from brain where ID='$id'");

                         echo mysqli_fetch_array($query)[2];
                        ?> 
                        </p>
                        <p  style="color: blue;">
                         <?php $id='2';
                         $query = mysqli_query($con,"select *from brain where ID='$id'");

                         echo mysqli_fetch_array($query)[3];
                        ?> 
                        </p>

                        <p>  &starf; &starf; &starf; &starf; &starf;  التقييم العام من 148 زائر</p>
                        <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                        <p>العنوان:-
                        <?php $id='2';
                         $query = mysqli_query($con,"select *from brain where ID='$id'");

                         echo mysqli_fetch_array($query)[5];
                        ?> 
                        </p>
                        <b><p>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</p></b>

                        <p>سعر الكشف:- 
                              <?php $id='2';
                              $query = mysqli_query($con,"select *from brain where ID='$id'");
                              echo mysqli_fetch_array($query)[4];
                              ?> 
                         جنيه
                        </p>
                        <p> مدة الانتظار:-  
                              <?php $id='2';
                              $query = mysqli_query($con,"select *from brain where ID='$id'");
                              echo mysqli_fetch_array($query)[7];
                              ?> 
                         دقائق
                        </p>
                        <p> للاتصال :16676 بسعر المكالمة العادية</p>
                        <h3>معلومات عن الدكتور</h3>

                        <p>معلومات عن الدكتور<br>
                              استاذ طب الاطفال و استشاري طب اعصاب الاطفال -كلية طب - جامعة القاهرة</p>
                  </div>

            </article>
            <br>
            <hr>
            <br>
<!--************************كتور عبدالله مكي****************************************-->
            <article>

                  <div class="first">

                        <img src="image/doctor-abdullah-ahmed-meky-neurology_20171122032014231.jpg" alt="">

                        <h1 style="color: red;font-size: 35px;">
                        <?php $id='3';
                         $query = mysqli_query($con,"select *from brain where ID='$id'");

                         echo mysqli_fetch_array($query)[1];
                        ?> 
                        
                        </h1>
                        <?php $id='3';
                         $query = mysqli_query($con,"select *from brain where ID='$id'");

                         echo mysqli_fetch_array($query)[2];
                        ?> 
                        <p >
                        
                        </p>

                        <p style="color: blue;">
                        <?php $id='3';
                         $query = mysqli_query($con,"select *from brain where ID='$id'");

                         echo mysqli_fetch_array($query)[3];
                        ?> 
                        </p>
                        <p>  &starf; &starf; &starf; &starf; &starf;  التقييم العام من 456 زائر</p>
                        <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                        <p>العنوان:
                              <?php $id='3';
                              $query = mysqli_query($con,"select *from brain where ID='$id'");
                              echo mysqli_fetch_array($query)[5];
                              ?> 
                        </p>
                       <b> <p>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</p></b>

                        <p>
                              سعر الكشف:-
                        <?php $id='3';
                         $query = mysqli_query($con,"select *from brain where ID='$id'");
                         echo mysqli_fetch_array($query)[4];
                        ?>  جنيه
                        </p>
                        <p> مدة الانتظار:-
                              <?php $id='3';
                              $query = mysqli_query($con,"select *from brain where ID='$id'");
                              echo mysqli_fetch_array($query)[3];
                              ?>  
                        دقيقه
                        </p>
                        <p> للاتصال :16676 بسعر المكالمة العادية</p>

                  
                  

                        <h3> معلومات عن الدكتور</h3>

                        <p><br> استشاري أمراض المخ والاعصاب والطب النفسي وعلاج الادمان- أستاذ بكلية الطب الازهر ، م- دكتوراة الطب النفسى <br>وماجستير امراض المخ والاعصاب والطب النفسي - عضو في الجمعية المصرية للطب النفسي والجمعية المصرية للامراض العصبية والنفسية وجراحة الاعصاب- خبرة في جلسات العلاج النفسي والتنمية البشرية واضطرابات النوم وعلاج الادمان- برامج علاجية متكاملة لحالات التوحد وفرط الحركة والاضطرابات السلوكية وحالات التاخر الدراسي للاطفال مع توافر جهاز رسم مخ واختبارات نفسية ووحدة لعلاج الادمان بطرق متعددة ومتميزةة</p>
                  </div>
            </article>

            <br>
            <hr>
            <br>
<!--**********************************كتور احمد محمد فهمي************************-->
            <article>

                  <div  class="first">

                        <img src="image/doctor-ahmed-mohamed-fahmy.jpg" alt="">

                        <h3 style="color: red;font-size: 35px;">


                        <?php $id='4';
                              $query = mysqli_query($con,"select *from brain where ID='$id'");
                              echo mysqli_fetch_array($query)[1];
                              ?>  



                        </h3>

                        <p >
                               <?php $id='4';
                              $query = mysqli_query($con,"select *from brain where ID='$id'");
                              echo mysqli_fetch_array($query)[2];
                              ?>  
                        </p>

                        <p style="color: blue;">
                              <?php $id='4';
                              $query = mysqli_query($con,"select *from brain where ID='$id'");
                              echo mysqli_fetch_array($query)[3];
                              ?>  
                        </p>

                        <p> &starf; &starf; &starf; &starf; &starf; التقييم العام من 673 زائر</p>
                        <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                        <p>العنوان:
                              <?php $id='4';
                              $query = mysqli_query($con,"select *from brain where ID='$id'");
                              echo mysqli_fetch_array($query)[5];
                              ?>  

                        </p>
                        <b><P>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</P></b>

                        <p>سعر الكشف:-
                              <?php $id='4';
                              $query = mysqli_query($con,"select *from brain where ID='$id'");
                              echo mysqli_fetch_array($query)[4];
                              ?>   جنيه
                        </p>
                        <p> مدة الانتظار:-
                              <?php $id='4';
                              $query = mysqli_query($con,"select *from brain where ID='$id'");
                              echo mysqli_fetch_array($query)[7];
                              ?>  
                              دقيقة
                        </p>
                        <p> للاتصال :16676 بسعر المكالمة العادية</p>

                  
                        <h3>معلومات عن الدكتور</h3>
                        <p>استشارى المخ و الاعصاب</p>
                  </div>

            </article>

            <br>
            <hr>
            <br>

            <article>
<!--*******************************************************************************************-->
                  <div  class="first">

                        <img src="image/doctor-kamal-al-badawy-neurology_20181211214543156.jpg" alt="">

                        <h1 style="color: red;font-size: 35px;"> 
                              <?php $id='5';
                              $query = mysqli_query($con,"select *from brain where ID='$id'");

                              echo mysqli_fetch_array($query)[1];
                              ?> 
                        </h1>

                        <p >
                              <?php $id='5';
                              $query = mysqli_query($con,"select *from brain where ID='$id'");
                              echo mysqli_fetch_array($query)[2];
                              ?> 
                        </p>

                        <p style="color: blue;">
                              <?php $id='5';
                              $query = mysqli_query($con,"select *from brain where ID='$id'");
                              echo mysqli_fetch_array($query)[3];
                              ?> 
                        </p>

                        <p> &starf; &starf; &starf; &starf; &starf; التقييم العام من 992 زائر</p>
                        <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                        <p>العنوان:-
                              <?php $id='5';
                              $query = mysqli_query($con,"select *from brain where ID='$id'");
                              echo mysqli_fetch_array($query)[5];
                              ?> 
                        </p>
                        <b><P>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</P></b>

                        <p>سعر الكشف:-
                              <?php $id='5';
                              $query = mysqli_query($con,"select *from brain where ID='$id'");
                              echo mysqli_fetch_array($query)[4];
                              ?>  جنيه
                        </p>
                        <p> مدة الانتظار:-
                              <?php $id='5';
                              $query = mysqli_query($con,"select *from brain where ID='$id'");
                              echo mysqli_fetch_array($query)[7];
                              ?>  
                              دقيقة

                        </p>
                        <p> للاتصال :16676 بسعر المكالمة العادية</p>

                
                        <h3>معلومات عن الدكتور</h3>
                        <p>استشاري امراض المخ و الاعصاب و الامراض النفسية و علاج الإدمان</p>
                  </div>

            </article>

            <br>
            <hr>
            <br>
<!--*******************************كتور ايمن العزوني**********************************************-->
            <article>

                  <div  class="first">

                        <img src="image/doctor-aymen-elazony-neurology_20200806171340842.jpg" alt="">

                        <h1  style="color: red;font-size: 35px;">
                              <?php $id='6';
                              $query = mysqli_query($con,"select *from brain where ID='$id'");
                              echo mysqli_fetch_array($query)[1];
                              ?>
                        </h1>

                        <p  >
                              <?php $id='6';
                              $query = mysqli_query($con,"select *from brain where ID='$id'");
                              echo mysqli_fetch_array($query)[2];
                              ?>
                        </p>

                        <p  style="color: blue;">
                              <?php $id='6';
                              $query = mysqli_query($con,"select *from brain where ID='$id'");
                              echo mysqli_fetch_array($query)[3];
                              ?>
                        </p>

                        <p>  &starf; &starf; &starf; &starf; &starf;  التقييم العام من 924 زائر</p>
                        <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                        <p>العنوان:
                              <?php $id='6';
                              $query = mysqli_query($con,"select *from brain where ID='$id'");
                              echo mysqli_fetch_array($query)[5];
                              ?>
                        </p>
                        <b><P>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</P></b>

                        <p>سعر الكشف:- 
                              <?php $id='6';
                              $query = mysqli_query($con,"select *from brain where ID='$id'");
                              echo mysqli_fetch_array($query)[4];
                              ?> جنيه
                        </p>

                        <p> مدة الانتظار:-  
                              <?php $id='6';
                              $query = mysqli_query($con,"select *from brain where ID='$id'");
                              echo mysqli_fetch_array($query)[7];
                              ?> 
                              دقيقه
                        </p>

                        <p> للاتصال :16676 بسعر المكالمة العادية</p>

                  

                        <h3>معلومات عن الدكتور</h3>

                        <p>- مخ واعصاب بالغين و مخ واعصاب اطفال و نفسي بالغين دكتوراه في امراض المخ و الاعصاب<br>
                               ، جامعة عين شمس عضو الجمعيه الاوربيه لامراض المخ و الاعصاب ماجيستير الطب النفسي و علاج الادمان ، لندن</p> 
                  </div>

            </article>

      
      <br>
      <hr>
      <br>
</div>
      <article>
<!---->
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