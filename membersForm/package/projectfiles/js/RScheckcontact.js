/* Script for Members System v4 */
/* Author Steve Riches - RichoSoft Squared - (C) 2018 - All Rights Reserved */
/* www.richosoft2.co.uk */

function checkContactForm(){
var ffield="";
ffield = "yourname";
if (document.getElementById(ffield).value=='' || document.getElementById(ffield).value===null) {
document.getElementById(ffield).focus();
swal({title: "Missing Input!",text: "Please enter Your Name.",  type: "error"});
return false;
}
ffield = "youremail";
if (document.getElementById(ffield).value=='' || document.getElementById(ffield).value===null) {
document.getElementById(ffield).focus();
swal({title: "Missing Input!",text: "Please enter Your Email.",  type: "error"});
return false;
}
if (!RSValidateEmail(document.getElementById(ffield).value)) {
document.getElementById(ffield).focus();
swal({title: "Invalid Input!",text: "Please enter a valid Email.",  type: "error"});
return false;
}
ffield = "subject";
if (document.getElementById(ffield).value=='' || document.getElementById(ffield).value===null) {
document.getElementById(ffield).focus();
swal({title: "Missing Input!",text: "Please enter a Subject.",  type: "error"});
return false;
}
ffield = "message";
if (document.getElementById(ffield).value=='' || document.getElementById(ffield).value===null) {
document.getElementById(ffield).focus();
swal({title: "Missing Input!",text: "Please enter Your Message.",  type: "error"});
return false;
}
ffield = "checkterms";
if (document.getElementById(ffield).checked==false) {
document.getElementById(ffield).focus();
swal({title: "Terms not Accepted!",text: "Please accept the Terms and Privacy Policy.",  type: "error"});
return false;
}
swal({title: "Please Wait!",text: "This make take a few seconds.",  showConfirmButton: false});
document.getElementById("frmContact").submit();
return true;
}
