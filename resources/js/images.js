$(document).ready(function (e) {
	$("#uploadForm").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "http://localhost/empms/views/imageUpload/upload.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
                //alert(data);
            $("#targetLayer").html(data);
            $img = $("#img").attr("src");
            $("#proPic").val($img);

            $("#img").attr("src","../../resources/"+$img);
            
            //alert($img);
		    },
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});

