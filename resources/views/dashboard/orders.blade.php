@include('dashboard/base')

<style>
    .container-orders{
        width:800px;
        margin:50px auto 10px;
    }
    .container-name{
        font-size:30px;
        font-weight:bold;
        margin-bottom:20px;
    }
    .grid-table-head{
        display:grid;
        grid-template-columns:30px 2fr 2fr 2fr 1fr 1fr;
        font-weight:bold;
        border:1px solid lightgrey;
        border-top-left-radius:5px;
        border-top-right-radius:5px;
        background-color:rgb(245, 245, 245);
    }
    .grid-table-head div{
        padding:5px;
    }
    .grid-table-body{
        display:grid;
        grid-template-columns:30px 2fr 2fr 2fr 1fr 1fr;
        border:1px solid lightgrey;
    }
    .grid-table-body div{
        padding:5px;
    }
    .open-order{
        color:white;
        padding:10px;
        background-color:rgb(34,187,51);
        border:none;
        border-radius:5px;
        cursor:pointer;
        transition: opacity 0.5s;
    }
    .open-order:hover{
        opacity:0.8;
    }
    .open-order:active{
        opacity:0.3;
    }
</style>

<div class="container-orders">
    <div class="container-name">Orders</div>
    <div class="grid-table-head">
        <div>#</div>
        <div>Name</div>
        <div>Telephone number</div>
        <div>Order date</div>
        <div>Cost</div>
        <div>Action</div>
    </div>
    @foreach($orders as $order)
        <div class="grid-table-body">
            <div>{{ $order->id }}</div>
            <div>{{ $order->name }}</div>
            <div>{{ $order->phone }}</div>
            <div>{{ $order->updated_at->format('H:i d/m/Y') }}</div>
            <div>{{ $order->totalCost() }}$</div>
            <div>
                <form action="#">
                    <button class="open-order" formaction="{{ route('orders.show', $order) }}">Open</button>
                </form>
            </div>
        </div>
    @endforeach
</div>