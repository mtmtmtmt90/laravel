@include('base')

<style>
    .container-category{
        width: 800px;
        margin: auto;
    }
    .category{
        text-align: center;
        margin:50px auto;
    }
    .item{
        margin-top: 30px;
    }
    .item-img{
        margin: 5px auto;
        height: 75px;
        background-position: center;
        background-clip: content-box;
        background-repeat: no-repeat;
        background-size: contain;
    }
    .item-name{
        margin: 5px auto;
        font-size: 25px;
    }
    a{
        text-decoration: none;
        color: inherit;
    }
</style>
<div class="container-category">
    <div class="category">
        @foreach($categories as $category)
        <a href="/{{ $category->code }}">
            <div class="item">
                <div class="item-img" style="background-image: url('{{ Storage::url('img/phones.png') }}')"></div>
                <div class="item-name">{{ $category->name }}</div>
                <div class="item-desc">{{ $category->description }}</div>
            </div>
        </a>
        @endforeach
        
    </div>
</div>