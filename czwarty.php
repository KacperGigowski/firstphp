<!DOCTYPE html>
<?php
$n = $_GET["oblicz"];
function fib($n)
{
    if ($n == 1){
        return 1;
}
elseif($n == 0){
    return 0;
}
else{
    return fib($n - 1)+ fib($n - 2);
}
}
echo fib($n);
?>
<html>
    <body>
        <form action="" method="get">
        <input type="number" name="oblicz">
        <input type="submit"/>
</form>
    </body>
</html>