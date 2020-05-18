<!-- <?php 
	// require 'files/connection.php';
	// session_start();
	// error_reporting(E_ERROR | E_PARSE);

	// if(strlen($_SESSION['custid'])==0)
	// {
	// header('location:login.php');
	// }
	// else {
?> -->
<?php require_once 'include/header.php' ?>
<?php require_once 'include/navbar-register.php' ?>

</nav>
<div class="main-container">
    <div id="menu">
        <h1>What would you like to eat today?</h1>


        <div class="food-item">
            <div class="food-img">
                <img src="bg.jpg" alt="" srcset="">
            </div>
            <div class="food-details">
                <div class="food-info">
                    <div class="food-name">
                        Pizza
                    </div>
                    <div class="food-price">
                        ₹ 250 /-
                    </div>
                </div>
                <div class="food-des">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore, ipsa!
                    Numquam libero cum at sit iure officia distinctio consectetur soluta.
                </div>
                <div class="order-food">
                    <button class="order">ADD TO CART</button>
                </div>
            </div>

        </div>

    </div>


<?php include 'include/footer.php' ?>