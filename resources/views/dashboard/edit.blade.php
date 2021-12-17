@include('dashboard/base')

<style>
    .container-edit{
        width:800px;
        margin:50px auto 10px;
    }
    .container-name{
        font-size:30px;
        margin:10px 0;
        font-weight:bold;
    }
    .grid-table{
        display:grid;
        grid-template-columns:1fr 4fr;
        padding:10px;
    }
    .head{
        font-weight:bold;
    }
    .input{
        width:300px;
        height:20px;
        padding:5px;
    }
    .textarea{
        width:350px;
        height:75px;
        padding:5px;
    }
    .item-btn{
        margin:20px 10px;
        padding:3px 20px;
        background-color:rgb(34,187,51);
        color:white;
        border-color:rgb(34,187,51);
        border-radius:5px;
        cursor:pointer;
    }
</style>
<form 
@isset($category)
action="{{ route('categories.update', $category) }}" 
@else
action="{{ route('categories.store') }}" 
@endisset
method="POST">
@isset($category)
@method('PUT')
@endisset
@csrf    
<div class="container-edit">
    <div class="container-name">
        @isset($category)
        Edit category
        @else
        Create category
        @endisset
    </div>
    <div class="grid-table">
        <div class="head">Code</div>
        <div><input type="text" name="code" class="input" value="@isset($category) {{ $category->code }} @endisset"></div>
    </div>
    <div class="grid-table">
        <div class="head">Name</div>
        <div><input type="text" name="name" class="input" value="@isset($category) {{ $category->name }} @endisset"></div>
    </div>
    <div class="grid-table">
        <div class="head">Description</div>
        <div><textarea  name="description" class="textarea" >@isset($category) {{ $category->description }} @endisset</textarea></div>
    </div>
    <div class="grid-table">
        <div class="head">Picture</div>
        <div><input name="image" type="file"></div>
    </div>
    <button class="item-btn">Save</button>
</div>
</form>