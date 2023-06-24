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

    <title>افضل دكاترة اطفال حديثي الولادة</title>

    <link rel="stylesheet" href="اطفال.css">

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

                <h3>اجحز مع افضل دكتور اطفال حديثي الولادة</h3>
                <p> احجز اونلاين او كلم 16676</p>
            </div>
        </div>
        <div>
                  <nav id="بحث"  style=" font-size:larger; background-color:pink; border: 5px solid;">
            <form  method="GET" style="center;" >
            <ul>

            <li><input type="text" name="Name"    placeholder="ابحث هنا بالتخصص او اسم الدكتور او المحافظه">:اكتب اسم الدكتور او التخصص او المحافظه  </li>
            <li><button type="submit" name="search">ابحث</button></li>

                   </form>
            </nav>
                  </div>
        </article>
        <br>

        <hr>

<div class="second">
        <article>
            <!--***************دكتور ماجد الوكيل*************************-->
            <div class="first">

                <img src="media4/doctor-maged-elwakeel_20210222094423166.jpg" alt="">

                <h3>
                        <?php $id='1';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[1];
                        ?> 
                </h3>
                <p>
                            <?php $id='1';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[2];
                        ?> 
                </p>
                <p>
                    <?php $id='1';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[3];
                        ?> 
                </p>



                <p> &starf; &starf; &starf; &starf; &star;التقييم العام من 883 زائر </p>
                <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                <p> العنوان :-
                        <?php $id='1';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[5];
                        ?> 
                </p>

                <p>سعر الكشف:- 
                        <?php $id='1';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[4];
                        ?>  جنيه
                </p>
                <p> مدة الانتظار:- 
                        <?php $id='1';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[7];
                        ?>  دقيقة

                </p>
                <p> للاتصال : 16676 بسعر المكالمة العادية</p>
           
                <h4>معلومات عن الدكتور</h4>
                <p>أستاذ طب الأطفال وحديثى الولادة -رئيس قسم الأطفال ومدير وحدة الحضانات بمستشفى المروة-المهندسين -متخصص
                    فى علاج ومتابعة أمراض الأطفال حديثى الولادة والرضع<br> -متخصص فى علاج الأمراض المعدية لدى الأطفال -
                    متخصص فى علاج سوء التغذية لدى الأطفال (النحافة-السمنة) -متخصص فى علاج حساسية الصدر لدى الأطفال
                    -دكتوراة صحة وتغذية الأطفال -ماجستير طب الأطفال وحديثى الولادة <br>-عضو الجمعية المصرية لطب الأطفال -عضو
                    الجمعية المصرية لرعاية الأطفال حديثى الولادة والمبتسرين-</p>
            </div>

        </article>
    <!--*************************دكتور الفريد ادوارد شرقاو*************************************-->
        <br>
        <hr>
        <br>

        <article>

            <div class="first">
                <img src="media4/doctor-alfraid-edward-sharqawy-pediatrics-and-new-born_20220703231835530.jpg" alt="">

                <h3> 
                        <?php $id='2';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[1];
                        ?> 
                </h3>
                <p>
                        <?php $id='2';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[2];
                        ?> 
                </p>


                <p>
                        <?php $id='2';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[3];
                        ?> 
                </p>
                <p> &starf; &starf; &starf; &starf; &starf; التقييم العام من 664 زائر</p>
                <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                <p>العنوان:
                        <?php $id='2';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[5];
                        ?> 

                </p>

                <b><p>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</p></b>

                <p>سعر الكشف:-
                        <?php $id='2';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[4];
                        ?>  جنيه</p>
                <p> مدة الانتظار:-
                    <?php $id='2';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[7];
                        ?>  دقيقة
                </p>
                <p> للاتصال :16676 بسعر المكالمة العادية</p>
           
                <h4>معلومات عن الدكتور</h4>
                <p>استشارى طب الاطفال و حديثي الولاده ماجستير طب الاطفال جامعه عين شمس مواعيد العيادة :
                    <br>الاثنين--الي--السبت ٢-٨مساء الاحد اجازه </p>
            </div>
        </article>

        <br>
        <hr>
        <br>

    <!--************************** دكتور فؤاد حسن حنفي*********************************************-->
        <article>

            <div class="first">

                <img src="media4/doctor-fouad-hassan-hanafy-pediatrics-and-new-born_20220306195638895.jpg" alt="">
                <h3>
                    دكتور فؤاد حسن حنفي

                        <?php $id='3';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[1];
                        ?> 
                </h3>

                <p>
                        <?php $id='3';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[2];
                        ?> 
                </p>
                <p>
                        <?php $id='3';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[3];
                        ?> 
                </p>

                <p> &starf; &starf; &starf; &starf; &starf; التقييم العام من 887 زائر</p>
                <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                <p>العنوان:- 
                        <?php $id='3';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[5];
                        ?> 
                </p>
               <b> <p>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</p></b>


                <p>سعر الكشف:-
                    <?php $id='3';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[4];
                        ?>  جنيه
                </p>
                <p> مدة الانتظار:-
                        <?php $id='3';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[7];
                        ?>  دقيقة
                </p>
                <pre> للاتصال :16676 بسعر المكالمة العادية</pre>

           

                <h4>معلومات عن الدكتور</h4>

                <p>الرجاء التواصل مع العيادة بعد الحجز لتأكيد الموعد والرجاء ترك رقم المريض الصحيح للتواصل مع <br>المريض -
                    البورد الأمريكي في طب الأطفال و حديثي الولادة /عضو في الأكاديمية الأمريكية لطب الأطفال/الاستشارة<br>
                    خلال اسبوع من الكشف وتكلفته١ 120 جنيها . يوجد جهاز لقياس الصفرا<br>، بدون أخذ عينة دم ويتم عمل الطهارة
                    للذكور فى الشهرين الاولين تحت تخدير موضوعى<br> وباستعمال الحلقة البلاستيكية</p>
            </div>


        </article>
        <br>
        <hr>
        <br>

