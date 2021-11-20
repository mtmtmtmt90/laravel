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
            .browse{
                background-color:rgb(50, 50, 50);
            }
            .container-all{
                width: 800px;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <div class="nav">
            <div class="navbar">
                <div class="navbar-1">
                    <a href="{{ route('index') }}" class="nav-item" style="font-size: 20px;">MarketPlace</a>
                    <a href="{{ route('index') }}" 
                    @if (isset($file))
                        @if($file === 'index')
                        class="nav-item browse"
                        @else class="nav-item"
                        @endif
                    @else class="nav-item"    
                    @endif
                    >All products</a>
                    <a href="{{ route('categories') }}"
                    @if (isset($file))
                        @if($file === 'category')
                        class="nav-item browse"
                        @else class="nav-item"
                        @endif
                    @else class="nav-item"    
                    @endif
                    >Categories</a>
                    <a href="{{ route('basket') }}"
                    @if (isset($file))
                        @if($file === 'basket')
                        class="nav-item browse"
                        @else class="nav-item"
                        @endif
                    @else class="nav-item"    
                    @endif
                    >To basket</a>
                    <a href="/reset" class="nav-item">Reset selected</a>
                </div>
                <div class="navbar-2">
                    <a href="/login" class="nav-item">Login</a>
                    <a href="/dashboard/login" class="nav-item">Administration Panel</a>
                </div>
            </div>
        </div>
        <div class="container-all">
            @yield('content')
        </div>
    </body>
</html>
