/* Script for Members System v4 */
/* Author Steve Riches - RichoSoft Squared - (C) 2018 - All Rights Reserved */
/* www.richosoft2.co.uk */
function uploadFile(){
	var form = $('form')[1]; 
	var formData = new FormData(form);
		$.ajax({
			dataType: "jsonp",
			timeout: 10000,
        	url: "utils/ajaxupload.php?jsoncall=?",
			type: "POST",
			data: formData,
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
				var data2=data.response;
				if(data2==2)
				{
					document.getElementById("logoimg").src="utils/emaillogo/emaillogo.jpg?time=" + new Date();
				}
				else if(data2==8)
				{
				swal({title: "Invalid File!",text: "Only .jpg files allowed.",  type: "error"});
					$("form")[1].reset();	
				}
				else
				{
				swal({title: "Error!",text: "An undocumented error has occurred.",  type: "error"});
					$("form")[1].reset();	
				}
		    }
	   });
	};

