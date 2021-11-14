<!DOCTYPE html>
<html>
    <head>
        <title>Authentification</title>
        <meta charset="UTF-8">    
    </head>
    <body>
        <form action="/auth" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Name</label><input type="text" name="name"><br>
            <label>password</label><input type="text" name="pass"><br>
            <input type="submit" value="Press">
        </form>
    </body>
</html>