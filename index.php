<?php require_once('layouts/header.php') ?>

<section id="slider">
    <div class="h_slider">
        <div class="large-12 columns">
            <div class="owl-carousel-h-main owl-theme">
                <div class="item">
                    <img class="img-fluid" src="images/h_slider2.jpg" style="background-position: center;background-size: cover;height:515px;object-fit: cover;">
                </div>
                <div class="item">
                    <img class="img-fluid" src="images/h_slider1.jpg" style="background-position: center;background-size: cover;height:515px;object-fit: cover;">
                </div>
                <div class="item">
                    <img class="img-fluid" src="images/h_slider3.jpg" style="background-position: center;background-size: cover;height:515px;object-fit: cover;">
                </div>
            </div>
            <script>
                $(document).ready(function() {
                var owl = $('.owl-carousel-h-main');
                owl.owlCarousel({
                    items: 1,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: false
                });

                })
            </script>
        </div>
    </div>
</section>

<section id="aboutus">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="h_about_left">
                    <img src="images/aboutus.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 text">
                <div class="h_about_right">
                    <h1>About Us</h1>
                    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ျပည္ပအလုပ္အကိုင္၀န္ေဆာင္မွဳလုပ္ငန္းမ်ား ေဆာင္ရြက္လုပ္ကိုင္ႏိုင္ရန္ လုပ္ငန္းစဥ္မ်ားကို ညီေနာင္မိတ္ေဆြ ကုမၸဏီမ်ားႏွင္႔အတူ လုပ္ငန္းေဆာင္ရြက္မွဳ လုပ္ငန္းစဥ္မ်ားကိုေလ႔လာျခင္း ၊ အက်ဳိးတူပူးေပါင္းေဆာင္ရြက္ျခင္းႏွင္႔ ျပည္ပႏိုင္ငံမ်ားသို႔ ျပည္ပအလုပ္အကိုင္၀န္ေဆာင္မွဳလုပ္ငန္းမ်ား သြားေရာက္ေလ႔လာျခင္းမ်ား ျပဳလုပ္ေဆာင္ရြက္ခဲ႔ပါသည္။</p>
                    <div class="more">
                        <p><a href="about.php">Read More <i class="fas fa-long-arrow-alt-right"></i> </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="ourservice">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 text">
                <div class="h_service_left">
                    <h1>Our Service</h1>
                    <p>&nbsp&nbsp&nbsp&nbsp International  Focus  Services  Co., Ltd  သည္ ျပည္ပအက်ဳိးေဆာင္လိုင္စင္အမွတ္၊ (၅၄/၂၀၁၂) (ထိုင္း) ျဖင႔္ MoU စနစ္အရ  ျမန္မာေရႊ႕ေျပာင္းလုပ္သားမ်ားကို  ထိုင္းႏိုင္ငံသို႔ သြားေရာက္ အလုပ္လုပ္ကိုင္ရန္အတြက္ ႏိုင္ငံေတာ္၏ စီးပြားေရး၊ လူမွဳေရး၊ လူသားအရင္းအျမစ္ ဖြံျဖိဳးတိုးတက္ေရး ႏွင္႔ ၀န္ႀကီးဌာန၏ လုပ္ငန္းေဆာင္ရြက္ခ်က္မ်ားကို အေထာက္အကူျဖစ္ေစရန္၊ ကုမၸဏီအက်ဳိးထက္ ျမန္မာေရႊ႔ေျပာင္းအလုပ္သမားမ်ား၏ အက်ဳိးကိုေရွ႕ရွဳလ်က္ အထက္ေဖၚျပပါ ရည္ရြယ္ခ်က္မ်ား အေကာင္အထည္ေဖာ္  ေဆာင္ရြက္လ်က္ရွိပါသည္။</p>
                    <div class="service_more">
                        <p><a href="service.php"> Read More <i class="fas fa-long-arrow-alt-right"></i></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="h_service_right">
                    <img src="images/ourservice.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="findjob" style="background-image: url(images/service1.jpg);" class="img-fluid">
    <div style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="container" style="padding: 40px 0;">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="f_job_left">
                        <h1>Looking For A Job </h1>
                        <h3>Find a job now </h3>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12" style="align-self: center;">
                    <div class="f_job_right">
                        <p><a href="#">Find Job</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 
<section id="partnar">
    <div class="container">
        <div class="p_header">
            <h5>Our Partnars</h5>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="p_img">
                    <img src="images/partnerone.png" alt="">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="p_img">
                    <img src="images/partnerstwo.png" alt="">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="p_img">
                    <img src="images/partnersthree.png" alt="">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="p_img">
                    <img src="images/partnersfour.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('layouts/footer.php') ?>

</body>
</html>