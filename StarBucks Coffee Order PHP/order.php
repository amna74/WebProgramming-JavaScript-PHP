<?php

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$pricepercoffe=1.2; //1.2 USD

// define variables and set to empty values
$Err = "";
$noOfCoffees = $size = $noOfCreams = $noOfSugars =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["noOfCoffees"])) {
    $Err = "Number of Coffees are required";
  } else {
    $noOfCoffees = test_input($_POST["noOfCoffees"]);
    
    if (!preg_match("/^[1-9]*$/",$noOfCoffees)) {
      $Err = "Only Numbers Allowed";
    }
  }
  
  if (empty($_POST["size"])) {
    $Err = "Size is required";
  } 
  else {
    $size = test_input($_POST["size"]);  
  }
   
  if (empty($_POST["noOfCreams"])) {
    $Err = "Number of Creams required";
  } else {
    $noOfCreams = test_input($_POST["noOfCreams"]);
    
    if (!preg_match("/^[1-9]*$/",$noOfCreams)) {
        $Err = "Only Numbers Allowed";
      }
  }

  if (empty($_POST["noOfSugars"])) {
    $Err = "Number of Sugars required";
  } else {
    $noOfSugars = test_input($_POST["noOfSugars"]);
    
    if (!preg_match("/^[1-9]*$/",$noOfSugars)) {
        $Err = "Only Numbers Allowed";
      }
  }
  

  
 
}


?>



<!DOCTYPE HTML>  
<html>
<head>

<head>
        <meta charset="utf-8">
        <title>Starbucks's Coffee</title>
      
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">
      
        <!-- CSS Stylesheets -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
      
        <!-- Font Awesome -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
      
        <!-- Bootstrap Scripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </head>
<style>
.error {color: #FF0000;}
.boxx {background-color:white;}
</style>
</head>
<body>  


<div class="container-fluid">

<div class="row">
    
    <div class="col-lg-6">
    <fieldset>
		<legend> Thanks for your order. Here it is ...</legend>
    </fieldset>
     </div>

</div>
<div class='boxx'>
	<?php
	if(empty($Err))
	{
	
	if($size=='small')
		$widthsize='150';
	elseif($size=='medium')
		$widthsize='190';
	elseif($size=='large')
		$widthsize='230';
  elseif($size=='Extralarge')
		$widthsize='270';
	
	for($ii=1;$ii<=$noOfCoffees;$ii++)

	{
		echo "	<div class='row'>
				<div class='col-md-12'>";
		
		echo "<img src='assignment-images/cup.jpg' width='$widthsize px'>";

		if(!empty($noOfCreams))
		{
		echo "<img src='assignment-images/plus.jpg' width='40px'>";
		for($i2=1;$i2<=$noOfCreams;$i2++)

			{
				
				echo "<img src='assignment-images/cream.jpg' width='110px'>";
				
				
			}
		}


		if(!empty($noOfCreams))
		{
		echo "<img src='assignment-images/plus.jpg' width='40px'>";
		for($i3=1;$i3<=$noOfSugars;$i3++)

			{
				
				echo "<img src='assignment-images/sugar.jpg' width='110px'>";
				
				
			}
		}
		
		echo "	</div>
				</div>";
	}
	//showing bill
	$total_am=($ii*$pricepercoffe);
	$tax=($total_am*13)/100;
	$toal_am_withtax=$total_am+$tax;
	
	
	echo "Cost per COffee  :  $pricepercoffe USD  ,  No of Coffees   $ii  ,  13% tax Total  =  $toal_am_withtax";
		
	}
	else
	{
		echo "<span class='error'>$Err</span>";
	}
?>

</div>
</div>


</body>
</html>