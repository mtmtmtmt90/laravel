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
    .select{
        width:300px;
        height:30px;
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
@isset($object)
action="{{ route($url.'.update', $object) }}" 
@else
action="{{ route($url.'.store') }}" 
@endisset
method="POST" enctype="multipart/form-data">
@isset($object)
@method('PUT')
@endisset
@csrf    
<div class="container-edit">
    <div class="container-name">
        {{ $from }}
    </div>
    <div class="grid-table">
        <div class="head">Code</div>
        <div><input type="text" name="code" class="input" value="@isset($object) {{ $object->code }} @endisset"></div>
    </div>
    <div class="grid-table">
        <div class="head">Name</div>
        <div><input type="text" name="name" class="input" value="@isset($object) {{ $object->name }} @endisset"></div>
    </div>
    <div class="grid-table">
        <div class="head">Description</div>
        <div><textarea  name="description" class="textarea" >@isset($object) {{ $object->description }} @endisset</textarea></div>
    </div>
    @isset($categories)
    <div class="grid-table">
        <div class="head">Price</div>
        <div><input type="text" name="price" class="input" value="@isset($object) {{ $object->price }} @endisset"></div>
    </div>
    <div class="grid-table">
        <div class="head">Category</div>
        <div>
            <select name="category_id" class="select">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                    @if ($category->id === $object->category_id)
                    selected
                    @endif    
                    >
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    @endisset
    <div class="grid-table">
        <div class="head">Picture</div>
        <div><input name="image" type="file"></div>
    </div>
    <button class="item-btn">Save</button>
</div>
</form>