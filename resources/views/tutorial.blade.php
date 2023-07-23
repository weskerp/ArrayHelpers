<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>

</head>
<body>
    <div class="col-12 border mt-5 d-flex justify-content-center p-5 border-primary">
        <h5>dado o Array $array = ["TCC", "TCC2", "Inteligencia Artificial"], temos duas formas de mostrar efetuar a separação</h5>
    </div>
    <div class="row col-11 border m-5 border-danger p-4 d-flex justify-content-center">
        <div class="col-5 border border-warning">
            <h3>PHP</h3>
            <p>No PHP podemos utilizar a função implode desta forma implode(", ", $array); onde definimos o tipo de separador e o array a ser utilizaddo, tendo que fazer uma manipulação com outra
                variável para utilizar um separador diferente para separar o penúltimo e último elemento do array;
            </p>
        </div>
        <div class="col-1"></div>
        <div class="col-5 border border-warning">
            <h3>Helpers do Laravel</h3>
            <p>
                Utilizando o helper do laravel podemos utilizar o Arr::join($array, ', ', ' e ') onde escolhe o array a ser utilizado o separador, e opcionalmente
                ja pode escolher um separador diferente para separar o último e penúltimo elementos do array;
            </p>
        </div>
    </div>
</body>
</html>
