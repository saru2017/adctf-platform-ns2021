<?php
if(empty($_COOKIE["user"])){
    http_response_code(301);
    header("Location: /login.php");
    echo("oi");
    print_r($_COOKIE);
    return;
}

echo("oi");
print_r($_COOKIE);

echo("hello marld");

?>
