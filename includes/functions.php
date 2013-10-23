<!--DEPARTMENT OF COMPUTER SCIENCE 
	INDIVIDUAL PROJECT COURSEWORK ONE
	NAME: RUYONGA DANIEL BOSCO
	RENO: 11/U/11749/EVE
	STDNO: 211013442
	DUE 6/MARCH/2013
	-->


<?php
//this 
if(isset($_POST['compute'])){   //listens for the submit button action

global $cusType;
global $transport;
global $stateValue;
global $pack;        //global variables declared so as to use them generally from any method or class
global $cost;
global $partQty;
global $priceEach;
global $name,$cusState,$id,$partNo,$partdesc;


//get values from the textboxes and assign them to variables
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
	  $transport = $_POST['trans'];
	  $partQty = $_POST['quantity'];    
	  $priceEach = $_POST['pricePer'];
	  $stateValue = $_POST['state'];

if(isset($_POST['retail'])){   //check if the retailer checkbox is checked
  $cusType = $_POST['retail']; //assign the value of the checkbox to the variable if its checked
}else{
  $cusType = "";
  
  }
 
      $cost = $partQty* $priceEach;   //picePer * Quantity
	  
   function SalesTax( $cost,$cusType,$stateValue ){
         //is the customer typ checkbox checked
		 global $taxCost;
		 
	 $state1 = "kla";
	 $state2 = "ebb";
	 $state3 = "mbr";
     $ebbs =0.05;
     $kla = 0.1;	 
	 if( ($stateValue == ($state2 ||$state3)) && ($cusType == 'ratailer')){   //if the state is ebbs or mbr and the checkbox is checked
	     $taxCost = $cost * $ebbs;
		return $taxCost;
	 }elseif(($stateValue == $state1) && ($cusType == 'ratailer')){
		 $taxCost = $cost * $kla;		 
		 return $taxCost;
	 }else {
	   $taxCost = 0.00;
	   return $taxCost;
	 }  
   }
   
 if(isset($_POST['contSize'])){
  $package =$_POST['contSize'];
}else{
  $package = "";
}   
 
$ups = 7.00;
$ground = 9.25;
$air = 8.50; 
$overnight = 12.00;
$oversize = 5.00;
global $transCost;
	    if($transport == "ups"){ //checks the radio button that has been selected by the				    
			if($package== "oversize"){			//checks whether the oversize container checkbix has been selected			
				$transCost =( $partQty  * $ups) + $oversize ;				
			}else{
				$transCost =( $partQty  * $ups) ;		
			}  					 
		}elseif($transType =="fed"){
			if($package== 'oversize'){  //checks whether the oversize container checkbix has been selected
			 $transCost =( $partQty  * $ground) + $oversize ;
		}else{
		 $transCost =( $partQty  * $ground) ;		
			 }  					 
		}elseif($transType =="usportal"){
			if($package== 'oversize'){  
			 $transCost =( $partQty  * $air) + $oversize ;    //transport cost = the quantity of parts bought times
															  //the cost of the transport from the selected method
															  //if the package is oversize the extra cost is added					
			}else{
				$transCost =( $partQty  * $air) ;		
			} 					 
		}elseif($transType =="fedAir"){  //check if the radio button corresponding to the fed Air transport is selected
		if($package== 'oversize'){ 
				 $transCost =( $partQty  * $overnight) + $oversize ;				
			}else{
			 $transCost =( $partQty  * $overnight) ;			
	}			 
	}
	
	
	function computeTotal($cost, $taxCost, $transCost){
		global $total;
		$total = $cost + $taxCost + $transCost;
		return $total;
	
	}
    SalesTax( $cost,$cusType,$stateValue );
   computeTotal($cost, $taxCost, $transCost);
   
 }
 
?>
