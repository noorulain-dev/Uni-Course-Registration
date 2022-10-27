<!DOCTYPE html>
<html lang="en">
<head>    
<meta charset="utf-8" />
<meta name="description" content="Swinburne Sarawak" />
<meta name="keywords" content="HTML5, tags" />
<meta name="author" content="Noor ul Ain Khurshid" />
<title> Process </title>
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
 

 <h1>Booking Confirmed</h1>
 <h2>Thank you and come again</h2>


 <?php
		
	if (isset($_POST['vName']) && isset($_POST['vEmail']) && isset($_POST['vBirth']) && isset($_POST['vUnit']) && isset($_POST['vTutor']) && isset($_POST['vIssue']) && isset($_POST['vDescription']) && isset($_POST['vDate']) && isset($_POST['vTime']) )
	{
$fname = $_POST["vName"];
$email = $_POST['vEmail'];
$birth = $_POST['vBirth'];
$unit = $_POST['vUnit'];
$tutor = $_POST['vTutor'];
$issue = $_POST['vIssue'];
$description = $_POST['vDescription'];
$date = $_POST['vDate'];
$time = $_POST['vTime'];		
		
	} else {
		echo "pff";
	}
?>

<aside>
 <table class="center">
 
 <th>Description</th>
 
 <th>Value</th>
 
 <tr><td>First name </td>
 <td><?php echo $fname; ?></td></tr>
	
 <tr><td>Email address </td><td>
    <?php echo $email;?></td></tr>
	
 <tr><td>Date of birth </td><td>
    <?php echo $birth;?></td></tr>
	
 <tr><td>Unit </td>
    <td><?php echo $unit;?></td></tr>
	
 <tr><td>Tutor </td><td>
    <?php echo $tutor;?></td></tr>
	
 <tr><td>Issue </td><td>
    <?php echo $issue;?></td></tr>
	
 <tr><td>Description </td><td>
    <?php echo $description;?></td></tr>
	
 <tr><td>Date </td><td>
    <?php echo $date;?></td></tr>
	
 <tr><td>Time </td><td>
    <?php echo $time;?></td></tr>
	
 </table>
</aside>

<footer>

<br/> Posted by: Noor ul Ain Khurshid

<br/> Contact info: <a href="mailto:102763334@students.swinburne.edu.my" title="This link will take you to email"> noor_ua@yahoo.com </a>
	
</footer>

</body>
</html>