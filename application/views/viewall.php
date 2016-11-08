<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $data[0]['subjects'], " Tutors around ", $data[0]['location'] ?> | Alfa Tutors</title>
  <?php $this->view('header') ?>
</head>
<body>

  <?php $this->view('topbar'); ?>
  <div class="top-clear"></div>
  <div class="row view-all">
  <?php echo form_open('home/submit') ?>
   <div class="col-md-3 col-xs-6">
    <div class="form-group has-success has-feedback">
              <?php
              $gradelist=array(
                 'choose'=>'All Grades',
                 '9'=>'9',
                 '10'=>'10',
                 '11'=>'11',
                 '12'=>'12'
                );
              ?>
              <?php echo form_dropdown('grade',$gradelist,'choose',array(
              'class'=>'form-control my-control',
              'id'=>'grade',
                )); ?>
            </div>
    </div>
    <div class="col-md-3 col-xs-6">
      <div class="form-group has-success has-feedback">
              <?php
              $options=array(
                 'choose'=>'All Subjects',
                 'English'=>'English',
                 'Hindi'=>'Hindi',
                 'Science'=>'Science',
                 'Maths'=>'Maths',
                 'SST'=>'SST',
                  "Physics"=>"Physics",
                  "Chemistry" => "Chemistry",
                  "Biology"=>"Biology",
                  "Bussiness Studies"=>"Bussiness Studies",
                  "Accounts"=>"Accounts",
                  "Economics"=>"Economics",
                  "Legal Studies"=>"Legal Studies",
                  "Political Science"=>"Political Science",
                  "History"=>"History",
                  "Psycology"=>"Psycology"
                );
              ?>
            <?php echo form_dropdown('subject',$options,'choose',array(
              'class'=>'form-control my-control',
              'id'=>'subjectselection'
              ));?>
            </div>
    </div>
    <div class="col-md-3 col-xs-6">
    <div class="form-group has-success has-feedback">
             <?php
             $categoryoptions= array(
              'choose'=>'All Categories',
              'Online'=>'Online',
              'Group'=>'Group',
              'Individual'=>'Individual',
              'Coaching'=>'Coaching'
             );
            ?>

              <?php echo form_dropdown('category',$categoryoptions,'choose',array(
                'class'=>'form-control my-control',
                'id'=>'categorymenu'
                ));?>
          </div>
    </div>
    <div class="col-md-3 col-xs-6">
              <?php echo form_open('home/submit');?>
              <button class="time-go" type="submit" name="subm" id="submitbut">Go</button>
            </div>
  </div>

  <div class="row view-all">
    <div class="col-xs-12">
        <span class="label label-success black-back"><?php echo $data[0]['class']?></span>
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="label label-success black-back"><?php echo $data[0]['subjects']?></span>
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="label label-success black-back"><?php echo $data[0]['category']?></span>
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="label label-success black-back"><?php echo $data[0]['location']?></span>
    </div>
  </div>

  <div class="container-fluid view-all">
    <?php for($i=0,$count = count($data);$i<$count;$i++):
      $subjectvar = explode(',',$data[$i]['subjects']);
      $string = '';
      for($j=0,$subjectcounter=count($subjectvar);$j<$subjectcounter;$j++) {
        $string = $string.$subjectvar[$j]."/";
      }
      // For URL

      $classvar = explode(',', $data[$i]['class']);

      $locationvar = explode(',', $data[$i]['location']);

      $iconSub = array(count($subjectvar));
      $k = 0;
      foreach ($subjectvar as $cSubject){
        if ($cSubject === 'Maths')
          $iconSub[$k] = 'fa-cube';
        else if ($cSubject == 'Chemistry' || $cSubject == 'Physics' || $cSubject == 'Biology' || $cSubject == 'Science')
          $iconSub[$k] = 'fa-flask';
        else
          $iconSub[$k] = 'fa-book';
        $k++;
      }

      $imgIdent = $subjectvar[0];
    ?>
    <div class="view-item">

      <div class="row">
          <a class="view-href" href="<?php echo "/home/show/".$data[$i]['id']."/".$string?>">

            <!-- view block -->
            <div class="col-xs-12">
              <h5 class="view-header"><?php echo strtolower($data[$i]['name'])?></h5>
            </div>


            <div class="col-xs-5">
              <div class='view-subject-row'>
                <?php
                  $k = 0;
                  foreach ($subjectvar as $cSubject) {
                ?>
                  <span class="view-subject"><i class="fa <?php echo $iconSub[$k] ?>" aria-hidden="true"></i> <?php echo $cSubject?></span>
                <?php
                  $k++;
                  }
                  // Ending for loop ?>
              </div>
            </div>

            <div class= "col-xs-5">
              <p>
              <?php
                if ($data[$i]['target'] != '') {
                  echo '<i class="fa fa-bullseye" aria-hidden="true"></i> ', $data[$i]['target'];
                }
              ?>
              </p>
            </div>

            <div class="col-xs-1">
              <?php
                foreach($locationvar as $cLocation) {
                  echo "<span style='text-transform: capitalize;' class='label label-success theme-back-1'>", strtolower($cLocation), "</span><br>";
                }
              ?>
            </div>
            <div class="col-xs-1 hidden-xs">
              <span class="glyphicon glyphicon-chevron-right view-go"></span>
            </div>

            <div class="col-xs-5">
              <div class="view-grade-row vertical-half">
                Grades
                <?php
                  foreach($classvar as $cClass) {
                    echo "<span class='badge view-grade'>", $cClass, "</span>";
                  }
                ?>
              </div>
            </div>
            <div class="col-xs-5">
              <p><span style='text-transform: capitalize;' class='label label-success theme-back-1'><?php echo $data[$i]['category']?></span></p>
            </div>

          </a>
      </div>


      <div class="row view-row">
        <div class="col-xs-5">
           <span class="view-score label label-success">
             <!-- Immunity score -->
             89
           </span>
        </div>
        <div class="col-xs-5">
          <p><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $data[$i]['fees']?></p>
        </div>
        <div class="col-xs-2">
          <?php
            if ($data[$i]['experience'] >= 5) {
              echo '<i class="fa fa-user-circle-o" aria-hidden="true"></i> ', $data[$i]['experience'], ' Years';
            }
          ?>
        </div>
      </div>

        <!-- view item end -->

    </div>
    <?php endfor?>
  </div>

  <div class="row view-all">
    <p>Finding quality tutors is tough, and we at Alfa Tutors know that. That's why we bring you the best list of tutors for <?php echo $data[0]['subjects'] ?> around <?php echo $data[0]['location'] ?>. With over 720 tutors listed, we have verified tutors with real student reviews.</p>
    <p>With tutors for every type of target, be it IIT-JEE, SAT, MAT, English, CBSE - Alfa Tutors provides you the complete information about tutors around <?php echo $data[0]['location'] ?>.</p>
    <p>Currently, we have <?php echo count($data) ?> tutors for your requirement.</p>
  </div>

  <?php $this->view('footer') ?>

</body>
</html>
