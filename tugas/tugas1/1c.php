<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 1c</title>
</head>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .container {
            left: auto;
            display: flex;
            flex-wrap: nowrap;
        }

        .green-box {
            width: 100px;
            height: 100px;
            background-color: #ffff;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            border: 1px solid black;
        }
    </style>
<body>
    <div class="container">
        <div class="green-box">1</div>
    </div>

    <div class="container">
        <div class="green-box">2</div>
        <div class="green-box">2</div>
    </div>

    <div class="container">
        <div class="green-box">3</div>
        <div class="green-box">3</div>
        <div class="green-box">3</div>
    </div>
</body>
</html>