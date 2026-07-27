<?php 
$pageTitle = "Employees Data View";
$pageCss = "employee_table.css";

require_once __DIR__ . '/../../includes/header.php';
require_once __DIR__ . '/../../config/app.php';


if (!isset($_SESSION['employees'])) {
    $_SESSION['employees'] = [];
}


?>
  <main class="dashboard-container">
    
    <!-- 1. Header Section -->
    <header class="page-header">
      <div class="header-title-group">
        <h1 class="page-title">Employee Management</h1>
        <p class="page-subtitle">Total Employees: <span class="badge-count">256</span></p>
      </div>
      <div class="header-action-group">
        <a class="btn-sm " href=""> 
          <i data-lucide="refresh-cw"></i>
          <span class="btn-text">Refresh</span>
        </a>
        <a class="btn-sm " href=""> 
          <i data-lucide="download"></i>
          <span class="btn-text">Export</span>
        </a>
        <a class="btn-sm " href="">
          <i data-lucide="printer"></i>
          <span class="btn-text">Print</span>
        </a>
        <a class="btn-sm " href="<?= APP_URL ?>/view/employee/create.php">
          <i data-lucide="user-plus"></i>
          <span>Add Employee</span>
        </a>
      </div>
    </header>

    <!-- 2. Search & Filter Section -->
    <section class="filter-card" aria-label="Employee Search and Filters">
      <form class="filter-form" id="filterForm">
        <div class="filter-grid">
          
          <div class="form-control">
            <label for="filterName">Name</label>
            <div class="input-icon-wrapper">
              <i data-lucide="search" class="input-icon"></i>
              <input type="text" id="filterName" placeholder="Search name...">
            </div>
          </div>

          <div class="form-control">
            <label for="filterId">Employee ID</label>
            <input type="text" id="filterId" placeholder="e.g., EMP-1092">
          </div>

          <div class="form-control">
            <label for="filterEmail">Email</label>
            <input type="email" id="filterEmail" placeholder="Search email...">
          </div>

          <div class="form-control">
            <label for="filterPhone">Phone</label>
            <input type="tel" id="filterPhone" placeholder="Search phone...">
          </div>

          <div class="form-control">
            <label for="filterDept">Department</label>
            <select id="filterDept">
              <option value="">All Departments</option>
              <option value="engineering">Engineering</option>
              <option value="hr">Human Resources</option>
              <option value="finance">Finance</option>
              <option value="marketing">Marketing</option>
            </select>
          </div>


          <div class="form-control">
            <label for="filterStatus">Status</label>
            <select id="filterStatus">
              <option value="">All Statuses</option>
              <option value="active">Active</option>
              <option value="inactive">Inactive</option>
              <option value="on-leave">On Leave</option>
              <option value="resigned">Resigned</option>
            </select>
          </div>

        </div>

        <div class="filter-actions">
          <button type="reset" class="btn btn-tertiary">Reset Filters</button>
          <button type="submit" class="btn btn-primary">
            <i data-lucide="filter"></i>
            <span>Search</span>
          </button>
        </div>
      </form>
    </section>

    <!-- 3. Employee Table Wrapper -->
    <section class="table-card">
      <div class="table-responsive">
        <table class="data-table" id="employeeTable">
          <thead>
            <tr>
              <th class="col-checkbox">
                <input type="checkbox" id="selectAll" aria-label="Select all employees">
              </th>
              <th class="sortable col-id" data-sort="id">
                <div class="th-content">ID <i data-lucide="chevrons-up-down" class="sort-icon"></i></div>
              </th>
              <th class="sortable col-name" data-sort="name">
                <div class="th-content">Full Name <i data-lucide="chevrons-up-down" class="sort-icon"></i></div>
              </th>
              <th class="col-email">Email</th>
              <th class="col-phone">Phone</th>

              <th class="sortable col-status" data-sort="status">
                <div class="th-content">Status <i data-lucide="chevrons-up-down" class="sort-icon"></i></div>
              </th>
              <th class="col-actions">Actions</th>
            </tr>
          </thead>
          <tbody>
            
            <!-- Row 1: Active Employee with Avatar Image -->
            <?php foreach($_SESSION['employees'] as $employee) : ?>
            <tr>
              <td class="col-checkbox" data-label="Select">
                <input type="checkbox" aria-label="Select Jane Alexander">
              </td>
              <td class="col-id" data-label="ID"><span class="emp-id"><?= $employee['employeeId'] ?></span></td>
              <td class="col-name" data-label="Full Name">
                <span class="font-medium"><?= $employee['fullName'] ?></span>
              </td>
              <td class="col-email" data-label="Email"><?= $employee['email'] ?></td>
              <td class="col-phone" data-label="Phone"><?= $employee['phone'] ?></td>
              <td class="col-status" data-label="Status">
                <span class="status-badge status-active"><?= $employee['status'] ?></span>
              </td>
              <td class="col-actions" data-label="Actions">
                <div class="action-btn-group">
                  <a href="<?= $employee['employeeId'] ?>" class="action-btn view-btn" style="color: #e07c1e;"  data-tooltip="View Details">
                    <i data-lucide="eye"></i>
                  </a>
                  <a href="create.php?edit_id=<?= $employee['employeeId'] ?>" class="action-btn edit-btn" style="color: #40e631;"  data-tooltip="Edit Employee">
                    <i data-lucide="square-pen"></i>
                  </a>
                  <a href="<?= APP_URL ?>/controller/employee/employee.php?del_id=<?= $employee['employeeId'] ?>" class="action-btn delete-btn" style="color: #b40606;" data-tooltip="Delete Record">
                    <i data-lucide="trash-2"></i>
                  </a>
                </div>
              </td>
            </tr>
            <?php endforeach ?>

          </tbody>
        </table>
      </div>

      <!-- 4. Pagination Section -->
      <footer class="pagination-footer">
        <p class="pagination-info">Showing <strong>1</strong> to <strong>5</strong> of <strong>256</strong> Employees</p>
        <ul class="pagination-controls">
          <li>
            <button class="page-link disabled" aria-disabled="true" aria-label="Previous Page">
              <i data-lucide="chevron-left"></i>
            </button>
          </li>
          <li><button class="page-link active" aria-current="page">1</button></li>
          <li><button class="page-link">2</button></li>
          <li><button class="page-link">3</button></li>
          <li><button class="page-link">4</button></li>
          <li><span class="pagination-ellipsis">&hellip;</span></li>
          <li><button class="page-link">26</button></li>
          <li>
            <button class="page-link" aria-label="Next Page">
              <i data-lucide="chevron-right"></i>
            </button>
          </li>
        </ul>
      </footer>
    </section>

    <!-- 5. Component: Empty State (Shown via JS when dataset is empty) -->
    <section class="table-card empty-state-card display-none" id="emptyState">
      <div class="empty-state-content">
        <div class="empty-icon-wrapper">
          <i data-lucide="users-round"></i>
        </div>
        <h2 class="empty-title">No Employees Found</h2>
        <p class="empty-description">We couldn't find any employees matching your search parameters. Try adjusting or resetting your filter criteria.</p>
        <div class="empty-actions">
          <button class="btn btn-secondary" onclick="document.getElementById('filterForm').reset();">Clear Filters</button>
          <button class="btn btn-primary">
            <i data-lucide="user-plus"></i>
            <span>Add New Employee</span>
          </button>
        </div>
      </div>
    </section>

    <!-- 6. Component: Loading Skeleton State (Shown during async requests) -->
    <section class="table-card display-none" id="loadingState">
      <div class="table-responsive">
        <table class="data-table">
          <thead>
            <tr>
              <th class="col-checkbox"><div class="skeleton skeleton-checkbox"></div></th>
              <th><div class="skeleton skeleton-text short"></div></th>
              <th><div class="skeleton skeleton-avatar"></div></th>
              <th><div class="skeleton skeleton-text"></div></th>
              <th><div class="skeleton skeleton-text"></div></th>
              <th><div class="skeleton skeleton-text"></div></th>
              <th><div class="skeleton skeleton-text short"></div></th>
              <th><div class="skeleton skeleton-text"></div></th>
            </tr>
          </thead>
          <tbody>
            <!-- Skeleton Rows -->
            <tr>
              <td><div class="skeleton skeleton-checkbox"></div></td>
              <td><div class="skeleton skeleton-text short"></div></td>
              <td><div class="skeleton skeleton-avatar"></div></td>
              <td><div class="skeleton skeleton-text"></div></td>
              <td><div class="skeleton skeleton-text"></div></td>
              <td><div class="skeleton skeleton-text"></div></td>
              <td><div class="skeleton skeleton-badge"></div></td>
              <td><div class="skeleton skeleton-text short"></div></td>
            </tr>
            <tr>
              <td><div class="skeleton skeleton-checkbox"></div></td>
              <td><div class="skeleton skeleton-text short"></div></td>
              <td><div class="skeleton skeleton-avatar"></div></td>
              <td><div class="skeleton skeleton-text"></div></td>
              <td><div class="skeleton skeleton-text"></div></td>
              <td><div class="skeleton skeleton-text"></div></td>
              <td><div class="skeleton skeleton-badge"></div></td>
              <td><div class="skeleton skeleton-text short"></div></td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

  </main>

  <!-- Lucide Icon Initialization Script -->
  <script>
    lucide.createIcons();
  </script>
</body>
</html>