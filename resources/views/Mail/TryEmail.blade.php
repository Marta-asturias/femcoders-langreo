<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscripción</title>
</head>
<body>
    <h1>Probando Correo Electrónico</h1>

     @foreach($participant as $participants)
        <h3>Hemos Recibido tu inscripción {{ $participants->first_name }} </h3>
     @endforeach
    
</body>
</html>