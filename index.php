<!DOCTYPE html>
<html>
  <head>
    <title>Kerry's Store</title>
  </head>
  <body>
    <?php
      $name = "Kerry's Store";
      $wallet = 1000; 

      echo "<h1>Welcome to ".$name."!</h1>";
      echo "<h2>You have $".$wallet." in your wallet.</h2>";
    
      $products['Keyboard']=750;
	    $products['Laptop']=15000;
	    $products['Samsung Phone']=1000;
	    $products['Charger']=75;

	    echo "<p>A laptop costs $".$products['Laptop']."</p>";
    ?>
  </body>
</html>
