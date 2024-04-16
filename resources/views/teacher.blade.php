<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xablau</title>
</head>
<body>
    <h1>Professor / Materia</h1>
    @foreach($teacher as $Prof)

        <p> {{$Prof -> nome}} {{$Prof -> sobrenome}}</p>


    @endforeach

    @foreach($matter as $Mat)

       <p> {{$Mat -> materia}} </p>  

    @endforeach
    
</body>
</html>