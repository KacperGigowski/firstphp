
<?php
$login =$_POST["login"];
$pass =$_POST["pass"];
$tab_log=["Romek","Karol","Jakub","Janek","Marcin"];
$tab_pass=["jajko","kura","wilk","szpak","kabanos"];
if($tab_log[0] == $login && $pass == $tab_pass[0]){
    echo "udało sie zalogować";
}
else{
    echo"wypad z mojego pola";
}
?>
<html>
    <body>
        <form action="" method="post">
        <input type="text" name="login">
        <input type="text" name="pass">
        <input type="submit"/>
</form>
    </body>
</html>