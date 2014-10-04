<!DOCTYPE html>
<html>
    <head>
        <title>Option</title>   
        </head>    
        <body>
            <p>Select the model you want to view</p>
            <form action="Option.php" method="post">
                <select name="automobile">
                    <option></option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                    <input type="submit" value="Ok" />  
                </select>
            </form>
        </body>
</html>

<?php
if (isset($_POST['name'])) {
    echo "Hello";
    $varName = 'name';
    setcookie($varName, $_POST ['name']);
    
print_r($_POST ['name']);} 

?>

Denys Pavlenko
    


    
  

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

