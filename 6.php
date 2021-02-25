<?php
//----------------task Q
// you have array of developers data:
// [
//  [
//  'name' => 'ahmed hamdy',
//  'job' => 'front-end',
//  'experience' => 3
//  ],
//  [
//  'name' => 'mohammed shaker',
//  'job' => 'back-end',
//  'experience' => 2
//  ],
//  [
//  'name' => 'ali hasan',
//  'job' => 'full-stack',
//  'experience' => 4
//  ],
// ];
// write a script that displays data in bootstrap cards

$array = [
    [
        'name' => 'ahmed hamdy',
        'job' => 'front-end',
        'experience' => 3
    ],
    [
        'name' => 'mohammed shaker',
        'job' => 'back-end',
        'experience' => 2
    ],
    [
        'name' => 'ali hasan',
        'job' => 'full-stack',
        'experience' => 4
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <!-- loop for array -->
    <?php for ($i = 0; $i < count($array); $i++) {  ?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $array[$i]['name']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $array[$i]['job']; ?></h6>
                <p class="card-text"><?php echo $array[$i]['experience']; ?></p>
            </div>
        </div>
        <br>
    <?php  } ?>
</body>

</html>