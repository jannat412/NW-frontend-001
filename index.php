<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once './header.php';
?>
<!--Breaking news part start here-->
<script type="text/javascript">
    $(document).ready(function () {

        $('#breaking_news').carousel({
            interval: 2000
        });
        var current = $('#playPauseButton').attr('data-status');
        $('#playPauseButton').click(function () {
            if (current == 'pause') {
                current = 'play';
                $('#breaking_news').carousel('cycle');
                $(this).children(".glyphicon").addClass("glyphicon-play");
                $(this).children(".glyphicon").removeClass("glyphicon-pause");
            } else {
                current = 'pause';
                $('#breaking_news').carousel('pause');
                $(this).children(".glyphicon").removeClass("glyphicon-play");
                $(this).children(".glyphicon").addClass("glyphicon-pause");
            }
        })
    });
</script>
<div class="breaking-news">
    <div class="container">
        <div class="row breaking_news-content"> 
            <div class="col-md-12">
                <div class="breaking_news_lbl">Breaking News</div>
                <div id="breaking_news" class="carousel slide breaking_news_slider" data-ride="carousel"> 
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <a href="#">এবার প্যারাডাইজ পেপারস কেলেঙ্কারি</a>
                        </div>
                        <div class="item">
                            <a href="#">‘বিচারপতিরা না চাইলে তিনি কীভাবে বিচার করবেন?’</a> 
                        </div>
                        <div class="item">
                            <a href="#">স্পেন নয়, বেলজিয়ামে আত্মসমর্পণ করলেন পুজেমন</a> 
                        </div>
                        <div class="item">
                            <a href="#">‘বিচারপতিরা না চাইলে তিনি কীভাবে বিচার করবেন?’</a> 
                        </div>
                    </div> 
                </div>
                <div class="slider_controller">
                    <!-- Controls -->
                    <a class="left" href="#breaking_news" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="left" id="playPauseButton" href="javascript:void(0)" data-status="play">
                        <span class="glyphicon glyphicon glyphicon-play" aria-hidden="true"></span>
                        <span class="sr-only">Pause Play</span>
                    </a>
                    <a class="right" href="#breaking_news" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Breaking news part end here-->

