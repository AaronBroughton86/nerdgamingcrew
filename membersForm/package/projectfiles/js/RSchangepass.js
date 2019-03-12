/* Script for Members System v4 */
/* Author Steve Riches - RichoSoft Squared - (C) 2018 - All Rights Reserved */
/* www.richosoft2.co.uk */
function changePass(){
if (document.getElementById('oldpassword').value =='' || document.getElementById('oldpassword').value == null) {
parent.swal({title: "Missing Input!",text: "You have not entered the Current Password.",type: "error"},function(){setTimeout(function(){document.getElementById('oldpassword').focus();},100);});
return false;
};
if (document.getElementById('newpassword').value =='' || document.getElementById('newpassword').value == null) {
parent.swal({title: "Missing Input!",text: "You have not entered a New Password.",type: "error"},function(){setTimeout(function(){document.getElementById('newpassword').focus();},100);});
return false;
};
if (document.getElementById('newpassword2').value =='' || document.getElementById('newpassword2').value == null) {
parent.swal({title: "Missing Input!",text: "Please Repeat the New Password.",type: "error"},function(){setTimeout(function(){document.getElementById('newpassword2').focus();},100);});
return false;
};
if (document.getElementById('newpassword').value !== document.getElementById('newpassword2').value) {
parent.swal({title: "Error!",text: "The two passwords do NOT match.",type: "error"},function(){setTimeout(function(){document.getElementById('newpassword').focus();},100);});
return false;
};
           $.ajax({			
				dataType: "jsonp",
				timeout: 5000,
				url: 'utils/changepassword.php?jsoncall=?',
				type: "POST",
                data: {
                oldpassword: document.getElementById("oldpassword").value, newpassword: document.getElementById("newpassword").value, process: "changepass"
                },              
                success:function (data) {
					var data2=data.response;
                    if (data2 == "2")
                    {
						document.getElementById("oldpassword").value="";
						document.getElementById("newpassword").value="";
						document.getElementById("newpassword2").value="";
						document.getElementById("cbpassword").click();
					swal({title: "Success!",text: "Your password has been changed!",  type: "success"});
                    }
					else if (data2 == "8")
					{
						document.getElementById("oldpassword").value="";
						document.getElementById("newpassword").value="";
						document.getElementById("newpassword2").value="";
					swal({title: "An error has occurred!",text: "Password NOT changed, please try again!",  type: "error"});
					}
					else if (data2 == "7")
					{
						document.getElementById("oldpassword").value="";
						document.getElementById("newpassword").value="";
						document.getElementById("newpassword2").value="";
					swal({title: "Current password does not match the one on file!",text: "Password NOT changed, please try again!",  type: "error"});
					}
                    else
                    {
						document.getElementById("oldpassword").value="";
						document.getElementById("newpassword").value="";
						document.getElementById("newpassword2").value="";
					swal({title: "Error!",text: "An un-documented error has occurred, please try again.",  type: "error"});
                    }
                }
            }); 
}