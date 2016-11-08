<div id="what" class="modal fade" role="dialogue">
  <div class="modal-dialogue">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">Close</button>
        <h4 class="modal-title">What is your grade ?</h4>
      </div>
    <div class="modal-body">
    <!--selecting class-->
        <div class="row">
          <div class="col-xs-5"></div>
          <div class="col-xs-2">
            <labe for="grade"><h3>Grade:</h3></labe>
            <div class="form-group has-success has-feedback">
              <?php
              $gradelist=array(                   
                 'choose'=>'--select grade--',           
                 '9'=>'9',
                 '10'=>'10',
                 '11'=>'11',
                 '12'=>'12'
                );
              ?>
              <?php echo form_dropdown('grade',$gradelist,'choose',array(
              'class'=>'form-control',
              'id'=>'grade',
                )); ?>
            </div>
          </div>
        </div>
    <!-- selecting stream -->
              <?php $options = array(
                 'English'=>'English',
                 'Hindi'=>'Hindi',
                 'Science'=>'Science',
                 'Maths'=>'Maths',
                 'SST'=>'SST'
                );
              $stream =array(
                  'choose'=>'--select your stream--',
                  'Science'=>'Science',
                  'Commerce'=>'Commerce',
                  'Humanities'=>'Humanities'
                );
              ?>
        <div class="row">
          <div class="col-xs-4"></div>
          <div class="col-xs-4">
          <label for="stream" id="streamselection"><h3>Stream</h3></label>
            <div class="form-group has-success">
              <div class="dropdown">
              <?php echo form_dropdown('stream',$stream,'choose',array(
               'style'=>'display:none',
               'class'=>'form-control',
               'id'=>'stream'
               ));?>
               </div>
             </div>
           </div>
         </div>
    <!--selecting subjects-->
  <div>
      <div class="col-xs-4"></div><div class="col-xs-4"></div>
      <div class="col-xs-4">
        <div data-toggle="modal" data-target="#how"><a class="w3-btn-floating w3-hover-dark-grey w3-display-right" class="close" data-dismiss="modal">&#10095;</a></div>
      </div>
  </div>

        <div class="row">
          <div class="col-xs-4"></div>
          <div class="col-xs-4">
            <label for="subjectselection"><h3>Subject</h3></label>
             <div class="form-group has-success">
              <?php echo form_dropdown('subject',$options,'English',array(
              'class'=>'form-control',
              'id'=>'subjectselection'
              ));?>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>     
<!-- what modal ends here-->
<div id="how" class="modal fade" role="dialogue">
    <div class="modal-dialogue">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">Close</button>
          <h4 class="modal-title">How do you wish to study ?</h4>
        </div>
        <div class="modal-body">
        <!-- selecting category-->
            <?php $categoryoptions= array(
             'Online'=>'Online',
             'Group'=>'Group',
             'Individual'=>'Individual',
             'Coaching'=>'Coaching'
            );?>
          <div class="row">
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
              <label for="categorymeny"><h3>Choose one category</h3></label>
            </div>
          </div>
          <div class="row">
             <div data-toggle="modal" data-target="#what"><a class="w3-btn-floating w3-hover-dark-grey w3-display-left" class="close" data-dismiss="modal">&#10094;</a></div>
             <div class="col-xs-4"></div><div class="col-xs-4"></div>
             <div class="col-xs-4">
                <div data-toggle="modal" data-target="#where"><a class="w3-btn-floating w3-hover-dark-grey w3-display-right" class="close" data-dismiss="modal">&#10095;</a></div>
             </div>
          </div>
          <div class="row">
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
              <div class="form-group has-success">
                <?php echo form_dropdown('category',$categoryoptions,'Group',array(
                'class'=>'form-control',
                'id'=>'categorymenu'
                ));?>
              </div>
            </div>
          </div>

      </div>
    </div>
  </div>
