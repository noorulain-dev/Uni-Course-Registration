var gErrorMsg = "";

function checkname(){
	
	var name = document.getElementById("name").value;
	var pattern =  /[a-zA-Z]+$/;; //name can only contain letters and spaces
	var nameOK = false;
	
	
	if ((!name=="") && (name.length<=25) && pattern.test(name)){
		nameOK = true;
	}
	
	else{
		if (name==""){
				gErrorMsg += "Name cannot be empty\n"
		}
		
		else if (!pattern.test(name)){
			gErrorMsg += "Name must only contain alphabetical characters\n"
		}
		
		else if (name.length>25){
			gErrorMsg += "FName must be 25 characters or less\n"
		}
	}
	return nameOK;
}

//function to check validity of email
function checkEmail(){
	
	var email = document.getElementById("email").value;
	pattern = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9]+\.[a-zA-Z0-9.-]{1,4}$/;
	var emailOK = false;
	
	
	if ((!email == "") && (pattern.test(email))){
		emailOK = true;
	}
	
	else{
		if (email == ""){
			gErrorMsg += "Email cannot be empty\n"
		}
		
		else if (!pattern.test(email)){
			gErrorMsg += "Please enter a valid email address (Must contain '@' and '.')\n"
		}
	}
	return emailOK;
}

	
function checkUnit() {
var unit = document.getElementsByName("unit");
var unitOK = false;
if(unit[0].checked || unit[1].checked || unit[2].checked) {
unitOK = true;
} 
else {
gErrorMsg += "A unit must be selected\n"
}
return unitOK;
}

function unitSelect(){
var unit = document.getElementsByName("unit");
if (unit[0].checked){ 
unit = unit[0].value;
}
else if (unit[1].checked){ 
unit = unit[1].value;
}
else if (unit[2].checked){ 
unit = unit[2].value;
}
return unit;
}
   
function tutorSelect() {
	var a = document.getElementById("tutor");
    var tutor = a.options[a.selectedIndex].text;
	document.getElementById("tutor").innerHTML = tutor;
return tutor;
}

function checkTutor() {
	TutorOK = false;
	if (!(tutor = "")) {
	gErrorMsg += "A tutor must be selected\n"
	TutorOK=true;
	}
return TutorOK;
}
	
	
function issueSelect() {
var issues = [].filter.call(document.getElementsByName('issue[]'), function(a) {
    return a.checked;
  }).map(function(a) {
    return a.value;
  });
  issue = String(issues);
return issue;
}

function checkIssue(){
	var IssueOK = false;
	
	var issue1 = document.getElementById("html");
	var issue2 = document.getElementById("css");
	var issue3 = document.getElementById("javascript");
	var issue4 = document.getElementById("php");
	var issue5 = document.getElementById("mysql");
	
	if (issue1.checked || issue2.checked || issue3.checked || issue4.checked || issue5.checked) {
		IssueOK = true;
	}
	
	else{
		gErrorMsg = gErrorMsg + "Please select an issue\n"
	}
	
	return IssueOK;
}

function checkDescr(){
	var descrOK = false;
	
	var descr = document.getElementById("descr").value;
	
	if (descr == ""){
		gErrorMsg = gErrorMsg + "Description cannot be left empty\n"
	}
	
	else{
		descrOK = true;
	}
	return descrOK;
}

function checkDate(){
	var dateOK = false;
	
	var date = document.getElementById("date").value;
	
	if (date == ""){
		gErrorMsg = gErrorMsg + "Date cannot be left empty\n"
	}
	
	else{
		dateOK = true;
	}
	return dateOK;
}

function checkTime(){
	var timeOK = false;
	
	var time = document.getElementById("time").value;
	
	if (time == ""){
		gErrorMsg = gErrorMsg + "Time cannot be left empty\n"
	}
	
	else{
		timeOK = true;
	}
	return timeOK;
}


function storeBooking(firstname,email,birth,unit,tutor,issue,description,date,time){
	//get values from the parameters above and    store them as sessionStorage attribute.
	//we use the same name for the attribute and the element id to avoid confusion 
	sessionStorage.firstname = firstname;       
	sessionStorage.email = email; 
	sessionStorage.birth = birth;
	sessionStorage.unit = unit;
	sessionStorage.tutor = tutor;
	sessionStorage.issue = issue;
	sessionStorage.description = description;
	sessionStorage.date = date;
	sessionStorage.time = time;
	//added for testing
	alert("Firstname stored: " + sessionStorage.firstname);
	alert("Email stored: " + sessionStorage.email);
	alert("Date of Birth stored: " + sessionStorage.birth);
	alert("Unit stored: " + sessionStorage.unit);
	alert("Tutor stored: " + sessionStorage.tutor);
	alert("Issue stored: " + sessionStorage.issue);
	alert("Description stored: " + sessionStorage.description);
	alert("Date stored: " + sessionStorage.date);
	alert("Time stored: " + sessionStorage.time);
	}

function validateForm(){
	"use strict";
	//directive to ensure variables are declared
	var isAllOK=false; 
	
	var firstname = document.getElementById("name").value; 
	var email = document.getElementById("email").value;
	var day = document.getElementById("day").value;
	var month = document.getElementById("month").value;
	var year = document.getElementById("year").value;
	var birth = day + "-" + month + "-" + year;
	var unit = unitSelect();
	var tutor = tutorSelect();
	var issue = issueSelect();
	var description = document.getElementById("descr").value;
	var date = document.getElementById("date").value;
	var time = document.getElementById("time").value;
	
	var nameValid = checkname();
	var EmailValid = checkEmail();
	var UnitValid = checkUnit();
	var TutorValid = checkTutor();
	var IssueValid = checkIssue();
	var DescrValid = checkDescr();
	var DateValid = checkDate();
	var TimeValid = checkTime();
	
	if (nameValid && EmailValid && UnitValid && TutorValid && IssueValid && DescrValid && DateValid && TimeValid) {
		isAllOK=true;
	storeBooking(firstname,email,birth,unit,tutor,issue,description,date,time)
	} else {
		alert(gErrorMsg);
		gErrorMsg = "";
		isAllOK = false;
	}
			return isAllOK;
}		



		
	
