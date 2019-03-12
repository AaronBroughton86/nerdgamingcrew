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
function updateField(thename,thevalue,ID){
if(thename=="email" && !RSValidateEmail(thevalue)) {
document.getElementById(thename).focus();
swal({title: "Invalid Input!",text: "Please enter a valid Email.",  type: "error"});
return false;
}
if(thename=='email' && (thevalue =='' || thevalue === null)) {
parent.swal({title: "Missing Input!",text: "You have not entered the Members Email.",type: "error"},function(){setTimeout(function(){document.getElementById(thename).focus();},100);});
return false;
};
if(thename=='country' && (thevalue =='' || thevalue === null)) {
parent.swal({title: "Missing Input!",text: "You have not entered the Members Country.",type: "error"},function(){setTimeout(function(){document.getElementById(thename).focus();},100);});
return false;
};
if(thename=='status' && (thevalue =='' || thevalue === null)) {
parent.swal({title: "Missing Input!",text: "You have not selected an Account Status.",type: "error"},function(){setTimeout(function(){document.getElementById(thename).focus();},100);});
return false;
};
if(thename=="website" && thevalue!="" && thevalue!==null && !ValidURL(thevalue)){
parent.swal({title: "Invalid URL!",text: "Please enter a Valid Web Site URL.",type: "error"},function(){setTimeout(function(){document.getElementById(thename).focus();},100);});
return false;
};
if(thename=="facebookpage" && thevalue!="" && thevalue!==null && !ValidURL(thevalue)){
parent.swal({title: "Invalid URL!",text: "Please enter a Valid Facebook Page URL.",type: "error"},function(){setTimeout(function(){document.getElementById(thename).focus();},100);});
return false;
};
           $.ajax({			
				dataType: "jsonp",
				timeout: 5000,
				url: 'utils/updatemember.php?jsoncall=?',
				type: "POST",
                data: {
                thename: thename, thevalue: thevalue, id: ID, process: "updatefield"
                },              
                success:function (data) {
					var data2=data.response;
                    if (data2 == "2")
                    {
					document.getElementById("statusarea_" + ID).innerHTML='<p style="color:#ff0000;">' + thevalue + ' in Record Updated!</p>';
					setTimeout(function(){ document.getElementById("statusarea_" + ID).innerHTML='<p style="color:#ff0000;"></p>'; }, 3000);
                    }
					else if (data2 == "8")
					{
					parent.swal({title: "An error has occurred!",text: "Data " + thevalue + " NOT updated, please try again!",  type: "error"});
					}
					else if (data2 == "7")
					{
					parent.swal({title: "An error has occurred!",text: "Data " + thevalue + " NOT updated, please try again!",  type: "error"});
					}
                    else
                    {
					parent.swal({title: "Error!",text: "An un-documented error has occurred, please try again.",  type: "error"});
                    }
                }
            }); 
}