<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,700;0,900;1,900&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgb(20, 20, 20);
        }

        .container {
            border-radius: 8px;
            width: 25%;
            height: auto;
            background-color: rgb(44, 44, 44);
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }


        .title {
            text-align: center;
            width: 85%;
            margin-top: 20px;
        }

        .form {
            width: 85%;
            text-align: left;
        }

        h1 {
            color: rgb(255, 255, 255);
            margin-bottom: 20px;
        }

        h2 {
            color: rgb(255, 255, 255);
            font-weight: 300;
            font-size: 18px;
            margin-bottom: 20px;
        }

        p {
            /* border: 2px solid red; */
            color: white;
            font-weight: 500;
            margin: 14px 14px;
        }

        .errorlogin {
            font-size: 14px;
            font-weight: 500;
            color: rgb(150, 150, 150);
            text-align: center;
        }

        .input {
            width: 100%;
            background-color: rgb(95, 95, 95);
            border-radius: 4px;
            border: 0;
            outline: none;
            height: 32px;
            margin-top: 6px;
            color: rgb(218, 218, 218);
            font-size: 14px;
            padding: 0 8px;
        }

        button {
            width: 100%;
            background-color: rgb(41, 146, 41);
            color: white;
            border: 0;
            border-radius: 16px;
            outline: none;
            height: 32px;
            font-weight: 600;
            letter-spacing: 1px;
            cursor: pointer;
        }

        .button {
            margin-top:30px;
            margin-bottom: 40px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <article class="title">
            <h1>Home</h1>
        </article>
        <article>
            <h2>Bienvenido, 
                <?php
                    echo $user->getName();
                ?>
            </h2>
        </article>
        <button onclick="location.href='../includes/logout.php'">Cerrar Sesion</button>
    </div>
</body>
</html>