<!-- News Content start here -->
<div class="news">
    <div class="container">
        <div class="row">
            <!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ News Protal Left Part start here @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
            <div class="news-content col-lg-6">
                <div class="main-news">
                    <h2><a href="#">বন্য প্রাণী পাচারের তালিকায় বাংলাদেশ</a></h2>
                    <a href="#">
                        <img src="images/river.JPG" alt="" class="img-responsive" width="200"/>
                        আজ বৃহস্পতিবার জাতীয় সংসদ অধিবেশনে পয়েন্ট অব অর্ডারে গৃহকর বাড়ানো নিয়ে বক্তব্য দেন তিনজন সাংসদ।
                        রাজধানীতে গৃহকর বাড়ানোর বিষয়টি পুনর্বিবেচনা করার আহ্বান জানিয়ে বাণিজ্যমন্ত্রী তোফায়েল আহমেদ বলেন, গৃহকর হঠাৎ করে নয় গুণ বাড়ানো হলে তা মানুষ গ্রহণ করবে না। এতে বিরূপ প্রতিক্রিয়া দেখা দেবে।
                        বাণিজ্যমন্ত্রী বলেন, কর বাড়বে, এটা অস্বাভাবিক নয়। কিন্তু সংশ্লিষ্ট কর্তৃপক্ষ অনেক বছর ধরে কর বাড়ায়নি। এখন একসঙ্গে নয় গুণ বাড়ানো হলে মানুষ তা গ্রহণ করবে না। গৃহকর ৮ হাজার টাকা থেকে হঠাৎ করে ৭২ হাজার টাকা হলে ব্যাপক প্রতিক্রিয়া হবে। এটি পুনর্বিবেচনা করা প্রয়োজন।
                        তোফায়েল আহমেদ বলেন, ‘জনপ্রতিনিধি হিসেবে আমরা রাজনীতি করি। রাজনীতির কতগুলো সময় থাকে। সেই বিষয়টি তিন-চার বছর আগে করা যেত, সেটা যদি সরকারের শেষ সময় এসে করে, তাহলে প্রতিক্রিয়া হতে বাধ্য। মন্ত্রিসভার সদস্য হিসেবে আমার পক্ষে সবকিছু বলা সম্ভব নয়।’
                    </a>

                </div>
                <!-- Sokaridol birodhidol part start here-->
                <div class="sorkaridol-birodhidol">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="sorkaridol-content">
                                <h1>
                                    <a href="#">সরকারী দল</a>
                                </h1>
                                <div class="thumbnail thumbnail-content">
                                    <a href="#">
                                        <img src="images/sekhhasina.jpg" alt="kader">
                                    </a>
                                    <div class="caption text">
                                        <h4><a href="#">খালেদা বিশৃঙ্খলা সৃষ্টির পাঁয়তারা করছেন: কাদের</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sorkaridol-content">
                                <h1>
                                    <a href="#">বিরোধী দল</a>
                                </h1>
                                <div class="thumbnail thumbnail-content">
                                    <a href="#">
                                        <img src="images/bnp.jpg" alt="bnp">
                                    </a>
                                    <div class="caption text">
                                        <h4><a href="#">কক্সবাজারে পৌঁছেছেন খালেদা জিয়া</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sokaridol birodhidol part end here-->
            </div>
            <!--@@@@@@@@@@@@@ News Protal Left Part end here @@@@@@@@@@@@@@@@-->



            <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$  News Protal Right part start here $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
            <div class="col-lg-6">
                <div class="row">
                    <!-- Mot-Demot part start here -->
                    <div class="col-lg-6">
                        <div class="mot-dimot">
                            <h2 class="text-center"><a href="#">মত-দ্বিমত</a></h2>
                            <div class="m-contents">
                                <div class="col-lg-4">
                                    <a href="#">
                                        <img src="images/khaleda.jpg" alt="khaleda" class="img-circle"/>
                                    </a>
                                </div>
                                <div class="col-lg-8 m-contents-likha">
                                    <a href="#">রোহিঙ্গাদের দীর্ঘদিন রাখা সম্ভব নয়: খালেদা জিয়া</a>
                                </div>
                            </div>
                            <div class="m-contents">
                                <div class="col-lg-4">
                                    <a href="#">
                                        <img src="images/khaleda.jpg" alt="khaleda" class="img-circle"/>
                                    </a>
                                </div>
                                <div class="col-lg-8 m-contents-likha">
                                    <a href="#">রোহিঙ্গাদের দীর্ঘদিন রাখা সম্ভব নয়: খালেদা জিয়া</a>
                                </div>
                            </div>
                            <div class="m-contents">
                                <div class="col-lg-4">
                                    <a href="#">
                                        <img src="images/khaleda.jpg" alt="khaleda" class="img-circle"/>
                                    </a>
                                </div>
                                <div class="col-lg-8 m-contents-likha">
                                    <a href="#">রোহিঙ্গাদের দীর্ঘদিন রাখা সম্ভব নয়: খালেদা জিয়া</a>
                                </div>
                            </div>
                            <div class="m-contents">
                                <div class="col-lg-4">
                                    <a href="#">
                                        <img src="images/khaleda.jpg" alt="khaleda" class="img-circle"/>
                                    </a>
                                </div>
                                <div class="col-lg-8 m-contents-likha">
                                    <a href="#">রোহিঙ্গাদের দীর্ঘদিন রাখা সম্ভব নয়: খালেদা জিয়া</a>
                                </div>
                            </div>
                            <div class="m-contents">
                                <div class="col-lg-4">
                                    <a href="#">
                                        <img src="images/khaleda.jpg" alt="khaleda" class="img-circle"/>
                                    </a>
                                </div>
                                <div class="col-lg-8 m-contents-likha">
                                    <a href="#">রোহিঙ্গাদের দীর্ঘদিন রাখা সম্ভব নয়: খালেদা জিয়া</a>
                                </div>
                            </div>
                        </div>
                        <!--=======Sakhatkar part start here=========-->
                        <div class="sakhatkar">
                            <h2 class="text-center"><a href="#">সাক্ষাৎকার</a></h2>
                            <div class="sakhatar-details">
                                <hr />
                                <div class="sakhtatkar-content">
                                    <div class="col-lg-4">
                                        <a href="#">
                                            <img src="images/noname.jpg" alt="noname" class="img-responsive"/>
                                        </a>
                                    </div>
                                    <div class="col-lg-8 text">
                                        <a href="#">
                                            <h4>পোশাকশিল্পের মালিকেরা অস্বস্তিতে ছিলেন</h4>
                                        </a>
                                    </div>
                                </div>
                                <hr />
                                <div class="sakhtatkar-content">
                                    <div class="col-lg-4">
                                        <a href="#">
                                            <img src="images/noname.jpg" alt="noname" class="img-responsive"/>
                                        </a>
                                    </div>
                                    <div class="col-lg-8 text">
                                        <a href="#">
                                            <h4>পোশাকশিল্পের মালিকেরা অস্বস্তিতে ছিলেন</h4>
                                        </a>
                                    </div>
                                </div>
                                <hr />
                                <div class="sakhtatkar-content">
                                    <div class="col-lg-4">
                                        <a href="#">
                                            <img src="images/noname.jpg" alt="noname" class="img-responsive"/>
                                        </a>
                                    </div>
                                    <div class="col-lg-8 text">
                                        <a href="#">
                                            <h4>পোশাকশিল্পের মালিকেরা অস্বস্তিতে ছিলেন</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=======Sakhatkar part end here=========-->

                    <!--Sorborcho Sorbadhik Part start here-->
                    <div class="col-lg-6">
                        <?php
                        require_once './sorbocho_sorbadhik.php';
                        ?>
                    </div>
                    <!--Sorborcho Sorbadhik Part end here-->
                </div>
            </div>
            <!--$$$$$$$$$$$$$$$  News Protal Right part start here $$$$$$$$$$$$$$$$$$$$-->
        </div>
    </div>
</div>

<!-- Khali Part start here-->
<div class="khali-part">
    <div class="container">
        <div class="row">
            <div class="content">

            </div>
        </div>
    </div>
</div>
<!-- Khali Part end here-->

<!-- jatio news Part start here-->
<div class="jatio-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="jatio-content">
                    <h1><a href="#">জাতীয় খবর</a></h1>
                    <hr />
                    <div class="col-lg-6">
                        <div class="thumbnail thumbnail-content">
                            <a href="#"><img src="images/tashkin.jpg" alt="taskin"></a>
                            <div class="caption">
                                <a href="#"><h4>নেইমার কেন ফ্রান্সের ফুটবলে, বুঝছেন না ক্যান্টোনা</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumbnail thumbnail-content">
                            <a href="#"><img src="images/tree.jpg" alt="Tree"></a>
                            <div class="caption">
                                <a href="#"><h4>উত্তরা গণভবনের গাছ চুরি</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumbnail thumbnail-content">
                            <a href="#"><img src="images/tashkin.jpg" alt="taskin"></a>
                            <div class="caption">
                                <a href="#"><h4>বিয়ে করলেন তাসকিন</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumbnail thumbnail-content">
                            <a href="#"><img src="images/tree.jpg" alt="Tree"></a>
                            <div class="caption">
                                <a href="#"><h4>উত্তরা গণভবনের গাছ চুরি</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumbnail thumbnail-content">
                            <a href="#"><img src="images/tashkin.jpg" alt="taskin"></a>
                            <div class="caption">
                                <a href="#"><h4>বিয়ে করলেন তাসকিন</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumbnail thumbnail-content">
                            <a href="#"><img src="images/tree.jpg" alt="Tree"></a>
                            <div class="caption">
                                <a href="#"><h4>উত্তরা গণভবনের গাছ চুরি</h4></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- jatio news Part start here-->


            <!-- Facebook like box Part start here-->
            <div class="col-lg-6">
                <div class="row">
                    <div class="facebook-page">
                        <div id="fb-root"></div>
                        <script>(function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id))
                                    return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10';
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>

                        <div style="width: 586px; padding: 0px 0px 0px 50px;" >
                            <div class="fb-page"
                                 data-href="https://www.facebook.com/facebook" 
                                 data-tabs="timeline"
                                 data-width="586" 
                                 data-height="380" 
                                 data-small-header="true" 
                                 data-adapt-container-width="true" 
                                 data-hide-cover="false" 
                                 data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/facebook" 
                                            class="fb-xfbml-parse-ignore">
                                    <a href="https://www.facebook.com/facebook">Facebook</a>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Archive part start here -->
                <div class="row">
                    <div class="archive">
                        <h1><a href="#">ফেসবুক কথন</a></h1>
                        <hr />
                        <div class="col-lg-4">
                            <div class="thumbnail thumbnail_content">
                                <a href="#"><img src="images/fb1.jpg" alt="facebo"></a>
                                <div class="caption">
                                    <h3>
                                        <a href="#">নতুন আইফোনে যা যা নতুন</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="thumbnail thumbnail_content">
                                <a href="#"><img src="images/fb1.jpg" alt="facebo"></a>
                                <div class="caption">
                                    <h3>
                                        <a href="#">নতুন আইফোনে যা যা নতুন</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="thumbnail thumbnail_content">
                                <a href="#"><img src="images/fb1.jpg" alt="facebo"></a>
                                <div class="caption">
                                    <h3>
                                        <a href="#">নতুন আইফোনে যা যা নতুন</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Archive part end here -->
            </div>
            <!-- Facebook like box Part end here-->
        </div>
    </div>
