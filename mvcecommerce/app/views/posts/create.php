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
        Add new product
    </h1>

    <form action="<?php echo URLROOT; ?>/posts/create" method="POST" enctype="multipart/form-data">
        <div class="form-item">
            <input type="text" name="title" placeholder="Enter the product's name">

            <span class="invalidFeedback">
                <?php echo $data['titleError']; ?>
            </span>
        </div>

        <div class="form-item">
            <textarea name="body" placeholder="Enter your product's description"></textarea>

            <span class="invalidFeedback">
                <?php echo $data['bodyError']; ?>
            </span>
        </div>

        <div class="form-item">
            <input type="file" name="image">

            <span class="invalidFeedback">
                <?php echo $data['imageError']; ?>
            </span>
        </div>

        <div class="form-item">
           <input type="text" name="price" placeholder="Enter the price">

            <span class="invalidFeedback">
                <?php echo $data['priceError']; ?>
            </span>
        </div>

        <button class="btn green" name="submit" type="submit">Submit</button>
    </form>
</div>
