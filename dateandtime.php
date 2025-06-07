<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date and time in php</title>
</head>
<body>
    <H1>Here is basic code to insert the date and time on screen in dynemicly formate</H1>
    <P>
    <?php
    
echo date("Y-m-d"); 
echo "<br>";

echo date("Y-m-d H:i:s"); 
echo "<br>";

echo date("l, F j, Y"); 
echo "<br>";

echo date("h:i A"); 
?>
    </P>
</body>
</html>