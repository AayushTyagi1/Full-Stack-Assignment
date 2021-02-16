<html>
<body>
<form  name="FORM" action="Q2.php"  method="post">
Enter First Variable:<input type="text" name="num1" required><br>
Enter Second Variable:<input type="text" name="num2" required><br>
<input type="submit" name="submit" value="Caclulate">
</form>
</body>
 </html>
 <?php
if(isset($_POST['submit']))
{
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    {
        $sum=$num1+$num2;
        echo "Sum of two numbers is $sum";
    }
}
?>