@include('base', ['file' => 'myOrders'])

<style>
    .container-order{
        width:800px;
        margin:50px auto 10px;
    }
    .container-name{
        margin:10px 0;
        font-size:30px;
        font-weight:bold;
    }
    .grid-table-head{
        margin-top:20px;
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
    .grid-table-foot{
        display:grid;
        grid-template-columns: 4fr 1fr;
        padding:10px;
    }
</style>

<div class="container-order">
    <div class="container-name">Order №{{ $order->id }}</div>
    <div>Ordered by: <strong>{{ $order->name }}</strong></div>
    <div>Telephone number: <strong>{{ $order->phone }}</strong></div>
    <div class="grid-table-head">
        <div>Name</div>
        <div>Count</div>
        <div>Price</div>
        <div>Cost</div>
    </div>
    @foreach($order->products as $product)
    <div class="grid-table-body">
        <div style="display:flex;">
            <div class="item-img" style="background-image: url('{{Storage::url($product->image);}}')"></div>
            <div style="margin-top:auto;margin-bottom:auto;">{{ $product->name }}</div>
        </div>
        <div style="display:flex;">
            <div style="display:flex;flex-direction:column;justify-content:center;">
                <div class="count">{{ $product->pivot->count }}</div>
            </div>
        </div>
        <div style="margin-top:auto;margin-bottom:auto;">{{ $product->price }}$</div>
        <div style="margin-top:auto;margin-bottom:auto;">{{ $product->getCost() }}$</div>
    </div>
    @endforeach
    <div class="grid-table-foot">
        <div>Total cost</div>
        <div>{{ $order->totalCost() }}$</div>
    </div>
</div>