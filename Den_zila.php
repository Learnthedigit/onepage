<?php
if (count($_POST) > 0) {
  if ($_POST['Submit'] == 'Send Message') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $mobile = $_POST['mobile'];
    $stae = $_POST['type2'];

    if (strlen($name) > 0 && strlen($email) > 0) {
      $txt = "Name: $name \n Email: $email\n Type: $type \n Contact no:$mobile \n State : $stae";
      $to = "learnthedigital@gmail.com";
      $headers = "From: freedomnasha@learnthedigital.com" . "\r\n" .
        "";
      $msg = "Shifa Dental Care -$name";

      if (mail($to, $msg, $txt, $headers)) {
?>
        <script>
          alert('Your requested has been submitted succesfully');
          window.location.href = 'https://learnthedigital.com/';
        </script>
<?php
      }
    }
  }
}
?>

<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

<title>DEN ZILA | Learn The Digital</title>
<style>
  .about_button {
    font-family: "Poppins", sans-serif;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 14px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 10px 25px;
    border-radius: 2px;
    transition: 0.4s;
    margin: 10px;
    border-radius: 4px;
    border: 2px solid #f03c02;
    color: #f03c02;
    background: #fff;
  }
</style>


<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .checked {
    color: orange;
  }
</style>
<?php
$filename = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="Keywords" content="digital marketing courses,digital marketing certificate,seo,content marketing,facebook marketing,Digital marketing India,Digital marketing Mumbai,Digital marketing pune,Digital marketing Noida,Digital marketing Delhi,marketing near me,Digital marketing meaning,Digital marketing solutions,Digital marketing strategies,Digital marketing agency,Digital marketing services,Fundamentals of digital marketing,Basic of digital marketing,Meaning of digital marketing,Digital marketing quotes,Types of digital marketing,Categories of digital marketing,Digital marketing company Mazgaon,Digital marketing company south Mumbai,Digital marketing company India,Digital marketing company near me,Learn the digital marketing,Learn Digital Marketing,Know digital marketing,Best digital marketing agency,Best digital marketing agency Mumbai,Best digital marketing agency Delhi,Best digital marketing agency pune,Best digital marketing agency Noida,Best digital marketing agency India,Best digital marketing agejcy Gurgaon,Top digital marketing agency in Mumbai,Top digital marketing agency in India,Top digital marketing agency in Mazgaon,Top digital marketing agency near me,Importance of digital marketing,Significance of digital marketing,Features of digital marketing,Subtopics in digital marketing,Digital marketing logo,What is digital marketing strategy,Digital marketing definition,How to digitally market business,How to create online presence through digital marketing,How to do digital marketing,Top digital marketing company in India,Top digital marketing company in South Mumbai,Top digital marketing company in Andheri,Top digital marketing company in Delhi,Top digital marketing company in pune,Top digital marketing company near me,About digital marketing,Digital marketing examples,About online marketing,Online marketing examples,Digital marketing means,Digital marketing company in bangalore,Why digital marketing is important,Digital marketing company in bangalore,Digital marketing agency in bangalore,Digital marketing plan,Digital marketing planning,Digital marketing blogs,Blogs on digital marketing,Digital marketing benefits,Digital marketing top agency Mumbai,Digital marketing best agency India,Digital marketing best agency pune,Digital marketing best agency bangalore,Digital marketing best agency Noida, Digital marketing best agency andheri,Facebook marketing near me,Facebook marketing Mumbai,Facebook marketing India,Facebook marketing pune,facebook marketing Delhi,Facebook marketing Noida,Learn Facebook marketing,learn Instagram marketing,Learn Facebook ads,Learn instagram ads,Facebook ads meaning,Facebook ads means,Instagram ads means,Instagram ads meaning,What is Facebook marketing,What is Instagram marketing,What is Facebook ads,What is Instagram ads,How to post ad on Facebook,How to post ad on Instagram,Social digital marketing,social media marketing,Social media marketing near me,Social media marketing in India,Social media marketing pune,Social media marketing hyderabad,Social media marketing bhopal,Social media marketing chandigarh,Social media marketing Mumbai,Social media marketing techniques,Social media marketing stratgies,Social media marketing ideas,Digital marketing ideas,Social media tips,Social media handling,Digital marketing techniques ways of digital marketing,Methods of digital marketing,4 Cs of digital marketing,6 Cs of digital marketing,10 Cs of digital marketing,Digital marketing expert,Social media expert,Digital marketing specialists,Social media marketing experts,Social media marketing specialists,Why digital marketing is important,Is digital marketing essential,Is digital marketing important,What is social media marketing">
  <meta name="Keywords" content="digital marketing courses,digital marketing certificate,content,Seo and digital marketing course,Seo and online marketing course,Advertising and digital marketing course,marketing course benefits,Digital marketing course in Rs3999,Digital marketing course at Rs3999,Digital marketing course,Digital marketing course online, Digital marketing course in Delhi, Digital marketing course in pune, Digital marketing course in South Mumbai, Digital marketing course in India, Digital marketing course in Kolkata, Digital marketing course in hyderabad, Digital marketing course near me, Digital marketing course in Andheri, Digital marketing course in chandigarh, Best digital marketing course, Best digital marketing course with certification, Digital marketing course in Ahmedabad, Digital marketing course in bangalore, Digital marketing course syllabus, Digital marketing course subjects, Digital marketing course topics, Digital marketing course in jaipur, Digital marketing course in Chennai, Digital marketing course in Lucknow, Digital marketing course in Noida, Best digital marketing course online, Best digital marketing course in Mumbai,Certification course of digital marketing, Best digital marketing course in pune,Online digital marketing course, Digital marketing course in gurgaon, Best digital marketing course in India, Best digital marketing course in Mazgaon, Digital marketing course near Mazgaon, Best digital marketing course in Delhi, Digital marketing course in ghaziabad, Facebook digital marketing course, Facebook ads course near me, Facebook ads course in South Mumbai, Facebook ads course in Delhi, Facebook marketing course near me, Facebook marketing course in Mazgaon,Facebook marketing course online, Instagram marketing course near me, Instagram marketing course in Mumbai, Instagram marketing course in India, Instagram marketing course in South Mumbai, Instagram marketing course in pune, Instagram ads course on South Mumbai, Instagram ads course near me, Facebook marketing course in pune, Facebook marketing course in gurgaon, Online Facebook marketing course in Noida,Digital marketing course content, Online marketing course content, Online marketing course topics, Online marketing course subjects, Online marketing course syllabus, Digital marketing course duration, Digital marketing course Mumbai, Digital marketing course south Mumbai, Digital marketing course pune, Digital marketing course Noida, Digital marketing course gurgaon, Digital marketing course Mazgaon,Digital marketing course Delhi, Digital marketing course in surat, Digital marketing course in vodadara, Digital marketing course fees in Mumbai, Digital marketing course fees in Delhi, Digital marketing course fees in hyderabad, Digital marketing course fees in Noida, Digital marketing course in Navi Mumbai,Digital marketing course fees in Navi Mumbai, Digital marketing course Navi Mumbai, Basic digital marketing course certification, Basic learning of digital marketing, Basic certification course of digital marketing,Learn Digital Marketing basics,Digital marketing learn basic,Certified digital marketing course, Easy learning of digital marketing, Digital marketing course in bhopal, Digital marketing course in Mohali, Digital marketing course fees in Chennai, The complete digital marketing course, The complete digital marketing topic, Benefits of digital marketing course, Benefits of online marketing course, Advantages of digital marketing course, Advantages of online marketing course, Learn Digital Marketing online, Learn the digital marketing, Learn online marketing, What is digital marketing, What is online marketing, Course of digital marketing, Certification course of digital marketing, Online course of digital marketing, Online certificate course of digital marketing, Learn Digital Marketing tips, Learn Digital Marketing basic, Learn digital marketing strategy, What is Facebook, What is Instagram, What is social media, How to post ads on Facebook, How to post ads on Instagram, How to do online marketing,Certification course of digital marketing, Certification course of digital marketing in South Mumbai, Digital marketing course certificate">
  <meta name="Keywords" content="web development business,webdevelopment outsourcing, web  development project,web design agency,website development best,webdesign development,ecommerce web development,web design marketing, web developer resume,web design related,webdevelopment seo,web designseo, website development,st Web Development For SEO,how to become a web developer,what is business development,how to develop a web site,what makes a good website,what is web development, how to design web,what is career development, how to get web development projects, web developers in demand,graphic design,web design,website design,website builder,web developer,web designer,web design,ecommerce website,web design company,website creator,website designer,responsive web design, web development company,best website design,web design software,web page design,build a website,web developer salary,design website, web design courses,how to design a website,web design inspiration,website layout,web designer salary, web application development,App Developers,E Wallet App,E Wallet Payment,Fintech Development,Fintech And Blockchain Development Services,Food Delivery App Development Company,App Developer,Website Developer,3D Virtual Tours,Hertfordshire,Web Development Company,Fantasy Sports App Development,Mobile App Development,Clone App Development,Web Development,Web Development,Web Development Company In London,Web Development Agency In London,Mobile App Developers,App Development Company,Mobile App Development Company,Web Development Company,Website Design,Mobile App Developer,Web Developers,Mobile App Development Company,Web Design And Development,Open Source Development,Custom Software Development,JS Development,Small Business,Admin,Solopreneur,Entrepreneur,Solo Business,App Developer,App Development Company,Custom Software Development Company,Mobile App Developers,Software Development,Mobile App Development Company,Android App Development Company,App Developers,Iphone App Development Company,Hybrid App Development Company,Onenumber,Software Development,IT Consultancy,Web Development,App Development,Database Development,Marketplace,App,Tech,University,Corporate,Mobile App Development Company In London,Android App Development Company London,Mobile App Developers London,App Development Company In London,Ios App Development Company London,Application Development,Mobile App Development,Website Design,Logo Design,App Development,Feedback App,Customer Feedback,Customer Feedback App,Employee Feedback App,Staff Feedback,Iphone Apps,Android Apps,Mobile Apps,Mobile Marketing,Brand Exposure,Mobile App Development Company,Web App Development Services,Android App Development,Ios Application Development,Application Development Company,Employee App,Employee Communication App,Employee Engagement Software,Employee Engagement Tool,Internal Communication App,Games,Apps,Mobile Games,Freelance,Developer,App Developers,App Developers London,App Developers Uk,App Developers Ios,App Developers Android,Password Pig,Effing Pot,Apps,App,Application Mobile Development,Mobile Apps Leeds,Apps For My Business,App For Restaurant,App For Taxi,Create Android App ,Business Apps,Mobile Apps,Low Cost Apps,Small Business Apps,IOS & Android Small Business Apps,Mobile Apps,App Developer,Mobile Marketing,Smartphone,Google And Apple,Mobile App Developers,Android App Development Company,Iphone App Development Company,Webdesign Company,Digital Marketing,App Development London,App Developer,App Development Companies,App Development Companies London">
  <meta name="Keywords" content="Graphic designs logo making ,Graphic design brochures making ,Graphic design greeting invitation ,Graphic design poster  making ,Graphic design business card making ,Graphic design social media post ,Graphic design Instagram post ,Graphic design Twitter post ,Graphic design linked post ,Graphic design logo making for company ,Graphic design making business presentation,Graphic design Flyers making,Graphic design logo making near me ,Graphic design brochures making near me ,Graphic design greeting invitation near me ,Graphic design poster making near me,Graphic design Business  card near me,Graphic design social media post near me ,Graphic design Instagram post making near me ,Graphic design Twitter post making near me,Graphic design linked post making near me,Graphic design flyers post making near me,Adobe,Adobe designer near me,Adobe designer in Mumbai,Adobedesigner,Agency  near me,Agency in Mumbai,Artist near me,Artist inMumbai,Artist,Brand,Client,Color,Concepts,Creative near me ,Creative in Mumbai,Design, Detail,Digital,Graphic near me,Graphic in Mumbai,Graphic design inPune,Graphic,design in  Chennai,Graphicdesign in Bangalore ,Graphicdesign in Delhi,Graphic design in Navi Mumbai ,Graphicdesign in dockyard,Graphic design in Chandigarh,Graphic design in Hyderabad,Graphic expert,Illustrator near me, Illustrator in Mumbai,Illustrator designer,Illustrator logo design,Illustrator, expert,Illustrator,InDesign,Layout,Marketing,Media,Photoshop,Portfolio,Typography,Visual,Graphic designer banner ,Graphic designer Software ,Graphic designer software near me ,Graphic designer banner making  Near me ,Graphic designer banner ,Graphic design ideas ,Graphic design free software ,Graphic design ,Graphic design near me ,Graphic design in Mumbai ,Graphic designer,Graphic designer near me ,Graphic designer in Mumbai ,Graphic designing,Graphic designing near me ,Graphic designing in Mumbai ,Graphic design catalog ,Graphic design in Mumbai ,Graphic design near me ,Top graphic design,Top graphic designer,Top graphic designing,Top graphic design near me,Top graphic designer in Mumbai, Top graphic designing in Mumbai ,Top graphic design in Mumbai,Top graphic designer near me ,Top graphic designing near me ,Graphic design expert in Mumbai ,Graphic designer expert  near me,What is graphic designer ,Graphic design meaning ,What is the meaning of graphic designs ,How is logo design ,How is broucher design ,How is catalog design ,How is pamplets  design ,How is greeting invitation design,How is flyer design ,How is business card design ,How is invoice bill design,Graphic designer software ,Graphic design company ,Graphic design logo ,Graphic design flyers ,Graphic design business card,Graphic design poster ,Graphic design invitation card,Graphic design pamplets ,Graphic design banner ,Computer graphic design,Graphic design computer ,Graphic design examples ,Graphic designer examples,Graphic designing examples,Canva designing ,Canva designer,Canva design ,How to use canva,How to create design on canva,Feature of canva ,Why canva is used,How canva is used,Is logo made in canva ,Is pamplets made in canva ,Is brouchers made in canva ,Is Instagram post made in canva ,How to use illustrator ,How to create design on illustrator ,Feature on illustrator ,Why  illustrator is used ,How illustrator is used ,Is logo made on illustrator ,Is pamplets made on illustrator,Is brouchers made on illustrator,Is Instagram post on illustrator,How Indesign is made ,Why InDesign is used ,What are the feature in InDesign ,How to use InDesign,How to create design on InDesign,What are the feature of InDesign,Is logo made on indesign ,Is pamplets made ,Is brouchers made,Is Instagram made ,Is business card made ,Is invitation card made How to use Photoshop ,Why Photoshop is used ,How to make creative  on Photoshop Is logo made on Photoshop ,Is brouchers made on Photoshop ,Is Pamplets made on Photoshop ,Is invitation made on Photoshop,Is Instagram post made on Photoshop,Creative ideas ,Benefits of canava ,Benefits of illustrator ,Benefits of InDesign ,Advantages of canava">
  <meta name="Description" content="Basic of Digital Marketing Certification Course Online Certification Program Only at ₹ 3999/- only">


  <meta name="description" content="A team of creative young souls who are passionate about their work our drive to come up with extraordinary ideas," />
  <link rel="canonical" href="https://www.learnthedigital.com/" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Home Page - Learn the Digital, do better do more, Mumbai" />
  <meta property="og:description" content="A team of creative young souls who are passionate about their work our drive to come up with extraordinary ideas,learn the digital" />
  <meta property="og:url" content="https://www.learnthedigital.com/" />
  <meta property="og:site_name" content="Learn The Digital" />
  <meta property="article:modified_time" content="2021-06-10T08:13:49+00:00" />
  <meta property="og:image" content="https://learnthedigital.com/assets/img/LTD loogo.jpg" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:label1" content="Est. reading time">
  <meta name="twitter:data1" content="3 minutes">

  <!-- Favicons -->
  <link href="Den_zila/images/DZ-icon.png" rel="icon">
  <link href="Den_zila/images/DZ-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">


  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <style>
    /*--------------------------------------------------------------
# Counts
--------------------------------------------------------------*/
    /*TOP LOGO*/


    .container-01 {
      margin: 20px;
      padding: 5px;
    }


    .logo-top {
      height: 150px;
      width: 200px;
      margin: 5px;

    }

    body {
      background: #abf7de;
    }

    .counts {
      padding-top: 80px;
    }

    .counts .count-box {
      padding: 30px 30px 25px 30px;
      width: 100%;
      position: relative;
      text-align: center;
      box-shadow: 0px 2px 35px rgba(0, 0, 0, 0.06);
      border-radius: 4px;
    }

    .counts .count-box i {
      position: absolute;
      width: 54px;
      height: 54px;
      top: -27px;
      left: 50%;
      transform: translateX(-50%);
      font-size: 24px;
      background: #fff;
      color: #f03c02;
      border-radius: 50px;
      border: 2px solid #fff;
      box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.1);
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }

    .counts .count-box span {
      font-size: 36px;
      display: block;
      font-weight: 700;
      color: #111111;
    }

    .counts .count-box p {
      padding: 0;
      margin: 0;
      font-family: "Raleway", sans-serif;
      font-size: 14px;
    }

    /*contact*/
    .contact .info-box i {
      font-size: 32px;
      color: #f03c02;
      border-radius: 50%;
      padding: 8px;
      border: 2px dotted #f8d4d5;
    }

    /* case study*/


    .case_column {
      float: left;
      width: 20.33%;
      max-width: 400px;
      padding: 5px;

    }

    /* Clearfix (clear floats) */
    .case_row::after {
      content: "";
      clear: both;
      display: table;

    }

    .img-fluid {
      max-width: 500px;
      height: 200px;
    }

    .services .icon {
      background-color: green;
    }

    .services .icon-box:hover .icon i {
      color: green;
    }

    .services .icon-box:hover .icon {
      border: 1px solid green;
    }

    .services .icon-box {
      border: 1px solid green;
    }

    .services .icon-box:hover .title a {
      color: green;
    }
    }
  </style>
