<!DOCTYPE html>
<html lang="en">

<head>
  <title>Alfa Tutors - Best Tutors in Delhi, Maths, Science, Commerce Tutors</title>
  <?php $this->view('header') ?>
  <script src="js/home.js"></script>
  <meta name="description" content="Alfa Tutors is the one stop solution to finding the best tutors in your locality. Be it Maths, Science, Commerce or Humanities - we connect students with the perfect tutors.">
</head>

<body>

<?php $this->view('topbar'); ?>

<div class="container-fluid" id="section4">

  <div class="hero-t">
    <h4>We connect students and tutors.</h4>
    <h6>Study at your own pace, at your own time</h6>
  </div>

  <div class="tabs tabs-reasons tabs-circle-top tab-container">
    <ul class="etabs text-center">
      <li class="tab">
        <a href="#tab-1" data-toggle="modal" data-target="#what">
          <div>1</div>
        What?
        </a>
      </li>
      <li class="tab">
        <a href="#tab-2"  data-toggle="modal" data-target="#how">
          <div>2</div>
        How?
        </a>
      </li>
      <li class="tab">
        <a href="#tab-2"  data-toggle="modal" data-target="#where">
          <div>3</div>
        Where?
        </a>
      </li>
      <li class="tab">
        <a href="#tab-4" data-toggle="modal" data-target="#when">
        <div>4</div>
        When?</a>
      </li>

      <?php echo form_open('home/submit');?>
      <li class="tab" style="cursor: pointer;">
        <a id="goclass">
        <input type="submit" name="subm" value="GO" id="submitbutton">
        </a>
      </li>
    </ul><!-- /.etabs -->
  </div>
</div>

<?php $this->view('modals') ?>

<div class="subject-list">
  <!--links sections to particular subjects-->
  <span style="text-align:center;"><h2>Choose Your Subjects</h2></span>
    <div class="container-fluid w3-content w3-display-container" id="subjectlinks">
    <a class="w3-btn-floating w3-hover-dark-grey w3-display-left" onclick="plusDivs(-1)">&#10094;</a>


    <div class="w3-display-container mySlides" style="margin-left:40px">
    <div class="col-md-3 col-xs-12 subject-block">
      <a href="home/subject/Chemistry" class="subject-link">
        <div class="subject-block w3-display-container">
          <img src="images/chemistry.png" class="img-rounded subject-img">
          <div class="w3-display-bottomleft w3-container w3-black subject-txt">
          Chemistry
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-3 col-xs-12 subject-block">
      <a href="home/subject/Maths" class="subject-link">
        <div class="subject-block w3-display-container">
          <img src="images/maths.png" class="img-rounded subject-img">
          <div class="w3-display-bottomleft w3-container w3-black subject-txt">
          Maths
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-3 col-xs-12 subject-block">
      <a href="home/subject/English" class="subject-link">
        <div class="subject-block w3-display-container">
          <img src="images/english.png" class="img-rounded subject-img">
          <div class="w3-display-bottomleft w3-container w3-black subject-txt">
          English
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-3 col-xs-12 subject-block">
       <a href="home/subject/Physics" class="subject-link">
        <div class="subject-block w3-display-container">
          <img src="images/physics.png" class="img-rounded subject-img">
          <div class="w3-display-bottomleft w3-container w3-black subject-txt">
          Physics
          </div>
        </div>
      </a>
    </div>
    </div>

    <div class="w3-display-container mySlides" style="margin-left:40px">
   <div class="col-md-3 col-xs-12 subject-block">
      <a href="home/subject/Computer" class="subject-link">
        <div class="subject-block w3-display-container">
          <img src="images/computer.png" class="img-rounded subject-img">
          <div class="w3-display-bottomleft w3-container w3-black subject-txt">
          Computer Science
          </div>
        </div>
      </a>
    </div>
    <div class="col-xs-3">
    <a href="home/subject/Maths"><img class="img-rounded" src="images/page1maths.svg" height="100px"></a>
    </div>
    <div class="col-xs-3">
    <a href="home/subject/Chemistry"><img class="img-rounded" src="images/page1chemistry.svg" height="100px" ></a>
    </div>
    <div class="col-xs-3">
    <a href="home/subject/Maths"><img class ="img-rounded" src="images/page1chemistry.svg" height="100px"></a>
    </div>
    </div>

    <a class="w3-btn-floating w3-hover-dark-grey w3-display-right" onclick="plusDivs(1)">&#10095;</a>
    </div>
</div>

<a id="about"></a>
<div class="about container-fluid">
  <h3>About Us</h3>
  <p>Alfa Tutors is the one stop solution to finding the best tutors in your locality. In the vast market of tuition centres, Alfa Tutors is the one place where you can find credible tutors. We provide complete information about the tutors, including student reviews, experience, past results and qualifications. With over 100 tutors from Delhi, Alfa Tutors connects students and tutors.</p>

  <p>Alfa Tutors provides a student complete information about a tuition centre - what do they teach (Maths, Chemistry, Physics, Commerce, Computer Science), where, timings, category (home tutor, online, small group and classroom size), level of teaching (CBSE, IIT JEE, Olympiads) and how they teach. We even sort the tutors as per the fee structure and all other details a student wants to know including past results and reviews. Allowing you to study effectively and get the desired results.</p>
</div>

<?php $this->view('footer') ?>

<script>
//slider
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
  //slider ends here

</script>
</body>
</html>
