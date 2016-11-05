<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>
  var options;
	$(document).ready(function(){
	  $("#grade").change(function(){
	  	
         if(document.getElementById("grade").value === '11' || document.getElementById("grade").value === '12')
         {
          $("[name='stream']").show();
          $("[name='stream']").change(function(){
           if(document.getElementsByName("stream")[0].value==='science')
           {
                options = {"physics":"physics",
                    "chemistry" : "chemistry",
                      "bio":"biology",
                       "maths":"maths",
                        "english":"english"
                              };
           }
           else if(document.getElementsByName("stream")[0].value==='commerce')
           {
                options = {"bst":"Bussiness Studies",
                "accounts":"Accounts",
                "eco":"Economics",
                "maths":"maths",
                "english":"english"
                        };
            }
          else
          {
              options = {
                "legal":"legal studies",
                  "pol":"political science",
                  "history":"history",
                   "psycology":"psycology"
                      };
          }
           
           
              //changing elements
             {
                var $el = $("[name='subject']");
                $el.empty(); // remove old options
                $.each(options, function(value,key) {
                       $el.append($("<option></option>")
                        .attr("value", value).text(key));
                        });
              }
            });
           }
         else
         {
         	//nothing happens for 9th and 10th
         }

		});
	});
	</script>
</head>
<body>
<?php echo form_open('home/submit');?>
<!--selecting class-->
<?php echo form_input(array(
'name'=>'grade',
'id'=>'grade',
'value'=>set_value('grade')
	)); ?>
<!-- selecting subject-->
<?php $options = array(
   'english'=>'english',
   'hindi'=>'hindi',
   'science'=>'Science',
   'maths'=>'Maths',
   'history'=>'History',
   'polscience'=>'Political science'
	);
$stream =array(
    'science'=>'science',
    'commerce'=>'commerce',
    'humanities'=>'humanities'
	);
?>
<?php echo form_dropdown('stream',$stream,'science',array(
 'style'=>'display:none'
 ));?>
<?php echo form_dropdown('subject',$options,'english');?>
<!-- selecting fees-->
<h3><?php echo form_radio('fees',"below 2000",false); ?>Below 2000</h3>
<h3><?php echo form_radio('fees',"below 5000",true); ?>Between 2000-5000</h3>
<h3><?php echo form_radio('fees','doesnt matter',false); ?>Doesn't matter</h3>
<!--selecting study method-->
<?php $categoryoptions= array(
 'online'=>'online',
 'group'=>'group',
 'individual'=>'individual',
 'coaching'=>'coaching'
);?>
<?php echo form_multiselect('category',$categoryoptions,'individual');?>
<!--selecting timings-->
<?php $timinoptions=array(
'2-4'=>'2PM to 4PM',
'4-6'=>'4PM to 6PM',
'5-7'=>'5PM to 7PM',
'6-8'=>'6PM to 8PM'
);?>

<?php echo form_multiselect('timings',$timinoptions,'4-6');?>
<?php echo form_submit('subm','Submit');?>
</body>
</html>