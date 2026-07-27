<?php 
$pageTitle = "Employee";
$pageCss = "employee.css";

require_once __DIR__ . '/../../includes/header.php';


// Edit Employee Data
if (isset($_GET['edit_id'])) {
  $employeeId = $_GET['edit_id'];
  $employee = null;

  foreach($_SESSION['employees'] as $item) {
    if ($item['employeeId'] === $employeeId) {
      $employee = $item;
      break;
    }
  }

  if (!$employee) {
    die("Data Not Found !");
  }

}



?>
  <div class="form-container">
    <div class="form-header" style="display: flex; justify-content:space-between">
     <div>
         <h2>Employee Entry Form</h2>
      <p>Fill in the information below to add a new employee.</p>
     </div>
     <div style="background-color: var(--primary);">
        <a href="<?= APP_URL ?>/view/employee/index.php" class="view-table">View Data</a>
     </div>
    </div>

    <form action="<?= APP_URL ?>/controller/employee/employee.php" method="post">
      <div class="form-grid">
        
        <!-- Employee ID (Auto Generated) -->
        <div class="form-group">
          <label for="employeeId">Employee ID</label>
          <input type="text" id="employeeId" name="employeeId" readonly>
          <input type="text" name="edit_id" value="<?= !empty($employee) ? $employee['employeeId'] : '' ?>">
        </div>

        <!-- Full Name -->
        <div class="form-group">
          <label for="fullName">Full Name</label>
          <input type="text" id="fullName" name="fullName" placeholder="e.g., Jane Doe" value="<?= !empty($employee) ? $employee['fullName'] : "" ?>" required>
        </div>

        <!-- Email -->
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" placeholder="e.g., jane.doe@company.com" value="<?= !empty($employee) ? $employee['email'] : "" ?>" required>
        </div>

        <!-- Phone Number -->
        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone" placeholder="e.g., +1 (555) 000-0000" value="<?= !empty($employee) ? $employee['phone'] : "" ?>" required>
        </div>

        <!-- Department -->
        <div class="form-group">
          <label for="department">Department</label>
          <select id="department" name="department" required>
            <option value="" disabled>Select Department</option>
            <option value="HR" <?= ($employee['department'] ?? '') === 'HR' ? "selected" : "" ?>>Human Resources</option>
            <option value="Engineering" <?= ($employee['department'] ?? '') === 'Engineering' ? 'selected' : '' ?>>Engineering</option>
            <option value="Finance" <?= ($employee['department'] ?? '') === 'Finance' ? 'selected' : '' ?>>Finance</option>
            <option value="Marketing" <?= ($employee['department'] ?? '') === 'Marketing' ? 'selected' : '' ?>>Marketing</option>
            <option value="Sales" <?= ($employee['department'] ?? '') === 'Sales' ? 'selected' : '' ?>>Sales</option>
          </select>
        </div>

        <!-- Designation -->
        <div class="form-group">
          <label for="designation">Designation</label>
          <input type="text" id="designation" name="designation" placeholder="e.g., Software Engineer" value="<?= !empty($employee) ? $employee['designation'] : "" ?>" required>
        </div>

        <!-- Salary -->
        <div class="form-group">
          <label for="salary">Salary ($)</label>
          <input type="number" id="salary" name="salary" min="0" step="0.01" placeholder="e.g., 65000" value="<?= !empty($employee) ? $employee['salary'] : "" ?>" required>
        </div>

        <!-- Date of Joining -->
        <div class="form-group">
          <label for="dateOfJoining">Date of Joining</label>
          <input type="date" id="dateOfJoining" name="dateOfJoining" value="<?= !empty($employee) ? $employee['dateOfJoining'] : "" ?>" required>
        </div>

        <!-- Gender -->
        <div class="form-group">
          <label>Gender</label>
          <div class="radio-group">
            <label class="radio-option">
              <input type="radio" name="gender" value="Male" <?= ($employee['gender'] ?? '') === 'Male' ? 'checked' : ''  ?> required> Male
            </label>
            <label class="radio-option">
              <input type="radio" name="gender" value="Female" <?= ($employee['gender'] ?? '') === 'Female' ? 'checked' : ''  ?>> Female
            </label>
            <label class="radio-option">
              <input type="radio" name="gender" value="Other" <?= ($employee['gender'] ?? '') === 'Other' ? 'checked' : ''  ?>> Other
            </label>
          </div>
        </div>

        <!-- Status -->
        <div class="form-group">
          <label for="status">Status</label>
          <select id="status" name="status" required>
            <option value="Active" <?= ($employee['status'] ?? '') === 'Active' ? 'selected' : ''  ?> selected>Active</option>
            <option value="Inactive" <?= ($employee['status'] ?? '') === 'Inactive' ? 'selected' : ''  ?>>Inactive</option>
          </select>
        </div>

        <!-- Address -->
        <div class="form-group full-width">
          <label for="address">Address</label>
          <textarea id="address" name="address" rows="3" placeholder="Enter complete home address" required><?= !empty($employee) ? $employee['address'] : "" ?></textarea>
        </div>

      </div>

      <div class="form-actions">
        <button type="reset" class="btn-reset" id="resetBtn">Reset</button>
        <button type="submit" class="btn-submit">Save Employee</button>
      </div>
    </form>
  </div>




  <script>
    // Generate a random unique Employee ID (e.g., EMP-7392)
    function generateEmployeeID() {
      const randomNum = Math.floor(1000 + Math.random() * 9000);
      return `EMP-${randomNum}`;
    }

    // Assign ID on initial page load
    document.addEventListener("DOMContentLoaded", () => {
      document.getElementById("employeeId").value = generateEmployeeID();
    });

    // Re-generate ID when form is reset
    document.getElementById("resetBtn").addEventListener("click", () => {
      setTimeout(() => {
        document.getElementById("employeeId").value = generateEmployeeID();
      }, 0);
    });


  </script>
</body>
</html>