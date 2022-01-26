<?php

if(isset($_COOKIE["user"] == "") == False){
    http_response_code(301);
    header("Location: /login.php");
    return;
}

echo("hello marld");

?>