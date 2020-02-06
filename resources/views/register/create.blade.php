<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>fadfsa</h1>

    <form action="/register" method="POST">
        @csrf
        <div class="form-grop">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" />
        </div>
        <div class="form-grop">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" />
        </div>
        <div class="form-grop">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" />
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>
</html>