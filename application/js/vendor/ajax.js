(function($) {
  
    $.fn.message = function(message) {
      return message;
    }

    $.fn.getPath = function(path) {
      
      if(path == "default"){path = "http://www.ramonafundinginc.com/foundation/ajax/"}
      return path;
    }

    $.fn.moduleExtension = function() {
      
      var fullURL = document.URL;
      var fullURLtoArray = fullURL.split('/');
      return fullURLtoArray[1];
    }

    $.fn.sendAjax = function(dataObj,path,outputData) {
      
      return $.ajax({  
        type: "POST",
        dataType: 'json',
        url: path , 
        data: (dataObj), 
        cache: false,
        async: false,
        success: function(data) {  
          return data;
        }  
      });

    }

    $.fn.ajaxObject = function(dataObj,pathType,outputData) {
      
      var path = $(this).getPath(pathType);
      var output = outputData;
      var ajaxCallee = $(this).sendAjax(dataObj,path,outputData);

      return ajaxCallee;


    }

}(jQuery));










 

