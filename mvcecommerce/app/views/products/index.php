<?php
   error_reporting(0);
   ini_set('display_errors', 0);
   require APPROOT . '/views/includes/head.php';
   $current_userid = $_SESSION['user_id'];
?>

<div class="navbar violet">
    <?php
    $role = $_SESSION['user_role'];
    if ($role == "admin"){
       require APPROOT . '/views/includes/nav-admin.php';
      }
    else {
       require APPROOT . '/views/includes/navigation.php';
    }
    ?>
</div>

<style>
    table{
        border: none;
    }
    th, td, tr{
        border: 1px solid black;
        border-radius: 1em;
    }
</style>

<div class="container">
    
    <h1>My Products</h1>

    <?php if(isLoggedIn()): ?>
        <a class="btn green" href="<?php echo URLROOT; ?>/posts/create">
            Add new product
        </a>
    <?php endif; ?>

    <br>
    <br>

    <!-- <table border="1" width="100%" cellpadding="15" cellspacing="10">
        <th>Product Name
        <th>Description
        <th>Price
        <th>Action -->
        <!-- <?php foreach($data['posts'] as $p): ?>
            <tr>
                <td><?=$p->title ?>
                <td><?=$p->body ?>
                <td><?=$p->price ?>
            </tr>
        <?php endforeach; ?> -->
       <!--  <?php foreach($data['posts'] as $p): ?>
            <?php if($p->user_id == $current_userid): ?>
            <tr>
                <td><?=$p->title ?></td>
                <td><?=$p->body ?></td>
                <td><?=$p->price ?></td>
                <td></td>
            </tr>
            <?php endif; ?>
        <?php endforeach; ?>
         
    </table> -->
     <?php foreach($data['posts'] as $post): ?>
        <?php if($post->user_id == $current_userid): ?>
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
            <img src="<?=URLROOT . '/img/uploads/' . $post->image; ?>" width="120" height="100">
            <p>
                <?php echo $post->body ?>
            </p>

            <p>Price: <?php echo $post->price ?> </p>

        </div>
        <?php endif; ?>
    <?php endforeach; ?>

</div>