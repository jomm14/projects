<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
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

<div class="container center">
    <h1>
        Update your product
    </h1>

    <form
    action="<?php echo URLROOT; ?>/posts/update/<?php echo $data['post']->id ?>" method="POST" enctype="multipart/form-data">
        <div class="form-item">
            <input
                type="text"
                name="title"
                value="<?php echo $data['post']->title ?>">

            <span class="invalidFeedback">
                <?php echo $data['titleError']; ?>
            </span>
        </div>

        <div class="form-item">
            <textarea name="body" placeholder="Enter your product's content..."><?php echo $data['post']->body ?></textarea>

            <span class="invalidFeedback">
                <?php echo $data['bodyError']; ?>
            </span>
        </div>

        <div class="form-item">
            <h3>Current image: </h3><img src="<?=URLROOT . '/img/uploads/' . $data['post']->image; ?>" width="120" height="100">
            <br>
            <input type="file" name="image">

            <span class="invalidFeedback">
                <?php echo $data['imageError']; ?>
            </span>
        </div>

        <div class="form-item">
            <input
                type="text"
                name="price"
                value="<?php echo $data['post']->price ?>">

            <span class="invalidFeedback">
                <?php echo $data['priceError']; ?>
            </span>
        </div>

        <button class="btn green" name="submit" type="submit">Submit</button>
    </form>
</div>
