<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
   $("#print").click(function(){
   window.print();
   });
  });
  </script>
</head>
<body>
<div id="sectionhr"></div>
<h1><center>Alfa Registration Reciept</center></h1>
<p><center><i>-----------------------------------------------------------</i></center></p>
<div class="container-fluid">
<ul class="list-group">
<li class="list-group-item"><b>Timestamp :   </b><?php echo date("Y/m/d");?></li>
<li class="list-group-item"><b>Name :    </b><?php echo $name?></li>
<li class="list-group-item "><b>Registration for :      </b><?php echo $tutor[0]['name']?></li>
<li class="list-group-item"><b>Contact Number :    </b><?php echo $tutor[0]['conact']?></li>
<li class="list-group-item "><b>Location :    </b><?php echo $tutor[0]['location']?></li>
<li class="list-group-item"><b>Amount :    </b><? echo $tutor[0]['fees']?></li>
</ul>
<center><button type="button" class="btn btn-lg btn-success" id="print"><div class="glyphicon glyphicon-print"> Print</div></button></center>
<hr>
<center><a role="button" class="btn btn-lg btn-warning" href="<?php echo "http://localhost/CodeIgniter-3.0.6/index.php/home" ?>"><div class="glyphicon glyphicon-home"> Home</div></a></center>
<p><i><center>------------------Thankyou------------------</center></i></p>

</div>
</body>
</html>