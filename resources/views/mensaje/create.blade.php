<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<form class="col" action="{{ url('/mensaje') }}" method="POST">
@csrf
    
        <div class="row justify-content-center">
            <div class="col-9 m-0 p-0">
                <input class="form-control" type="text" name="message" placeholder="Escribir mensaje aqui">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            </div>
            
            <div class="col-3 m-0 p-0">
                <button class="btn btn-info btn-block" type="submit">Enviar mensaje</button>
            </div>
        </div>
    
</form>

    </div>
    </div>
</body>
</html>