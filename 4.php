<!-- ----------------task Q
write a script to draw the multiplication table -->
<?php
$n = 12;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table>
        <tbody>
            <?php for ($i = 1; $i <= $n; $i++) { ?> // row loop
                <tr>
                    <?php for ($j = 1; $j <= $n; $j++) { ?> // colume loop
                        <td><?php echo $i . "*" . $j . "=" . $i * $j ?></td> //multiblication operation
                    <?php } ?>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</body>

</html>