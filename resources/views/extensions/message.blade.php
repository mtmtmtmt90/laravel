<style>
    .alert{
        position:fixed;
        padding:20px;
        right:20px;
        bottom:20px;
        width:250px;
        min-height:50px;
        border-top-left-radius:10px;
        border-top-right-radius:10px;
        border-bottom-left-radius:10px;
        color:#5B5B5B;
        font-size:20px;
        text-align:center;
        animation-name: popup;
        animation-duration:0.3s;
        animation-timing-function:linear;
        transform-origin:right bottom;
        transition: opacity 0.5s;
    }
    @keyframes popup {
        0%{
            transform: scale(0);
        }
        100%{
            transform: scale(1);
        }
    }
    .success{
        background-color:#66FF66;
    }
    .warning{
        background-color:#F1C232;
    }
</style>

<div class="alert success" id="alert">
    <span>Product added to basket</span>
</div>

<script>
    function alertOut() {
        let v = document.getElementById('alert');
        setTimeout(function() {v.style.opacity = '0'}, 3000)
    }
    document.onload = alertOut()
</script>