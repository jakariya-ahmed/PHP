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
$query = htmlspecialchars($_GET['q']) ?? '';

?>

<div style="width:300px; margin-top: 50px; background: #ddd; border: 1px solid f4f444; padding:20px;">
    <form method="get" action="">
        <input type="text" name="q" value="" placeholder="Search..." />
        <button type="submit"> Search </button>
    </form>
    <?php if (isset($_GET['q'])) :
        $query = $_GET['q'];
    ?> 
    <p>Searching for: <strong><?= $query ?></strong></p>
    <?php endif; ?>
</div>











