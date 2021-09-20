<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
   $user= "root";
   $pass= "";
   $host = "localhost";
   $base = "4k";    
   $con= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($con,$base);
  
    if(isset($_GET['sub']))
		 {
             
             $imie = $_GET['im'];
             $nazwisko = $_GET['nazw'];
             $srednia = $_GET['sred'];

     

$query = "SELECT * FROM uczen";
$query1 = "Insert into uczen(id, imie, nazwisko, srednia) values( '$id','$imie','$nazwisko','$srednia')";


$run = mysqli_query($con,$query) or die(mysqli_error());
$run1 = mysqli_query($con,$query1) or die(mysqli_error());


if($run){
    echo "<p>";
    echo "<table boder=\"1\"><tr>";
    echo "<td bgcolor=\"ffff00\"><strong>UID</strong></td>";
    echo "<td bgcolor=\"ffff99\"><strong>Imie</strong></td>";
    echo "<td bgcolor=\"ffff00\"><strong>Nazwisko</strong></td>";
    echo "<td bgcolor=\"ffff99\"><strong>srednia</strong></td>";
    echo "</tr>";

    while ( $row = mysqli_fetch_row($run)) {
        echo "</tr>";
        echo "<td bgcolor=\"ffff00\">" . $row[0] . "</td>";
        echo "<td bgcolor=\"ffff99\">" . $row[1] . "</td>";
        echo "<td bgcolor=\"ffff00\">" . $row[2] . "</td>";
        echo "<td bgcolor=\"ffff99\">" . $row[3] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

else{
    echo "formularz jest błędny";
}
  
}


if(isset($_GET['del']))
	{
        $id = $_GET['id'];
        $imie = $_GET['im'];
        $nazwisko = $_GET['nazw'];
        $srednia = $_GET['sred'];

        $query2 = "DELETE FROM uczen WHERE $id";
        $run2 = mysqli_query($con,$query2) or die(mysqli_error());
        $query3 = "SELECT * FROM uczen";
        $run3 = mysqli_query($con,$query3) or die(mysqli_error());


        if($run3){
            echo "<p>";
            echo "<table boder=\"1\"><tr>";
            echo "<td bgcolor=\"ffff00\"><strong>UID</strong></td>";
            echo "<td bgcolor=\"ffff99\"><strong>Imie</strong></td>";
            echo "<td bgcolor=\"ffff00\"><strong>Nazwisko</strong></td>";
            echo "<td bgcolor=\"ffff99\"><strong>srednia</strong></td>";
            echo "</tr>";
        
            while ( $row = mysqli_fetch_row($run3)) {
                echo "</tr>";
                echo "<td bgcolor=\"ffff00\">" . $row[0] . "</td>";
                echo "<td bgcolor=\"ffff99\">" . $row[1] . "</td>";
                echo "<td bgcolor=\"ffff00\">" . $row[2] . "</td>";
                echo "<td bgcolor=\"ffff99\">" . $row[3] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
    }
}
?>

<form action="" method="get">

Imie:<input type="text" name="im"><br>
Nazwisko:<input type="text" name="nazw"><br>
Srednia:<input type="text" name="sred"><br>
<input name="sub" type="submit" value="ok">


Id<input type="number" name="id">
<input name="del" type="submit" value="del">


</form>
</body>
</html>