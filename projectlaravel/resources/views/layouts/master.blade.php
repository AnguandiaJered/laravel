<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style>
        #menu{
            background-color:#233050;
            height:50px;
            position: relative;
        }
        #menu li{
            display:inline-block;
            list-style-type:none;
            margin:5px;
        }
        #menu a{
            color:#fff;
            text-decoration:none;
        }
    </style>
</head>
<body>
   <ul id="menu">
       <li><a href="/etudiants">Etudiant</a></li>
       <li><a href="/categorie">Categories</a></li>
   </ul>

   @yield('content')
</body>
</html>