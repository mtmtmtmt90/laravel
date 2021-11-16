@include('base')

<style>
    .container-order{
        width:800px;
        margin:50px auto 10px;
        text-align:center;
    }
    .container-name{
        font-size:30px;
        margin:10px;
    }
    .container-desc{
        font-size:14px;
        color: rgb(15, 15, 15);
        margin:10px;
    }
    .input-place{
        display:flex; 
        justify-content:space-between;
        width: 350px;
        margin:10px auto;
    }
    .form-label{
        font-weight:bold;
    }
    .form-input{
        width:200px;
        height:20px;
    }
    .form-btn{
        margin:20px 0;
        font-size:16px;
        padding:3px 50px;
        background-color:rgb(34,187,51);
        border-radius:5px;
        border-color:rgb(34,187,51);
        cursor: pointer;
        color:white;
    }
</style>

<div class="container-order">
    <div class="container-name">Confirm your order</div>
    <div class="container-desc">Total cost of order: 2255$</div>
    <div class="container-desc">Put your name and number, to connect with you:</div>
    <form action="#">
        <div class="input-place">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" placeholder="your name..." class="form-input">
        </div>
        <div class="input-place">
            <label for="number" class="form-label">Your number:</label>
            <input type="text" id="number" placeholder="your number..." class="form-input">
        </div>
        <button class="form-btn">Confirm</button>
    </form>
</div>