<!--***********************************دكتور عبدالرحيم زمزمي****************************-->
        <article>

            <div class="first">

                <img src="media4/doctor-abdel-rahem-zamzamy-pediatrics-and-new-born_20200911211210357.jpg" alt="">

                <h3>
                    دكتور عبدالرحيم زمزمي
                        <?php $id='4';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[1];
                        ?>
                </h3>

                <p> 
                        <?php $id='4';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[2];
                        ?>
                </p>

                <p>
                        <?php $id='4';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[3];
                        ?></p>
                </p>

                <p> &starf; &starf; &starf; &starf; &star; التقييم العام من 283 زائر</p>
                <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->


                <p>
                    العنوان:-
                        <?php $id='4';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[5];
                        ?>
                </p>
               <b> <p>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</p></b>


                <p>سعر الكشف:-
                        <?php $id='4';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[4];
                        ?> 
                        جنيه
                </p>
                <p> مدة الانتظار:-
                        <?php $id='4';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[7];
                        ?>دقيقة</p>
                <pre> للاتصال :16676 بسعر المكالمة العادية</pre>
                <h4> معلومات عن الدكتور</h4>

                <p>استشارى اول طب اطفال بالقصر العينى جامعة القاهرة</p>
            </div>
        </article>

        <br>
        <hr>
        <br>

            <!--**********************************دكتور سعيد ابراهيم *********************-->
        <article>

            <div class="first">

                <img src="media4/doctor-saied-ibrahim-mohamed-pediatrics-and-new-born_20220322191255757.jpg" alt="">

                <h3>
                        <?php $id='5';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[1];
                        ?>
                </h3>

                <p>
                        <?php $id='5';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[2];
                        ?>
                </p>

                <p>
                        <?php $id='5';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[3];
                        ?>
                </p>

                <p> &starf; &starf; &starf; &starf; &star; التقييم العام من 141 زائر</p>
                <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                <p>العنوان:-
                        <?php $id='5';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[5];
                        ?>
                </p>
                <b><P>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</P></b>

                <p>سعر الكشف:-
                    <?php $id='5';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[4];
                        ?> جنيه
                </p>
                <p> مدة الانتظار:-
                        <?php $id='5';
                         $query = mysqli_query($con,"select *from children where ID='$id'");

                         echo mysqli_fetch_array($query)[7];
                        ?>
                        دقيقة
                </p>
                <pre> للاتصال :16676 بسعر المكالمة العادية</pre>



           
                <h4>معلومات عن الدكتور</h4>
                <p>دبكالوريوس الطب والجراحة سنة ١٩٨٣ استشاري طب الاطفال و حديثي الولادة<br> ماجستير طب الاطفال من جامعة عين
                    شمس دبلوم الباطنة والاطفال من جامعة الازهر<br> عمل طبيبا بمستشفيات وتشكيلات القوات المسلحة بقطاعات
                    مختلفة ...... عمل بمستشفيات وزارة الصحة المصرية فى العديد <br>من المحافظات..... خبرة اكثر من ٣٥ سنة فى
                    طب الاطفال والباطنة وامراض الضغط والسكر<br> وامراض الشيخوخة ..... يعمل حاليا استشاري الاطفال والباطنة
                    والضغط والسكر بعيادات التامين الصحي اشراف طبى بمدارس مودرن<br> سكول بالقاهرةعمليات نسائيه تجميليه امامي
                    وخلفي بطانه رحم مهاجره اكتشاف العيوب الخلقية تحديد جنس الجنين</p>
            </div>

        </article>

        <br>
        <hr>
        <br>


        <article>

            <div class="first">

                <img src="media4/doctor-mohamed-sonpol-pediatrics-and-new-born_20181225094504541.jpg" alt="">

                <h3>دكتور محمد سنبل</h3>

                <p>استشارى طب الاطفال و حديثى الولادة</p>

                <p>دكتور اطفال وحديثي الولادة متخصص في رضاعة طبيعية، حديثي الولادة، اطفال، جهاز هضمي ومناظير اطفال،
                    روماتيزم اطفال، مسالك بولية اطفال، تخسيس وتغذية اطفال و حساسية ومناعة اطفال</p>

                <p> &starf; &starf; &starf; &starf; &starf; التقييم العام من 328 زائر</p>
                <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                <pre>العنوان:-حدائق الأهرام : ٤٢٨ن شارع الجيش مدخل البوابه الرابعه (مينا)</pre>
                <P>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</P>

                <pre>سعر الكشف:-200 جنيه</pre>
                <pre>مدة الانتظار:-8 دقيقة</pre>
                <pre> للاتصال :16676 بسعر المكالمة العادية</pre>



            
                <h4>معلومات عن الدكتور</h4>
                <p>استشارى طب الاطفال و حديثى الولادة و الرضاعة الطبيعية و الاطفال المبتسرين- عضو الجمعية المصرية لطب
                    الاطفال بجامعة عين شمس عضو الزمالة البريطانية للأمراض الصدرية والحساسية لطب الأطفال</p>
            </div>

        </article>


        <br>
        <hr>
        <br>



        <article>

            <div class="first">

                <img src="media4/doctor-mohamed-khalaf-pediatrics-and-new-born_20200306134815963.jpg" alt="">

                <h3>دكتور محمد علي خلف</h3>

                <p>استشاري الأطفال و حديثي الولادة</p>

                <p>دكتور اطفال وحديثي الولادة متخصص في جهاز هضمي ومناظير اطفال، حديثي الولادة، اطفال، تخسيس وتغذية
                    اطفال، مسالك بولية اطفال، حساسية ومناعة اطفال و رضاعة طبيعية</p>

                <p> &starf; &starf; &starf; &starf; &star; التقييم العام من 212 زائر</p>
                <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                <pre>العنوان:-حدائق الأهرام : خلف النساجون الشرقيون</pre>
                <P>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</P>

                <pre>سعر الكشف:-300</pre>

                <pre> مدة الانتظار:-7دقيقة</pre>

                <pre> للاتصال :16676 بسعر المكالمة العادية</pre>



           

                <h4>معلومات عن الدكتور</h4>

                <p>استشاري طب الأطفال وحديثي الولادة القصر العيني استشاري أطفال و حديثي ولادة م. <br>الجنزوري رئيس قسم
                    الأمومة و الطفولة وزارة الصحة استشاري الرضاعة الطبيعية <br>و تحديد الألبان للأطفال متابعة دقيقة جدا لنمو
                    الأطفال و حديثي الولادة تشخيص و علاج جميع أمراض حساسة <br>و مناعة الأطفال تشخيص و علاج نزلات معوية
                    إضطرابات الجهاز الهضمي برامج و تطعيمات وقائية ضد أمراض الأطفال<br> المختلفة برامج إصلاح غذائي نقص الوزن
                    و الطول و سوء التغذية </p>
            </div>


        </article>

        <br>
        <hr>
        <br>



        <article>

            <div class="first">

                <img src="media4/doctor-eriny-rushdy-pediatrics-and-new-born_20210902065119791.jpg" alt="">

                <h3>دكتورة اريني رشدي</h3>

                <p>اخصائيه طب الاطفال و حديثي الولاده. ماجستير امراض الدم للاطفال - جامعه الاسكندريه</p>

                <p>دكتورة اطفال وحديثي الولادة متخصص في تخسيس وتغذية اطفال، امراض دم اطفال، حساسية ومناعة اطفال، كلى
                    اطفال، كبد اطفال، رضاعة طبيعية، حديثي الولادة و اطفال</p>

                <p> &starf; &starf; &starf; &starf; &star; التقييم العام من 149 زائر</p>
                <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                <pre>العنوان:-سيدي بشر : ٢٣١ شارع جمال عبد الناصر - امام بوابه مستشفي شرق المدينه ( جيهان ). </pre>
                <P>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</P>

                <pre>سعر الكشف:-150 جنيه</pre>

                <pre> مدة الانتظار:-29دقيقة</pre>

                <pre> للاتصال :16676 بسعر المكالمة العادية</pre>



            

                <h4>معلومات عن الدكتور</h4>

                <p>اخصائيه طب الاطفال و حديثي الولاده. ماجستير امراض الدم للاطفال - جامعه الاسكندريه.</p>
            </div>


        </article>

        <br>
        <hr>
        <br>

        <article>

            <div class="first">

                <img src="media4/doctor-hamdy-awad-pediatrics-and-new-born_20220807123812371.jpg" alt="">

                <h3>دكتور حمدي عواد عباس</h3>

                <p>استشاري طب الاطفال وحديثي الولاده</p>

                <p>دكتور اطفال وحديثي الولادة متخصص في كبد اطفال، اطفال، تخسيس وتغذية اطفال، حساسية ومناعة اطفال، حديثي
                    الولادة، جهاز هضمي ومناظير اطفال، مسالك بولية اطفال، سكر وغدد صماء اطفال و رضاعة طبيعية</p>

                <p> &starf; &starf; &starf; &starf; &star; التقييم العام من 158 زائر</p>
                <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                <pre>العنوان:-مدينة نصر : شارع 3 بلوك5 عماره10 .مدينه الواحه</pre>
                <P>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</P>

                <pre>سعر الكشف:-300 جنيه</pre>

                <pre> مدة الانتظار:-7دقيقة</pre>

                <pre> للاتصال :16676 بسعر المكالمة العادية</pre>




                <h4>معلومات عن الدكتور</h4>

                <p>استشاري اول طب الاطفال وحديثى الولادة عضو الجمعيه المصريه لطب الأطفال عضو <br>الاكاديميه المصريه لطب
                    الأطفال وحديثي الولاده يوجد خدمه الفحص الشامل لحديثي الولاده والأطفال متابعه <br>الاطفال من حيث الوزن
                    والطول والقياسات . علاج ومتابعه مرضي الكبد والصفراء. للأطفال علاج ومتابعه مرضي سكر الاطفال.<br> امراض
                    الجهاز الهضمي والجهاز التنفسي والحساسية الرضاعه<br> الطبيعيه أو الصناعيه برنامج غذائي للطفل من الشهر
                    الرابع. علاج الانيميا عند الأطفال فحص وتشخيص وعلاج <br>ارتفاع الحرارة عند الأطفال. </p>
            </div>


        </article>

        <br>
        <hr>
        <br>

        <article>

           
