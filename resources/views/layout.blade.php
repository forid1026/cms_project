<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CMS</title>
    <link rel="stylesheet" href="backend/css/bootstrap.min.css">
    {{-- Main CSS --}}
    <link rel="stylesheet" href="backend/css/style.css">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>

<script src="backend/js/bootstrap.bundle.min.js"></script>
<script src="backend/js/bootstrap.min.js"></script>
<script>
    
</script>
</html>