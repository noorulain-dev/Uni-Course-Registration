<!DOCTYPE html>
<html lang="en">
<head>    
<meta charset="utf-8" />
<meta name="description" content="Swinburne Sarawak" />
<meta name="keywords" content="HTML5, tags" />
<meta name="author" content="Noor ul Ain Khurshid" />
<title> Confirm </title>
<link href= "styles.css" rel="stylesheet"/>  
<script src= "confirm.js"></script>
</head> 
<body>
<header>
<figure>
<a href="sarawak"><img src="sarawak.jpg" alt="Swinburne Sarawak Logo" title="SUTS_logo_horizontal" /></a>
</figure>
</header>
<nav>
   <ul>
       <li><a href="https://www.swinburne.edu.my/contact" target="new_window"> | Contact Us | </a></li>
	   <li><a href="https://www.swinburne.edu.my/hr" target="new_window"> Jobs at Swinburne | </a></li>
	   <li><a href="https://www.swinburne.edu.au/copyright-disclaimer" target="new_window"> Copyright and Disclaimer | </a></li>
	   <li><a href="https://www.swinburne.edu.my/?p=1295" target="new_window"> Privacy | </a></li>
   	   <li><a href="https://www.swinburne.edu.my/?p=1311" target="new_window"> Accessibility |</a></li>
	   <li><a href="https://www.swinburne.edu.my/?p=1318" target="new_window"> Feedback | </a></li>
       <li><a href="register.php" target="new_window"> Register | </a></li>
   </ul>
</nav>


 

<form id="bookform" method="post" action="process.php">   

<input type="hidden" name="vName" id="name" value="1"> 
<input type="hidden" name="vEmail" id="email" value="2"> 
<input type="hidden" name="vBirth" id="birth" value="3"> 
<input type="hidden" name="vUnit" id="unit" value="4"> 
<input type="hidden" name="vTutor" id="tutor" value="5"> 
<input type="hidden" name="vIssue" id="issue" value="6"> 
<input type="hidden" name="vDescription" id="description" value="7"> 
<input type="hidden" name="vDate" id="date" value="8"> 
<input type="hidden" name="vTime" id="time" value="9"> 
<fieldset>

<legend>User Details</legend>

<p>
Your Name: <span id="confirm_name"></span>
</p>

<p>
Your Email: <span id="confirm_email"></span>
</p>

<p>
Your Date of Birth: <span id="confirm_birth"></span>
</p>

<p>
Your Unit: <span id="confirm_unit"></span>
</p>

<p>
Your Tutor: <span id="confirm_tutor"></span>
</p>

<p>
Your Issue: <span id="confirm_issue"></span>
</p>

<p>
Description of Issue: <span id="confirm_descr"></span>
</p>

<p>
Date: <span id="confirm_date"></span>
</p>

<p>
Time: <span id="confirm_time"></span>
</p>

  
<input type="submit" value="Confirm Booking"/> 
<input type="button" value="Cancel" id="cancelButton" onclick="cancelBooking();"/> 
</fieldset>
</form>

<footer>

<br/> Posted by: Noor ul Ain Khurshid

<br/> Contact info: <a href="mailto:102763334@students.swinburne.edu.my" title="This link will take you to email"> noor_ua@yahoo.com </a>
	
</footer>

</body>
</html>