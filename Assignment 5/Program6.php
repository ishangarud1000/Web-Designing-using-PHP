<?php
session_start();
if(isset($_SESSION['userid'])){
    echo"User is logged in.User id:".$_SESSION['userid'];
}
else{
    echo "User is not logged in";
}
?>