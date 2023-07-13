<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar violet">
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
</div>

<div class="container">
    <h1>Latest Products</h1>
    <?php if(isLoggedIn()): ?>
        <a class="btn green" href="<?php echo URLROOT; ?>/posts/create">
            Add new product
        </a>
    <?php endif; ?>
    <?php foreach($data['posts'] as $post): ?>
        <div class="container-item">
            <a href="<?php echo URLROOT . "/posts/viewproducts/" . $post->id ?>" class="btn view">
                   View 
            </a>
            <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == $post->user_id): ?>
                <a
                    class="btn orange"
                    href="<?php echo URLROOT . "/posts/update/" . $post->id ?>">
                    Update
                </a>
                <form action="<?php echo URLROOT . "/posts/delete/" . $post->id ?>" method="POST">
                    <input type="submit" name="delete" value="Delete" class="btn red">
                </form>
            <?php endif; ?>
            <h2>
                <?php echo $post->title; ?>
            </h2>
            <h3>
               <?php echo 'Created on: ' . date('F j, o H:i', strtotime($post->created_at)) ?>
            </h3>
            <img src="<?=URLROOT . '/img/uploads/' . $post->image ?>" width="120" height="100">
            <p>
                <?php echo $post->body ?>
            </p>

            <p>Price: <?php echo $post->price ?> </p>
        </div>
    <?php endforeach; ?>
</div>
