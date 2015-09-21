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
                    <li><a href="/">Customers</a></li>
                    <li><a href="/">Menu</a></li>
                    <li><a href="/">Admin</a></li>
                </ul>
                </div>
            </nav>
        <!-- Main content -->
        
            <div class='row'>
                <div class="col s9">
                    @section('main')
                        This is where the main content will go
                    @show
                </div>
                <div class="col s3">
                    @section('sidebar')
                        sidebar stuff
                    @show
                </div>
            </div>
            
        </div>
        @section('action-buttons')
        <!-- Fixed Action Button -->
        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large red">
              <i class="large material-icons">add</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="small material-icons">insert_chart</i></a></li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">perm_identity</i></a></li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
            </ul>
        </div>
        <!-- End fixed Action Button -->
        @show
    </body>
    <script>
    $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
</script>
</html>