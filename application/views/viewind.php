<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>

<?php $this->view('topbar'); ?>

<div id="sectionhr"></div>
<br>
<br>
<div class="container-fluid">

<div class="row">
<div class="col-xs-4">
<div class="scroller">
<div class="list-group">
<ul>
<lI class="list-group-item list-group-item-warning"><h2>Other Popular Searches</h2></lI>
<?php for($i=0,$count = count($data);$i<$count;$i++):?>
<li class="list-group-item">
<?php $subjectvar = explode(',',$data[$i]['subjects']);
	$string='';
for($j=0,$subjectcounter=count($subjectvar);$j<$subjectcounter;$j++)
{

	$string = $string.$subjectvar[$j]."/";
}
?>
<a id="header" href="<?php echo "http://localhost/CodeIgniter-3.0.6/index.php/home/show/".$data[$i]['id']."/".$string?>">
<h2 class="list-group-item" id="header">
<?php echo $data[$i]['name']?></h2></a>
<h4 class="list-group-item">Subjects :<small><?php echo $data[$i]['subjects']?></small></h4>
<h4 class="list-group-item">Class : <small><?php echo $data[$i]['class']?></small></h4>
<h4 class="list-group-item">Experience : <small><?php echo $data[$i]['experience']?></small></h4>
</li>
<?php endfor?>
</ul>
</div>
</div>
</div>


<div class="col-xs-8">
<div class="list-group">
<ul>
<div class="list-group-item list-group-item-success"><h1 class="list-group-item-heading"><?php echo $tutor[0]['name']?></h1></div>
<hr>
<div class=" list-group-item">
<video width="400" controls>
 <source src="<?php echo base_url().$tutor[0]['video']?>">
</video>
</div>
<hr>
<div class="list-group-item"><h5 class="list-group-heading"><b>CLASS : </b></h5><p class="list-group-item-text"><?php echo $tutor[0]['class']?></p></div>
<div class="list-group-item"><h5 class="list-group-heading"><b>SUBJECTS :</b></h5><p class="list-group-item-text"><?php echo $tutor[0]['subjects']?></p></div>
<div class="list-group-item"><h5 class="list-group-heading"><b>EXPERIENCE :</b></h5><p class="list-group-item-text"><?php echo $tutor[0]['experience']?></p></div>
<div class="list-group-item"><h5 class="list-group-heading"><b>TARGET LEVEL :</b></h5><p class="list-group-item-text"><?php echo $tutor[0]['target']?></p></div>
<div class="list-group-item"><h5 class="list-group-heading"><b>CONTACT : </b></h5><p class="list-group-item-text"><?php echo $tutor[0]['conact']?></p></div>
<hr>
<div class="list-group-item"><h5 class="list-group-heading"><b>LOCATION : </b></h5><p class="list-group-item-text"><?php echo $tutor[0]['location']?></p></div>
<div class="list-group-item"><h5 class="list-group-heading"><b>FACULTY : </b></h5><p class="list-group-item-text"><?php echo $tutor[0]['faculty']?></p></div>
<div class="list-group-item"><h5 class="list-group-heading"><b>FEES STRUCTURE : </b></h5><p class="list-group-item-text"><?php echo $tutor[0]['fees']?></p></div>
<hr>
<div class="list-group-item"><h5 class="list-group-heading"><b>CATEGORY : </b></h5><p class="list-group-item-text"><?php echo $tutor[0]['category']?></p></div>
<div class="list-group-item"><h5 class="list-group-heading"><b>DAYS : </b></h5><p class="list-group-item-text"><?php echo $tutor[0]['days']?></p></div>
<div class="list-group-item"><h5 class="list-group-heading"><b>TIMINGS : </b></h5><p class="list-group-item-text"><?php echo $tutor[0]['timings']?></p></div>
<hr>
<div class="list-group-item"><h5 class="list-group-heading"><b>STUDENT REVIEWS : </b></h5><p class="list-group-item-text"><?php echo $tutor[0]['reviews']?></p></div>
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
</ul>
</div>
<center><button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#registerform">Register for Classes</button></center>
<a href="http://localhost/CodeIgniter-3.0.6/index.php/blog/">click me</a>
</div>

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
<p><i>------Thankyou For Registration-------</i></p>
<?php echo form_submit('subm','Submit')?>
</div>
</div>
</div>
</div>

</body>
</html>