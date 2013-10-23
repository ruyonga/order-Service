<!--
   	DEPARTMENT OF COMPUTER SCIENCE 
	INDIVIDUAL PROJECT COURSEWORK ONE
	NAME: RUYONGA DANIEL BOSCO
	RENO: 11/U/11749/EVE
	STDNO: 211013442
	DUE 6/MARCH/2013

	This is a web based appliaction than runs under the apache webserver
	with support of a database engine ran by php scritps
 -->

<?php 
if(isset($_SERVER['HTTP_REFERER']));

error_reporting(0);
require("includes/functions.php");
include("save.php");


?>
<html>
<head>

<title> Coursework</title>
<!--The links below reference the Cascading style sheets and the java script files the 
do the page styling and validation-->
<link rel="stylesheet" href="includes/theme.css"/>
<script type="text/javascript" src="includes/validate.js"></script>

</head>
<body>
<div id ="inner">
<?php include('includes/header.php');?>


 <section >
 <form action="main.php"  method="POST" id="contactus" name="dataEntry" onsubmit="return ValidData();"
 onsubmit="return confirm('Confirm Exit ?');" > 
 <!--call for user confirmation on the course of action-->
 
 <!--Feid call onkeyPress action which call for the javascript validation -->
 <!--The form feild on clicking the submit button trigger the validData function in the javascript
 to check if the all fields are field with information before proceeding-->
<table width="100%" border="0" cellspacing="5" cellpadding="5" height="50%" >  
  <tr height="50%">
  
   <td width="50%" height="50%" id="td1" >

		   <fieldset>
	  <table border="0"><!--The feilds are enclosed in the table rows -->
	 
		  <legend>Customer Information</legend>
	<tr><td><label align="left">Customer ID:</label></td><td><input type="Text" style="width:150px; float:left;" value="<?php
if(isset($_POST['cusID'])){ echo $cusid = $_POST['cusID']; } ?>" name="cusID" id="cusID"onKeyDown="return MaskedInput()" onKeyPress="return checkIt(event)" tabindex="1"/> </td>
		</tr>
		<tr>
		<td> <label align="left">Customer Name:</label></td><td><input type="Text" name="cusName" value="<?php if(isset($_POST['cusName'])){ echo $name = $_POST['cusName']; } ?>"id="CusName" tabindex="2"/> </td></tr>
<tr>	
		<td> <label>state: </label></td><td><input type="Text" name="state"  value="<?php if(isset($_POST['state'])){echo $state = $_POST['state']; }  ?>"style="width:80px;  float:left; " tabindex="3" id="st" maxlength= "3"/>
	<input type="checkbox" name="retail" id="checkbox" checked tabindex="4"  value="ratailer" ><label>Retail Customer? </label></td>
		 
	</tr>	
 </table>
 	</fieldset>
   </td>
    <td  > 

  <!--declare and setting values for the radio buttons-->
  <div class="radiobuttons">
  <fieldset>
  <legend>Shipping</legend>
<table cellspacing="20" border="0">
  <tr>
  <td><input type="radio" name="trans" class="radiobuttons" value="ups" id="radio" checked="checked" align="left" tabindex="10"> <label for="UPS"> UPS </label> </td>
  <td>  <input type="radio" tabindex="13" name="trans"  class="radiobuttons"value="fed" id="radio" align="right" /> <label for="FedEx">Fed Ex Ground</label><br /> </td>
	</tr>
   <tr>
   <td><input type="radio" name="trans" class="radiobuttons" value="usportal"  id="radio"/><label for="Us" tabindex="11">Us Portal Air</label>  </td>
 <td>  <input type="radio" tabindex="12" name="trans" class="radiobuttons" value="fedAir" id="radio"/><label for="Fed Ex Air">Fed Ex Air</label></td>
   </tr>
</table>
  </fieldset>
    </div>
  </td>

  </tr>
    <!--this is table row contains the order details -->
  <tr height="50%">
		<td width="50%" height="50%"> 
	
		  <fieldset>
		  <legend>Part Ordered</legend>
		 <table border="0" >
		<tr>
			<td><label> Part Number:</label></td>
			<td><input type="Text" name="partnum" value="<?php if(isset($_POST['partnum'])){echo $partnumber; }?>"  tabindex="5"></td>
		</tr>
		<tr>
			<td>
			<label> Description:</label></td>
			<td><input type="Text" name="desc" value="<?php if(isset($_POST['desc'])){ echo $desc; } ?>"  tabindex="6"> 
			</td>
		</tr>
		<tr>
		<td><label> Price Per:</label> </td>
		<td><input type="Text" name="pricePer" value=" <?php if(isset($_POST['pricePer'])){ echo $unit = $_POST['pricePer']; } ?>" style = "text-align:right;width: 100px; float: left;" onKeyPress="return checkIt(event)" tabindex="7" />
		
		<label >Quantity:</label><input type="Text" name="quantity" style="width:75px; text-align:right; " value="<?php if(isset($_POST['quantity'])){ echo $qty ;}  ?>" tabindex="8" onKeyPress="return checkIt(event)"/> </td>
		</td>
		</tr>
		 <table cellspacing="1">
		 <tr>
		      
		<td> <input type="checkbox" name="contSize" style="{margin-left: 90px;}" id="checkbox" tabindex="9" /><label>Oversize Container?</label></td>
		 </tr>
		 </table>
		  </fieldset>
		
		 </td>
  
    <td width="50%" height="50%">

  <fieldset>
  <legend>Output</legend>
  <table border="0">
  <tr>
		<td><label>Cost:</label></td>
		<td><input type="Text"  name="cost" value= "$<?php echo $cost;?>" tabindex="14" style = "text-align: right;" readonly="true"/></td> 
	</tr>
	<tr>
	<td><label>Sales Tax:</label></td>
	<td><input type="Text" name="tax" tabindex="15" value= " $<?php echo $taxCost; ?>" style = "text-align: right;" readonly="true"/> </td>
	</tr>
	<tr>
	<td>	<label>Shipping&Handling: </label></td>
	<td>	<input type="Text" name="handling"  value= "$<?php echo $transCost; ?>" tabindex="16" style = "text-align: right;" readonly="true" /> </td>
	</tr>
	<tr>
	<td><label> Total:</label> </td>
	<td><input type="Text" name="total"  value= "$<?php echo $total;?> "id = "smal" tabindex="17" style = "text-align: right;" readonly="true"/></td>
	</tr>
		</table>
  </fieldset>
</td>
  </tr>
  <tr>
  <!--The submit button triggers the form action
	  The reset Button set the form to its default state
	  The Exit button close the tab where form is loaded
	  -->
    <td align="left"><input type="submit" name="compute" value="compute"> 
	<input type="reset" name="reset" value="Next Order" onClick="clearData(this.form)"></td>
    <td align="right"><input type="button"  onclick="bye()"name="exit" value="Exit" align="right"></td>
  </tr>
</table>


  </form>
  <a href="view.php">View Customers</a>
  </section>
  <div id="footer">
  <?php include 'includes/footer.php'?>
  </div>
</div>

</body>
</html>
