<style>
    .more{
        position:absolute;
        overflow:hidden;
        height:300px;
    }
    .new{
        background:yellow;
        font-size:20px;
        transform-origin: left top;
        transform:rotate(-45deg) translateX(-30px);
        margin:50px 0px;
        width:140px; 
        height:25px;
    }
</style>


<div class="item">
    @if($product->new) 
    <div class="more">
        <div class="new">
            New
        </div>
    </div>
    @endif
    <div class="item-img" style="background-image: url('{{Storage::url($product->image);}}')"></div>
    <div class="item-name">{{ $product->name }}</div>
    <div class="item-price">{{ $product->price }}$</div>
    <div class="item-options">
        <button class="to-basket" formaction="{{ route('basketAdd', [$product]) }}" formmethod="post"> @csrf To basket</button>
        <button class="about" formaction="{{ route('product', [$product->code]) }}">About</button>
    </div>
</div>
