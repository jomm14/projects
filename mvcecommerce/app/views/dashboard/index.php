<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar violet">
    <?php
       require APPROOT . '/views/includes/nav-admin.php';
    ?>
</div>
<style>
   table{
      border: none;
   }
   th, tr, td{
      border: 1px solid black;
      border-radius: 2em;
   }
</style>
<div class="container">
<?php
$username = $_SESSION['username'];
$email = $_SESSION['email'];
?>
    <h1>Dashboard Page</h1>
    <table border="1" cellpadding="20" cellspacing="20">
    <td>Username: <?php echo $username; ?></td>
    <tr>
    <td>Email: <?php echo $email; ?></td>
    <tr>
    <td>Total products on the website: <?php echo $data['count'] ?></td>
    </table>

</div>