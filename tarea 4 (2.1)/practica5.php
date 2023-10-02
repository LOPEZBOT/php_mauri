<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" cellpadding="15" width='50%'>
<?php
$i = 0;

while ($i < 15) {
    echo "<tr>";
    for ($x = 0; $x < 3; $x++) {
        $color = "";
        if ($i % 15 == 0) {
            $color = "black";
        } else{
        if ($i % 2 == 0) {
            $color = "white";
        } else {
            $color = "gray";
        }}

        echo "<td bgcolor='$color'></td>";
    }
    echo "</tr>";
    $i++;
}
?>
</table>
</body>
</html>