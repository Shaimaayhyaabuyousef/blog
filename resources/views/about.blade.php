<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Copatible" content="IE=EDGE">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Docment</title>

    </head>
<body>
   <h1> My name is <?php echo $name ;?> </h1>
   <form action="" method="get">
   @csrf
   <input type="text" name="name" id="name">
   <input type="submit" value="send">
   </form>
</body>
</html>
