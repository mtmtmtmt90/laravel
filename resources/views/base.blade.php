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
                background: rgb(15, 15, 15);
                width: 100%;
                
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
                color: rgb(240, 240, 240);
                padding: 10px 10px;
                
            }
        </style>
    </head>
    <body>
        <div class="nav">
            <div class="navbar">
                <div class="navbar-1">
                    <a href="/" class="nav-item" style="font-size: 20px;">MarketPlace</a>
                    <a href="/products" class="nav-item">All products</a>
                    <a href="/categories" class="nav-item">Categories</a>
                    <a href="/basket" class="nav-item">To basket</a>
                    <a href="/reset" class="nav-item">Reset selected</a>
                </div>
                <div class="navbar-2">
                    <a href="/login" class="nav-item">Login</a>
                    <a href="/admin" class="nav-item">Administration Panel</a>
                </div>
            </div>
        </div>
    </body>
</html>