</div>

<!--Advertise part start here-->
<div class="advertise">
    <div class="container">
        <div class="row">
            <div class="add-content">

            </div>
        </div>
    </div>
</div>
<!--Advertise part end here-->


<!--Kheladhula part start here-->
<div class="kheladhula-part">
    <div class="container">
        <div class="row">
            <div class="kheladhula-total-contet">
                <a href="#"><h1>খেলাধুলা</h1></a>
                <hr />
                <!--Kheladhula First part start here-->
                <div class= "col-lg-6">
<<<<<<< HEAD:index.html
                    <div class="main_news">
                        <div class="col-lg-8">
                            <a href="#"><img src="images/a.jpg" alt="Sachin" class="img-responsive"></a>
                        </div>
                        <div class="col-lg-4 details">
                            <h3><a href="#">রান করার রহস্য—আপেল আর গোসল!</a></h3>
                            <a href="#"><p>কলকাতা টেস্টে লিডটা বেশ ভালোই হলো শ্রীলঙ্কার। ভারতের ১৭২ রানের জবাবে প্রথম ইনিংসে ২৯৪—১২২ রানে এগিয়ে নিজেদের অবস্থানটা বেশ শক্তই করল তারা। ২০১০ সালে গল টেস্টের পর ভারতের বিপক্ষে এটিই প্রথম শ্রীলঙ্কা প্রথম ইনিংসে লিড নিল। ভারত ভুলেই গিয়েছিল শ্রীলঙ্কা লিড নিলে কেমন লাগে। ২০১১ সালে অভিষিক্ত কোহলি ক্যারিয়ারে প্রথম দেখলেন, শ্রীলঙ্কা লিড নিচ্ছে তাঁর দলের বিপক্ষে!</p></a>
=======
                    <div class="thumbnail kheladhula-thumbnail">
                        <a href="#"><img src="images/a.jpg" alt="Sachin"></a>
                        <div class="caption kheladhula-thumbnail-likha">
                            <a href="#"><h3>রান করার রহস্য—আপেল আর গোসল!</h3></a>
>>>>>>> 6bdd1d8440a8df99f5d06c097fcdf8bcea55b50f:index.php
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
<<<<<<< HEAD:index.html
                    <div class="row">
                        <div class="kheladhula-2nd-part">
                            <div class="col-lg-6">
                                <div class="thumbnail kheladhula-2nd-part-thumbnail">
                                    <a href="#"><img src="images/psg.jpg" alt="PSG"></a>
                                    <div class="caption">
                                        <h3><a href="#">নেইমারকে ছাপিয়ে নায়ক যখন কুরজাওয়া</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="thumbnail kheladhula-2nd-part-thumbnail">
                                    <a href="#"><img src="images/psg.jpg" alt="PSG"></a>
                                    <div class="caption">
                                        <h3><a href="#">নেইমারকে ছাপিয়ে নায়ক যখন কুরজাওয়া</a></h3>
                                    </div>
                                </div>
                            </div>
=======
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#">
                                <img class="media-object" src="images/psg.jpg" alt="PSG">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">নেইমারকে ছাপিয়ে নায়ক যখন কুরজাওয়া</a></h4>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#">
                                <img class="media-object" src="images/psg.jpg" alt="PSG">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">নেইমারকে ছাপিয়ে নায়ক যখন কুরজাওয়া</a></h4>
>>>>>>> 6bdd1d8440a8df99f5d06c097fcdf8bcea55b50f:index.php
                        </div>
                    </div>
                </div>
                <!--Kheladhula First part end here-->

                <!--Kheladhula-2nd-part start here-->
                <div class="kheladhula-2nd-part">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-3">
                                <div class="thumbnail kheladhula-2nd-part-thumbnail">
                                    <a href="#"><img src="images/psg.jpg" alt="PSG"></a>
                                    <div class="caption">
<<<<<<< HEAD:index.html
                                        <h3><a href="#">নেইমারকে ছাপিয়ে নায়ক যখন কুরজাওয়া</a></h3>
=======
                                        <a href="#"><h3>নেইমারকে ছাপিয়ে নায়ক যখন কুরজাওয়া</h3></a>
>>>>>>> 6bdd1d8440a8df99f5d06c097fcdf8bcea55b50f:index.php
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="thumbnail kheladhula-2nd-part-thumbnail">
                                    <a href="#"><img src="images/chan.jpg" alt="Chan"></a>
                                    <div class="caption">
<<<<<<< HEAD:index.html
                                        <h3><a href="#">ঘরের মাঠে রোমার দাপুটে জয়</a></h3>
