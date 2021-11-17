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
<form action="#">
<div class="container-products">
<div class="container-name">Categories</div>
    <div class="grid-table-head">
        <div>#</div>
        <div>Code</div>
        <div>Name</div>
        <div>Category</div>
        <div>Price</div>
        <div>Actions</div>
    </div>
    <div class="grid-table-body">
        <div>1</div>
        <div>iphone_x_256</div>
        <div>iPhone X 256</div>
        <div>Mobile telephones</div>
        <div>850$</div>
        <div>
            <button class="open-btn" formaction="/dashboard/open">Open</button>
            <button class="edit-btn">Edit</button>
            <button class="del-btn">Delete</button>
        </div>
    </div>
    <div class="grid-table-body">
        <div>2</div>
        <div>beats_pro</div>
        <div>Beats Pro</div>
        <div>Portable equipment</div>
        <div>130$</div>
        <div>
            <button class="open-btn">Open</button>
            <button class="edit-btn">Edit</button>
            <button class="del-btn">Delete</button>
        </div>
    </div>
    <div class="grid-table-body">
        <div>3</div>
        <div>braun</div>
        <div>Braun</div>
        <div>Appliances</div>
        <div>150$</div>
        <div>
            <button class="open-btn">Open</button>
            <button class="edit-btn">Edit</button>
            <button class="del-btn">Delete</button>
        </div>
    </div>
    <div class="grid-table-body">
        <div>4</div>
        <div>go_pro</div>
        <div>Go Pro</div>
        <div>Portable equipment</div>
        <div>55$</div>
        <div>
            <button class="open-btn">Open</button>
            <button class="edit-btn">Edit</button>
            <button class="del-btn">Delete</button>
        </div>
    </div>
    <div class="grid-table-body">
        <div>5</div>
        <div>huawei_p40_pro_plus</div>
        <div>Huawei P40 Pro Plus</div>
        <div>Mobile telephones</div>
        <div>450$</div>
        <div>
            <button class="open-btn">Open</button>
            <button class="edit-btn">Edit</button>
            <button class="del-btn">Delete</button>
        </div>
    </div>
    <button class="item-btn">Add the category</button>
</div>
</form>