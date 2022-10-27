<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="description" content="Swinburne Sarawak" />
<meta name="keywords" content="HTML5, tags" />
<meta name="author" content="Noor ul Ain Khurshid" />
<title> Registry </title>
<link href= "styles.css" rel="stylesheet"/>
<script src= "validation.js"></script>
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

<form id="form_fill" method="post" novalidate="novalidate" action="confirm.php">

<fieldset>
   <legend> Personal Details: </legend>
       <label for ="firstname"> Name:</label><input type="text" id="name" placeholder="Your name"/><br/> 
	   <label for ="email"> Email:</label><input type="email" id="email" placeholder="Your Email"/><br/>
	   Date of birth:
	   <input type="number" id="day" placeholder="e.g: 19" min="1" max="31"/>
		<input type="number" id="month" min="1" max="12" placeholder="e.g.: 11"/>
		<input type="number" id="year" min="1900" max="2020" placeholder="e.g.: 2001"/>


</fieldset>


   <fieldset>
      <legend>Your Unit:</legend>
         <label for="cos10011"><input type="radio" name="unit" value="COS10011" id="cos10011"/>COS10011</label>
		 <label for="cos60004"><input type="radio" name="unit" value="COS60004" id="cos60004"/>COS60004</label>
		 <label for="cos60007"><input type="radio" name="unit" value="COS60007" id="cos60007"/>COS60007 </label><br/> 
   
       <label for="tutor"> Your tutor: </label>
		<select name="tutor" id="tutor">
			<option value=""></option>
			<option value="tutor1"> Tutor 1 </option>
			<option value="tutor2"> Tutor 2 </option>
			<option value="tutor3"> Tutor 3 </option>
		</select>
   </fieldset>

<fieldset>
   <legend> Issue </legend>
	  <p>
		<label for="html"> <input type="checkbox" name="issue[]" value="html" id="html"/> HTML </label>
		<label for="css"> <input type="checkbox" name="issue[]" value="css" id="css"/> CSS </label>
		<label for="javascript"> <input type="checkbox" name="issue[]" value="javascript" id="javascript"/> JavaScript </label>
		<label for="php"> <input type="checkbox" name="issue[]" value="php" id="php"/> PHP </label>
		<label for="mysql"> <input type="checkbox" name="issue[]" value="mysql" id="mysql"/> MySQL </label>
		</p>

<p><label for="descr"> Description of Issue </label><br/>
<textarea id= "descr" rows= "5" placeholder= "Enter comments here">
</textarea></p>
</fieldset>

<fieldset>
		<legend> Preferred Date/Time </legend> 
		<p>
		<label for="pref_date"> Date: </label> <input type="date" name="pref_date" id="date"/> <br/>
		<label for="pref_time"> Time: </label> <input type="time" name="pref_time" id="time" value="23:59"/> 
		</p>
	</fieldset>

<input type="submit" value="Register" id="button" onclick="validateForm();"/> 
		<input type="reset" value="Reset"/>

</form>

<footer>

<br/> Posted by: Noor ul Ain Khurshid

<br/> Contact info: <a href="mailto:102763334@students.swinburne.edu.my" title="This link will take you to email"> noor_ua@yahoo.com </a>
	
</footer>

</body>