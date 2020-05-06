<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/signin.css">
</head>

<body>
    <div class="bg-img">
        <form action="main" class="container">
            <h1> Login </h1>
            <label for="email"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" required>

            <button type="submit" class="btn ">Login</button>
            <hr>
            <a href="http://localhost/mymedia/signup"><button type="button" class="btn ">Signup</button></a>
            <hr>
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
            </label>
        </form>
    </div>
</body>

</html>