<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-com website</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{ View::make('header') }}
    <div>
        @yield('content') 
    </div>
    {{ View::make('footer') }}
   




    {{-- <script>
        $(document).ready(function(){
            $('button').click(function(){
                alert('all set');
            })
        })
    </script> --}}
</body>
<style>
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    .slide-img{
        height: 400px !important;
    }
    .text-color{
        background-color: rgb(167, 214, 214);
    }
    .custom-product{
        height: 570px;
    }

    .trending-img{
        height: 100px;
    }
    .trending-items{
        float:left;
        width: 16.667%;
    }
    .tranding-wrapper{
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .detail-img{
        height: 200px;
    }
    .search-box{
        width: 500px !important;
    }
    .cart-item-divider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding: 10px;
    }
</style>
</html>