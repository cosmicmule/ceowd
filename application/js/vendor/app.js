(function($) {
  
    $.fn.dataCollection = function(formElements) {
       var elements = formElements.serializeArray();
       return elements;
    }

    $.fn.prepareMessageWarning = function() {
       if($('.warningOutputs').length == 0){
          $('form').before("<div class='warningOutputs'></div>");
        }else{
          $('.warningOutputs').empty();
        }
    }

     $.fn.message_SUCCESS = function(ERROR_obj,output) {
    
      jQuery.each( ERROR_obj, function( i, val ) {
        $('<div data-alert="" class="alert-box alert_box_success"></div>').html(val+'<a href="#" class="close">&times;</a>').appendTo(output);
      });

      $(document).foundation();
    }

    $.fn.textField_CLEANUP = function(obj) {
      
      var inputs = obj.find('input');
      var textarea = obj.find('textarea');
      
      for(var e=0; e < inputs.length;e++){
          inputs[e].value = "";
      }

      for(var l=0; l < textarea.length;l++){
          textarea[l].value = "";
      }

      return true;
    }

    $.fn.message_FAILED = function(ERROR_obj,output) {
      
      jQuery.each( ERROR_obj, function( i, val ) {
        $('<div data-alert="" class="alert-box alert_box_oops"></div>').html(val+'<a href="#" class="close">&times;</a>').appendTo(output);
      });

      $(document).foundation();
    }

}(jQuery));

// form submission handling
$(document).ready( function() {
    $('.lazy').laziestloader({threshold:100});
    $('.fancybox').fancybox();

    //console.log($('.lazy'));

    //var thumbnailContainer = $('.thumbnailContainer');
    var thumbnail_Library = $('*[data-thumb="thumbnail"]');
    thumbnail_Library.css("cursor","pointer");
    
    thumbnail_Library.click(function(event) {
      var swapImgContainer =  $(this).parent().parent().find('.thumbnailContainer');
      var swapImgContainerImg =  $(this).parent().parent().find('.thumbnailContainer img');
      var orgImg = $(this).attr('src');
      var newImgPath = orgImg.replace("thumb","full");
      swapImgContainer.css('height', (swapImgContainerImg.height()+4)+'px');
      console.log(swapImgContainerImg.height() + 4);

      swapImgContainerImg.hide()
      .attr('src', newImgPath) 
      .one("load", function() { //Set something to run when it finishes loading
          swapImgContainerImg.fadeIn(600); //Fade it in when loaded
        })
      .each(function() {
          //Cache fix for browsers that don't trigger .load()
          if(this.complete) $(this).trigger('load');
       });
    });
    
   

    $(document).on("submit",'form',function( event ) {
      

      var validation = $(this).validate($('form'));
      
      if(validation == 0 ){
      var dataSet =  $(this).dataCollection( $('form'));
      var ext =  "/message";
      var baseURL =  $(this).getPath('default')+ext;
      var dataReroute = $(this).parent();

        // send data to be
        /* var sendData = $(this).ajaxObject(dataSet,baseURL,dataReroute);
        var success = [];

        if(sendData.responseJSON == true){
          $(this).prepareMessageWarning();
            success.push( "We have recieved your message. We will get back to you as soon as possible." );
          $(this).message_SUCCESS(success,$('.warningOutputs'));
          
          var getElements = $("form");
          $(this).textField_CLEANUP($("form"));

        }else{
          $(this).prepareMessageWarning();
            success.push( "OOPS! We are having technical difficulties. Please try later. or call us at 888-869-8397" );
          $(this).message_FAILED(success,$('.warningOutputs'));

        }*/

      }else{
        event.preventDefault();
        $(this).prepareMessageWarning();
        $(this).validation_ERROR(validation,$('.warningOutputs'));
      
      }

});
// form submission handling
   

});

$(document).foundation({
  orbit: {
    animation: 'slide',
    slideNumber: true,
    timer_speed: 1000,
    pause_on_hover: false,
    animation_speed: 100,
    navigation_arrows: true,
    circular: true,
    swipe: true,
    bullets: false
  }
});


