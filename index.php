<?php
include 'template.php';

?>

<?= template_head("Home") ?>

<body>

<header>
    <div class="header">
        <a href="#" class="logo"><img class="logoImg" src="source/logo1.png" alt=""></a>
        <a href="#" class="favBtn"><i class="fa-solid fa-heart"></i></a>
        <i id="HamburgerMenu" class="fa-solid fa-bars hamburgerBtn"></i>
    </div>

    <navigationBar id="nav" class="navigationBarContainer navigationBarHide">
        <ul class="navigationBarList">
            <li class="navItem"><a href="" class="navLink">Filter</a></li>
            <li class="navItem"><a href="" class="navLink">Aanbieders</a></li>
            <li class="navItem"><a href="" class="navLink">Reviews</a></li>
            <li class="navItem"><a href="" class="navLink">Login</a></li>
        </ul>
    </navigationBar>

</header>


<main>
    <searchbar class="searchSection">
        <form action="" class="searchForm">
            <input class="searchBar" type="text" placeholder="Search..">
        </form>
    </searchbar>

    <section class="productSection">
        <div class="productContainer">
            <product class="product">
                <left class="productLeft">
                    <productTitle class="productTitle">
                        Product 1
                    </productTitle>
                    <description class="productDescription">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit incidunt nobis placeat, sapiente
                        temporibus velit voluptate? Aspernatur, assumenda facilis libero nisi qui vitae voluptatibus!
                    </description>
                </left>
                <img src="source/(NEW)%20Wasted%20logo-geen%20tekst.png" alt="productImg" class="productImg">
            </product>
            <product class="product">
                <left class="productLeft">
                    <productTitle class="productTitle">
                        Product 2
                    </productTitle>
                    <description class="productDescription">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit incidunt nobis placeat, sapiente
                        temporibus velit voluptate? Aspernatur, assumenda facilis libero nisi qui vitae voluptatibus!
                    </description>
                </left>
                <img src="source/(NEW)%20Wasted%20logo-geen%20tekst.png" alt="productImg" class="productImg">
            </product>
            <product class="product">
                <left class="productLeft">
                    <productTitle class="productTitle">
                        Product 3
                    </productTitle>
                    <description class="productDescription">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit incidunt nobis placeat, sapiente
                        temporibus velit voluptate? Aspernatur, assumenda facilis libero nisi qui vitae voluptatibus!
                    </description>
                </left>
                <img src="source/(NEW)%20Wasted%20logo-geen%20tekst.png" alt="productImg" class="productImg">
            </product>
            <product class="product">
                <left class="productLeft">
                    <productTitle class="productTitle">
                        Product 4
                    </productTitle>
                    <description class="productDescription">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit incidunt nobis placeat, sapiente
                        temporibus velit voluptate? Aspernatur, assumenda facilis libero nisi qui vitae voluptatibus!
                    </description>
                </left>
                <img src="source/(NEW)%20Wasted%20logo-geen%20tekst.png" alt="productImg" class="productImg">
            </product>
            <product class="product">
                <left class="productLeft">
                    <productTitle class="productTitle">
                        Product 5
                    </productTitle>
                    <decription class="productDescription">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit incidunt nobis placeat, sapiente
                        temporibus velit voluptate? Aspernatur, assumenda facilis libero nisi qui vitae voluptatibus!
                    </decription>
                </left>
                <img src="source/(NEW)%20Wasted%20logo-geen%20tekst.png" alt="productImg" class="productImg">
            </product>
            <product class="product">
                <left class="productLeft">
                    <productTitle class="productTitle">
                        Product 6
                    </productTitle>
                    <description class="productDescription">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit incidunt nobis placeat, sapiente
                        temporibus velit voluptate? Aspernatur, assumenda facilis libero nisi qui vitae voluptatibus!
                    </description>
                </left>
                <img src="source/(NEW)%20Wasted%20logo-geen%20tekst.png" alt="productImg" class="productImg">
            </product>
            <product class="product">
                <left class="productLeft">
                    <productTitle class="productTitle">
                        Product 7
                    </productTitle>
                    <description class="productDescription">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit incidunt nobis placeat, sapiente
                        temporibus velit voluptate? Aspernatur, assumenda facilis libero nisi qui vitae voluptatibus!
                    </description>
                </left>
                <img src="source/(NEW)%20Wasted%20logo-geen%20tekst.png" alt="productImg" class="productImg">
            </product>
            <product class="product">
                <left class="productLeft">
                    <productTitle class="productTitle">
                        Product 8
                    </productTitle>
                    <description class="productDescription">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit incidunt nobis placeat, sapiente
                        temporibus velit voluptate? Aspernatur, assumenda facilis libero nisi qui vitae voluptatibus!
                    </description>
                </left>
                <img src="source/(NEW)%20Wasted%20logo-geen%20tekst.png" alt="productImg" class="productImg">
            </product>
            <product class="product">
                <left class="productLeft">
                    <productTitle class="productTitle">
                        Product 9
                    </productTitle>
                    <description class="productDescription">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit incidunt nobis placeat, sapiente
                        temporibus velit voluptate? Aspernatur, assumenda facilis libero nisi qui vitae voluptatibus!
                    </description>
                </left>
                <img src="source/(NEW)%20Wasted%20logo-geen%20tekst.png" alt="productImg" class="productImg">
            </product>
        </div>
    </section>

</main>


<footer>

</footer>
<script src="js/script.js"></script>
</body>