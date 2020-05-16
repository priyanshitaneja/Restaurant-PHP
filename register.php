<?php include 'include/header.php' ?>
<?php include './include/navbar-menu-reg.php' ?>

</nav>
<div class="main-container">
  <div class="container-left">
    <form class="reg-form" method="POST">
      <h1 class="reg-h1">Register</h1>
      <input type="text" name="name" id="" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email" required />
      <input type="tel" name="phone" id="" placeholder="Phone Number" required>
      <input type="password" name="password" placeholder="Password" required />
      <input type="radio" id="veg" name="preference" value="veg" required/>
      <label for="veg">Veg</label>
      <input type="radio" id="non-veg" name="preference" value="non-veg" required/>
      <label for="non-veg">Non-veg</label><br>
      <button class="btn1 reg-btn" name="register-user">
        Register
      </button>
    </form>

<?php include 'include/container-right.php' ?>
<?php include 'include/footer.php' ?>