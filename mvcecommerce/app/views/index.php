<?php
   require APPROOT . '/views/includes/head.php';
?>
<div id="section-landing">
    <?php
    error_reporting(0);
    ini_set('display_errors', 0);
    $role = $_SESSION['user_role'];
    if ($role == "admin"){
       require APPROOT . '/views/includes/nav-admin.php';
      }
    else {
       require APPROOT . '/views/includes/navigation.php';
    }
    ?>
    <div class="wrapper-landing">
        <h1>Ebreo Ecommerce</h1>
		<div class="front-buttons">
			<button onclick="location.href='<?php echo URLROOT; ?>/posts'">Check All Products</button>
         <?php if(!isLoggedIn()): ?>
            <button onclick="location.href='<?php echo URLROOT; ?>/users/register'">Sign Up</button>
          <?php endif; ?>
		</div>
    </div>
</div>
