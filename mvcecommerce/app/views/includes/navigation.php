<nav class="top-nav">
    <a href="<?php echo URLROOT; ?>/index"><img class="logo" src="<?=URLROOT . '/img/logo.png' ?>"></a>
    <br>
    <h2 class="website-title">Ecommerce</h2>
    <ul>
        <li>
            <a href="<?php echo URLROOT; ?>/index">Home</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/posts">All Products</a>
        </li>
         <li>
            <a href="<?php echo URLROOT; ?>/products">My Products</a>
        </li>
		<li>
            <a href="<?php echo URLROOT; ?>/about">About</a>
        </li>
		<li>
			<?php if(isLoggedIn()): ?>
				<?php $username = $_SESSION['username']; ?>
				<?php echo "<p class='white'>Welcome, " . $username . "</p>";?>
			 <?php endif; ?>
		</li>
        <li class="btn-login">
            <?php if(isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/users/logout">Log out</a>
            <?php else : ?>
                <a href="<?php echo URLROOT; ?>/users/login">Login</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>