=======
                                        <a href="#"><h3>ঘরের মাঠে রোমার দাপুটে জয়</h3></a>
>>>>>>> 6bdd1d8440a8df99f5d06c097fcdf8bcea55b50f:index.php
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="thumbnail kheladhula-2nd-part-thumbnail">
                                    <a href="#"><img src="images/bolt.jpg" alt="Bolt"></a>
                                    <div class="caption">
<<<<<<< HEAD:index.html
                                        <h3><a href="#">ব্যবসায়ী বোল্ট</a></h3>
=======
                                        <a href="#"><h3>ব্যবসায়ী বোল্ট</h3></a>
>>>>>>> 6bdd1d8440a8df99f5d06c097fcdf8bcea55b50f:index.php
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="thumbnail kheladhula-2nd-part-thumbnail">
                                    <a href="#"><img src="images/mas.jpg" alt="Mash"></a>
                                    <div class="caption">
<<<<<<< HEAD:index.html
                                        <h3><a href="#">‘...কারণ এরা দক্ষিণ আফ্রিকায় খেলেনি’</a></h3>
=======
                                        <a href="#"><h3>‘...কারণ এরা দক্ষিণ আফ্রিকায় খেলেনি’</h3></a>
>>>>>>> 6bdd1d8440a8df99f5d06c097fcdf8bcea55b50f:index.php
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Kheladhula-2nd-part end here-->
        </div>
    </div>
</div>
<!--Kheladhula part end here-->

<!--Rajniti part start here-->
<div class="rajniti-part">
    <div class="container">
        <div class="row">
            <div class="rajniti-part-2">
                <div class="col-lg-8">
                    <div class="total-content">
                        <a href="#"><h1>রাজনীতি</h1></a>
                        <hr />
<<<<<<< HEAD:index.html
                        <div class="main_news">
                            <div class="col-lg-8">
                                <a href="#">
                                    <img class="main-image" src="images/raj1.jpg" alt="Mirjja Fokrul" />
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <div class="rajniti-content">
                                    <h2><a href="#">৭ মার্চের ভাষণ লিখিত ছিল না : প্রধানমন্ত্রী</a></h2>
                                    <a href="#"><p>বঙ্গবন্ধু শেখ মুজিবুর রহমানের ঐতিহাসিক ৭ মার্চের ভাষণ লিখিত ছিল না বলে জানিয়েছেন আওয়ামী লীগের সভাপতি ও প্রধানমন্ত্রী শেখ হাসিনা। শনিবার রাজধানীর সোহরাওয়ার্দী উদ্যানে ইউনেসকো কর্তৃক ৭ মার্চের ভাষণকে ওয়ার্ল্ড হেরিটেজ ডকুমেন্ট স্বীকৃতি প্রদান উপলক্ষে আয়োজিত নাগরিক সমাবেশে প্রধান অতিথির বক্তব্যে তিনি এ মন্তব্য করেন।</p></a>
                                </div>
=======
                        <div class="col-lg-8">
                            <a href="#">
                                <img class="main-image" src="images/mirjjafokrul.jpg" alt="Mirjja Fokrul" />
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <div class="rajniti-content">
                                <a href="#"><h2>কাল সারা দেশে বিএনপির বিক্ষোভ</h2></a>
                                <a href="#"><p>মির্জা ফখরুল ইসলাম আলমগীর বিএনপির চেয়ারপারসন খালেদা জিয়ার গাড়িবহরে হামলার প্রতিবাদে কর্মসূচি ঘোষণা করেছে দলটি। আগামীকাল বৃহস্পতিবার সারা দেশের জেলা সদরে এবং শনিবার ঢাকা মহানগরে সব থানায় বিক্ষোভ কর্মসূচির ডাক দিয়েছে বিএনপি</p></a>
>>>>>>> 6bdd1d8440a8df99f5d06c097fcdf8bcea55b50f:index.php
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-4">
                                    <div class="thumbnail thumbnail-contents">
<<<<<<< HEAD:index.html
                                        <a href="#"><img src="images/raj2.jpg" alt="Rain"></a>
                                        <div class="caption thumbnail-caption">
                                            <h3><a href="#">‘দুই মিনিবাসে ৮০ জন নিয়ে এসেছি’</a></h3>
=======
                                        <a href="#"><img src="images/rain.jpg" alt="Rain"></a>
                                        <div class="caption thumbnail-caption">
                                            <a href="#"><h3>এই বৃষ্টির দিনে</h3></a>
                                            <a href="#"><p>নিম্নচাপের প্রভাবে টানা বৃষ্টি হচ্ছে বগুড়ায়। এর মধ্যেই জীবনের প্রয়োজনে ছাতা মাথায় কাজে বের হয়েছেন</p></a>
>>>>>>> 6bdd1d8440a8df99f5d06c097fcdf8bcea55b50f:index.php
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="thumbnail thumbnail-contents">
<<<<<<< HEAD:index.html
                                        <a href="#"><img src="images/raj3.jpg" alt="Rain"></a>
                                        <div class="caption thumbnail-caption">
                                            <h3><a href="#">তারেকের জন্মদিনে কেক কাটবেন খালেদা</a></h3>
=======
                                        <a href="#"><img src="images/rain.jpg" alt="Rain"></a>
                                        <div class="caption thumbnail-caption">
                                            <a href="#"><h3>এই বৃষ্টির দিনে</h3></a>
                                            <a href="#"><p>নিম্নচাপের প্রভাবে টানা বৃষ্টি হচ্ছে বগুড়ায়। এর মধ্যেই জীবনের প্রয়োজনে ছাতা মাথায় কাজে বের হয়েছেন</p></a>
>>>>>>> 6bdd1d8440a8df99f5d06c097fcdf8bcea55b50f:index.php
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="thumbnail thumbnail-contents">
<<<<<<< HEAD:index.html
                                        <a href="#"><img src="images/raj4.jpg" alt="Rain"></a>
                                        <div class="caption thumbnail-caption">
                                            <h3><a href="#">আওয়ামী লীগের প্রতিনিধি দল রংপুর যাচ্ছে রোববার</a></h3>
