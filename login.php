<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="navbar">
        <div class="left">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
            </ul>
        </div>
        <div class="middle">
            <img src="images/humorous-playful-this-monkey-glasses-polka-dot-tie-is-sure-bring-smile-your-face-closeup-portrait-yellow-background-ai-generative_143683-13068.avif" alt="">
        </div>
        <div class="right">
            <ul>
                <li><a href="index.php">Sign up</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
    </div>
<div class="container">
        <div class="formsection">
            <form action="loginhandler.php" method="post">
                <h1>Login</h1>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required><br>
                <label for="password">Password:</label>
                <input type="password" name="pwd" id="pwd" required><br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>