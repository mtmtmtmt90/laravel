@include('dashboard/base')

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
    <div class="container-name">Order №1</div>
    <div>Ordered by: <strong>Muhammet Hudayberdyyew</strong></div>
    <div>Telephone number: <strong>+99365071508</strong></div>
    <div class="grid-table-head">
        <div>Name</div>
        <div>Count</div>
        <div>Price</div>
        <div>Cost</div>
    </div>
    <div class="grid-table-body">
        <div style="display:flex;">
            <div class="item-img" style="background-image: url('{{Storage::url('img/iphone-x.jpg');}}')"></div>
            <div style="margin-top:auto;margin-bottom:auto;">IPhone X 256GB</div>
        </div>
        <div style="display:flex;">
            <div style="display:flex;flex-direction:column;justify-content:center;">
                <div class="count">2</div>
            </div>
        </div>
        <div style="margin-top:auto;margin-bottom:auto;">850$</div>
        <div style="margin-top:auto;margin-bottom:auto;">1700$</div>
    </div>
    <div class="grid-table-body">
        <div style="display:flex;">
            <div class="item-img" style="background-image: url('{{Storage::url('img/beats.jpeg');}}')"></div>
            <div style="margin-top:auto;margin-bottom:auto;">Beats Pro</div>
        </div>
        <div style="display:flex;">
            <div style="display:flex;flex-direction:column;justify-content:center;">
                <div class="count">1</div>
            </div>
        </div>
        <div style="margin-top:auto;margin-bottom:auto;">130$</div>
        <div style="margin-top:auto;margin-bottom:auto;">130$</div>
    </div>
    <div class="grid-table-foot">
        <div>Total cost</div>
        <div>1830$</div>
    </div>
</div>