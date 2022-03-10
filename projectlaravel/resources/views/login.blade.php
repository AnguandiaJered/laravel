<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="{{route('authenticate')}}" method="POST">
        @csrf 
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
            <div class="form-group">               
                <input type="submit" class="btn btn-primary" value="Se connecter" >
            </div>
        </form>
    </div>
</body>
</html>