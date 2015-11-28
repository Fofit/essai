<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
</head>
    <body>
        <div class="jumbotron text-center" style="background-color:#3B8686; color:#E8EDEF; margin-bottom:0; padding-top:6px; padding-bottom:6px;">
            <h1>Hyphen</h1>
            <p>Notre application de génie</p>
        </div>
        <nav class="navbar navbar-inverse" style="background-color:#79BD9A">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Page 1</a></li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="#">Page 3</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
        <footer class="footer" style="background-color:red">
            Footer
        </footer>
    </body>

</html>
