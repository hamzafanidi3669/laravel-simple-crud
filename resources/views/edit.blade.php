<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        form{
            position: relative;
            left:550px;
            top:200px;
        }
    </style>

</head>
<body>
    <h1>EDIT PAGE</h1>
    <form action="savedata" class="w-25 " method="get">
        @csrf
        id:
        <input  class='form-control' value="{{$edit[0]->id}}" type="text"  placeholder="id" name="id"> <br>
        nom:
        <input class='form-control' value="{{$edit[0]->nom}}" type="text" placeholder="nom" name="nom"> <br>
        prenom:
        <input class='form-control' value="{{$edit[0]->prenom}}" type="text" placeholder="prenom" name="prenom"> <br>
        <button  class='btn btn-dark' name="submit">submit</button>
        <a href="afficher" class="btn btn-outline-primary">afficher</a>

    </form>
</body>
</html>