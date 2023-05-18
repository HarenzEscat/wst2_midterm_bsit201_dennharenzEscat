<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="register.php" method="POST">
    <div id="signins-status"></div>
        <div>
            <label for="email">email</label>
            <input type="text" name="email" id="email">
        </div>
        
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>

        <div>
            <label for="name">name</label>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <button type="submit">register</button>
        </div>
    </form>
    
</body>
</html>