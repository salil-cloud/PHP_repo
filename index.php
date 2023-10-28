<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <form action="index.php", method="post">
        <input type="radio", name="creditcard", value="Visa">
        Visa<br>
        <input type="radio", name="creditcard", value="Master_card">
        Master-Card<br>
        <input type="radio", name="debitcard", value="Rupay">
        Rupay<br><br> 
        <input type="submit", name = "confirmed", value="confirmed">
    </form>
</body>
</html>
<?php 
    if (isset($_POST['confirmed'])){
        if(empty($_POST['creditcard']) && empty($_POST['debitcard'])){
            echo "\nPlease select a transaction option first";
        }
        elseif(isset($_POST['creditcard'])){
            echo "<br>You have selected {$_POST['creditcard']}";
        }
        else{
            echo "<br>You have selected {$_POST['debitcard']}";

        }
    }
?>