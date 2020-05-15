<?php include 'include/header.php' ?>
    <div class="main-container">
      <div class="container-left">
        <form class="reg-form">
          <h1 class="reg-h1">Register</h1>
          <input type="text" placeholder="Email" />
          <input type="password" placeholder="Password" />
          <input type="password" placeholder="Confirm Password" />
          <input type="checkbox" id="veg" name="veg" value="veg" />
          <label for="veg">Veg</label>
          <input type="checkbox" id="non-veg" name="non-veg" value="non-veg" />
          <label for="non-veg">Non-veg</label><br>
          <button class="btn1 reg-btn">
            Register
          </button>
        </form>
      </div>
      <div class="container-right">
        <!-- <p>We care for you!</p> -->
        <img src="./bg.jpg" alt="background-image" class="bg" />
      </div>
    </div>
  </body>
</html>
