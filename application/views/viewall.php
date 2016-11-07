<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $data[0]['subjects'], " Tutors around ", $data[0]['location'] ?> | Alfa Tutors</title>
  <?php $this->view('header') ?>
</head>
<body>

  <?php $this->view('topbar'); ?>

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
            <p><?php echo $data[$i]['target']?></p>
            <p>Location : <?php echo $data[$i]['location']?></p>
            <p>Category : <?php echo $data[$i]['category']?></p>
            </div>
            <div class="col-xs-2">
            <p> <?php echo $data[$i]['experience'] ?> years Experience</p>
            </div>
          </a>
      </div>
      <div class="row">
         <div class="col-xs-5">
         <p>immunity score</p>
         </div>
         <div class="col-xs-5">
            <p>Fees : <?php echo $data[$i]['fees']?></p>
          </div>
        </div>
    </div>
    <?php endfor?>
  </div>

  <?php $this->view('footer') ?>

</body>
</html>
