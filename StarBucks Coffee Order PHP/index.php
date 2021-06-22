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
</style>
</head>
<body>  


<div class="container-fluid">
<div class="row">
    
    <div class="col-lg-6">
      <h1 class="big-heading">Welcome To Starbucks's !</h1>
      <img class="title-image" src="assignment-images/logo-en.png" >
     </div>

    <div class="col-lg-6">

    
<fieldset>
		<legend> Give us some numbers...</legend>
      
<form method="post" action="order.php">  
  
  <br><br>
  
  Number of Coffees: <input type="number" name="noOfCoffees" value="" required>
  
  <br><br>
  Size:        
  <select name="size" required>
  <option value='small'>Small</option>
  <option value='medium'>Medium</option>
  <option value='large'>Large</option>
  <option value='Extralarge'>Extra-large</option>
  </select>
  
  <br><br>
  How many Creams?  <input type="number" name="noOfCreams" value="" required>
  
  <br><br>
  How many Sugars?  <input type="number" name="noOfSugars" value="" required>
  
  <br><br>
 
  <input type="submit" class= "sbtn" name="submit" value="Order Coffee">  
</form>

</fieldset>
    </div>

  </div>
</div>







</body>
</html>