=======
                                        <a href="#"><img src="images/rain.jpg" alt="Rain"></a>
                                        <div class="caption thumbnail-caption">
                                            <a href="#"><h3>এই বৃষ্টির দিনে</h3></a>
                                            <a href="#"><p>নিম্নচাপের প্রভাবে টানা বৃষ্টি হচ্ছে বগুড়ায়। এর মধ্যেই জীবনের প্রয়োজনে ছাতা মাথায় কাজে বের হয়েছেন </p></a>
>>>>>>> 6bdd1d8440a8df99f5d06c097fcdf8bcea55b50f:index.php
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
<<<<<<< HEAD:index.html
                    <div class="row">
=======
>>>>>>> 6bdd1d8440a8df99f5d06c097fcdf8bcea55b50f:index.php

                </div>
            </div>
        </div>
    </div>
</div>
<!--Rajniti part end here-->


<!--Internation Orthoniti part start here-->
<div class="technology-lifestyle">
    <div class="international">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="total-content">
                        <a href="#"><h1>আন্তর্জাতিক</h1></a>
                        <hr />
                        <div class="col-lg-4">
                            <div class="thumbnail thumbnail-contents">
                                <a href="#"><img src="images/in1.jpg" alt="Suchi"></a>
                                <div class="caption thumbnail-caption">
                                    <h3><a href="#">ট্রাম্পের পরমাণু হামলার নির্দেশ মানবে না</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="thumbnail thumbnail-contents">
                                <a href="#"><img src="images/in2.jpg" alt="Osama"></a>
                                <div class="caption thumbnail-caption">
                                    <h3><a href="#">সংকেত মিলেছে আর্জেন্টিনার সাবমেরিনের</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="thumbnail thumbnail-contents">
                                <a href="#"><img src="images/in3.jpg" alt="India"></a>
                                <div class="caption thumbnail-caption">
                                    <h3><a href="#">কংগ্রেসের সভাপতি হচ্ছেন রাহুল গান্ধী?</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="thumbnail thumbnail-contents">
                                <a href="#"><img src="images/in4.jpg" alt="Suchi"></a>
                                <div class="caption thumbnail-caption">
                                    <h3><a href="#">বুধবারের মধ্যে দেশে ফিরবেন হারিরি</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="thumbnail thumbnail-contents">
                                <a href="#"><img src="images/in5.jpg" alt="Osama"></a>
                                <div class="caption thumbnail-caption">
                                    <h3><a href="#">বেইজিংয়ে ভবনে অগ্নিকাণ্ড : নিহত ১৯</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="thumbnail thumbnail-contents">
                                <a href="#"><img src="images/in6.jpg" alt="India"></a>
                                <div class="caption thumbnail-caption">
                                    <h3><a href="#">এবার প্যারাডাইস পেপারসে ১০ বাংলাদেশি</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Aourthoniti part start here-->
                <div class="aourthoniti">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="aourthoniti-total-content">
                                <a href="#"><h1>অর্থনীতি</h1></a>
                                <hr />
                                <div class="total-content-2">
                                    <div class="col-lg-5">
                                        <a href="#">
                                            <img src="images/eco1.jpg" alt="jibonjapon" />
                                        </a>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="details">
                                            <h4><a href="#">যন্ত্রে তৈরি জাজিমের বাজার বড় হচ্ছে</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="total-content-2">
                                    <div class="col-lg-5">
                                        <a href="#">
                                            <img src="images/eco2.jpg" alt="Apurthoniti" />
                                        </a>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="details">
                                            <h4><a href="#">পাঁচ রপ্তানিকারক পেল এইচএসবিসি পদক</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="total-content-2">
                                    <div class="col-lg-5">
                                        <a href="#">
                                            <img src="images/eco3.jpg" alt="Apurthoniti" />
                                        </a>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="details">
                                            <h4><a href="#">কর আদায়ে সাংঘাতিক রকমের দুর্বলতা আছে</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="total-content-2">
                                    <div class="col-lg-5">
                                        <a href="#">
                                            <img src="images/eco4.jpg" alt="Apurthoniti" />
                                        </a>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="details">
                                            <h4><a href="#">চা পানে বিশ্বে দশম স্থানে বাংলাদেশিরা</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="total-content-2">
                                    <div class="col-lg-5">
                                        <a href="#">
                                            <img src="images/eco5.jpg" alt="jibonjapon" />
                                        </a>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="details">
                                            <h4><a href="#">চালের দাম এখনো চড়া</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="total-content-2">
                                    <div class="col-lg-5">
                                        <a href="#">
                                            <img src="images/eco6.jpg" alt="jibonjapon" />
                                        </a>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="details">
                                            <h4><a href="#">পোশাকশ্রমিকদের মজুরি বাড়াতে চান মালিকেরা!</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Aourthoniti part end here-->
            </div>
        </div>
    </div>
</div>
<!--Internation Orthoniti part end here-->


<!--Binodon part start here-->
<div class="kheladhula-part">
    <div class="container">
        <div class="row">
            <div class="kheladhula-total-contet">
                <a href="#"><h1>বিনোদন</h1></a>
                <hr />
                <!--Kheladhula First part start here-->
                <div class= "col-lg-6">
<<<<<<< HEAD:index.html
                    <div class="main_news">
                        <div class="col-lg-8">
                            <a href="#"><img src="images/bin1.jpg" alt="Sachin" class="img-responsive"></a>
                        </div>
                        <div class="col-lg-4 details">
                            <h3><a href="#">রান করার রহস্য—আপেল আর গোসল!</a></h3>
                            <a href="#"><p>কলকাতা টেস্টে লিডটা বেশ ভালোই হলো শ্রীলঙ্কার। ভারতের ১৭২ রানের জবাবে প্রথম ইনিংসে ২৯৪—১২২ রানে এগিয়ে নিজেদের অবস্থানটা বেশ শক্তই করল তারা। ২০১০ সালে গল টেস্টের পর ভারতের বিপক্ষে এটিই প্রথম শ্রীলঙ্কা প্রথম ইনিংসে লিড নিল। ভারত ভুলেই গিয়েছিল শ্রীলঙ্কা লিড নিলে কেমন লাগে। ২০১১ সালে অভিষিক্ত কোহলি ক্যারিয়ারে প্রথম দেখলেন, শ্রীলঙ্কা লিড নিচ্ছে তাঁর দলের বিপক্ষে!</p></a>
