<?php
if (isset($_POST['name'])) {
    echo "Hello," . $_POST['name'];
    $varName = 'name';
    setcookie($varName, $_POST ['name']);   
    //print_r($_POST ['name']);   
} 
else {
    echo "Please enter your cridentials";
    
}
?>


