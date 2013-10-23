<!--DEPARTMENT OF COMPUTER SCIENCE 
	INDIVIDUAL PROJECT COURSEWORK ONE
	NAME: RUYONGA DANIEL BOSCO
	RENO: 11/U/11749/EVE
	STDNO: 211013442
	DUE 6/MARCH/2013
	-->
<html>
<head>
<script>
function open_win()
{
window.open("main.php", 'width=200,height=100')
}
</script>
<link rel="stylesheet" href="includes/theme.css"/>
<script type="text/javascript" src="includes/validate.js"></script>

</head>
<body>
<div id ="inner">

<?php include 'includes/header.php'?>
<h3>Welcome </h3>
<form id="contactus" >
<center><input type="button" value="Launch App" onclick="open_win()"></center>
</form>
<div id="footer">
<?php include 'includes/footer.php'?>
</div>
</div>
</body>
</html>