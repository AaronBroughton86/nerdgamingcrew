/* Script for Members System v4 */
/* Author Steve Riches - RichoSoft Squared - (C) 2018 - All Rights Reserved */
/* www.richosoft2.co.uk */
function ValidURL(str) {
  var pattern = new RegExp(/^(https?:\/\/)?((([a-z\d]([a-z\d-]*[a-z\d])*)\.)+[a-z]{2,}|((\d{1,3}\.){3}\d{1,3}))(\:\d+)?(\/[-a-z\d%_.~+]*)*(\?[;&a-z\d%_.~+=-]*)?(\#[-a-z\d_]*)?$/i);   if(!pattern.test(str)) {
    return false;
  } else {
    return true;
  }
}
function strip_tags (input, allowed) { 
  allowed = (((allowed || '') + '').toLowerCase().match(/<[a-z][a-z0-9]*>/g) || []).join('')

  var tags = /<\/?([a-z][a-z0-9]*)\b[^>]*>/gi
  var commentsAndPhpTags = /<!--[\s\S]*?-->|<\?(?:php)?[\s\S]*?\?>/gi

  return input.replace(commentsAndPhpTags, '').replace(tags, function ($0, $1) {
    return allowed.indexOf('<' + $1.toLowerCase() + '>') > -1 ? $0 : ''
  })
}
function checkCreate(){
var ffield="";
ffield = "fname";
if (document.getElementById(ffield).value=='' || document.getElementById(ffield).value===null) {
document.getElementById(ffield).focus();
swal({title: "Missing Input!",text: "Please enter your name.",  type: "error"});
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
ffield = "website";
if(ValidURL(document.getElementById(ffield).value)==false && (document.getElementById(ffield).value!==null && document.getElementById(ffield).value!="")){
document.getElementById(ffield).focus();
swal({title: "Invalid Input!",text: "Please enter a Valid Web Site URL.",  type: "error"});
return false;
}
ffield = "facebookpage";
if(ValidURL(document.getElementById(ffield).value)==false && (document.getElementById(ffield).value!==null && document.getElementById(ffield).value!="")){
document.getElementById(ffield).focus();
swal({title: "Invalid Input!",text: "Please enter a Valid Facebook URL.",  type: "error"});
return false;
}
ffield = "country";
if (document.getElementById(ffield).value=='' || document.getElementById(ffield).value===null) {
document.getElementById(ffield).focus();
swal({title: "Missing Input!",text: "Please Select your Country.",  type: "error"});
return false;
}
ffield = "userid";
if (document.getElementById(ffield).value=='' || document.getElementById(ffield).value===null) {
document.getElementById(ffield).focus();
swal({title: "Missing Input!",text: "Please choose a User ID.",  type: "error"});
return false;
}
ffield = "password";
if (document.getElementById(ffield).value=='' || document.getElementById(ffield).value===null) {
document.getElementById(ffield).focus();
swal({title: "Missing Input!",text: "Please choose a password.",  type: "error"});
return false;
}
ffield = "checkterms";
if(document.getElementById(ffield).checked==false){
document.getElementById(ffield).focus();
swal({title: "Not Confirmed!",text: "Please accept the Terms and Conditions.",  type: "error"});
return false;
}
document.getElementById("frmCreateAccount").submit();
return true;
}
function checkid(theid){
	if(theid=="" || theid===null){
					swal({title: "Error!",text: "You must enter a User ID.",  type: "error"});
					return false;
	}
		
            $.ajax({			
				dataType: "jsonp",
				timeout: 5000,
				url: 'utils/checkuserid.php?jsoncall=?',
				type: "POST",
                data: {
                theid: theid, checkid: "checkid"
                },              
                success:function (data) {
					var data2=data.response;
                    if (data2 == "2")
                    {
					
                    }
					else if (data2 == "9")
					{
						document.getElementById("userid").value="";
					swal({title: "Sorry!",text: "That User ID (" + theid + ") is already in use, please try again with a different ID.",  type: "error"});
					}
                    else
                    {
						document.getElementById("userid").value="";
					swal({title: "Error!",text: "An un-documented error has occurred, please try again.",  type: "error"});
                    }
                }
            });   

}