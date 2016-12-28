var options;
  $(document).ready(function(){
    $("#grade").change(function(){
      
         if(document.getElementById("grade").value === '11' || document.getElementById("grade").value === '12')
         {
          $("[name='stream']").show();
          $("#streamselection").show();
          $("[name='stream']").change(function(){
           if(document.getElementsByName("stream")[0].value==='Science')
           {
                options = {
                    "Physics":"Physics",
                    "Chemistry" : "Chemistry",
                    "Biology":"Biology",
                    "Maths":"Maths",
                    "English":"English"
                              };
           }
           else if(document.getElementsByName("stream")[0].value==='Commerce')
           {
                options = {
                  "Bussiness Studies":"Bussiness Studies",
                  "Accounts":"Accounts",
                  "Economics":"Economics",
                  "Maths":"Maths",
                  "English":"English"
                          };
            }
          else if(document.getElementsByName("stream")[0].value==='Humanities')
          {
              options = {
                "Legal Studies":"Legal Studies",
                "Political Science":"Political Science",
                "History":"History",
                "Psycology":"Psycology"
                      };
          }

          else
          {
              options = {
                 "English":"English",
                 "Hindi":"Hindi",
                 "Science":"Science",
                 "Maths":"Maths",
                 "SST":"SST"
              }
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
          $("[name='stream']").hide();
          $("#streamselection").hide();

           options = {
                 "English":"English",
                 "Hindi":"Hindi",
                 "Science":"Science",
                 "Maths":"Maths",
                 "SST":"SST"
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
         }

    });
    //modal js ends here
    $("[href='#tab-5']").click(function(){
     document.getElementById('myform').submit();
    });
  });


var cw = $('.subject-img').width();
$('.subject-img').css({
    'height': cw + 'px'
});

$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

