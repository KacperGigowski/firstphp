<!DOCTYPE html>
<?php
$P = $_POST["oblicz"];
for($i=1; $i<$P; $i++) {
$rand = rand(0,1000);
if($rand%2==0){
echo $rand;
echo "<br>";
}
}
?>



<html>
    <body>
        <form action="" method="post">
        <input type="number" name="oblicz">
        <input type="submit"/>
</form>
    </body>
</html>