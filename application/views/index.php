<!DOCTYPE html>
<html lang="en">

<head>
  <title>Alfa Tutors - Best Tutors at one click!</title>
  <?php $this->view('header') ?>
  <script src="js/home.js"></script>
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
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod risus vitae rhoncus feugiat. Praesent maximus, sapien vel ultrices bibendum, ipsum ex semper eros, sit amet aliquet arcu enim ut erat. Nulla tempor est tellus, vel bibendum diam molestie ut. Suspendisse vulputate, purus eu consequat tempus, metus urna eleifend velit, id dignissim ante odio a nisl. Morbi luctus gravida pretium.</p>

  <p>Duis consectetur sed nulla vitae maximus. Suspendisse lacinia magna eu dolor posuere tempus. Sed odio nunc, faucibus et est ac, pharetra dignissim massa. Vivamus viverra libero dolor, ac scelerisque massa cursus sit amet. Fusce vestibulum sagittis dui eu egestas. Donec tortor orci, tincidunt et lorem porttitor, facilisis placerat ligula. Pellentesque et arcu eu ipsum hendrerit venenatis. Suspendisse dapibus pharetra ultricies. Praesent vel libero consequat, scelerisque orci sed, semper ipsum.</p>
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
  //slider ends


</script>
</body>
</html>