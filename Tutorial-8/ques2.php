<!<html>
<body>
<form method="POST">
Enter the number for which you want to know the sum of digits:<input type="number" name="no"><br>
<input type="submit" name="submit">
</form>
</body>
</html>
<?php
error_reporting(0);
$a=$_POST['no'];

if(isset($_POST['submit']))
{
  $sum=0;
  while($a!=0)
  {
    
    $rem=$a%10;
    $a=$a/10;
    
    $sum=$sum+$rem;
  }
  echo $sum;
}
?>