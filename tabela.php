<?php
$link = mysql_connet("localhost","","")
or die("Could not connect");

mysql_select_db("4K")
or die("Could not select database");

$query = "SELECT * FROM uczen";
$result = mysql_query($query)
or die("Query failed");

while($row = mysql_fetch_array($result)){
echo"<TR><TD>" .$row["imie"].
"<TR><TD>" .$row["nazwisko"].
"<TR><TD>\n";
}
mysql_free_result($result);
mysql_close($link);