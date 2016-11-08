<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $data[0]['subjects'], " Tutors around ", $data[0]['location'] ?> | Alfa Tutors</title>
  <?php $this->view('header') ?>
</head>
<body>

  <?php $this->view('topbar'); ?>
  
  <div class="row view-all">
  <?php echo form_open('home/submit') ?>
   <div class="col-xs-3">
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
    <div class="col-xs-3">
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
    <div class="col-xs-3">
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
    <div class="col-xs-3">
              <?php echo form_open('home/submit');?>
              <button class="time-go" type="submit" name="subm" id="submitbut">Go</button>
            </div>
  </div>

<div class="row view-all">
<div class="col-xs- 12">
<p>Your Tags - <span class="label label-success"><?php echo $data[0]['class']?></span> <span class="glyphicon glyphicon-chevron-right"></span> <span class="label label-success"><?php echo $data[0]['subjects']?></span> <span class="glyphicon glyphicon-chevron-right"></span> <span class="label label-success"><?php echo $data[0]['category']?></span> <span class="glyphicon glyphicon-chevron-right"></span> <span class="label label-success"><?php echo $data[0]['location']?></span></p>
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
            <div class="col-xs-12">
              <h5 class="view-header"><?php echo strtolower($data[$i]['name'])?></h5>
            </div>
            <div class="col-xs-5">
              <p>
                <?php
                  $k = 0;
                  foreach ($subjectvar as $cSubject) {
                ?>
                  <i class="fa <?php echo $iconSub[$k] ?>" aria-hidden="true"></i> <?php echo $cSubject?>
                <?php
                  $k++;
                  }
                  // Ending for loop ?>
              </p>
              <p>Class : <?php echo $data[$i]['class']?></p>
            </div>
            <div class= "col-xs-5">
            <p>Target : <?php echo $data[$i]['target']?></p>
            <p> <?php echo $data[$i]['experience'] ?> years Experience</p>
            <p>Category : <?php echo $data[$i]['category']?></p>
            </div>
            <div class="col-xs-2">
            <p>Location : <?php echo $data[$i]['location']?></p>
            </div>
          </a>
      </div>
      <div class="row view-row">
         <div class="col-xs-5">
           <span class="view-score">89</span>
         </div>
         <div class="col-xs-5">
            <p>Fees : <?php echo $data[$i]['fees']?></p>
          </div>
        </div>
        <!-- view item end -->

    </div>
    <?php endfor?>
  </div>

  <?php $this->view('footer') ?>

</body>
</html>
