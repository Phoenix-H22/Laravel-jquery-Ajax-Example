<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <!-- Bootstrap cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    </head>
    <body>
        <div class="col-lg-12 text-center mt-5">
            <h1>Bootstrap - Search Box Plugin</h1>
          </div>
          <div class="col-md-4 offset-md-4 mt-5 border border-success pt-3">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search ......" id="search" aria-label="Recipient's username">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-search"></i></span>
            </div>
            </div>
          </div>
          <div class="container">
            <!-- show all products section -->
            <div class="col-lg-12 text-center mt-5">
                <h1>All Products</h1>
                </div>
                <div class="row">
          @foreach ($products as $product)
          <div class="col-3 mt-5">
              <div class="card">
              <div class="card-body">
                  <h5 class="card-title">{{ $product->name }}</h5>
                  <p class="card-text">{{ $product->slug }}</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
              </div>
          </div>
          @endforeach
        </div>
          </div>
        <!-- Scripts -->
        <!-- jQuery cdn -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>
        <!-- Bootstrap cdn -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.1.0/js/fontawesome-iconpicker.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Ajax -->
        <script>
            $(document).ready(function(){
                $('#search').on('keyup',function(){
                    $value=$(this).val();
                    $.ajax({
                        method : 'get',
                        url : "http://localhost/Laravel-jquery-Ajax-Example/public/products",

                        data:{'search':$value},
                        success:function(data){
                            // append data to the div
                            $('.row').html(data);
                        },
                        error:function(){
                            console.log('error');
                        }
                    });
                })
            })
        </script>
        <script>
            $(document).ready(function(){
                $('#search').on('keyup',function(){
                    $value = $(this).val()
                    $.ajax({
                        method: 'post',
                        url: "http://localhost/Laravel-jquery-Ajax-Example/public/products",
                        data: {
                            'name':'first',
                            'slug':'tezst'
                        },
                        success: function(data){
                            $('.row').html(data)
                        },
                        error: function(data){
                            console.log('data')
                        }

                    })
                })
            })
        </script>
    </body>
</html>