=======
                    <div class="thumbnail kheladhula-thumbnail">
                        <a href="#"><img src="images/binodon1.jpg" alt="jesia"></a>
                        <div class="caption kheladhula-thumbnail-likha">
                            <a href="#"><h3>‘ফাইনাল ফোরটি’ থেকে বাদ জেসিয়া</h3></a>
>>>>>>> 6bdd1d8440a8df99f5d06c097fcdf8bcea55b50f:index.php
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
<<<<<<< HEAD:index.html
                    <div class="row">
                        <div class="kheladhula-2nd-part">
                            <div class="col-lg-6">
                                <div class="thumbnail kheladhula-2nd-part-thumbnail">
                                    <a href="#"><img src="images/bin2.jpg" alt="PSG"></a>
                                    <div class="caption">
                                        <h3><a href="#">নেইমারকে ছাপিয়ে নায়ক যখন কুরজাওয়া</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="thumbnail kheladhula-2nd-part-thumbnail">
                                    <a href="#"><img src="images/bin3.jpg" alt="PSG"></a>
                                    <div class="caption">
                                        <h3><a href="#">নেইমারকে ছাপিয়ে নায়ক যখন কুরজাওয়া</a></h3>
                                    </div>
                                </div>
                            </div>
=======
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#">
                                <img class="media-object" src="images/salmankhan.jpg" alt="PSG">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">বিপাকে উর্বশী</a></h4>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#">
                                <img class="media-object" src="images/shakib.jpg" alt="PSG">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">ছেলেকে রেখে কলকাতায় অপু, শাকিব দেখেন তালা</a></h4>
>>>>>>> 6bdd1d8440a8df99f5d06c097fcdf8bcea55b50f:index.php
                        </div>
                    </div>
                </div>
                <!--Kheladhula First part end here-->

                <!--Kheladhula-2nd-part start here-->
                <div class="kheladhula-2nd-part">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-3">
                                <div class="thumbnail kheladhula-2nd-part-thumbnail">
<<<<<<< HEAD:index.html
                                    <a href="#"><img src="images/bin4.jpg" alt="PSG"></a>
                                    <div class="caption">
                                        <h3><a href="#">নেইমারকে ছাপিয়ে নায়ক যখন কুরজাওয়া</a></h3>
=======
                                    <a href="#"><img src="images/jesia.jpg" alt="PSG"></a>
                                    <div class="caption">
                                        <a href="#"><h3>‘ফাইনাল ফোরটি’ থেকে বাদ জেসিয়া</h3></a>
>>>>>>> 6bdd1d8440a8df99f5d06c097fcdf8bcea55b50f:index.php
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="thumbnail kheladhula-2nd-part-thumbnail">
                                    <a href="#"><img src="images/habib.jpg" alt="Chan"></a>
                                    <div class="caption">
<<<<<<< HEAD:index.html
                                        <h3><a href="#">ঘরের মাঠে রোমার দাপুটে জয়</a></h3>
=======
                                        <a href="#"><h3>‘সুরসম্রাটের হাত থেকে পুরস্কার পেলাম’</h3></a>
>>>>>>> 6bdd1d8440a8df99f5d06c097fcdf8bcea55b50f:index.php
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="thumbnail kheladhula-2nd-part-thumbnail">
<<<<<<< HEAD:index.html
                                    <a href="#"><img src="images/bin6.jpg" alt="Bolt"></a>
                                    <div class="caption">
                                        <h3><a href="#">ব্যবসায়ী বোল্ট</a></h3>
=======
                                    <a href="#"><img src="images/tilta.jpg" alt="Bolt"></a>
                                    <div class="caption">
                                        <a href="#"><h3>টিলডার কাছে ঢাকা এক স্মৃতিময় শহর</h3></a>
>>>>>>> 6bdd1d8440a8df99f5d06c097fcdf8bcea55b50f:index.php
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="thumbnail kheladhula-2nd-part-thumbnail">
<<<<<<< HEAD:index.html
                                    <a href="#"><img src="images/bin7.jpg" alt="Mash"></a>
                                    <div class="caption">
                                        <h3><a href="#">‘...কারণ এরা দক্ষিণ আফ্রিকায় খেলেনি’</a></h3>
=======
                                    <a href="#"><img src="images/amisa.jpg" alt="Mash"></a>
                                    <div class="caption">
                                        <a href="#"><h3>খোলামেলা ছবি দিয়ে বিতর্কে আমিশা!’</h3></a>
>>>>>>> 6bdd1d8440a8df99f5d06c097fcdf8bcea55b50f:index.php
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Kheladhula-2nd-part end here-->
        </div>
    </div>
</div>
<!--Binodon part end here-->

<!--sahitto part start here-->
<div class="rajniti-part">
    <div class="container">
        <div class="row">
            <div class="rajniti-part-2">
<<<<<<< HEAD:index.html
                <div class="col-lg-8">
                    <div class="total-content">
                        <a href="#"><h1>সাহিত্য</h1></a>
                        <hr />
                        <div class="main_news">
                            <div class="col-lg-8">
                                <a href="#">
                                    <img class="main-image" src="images/sikhha.jpg" alt="Mirjja Fokrul" />
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <div class="rajniti-content">
                                    <h2><a href="#">ঢাকা বিশ্ববিদ্যালয়কে আর কত নিচে নামাব আমরা?</a></h2>
                                    <a href="#"><p>অনেক পণ্ডিত ও বিদগ্ধজন ঢাকা বিশ্ববিদ্যালয়কে ‘বিশ্ববিদ্যালয়ের চেয়ে অধিক কিছু’ বলে থাকেন। কারণটি এই যে প্রতিষ্ঠার পর থেকে এ ভূখণ্ডে শিক্ষার বিস্তার, শি‌ক্ষিত মধ্যবিত্ত শ্রেণির বিকাশ ও বাঙালি জাতি গঠনে অবদান রাখার মধ্য দিয়ে ঢাকা বিশ্ববিদ্যালয় হয়ে ওঠে</p></a>
                                </div>
