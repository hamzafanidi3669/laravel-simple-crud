<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        table{
            margin:40px;
            padding:10px;
        }
    </style>
</head>
<body>
    <a href="/insert" class="btn btn-primary">INSERER</a> <br> <br>

<table class="table table-stripped">
    <tr>
        <th>ID</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>ACTIONS</th>
    </tr>
    @foreach($affich as $i)
    <tr>
        <td>{{$i->id}}</td>
        <td>{{$i->nom}} </td>
        <td>{{$i->prenom}}</td>
        <td>
            <a href="edit?id={{$i->id}}" class="btn btn-outline-secondary">EDIT</a>
            <a href="delete?id={{$i->id}}" onclick="return confirm('Are you sure?')" class="btn btn-outline-danger">DELETE</a>
            {{-- <a href="/view?id={{$i->id}}" class="btn btn-outline-dark">VIEW</a> --}}
        </td>

    </tr>
    @endforeach

</table>







</body>
</html>
