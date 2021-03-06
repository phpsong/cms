<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lavalite PHP Framework</title>
    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:700);

        body {
            margin:0;
            font-family:'Lato', sans-serif;
            text-align:center;
            color: #999;
        }

        .welcome {
            width: 300px;
            height: 200px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -150px;
            margin-top: -100px;
        }

        a, a:visited {
            text-decoration:none;
        }

        h1 {
            font-size: 32px;
            margin: 16px 0 0 0;
        }
    </style>
</head>
<body>
    <div class="welcome">
        <a href="http://laravel.com" title="Laravel PHP Framework"><img alt="" src="data:image/png;base64,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" /></a>
        <h1>Welcome to lavalite.</h1>
    </div>
</body>
</html>
