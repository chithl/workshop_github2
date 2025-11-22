<?php 
$pageTitle = 'Dashboard';
require_once 'app/views/layouts/header.php';
require_once 'app/views/layouts/navbar.php';
?>

<div class="d-flex">
    <?php require_once 'app/views/layouts/sidebar.php'; ?>
    
    <div class="main-content">
        <div class="container-fluid py-4">
            <h1 class="mb-4">Dashboard</h1>
            
            <!-- Statistics Cards -->
            <div class="row mb-4">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Total Sales (Today)</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">$4,520</div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-currency-dollar fs-2 text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Total Orders</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">156</div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-cart-check fs-2 text-success"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                        Customers</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">342</div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-people fs-2 text-info"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Pending Orders</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-clock-history fs-2 text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Row -->
            <div class="row mb-4">
                <div class="col-xl-8 col-lg-7">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Sales Overview</h6>
                        </div>
                        <div class="card-body">
                            <canvas id="salesChart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Product Categories</h6>
                        </div>
                        <div class="card-body">
                            <canvas id="categoryChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Orders Table -->
            <div class="row">
                <div class="col-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Recent Orders</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Customer</th>
                                            <th>Product</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#ORD001</td>
                                            <td>John Doe</td>
                                            <td>Cappuccino</td>
                                            <td>$4.50</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td>2024-01-20</td>
                                        </tr>
                                        <tr>
                                            <td>#ORD002</td>
                                            <td>Jane Smith</td>
                                            <td>Espresso</td>
                                            <td>$3.00</td>
                                            <td><span class="badge bg-warning">Pending</span></td>
                                            <td>2024-01-20</td>
                                        </tr>
                                        <tr>
                                            <td>#ORD003</td>
                                            <td>Mike Johnson</td>
                                            <td>Latte</td>
                                            <td>$4.00</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td>2024-01-19</td>
                                        </tr>
                                        <tr>
                                            <td>#ORD004</td>
                                            <td>Sarah Williams</td>
                                            <td>Mocha</td>
                                            <td>$4.80</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td>2024-01-19</td>
                                        </tr>
                                        <tr>
                                            <td>#ORD005</td>
                                            <td>David Brown</td>
                                            <td>Americano</td>
                                            <td>$3.50</td>
                                            <td><span class="badge bg-danger">Cancelled</span></td>
                                            <td>2024-01-18</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Sales Chart
const salesCtx = document.getElementById('salesChart').getContext('2d');
const salesChart = new Chart(salesCtx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
            label: 'Sales ($)',
            data: [12000, 19000, 15000, 25000, 22000, 30000, 28000, 32000, 29000, 35000, 38000, 42000],
            borderColor: 'rgb(75, 192, 192)',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            tension: 0.4
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: false
            }
        }
    }
});

// Category Chart
const categoryCtx = document.getElementById('categoryChart').getContext('2d');
const categoryChart = new Chart(categoryCtx, {
    type: 'doughnut',
    data: {
        labels: ['Coffee', 'Tea', 'Pastries', 'Smoothies', 'Others'],
        datasets: [{
            data: [45, 20, 15, 12, 8],
            backgroundColor: [
                'rgba(255, 99, 132, 0.8)',
                'rgba(54, 162, 235, 0.8)',
                'rgba(255, 206, 86, 0.8)',
                'rgba(75, 192, 192, 0.8)',
                'rgba(153, 102, 255, 0.8)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
        plugins: {
            legend: {
                position: 'bottom',
            }
        }
    }
});
</script>

<?php require_once 'app/views/layouts/footer.php'; ?>
