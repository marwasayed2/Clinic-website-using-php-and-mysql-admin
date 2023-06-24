<!-- ناقص لينكات الفورم -->
<!-- $starf; >>>> full star -->
<!-- &star; >> empty star -->
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

    <title>افضل دكاترة انف واذن وحنجرة</title>

    <link rel="stylesheet" href="three.css">

    <!-- import stylesheet -->

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
    // echo" <h3>:وقت الانتظار </h3>";. $data['دكتور مبروك عبد الخالق
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
    <header>

       <h1> <a href="project.php" class="logo"> مستشفي المستقبل التخصصي</a></h1>

        <nav>
        <h1> <a href="form.php"> انضم الان</a> </h1>
            <!-- sign up form -->

           <h3> <a href="enter.php">دخول</a></h3>

            <!-- sign in form -->

            <a
                href="http://https://future-hospital.com/?fbclid=IwAR325kz3psDUdB5nhryW7lgzC4C5Zf40j7wIOlrY274ww7Xs5iItWXadmj0">google</a>

            <!-- google link -->


            <a href="mailto:info@future-wedge.com"> اتصل بنا</a>

            <!-- hospital mail -->



        </nav>

    </header>

    <section>

        <article>
            <div>

                <h3>اجحز مع افضل دكتور انف واذن وحنجرة</h3>
                <p> احجز اونلاين او كلم 16676</p>
            </div>
            <div>
                  <nav id="بحث"  style=" font-size:larger; background-color:pink; border: 5px solid;">
            <form  method="GET" style="center;" >
            <ul>
            <li><button type="submit" name="search">ابحث</button></li>
 
            <li><input type="text" name="Name"    placeholder="ابحث هنا بالتخصص او اسم الدكتور او المحافظه">:اكتب اسم الدكتور او التخصص او المحافظه  </li>
            <!-- <li><button type="submit" name="search">ابحث</button></li> -->

                   </form>
            </nav>
                  </div>
          
        </article>
        <br>
    </div>
        <hr>
<div class="second">
        <article>
<!--*****************كتور مبروك عبد الخالق*********************************************-->
            <div class="first" >

                <img src="media2/doctor-mabrouk-abdelkhalek-ear-nose-and-throat_20201207062555843.jpg" alt="">

                <h1   >
                        <?php $id='1';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[1];
                        ?> 
                </h1>
                <p>
                        <?php $id='1';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[2];
                        ?> 
                </p>
                <p>
                        <?php $id='1';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[3];
                        ?> 
                </p>



                <p> &starf; &starf; &starf; &starf; &star;التقييم العام من 502 زائر </p>
                <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                <p> العنوان :-
                        <?php $id='1';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[5];
                        ?> 
                </p>
                <b><p>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</p></b>

                <p>سعر الكشف:- 
                        <?php $id='1';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[4];
                        ?>  جنيه
                </p>
                <p> مدة الانتظار:- 
                        <?php $id='1';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[7];
                        ?>  دقيقة
                </p>
                <p> للاتصال : 16676 بسعر المكالمة العادية</p>
            </div>

            <div>
                <h3>معلومات عن الدكتور</h3>
                <p>*سعر المنظار 200 ج غير شامل لسعر الكشف *أستاذ الأنف و الأذن و الحنجره <br>*دكتوراه الأنف و الأذن و
                    الحنجره *إستشاري الجراحات الدقيقه بالمعاهد المتخصصه و المستشفيات التعليميه<br> *عضو الجمعيه الأوروبيه
                    للجراحات الدقيقه و تجميل الأنف الوظيفي و مناظير الجيوب الأنفيه *عضو الجمعيه الأمريكيه لجراحات الأذن
                    الدقيقه و تحسين السمع <br>*عضو الجمعيه الأوروبيه لجراحات الأحبال الصوتيه و تحسين الصوت *التخصصات الفرعية
                    : تجميل الأنف الوظيفي،مناظير الجيوب الانفيه، جراحات الأذن الدقيقه،التصوير الحنجري، انف واذن اطفال،
                </p>
            </div>

        </article>

        <br>
        <hr>
        <br>
