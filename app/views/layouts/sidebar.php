<div class="sidebar bg-dark" id="sidebar">
    <div class="sidebar-header">
        <h4 class="text-white text-center py-3">Menu</h4>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link <?php echo (!isset($_GET['page']) || $_GET['page'] == 'dashboard') ? 'active' : ''; ?>" href="index.php?page=dashboard">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'products') ? 'active' : ''; ?>" href="index.php?page=products">
                <i class="bi bi-cup-hot"></i> Products List
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'forms') ? 'active' : ''; ?>" href="index.php?page=forms">
                <i class="bi bi-file-earmark-text"></i> Forms
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#ordersSubmenu" data-bs-toggle="collapse">
                <i class="bi bi-receipt"></i> Orders <i class="bi bi-chevron-down float-end"></i>
            </a>
            <ul class="collapse list-unstyled ps-4" id="ordersSubmenu">
                <li><a class="nav-link" href="#"><i class="bi bi-circle"></i> All Orders</a></li>
                <li><a class="nav-link" href="#"><i class="bi bi-circle"></i> Pending</a></li>
                <li><a class="nav-link" href="#"><i class="bi bi-circle"></i> Completed</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-people"></i> Customers
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-gear"></i> Settings
            </a>
        </li>
    </ul>
</div>
