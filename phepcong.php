<form method="GET" action="">
  <label for="fname">SO thu nhat:</label><br>
  <input type="number" id="fname" name="fname"><br>
  <label for="lname">So thu 2:</label><br>
  <input type="number" id="lname" name="lname" ><br><br>
  <input type="submit" value="Submit">
</form> 

<?php 
    if(isset($_GET['fname']) && isset($_GET['lname'])) {
        // $sothunhat = $_GET['fname'];
        // $sothuhai = $_GET['lname'];
        if(is_numeric($_GET['fname']) && is_numeric($_GET['fname']))
        {
            $result = $_GET['fname'] + $_GET['lname'];
            echo "ket qua la :".$result;
        } else {
            echo "vui long nhap so";
        }
        
    }
?>