=======
                <div class="col-lg-9">
                    <div class="total-content">
                        <a href="#"><h1>সাহিত্য</h1></a>
                        <hr />
                        <div class="col-lg-8">
                            <a href="#">
                                <img class="main-image" src="images/sikhha.jpg" alt="Mirjja Fokrul" />
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <div class="rajniti-content">
                                <a href="#"><h2>ঢাকা বিশ্ববিদ্যালয়কে আর কত নিচে নামাব আমরা?</h2></a>
                                <a href="#"><p>অনেক পণ্ডিত ও বিদগ্ধজন ঢাকা বিশ্ববিদ্যালয়কে ‘বিশ্ববিদ্যালয়ের চেয়ে অধিক কিছু’ বলে থাকেন। কারণটি এই যে প্রতিষ্ঠার পর থেকে এ ভূখণ্ডে শিক্ষার বিস্তার, শি‌ক্ষিত মধ্যবিত্ত শ্রেণির বিকাশ ও বাঙালি জাতি গঠনে অবদান রাখার মধ্য দিয়ে ঢাকা বিশ্ববিদ্যালয় হয়ে ওঠে</p></a>
>>>>>>> 6bdd1d8440a8df99f5d06c097fcdf8bcea55b50f:index.php
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-4">
                                    <div class="thumbnail thumbnail-contents">
                                        <a href="#"><img src="images/sikhha2.jpg" alt="Rain"></a>
                                        <div class="caption thumbnail-caption">
<<<<<<< HEAD:index.html
                                            <h3><a href="#">এত ‘উচ্চশিক্ষিত’ মানুষের কাজ কী?</a></h3>
=======
                                            <a href="#"><h3>এত ‘উচ্চশিক্ষিত’ মানুষের কাজ কী?</h3></a>
                                            <a href="#" class="details"><p>নিম্নচাপের প্রভাবে টানা বৃষ্টি হচ্ছে বগুড়ায়। এর মধ্যেই জীবনের প্রয়োজনে ছাতা মাথায় কাজে বের হয়েছেন</p></a>
>>>>>>> 6bdd1d8440a8df99f5d06c097fcdf8bcea55b50f:index.php
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="thumbnail thumbnail-contents">
                                        <a href="#"><img src="images/sikhha3.jpg" alt="Rain"></a>
                                        <div class="caption thumbnail-caption">
<<<<<<< HEAD:index.html
                                            <h3><a href="#">মেডিকেল পারে, বিশ্ববিদ্যালয় পারে না!</a></h3>
=======
                                            <a href="#"><h3>মেডিকেল পারে, বিশ্ববিদ্যালয় পারে না!</h3></a>
                                            <a href="#" class="details"><p>নিম্নচাপের প্রভাবে টানা বৃষ্টি হচ্ছে বগুড়ায়। এর মধ্যেই জীবনের প্রয়োজনে ছাতা মাথায় কাজে বের হয়েছেন</p></a>
>>>>>>> 6bdd1d8440a8df99f5d06c097fcdf8bcea55b50f:index.php
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="thumbnail thumbnail-contents">
                                        <a href="#"><img src="images/sikhha4.jpg" alt="Rain"></a>
                                        <div class="caption thumbnail-caption">
<<<<<<< HEAD:index.html
                                            <h3><a href="#">কলম ছেড়ে শাবল কেন?</a></h3>
=======
                                            <a href="#"><h3> কলম ছেড়ে শাবল কেন?</h3></a>
                                            <a href="#" class="details"><p>নিম্নচাপের প্রভাবে টানা বৃষ্টি হচ্ছে বগুড়ায়। এর মধ্যেই জীবনের প্রয়োজনে ছাতা মাথায় কাজে বের হয়েছেন </p></a>
>>>>>>> 6bdd1d8440a8df99f5d06c097fcdf8bcea55b50f:index.php
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--sahitto part end here-->


