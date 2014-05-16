(function($) {
  
    $.fn.validation_ERROR = function(ERROR_obj,output) {
      console.log(ERROR_obj);

      jQuery.each( ERROR_obj, function( i, val ) {
        $('<div data-alert="" class="alert-box"></div>').html(val+'<a href="#" class="close">&times;</a>').appendTo(output);
      });

      $(document).foundation();
    }

    $.fn.validateEmail = function(email) {
      var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    }

    $.fn.validate = function(elementsObj) {
       
       
       var count = elementsObj.find('.required');
       var CurrentElement;
       var warningMessageOutputs = [
                                       " field is empty", 
                                       " Incomplete email address", 
                                       " element has no value ", 
                                       " element has no value ", 
                                       " checked ",
                                       " is empty" 
                                    ];
       var ERROR = [];

       for(var e = 0; e < count.length; e++){
        if(count[e].type == "text"){
          if(count[e].value ==""){
            CurrentElement_NAME = count[e].id;
            CurrentElement_WARNING = warningMessageOutputs[0];
            ERROR.push([CurrentElement_NAME, CurrentElement_WARNING]);
            
          }
        }if(count[e].type == "email"){
          if(count[e].value =="" || $(this).validateEmail(count[e].value) == false){
            CurrentElement_NAME = count[e].id;
            CurrentElement_WARNING = warningMessageOutputs[1];
            ERROR.push([CurrentElement_NAME, CurrentElement_WARNING]);

          }else{
            var test = $(this).validateEmail(count[e].value);

            if(test == "false"){
              ERROR.push([CurrentElement_NAME, CurrentElement_WARNING]);
            }
          
          }
        }if(count[e].type == "password"){
          if(count[e].value ==""){
            CurrentElement_NAME = count[e].id;
            CurrentElement_WARNING = warningMessageOutputs[2];
            ERROR.push([CurrentElement_NAME, CurrentElement_WARNING]);

          }
        }else if(count[e].tagName == "SELECT"){
          if(count[e].options[count[e].selectedIndex].value ==""){
            CurrentElement_NAME = count[e].id;
            CurrentElement_WARNING = warningMessageOutputs[3];
            ERROR.push([CurrentElement_NAME, CurrentElement_WARNING]);

          }
        }else if(count[e].tagName == "TEXTAREA"){
          if(count[e].value ==""){
            CurrentElement_NAME = count[e].id;
            CurrentElement_WARNING = warningMessageOutputs[5];
            ERROR.push([CurrentElement_NAME, CurrentElement_WARNING]);
            
          }
        }else if(count[e].type == "checkbox"){
          if(count[e].checked){
            
          }else{
            CurrentElement_NAME = count[e].id;
            CurrentElement_WARNING = warningMessageOutputs[4];
            ERROR.push([CurrentElement_NAME, CurrentElement_WARNING+ CurrentElement_NAME]);
          }
      }
      
    }

       return ERROR;
    }

}(jQuery));










 

