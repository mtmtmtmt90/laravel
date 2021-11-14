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
        <a href="#">
            <div class="item">
                <div class="item-img" style="background-image: url('{{ Storage::url('img/phones.png') }}')"></div>
                <div class="item-name">Mobile telephones</div>
                <div class="item-desc">There you can find mobile telephones in best price</div>
            </div>
        </a>
        <a href="#">
            <div class="item">
                <div class="item-img" style="background-image: url('{{ Storage::url('img/_20200529162648_wireless-headphones.jpg') }}')"></div>
                <div class="item-name">Portable equipment</div>
                <div class="item-desc">Portable equipment store</div>
            </div>
        </a>
        <a href="#">
            <div class="item">
                <div class="item-img" style="background-image: url('{{ Storage::url('img/appliances.jpg') }}')"></div>
                <div class="item-name">Appliances</div>
                <div class="item-desc">Appliances store</div>
            </div>
        </a>
    </div>
</div>