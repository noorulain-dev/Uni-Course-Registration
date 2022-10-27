 "use strict";
 /*get variables from form and check rules*/
 function validate(){
	 var errMsg = "";
	 /* stores the error message */
	 var result =true;
	 /* assumes no errors */
	 if(result){        
	 alert("Booking Successfully");
	 }else{        
	 alert("Booking Failed");
	 }
	 return result;
	 //if false the information will not be sent to the server
	 }
	 function getBooking(){
		 //if sessionStorage for username is not empty
		 if(sessionStorage.firstname != undefined){
			 //confirmation text        
			 document.getElementById("confirm_name").textContent = sessionStorage.firstname;  	 
			 document.getElementById("confirm_email").textContent = sessionStorage.email;
			 document.getElementById("confirm_birth").textContent = sessionStorage.birth;
			 document.getElementById("confirm_unit").textContent = sessionStorage.unit;
			 document.getElementById("confirm_tutor").textContent = sessionStorage.tutor;
			 document.getElementById("confirm_issue").textContent = sessionStorage.issue;
			 document.getElementById("confirm_descr").textContent = sessionStorage.description;
			 document.getElementById("confirm_date").textContent = sessionStorage.date;
			 document.getElementById("confirm_time").textContent = sessionStorage.time;
			 }
			 }
			 function cancelBooking(){    
			 window.location = "register.php";
			 }
			 function init(){
				  //call the getBooking() function.  					  
			       getBooking();
			    	 //  link the variable to the HTML element
			       var bookForm = document.getElementById("bookform");
				   var cancelBooking = document.getElementById("cancelButton");
			     	 //check which button is being click.
				   if(bookForm){        
				   bookForm.onsubmit = validate();
				  }else{        
			    	 cancelBooking.onclick = cancelBooking();
				   }
				   document.getElementById("name").value = sessionStorage.firstname;  
				   document.getElementById("email").value = sessionStorage.email;
				   document.getElementById("birth").value = sessionStorage.birth;
				   document.getElementById("unit").value = sessionStorage.unit;
				   document.getElementById("tutor").value = sessionStorage.tutor;
				   document.getElementById("issue").value = sessionStorage.issue;
				   document.getElementById("description").value = sessionStorage.description;
				   document.getElementById("date").value = sessionStorage.date;
				   document.getElementById("time").value = sessionStorage.time;
			 }
				 
				 window.onload = init;