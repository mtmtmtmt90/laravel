@include('dashboard/base')

<style>
    .container-open{
        width:800px;
        margin:50px auto 10px;
    }
    .container-name{
        font-size:30px;
        margin:10px 0;
    }
    .grid-table-head{
        display:grid;
        grid-template-columns:1fr 3fr;
        padding:10px;
        font-weight:bold;
        border-top:1px solid lightgrey;
    }
    .grid-table-body{
        display:grid;
        grid-template-columns:1fr 3fr;
        padding:10px;
        border-top:1px solid lightgrey;
    }
    .item-img{
        width:200px;
        height:200px;
        background-size:contain;
        background-position:center;
        background-clip: content-box;
        background-repeat: no-repeat;
    }
</style>

<div class="container-open">
    <div class="container-name">{{ $from . '  ' . $object->name }}</div>
    <div class="grid-table-head">
        <div>Field</div>
        <div>Meaning</div>
    </div>
    <div class="grid-table-body">
        <div>ID</div>
        <div>{{ $object->id }}</div>
    </div>
    <div class="grid-table-body">
        <div>Code</div>
        <div>{{ $object->code }}</div>
    </div>
    <div class="grid-table-body">
        <div>Name</div>
        <div>{{ $object->name }}</div>
    </div>
    <div class="grid-table-body">
        <div>Description</div>
        <div>{{ $object->description }}</div>
    </div>
    <div class="grid-table-body">
        <div>Picture</div>
        <div class="item-img" style="background-image: url('{{Storage::url('img/iphone-x.jpg');}}')"></div>
    </div>
    <div class="grid-table-body">
        @if ($from === 'Category') 
        <div>Products count</div>
        <div>{{ $object->products()->count() }}</div>
        @else
        <div>Category</div>
        <div>Mobile telephones</div>
        @endif
    </div>
</div>