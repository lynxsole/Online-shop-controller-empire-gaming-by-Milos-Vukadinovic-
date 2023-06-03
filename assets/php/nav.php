<nav>
    <div class="navContent">
        <li class="">Home</li>
        <li class="navBtn">Shop</li>
        <li class="navBtn">News</li>
        <li class="navBtn">About</li>
        <input class="LogInBtn" style="margin-left: 90rem; margin-top: -0.3rem; position: absolute;" type="button" value="Log In">
    </div>
</nav>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Kanit:ital@1&display=swap');

    nav{
        top: 2;
        width: 100%;3
        height: 30px;
        margin-top: 1rem;
    }

    .navContent{
        display: flex;
       justify-content: center;
    }


    li{
        list-style: none;
        color: white;
        cursor: pointer;
        font-family: 'Kanit', sans-serif;
    }

    .navBtn{
        margin-left: 200px;
    }

    .LogInBtn{
        z-index: 2;
        width: 90px;
        height: 50px;
        color: white;
        border-color: #005AFF;
        cursor: pointer;
        border-radius: 2px;
        background-color:  #03033d;
        font-family: 'Kanit', sans-serif;
    }

    .LogInBtn:hover{
        z-index: 2;
        width: 90px;
        height: 50px;
        color: white;
        border-color: #005AFF;
        cursor: pointer;
        border-radius: 2px;
        background-color:  #005AFF;
        transition: 0.3s;
        font-family: 'Kanit', sans-serif;
    }

</style>