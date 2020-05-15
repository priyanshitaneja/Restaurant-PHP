<?php include 'include/header.php' ?>

<form class="reg-form">
  <h1 class="reg-h1">Register</h1>
  <input type="text" name="" id="" placeholder="Full Name" required>
  <input type="email" placeholder="Email" required />
  <input type="number" name="" id="" placeholder="Phone Number" required>
  <input type="password" placeholder="Password" required />
  <input type="checkbox" id="veg" name="veg" value="veg" />
  <label for="veg">Veg</label>
  <input type="checkbox" id="non-veg" name="non-veg" value="non-veg" />
  <label for="non-veg">Non-veg</label><br>
  <button class="btn1 reg-btn">
    Register
  </button>
</form>

<?php include 'include/footer.php' ?>
