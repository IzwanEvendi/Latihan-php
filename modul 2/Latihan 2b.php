<html>
<head>
    <title>Latihan 2b</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: lightgray;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php
$baris = 5;

for ($i = 1; $i <= $baris; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "<div class='kotak'>$j</div>";
    }
    echo "<div class='clear'></div>";
}
?>

</body>
</html>
