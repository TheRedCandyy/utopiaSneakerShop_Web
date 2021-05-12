<div class="desktop">
    <div class="navbar">
        <a class="img inline" href="?active=home"><img src="images/logo_website.png"></a>
        <div class="limpa"></div>
        <ul>
            <a href="?active=Adidas"><li>ADIDAS</li></a>
            <a href="?active=Nike"><li>NIKE</li></a>
            <a href="?active=Jordan"><li>JORDAN</li></a>
            <a href="?active=Supreme"><li>SUPREME</li></a>
            <a href="?active=All"><li>ALL</li></a>
            <a href="?active=Contact"><li class="alignRight">CONTACT US</li></a>
        </ul>
    </div><div class="limpa"></div>
    <hr>
</div>
<div class="mobile">
    <div class="navbar">
        <a class="inline" href="?active=home"><img src="images/logo_website.png"></a>
        <i onclick="navbarOpen()" class="hamburguer_navbar icon fa fa-bars"></i>
        
        <div class="limpa"></div>
        <div id="navbar_menu">
            <ul>
                <a href="?active=Adidas"><li>ADIDAS</li></a>
                <a href="?active=Nike"><li>NIKE</li></a>
                <a href="?active=Jordan"><li>JORDAN</li></a>
                <a href="?active=Supreme"><li>SUPREME</li></a>
                <a href="?active=All"><li>ALL</li></a>
                <a href="?active=Contact"><li>CONTACT US</li></a>
            </ul>
        </div>
    </div><div class="limpa"></div>
    <hr>
</div>

<script>
    function navbarOpen(){
        if(document.getElementById("navbar_menu").style.display === "block"){
            document.getElementById("navbar_menu").style.display = "none";
        }else{
            document.getElementById("navbar_menu").style.display = "block";
        }
    }
</script>