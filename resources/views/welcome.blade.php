<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Fonts -->
{{--         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
 --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
        
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app1.css')}}">
        
        <link rel="icon" href="http://localhost/terapias/public/images/principal.png">
        
{{--         <link rel="stylesheet" href="animate.min.css">

 --}}
     
        <!-- Styles -->

        

        <meta name="csrf-token" value="{{ csrf_token() }}" />
    </head>
    <body>
        
            <div id="app">

            </div>

        <script src="{{asset('js/app.js')}}"></script>
        
       
        
    </body>
</html>
