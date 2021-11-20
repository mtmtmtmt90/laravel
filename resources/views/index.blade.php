@extends('base', ['file' => 'index'])

@section('content')
<style>
    .container-name{
        margin: 50px 0 10px;
        font-size: 40px;
        text-align: center;
    }
    .products{
        display: flex;
        flex-wrap: wrap;
    }
    .item{
        width: 230px;
        margin: 10px 15px;
        border: 1px solid lightgrey;
        border-radius: 7px;
        text-align: center;
    }
    .item-img{
        margin: 5px auto;
        width: 200px;
        height: 200px;
        background-position: center;
        background-clip: content-box;
        background-repeat: no-repeat;
        background-size: contain;
    }
    .item-name{
        font-size: 25px;
        margin: 5px auto;
    }
    .item-price{
        margin: 5px auto;
    }
    button{
        width: 75px;
        height: 30px;
        margin: 5px auto;
        border:1px solid lightgrey;
        border-radius: 5px;
        cursor: pointer;
    }
    button:active{
        opacity: 0.5;
    }
    .to-basket{
        background-color: rgba(19, 19, 255, 0.842);
        color: white;
        border: 0;
    }
    .about{
        background-color: white;
        color: rgb(15,15,15);
    }
</style>
<form action="#" method="POST"> @csrf
    <div class="container-name">{{ isset($category) ? $category->name : "All products" }}</div>
    <div class="products">
        <div class="item">
            <div class="item-img" style="background-image: url('{{Storage::url('img/beats.jpeg');}}')"></div>
            <div class="item-name">Beats Pro</div>
            <div class="item-price">130$</div>
            <div class="item-options">
                <button class="to-basket">To basket</button>
                <button class="about" formaction="/product/iphone_x_256">About</button>
            </div>
        </div>
        <div class="item">
            <div class="item-img" style="background-image: url('{{Storage::url('img/braun.jpg');}}')"></div>
            <div class="item-name">Braun</div>
            <div class="item-price">150$</div>
            <div class="item-options">
                <button class="to-basket">To basket</button>
                <button class="about">About</button>
            </div>
        </div>
        <div class="item">
            <div class="item-img" style="background-image: url('{{Storage::url('img/go-pro.jpg');}}')"></div>
            <div class="item-name">Go Pro</div>
            <div class="item-price">55$</div>
            <div class="item-options">
                <button class="to-basket">To basket</button>
                <button class="about">About</button>
            </div>
        </div>
        <div class="item">
            <div class="item-img" style="background-image: url('{{Storage::url('img/huawei-p40-pro-plus.jpg');}}')"></div>
            <div class="item-name">Huawei P40 Pro Plus</div>
            <div class="item-price">450$</div>
            <div class="item-options">
                <button class="to-basket">To basket</button>
                <button class="about">About</button>
            </div>
        </div>
        <div class="item">
            <div class="item-img" style="background-image: url('{{Storage::url('img/iphone-x.jpg');}}')"></div>
            <div class="item-name">IPhone X 256GB</div>
            <div class="item-price">850$</div>
            <div class="item-options">
                <button class="to-basket">To basket</button>
                <button class="about">About</button>
            </div>
        </div>
        <div class="item">
            <div class="item-img" style="background-image: url('{{Storage::url('img/iphone-x-purple.jpeg');}}')"></div>
            <div class="item-name">IPhone X Purple 256GB</div>
            <div class="item-price">860$</div>
            <div class="item-options">
                <button class="to-basket">To basket</button>
                <button class="about">About</button>
            </div>    
        </div>    
        <div class="item">
            <div class="item-img" style="background-image: url('{{Storage::url('img/samsung-s20.jpg');}}')"></div>
            <div class="item-name">Samsung S20</div>
            <div class="item-price">650$</div>
            <div class="item-options">
                <button class="to-basket">To basket</button>
                <button class="about">About</button>
            </div>
        </div>
    </div>
</form>
@endsection