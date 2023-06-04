<nav>
    <div class="navContent">
        <li class=""><a href="index.php">Home</a></li>
        <li class="navBtn"><a href="shop.php">Shop</a></li>
        <li class="navBtn">News</li>
        <li class="navBtn">About</li>
        <input class="LogInBtn" style="margin-left: 90rem; margin-top: -0.3rem; position: absolute;" type="button" value="Log In">
    </div>
</nav>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Kanit:ital@1&display=swap');

    nav{
        top: 1;
        z-index: 3;
        width: 100%;
        position: fixed;
        margin-top: 1rem;
    }

    .navContent{
        display: flex;
       justify-content: center;
    }

    a{
        text-decoration: none;
        color: white;
    }
    li{
        list-style: none;
        color: white;
        cursor: pointer;
        font-family: 'Kanit', sans-serif;
    }

    li:hover{
        border-bottom: solid white;
        position: relative;
        transition: 0.2s;
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
        transition: 0.3s;
        font-family: 'Kanit', sans-serif;
    }

    .LogInBtn:hover{
        z-index: 3;
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