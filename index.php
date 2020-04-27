<?php 
echo "index";
$a = 'ccc';
?>

<form method="GET" action="">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 

<?php 
    if(isset($_GET['fname'])) {
        echo "ten la".$_GET['fname'];
    }
?>