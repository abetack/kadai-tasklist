<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
    　　<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>tasklist</title>
        
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
        
        @include('commons.error_messages')
        
        @include('commons.nav_bar')
        
        @yield('content')
        　
        </div>
        
    </body>
    
</html>