<!--Technology Life-style part start here-->
<div class="technology-lifestyle">
    <div class="international">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="total-content">
                        <a href="#"><h1>তথ্যপ্রযুক্তি</h1></a>
                        <hr />
                        <div class="col-lg-4">
                            <div class="thumbnail thumbnail-contents">
                                <a href="#"><img src="images/tech.jpg" alt="Suchi"></a>
                                <div class="caption thumbnail-caption">
                                    <h3><a href="#">হোয়াটসঅ্যাপে আনসেন্ড হোয়াটসঅ্যাপে আনসেন্ড</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="thumbnail thumbnail-contents">
                                <a href="#"><img src="images/plok.jpg" alt="Osama"></a>
                                <div class="caption thumbnail-caption">
                                    <h3><a href="#">তথ্যপ্রযুক্তিতে আয়ের লক্ষ্য ৫০০ কোটি ডলার</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="thumbnail thumbnail-contents">
                                <a href="#"><img src="images/tech3.jpg" alt="India"></a>
                                <div class="caption thumbnail-caption">
                                    <h3><a href="#">হোয়াটসঅ্যাপে আনসেন্ড হোয়াটসঅ্যাপে আনসেন্ড</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="thumbnail thumbnail-contents">
                                <a href="#"><img src="images/tech4.jpg" alt="Suchi"></a>
                                <div class="caption thumbnail-caption">
                                    <h3><a href="#">পায়রা বন্দরে ৬০ পদে ১৭৮ নিয়োগ</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="thumbnail thumbnail-contents">
                                <a href="#"><img src="images/tech5.jpg" alt="Osama"></a>
                                <div class="caption thumbnail-caption">
                                    <h3><a href="#">পায়রা বন্দরে ৬০ পদে ১৭৮ নিয়োগ</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="thumbnail thumbnail-contents">
                                <a href="#"><img src="images/tech6.jpg" alt="India"></a>
                                <div class="caption thumbnail-caption">
                                    <h3><a href="#">হোয়াটসঅ্যাপে আনসেন্ড হোয়াটসঅ্যাপে আনসেন্ড</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Aourthoniti part start here-->
                <div class="aourthoniti">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="aourthoniti-total-content">
                                <a href="#"><h1>জীবনযাপন</h1></a>
                                <hr />
                                <div class="total-content-2">
                                    <div class="col-lg-5">
                                        <a href="#">
                                            <img src="images/jiyan.jpg" alt="jibonjapon" />
                                        </a>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="details">
                                            <h4><a href="#">দেনার পাহাড় মাথায় নিয়েও তিনি শীর্ষ ধনী!</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="total-content-2">
                                    <div class="col-lg-5">
                                        <a href="#">
                                            <img src="images/jibonjapon2.jpg" alt="Apurthoniti" />
                                        </a>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="details">
                                            <h4><a href="#">বয়সের তারতম্য?</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="total-content-2">
                                    <div class="col-lg-5">
                                        <a href="#">
                                            <img src="images/sorojogot.jpg" alt="Apurthoniti" />
                                        </a>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="details">
                                            <h4><a href="#">সৌরজগতের কাছেই বাসযোগ্য গ্রহ?</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="total-content-2">
                                    <div class="col-lg-5">
                                        <a href="#">
                                            <img src="images/jibonjapon4.jpg" alt="Apurthoniti" />
                                        </a>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="details">
                                            <h4><a href="#">বাংলাদেশের বাজারে আসছে আইফোন ১০</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="total-content-2">
                                    <div class="col-lg-5">
                                        <a href="#">
                                            <img src="images/jiyan.jpg" alt="jibonjapon" />
                                        </a>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="details">
                                            <h4><a href="#">দেনার পাহাড় মাথায় নিয়েও তিনি শীর্ষ ধনী!</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="total-content-2">
                                    <div class="col-lg-5">
                                        <a href="#">
                                            <img src="images/jiyan.jpg" alt="jibonjapon" />
                                        </a>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="details">
                                            <h4><a href="#">দেনার পাহাড় মাথায় নিয়েও তিনি শীর্ষ ধনী!</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Aourthoniti part end here-->
            </div>
        </div>
    </div>
</div>
<!--Technology Life-style part end here-->


<!--Nari-Bichitro-khobor-carton part start here-->
<div class="nbck">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="thumbnail total-thumbnail-content">
                    <a href="#"><h1>শিক্ষা</h1></a>
                    <hr />
                    <div class="total-thumbnail-content-2">
                        <a href="#"><img src="images/nari.jpg" alt="Nari"></a>
                        <div class="caption texts">
                            <h3><a href="#">অনিয়মে নিয়োগ পাওয়া শিক্ষকই এখন হর্তাকর্তা</a></h3>
                        </div>
                    </div>
                    <div class="total-thumbnail-content-3">
                        <div class="col-lg-5">
                            <a href="">
                                <img src="images/sikhha.jpg" alt="" />
                            </a>
                        </div>
                        <div class="col-lg-7">
                            <h4><a href="#">প্রায় ৩১ লাখ খুদে পরীক্ষার্থীর সমাপনী পরীক্ষা আজ শুরু</a></h4>
                        </div>
                    </div>
                    <div class="total-thumbnail-content-3">
                        <div class="col-lg-5">
                            <a href="">
                                <img src="images/sikhha2.jpg" alt="" />
                            </a>
                        </div>
                        <div class="col-lg-7">
                            <h4><a href="#">প্রায় ৩১ লাখ খুদে পরীক্ষার্থীর সমাপনী পরীক্ষা আজ শুরু</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="thumbnail total-thumbnail-content">
                    <a href="#"><h1>বিচিত্র খবর</h1></a>
                    <hr />
                    <div class="total-thumbnail-content-2">
                        <a href="#"><img src="images/bichitro.jpg" alt="Bicitro"></a>
                        <div class="caption texts">
                            <h3><a href="#">ক্যাকটাস কাহন</a></h3>
                        </div>
                    </div>
                    <div class="total-thumbnail-content-3">
                        <div class="col-lg-5">
                            <a href="">
                                <img src="images/sikhha.jpg" alt="" />
                            </a>
                        </div>
                        <div class="col-lg-7">
                            <h4><a href="#">প্রায় ৩১ লাখ খুদে পরীক্ষার্থীর সমাপনী পরীক্ষা আজ শুরু</a></h4>
                        </div>
                    </div>
                    <div class="total-thumbnail-content-3">
                        <div class="col-lg-5">
                            <a href="">
                                <img src="images/sikhha2.jpg" alt="" />
                            </a>
                        </div>
                        <div class="col-lg-7">
                            <h4><a href="#">প্রায় ৩১ লাখ খুদে পরীক্ষার্থীর সমাপনী পরীক্ষা আজ শুরু</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="thumbnail total-thumbnail-content">
                    <a href="#"><h1>কার্টুন</h1></a>
                    <hr />
                    <div class="total-thumbnail-content-2">
                        <a href="#"><img src="images/katrun.jpg" alt="katuron"></a>
                        <div class="caption texts">
                            <h3><a href="#">জীবন</a></h3>
                        </div>
                    </div>
                    <div class="total-thumbnail-content-3">
                        <div class="col-lg-5">
                            <a href="">
                                <img src="images/sikhha.jpg" alt="" />
                            </a>
                        </div>
                        <div class="col-lg-7">
                            <h4><a href="#">প্রায় ৩১ লাখ খুদে পরীক্ষার্থীর সমাপনী পরীক্ষা আজ শুরু</a></h4>
                        </div>
                    </div>
                    <div class="total-thumbnail-content-3">
                        <div class="col-lg-5">
                            <a href="">
                                <img src="images/tilta.jpg" alt="" />
                            </a>
                        </div>
                        <div class="col-lg-7">
                            <h4><a href="#">প্রায় ৩১ লাখ খুদে পরীক্ষার্থীর সমাপনী পরীক্ষা আজ শুরু</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Nari-Bichitro-khobor-carton part end here-->

<?php
require_once './footer.php';
?>