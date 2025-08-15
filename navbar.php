<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Navbar</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        nav{
            background-color: #333;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }

        nav ul{
            display: flex;
            list-style: none;
        }

        nav ul li a{
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
        }

        nav ul li a:hover{
            background-color: #444;
        }
    </style>
</head>
<body>
<nav aria-label="Main navigation">
    <ul>
        <li><a href="fibonacci.php">Fibonacci</a></li>
        <li><a href="numerosPrimos.php">Numeros Primos</a></li>
        <li><a href="palindromo.php">Palindromo</a></li>
    </ul>
</nav>
</body>
</html>