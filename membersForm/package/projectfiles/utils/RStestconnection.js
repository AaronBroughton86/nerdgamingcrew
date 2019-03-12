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
function testConnection(){
var ffield="";
ffield = "siteurl";
if (document.getElementById(ffield).value=='' || document.getElementById(ffield).value===null) {
document.getElementById(ffield).focus();
swal({title: "Missing Input!",text: "Please enter the Site URL.",  type: "error"});
return false;
}
if (!ValidURL(document.getElementById(ffield).value)) {
document.getElementById(ffield).focus();
swal({title: "Input Error!",text: "Please enter a Valid Site URL.",  type: "error"});
return false;
}
ffield = "sitename";
if (document.getElementById(ffield).value=='' || document.getElementById(ffield).value===null) {
document.getElementById(ffield).focus();
swal({title: "Missing Input!",text: "Please enter the Site Name.",  type: "error"});
return false;
}
ffield = "siteemail";
if (document.getElementById(ffield).value=='' || document.getElementById(ffield).value===null) {
document.getElementById(ffield).focus();
swal({title: "Missing Input!",text: "Please enter the Site email.",  type: "error"});
return false;
}
if (!RSValidateEmail(document.getElementById(ffield).value)) {
document.getElementById(ffield).focus();
swal({title: "Invalid Input!",text: "Please enter a valid Site email.",  type: "error"});
return false;
}
ffield = "dblocation";
if (document.getElementById(ffield).value=='' || document.getElementById(ffield).value===null) {
document.getElementById(ffield).focus();
swal({title: "Invalid Input!",text: "Please enter the Site Location.",  type: "error"});
return false;
}
ffield = "dbname";
if (document.getElementById(ffield).value=='' || document.getElementById(ffield).value===null) {
document.getElementById(ffield).focus();
swal({title: "Missing Input!",text: "Please enter the Database Name.",  type: "error"});
return false;
}
ffield = "dbusername";
if (document.getElementById(ffield).value=='' || document.getElementById(ffield).value===null) {
document.getElementById(ffield).focus();
swal({title: "Missing Input!",text: "Please enter the Database User Name.",  type: "error"});
return false;
}
ffield = "dbpass";
if (document.getElementById(ffield).value=='' || document.getElementById(ffield).value===null) {
document.getElementById(ffield).focus();
swal({title: "Missing Input!",text: "Please enter the Database User Password.",  type: "error"});
return false;
}
swal({title: "Please Wait!",text: "This make take a few seconds.",  showConfirmButton: false});
		
            $.ajax({			
				dataType: "jsonp",
				timeout: 5000,
				url: 'utils/testconnection.php?jsoncall=?',
				type: "POST",
                data: {
                dblocation: document.getElementById('dblocation').value, dbname: document.getElementById('dbname').value, dbusername: document.getElementById('dbusername').value, dbpass: document.getElementById('dbpass').value, process: "testconnection"
                },              
                success:function (data) {
					var data2=data.response;
					var data3=data.reserr;
                    if (data2 == "2")
                    {
						document.getElementById("subsettings").style.visibility="visible";
					swal({title: "Success!",text: "Database Connected OK! and database Name appears to be OK too!.",type: "success"});
					}
					else if (data2 == "6")
					{
						document.getElementById("subsettings").style.visibility="hidden";
					swal({title: "Error!",text: "Database Connection Failed! - Test Failed! (" + data3 + ")",  type: "error"});
					}
					else if (data2 == "7")
					{
						document.getElementById("subsettings").style.visibility="hidden";
					swal({title: "Error!",text: "Database Connected OK! but User Priveleges appear to be insufficient - Test Failed! (" + data3 + ")",  type: "error"});
					}
                    else
                    {
						document.getElementById("subsettings").style.visibility="hidden";
					swal({title: "Error!",text: "An un-documented error has occurred, please try again. (" + data3 + ")",  type: "error"});
                    }
                }
            });   

}
function checkSubmit(){
var ffield="";
ffield = "siteurl";
if (document.getElementById(ffield).value=='' || document.getElementById(ffield).value===null) {
document.getElementById(ffield).focus();
swal({title: "Missing Input!",text: "Please enter the Site URL.",  type: "error"});
return false;
}
if (!ValidURL(document.getElementById(ffield).value)) {
document.getElementById(ffield).focus();
swal({title: "Input Error!",text: "Please enter a Valid Site URL.",  type: "error"});
return false;
}
ffield = "sitename";
if (document.getElementById(ffield).value=='' || document.getElementById(ffield).value===null) {
document.getElementById(ffield).focus();
swal({title: "Missing Input!",text: "Please enter the Site Name.",  type: "error"});
return false;
}
ffield = "siteemail";
if (document.getElementById(ffield).value=='' || document.getElementById(ffield).value===null) {
document.getElementById(ffield).focus();
swal({title: "Missing Input!",text: "Please enter the Site email.",  type: "error"});
return false;
}
if (!RSValidateEmail(document.getElementById(ffield).value)) {
document.getElementById(ffield).focus();
swal({title: "Invalid Input!",text: "Please enter a valid Site email.",  type: "error"});
return false;
}
ffield = "dblocation";
if (document.getElementById(ffield).value=='' || document.getElementById(ffield).value===null) {
document.getElementById(ffield).focus();
swal({title: "Invalid Input!",text: "Please enter the Site Location.",  type: "error"});
return false;
}
ffield = "dbname";
if (document.getElementById(ffield).value=='' || document.getElementById(ffield).value===null) {
document.getElementById(ffield).focus();
swal({title: "Missing Input!",text: "Please enter the Database Name.",  type: "error"});
return false;
}
ffield = "dbusername";
if (document.getElementById(ffield).value=='' || document.getElementById(ffield).value===null) {
document.getElementById(ffield).focus();
swal({title: "Missing Input!",text: "Please enter the Database User Name.",  type: "error"});
return false;
}
ffield = "dbpass";
if (document.getElementById(ffield).value=='' || document.getElementById(ffield).value===null) {
document.getElementById(ffield).focus();
swal({title: "Missing Input!",text: "Please enter the Database User Password.",  type: "error"});
return false;
}
document.getElementById("frmSetup2").submit();
return true;
}