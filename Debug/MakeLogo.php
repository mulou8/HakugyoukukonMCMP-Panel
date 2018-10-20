<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logo</title>
    <link rel="preload" href="/static/fonts/nico.ttf" as="en" type="font/ttf" crossorigin>
    <style>

        body{
            background-color: #f1f1f1;
            font-family: '微软雅黑';
        }

        @font-face{
            font-family: 'Nico';
            font-display:auto;
            src: url('/static/fonts/Nico.ttf');
        }
    </style>
</head>
<body>
<center style="">
    <p style="font-size: <?php echo $_GET['size']?>px;margin: 0; color: #13c0ff;background-color: rgba(0, 0, 0, 0.81);padding-top: 6px;padding-bottom: 7px;">
        HMCSMP
    </p>
</center>
</body>
</html>