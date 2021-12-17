<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MarketPlace</title>

        <!-- Fonts -->
        <style>
            *{
                margin: 0;
                padding:0;
            }
            .nav{
                background: rgb(230, 230, 230);
                width: 100%;
                box-shadow: 0px 3px 5px lightgrey;
            }
            .navbar{
                margin: 0 auto;
                width: 800px;
                display: flex;
                justify-content: space-between;
            }
            .navbar-1{
                display: flex;
                justify-content: space-between;
            }
            .navbar-2{
                display:flex;
                justify-content: right;
            }
            .nav-item{
                text-decoration: none;
                color: rgb(100, 100, 100);
                padding: 10px 10px;
                
            }
        </style>
    </head>
    <body>
        <div class="nav">
            <div class="navbar">
                <div class="navbar-1">
                    <a href="/" class="nav-item" style="font-size: 20px;">Back to Site </a>
                    <a href="{{ route('categories.index') }}" class="nav-item">Category</a>
                    <a href="{{ route('products.index') }}" class="nav-item">Products</a>
                    <a href="/dashboard/orders" class="nav-item">Orders</a>
                </div>
            </div>
        </div>
    </body>
</html>