<!--***************دكتور أحمد عبد الخالق رضوان*****************************************-->
        <article>

            <div class="first" >

                <img src="media2/doctor-ahmed-radwan-ear--nose-and-throat_20191111235823079.jpg" alt="">
                <h1>
                        <?php $id='2';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[1];
                        ?>
                </h1>
                <p>
                        <?php $id='2';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[2];
                        ?>
                </p>



                <p>
                        <?php $id='2';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[3];
                        ?>
                </p>
                <p> &starf; &starf; &starf; &starf; &star; التقييم العام من 404 زائر</p>
                <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                <p>العنوان:-
                        <?php $id='2';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[5];
                        ?>
                </p>

                <b><p>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</p></b>

                <p>سعر الكشف:-
                    <?php $id='2';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[4];
                        ?> جنيه
                </p>
                <p> مدة الانتظار:-
                        <?php $id='2';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[7];
                        ?> دقيقة
                </p>
                <p> للاتصال :16676 بسعر المكالمة العادية</p>
            </div>

            <div>
                <h3>معلومات عن الدكتور</h3>
                <p>دكتوراه جراحة الأذن،الأنف و الحنجره-كلية الطب-القصر العينى -جامعة القاهرة<br>- *استشاري مناظير قاع
                    الجمجمة *استشاري مناظير الأنف و الجيوب الأنفية<br> *استشارى جراحات الأذن الميكروسكوبيه *استشاري جراحات
                    زراعة القوقعه *عضو الجمعيه المصرية لجراحات الأذن،الأنف و الحنجره *عضو الجمعيه المصرية للحساسية و
                    العلاج المناعي<br> *امكانية عمل مناظير حنجرية،مناظير الأنف و مقياس سمع </p>

            </div>
        </article>

        <br>
        <hr>
        <br>

<!--***********************دكتور محمد سيد بدر*****************************************-->
        <article>

            <div class="first" >

                <img src="media2/clinic-sherif-salem-ear-nose-and-throat_20181003160939.jpg" alt="">

                <h1>
                    دكتور محمد سيد بدر
                        <?php $id='3';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[1];
                        ?>

                </h1>

                <p>
                        <?php $id='3';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[2];
                        ?>
                </p>
                <p>
                        <?php $id='3';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[3];
                        ?>
                </p>

                <p> &starf; &starf; &starf; &starf; &starf; التقييم العام من 968 زائر</p>
                <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                <p>العنوان:-
                        <?php $id='3';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[5];
                        ?>

                </p>
                <b><p>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</p></b>

                <p>سعر الكشف:- 
                    <?php $id='3';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[4];
                        ?> جنيه
                </p>
                <p> مدة الانتظار:- 
                        <?php $id='3';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[7];
                        ?>
                        دقيقه
                </p>
                <p> للاتصال :16676 بسعر المكالمة العادية</p>

            </div>

            <div>

                <h3>معلومات عن الدكتور</h3>

                <p>استشاري أمراض الأنف و الأذن و الحنجرة من كلية طب القصر العيني جامعة القاهرة <br>- حاصل على درجة
                    الماجيستيرفي الأنف والأذن والحنجرة من كلية طب القصر العيني جامعة القاهرة </p>
            </div>


        </article>
        <br>
        <hr>
        <br>
