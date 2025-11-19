
<?php 
if ($_GET['success']) { ?>
<div style="width: 500px; position: absolute; top: 50%; left: 50%;
 transform: translate(-50%, -50%); 
 padding: 20px; margin: 50px auto; box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1); 
 border-left: 3px solid rgba(89, 233, 22, 1)">
   <h3 style="font-size: 18px; color: green"><?= $_GET['msg'] ?></h3>
</div>

<?php } ?>


