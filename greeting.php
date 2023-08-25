<!DOCTYPE html>
<html>
<head>
    <title>Hälsningsmeddelande</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $greeting = "Hej " . $name . "! Välkommen till vår webbplats.";
    echo $greeting;
}
?>

<form method="post" action="">
    Ange ditt namn: <input type="text" name="name">
    <input type="submit" value="Hälsa">
</form>

</body>
</html>
