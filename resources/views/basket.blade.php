@include('base')

<style>
    .container-basket{
        width:800px;
        margin:auto;
    }
    .container-name{
        font-size:30px;
        margin-top:50px;
        text-align:center;
    }
    .container-desc{
        text-align:center;
        margin:10px auto;
    }
    .grid-table-head{
        display:grid;
        grid-template-columns: 2fr 1fr 1fr 1fr;
        font-weight:bold;
        padding:10px;
        border-bottom:2px solid lightgrey;
    }
    .grid-table-body{
        display:grid;
        grid-template-columns: 2fr 1fr 1fr 1fr;
        padding:10px;
        border-top:1px solid lightgrey;
        border-bottom:1px solid lightgrey;
        background-color:rgb(240, 240, 240);
    }
    .item-img{
        width:40px;
        height:40px;
        background-size: contain;
        background-position:center;
        background-clip: content-box;
        background-repeat: no-repeat;
    }
    .count{
        background-color:rgb(150,150,150);
        color:white;
        border-radius:50%;
        padding:2px 5px;
        font-size:13px;
    }
    .count-dec{
        cursor: pointer;
        margin-left:10px;
        background-color:rgb(187,33,36);
        color:white;
        padding:3px 8px;
        border-top-left-radius:5px;
        border-bottom-left-radius:5px;
        height:20px;
        margin-top:auto;margin-bottom:auto;
    }
    .count-inc{
        cursor: pointer;
        background-color:rgb(34,187,51);
        color:white;
        padding:3px 7px;
        border-top-right-radius:5px;
        border-bottom-right-radius:5px;
        height:20px;
        margin-top:auto;margin-bottom:auto;
    }
    .count-dec:active, .count-inc:active{
        opacity:0.5;
    }
    .grid-table-foot{
        display:grid;
        grid-template-columns: 4fr 1fr;
        padding:10px;
    }
    .order-button{
        margin-top:20px;
        float:right;
        padding:2px 50px;
        font-size:18px;
        background-color:rgb(34,187,51);
        border-radius:5px;
        border-color:rgb(34,187,51);
        cursor: pointer;
        color:white;
    }
</style>
<form action="#" method="GET"> @csrf
<div class="container-basket">
    <div class="container-name">Basket</div>
    <div class="container-desc">Ordering</div>
    <div class="grid-table-head">
        <div>Name</div>
        <div>Count</div>
        <div>Price</div>
        <div>Cost</div>
    </div>
    <div class="grid-table-body">
        <div style="display:flex;">
            <div class="item-img" style="background-image: url('{{Storage::url('img/iphone-x.jpg');}}')"></div>
            <div style="margin-top:auto;margin-bottom:auto;">IPhone X 256GB</div>
        </div>
        <div style="display:flex;">
            <div style="display:flex;flex-direction:column;justify-content:center;">
                <div class="count">1</div>
            </div>
            <div class="count-dec">-</div>
            <div class="count-inc">+</div>
        </div>
        <div style="margin-top:auto;margin-bottom:auto;">850$</div>
        <div style="margin-top:auto;margin-bottom:auto;">850$</div>
    </div>
    <div class="grid-table-foot">
        <div>Total cost</div>
        <div>850$</div>
    </div>
    <button class="order-button" formaction="/ordering">
        Order
    </button>
</div>
</form>