<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>


<?php 
if($validation->getErrors()){
    print_r($validation->getErrors());
}
?>
<form action="" method="post">
    <input type="text" name="name" id="name" placeholder="name">
    <input type="text" name="phone" id="phone" placeholder="phone">
    <input type="text" name="email" id="email" placeholder="email">
    <input type="text" name="age" id="age" placeholder="age">
    <button type="submit">Save</button>

</form>
    
</body>
</html>