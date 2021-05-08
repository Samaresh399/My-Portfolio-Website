<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Samaresh Adak | Portfolio</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body data-spy="scroll" data-target=".navbar" data-offset="10">

<header>
<!------------- Navbar Start -------------->
<nav id="topnav" class="navbar fixed-top navbar-expand-lg navbar-dark" style="background: transparent;">
  <a href="#Home" class="navbar-brand text-white">Samaresh Adak <span>| Portfolio</span></a>
  <button class="navbar-toggler" data-toggle="collapse" data-target="#MyNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="MyNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item"><a href="#Home" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="#AboutMe" class="nav-link">About Me</a></li>
      <li class="nav-item"><a href="#MySkills" class="nav-link">My Skills</a></li>
      <li class="nav-item"><a href="#MyEducation" class="nav-link">My Education</a></li>
      <li class="nav-item"><a href="#ContactMe" class="nav-link">Contact Me</a></li>
    </ul>
  </div>
</nav>
<!--------------- Navbar End --------------->
</header>

<main>
<!-------------- Home Section Start---------------->
<section id="Home">
  <div class="homeimg bg-image" style="background-image: url('images/banner-image.jpg');">
    <div class="overlay-homeimg"></div>
     <div class="home-content text-dark">
 	    <h1 class="intro-title mb-4">Hi, i'm<wbr/>&nbsp;Samaresh Adak</h1>
 	    <h2 class="intro-subtitle">I'm a <span class="words"></span></h2>
     </div>
  </div>
</section>
<!-------------- Home Section End ---------------->


<!-------------- About Me Section Start --------------->
<section id="AboutMe">
<div class="aboutme-box-container">
  <div class="container">
    <div class="row box-shadow-full">
      <div class="col-sm-12">
      	  <div class="row">

      	    <div class="col-md-4">
      	      <div class="author-img d-flex justify-content-start">
      	      	<img src="images/author.jpg" class="img-fluid b-shadow-a" alt="Author Image">
      	      </div>
      	      <div class="about-info d-flex flex-column justify-content-center">
      	      	<p class=""><strong>Name:</strong>&nbsp;<span>Samaresh Adak</span></p>
      	      	<p class=""><strong>Email:</strong>&nbsp;<span>samareshadak1@gmail.com</span></p>
      	      	<p class=""><strong>Phone:</strong>&nbsp;<span>(+91)9748633568</span></p>
      	      	<p class="d-flex flex-inline"><strong>Visit my LinkedIn:</strong>&nbsp;<a href="https://www.linkedin.com/in/samaresh-adak-852746206"><button type="button" class="btn btn_linkedIn">Visit</button></a></p>
      	      </div>
      	    </div>

      	    <div class="col-md-8 about-statement">
      	      <div class="title-box-2">
                <h5 class="title-left">
                  About me
                </h5>
                <hr/>
              </div>
              <p class="lead about-para-1">
                I'm a student of 3<sup>rd</sup> year B.Com(Hons.) from University of Calcutta. Also i've done a course on CSE(Computer Software Engineering) from Ramakrishna Mission Shilpamandira Computer Centre.
              <p class="lead about-para-2">
                I’ve great interest in new web technology and passionate about coding. I like to learn new things and working with them. I also have keen interest in Web Development and wish to learn and gain experience in this field. 
              </p>
              <p class="lead about-para-3">
                When i made a project, i made it considering the main goal of that project also the real life use of it.<br/>
                I like to create projects using new web technologies that can be used in real life situations.
              </p>
					    <a href="Resume/SamareshAdak_Resume.pdf" download><button type="button" class="btn btn_resume">Download my Resume</button></a>
      	    </div>
      	  </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-------------- About Me Section End --------------->


