<?php
/** URL Handing Super Global functions
 * 1. $_GET,   2. $_POST   3. $_REQUEST   4. $_SERVER
 * 
 */


// $_GET Method

$url = "category=men&sort=249";

?>

<a href="http://localhost/php/intermediate/url-handling/get.php?<?php echo $url ?>" style="border: 1px solid #ddd; padding:5px;">Product Info</a>

<!-- Simple Search System   -->
<?php 
$query = $_GET['q'] ?? '';
$senitizedQuery = htmlspecialchars($query);


?>

<!-- Search Form  -->

<div style="width: 250px; background:#ddd; padding: 20px; margin-top: 50px;">
    <form action="" method="get">
        <input style="height: 35px;" type="text" name="q" value="<?=  $senitizedQuery ?>" placeholder="Search...">
        <button type="submit" style="border: 1px solid #363636ff; background: #e4b166ff; padding: 8px 16px;"> Search </button>
    </form>

    <?php if ($query !== ""): ?>
        <p style="color: #686868ff;"> Searching For :  <?=  $senitizedQuery ?></p>
    <?php endif; ?>

</div>


<?php 
 // check type casting 
 $product_id = isset($_GET['id']) ? (int) $_GET['id'] : 0; // Safe Inter 
 $page = max(1, (int)($_GET['page'] ?? 1));

?>


<!-- $_POST Method  -->



<div style="width: 250px; background:#ddd; padding: 20px; margin-top: 50px;">
    <form method="POST" action="post.php">
        <input style="width: 100%; margin-bottom: 10px; height:30px" type="text" name="username" placeholder="Enter username">
        <input style="width: 100%; margin-bottom: 10px; height:30px" type="email" name="email" placeholder="Enter Email">
        <input style="width: 100%; margin-bottom: 10px; height:30px" type="password" name="password" placeholder="Enter password">
        <button type="submit"  style="border: 1px solid #363636ff; background: #e4b166ff; padding: 8px 16px;">Login</button>
    </form>
</div>










