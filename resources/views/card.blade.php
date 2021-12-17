<div class="item">
    <div class="item-img" style="background-image: url('{{Storage::url($product->image);}}')"></div>
    <div class="item-name">{{ $product->name }}</div>
    <div class="item-price">{{ $product->price }}$</div>
    <div class="item-options">
        <button class="to-basket" formaction="{{ route('basketAdd', [$product]) }}" formmethod="post"> @csrf To basket</button>
        <button class="about" formaction="{{ route('product', [$product->code]) }}">About</button>
    </div>
</div>