<!--*************************كتور محمد نجيب*****************************-->

        <article>

            <div class="first" >

                <img src="media2/doctor-mohamed-naguib-ear-nose-and-throat_20190111132019867.jpg" alt="">

                <h1>
                         <?php $id='4';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[1];
                        ?>
                </h1>

                <p>
                        <?php $id='4';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[2];
                        ?>
                </p>

                <p>
                        <?php $id='4';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[3];
                        ?>
                </p>

                <p> &starf; &starf; &starf; &starf; &starf; التقييم العام من 1907 زائر</p>
                <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->


                <p>العنوان:-
                        <?php $id='4';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[5];
                        ?>
                </p>
                <b><p>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</p></b>


                <p>سعر الكشف:- <?php $id='4';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[3];
                        ?> جنيه
                </p>
                <p> مدة الانتظار:-
                     <?php $id='4';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[7];
                        ?>
                    دقيقة
                </p>
                <pre> للاتصال :16676 بسعر المكالمة العادية</pre>

            </div>

            <div>

                <h3> معلومات عن الدكتور</h3>

                <p>ماجيستر و دكتوراه الأنف و الأذن و الحنجرة من جامعة عين شمس </p>
            </div>
        </article>

        <br>
        <hr>
        <br>


        <article>
<!--**************************كتور عفت عبدالفتاح*************************************-->
            <div class="first" >

                <img src="media2/doctoreffatabdelfattah-life-clinics_20220706155535064.jpg" alt="">

                <h1>
                        <?php $id='5';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[1];
                        ?>
                </h1>

                <p>
                        <?php $id='5';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[2];
                        ?>
                </p>

                <p>
                    <?php $id='5';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[3];
                        ?>
                </p>

                <p> &starf; &starf; &starf; &starf; &star; التقييم العام من 1221 زائر</p>
                <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                <p>العنوان:- 
                        <?php $id='5';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[5];
                        ?>
                </p>
                <b><P>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</P></b>

                <p>سعر الكشف:-
                        <?php $id='5';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[4];
                        ?>
                         جنيه
                </p>
                <p> مدة الانتظار:-
                    <?php $id='5';
                         $query = mysqli_query($con,"select *from nose where ID='$id'");

                         echo mysqli_fetch_array($query)[7];
                        ?>دقيقة
                </p>
                <pre> للاتصال :16676 بسعر المكالمة العادية</pre>



            </div>

            <div>
                <h4>معلومات عن الدكتور</h4>
                <p>عيادة نهاريه يوميا من 12.30,, ظهرا إلى 2.00 ظ السبت والاثنين و الخميس المواعيد<br> من الساعة 1م الي 2م,
                    ومن 7م الي 9م. الصفحة الرسمية لعيادة دكتور عفت عبدالفتاح دكتوراه<br> واستشارى الانف والاذن والحنجرة </p>
            </div>

        </article>

        <br>
        <hr>
        <br>

