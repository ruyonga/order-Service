

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sales Database</title>
<link rel="stylesheet" href="includes/theme.css"/>
<style type="text/css">
#inner a {
	font-family: "Times New Roman", Times, serif;
	color:black;
	
}
</style>
</head>

<body>

<div  >


 <?php include("includes/header.php");?>
 <h2>Viewing the Customer List</h2>
<form action="view.php" method="GET"  align="right" id="contactus">
<!--DEPARTMENT OF COMPUTER SCIENCE 
	INDIVIDUAL PROJECT COURSEWORK ONE
	NAME: RUYONGA DANIEL BOSCO
	RENO: 11/U/11749/EVE
	STDNO: 211013442
	DUE 6/MARCH/2013
	-->

<!--<table>
<tr>
<td>
  <input name="searchC" type="text" size="20" /></td>
  <td><input  type="submit" value="search" name="search"/></td>
  </tr>
  </table>
</form>
-->
<a href="main.php">Back</a>

 <?php
 error_reporting(0);
 
 require_once("includes/connection.php");
  if(!$connection)
		die("Coundn't connect to server");
		$connection = mysql_select_db("automata") 
		or die("Database selection error". mysql_error());
 if(isset($_POST['cusName'])){
		$searchValue = $_GET['cusName'];
		}
    $query= mysql_query("SELECT * FROM customerinfo WHERE cusName LIKE '%$searchValue%' LIMIT 0, 30");    //sserching for customer from database
	while($row = mysql_fetch_array($query)){
	  
	   require_once('table.html');

			echo "<tr>";
             //echo "<td scope =col>" . $row[id] . "</td>";
			          	  echo "<td scope =col>" . $row[1] . "</td>";  //display in a tabular form
					  echo "<td scope='col'>" . $row[2] . "</td>";
					  echo "<td scope='col'>" . $row[3] . "</td>";
					  echo "<td scope='col'>" . $row[4] . "</td>";
					  echo "<td scope='col'>" . $row[5] . "</td>";
					  echo "<td scope='col'>" . $row[6] . "</td>";
					  echo "<td scope='col'>" . $row[7] . "</td>";
					  echo "<td scope='col'>" . $row[8] . "</td>";
					  echo "<td scope='col'>" . $row[9] . "</td>";
					  echo "<td scope='col'>" . $row[10] . "</td>";
					  echo "<td scope='col'>" . $row[11] . "</td>";
					  echo "<td scope='col'>" . $row[12] . "</td>";
					  echo "<td scope='col'>" . $row[13] . "</td>";
					  echo "<td scope='col'>" . $row[14] . "</td>";
					  
					    
}					
					echo "</tr>";
					 
					  
			echo"</table>"

	
	
?>
 
	<?php include("includes/footer.php");?>

 </div>
</body>
</html>
