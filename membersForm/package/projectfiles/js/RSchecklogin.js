/* Script for Members System v4 */
/* Author Steve Riches - RichoSoft Squared - (C) 2018 - All Rights Reserved */
/* www.richosoft2.co.uk */
function checkLogin(){
if(document.getElementById("userid").value=="" || document.getElementById("userid").value===null){
	document.getElementById("userid").focus();
	swal({title: "Missing Entry!",text: "You must enter a User ID.",  type: "error"});
	return false;
}
if(document.getElementById("password").value=="" || document.getElementById("password").value===null){
	document.getElementById("password").focus();
	swal({title: "Missing Entry!",text: "You must enter a Password.",  type: "error"});
	return false;
}
            $.ajax({			
				dataType: "jsonp",
				timeout: 5000,
				url: 'utils/checklogin.php?jsoncall=?',
				type: "POST",
                data: {
                userid: document.getElementById("userid").value, password: document.getElementById("password").value, process: "login"
                },              
                success:function (data) {
					var data2=data.response;
                    if (data2 == "2")
                    {
					location.href="members-home.php";
                    }
					else if (data2 == "8")
					{
					document.getElementById("userid").value="";
					document.getElementById("password").value="";
					swal({title: "Incorrect Details!",text: "The User ID and password Combination do not match any in our system, please try again!",  type: "error"});
					}
                    else
                    {
					document.getElementById("userid").value="";
					document.getElementById("password").value="";
					swal({title: "Error!",text: "An un-documented error has occurred, please try again.",  type: "error"});
                    }
                }
            }); 
}	
