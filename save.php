<!--DEPARTMENT OF COMPUTER SCIENCE 
	INDIVIDUAL PROJECT COURSEWORK ONE
	NAME: RUYONGA DANIEL BOSCO
	RENO: 11/U/11749/EVE
	STDNO: 211013442
	DUE 6/MARCH/2013
	-->

<?php

if(isset($_POST['compute'])){
include 'includes/connection.php';   // include the database connection in the file


/*
*the Vaiables declared below are used to hold values that are submited by the 
*user from the textfields after the submit button has been clicked by the user.
*The POST variable is used here because of its sercurity advantage over the othe
global variables like GET
@copyright Dan Ruyonga 2013.
*/
         $cusId= $_POST['cusID'];
	  $name= $_POST['cusName'];
	  $state = $_POST['state'];
	  $cusType = $_POST['retail'];	  
	  $partnumber = $_POST['partnum'];
	  $desc = $_POST['desc'];
	  $unit = $_POST['pricePer'];
	  $qty = $_POST['quantity'];
	  $package = $_POST['contSize'];
	  $transType = $_POST['trans'];
	  
	  
	  if(isset($_POST['retail'])){
  $cusType = $_POST['retail'];
}else{
  $cusType = "not retailer";
}
	  if(isset($_POST['contSize'])){
  $package = $_POST['contSize'];
}else{
  $package = "normal";
}

if(isset($_POST['trans'])){
  $transType =$_POST['trans'];
}else{
  $transType = "";
} 
	 /* $sql  = "SELECT * FROM customerinfo WHERE cusId =  $cusId ";   //select all the info in the database where the customer id is the same as the one in the 
																	//in the textfeilf
	   $sql = mysql_query($sql);
	     while($row = mysql_fetch_array($sql)){
		      $test = $row[1];
		 }
	    if($cusId !== $test){		                    //check if the same id exists in the database. if not continue
		
*/
	  
	    	if($transType== "ups"){		    //check for the transport typ selected  
			   if($cusType = $_POST['retail']){   //check if a customer is a retailer(state of the checkbox checked or unchecked)
			   $saveCusInfo = "INSERT INTO customerinfo VALUES
			   ('','$cusId','$name','$state','$cusType','$partnumber','$desc','$unit','$qty','$package','ups','$cost',' $taxCost','$transCost','$total')";     //insert data in the given feilds
			   
			   }else{
			     $saveCusInfo = "INSERT INTO customerinfo VALUES('','$cusId','$name','$state','$cusType','$partnumber','$desc','$unit','$qty','$package','ups','$cost',' $taxCost','$transCost','$total')";
			   }
			  
		
		}elseif($transType =="fed"){
		
			   if($cusType = $_POST['retail']){
			   $saveCusInfo = "INSERT INTO customerinfo VALUES('','$cusId','$name','$state','$cusType','$partnumber','$desc','$unit','$qty','$package','fed','$cost',' $taxCost','$transCost','$total')";
			   
			   }else{
			     $saveCusInfo = "INSERT INTO customerinfo VALUES('','$cusId','$name','$state','$cusType','$partnumber','$desc','$unit','$qty','$package','fed','$cost',' $taxCost','$transCost','$total')";
			   }
		}
		elseif($transType =="usportal"){
		
			   if($cusType = $_POST['retail']){
			   $saveCusInfo = "INSERT INTO customerinfo VALUES('','$cusId','$name','$state','$cusType','$partnumber','$desc','$unit','$qty','$package','usportal','$cost',' $taxCost','$transCost','$total')";
			   
			   }else{
			     $saveCusInfo = "INSERT INTO customerinfo VALUES('','$cusId','$name','$state','$cusType','$partnumber','$desc','$unit','$qty','$package','usportal','$cost',' $taxCost','$transCost','$total')";
			} 
			  }
		elseif($transType =="fedAir"){
		
			   if($cusType = $_POST['retail']){
			   $saveCusInfo = "INSERT INTO customerinfo VALUES('','$cusId','$name','$state','$cusType','$partnumber','$desc','$unit','$qty','$package','fedAir','$cost',' $taxCost','$transCost','$total')";
			   
			   }else{
			     $saveCusInfo = "INSERT INTO customerinfo VALUES('','$cusId','$name','$state','$cusType','$partnumber','$desc','$unit','$qty','$package','fedAir','$cost',' $taxCost','$transCost','$total')";
			   }
			  
			  }
			  
		
		
		
	  //this is the mysql sql statement that excutes the sql statment
	mysql_query($saveCusInfo);   
 

}
  


?>
