@include('dashboard/base')

<style>
    .container-login{
        margin:50px auto 10px;
        width:400px;
        border:1px solid lightgrey;
        border-radius:5px;
        overflow:hidden;
    }
    .container-name{
        padding:3px 5px;
        background-color:rgb(230, 230, 230);
        color:rgb(50, 50, 50);
    }
    .input-place{
        display:flex; 
        justify-content:right;
        width: 350px;
        margin:10px auto;
    }
    .form-input{
        margin:0 30px 0 10px;
        width:200px;
        height:20px;
        transition: outline 0.5s;
    }
    .form-input:focus{
        outline-color: rgba(19, 19, 255, 0.842);
        outline-width:3px;
    }
    form{
        text-align:center;
    }
    .form-btn{
        margin:20px auto;
        font-size:16px;
        padding:3px 50px;
        background-color:rgba(19, 19, 255, 0.842);
        border-radius:5px;
        border-color:rgba(19, 19, 255, 0.842);
        cursor: pointer;
        color:white;
    }
</style>

<div class="container-login">
    <div class="container-name">Authorization</div>
    <form action="#">
        <div class="input-place">
            <label for="mail" class="form-label">E-Mail:</label>
            <input type="text" id="mail" class="form-input">
        </div>
        <div class="input-place">
            <label for="pass" class="form-label">Password:</label>
            <input type="text" id="pass" placeholder="" class="form-input">
        </div>
        <button class="form-btn" formaction="/dashboard/categories">Confirm</button>
    </form>
</div>