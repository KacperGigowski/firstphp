<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <form action="" method="POST">
        Początek zak <input type="number" name="początek"/><br>
        Koniec zak <input type="number" name="koniec"/><br>
        Los <input type="number" name="los"/><br>
        <input value="rzucik" type="submit" name="przycisk"/>
</form>
<?php
    
$P = $_POST["początek"];
$K = $_POST["koniec"];
$L = $_POST["los"];

for ($i=0; $i<$L; $i++);
{
$los = rand($P,$K);
echo $los;

?>
    </body>
</html>