<!-------------- My Skills Section Start -------------->
<section id="MySkills">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 text-center MySkills_heading">
        <h1>My Skills</h1>
        <hr/>
        <p>This are my skills that i've learned through out my education & by myself.</p>
      </div>

      <!-- HTML Card -->
      <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="card text-center">
            <h3>HTML</h3>
            <hr/>
          <div class="card-body text-justify">
            <p>I know HTML and the new tags and attributes comes with HTML5. I have created this portfolio site of mine using the Semantic Elements of HTML5 to make it organized.</p>
          </div>
        </div>
      </div>

      <!-- CSS Card -->
      <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="card text-center cb_card">
          <span class="card-img"><i class="fab fa-css3-alt"></i></span>
            <h3>CSS <br/> & <br/> Bootstrap</h3>
            <hr/>
          <div class="card-body text-justify">
            <p>I know CSS, Bootstrap and the new CSS3 properties, i have used flexbox, media queries and Bootstrap Grid Layout to make this website responsive.</p>
          </div>
        </div>
      </div>

      <!-- JavaScript Card -->
      <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="card text-center js_card">
          <span class="card-img"><i class="fab fa-js-square"></i></span>
            <h3>JavaScript</h3>
            <hr/>
          <div class="card-body text-justify">
            <p>I have worked with Javascript form Basic to Intermediate level, i have used javascript DOM Elements and some javascript methods to make this website functional and user interactive.</p>
          </div>
        </div>
      </div>

      <!-- PHP Card -->
      <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="card text-center">
          <span class="card-img"><i class="fab fa-php"></i></span>
            <h3>PHP</h3>
            <hr/>
          <div class="card-body text-justify">
            <p>I have worked with PHP form Basic to Advance level, also used PHP Server Side Scripting to make this website's contact us form functional to send a feedback mail to the Administrator by using the PHP Mailer plugins.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!--------------- My Skills Section End --------------->


<!--------------- My Education Section Start --------------->
<section id="MyEducation">
<div id="edusection" class="paralax-education bg-image" style="background-image: url('images/Education-image.jpg');">
  <div class="overlay-education"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="edu-heading col-12 text-white text-center">
        <h1>My Education</h1>
        <p>This are my qualification and results as a student.</p>
      </div>
      <!------- Education Timeline Start ------->
      <div class="col-sm-12 col-md-8 col-lg-10">
      <div class="timeline">
        <ul>

          <li>
            <!-- Secondary (10th) Card -->
            <div class="timeline-content">
                <h3 class="mb-4" style="color: #336699;">Secondary (10th)</h3>
                  <p><strong>School: </strong> <span>Liluah T.R.G.R Khemka High School</span><p/>
                  <p><strong>Board: </strong> <span>WBBSE</span><p/>
                  <p><strong>Percentage: </strong> <span>60.43%</span></p>
            </div>
            <div class="time t1">
              <h5>2015 - 2016</h5>
            </div>
          </li>


          <li>
            <!-- Higher Secondary (12th) Card -->
            <div class="timeline-content HS-content">
                <h3 class="mb-4" style="color: #336699;">Higher Secondary (12th)</h3>
                  <p><strong>School: </strong> <span>Liluah T.R.G.R Khemka High School</span></p>
                  <p><strong>Board: </strong> <span>WBCHSE</span></p>
                  <p><strong>Percentage: </strong> <span>70.60%</span></p>
            </div>
            <div class="time t2">
              <h5>2017 - 2018</h5>
            </div>
          </li>


          <li>
            <!-- B.Com (Graduation) Card -->
            <div class="timeline-content">
                <h3 class="mb-4" style="color: #336699;">B.Com (Graduation)</h3>
                  <p><strong>College: </strong> <span>Nabagram Hiralal Paul College</span><p/>
                  <p><strong>Course: </strong> <span>B.Com(Hons.)</span><p/>
                  <p><strong>Subject: </strong> <span>Accountancy</span></p>
            </div>
            <div class="time t3">
              <h5>2018 - On Going</h5>
            </div>
          </li>
          <div style="clear: both;"></div>
        </ul>
      </div>
      </div>
      <!------- Education Timeline End ------->
    </div>
  </div>
</div>
</section>
<!--------------- My Education Section End ---------------->


<!----------------- My Projects Section Start ---------------->

<!---------------- My Projects Section End ----------------->


