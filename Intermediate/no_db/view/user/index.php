<?php require_once __DIR__ . '/../../includes/session.php'; ?>

<!-- Include heder  -->
<?php require_once __DIR__ . '/../../includes/header.php'; ?>


<!-- Profile form  -->
<div class="profile-section">
    <div class="profile">
        <!-- Registration Success Message -->
        <?php if (isset($_SESSION["message"])): ?>
            <div class="message <?= $_SESSION["messageType"] ?>">
                <?= htmlspecialchars($_SESSION["message"]) ?>
            </div>
        <?php endif; ?>

        <form action="" method="post">
            <div class="form-group">
                <label>User Name</label>
                <input type="text" name="username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="number" name="phone">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address">
            </div>
            <div class="form-group">
                <label>Profile Photo</label>
                <input type="file" name="photo">
            </div>
            <div class="form-group">
                <label>Note</label>
                <textarea type="text" name="note"> </textarea>
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
                <th>Photo</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Note</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td>1</td>

                <td>
                    <img src="https://i.pravatar.cc/50?img=1" alt="Profile">
                </td>

                <td>Jakariya Ahmed</td>

                <td>jakariya@gmail.com</td>

                <td>01712345678</td>

                <td>Dhaka, Bangladesh</td>

                <td>Frontend Developer</td>

                <td class="action-btns">

                    <a href="#" class="view" title="View">
                        👁️
                    </a>

                    <a href="#" class="edit" title="Edit">
                        ✏️
                    </a>

                    <a href="#" class="delete" title="Delete">
                        🗑️
                    </a>

                </td>

            </tr>

        </tbody>

    </table>

</div>




</body>
</html>