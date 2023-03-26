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
    <form>
    <ul>
        @foreach ($tasks as $task )
       <h3>
    <li>
      {{$task->name}}
    </li>
        </h3>
        @endforeach
    </ul>
    </form>
</body>
</html>
