@include('dashboard/base')

<style>
    .container-products{
        width:800px;
        margin:50px auto 10px;
    }
    .container-name{
        font-size:30px;
        margin-bottom:10px;
        font-weight:bold;
    }
    .grid-table-head{
        margin-top:20px;
        display:grid;
        grid-template-columns: 30px 2fr 2fr 2fr 50px 2fr;
        font-weight:bold;
        padding:10px;
        border-top:1px solid lightgrey;
    }
    .grid-table-body{
        display:grid;
        grid-template-columns: 30px 2fr 2fr 2fr 50px 2fr;
        padding:10px;
        border-top:1px solid lightgrey;
        border-top:1px solid lightgrey;
        
    }
    .item-btn{
        padding:3px 10px;
        margin-top:20px;
        background-color:rgb(34,187,51);
        color:white;
        border-color:rgb(34,187,51);
        border-radius:5px;
        cursor:pointer;
        font-size:16px;
    }
    .open-btn{
        padding:3px 10px;
        background-color:rgb(34,187,51);
        color:white;
        border-color:rgb(34,187,51);
        border-radius:5px;
        cursor:pointer;
    }
    .edit-btn{
        padding:3px 10px;
        background-color:rgb(255,204,0);
        color:white;
        border-color:rgb(255,204,0);
        border-radius:5px;
        cursor:pointer;
    }
    .del-btn{
        padding:3px 10px;
        background-color:rgb(204,51,0);
        color:white;
        border-color:rgb(204,51,0);
        border-radius:5px;
        cursor:pointer;
    }
</style>
<form action="#" method="POST">
@method('DELETE')
@csrf    
<div class="container-products">
<div class="container-name">Products</div>
    <div class="grid-table-head">
        <div>#</div>
        <div>Code</div>
        <div>Name</div>
        <div>Category</div>
        <div>Price</div>
        <div>Actions</div>
    </div>
    @foreach($products as $product)
    <div class="grid-table-body">
        <div>{{ $product->id }}</div>
        <div>{{ $product->code }}</div>
        <div>{{ $product->name }}</div>
        <div>{{ $product->category()->first()->name }}</div>
        <div>{{ $product->price }}</div>
        <div>
            <button class="open-btn" formaction="{{ route('products.show', $product) }}" formmethod="GET">Open</button>
            <button class="edit-btn" formaction="{{ route('products.edit', $product) }}" formmethod="GET">Edit</button>
            <button class="del-btn" formaction="{{ route('products.destroy', $product) }}">Delete</button>
        </div>
    </div>
    @endforeach
    
    <button class="item-btn" formaction="{{ route('products.create') }}" formmethod="GET">Add product</button>
</div>
</form>