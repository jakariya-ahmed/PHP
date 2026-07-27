
<!-- Include heder  -->
<?php 
require_once __DIR__ . '/../../includes/header.php'; 
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}
?>

<?php 
// Delete the user 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $user = null;

    foreach ($_SESSION['users'] as $item) {
        if ($item["id"] === $id) {
            $user = $item;
            break;
        } 
    }

    if (!$user) {
        die("User Not Found!");
    }


}

?>

<div style="display: flex; justify-content: center; gap:10px; margin-top: 16px;">
        <a href="<?= APP_URL ?>/view/employee/create.php" class="btn">Emplyee</a> 
        <a href="" class="btn">Students</a>
        <a href="" class="btn">All</a>
    </div>
<!-- Profile form  -->
<div class="profile-section">
    
    <div class="profile">
        <!-- Registration Success Message -->
        <?php if (isset($_SESSION["message"])): ?>
            <div class="message <?= $_SESSION["messageType"] ?>">
                <?= htmlspecialchars($_SESSION["message"]) ?>
            </div>
        <?php endif; ?>

        <form action="create.php" method="post">
            <div class="form-group">
                <label>User Name</label>
                <input type="text" name="username" value="<?= !empty($user) ? $user['username'] : "" ?>">
                <input type="hidden" name="id" value="<?= !empty($user) ? $user['id'] : "" ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="<?= !empty($user) ? $user['email'] : "" ?>">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="number" name="phone" value="<?= !empty($user) ? $user['phone'] : "" ?>">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" value="<?= !empty($user) ? $user['address'] : "" ?>">
            </div>
            <div class="form-group">
                <label>Profile Photo</label>
                <input type="file" name="photo" value="">
            </div>
            <div class="form-group">
                <label>Note</label>
                <textarea type="text" name="note"> <?= !empty($user) ? $user['note'] : "" ?> </textarea>
            </div>
             <div class="form-group"> <button type="submit">Create</button> </div>
        </form>
    </div>
</div>


<div class="table-container">

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Note</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        
        <?php
        // print_r($_SESSION['users']);exit();
        
        foreach ($_SESSION['users'] as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>

                <td><?= $user['username'] ?></td>
                <td><?= $user['email'] ?></td>

                <td><?= $user['phone'] ?></td>

                <td><?= $user['address'] ?></td>

                <td><?= $user['note'] ?></td>

                <td class="action-btns">

                    <a href="create.php?id=<?= $user['id'] ?>" class="view" title="View">
                        👁️
                    </a>

                    <a href="index.php?id=<?= $user['id'] ?>" class="edit" title="Edit">
                        ✏️
                    </a>

                    <a href="delete.php?id=<?= $user['id'] ?>" class="delete" title="Delete">
                        🗑️
                    </a>

                </td>

            </tr>
            <?php 
            endforeach;
            ?>
        </tbody>

    </table>

</div>





</body>
</html>