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
                        <title>دكاتره نساءوتوليد</title>
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
                        body{
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
                        <div style="background-image:url(imag/Screenshot\ 2022-08-07\ 180455.gif);background-size: 100% 100%;" >
                        <h2 style="color: red;">احجز مع افضل دكتور <u> نساء وتوليد</u> في مصر</h2><br>
                        <h3>  احجز اونلاين او كلم</h3><img src="imag/Screenshot 2022-08-07 171038.gif" alt=""><br>
                        <p>دكتور واستشاري في جميع التخصصات   </p>

                        <br>
                        <header style="text-align: right; font-size: larger; display:inline;">

                        <nav>
                        <h1> <a href="project.php" class="logo"> مستشفي المستقبل التخصصي</a></h1>

                        <h1> <a href="form.php"> انضم الان</a> </h1>
                        <!-- sign up form -->
                        <h3 style="color:red;"> <a href="enter.php" >دخول</a></h3>
                            <h3><a href="mailto:info@future-wedge.com"> اتصل بنا</a></h3>
                        </nav>

                        </header>

        <header >
        <nav id="بحث"  style=" font-size:larger; background-color:pink; border: 5px solid;">
        <form method="GET">
            <ul>
                <li><button type="submit" name="search">ابحث</button></li>
                    <li><input type="text" name="Name"placeholder="ابحث هنا بالتخصص او اسم الدكتور او المحافظه" >  اكتب اسم الدكتور او التخصص او المحافظه  </li>
                   
                   
                </ul>
        </form>
        </nav>
        </header>
                        </div>
                        <section>
                        <form action="reservation.php" method="post">
                        <!--***********************************************************************************-->
                            <div style="border: 4px solid; border-color: lightseagreen; text-align: center;">
                                <div class="a">
                                <h1 style="font-style:italic; color:lightseagreen;">
                                    <?php $id='1';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[1];
                                        ?>
                                </h1>
                                <img src="https://cdn-dr-images.vezeeta.com/Assets/Images/SelfServiceDoctors/ENTbb38ba/Profile/150/doctor-doaa-salah-el-din-mahmoud-gynaecology-and-infertility_20200307115334135.jpg" ></div>
                                <br> 
                                <h3> 
                                    <?php $id='1';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[2];
                                        ?>
                                </h3> <br>
                                <img src="imag/Screenshot 2022-08-07 164216.gif" alt="" ><caption>التقيم العام من الزوار</caption><br>
                                <caption>
                                    <?php $id='1';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[3];
                                        ?>
                                </caption>

                                <img src="imag/Screenshot 2022-08-07 191840.gif" alt=""><br>
                                <caption>
                                    <?php $id='1';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[5];
                                        ?>  
                                </caption> <img src="imag/Screenshot 2022-08-07 192958.gif" alt=""><br>
                                <caption>
                                    الكشف:
                                    <?php $id='1';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[4];
                                        ?>
                                        جنيه
                                </caption>
                                <img src="imag/Screenshot 2022-08-07 193107.gif" alt=""><br>
                                <button type="submit"> احجز الان</button>
                                <caption>مده الانتظار : 
                                    <?php $id='1';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[7];
                                    ?>
                                دقيقه
                                </caption>
                                <img src="imag/Screenshot 2022-08-07 193139.gif" alt="">  
                                </div>
                                <!--******************** دكتور دعاء صلاح الدين محمود  ************************ -->


                                <div style="border: 4px solid; border-color: lightseagreen; text-align: center;">
                                <div class="a">
                                <h1 style="font-style:italic; color:lightseagreen;">
                                        <?php $id='2';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[1];
                                        ?>
                                </h1>
                                <img src="https://cdn-dr-images.vezeeta.com/Assets/Images/SelfServiceDoctors/ENTcddaba33a16f2640/Profile/150/doctor-hesham-essam-gynaecology-and-infertility_20220801230424496.jpg" ></div>
                                <br> 
                                <h3>      
                                    <?php $id='2';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[2];
                                        ?>
                                    </h3> <br>
                                <img src="imag/Screenshot 2022-08-07 164216.gif" alt="" ><caption>التقيم العام من الزوار</caption><br>
                                <caption>
                                    <?php $id='2';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[3];
                                        ?>
                                </caption>

                                <img src="imag/Screenshot 2022-08-07 191840.gif" alt=""><br>
                                <caption>
                                    <?php $id='2';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[5];
                                    ?>
                                </caption> <img src="imag/Screenshot 2022-08-07 192958.gif" alt=""><br>
                                <caption>
                                    الكشف: 
                                        <?php $id='2';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[4];
                                        ?> 
                                        جنيه
                                </caption>
                                <img src="imag/Screenshot 2022-08-07 193107.gif" alt=""><br>
                                <button type="submit" > احجز الان</button>

                                <caption>مده الانتظار : 
                                    <?php $id='2';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[7];
                                        ?>
                                دقيقه</caption>
                                <img src="imag/Screenshot 2022-08-07 193139.gif" alt="">  
                                </div>
                                            <!-- ********************دكتور هشام عصام *************************** -->


                        <div style="border: 4px solid; border-color: lightseagreen; text-align: center;">
                        <div class="a">
                        <h1 style="font-style:italic; color:lightseagreen;">
                                    <?php $id='3';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[1];
                                    ?> 
                        </h1>
                        <img src="https://cdn-dr-images.vezeeta.com/Assets/Images/SelfServiceDoctors/ENT7b5663/Profile/150/doctor-mahmoud-elsherif-gynaecology-and-infertility_20210523011310008.jpg" ></div>
                        <br> 
                        <h3>    
                                    <?php $id='3';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[2];
                                    ?>
                        </h3> <br>
                        <img src="imag/Screenshot 2022-08-07 164216.gif" alt="" ><caption>التقيم العام من الزوار</caption><br>
                        <caption>
                            
                                    <?php $id='3';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[3];
                                    ?>

                        </caption>

                        <img src="imag/Screenshot 2022-08-07 191840.gif" alt=""><br>
                        <caption>
                                    <?php $id='3';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[5];
                                    ?> 
                        </caption> <img src="imag/Screenshot 2022-08-07 192958.gif" alt=""><br>
                        <caption>الكشف:
                            
                                    <?php $id='3';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[4];
                                    ?>
                                جنيه
                        </caption>
                        <img src="imag/Screenshot 2022-08-07 193107.gif" alt=""><br>
                        <button type="submit" > احجز الان</button>

                        <caption>مده الانتظار : 
                            
                                <?php $id='3';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[7];
                                    ?> 
                                    دقيقه
                        </caption>
                        <img src="imag/Screenshot 2022-08-07 193139.gif" alt="">  
                        </div>


                                    <!-- **********************دكتور محمود الشريف ***************************** -->



                        <div style="border: 4px solid; border-color: lightseagreen; text-align: center;">
                        <div class="a">
                        <h1 style="font-style:italic; color:lightseagreen;">

                                    <?php $id='4';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[1];
                                    ?>
                        </h1>
                        <img src="https://cdn-dr-images.vezeeta.com/Assets/Images/SelfServiceDoctors/ENT97ac48/Profile/150/doctor-abo-bakr-al-nashar-gynaecology-and-infertility_20180319074745.jpg" ></div>
                        <br> 
                        <h3>     

                                    <?php $id='4';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[2];
                                    ?>
                        </h3> <br>
                        <img src="imag/Screenshot 2022-08-07 164216.gif" alt="" ><caption>التقيم العام من الزوار</caption><br>
                        <caption>

                                    <?php $id='4';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[3];
                                    ?>
                        </caption>

                        <img src="imag/Screenshot 2022-08-07 191840.gif" alt=""><br>
                        <caption>

                                    <?php $id='4';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[5];
                                    ?>
                        </caption> <img src="imag/Screenshot 2022-08-07 192958.gif" alt=""><br>
                        <caption>الكشف:
                                    <?php $id='4';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[4];
                                    ?>
                                جنيه
                        </caption>
                        <img src="imag/Screenshot 2022-08-07 193107.gif" alt=""><br>
                        <button type="submit" > احجز الان</button>

                        <caption>مده الانتظار : 
                                    <?php $id='4';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[7];
                                    ?> 
                            دقيقه
                        </caption>
                        <img src="imag/Screenshot 2022-08-07 193139.gif" alt="">  
                        </div>


                                <!--************************ دكتور ابو بكر النشار  **********************-->

                        <div style="border: 4px solid; border-color: lightseagreen; text-align: center;">
                        <div class="a">
                        <h1 style="font-style:italic; color:lightseagreen;">

                                    <?php $id='5';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[1];
                                    ?>
                        </h1>
                        <img src="https://cdn-dr-images.vezeeta.com/Assets/Images/SelfServiceDoctors/ENT511c809cd6889860/Profile/150/doctor-manal-ghobashy-obstetrics-and-gynecology_20171213005424531.jpg" ></div>
                        <br> 
                        <h3>     
                                    <?php $id='5';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[2];
                                    ?>
                        </h3> <br>
                        <img src="imag/Screenshot 2022-08-07 164216.gif" alt="" ><caption>التقيم العام من الزوار</caption><br>
                        <caption>

                                    <?php $id='5';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[3];
                                    ?>     
                        </caption>

                        <img src="imag/Screenshot 2022-08-07 191840.gif" alt=""><br>
                        <caption>

                                    <?php $id='5';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[5];
                                    ?>
                        </caption> <img src="imag/Screenshot 2022-08-07 192958.gif" alt=""><br>
                        <caption>الكشف:

                                    <?php $id='5';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[4];
                                    ?> جنيه
                        </caption>
                        <img src="imag/Screenshot 2022-08-07 193107.gif" alt=""><br>
                        <button type="submit" > احجز الان</button>

                        <caption>مده الانتظار : 
                                    <?php $id='5';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[7];
                                    ?>
                                        دقيقه
                        </caption>
                        <img src="imag/Screenshot 2022-08-07 193139.gif" alt="">  
                        </div>


                            <!-- ***********************دكتور منال غباشي *****************************  -->



                        <div style="border: 4px solid; border-color: lightseagreen; text-align: center;">
                        <div class="a">
                        <h1 style="font-style:italic; color:lightseagreen;">
                                    <?php $id='6';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[1];
                                    ?>
                            </h1>
                        <img src="https://cdn-dr-images.vezeeta.com/Assets/Images/SelfServiceDoctors/ENTb90267/Profile/150/doctor-hany-kashef-gynaecology-and-infertility_20210814181303184.jpg" ></div>
                        <br> 
                        <h3>       

                                    <?php $id='6';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[2];
                                    ?>
                        </h3> <br>
                        <img src="imag/Screenshot 2022-08-07 164216.gif" alt="" ><caption>التقيم العام من الزوار</caption><br>
                        <caption>
                                    <?php $id='6';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[3];
                                    ?>
                        </caption>

                        <img src="imag/Screenshot 2022-08-07 191840.gif" alt=""><br>
                        <caption>
                                    <?php $id='6';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[5];
                                    ?>
                        </caption> <img src="imag/Screenshot 2022-08-07 192958.gif" alt=""><br>
                        <caption>الكشف:
                                    <?php $id='6';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[4];
                                    ?> 
                                    جنيه
                        </caption>
                        <img src="imag/Screenshot 2022-08-07 193107.gif" alt=""><br>
                        <button type="submit" > احجز الان</button>

                        <caption>مده الانتظار : 
                                    <?php $id='6';
                                        $query = mysqli_query($con,"select *from women where ID='$id'");
                                        echo mysqli_fetch_array($query)[7];
                                    ?>
                                        دقيقه
                        </caption>
                        <img src="imag/Screenshot 2022-08-07 193139.gif" alt="">  
                        </div>


                                <!--****************** دكتور هاني كاشف  ********************* -->
                                <article>

                                    <div>

                                        <h1>اسئلة مكررة</h1>

                                        <h3>ازاي احجز موعد في نفس اليوم مع دكتور نساء وتوليد؟</h3>
                                        <p>تستطيع أن تدخل على موقع أو تطبيق مستشفي المستقبل التخصصي وتبحث عن دكاترة نساء وتوليد في منطقتك،
                                            اختار 'اليوم' من المواعيد المتاحة في محدد البحث اعلى الصفحة واحجز في أقل من دقيقة.</p>


                                        <h3>ازاي اقدر ابحث عن دكتور نساء وتوليد تابع للتأمين الخص بي</h3>

                                        <p>مستشفي المستقبل التخصصي توفر لك فرصة البحث عن دكاترةنساء وتوليد يقبلون التامين الخاص بك على وجه
                                            التحديد.
                                            اختار شركه التامين
                                            الخاصة بك من محدد البحث اعلى الصفحة واحجز في أقل من دقيقة.</p>


                                        <h3>ازاي اقدر احجز موعد من علي الانترنت مع دكتور نساء وتوليد
                                            <P>مستشفي المستقبل التخصصي هي خدمه مجانيه على الانترنت، تساعد المرضى في ايجاد دكاترة نساء وتوليد
                                                أو أي تخصص
                                                آخر وحجز ميعاد
                                                فورا. ثم عند اختيار الموعد المطلوب والمنطقة يمكنك اختيار شركة التامين الخاصة بك اذا توفر لديك.
                                                وبناءا على المعلومات التي ادخلتها، ستظهر لك قائمه بكل الدكاترة الذين يطابقون معايير البحث،
                                                بالاضافة
                                                لقائمة مواعيدهم المتاحة.</P>

                                            <h3> هل اقدر اختار دكتور نساء وتوليد</h3>

                                            <P>عند البحث عن دكاترة نساء وتوليد في مستشفي المستقبل التخصصي، تستطيع تحديد نتائج البحث الخاصة
                                                بك حسب الجنس،
                                                بالاضافة لمعايير
                                                بحث اخرى. وبهذه الطريقة، سيتم عرض الدكاترة الذين يطابقون تفضيلاتك فقط.</P>


                                            <h3>هل اقدر ابحث عن مواعيد ف نفس اليوم لدكتور نساء وتوليد</h3>

                                            <P>تستطيع استخدام بحث مستشفي المستقبل التخصصي للعثور على دكاترة نساء وتوليد حسب الاعلى تصنيفا من
                                                خلال تقييمات
                                                المرضى السابقين
                                                الذين قاموا باتمام الزيارة حيث ان في كل مرة يكمل فيها المريض موعد محجوز من على مستشفي المستقبل
                                                التخصصي، تتم دعوته
                                                لمراجعه وتقييم تجربته وابداء رأيه في الزيارة.</P>



                                    </div>

                                </article>
                                <br>
                                <hr>
                                <br>

                                <article>
                                    <div>

                                        <h4>التخصصات الفرعية الأكثر اختياراً</h4>

                                        <p>دكتور دكتور امراض نساء وتوليد - دكتور جراحة اورام نسائية - جراح تجميل نسائي - دكتور ولادة</p>

                                        <h4>نساء وتوليد</h4>

                                        <p>بتدور على احسن دكتور دكتور نساء وتوليد في مصر قريب منك؟ دلوقتي ڤيزيتا بتوفرلك امكانية حجز موعد مع
                                            افضل دكاترة دكتور نساء وتوليد متخصصين في مجالات مختلفة مثل امراض نساء وتوليد، جراحة اورام نسائية،
                                            جراحات تجميل نسائية وغيرها. احجز ميعادك اونلاين مجانا من غير ما تدفع اي رسوم اضافية. وعشان نساعدك
                                            انك تختار انسب دكتور دكتور نساء وتوليد ليك، تقدر تشوف تقييم مرضى حقيقيين وتجاربهم مع الدكاترة ,وكمان
                                            ممكن تعرف مستشفيات وعيادات دكتور نساء وتوليد في مصر اللي بتبقل تأمينك.</p>

                                    </div>

                                </article>
                            </form>
                        </section>

                            <footer>
                                <div style="text-align:center;border: 2px solid;background-color:pink;
                                    background-image:url(https://www.mymauritius.travel/sites/default/files/inline-images/Practice-socialphysical-distancing_1.png) ;
                                    background-size: 100% 100%; background-position: center center;">

                            <p>---------------------------------------------</p>
                            <p>---------------------------------------------</p>
                            <p>---------------------------------------------</p>

                            <h3>مستشفي المستقبل التخصصي</h3>
                            
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