</head>

<body>
  <!-- ======= Top Bar ======= -->
  <!--<section id="topbar" class="d-lg-block">-->
  <!--  <div class="container">-->
  <!--    <div class="contact-info mr-auto">-->
  <!--       </div>-->

  <!--  </div>-->
  </section>
  <div>
    <script data-ad-client="ca-pub-4494252147188327" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-4494252147188327" data-ad-slot="1234567890"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
  </div>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock">Timings:Moday: 12.30 PM to 03.00 PM | 07.30 PM to 10:00 PM <br>
          <i class="bi bi-clock">Tuesday to Sunday - 12.00 PM to 03.00 PM | 07.30 PM to 10:00 PM
          </i>
      </div>
      <div class="d-flex align-items-center">

        <i class="bi bi-phone"></i> Call us on +91 9323224363
      </div>
    </div>
  </div>
  <!-- ======= Header ======= -->
  <!--<header id="header">-->
  <div class="container-01">

    <div class="logo-top">

      <a href="www.learnthedigital.com"><img src="Den_zila/images/DZ-logo.png" height="150" width="300" alt="Den-zila-logo "></a>

    </div>

    <!-- .nav-menu -->

  </div>
  <!--</header><!-- End Header -->


  <!--<div class="row">-->
  <!--<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" style="margin-top:10%"-->
  <!--    class="modal fade">-->
  <!--          <div class="modal-dialog">-->
  <!--            <div class="modal-content">-->
  <!--              <div class="modal-header">-->
  <!--                <h4 class="modal-title" style='text-align:center;font-weight:bold'>Connect with us</h4>-->
  <!--                 <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>-->
  <!--              </div>-->
  <!--              <div class="modal-body">-->

  <!--               <form action="" method="post" id='contact_form' role="form" class="php-email-form">-->
  <!--<span style='text-align:center;font-weight:bold'>Connect with us</span>    -->
  <!--                        <div class="row">-->
  <!--                            <div class="col form-group">-->
  <!--                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required><br />-->
  <!--                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Your Mobile Number" required>-->
  <!--                            </div>-->
  <!--                        </div>-->
  <!--                    <div class="form-group">-->
  <!--                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>-->
  <!--                            </div>-->

  <!--<div class="form-group">-->
  <!--  <select class='form-control' name='type'  required>-->
  <!--  <option value="Select Treatment">Select Treatment Type</option>-->
  <!--  <option value="Drug Addiction">Drug Addiction</option>-->
  <!--  <option value="Alcohol Adddiction">Alcohol Adddiction</option>-->
  <!--  <option value="Detoxification Center">Detoxification Center</option>-->


  <!--  		</select>-->
  <!--</div>-->

  <!--  <div class="text-center" ><button type="submit" name='Submit' value='Send Message' style="border:0px;background-color:#043a28;padding:10px 24px;color:#fff;transition:0.4s;border-radius:4px;">Send Message</button></div>-->
  <!--</form>-->
  </div>
  </div>
  </div>
  </div>
  </div>
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">


      <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <h1 Style="color:#043a28; font-size:50px; font-weight: bold;"><Strong>Welcome to DEN ZILA</Strong></h1>
              <p Style="color:#021d14; font-size:20px;" class="mt-4"><b></b></p>
              <p Style="color:#021d14; font-size:20px;"><b></b></p>

              <p Style="color:#021d14; font-size:20px"><b></b></p>
              <p Style="color:#021d14; font-size:20px"><b></b></p>

            </div>
            <div class="col-md-6">

            </div>
            <div class="col-md-6">

            </div>
          </div>

        </div>

        <div class="col-lg-6">


          <form action="" method="post" id='' role="form" class="php-email-form">
            <span style='text-align:center;font-size:25px; font-weight:bold'>Register here.</span>
            <br><br>
            <div class="row">
              <div class="col form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col form-group">
                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Your Mobile Number" required>
              </div>


            </div>

            <div class="form-group">
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>

              </div>


              <div class="form-group">
                <select class='form-control' name='type' required>
                  <option value="Select Treatment">Select Treatment Type</option>
                  <option value="Drug Addiction">Drug Addiction</option>
                  <option value="Alcohol Adddiction">Alcohol Adddiction</option>
                  <option value="Detoxification Center">Detoxification Center</option>
                </select>
              </div>

              <div class="text-center"><button type="submit" style="background-color:#043a28" name='Submit' value='Send Message'>Submit</button></div>
          </form>


        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->






  <main id="main">





    <!-- ======= Tabs Section ======= -->
    <section id="tabs" class="tabs">
      <div class="container" data-aos="fade-up">



        <div class="tab-pane active show" id="tab-1">
          <div class="jumbotron" style="background-color:#043a28">
            <div class="row">

              <div class="col-lg-6 order-1 order-lg-2 mt-3 mt-lg-0 text-white" data-aos="fade-up" data-aos-delay="100">
                <h1 style="font-size:50px; font-weight: bold;">About Us</h1>
                <h3> <b style="font-size:30px">Unique Pioneer foundation - NGO </b></h3>
                <p><b style="font-size:20px">Our Management </b><br>An NGO is working for support for people who cannot afford for medical treatment in the city of India. Staff of the NGO include people from age between 30-45 years. Organization has 30 staffs on roll.</p>

                <p>

                </p>
              </div>
              <div class="col-lg-6 order-2 order-lg-2 mt-3 mt-lg-0 text-white" data-aos="fade-up" data-aos-delay="100">
                <img src="includes/images/Unique Pioneerv Foundation/unique-img-03.jpg" height="700" width="700" class="img-fluid">
                <br><br>

              </div>
            </div>
          </div>
        </div>

    </section><!-- End Tabs Section -->

    <!-- ======= Service Section ======= -->
    <section id="services" style="background:#abf7de" class="services section-bg">
      <div class="container" style="background-color:#043a28" data-aos="fade-up">

        <div class="section-title">
          <!--<h2>Services</h2>-->
          <h2 class="mt-3" style="font-size:50px;color:#fff; font-weight: bold ">
            Our History
          </h2>
        </div>
        <!--Start Smoke Section-->
        <div class="row">
          <div class="col-lg-6 col-md-8 d-flex align-items-stretch" data-aos="fade-right">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <span style="font-weight:bold;">
                <p>The NGO started with providing free Eye treatment to the people and also providing them free medicine. Since the staff is working for the needy people they did not feel useless, in fact they feel they had care and support of the people they are working for. They even employed few people who were in search of some work as a paid staff in their planning and meetings of the program.</p>
              </span><br>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-left">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="card">
                <!--<img src="includes/images/Unique Pioneerv Foundation/" class="card-img-top img-fluid">-->
                <img src="includes/images/Unique Pioneerv Foundation/unique-img-04.jpg" height="750" width="900" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        <!--End Smoke Section-->
        <!--Start Tobacco Section-->
        <!--<div class="row mt-5" data-aos="fade-in">-->
        <!--    <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-right">-->
        <!--      <div class="member" data-aos="fade-up" data-aos-delay="100">-->
        <!--      <div class="card">-->
        <!--       <img src="Freedom_nashamukti/images/nasha_4.png" class="card-img-top img-fluid">-->
        <!--       </div>-->
        <!--      </div>-->
        <!--    </div>-->

        <!--          <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-left">-->
        <!--            <div class="member" data-aos="fade-up" data-aos-delay="200">-->
        <!--               <span style="font-weight:bold"><p>Chewing tobacco-Tobacco chewing is a very common practice, especially in rural India. Various forms of smokeless tobacco include khaini, pan masala, gutkha, etc.. Tobacco chewing is as harmful as smoking cigarettes.</p></span><br>-->
        <!--<span style="font-weight:bold"><p>Easy availability of pan masala, and other flavoring agents with tobacco in attractive sachets or tins has enhanced the sale and use of smokeless tobacco.</p></span><br>-->
        <!--<span style="font-weight:bold"><p>Tobacco chewing is associated with serious health problems</p></span>-->
        <!--<span style="font-weight:bold">Tobacco contains many different chemicals called as carcinogens which can cause cancer. These chemicals increase the risk of oral cancer such as cancer of the mouth, throat, cheek, gums, lips or tongue.-->
        <!--There’s also an increased risk of cancers of the pancreas and esophagus.-->
        <!--It also causes precancerous lesions in the oral cavity-->
        <!--Tobacco contains nicotine which is habit forming and very addictive. It also predisposes individuals who chew tobacco to start smoking which further increase their risk of developing other cancers.-->
        <!--It causes gum decay , tooth decay and tooth loss-->
        <!--Increased risk of heart disease-->
        <!--Increased risk of stroke-->
        <!--Increased risk of pre term delivery and still birth in pregnancy-->
        <!--Taking into consideration the long list of side effects, people should be determined not to indulge in this bad habit and those already chewing tobacco should quit it.<p></p></span>-->
        <!--            </div>-->
        <!--  </div>-->
        <!--</div>-->
        <!--End Tobacco Section-->
        <!--Start Weed Section-->
        <!--            <div class="row mt-5" data-aos="fade-in">-->
        <!--          <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-right">-->
        <!--            <div class="member" data-aos="fade-up" data-aos-delay="100">-->
        <!--            <span style="font-weight:bold"><p>Weed -How Weed Affects Your Mind and Body</span></p>-->
        <!--<span><p>Marijuana, weed, pot, dope, grass. They’re different names for the same drug that comes from the cannabis plant. You can smoke it, vape it, drink it, or eat it. Most folks use marijuana for pleasure and recreation. But a growing number of doctors prescribe it for specific medical conditions and symptoms.</p></span><br>-->

        <!--<span style="font-weight:bold"><p>Your Lungs May Hurt-->
        <!--Pot smoke can inflame and irritate your lungs. If you use it regularly, you could have the same breathing problems as someone who smokes cigarettes. That could mean ongoing cough with colored mucus. Your lungs may more easily pick up infections. That’s partly because THC seems to weaken some users’ immune systems.</p></span><br>-->

        <!--<span style="font-weight:bold"><p>Heighten your senses (colors might seem brighter and sounds might seem louder)-->
        <!--Distort your sense of time-->
        <!--Hurt your motor skills and make driving more dangerous-->
        <!--Lower your inhibitions so you may have risky sex or take other chances-->
        <!--You May Get Hooked-->
        <!--About 1 in 10 people who use pot will become addicted. That means you can’t stop using it even if it harms your relationships, job, health, or finances. The risk is greater the younger you start marijuana and the more heavily you use it. For instance, the odds of addiction are 1 in 6 if you use pot in your teens. It might be as high as 1 in 2 among those who use it every day.</p></span>-->
        <!--            </div>-->
        <!--          </div>-->

        <!--          <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-left">-->
        <!--            <div class="member" data-aos="fade-up" data-aos-delay="200">-->
        <!--                 <div class="card">-->
        <!--             <img src="Freedom_nashamukti/images/nasha_6.png" class="card-img-top img-fluid">-->
        <!--             </div>-->
        <!--            </div>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--End Weed Section-->
        <!--Start Alcohol Section-->
        <!--           <div class="row mt-5" data-aos="fade-in">-->
        <!--          <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-right">-->
        <!--            <div class="member" data-aos="fade-up" data-aos-delay="100">-->
        <!--            <div class="card">-->
        <!--             <img src="Freedom_nashamukti/images/nasha_1.png" class="card-img-top img-fluid">-->
        <!--             </div>-->
        <!--            </div>-->
        <!--          </div>-->

        <!--          <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-left">-->
        <!--            <div class="member" data-aos="fade-up" data-aos-delay="200">-->
        <!--               <span style="font-weight:bold"><p>Alcohol consumption- Alcohol’s impact on your body starts from the moment you take your first sip. While an occasional glass of wine  with dinner isn’t a cause for concern, the cumulative effects of drinking wine, beer, or spirits can take its toll.</p></span><br>-->
        <!--<span style="font-weight:bold"><p>Read on to learn the effects of alcohol on your body.</p></span>-->
        <!--<span style="font-weight:bold"><p>Brain:-->
        <!--Alcohol interferes with the brain’s communication pathways, and can affect the way the brain looks and works. These disruptions can change mood and behavior, and make it harder to think clearly and move with coordination.  -->
        <!--</p></span>-->
        <!--<span style="font-weight:bold">Heart:-->
        <!--Drinking a lot over a long time or too much on a single occasion can damage the heart, causing problems including:<p></p></span>-->
        <!--<span style="font-weight:bold"><p>Cardiomyopathy – Stretching and drooping of heart muscle-->
        <!--Arrhythmias – Irregular heart beat-->
        <!--Stroke High blood pressure  </p></span>-->
        <!--<span style="font-weight:bold"><p>Liver:-->
        <!--Heavy drinking takes a toll on the liver, and can lead to a variety of problems and liver inflammations including:-->

        <!--Steatosis, or fatty liver-->
        <!--Alcoholic hepatitis-->
        <!--Fibrosis-->
        <!--Cirrhosis-->
        <!--Pancreas:-->
        <!--Alcohol causes the pancreas to produce toxic substances that can eventually lead to pancreatitis, a dangerous inflammation and swelling of the blood vessels in the pancreas that prevents proper digestion.</p></span>-->
        <!--            </div>-->
        <!--  </div>-->
        <!--</div>-->
        <!--End Alocohol Section>
      <!--Start MDMA Section-->
        <!--End MDMA Section-->
        <!--Start Drug Section-->
        <!--End Drug Section-->
    </section><!-- End Doctors Section -->

    <!--Start Service Section-->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h3>Let's Talk <strong>Digital, Creative, Development</strong></h3>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="icofont-injection-syringe"></i></div>
              <h4 class="title"><a href="services.php">Digital Service</a></h4>
              <p class="description">Social Media Marketing <br>Content Marketing <br>Search Engine Optimisation<br>Google Analytics & Reporting<br>Digital Strategy Consulting<br>Digital Media Planning</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="icofont-beer"></i></div>
              <h4 class="title"><a href="http://learnthedigital.com/creativedesign.php">Creative Service</a></h4>
              <p class="description">User Experience Design<br>Brand Identity<br>Digital Design<br>Logo Design</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="icofont-pills"></i></div>
              <h4 class="title"><a href="http://learnthedigital.com/web_development.php">Development Service</a></h4>
              <p class="description">Web Development<br>Mobile Apps & Websites<br>Content Management Systems (CMS)<br>Website Maintenance & Security<br>Ecommerce Solutions
              </p>
            </div>


          </div>

        </div>
    </section><!-- End Services Section -->
    <!-- End Services Section -->
    <!--End service section-->









    <!-- ======= Contact Section ======= -->
    <div class="map-section">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAbD77B0eHMFXUs44E-CCwq1rktJHcYtf0&q=Shifa+Dental+Care+Shop+no+25+Ground+Flr+Siddesh+Deep+B+wing+P.B.Marg+Near+Rushi+mehta+Chowk+Opp+Murga+Giran+Masjid+Grant+Road+East+Mumbai+Maharashtra+400008" frameborder="0" allowfullscreen>

      </iframe>
    </div>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3 Style="color:#5cb85c">Visit Freedom Nasha Mukti Kendra</h3>
          <h2 Style="color:#5cb85c">24x7 , 365 DAYS</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <center>
                    <i><a Style="color:#5cb85c" href="https://cutt.ly/OnQxNPg">
                        <iconify-icon data-icon="bx-bx-map"></iconify-icon>
                      </a></i>
                    <h3>Our Address</h3>
                    <p>Opp Reclamation Bus Depot,Niytanan Nagar,Room No 4,Near ONGC Building 26,Bandra West,Mum-400050.
                    </p>
                </div>
                </center>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <center>
                    <i>
                      <iconify-icon data-icon="bx-bx-envelope" Style="color:#5cb85c"></iconify-icon>
                    </i>
                    <h3>Email Us</h3>
                    <p>info@learnthedigital.com</p>
                </div>
                </center>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <center>
                    <i Style="color:#5cb85c" class="icofont-phone"></i>
                    <h3>Call Us</h3>
                    <p>+91 8097559524</p>
                </div>
                </center>
              </div>
            </div>

          </div>


          <div class="col-lg-6">
            <form action="" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Phone Number" required>
              </div>


              <div class="form-group">
                <select class='form-control' name='type' required>
                  <option value="Select Treatment">Select Treatment Type</option>
                  <option value="Drug Addiction">Drug Addiction</option>
                  <option value="Alcohol Adddiction">Alcohol Adddiction</option>
                  <option value="Detoxification Center">Detoxification Center</option>


                </select>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" Style="background-color:#5cb85c">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Shifa Dental Cure Clinic</h3>
            <p>
              Opp Reclamation Bus Depot,<br>
              Niytanan Nagar,<br>
              Near ONGC Building 26,<br>
              Bandra West ,Mum-400050 <br><br>
              <strong>Phone:</strong> +91 8097559524 <br>
              <strong>Email:</strong> info@learnthedigital.com<br>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Terms and Contidion.php">Terms and Contidion</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Privacy policy.php">Privacy policy</a></li>
            </ul>
          </div>



          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to learn the digital for more updated news and Digital world information.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe" Style="background-color:#5cb85c">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Learn The Digital</span></strong> All Rights Reserved BY <strong> Shifa Dental Care Clinic</strong>
        </div>
        <div class="credits">
          Designed by <a href="#" Style="color:#5cb85c">Learn The Digital Development</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a Style="background-color:#5cb85c" href="https://www.facebook.com/RehabiliationCentre" class="facebook">
          <iconify-icon data-icon="bx-bxl-facebook"></iconify-icon>
        </a>
        <a Style="background-color:#5cb85c" href="https://wa.me/+919619938447" class="linkedin">
          <iconify-icon data-icon="akar-icons:whatsapp-fill"></iconify-icon>
        </a>
        <a Style="background-color:#5cb85c" href="https://www.google.com/maps/place/Shifa+Dental+Care/@18.9638282,72.8186525,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7cf1254ba5d29:0x214b73fa639b52be!8m2!3d18.9638282!4d72.8208412" class="google">
          <iconify-icon data-icon="bx-bxl-google"></iconify-icon>
        </a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="https://wa.me/91 8097559524" class="back-to-top-whatsapp" style="position: fixed;display:inline;width: 40px;height: 40px;border-radius: 3px;right: 15px;bottom: 60px;background: #25D366;color: #fff;transition: display 0.5s ease-in-out;z-index: 99999;"><i class="icofont-brand-whatsapp" style="font-size: 24px;position: absolute;top: 8px;left: 8px;"></i></a>
  <a href="#" class="back-to-top" Style="background-color:#3fbbc0"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>

  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <script type="text/javascript">
    $(window).on('load', function() {
      $('#myModal').modal('show');
    });
  </script>
</body>

</html>