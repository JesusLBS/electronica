<!DOCTYPE html>
<html>
<head>
    <title>Electronica</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" type="text/css" href="{{asset('css/electronica.css')}}">

</head>
<body>
      <!------------------------------------------------------------------------------------------------------------------------------------------->
            <!-- MAIN CONTENT-->





            <div class="main-content">
                
                <!------------------------------------------------------------------------------------------------------------------------------------------->
                
                @yield('contenido')
                
                <!------------------------------------------------------------------------------------------------------------------------------------------->

                

            </div>




            <!-- END MAIN CONTENT-->
<!------------------------------------------------------------------------------------------------------------------------------------------->
</body>
</html>