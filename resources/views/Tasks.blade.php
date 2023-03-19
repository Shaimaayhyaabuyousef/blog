<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Copatible" content="IE=EDGE">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Docment</title>

    </head>
<body>
    <h1> Tasks:</h1>
    <ul>
        @foreach ($tasks as $task )
<h3>
    <li>
        <?php echo $task>
    </li>
</h3>
        @endforeach
    </ul>
</body>
</html>