</div>
<!--how modal ends here-->
<div id="where" class="modal fade" role="dialogue">
    <div class="modal-dialogue">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">Close</button>
          <h4 class="modal-title">Choose your locality</h4>
        </div>
        <div class="modal-body">
        <!-- selecting location-->
            <?php $locationoptions= array(
             'Greater Kailash 2'=>'Greater Kailash 2',
             'Chittaranjan Park'=>'Chittaranjan Park',
             'Kalkaji'=>'Kalkaji',
             'Govind Puri'=>'Govind Puri',
             'Alaknanda'=>'Alaknanda'
            );?>
          <div class="row">
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
             <label for="locationmenu"><h3>Choose your location :</h3></label>
            </div>
          </div>

          <div class="row">
            <div data-toggle="modal" data-target="#how"><a class="w3-btn-floating w3-hover-dark-grey w3-display-left" class="close" data-dismiss="modal">&#10094;</a></div>
            <div class="col-xs-4"></div><div class="col-xs-4"></div>
            <div class="col-xs-4">
              <div data-toggle="modal" data-target="#when"><a class="w3-btn-floating w3-hover-dark-grey w3-display-right" class="close" data-dismiss="modal">&#10095;</a></div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
              <div class="form-group has-success">
                <?php echo form_dropdown('location',$locationoptions,'CR-PARK',array(
                'class'=>'form-control',
                'id'=>'locationmenu'
                ));?>
              </div>
            </div>
          </div>

      </div>
    </div>
  </div>
</div>
<!--where model ends here-->
<div id="when" class="modal fade" role="dialogue">
    <div class="modal-dialogue">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">Close</button>
          <h4 class="modal-title">When do you wish to study ?</h4>
        </div>
          <div class="modal-body">
          <!--selecting days-->
            <div class="row">
              <div class="col-xs-4"></div>
              <div class="col-xs-4">
                <h3>Choose Days:</h3>
              </div>
            </div>

          <div class="row">
            <label for="chooseday"><h3>Monday</h3></label>
              <?php echo form_checkbox('dayselection[]','Monday',FALSE,array(
              'class'=>'form_control',
              'id'=>'chooseday'
              )); ?>
            <label id="days" for="chooseday"><h3>Tuesday</h3></label>
              <?php echo form_checkbox('dayselection[]','Tuesday',FALSE,array(
              'class'=>'form_control',
              'id'=>'chooseday'
              )); ?>
            <label id="days" for="chooseday"><h3>Wednesday</h3></label>
              <?php echo form_checkbox('dayselection[]','Wednesday',FALSE,array(
              'class'=>'form_control',
              'id'=>'chooseday'
              )); ?>
            <label id="days" for="chooseday"><h3>Thursday</h3></label>
              <?php echo form_checkbox('dayselection[]','Thursday',FALSE,array(
              'class'=>'form_control',
              'id'=>'chooseday'
              )); ?>
            <label id="days" for="chooseday"><h3>Friday</h3></label>
              <?php echo form_checkbox('dayselection[]','Friday',FALSE,array(
              'class'=>'form_control',
              'id'=>'chooseday'
              )); ?>
            <label id="days" for="chooseday"><h3>Saturday</h3></label>
              <?php echo form_checkbox('dayselection[]','Saturday',FALSE,array(
              'class'=>'form_control',
              'id'=>'chooseday'
              )); ?>
            <label id="days" for="chooseday"><h3>Sunday</h3></label>
              <?php echo form_checkbox('dayselection[]','Sunday',FALSE,array(
              'class'=>'form_control',
              'id'=>'chooseday'
              )); ?>
          </div>
          <!-- selecting timing-->
            <?php $timinoptions=array(
            '1-3'=>'1PM to 3PM',
            '3-5'=>'3PM to 5PM',
            '2-4'=>'2PM to 4PM',
            '4-6'=>'4PM to 6PM',
            '5-7'=>'5PM to 7PM',
            '6-8'=>'6PM to 8PM',
            '7-9'=>'7PM to 9PM',
            'anyTime'=>'Any time on the selected day(s)'
            );?>

          <div class="row">
           <div data-toggle="modal" data-target="#where"><a class="w3-btn-floating w3-hover-dark-grey w3-display-left" class="close" data-dismiss="modal">&#10094;</a></div>
          </div>
          
          <div class="row">
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
              <label for="timeselection"><h3>Choose Time:</h3></label>
              <div class="form-group has-success">
                <?php echo form_dropdown('timings',$timinoptions,'4-6',array(
                'class'=>'form-control',
                'id'=>'timeselection'
                ));?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
              <?php echo form_open('home/submit');?>
              <button class="time-go" type="submit" name="subm" id="submitbut">Go</button>
            </div>
          </div>

      </div>
    </div>
  </div>
</div>
<!--when model ends here -->