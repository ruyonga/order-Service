/*DEPARTMENT OF COMPUTER SCIENCE 
	INDIVIDUAL PROJECT COURSEWORK ONE
	NAME: RUYONGA DANIEL BOSCO
	RENO: 11/U/11749/EVE
	STDNO: 211013442
	DUE 6/MARCH/2013
	*/


function ValidData(formElement)
		{
		 
	   
	   var x=document.forms["dataEntry"]["cusID"].value;
			if (x==null || x=="")
			  {
			  alert("Customer Id is required");
			  return false;
			  }
			  var x=document.forms["dataEntry"]["cusName"].value;
			if (x==null || x=="")
			  {
			  alert("Customer name must be filled out");
			  return false;
			  }
	
			  var x=document.forms["dataEntry"]["state"].value;
			if (x==null || x=="")
			  {
			  alert("State field must be filled out");
			  return false;
			  }
	
	var x=document.forms["dataEntry"]["partnum"].value;
			if (x==null || x=="")
			  {
			  alert("Part Number must be filled out");
			  return false;
			  }
	var x=document.forms["dataEntry"]["desc"].value;
			if (x==null || x=="")
			  {
			  alert("Please fill in the Part description");
			  return false;
			  }
	var x=document.forms["dataEntry"]["quantity"].value;
			if (x==null || x=="")
			  {
			  alert("Fill in the quantity feild");
			  return false;
			  }
	
	
		}

function checkIt(evt) {
    evt = (evt) ? evt : window.event
    var charCode = (evt.which) ? evt.which : evt.keyCode
	
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {    // for validating the textfields to only accept the  numeric values
        status = "This field accepts numbers only."
        return false
    }
    status = ""
    return true
}
	


MaskedInput({
  elm: document.getElementById('mask'),
  format: '###-##-####',
  separator: '-\/',
  typeon: '###'
  
});

function bye(){
 if (confirm("Close Window?")) {
    close();
  }

}

function clearData(form){
	if(confirm("comfirm clear Data action!!!")){
		location.href="main.php";	
	
	}

}