<!---------------- Contact Me Section Start ---------------->
<section id="ContactMe" style="background-color: #12263b;">
  <div class="container">
    <div class="row contact-me-form">
      <div class="col-12 text-center mb-4">
        <h1>Contact Me</h1>
        <hr class="contact-hr"/>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="contact-info">
          <p><strong>Address: </strong> <span> West Chakpara, P.S/P.O :- Liluah, Dist.:- Howrah, Pin.:- 711204, State:- West Bengal</span></p>
          <p><strong>Email: </strong> <span>samareshadak1@gmail.com</span></p>
          <p><strong>Social: </strong> 
            
            <a href="https://www.facebook.com/samarash.adak">
                <i class="fa fa-facebook"></i>
            </a>
               
            <a href="https://www.instagram.com/samaresh_adak">
                <i class="fa fa-instagram"></i>
            </a>

            <a href="https://www.github.com/Samaresh399">
                <i class="fa fa-github"></i>
            </a>

            <a href="https://www.linkedin.com/in/samaresh-adak-852746206">
                <i class="fa fa-linkedin"></i>
            </a>
          </p>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="contact-form">
          <div class="contact-form-title">
            <h4>Let's Get in Touch</h4>
            <hr class="form-hr" />
          </div>
          <div class="contact-form-controls">
            <div id="message" class="alert alert-info"></div>
            <div class="form-group">
              <label for="name">Name: </label>
              <input type="text" name="txt_name" class="form-control" id="txt_name" placeholder="Enter Your Name Here...">
            </div>
            <div class="form-group">
              <label for="email">Email: </label>
              <input type="text" name="txt_email" class="form-control" id="txt_email" placeholder="Enter Your Email Here...">
            </div>
            <div class="from-group">
              <label for="mail_subject">Subject: </label>
              <input type="text" name="txt_subject" class="form-control" id="txt_sub" placeholder="Enter Mailing Subject Here...">
            </div><br/>
            <div class="form-group">
              <label for="mail_message">Message: </label>
              <textarea cols="20" rows="6" name="txt_message" class="form-control" id="txt_msg" placeholder="Write a Message"></textarea>
              <button type="submit" id="btn_contact" name="btn_submit" class="btn btn-primary mt-4">Send</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!---------------- Contact Me Section End ---------------->
</main>



<footer style="background-color: #000d1a;">
  <div id="footer" class="footer-info">
    <h5>&copy;SamareshAdak All Rights Reserved.</h5>
  </div>
</footer>


<!-- Offline Links -->
<script type="text/javascript" src="js/typed.js"></script>
<script type="text/javascript" src="js/main.js"></script>

<!-- CDN Links -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript">
  $(document).ready(function() 
  {

    $(".contact-form-controls #message").attr("style", "display: none;");

    window.addEventListener("scroll", function() {
      if($(document).scrollTop() > 50)
      {
         $("#topnav").removeAttr("style");
         $("#topnav").addClass("bg-dark");
         $("#topnav").css("box-shadow","0px 4px 20px rgba(0,0,0,0.1)");
      }
      else
      {
        $("#topnav").removeAttr("style");
        $(document).css("background","trasparent");
        $("#topnav").removeClass("bg-dark");
      }
    });

    $(document).ajaxStart(function() 
    {
      $(".contact-form-controls #btn_contact").html("Sending...");
      $(".contact-form-controls #btn_contact").attr("disabled","");
    });

    $(document).ajaxComplete(function() 
    {
      $(".contact-form-controls #btn_contact").html("Send");
      $(".contact-form-controls #btn_contact").removeAttr("disabled");
      $(".contact-form-controls #message").removeAttr("style");
    })

    $("#btn_contact").click(function()
    {
        var name = $(".contact-form-controls #txt_name").val();
        var email = $(".contact-form-controls #txt_email").val();
        var subject = $(".contact-form-controls #txt_sub").val();
        var body = $(".contact-form-controls #txt_msg").val();
        var date = new Date();
        var currentTime = date.getHours()%12+":"+date.getMinutes()+":"+date.getSeconds();
        console.log(currentTime);

        if(name=="" || email=="" || subject=="" || body=="")
        {
          $(".contact-form-controls #message").text("Note: Write something to send.");
          $(".contact-form-controls #message").removeAttr("style");
          // setInterval(function(){
          //   $(".contact-form-controls #message").fadeOut(2000);
          // }, 3000);
          
        }
        else
        {
          var ObjectData={name: name, email: email, sub: subject, body: body, time: currentTime};
          var JsonData = JSON.stringify(ObjectData);

          $.ajax({
            url: "sendMail.php",
            type: "POST",
            data: "jsonData="+JsonData,
            success: function(res)
                {
                      $(".contact-form-controls #message").text(res);
                      $(".contact-form-controls #txt_name").val("");
                      $(".contact-form-controls #txt_email").val("");
                      $(".contact-form-controls #txt_sub").val("");
                      $(".contact-form-controls #txt_msg").val("");
                }
          });
        }
    });  
  });
    
</script>

<script>

  var typed= new Typed(".words",{
        strings: ["FrontEnd Developer",
              "BackEnd Developer",
              "Software Developer"],
        typeSpeed: 60,
        backSpeed: 60,
        loop: true
      });

    var navheight = document.getElementById("topnav").clientHeight;
    document.documentElement.style.setProperty("--navbar_height", navheight +"px");

    var eduheight = document.getElementById("edusection").clientHeight;
    document.documentElement.style.setProperty("--edusection_height", parseInt(eduheight+20)+"px");

</script>

</body>
</html>