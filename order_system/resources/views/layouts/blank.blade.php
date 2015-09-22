<!DOCTYPE html>
<html>
    <head>
        <!-- Materialize CSS and JS-->
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <!-- Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified JavaScript + Jquery-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- End materialize -->

        <!-- Custom css-->
        <!--<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">-->

        <title>@yield('title') - Order System</title>
    </head>
    <body>
        <div class='container'>
        <!--Nav bar -->
            <nav>
                <div class="nav-wrapper">
                <a href="#" class="brand-logo">Order System</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="/">Home</a></li>
                </ul>
                </div>
            </nav>
        <!-- Main content -->
        @section('main')
        @show
        </div>
    </body>
    <script>
    $(document).ready(function(){
      $('.scrollspy').scrollSpy();
    });
    </script>
</html>
