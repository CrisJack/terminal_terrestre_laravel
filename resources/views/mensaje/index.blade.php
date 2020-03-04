<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<div class="container" >
    @foreach ($datos2 as $item)
    <div class="row">
        <div class="col-12 py-0"><h6 class="text-info"><spam class="text-danger">{{$loop->iteration}}::: </spam><b>{{ $item->user->name }} dice: </b></h6></div>
        <div class="col-11 offset-1 py-0"><p>{{ $item->message }}</p> </div>     
    </div>
     @endforeach
</div>
<?php
    header('refresh:1');
?>

</body>
</html>



