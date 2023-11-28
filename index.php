<?php 
// snack 1
$matches = [
    [
        'homeTeam' => 'Los Angeles Lakers',
        'awayTeam' => 'Brooklyn Nets',
        'homePoints' => 82,
        'awayPoints' => 68
    ],
    [
        'homeTeam' => 'New Orleans Pelicans',
        'awayTeam' => 'Chicago Bulls',
        'homePoints' => 55,
        'awayPoints' => 111
    ]
];


foreach($matches as $match){
    echo $match['homeTeam'] . '-' . $match['awayTeam'] . '|' . $match['homePoints'] . '-' . $match['awayPoints'] . '<br>';
}

//fine snack 1

//snack 2



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="get">
        <label for="name">Name: </label>
        <input type="text" name="name" required>

        <label for="mail">Mail: </label>
        <input type="text" name="mail" required>

        <label for="age">Age: </label>
        <input type="text" name="age">

        <button type="submit">Submit</button>
    </form>

</body>
</html>