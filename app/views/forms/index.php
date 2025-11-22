<?php 
$pageTitle = 'Forms';
require_once 'app/views/layouts/header.php';
require_once 'app/views/layouts/navbar.php';
?>

<div class="d-flex">
    <?php require_once 'app/views/layouts/sidebar.php'; ?>
    
    <div class="main-content">
        <div class="container-fluid py-4">
            <h1 class="mb-4">Form Examples</h1>

            <div class="row">
                <!-- Basic Form -->
                <div class="col-lg-6 mb-4">
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Basic Form</h6>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="fullName" class="form-label">Full Name *</label>
                                    <input type="text" class="form-control" id="fullName" placeholder="Enter full name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="Enter phone number">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password *</label>
                                    <input type="password" class="form-control" id="password" placeholder="Enter password" required>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="terms">
                                    <label class="form-check-label" for="terms">
                                        I agree to terms and conditions
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Advanced Form -->
                <div class="col-lg-6 mb-4">
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Advanced Form Controls</h6>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="select" class="form-label">Select Option</label>
                                    <select class="form-select" id="select">
                                        <option selected>Choose...</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="multiSelect" class="form-label">Multiple Select</label>
                                    <select class="form-select" id="multiSelect" multiple>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="range" class="form-label">Range</label>
                                    <input type="range" class="form-range" id="range" min="0" max="100">
                                </div>
                                <div class="mb-3">
                                    <label for="color" class="form-label">Color Picker</label>
                                    <input type="color" class="form-control form-control-color" id="color" value="#563d7c">
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="form-label">Date</label>
                                    <input type="date" class="form-control" id="date">
                                </div>
                                <div class="mb-3">
                                    <label for="time" class="form-label">Time</label>
                                    <input type="time" class="form-control" id="time">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Product Form -->
                <div class="col-lg-12 mb-4">
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Product Information Form</h6>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="productName" class="form-label">Product Name *</label>
                                        <input type="text" class="form-control" id="productName" placeholder="Enter product name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="productCategory" class="form-label">Category *</label>
                                        <select class="form-select" id="productCategory" required>
                                            <option value="">Select Category</option>
                                            <option value="coffee">Coffee</option>
                                            <option value="tea">Tea</option>
                                            <option value="pastries">Pastries</option>
                                            <option value="smoothies">Smoothies</option>
                                            <option value="snacks">Snacks</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="price" class="form-label">Price ($) *</label>
                                        <input type="number" class="form-control" id="price" placeholder="0.00" step="0.01" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="stock" class="form-label">Stock Quantity *</label>
                                        <input type="number" class="form-control" id="stock" placeholder="0" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="discount" class="form-label">Discount (%)</label>
                                        <input type="number" class="form-control" id="discount" placeholder="0" min="0" max="100">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" rows="3" placeholder="Enter product description"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="productImage" class="form-label">Product Image</label>
                                    <input type="file" class="form-control" id="productImage" accept="image/*">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label d-block">Availability</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="availability" id="available" value="available" checked>
                                        <label class="form-check-label" for="available">
                                            Available
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="availability" id="outOfStock" value="out-of-stock">
                                        <label class="form-check-label" for="outOfStock">
                                            Out of Stock
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="availability" id="discontinued" value="discontinued">
                                        <label class="form-check-label" for="discontinued">
                                            Discontinued
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label d-block">Product Features</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="hotDrink">
                                        <label class="form-check-label" for="hotDrink">
                                            Hot Drink
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="coldDrink">
                                        <label class="form-check-label" for="coldDrink">
                                            Cold Drink
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="organic">
                                        <label class="form-check-label" for="organic">
                                            Organic
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="glutenFree">
                                        <label class="form-check-label" for="glutenFree">
                                            Gluten Free
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="tags" class="form-label">Tags</label>
                                    <input type="text" class="form-control" id="tags" placeholder="e.g., popular, bestseller, new">
                                    <small class="form-text text-muted">Separate tags with commas</small>
                                </div>

                                <hr>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-check-circle"></i> Save Product
                                    </button>
                                    <button type="reset" class="btn btn-secondary">
                                        <i class="bi bi-x-circle"></i> Clear Form
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Validation Example -->
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Validation Example</h6>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01" class="form-label">First name</label>
                                        <input type="text" class="form-control" id="validationCustom01" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a first name.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02" class="form-label">Last name</label>
                                        <input type="text" class="form-control" id="validationCustom02" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a last name.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustomEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="validationCustomEmail" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid email.
                                    </div>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="validationCustomCheck" required>
                                    <label class="form-check-label" for="validationCustomCheck">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Form validation
(function() {
    'use strict';
    window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
</script>

<?php require_once 'app/views/layouts/footer.php'; ?>
