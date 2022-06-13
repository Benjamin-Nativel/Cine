<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/59ecaaffaa.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/myjs.js"></script>
    <link href="{{ asset('./css/app.css')}}" rel="stylesheet" />
    <title>My Page</title>
</head>
<body class="bg-gray-200">
   
    
        @include('layouts.header')
    

   <main class="">
       @yield('main')
</main> 


    @include('layouts.footer')

</body>
</html>