<div class="first">
                <img src="media4/doctor-mahmoud--fawzy-elgendy-internal-medicine_20200312140435854.jpg" alt="">

                <h3>دكتور محمود فوزى</h3>

                <p>دكتور محمد محمد عبد الفتاح الخشت</p>

                <p>دكتور اطفال وحديثي الولادة متخصص في حديثي الولادة، مخ واعصاب اطفال، اطفال، كبد اطفال، احتياجات خاصة،
                    رضاعة طبيعية، جهاز هضمي ومناظير اطفال، روماتيزم اطفال، حساسية ومناعة اطفال و امراض دم اطفال</p>

                <p> &starf; &starf; &starf; &starf; &star; التقييم العام من 90 زائر</p>
                <!-- Note >> (خليه نجوم مثلا) ممكن تعدلي الشكل هنا براحتك -->

                <pre>العنوان:-مدينة الفيوم : امام مطعم حسونه   </pre>
                <P>احجز الان وسيتم ارسال تفاصيل العنوان بالكامل ورقم العيادة</P>

                <pre>سعر الكشف:-100 جنيه</pre>

                <pre> مدة الانتظار:-20دقيقة</pre>

                <pre> للاتصال :16676 بسعر المكالمة العادية</pre>


                <h4>معلومات عن الدكتور</h4>

                <p>الكشف علي حالات الأطفال و الحميات و متابعة نمو الأطفال و <br>المشاكل الخاصة بالرضاعة وتغذية الاطفال
                    ومشاكل الجهاز التنفسي والحساسية <br>والجهاز الهضمي والنزلات المعوية وحالات الأنيميا وأمراض الدم وأمراض
                    المناعة ونقص المناعة<br> وأمراض المخ والأعصاب الخاصة بالاطفال </p>
           
        </div>

        </article>

    </div>
        <br>
        <hr>
        <br>



        <article>

            <div>

                <h1 style="color:red ;">اسئلة مكررة</h1>

                <h3  style="color:blue ;">ازاي احجز موعد في نفس اليوم مع دكتور اطفال حديثي الولادة؟</h3>
                <p>تستطيع أن تدخل على موقع أو تطبيق مستشفي<br> المستقبل التخصصي وتبحث عن دكاترة اطفال حديثي الولادة في
                    منطقتك،
                    اختار 'اليوم' من المواعيد المتاحة في محدد البحث اعلى الصفحة واحجز في أقل من دقيقة.</p>


                <h3  style="color:blue ;">ازاي اقدر ابحث عن دكتور اطفال حديثي الولادة تابع للتأمين الخص بي</h3>

                <p>مستشفي المستقبل التخصصي توفر لك فرصة البحث عن دكاترة <br>اطفال حديثي الولادة يقبلون التامين الخاص بك على
                    وجه
                    التحديد.<br>
                    اختار شركه التامين
                    الخاصة بك من محدد البحث اعلى الصفحة واحجز في أقل من دقيقة.</p>


                <h3  style="color:blue ;">ازاي اقدر احجز موعد من علي الانترنت مع دكتور اطفال حديثي الولادة</h3>
                    <P>مستشفي <br>المستقبل التخصصي هي خدمه مجانيه على الانترنت، تساعد المرضى في ايجاد دكاترة اطفال حديثي
                        الولادة<br>
                        أو أي تخصص
                        آخر وحجز ميعاد
                        فورا. ثم عند اختيار الموعد المطلوب والمنطقة يمكنك<br> اختيار شركة التامين الخاصة بك اذا توفر لديك.
                        وبناءا على المعلومات التي ادخلتها، ستظهر لك قائمه بكل الدكاترة <br>الذين يطابقون معايير البحث،
                        بالاضافة
                        لقائمة مواعيدهم المتاحة.</P>

                    <h3 style="color:blue ;"> هل اقدر اختار دكتور اطفال حديثي الولادة</h3>

                    <P>عند البحث عن دكاترة اطفال حديثي الولادة في مستشفي <br>المستقبل التخصصي، تستطيع تحديد نتائج البحث
                        الخاصة
                        بك حسب الجنس،
                        بالاضافة لمعايير<br>
                        بحث اخرى. وبهذه الطريقة، سيتم عرض الدكاترة الذين يطابقون تفضيلاتك فقط.</P>


                    <h3  style="color:blue ;">هل اقدر ابحث عن مواعيد ف نفس اليوم لدكتور اطفال حديثي الولادة</h3>

                    <P>تستطيع استخدام بحث مستشفي المستقبل <br>التخصصي للعثور على دكاترة اطفال حديثي الولادة حسب الاعلى
                        تصنيفا من
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

                <h4 style="color:red ;">التخصصات الفرعية الأكثر اختياراً</h4>

                <p  style="color:blue ;">دكتور اطفال - دكتور حديثي الولادة - رضاعة طبيعية - دكتور مخ واعصاب اطفال - امراض القلب للاطفال -
                    دكتور سكر وغدد صماء اطفال <br>- دكتور كبد اطفال - جهاز هضمي ومناظير اطفال - دكتور كلى اطفال - دكتور
                    مسالك بولية اطفال - دكتور حساسية ومناعة اطفال - دكتور امراض دم اطفال<br> - دكتور نفسي اطفال - دكتور
                    روماتيزم اطفال - دكتور تخسيس وتغذية اطفال <br>- دكتور احتياجات خاصة</p>

                <h4 style="color:red ;">اطفال وحديثي الولادة</h4>

                <p  style="color:blue ;">بتدور على احسن دكتور دكتور اطفال وحديثي الولادة في مصر قريب منك؟ دلوقتي ڤيزيتا بتوفرلك امكانية حجز
                    موعد مع افضل دكاترة دكتور اطفال وحديثي الولادة <br>متخصصين في مجالات مختلفة مثل اطفال، حديثي الولادة،
                    رضاعة طبيعية وغيرها. احجز ميعادك اونلاين مجانا من غير ما تدفع اي رسوم اضافية<br>. وعشان نساعدك انك تختار
                    انسب دكتور دكتور اطفال وحديثي الولادة ليك، تقدر تشوف تقييم مرضى حقيقيين وتجاربهم مع الدكاترة <br>,وكمان
                    ممكن تعرف مستشفيات وعيادات<br> دكتور اطفال وحديثي الولادة في مصر اللي بتبقل تأمينك.</p>

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