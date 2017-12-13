<!DOCTYPE html>
<?php
$cookie_name = "cookie";
$cookie_value = 0;
setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/");
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "E' la prima volta che accedi al mio sito!";
     $cookie_value= ++$_COOKIE[$cookie_name];
     setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/");
} else {
     
     $cookie_value= ++$_COOKIE[$cookie_name];
     setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/");
    
     echo "E' la ".$cookie_value."a volta che accedi al mio sito";
     
}
?>
<style>
body {
    background-color: orange;
    
}

</style>


</body>
</html>