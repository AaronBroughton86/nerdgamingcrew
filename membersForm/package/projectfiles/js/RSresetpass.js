/* Script for Members System v4 */
/* Author Steve Riches - RichoSoft Squared - (C) 2018 - All Rights Reserved */
/* www.richosoft2.co.uk */
function resetPass(){
if (document.getElementById('userid').value =='' || document.getElementById('userid').value == null) {
parent.swal({title: "Missing Input!",text: "Please enter your User ID.",type: "error"},function(){setTimeout(function(){document.getElementById('userid').focus();},100);});
return false;
};
swal({
  title: "Please wait.. ",
  text: "This may take a few seconds! Please wait for a confirmation message!",
  showConfirmButton: false
});
           $.ajax({			
				dataType: "jsonp",
				timeout: 10000,
				url: 'utils/forgotpassword.php?jsoncall=?',
				type: "POST",
                data: {
                userid: document.getElementById("userid").value, process: "forgotpass"
                },              
                success:function (data) {
					var data2=data.response;
                    if (data2 == "2")
                    {
						document.getElementById("userid").value="";
						swal({title: "Success!",text: "Information on resetting your password has been sent to your registered email address!",  type: "success"});
                    }
					else if (data2 == "8")
					{
						document.getElementById("userid").value="";
					swal({title: "An error has occurred!",text: "Please try again!",  type: "error"});
					}
					else if (data2 == "7")
					{
						document.getElementById("userid").value="";
					swal({title: "Details entered do not match any on file!",text: "Please try again!",  type: "error"});
					}
                    else
                    {
						document.getElementById("userid").value="";
					swal({title: "Error!",text: "An un-documented error has occurred, please try again.",  type: "error"});
                    }
                }
            }); 
}