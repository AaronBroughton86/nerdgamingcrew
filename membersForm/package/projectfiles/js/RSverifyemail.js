/* Script for Members System v4 */
/* Author Steve Riches - RichoSoft Squared - (C) 2018 - All Rights Reserved */
/* www.richosoft2.co.uk */
function verifyEmail(){
var ffield="";
ffield = "vcode";
if (document.getElementById(ffield).value=='' || document.getElementById(ffield).value===null) {
document.getElementById(ffield).focus();
swal({title: "Missing Input!",text: "Please enter your Verification Code.",  type: "error"});
return false;
}
ffield = "email";
if (document.getElementById(ffield).value=='' || document.getElementById(ffield).value===null) {
document.getElementById(ffield).focus();
swal({title: "Missing Input!",text: "Please enter your email.",  type: "error"});
return false;
}
if (!RSValidateEmail(document.getElementById(ffield).value)) {
document.getElementById(ffield).focus();
swal({title: "Invalid Input!",text: "Please enter a valid email.",  type: "error"});
return false;
}
		
            $.ajax({			
				dataType: "jsonp",
				timeout: 5000,
				url: 'utils/validate-email.php?jsoncall=?',
				type: "POST",
                data: {
                vcode: document.getElementById("vcode").value, email: document.getElementById("email").value, process: "verify"
                },              
                success:function (data) {
					var data2=data.response;
                    if (data2 == "2")
                    {
						document.getElementById("vcode").value="";
						document.getElementById("email").value="";
					swal({title: "Thank you!",text: "Your email address has been verified you can now log in to your members area.",  type: "success"});					
                    }
					else if (data2 == "9")
					{
						document.getElementById("vcode").value="";
						document.getElementById("email").value="";
					swal({title: "Sorry!",text: "The information you entered does not match any record in our system. - Please try again.",  type: "error"});
					}
                    else
                    {
						document.getElementById("vcode").value="";
						document.getElementById("email").value="";
					swal({title: "Error!",text: "An un-documented error has occurred, please try again.",  type: "error"});
                    }
                }
            });   

}