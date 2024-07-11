<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            font-size: 100px;
            text-align: center;
            color: grey;
            margin-top: 100px;
            margin-bottom: 100px;
        }

        .links{
            margin-top: 50px;
            margin-left: 500px;
            margin-right: 500px;
            
        }

        a{
            text-decoration: None !important;
            font-size: 25px;
            color: black;
            margin-left: 20px;
            margin-right: 20px;
        }

        .content{
            margin-top: 100px;
            margin-bottom: 100px;
            margin-left: 200px;
            margin-right: 200px;
            font-size: 25px;
            color: darkgrey;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-lg-12">
                <h1>@yield("title")</h1>

                <div class="links">
                    <a href="/">Home</a>
                    <a href="/about">About Us</a>
                    <a href="/contact">Contact Us</a>
                </div>

                <div class="content">
                    <p>@yield("page-content")</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>