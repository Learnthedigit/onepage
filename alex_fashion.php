<?php
if (count($_POST) > 0) {
  if ($_POST['Submit'] == 'Send Message') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    if (strlen($name) > 0 && strlen($email) > 0) {
      $txt = "Name: $name \n Email: $email\n Contact no:$mobile";
      $to = "learnthedigital@gmail.com";
      $headers = "From: alexfasion@learnthedigital.com" . "\r\n" .
        "";
      $msg = "AlexFasion -$name";

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

<title>Alex Fashion | Learn The Digital</title>
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
  <link href="alex fashion\alex logo.png" rel="icon">
  <link href="alex fashion\alex logo.png" rel="apple-touch-icon">

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

    body {
      background: #1e1e1c;
    }
    #contact{
        background: #1e1e1c;
    }

.contact .php-email-form {
  background: #1e1e1c;
}

.contact .php-email-form button[type="submit"] {
  background: #e0ca53;
  color:black;
}

.contact .php-email-form button[type="submit"]:hover {
  background: #e0ca53;
}



  .cta {
  background: #1e1e1c;
}
.team .member {
  background: #1e1e1c;
}



    </style>
</head>

<body>

   <div class="row">
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" style="margin-top:10%"
            class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" style="color:Black">Enquire Now</h4>
                         <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                      </div>
                      <div class="modal-body">
                      <img src="alex fashion\alex_pop_img.jpeg" width="350px">
                       <form action="" method="post" id='contact_form' role="form" class="php-email-form">
                         <br>
                                <div class="row">
                                    <div class="col form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required><br />
                                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Your Mobile Number" required>
                                    </div>
                                </div>
                            <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                    </div>

            
              <div class="text-center" ><button type="submit" name='Submit' value='Send Message' style="border:0px;background-color:Black;padding:10px 24px;color:#fff;transition:0.4s;border-radius:4px;">Get a Call Back</button></div>
            </form>
                      </div>
                    </div>
                  </div>
                </div>
        </div>


  <main id="main">
      <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

  
        <!-- <div class="section-title">
            <img src="alex fashion\alex logo.png" width="150px">
          <h2 style="color:#e0ca53">Alex Fashion</h2>
          <h3 style="color:#e0ca53">Big Fashion Show - In Bangalore</h3>
         <p style="color:White">Miss & Misses Bengluru 2021 Seaaso 5</p> 
         <p style="color:White">Register Now <span class="iconify" data-icon="fluent:call-20-filled" style="font-size:30px;color:#e0ca53"></span>+91 9945 0833 60</p> 
        </div> -->

        <div class="row" data-aos="fade-up" data-aos-delay="100">
       
        <div class="col-lg-6">
       <center> <img src="alex fashion\alex logo.png" width="400px">
      
       <p style="color:White">Register Now <span class="iconify" data-icon="fluent:call-20-filled" style="font-size:30px;color:#e0ca53"></span><a href="tel:+919945083360" Style="color:#8f1393">+91 9945 0833 60</a></p> </center>
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
              <div class="text-center" onclick="myFunction()"><button type="submit">Get a Call Back</button></div>
            </form>
          </div>

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
              <br><br><br><br>
                <div class="info-box"><center>
                  <img src="alex fashion\Alex.png" width="250px">
                </div></center>
              </div>
              <div class="col-md-12">
                <div class="info-box mt-4"><center>
                  <h3 style="color:#e0ca53">MR. ALEX</h3>
                  <p style="color:white">Founder & CEO</p>
                  <h2 style="color:#e0ca53">Alex Fashion</h2>
          <h3 style="color:#e0ca53">Big Fashion Show - In Bangalore</h3>
         <p style="color:White">Miss & Misses Bengluru 2021 Seaaso 5</p> 
         <p style="color:White">Register Now <span class="iconify" data-icon="fluent:call-20-filled" style="font-size:30px;color:#e0ca53"></span>+91 9945 0833 60</p> 
                 </div></center>
              </div>

          </div>

         

        </div>

      </div>
    </section><!-- End Contact Section -->


      <!-- ======= Cta Section ======= -->
      <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
         <center> <p style="color:e0ca53">Pr Partner|Media Partner|Fashion Partner|Venus Partner|Title Partner|Social Partner|Create Partner|Jewellery Partner
         </p></center>
          <img src="alex fashion\cta.png" width="100%"> 
          </div>
          
        </div>

      </div>
    </section><!-- End Cta Section -->
<!-- ======= Team Section ======= -->
<section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="color:#e0ca53">CURVE</h2>
          <p style="color:#e0ca53">International Magazine - 2022</p>
          <p style="color:#e0ca53">Top Cover Story</p>
          <p style="color:#e0ca53">LIFESTYLE COVER</p>
          <p style="color:#e0ca53"> GLAMOUR | FASHION | MODELS | MOVIES | SPORTS | CAR | BIKE</P>
          </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="alex fashion\GOLD.png" class="img-fluid" alt="unlimited fashion store logo">               
               </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="alex fashion\RED.png" class="img-fluid" alt="BNC Traders logo">
                </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="alex fashion\BLACK.png" class="img-fluid" alt="Ambawats Patanjali logo">
                </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Team Section -->


  <br><br>




  
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

 
    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Learn The Digital</span></strong> All Rights Reserved BY <strong> Alex Fashion
 </strong>
        </div>
        <div class="credits">
          Designed by <a href="#" Style="color:#e0ca53">Learn The Digital Development</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a Style="background-color:#e0ca53;color:black" href="https://www.facebook.com/RehabiliationCentre" class="facebook">
          <iconify-icon data-icon="bx-bxl-facebook"></iconify-icon>
        </a>
        <a Style="background-color:#e0ca53;color:black;" href="https://wa.me/+919619938447" class="linkedin">
          <iconify-icon data-icon="akar-icons:whatsapp-fill"></iconify-icon>
        </a>
        <a Style="background-color:#e0ca53;color:black;" href="https://www.google.com/maps/place/Shifa+Dental+Care/@18.9638282,72.8186525,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7cf1254ba5d29:0x214b73fa639b52be!8m2!3d18.9638282!4d72.8208412" class="google">
          <iconify-icon data-icon="bx-bxl-google"></iconify-icon>
        </a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="https://wa.me/+919945083360" class="back-to-top-whatsapp" style="position: fixed;display:inline;width: 40px;height: 40px;border-radius: 3px;right: 15px;bottom: 60px;background: #25D366;color: #fff;transition: display 0.5s ease-in-out;z-index: 99999;"><i class="icofont-brand-whatsapp" style="font-size: 24px;position: absolute;top: 8px;left: 8px;"></i></a>
  <a href="#" class="back-to-top" Style="background-color:#e0ca53;color:black;"><i class="icofont-simple-up"></i></a>

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