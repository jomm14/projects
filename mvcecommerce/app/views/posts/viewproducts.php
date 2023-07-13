<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
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

<div class="product-container">

<table cellpadding="20">
   <td><img src="<?=URLROOT. '/img/uploads/' . $data['post']->image ?>" width="500" height="350">
   <td colspan="2">
      <h1><?php echo $data['post']->title ?></h1>
      <p><?php echo $data['post']->body ?></p>
      <p>Price: Php.<?php echo $data['post']->price ?></p>
      <p>Seller: <?php echo $data['post']->username ?></p></td>
</table>

<h1>Comments</h1>
<p></p>
<textarea placeholder="Input your comment here"></textarea>
 </div>