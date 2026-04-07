<?php
if(isset($_COOKIE['username'])){
    echo "Username:".$_COOKIE['username'];
}
else{
    echo "Cookie 'username' is not set";
}
?>