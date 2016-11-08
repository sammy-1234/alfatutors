<!DOCTYPE html>
<html>
<head>
  <title><?php echo $tutor[0]['name'], " - Tutor for ", $tutor[0]['subjects']?> | Alfa Tutors</title>
  <?php $this->view('header') ?>
</head>
<body>

  <?php $this->view('topbar'); ?>
  <div class="container-fluid view-ind">
    <div class="row">
      <div class="col-xs-12">
       <div style="background-color:#bdc3c7"><h2><?php echo $tutor[0]['name']?></h2></div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-8">
        <video width="400" controls>
         <source src="<?php echo base_url().$tutor[0]['video']?>">
        </video>
      </div>

      <div class ="col-xs-4">
          <div><h5><b>CLASS : </b></h5><p><?php echo $tutor[0]['class']?></p></div>
          <div><h5><b>SUBJECTS :</b></h5><p><?php echo $tutor[0]['subjects']?></p></div>
          <div><h5><b>TARGET LEVEL :</b></h5><p><?php echo $tutor[0]['target']?></p></div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12">
      <div style="background-color:#bdc3c7"><h2> INFORMATION ABOUT <?php echo $tutor[0]['name']?> </h2></div>
      </div>
    </div>

    <div class="row">
      <div class = "col-xs-4">
          <div><h5><b>EXPERIENCE :</b></h5><p><?php echo $tutor[0]['experience']?></p></div>
          <div><h5><b>CATEGORY : </b></h5><p><?php echo $tutor[0]['category']?></p></div>
          <div><h5><b>CONTACT : </b></h5><p><?php echo $tutor[0]['conact']?></p></div>
          <div><h5><b>LOCATION : </b></h5><p><?php echo $tutor[0]['location']?></p></div>
      </div>
      <div class="col-xs-4">
          <div><h5><b>FACULTY : </b></h5><p><?php echo $tutor[0]['faculty']?></p></div>
          <div><h5><b>FEES STRUCTURE : </b></h5><p><?php echo $tutor[0]['fees']?></p></div>
          <div><h5><b>DAYS : </b></h5><p><?php echo $tutor[0]['days']?></p></div>
          <div><h5><b>TIMINGS : </b></h5><p><?php echo $tutor[0]['timings']?></p></div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12" style="background-color:#bdc3c7"><h2><b>STUDENT REVIEWS : </b></h2></div>
      <p><?php echo $tutor[0]['reviews']?></p>
      </div>

      <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#add-review">Add Review</button>
        <form class="form-inline" id="student_review">
        <div id="add-review" class="collapse">
        <?php echo form_open('submitreview')?>
        <br>
        <label><b>Name :             </b></label>
        <?php echo form_input('name','',array(
        'class'=>"form-control"
        ));
        ?>
        <br><br>
        <label><b>Class :            </b></label>
        <?php echo form_input('class','',array(
        'class'=>"form-control"
        ));
        ?>
        <br><br>
        <label><b>Batch year :        </b></label>
        <?php echo form_input('batch','',array(
        'class'=>"form-control"
        ));
        ?>
        <br><br>
        <label><b>Review :            </b></label>
        <?php echo form_textarea('review','',array(
        'class'=>"form-control"
        ));
        ?>
        <br><br>
        <center id="formsubm" onclick="reset()"><?php echo form_submit('subm','Submit')?></center>
        </div>
        </form>
      <hr>
      </div>
    </div>

    <div class="row">
    <center><button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#registerform">Register for Classes</button></center>
    </div>

    </div>
    <div id="registerform" class="modal fade" role="dialogue">
        <div class="modal-dialogue">
          <div class="modal-content">
            <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">REGISTER</h4>
            </div>
    <div class="modal-body">
    <?php echo form_open('registerform')?>
    <div class="row">
    <div class="col-xs-4"></div>
    <div class="col-xs-4">
    <label for="timeselection"><h3><b>NAME:</b></h3></label>
    <div class="form-group has-success">
    <?php echo form_input('name','',array(
    'class'=>"form-control"
    ));
    echo form_hidden('tutorid',$tutor[0]["id"]);
    ?>
    </div>
    </div>
    </div>
    <p><center>register for:</center></p>
    <p><center><strong><?php echo $tutor[0]['name']?></strong></center></p>
    <br><br>
    <p><i>Thank you for your registration!</p>
    <?php echo form_submit('subm','Submit')?>
    </div>
    </div>
    </div>
  </div>

  <?php $this->view('footer') ?>

</body>
</html>
