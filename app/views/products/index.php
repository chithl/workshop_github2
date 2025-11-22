<?php 
$pageTitle = 'Products List';
require_once 'app/views/layouts/header.php';
require_once 'app/views/layouts/navbar.php';
?>

<div class="d-flex">
    <?php require_once 'app/views/layouts/sidebar.php'; ?>
    
    <div class="main-content">
        <div class="container-fluid py-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Products List</h1>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">
                    <i class="bi bi-plus-circle"></i> Add Product
                </button>
            </div>

            <!-- Filters -->
            <div class="card mb-4">
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-md-3">
                            <label for="searchInput" class="form-label">Search</label>
                            <input type="text" class="form-control" id="searchInput" placeholder="Search products...">
                        </div>
                        <div class="col-md-3">
                            <label for="categoryFilter" class="form-label">Category</label>
                            <select class="form-select" id="categoryFilter">
                                <option value="">All Categories</option>
                                <option value="coffee">Coffee</option>
                                <option value="tea">Tea</option>
                                <option value="pastries">Pastries</option>
                                <option value="smoothies">Smoothies</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="statusFilter" class="form-label">Status</label>
                            <select class="form-select" id="statusFilter">
                                <option value="">All Status</option>
                                <option value="available">Available</option>
                                <option value="out-of-stock">Out of Stock</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label d-block">&nbsp;</label>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-search"></i> Filter
                            </button>
                            <button type="reset" class="btn btn-secondary">
                                <i class="bi bi-x-circle"></i> Reset
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Products Table -->
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">All Products</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="product-img-placeholder bg-secondary text-white d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; border-radius: 4px;">
                                            <i class="bi bi-cup-hot"></i>
                                        </div>
                                    </td>
                                    <td>Cappuccino</td>
                                    <td><span class="badge bg-info">Coffee</span></td>
                                    <td>$4.50</td>
                                    <td>150</td>
                                    <td><span class="badge bg-success">Available</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-info" title="View">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-warning" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="product-img-placeholder bg-secondary text-white d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; border-radius: 4px;">
                                            <i class="bi bi-cup-hot"></i>
                                        </div>
                                    </td>
                                    <td>Espresso</td>
                                    <td><span class="badge bg-info">Coffee</span></td>
                                    <td>$3.00</td>
                                    <td>200</td>
                                    <td><span class="badge bg-success">Available</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-info" title="View">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-warning" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <div class="product-img-placeholder bg-secondary text-white d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; border-radius: 4px;">
                                            <i class="bi bi-cup-hot"></i>
                                        </div>
                                    </td>
                                    <td>Latte</td>
                                    <td><span class="badge bg-info">Coffee</span></td>
                                    <td>$4.00</td>
                                    <td>180</td>
                                    <td><span class="badge bg-success">Available</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-info" title="View">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-warning" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <div class="product-img-placeholder bg-secondary text-white d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; border-radius: 4px;">
                                            <i class="bi bi-cup-straw"></i>
                                        </div>
                                    </td>
                                    <td>Green Tea</td>
                                    <td><span class="badge bg-success">Tea</span></td>
                                    <td>$3.50</td>
                                    <td>120</td>
                                    <td><span class="badge bg-success">Available</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-info" title="View">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-warning" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <div class="product-img-placeholder bg-secondary text-white d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; border-radius: 4px;">
                                            <i class="bi bi-cup-hot"></i>
                                        </div>
                                    </td>
                                    <td>Mocha</td>
                                    <td><span class="badge bg-info">Coffee</span></td>
                                    <td>$4.80</td>
                                    <td>0</td>
                                    <td><span class="badge bg-danger">Out of Stock</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-info" title="View">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-warning" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>
                                        <div class="product-img-placeholder bg-secondary text-white d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; border-radius: 4px;">
                                            <i class="bi bi-egg-fried"></i>
                                        </div>
                                    </td>
                                    <td>Croissant</td>
                                    <td><span class="badge bg-warning text-dark">Pastries</span></td>
                                    <td>$2.50</td>
                                    <td>80</td>
                                    <td><span class="badge bg-success">Available</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-info" title="View">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-warning" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Pagination -->
                    <nav aria-label="Page navigation" class="mt-3">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Product Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="productName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="productName" required>
                    </div>
                    <div class="mb-3">
                        <label for="productCategory" class="form-label">Category</label>
                        <select class="form-select" id="productCategory" required>
                            <option value="">Select Category</option>
                            <option value="coffee">Coffee</option>
                            <option value="tea">Tea</option>
                            <option value="pastries">Pastries</option>
                            <option value="smoothies">Smoothies</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Price</label>
                        <input type="number" class="form-control" id="productPrice" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="productStock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="productStock" required>
                    </div>
                    <div class="mb-3">
                        <label for="productImage" class="form-label">Image</label>
                        <input type="file" class="form-control" id="productImage">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Product</button>
            </div>
        </div>
    </div>
</div>

<?php require_once 'app/views/layouts/footer.php'; ?>