<!--***********************************************************************-->
        <article>

            <div class="first" >

                <img src="media2/doctor-khaled-weshahy-ear-nose-and-throat_20190125005158697.jpg" alt="">

                <h1>دكتور خالد وشاحي</h1>

                <p>إستشارى جراحة الانف و الاذن و الحنجرة جامعة القاهرة- القصر العينى

                    <br>دكتور انف واذن وحنجرة متخصص في اضطراب السمع والتوازن، انف واذن وحنجرة اطفال، انف واذن وحنجرة بالغين،
                    <br>سمعيات اطفال، سمعيات بالغين، جراحة انف واذن وحنجرة اطفال و جراحة انف واذن وحنجرة بالغين</p>

                <p>دكتور انف واذن وحنجرة متخصص في اضطراب السمع والتوازن، انف واذن وحنجرة اطفال، انف واذن وحنجرة بالغين،
                    سمعيات اطفال، سمعيات بالغين، جراحة انف واذن وحنجرة اطفال و جراحة انف واذن وحنجرة بالغين</p>

                <p> &starf; &starf; &starf; &starf; &star; التقييم العام من 4510 زائر</p>
                <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                <p>العنوان:-الهرم : شارع الهرم الرئيسى</p>
                <b><P>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</P>
                </b>
                <p>سعر الكشف:-200 جنيه</p>
                <p>مدة الانتظار:-ساعة و 19 دقيقة</p>
                <pre> للاتصال :16676 بسعر المكالمة العادية</pre>



            </div>

            <div>
                <h3>معلومات عن الدكتور</h3>
                <p>سعر الكشف بدون الغسيل ٢٠٠ جنيه متواجد فى مستشفى الهرم -<br> علماً بان سعر تخطيط السمع و مقياس ضغط الطبلة
                    300جنية فى العيادة يوم الأربعاء بحجز مسبق <br>-جامعه القاهره -القصر العينى-استشارى بمستشفيات امانة
                    المراكز الطبية -دبلوم جراحة مناظير الانف التشخصية<br> والجراحية -جامعة جراتس-النمسا- وكيل وزارة الصحة
                    رئيس الادارة المركزية للرعاية الحرجة والعاجلة سابقاً <br>جراحات تجميل وتصغير الانف لتحسين وظيفه الانف -
                    سعر الكشف المستعجل ٣٠٠ جنيه الدخول باسبقيه الحضور ولا توجد استثناءات منعا للاحراج</p>
            </div>

        </article>


        <br>
        <hr>
        <br>



        <article>

            <div class="first" >

                <img src="media2/doctor-wessam-hussein-mohamed-radwan-ear-nose-and-throat_20190331235407230.jpg" alt="">

                <h1>دكتور وسام حسين محمد رضوان</h1>

                <p>استشارى جراحة الانف و الاذن و الحنجرة و مناظير الانف مستشفيات جامعة القاهرة - ماجيستير جراحة الانف

                    دكتور انف واذن وحنجرة متخصص في انف واذن وحنجرة بالغين، سمعيات اطفال، سمعيات بالغين، جراحة انف واذن
                    وحنجرة اطفال، جراحة انف واذن وحنجرة بالغين و انف واذن وحنجرة اطفال</p>

                <p>دكتور انف واذن وحنجرة متخصص في انف واذن وحنجرة بالغين، سمعيات اطفال، سمعيات بالغين، جراحة انف واذن
                    وحنجرة اطفال، جراحة انف واذن وحنجرة بالغين و انف واذن وحنجرة اطفال</p>

                <p> &starf; &starf; &starf; &starf; &star; التقييم العام من 591 زائر</p>
                <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                <p>العنوان:-فيصل : شارع فيصل المريوطيه</p>
                <b><P>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</P>
                </b>
                <p>سعر الكشف:-200</p>

                <p> مدة الانتظار:-21دقيقة</p>

                <pre> للاتصال :16676 بسعر المكالمة العادية</pre>



            </div>

            <div>

                <h3>معلومات عن الدكتور</h3>

                <p>جراحة الانف و الاذن و الحنجرة و مناظير الانف عضو جمعية الانف و الاذن المصرية الدكتور غير مشترك في اي
                    شركه تأمين </p>
            </div>


        </article>

        <br>
        <hr>
        <br>



        <article>

            <div class="first" >

                <img src="media2/doctor-ahmad-al-sheraie-ear-nose-and-throat_20200302190957611.jpg" alt="">

                <h1>دكتور أحمد الشريعي</h1>

                <p>إستشاري جراحة الأنف و الأذن و الحنجرة</p>

                <p>دكتور انف واذن وحنجرة متخصص في جراحة انف واذن وحنجرة اطفال، انف واذن وحنجرة اطفال، جراحة انف واذن
                    وحنجرة بالغين و انف واذن وحنجرة بالغين</p>

                <p> &starf; &starf; &starf; &starf; &star; التقييم العام من 127 زائر</p>
                <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                <p>العنوان:-ميدان الجيزة : مراد</p>
                <b><P>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</P>
                </b>
                <p>سعر الكشف:-300 جنيه</p>

                <p> مدة الانتظار:-32دقيقة</p>

                <p> للاتصال :16676 بسعر المكالمة العادية</p>



            </div>

            <div>

                <h3>معلومات عن الدكتور</h3>

                <p>دكتور أحمد الشريعي مبتكر أحدث تقنية عالمية لعلاج مشاكل الجيوب الأنفية المزمنة<br> و مضعافتها. دكتور أحمد
                    الشريعي عضو الجمعية الأمريكية لجراحة الأنف و الأذن و الحنجرة.</p>
            </div>


        </article>

        <br>
        <hr>
        <br>

        <article>

            < class="first" >

                <img src="media2/doctor-hesham-mansour_20211203205117234.jpg" alt="">

                <h1>دكتور هشام منصور</h1>

                <p>استاذ الانف و الاذن و الحنجرة, كلية الطب ,جامعة القاهرة</p>

                <p>دكتور انف واذن وحنجرة متخصص في جراحة انف واذن وحنجرة اطفال، انف واذن وحنجرة اطفال، جراحة انف واذن
                    وحنجرة بالغين و انف واذن وحنجرة بالغين</p>

                <p> &starf; &starf; &starf; &starf; &star; التقييم العام من 1902 زائر</p>
                <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                <p>العنوان:-التجمع : شارع التسعين الشمالى</p>
            <b><P>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</P>
            </b>
                <p>سعر الكشف:-400 جنيه</p>

                <p> مدة الانتظار:-47دقيقة</p>

                <pre> للاتصال :16676 بسعر المكالمة العادية</pre>



            </div>

            <div>

                <h3>معلومات عن الدكتور</h3>

                <p>.أستاذ الأنف و الأذن و الحنجرة كلية طب جامعة القاهرة عضو الجمعية الاوروبية لامراض الأنف ، </p>
            </div>


        </article>

        <br>
        <hr>
        <br>

        <article>

            <div class="first" >

                <img src="media2/doctor-abd-allah-mahmoud-ear-nose-and-throat_20190201144602391.jpg" alt="">

                <h1>دكتور عبد الله محمود</h1>

                <p>أستشاري أنف و أذن و حنجرة</p>

                <p>دكتور انف واذن وحنجرة متخصص في جراحة انف واذن وحنجرة اطفال، جراحة انف واذن وحنجرة بالغين، اضطراب
                    السمع والتوازن، انف واذن وحنجرة اطفال، انف واذن وحنجرة بالغين، سمعيات اطفال و سمعيات بالغين</p>

                <p> &starf; &starf; &starf; &starf; &star; التقييم العام من 471 زائر</p>
                <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                <p>العنوان:-شبرا : رقم 286 ش شبرا أمام تفتيش الري -أغاخان _أمام سينما مودرن </p>
                <P>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</P>

                <p>سعر الكشف:-250 جنيه</p>

                <p> مدة الانتظار:-24دقيقة</p>

                <pre> للاتصال :16676 بسعر المكالمة العادية</pre>



            </div>

            <div>

                <h3>معلومات عن الدكتور</h3>

                <p>ماجستير الأمراض الجلدية والتجميل كلية الطب جامعة الأزهر الزمالة المصرية في الامراض الجلدية </p>
            </div>


        </article>


        <br>
        <hr>
        <br>

    </div>

        <article>

            <div>

                <h1 style="color: red;">اسئلة مكررة</h1>

                <h3 style="color: blue;">ازاي احجز موعد في نفس اليوم مع دكتور انف واذن وحنجرة؟</h3>
                <p>تستطيع أن تدخل على موقع أو تطبيق مستشفي المستقبل التخصصي <br>وتبحث عن دكاترة انف واذن وحنجرة في منطقتك،
                    اختار 'اليوم' من المواعيد المتاحة في محدد البحث اعلى الصفحة واحجز في أقل من دقيقة.</p>


                <h3 style="color: blue;">ازاي اقدر ابحث عن دكتور انف واذن وحنجرة تابع للتأمين الخص بي</h3>

                <p>مستشفي المستقبل التخصصي توفر لك فرصة البحث عن دكاترةانف واذن وحنجرة يقبلون التامين الخاص بك على وجه
                    التحديد.
                    اختار شركه التامين
                    الخاصة بك من محدد البحث اعلى الصفحة واحجز في أقل من دقيقة.</p>


                <h3 style="color: blue;">ازاي اقدر احجز موعد من علي الانترنت مع دكتور انف واذن وحنجرة</h3>
                    <P>مستشفي المستقبل التخصصي هي خدمه مجانيه على الانترنت، تساعد المرضى في ايجاد دكاترة انف واذن وحنجرة
                        أو أي تخصص
                        آخر وحجز ميعاد<br>
                        فورا. ثم عند اختيار الموعد المطلوب والمنطقة يمكنك اختيار شركة التامين الخاصة بك اذا توفر لديك.
                        وبناءا على المعلومات التي ادخلتها، ستظهر لك قائمه بكل الدكاترة <br>الذين يطابقون معايير البحث،
                        بالاضافة
                        لقائمة مواعيدهم المتاحة.</P>

                    <h3 style="color: blue;"> هل اقدر اختار دكتور انف واذن وحنجرة</h3>

                    <P>عند البحث عن دكاترة انف واذن وحنجرة في مستشفي المستقبل التخصصي، تستطيع تحديد نتائج البحث الخاصة
                        بك حسب الجنس،
                        بالاضافة لمعايير<br>
                        بحث اخرى. وبهذه الطريقة، سيتم عرض الدكاترة الذين يطابقون تفضيلاتك فقط.</P>


                    <h3 style="color: blue;">هل اقدر ابحث عن مواعيد ف نفس اليوم لدكتور انف واذن وحنجرة</h3>

                    <P>تستطيع استخدام بحث مستشفي المستقبل التخصصي للعثور على دكاترة انف واذن وحنجرة حسب الاعلى تصنيفا من
                        خلال تقييمات
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

                <h4 style="color: red">التخصصات الفرعية الأكثر اختياراً</h4>

                <p style="color: blue;">دكتور انف واذن وحنجرة بالغين <br>- دكتور انف واذن وحنجرة اطفال - دكتور اضطراب السمع والتوازن - دكتور جراحة
                    انف واذن وحنجرة بالغين - جراحة انف واذن وحنجرة اطفال</p>

                    <h4>انف واذن وحنجرة</h4>

                    <p>بتدور على احسن دكتور دكتور انف واذن وحنجرة في مصر قريب منك؟ دلوقتي ڤيزيتا بتوفرلك امكانية حجز
                        موعد مع افضل دكاترة دكتور انف واذن وحنجرة متخصصين في مجالات مختلفة <br>مثل انف واذن وحنجرة بالغين،
                        انف واذن وحنجرة اطفال، اضطراب السمع والتوازن وغيرها.<br> احجز ميعادك اونلاين مجانا من غير ما تدفع اي
                        رسوم اضافية. وعشان نساعدك انك تختار انسب دكتور دكتور انف واذن وحنجرة ليك،<br> تقدر تشوف تقييم مرضى
                        حقيقيين وتجاربهم مع الدكاترة <br>,وكمان ممكن تعرف مستشفيات وعيادات دكتور انف واذن وحنجرة في مصر اللي
                        بتبقل تأمينك.</p>

            </div>

        </article>


    </section>



    <footer>

        <div>

            <h3 style="color: red;">مستشفي المستقبل التخصصي</h3>


            <a href="https://www.facebook.com/FutureSpecializedHospital">facebook</a>

            <a href="https://instagram.com/futurehospital1?igshid=YmMyMTA2M2Y=">instagram</a>

            <a href="https://twitter.com/almostaqbalsa?s=11&t=51mGXYuaYtAPKx72J1dUew">twitter</a>

            <a href="http://https://www.youtube.com/channel/UCMGnUdpkIdbeOpb2kB52zeg">youtube</a>

        </div>
    </footer>

</body>

</html>