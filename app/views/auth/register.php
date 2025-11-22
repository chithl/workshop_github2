<?php 
$pageTitle = 'Register';
require_once 'app/views/layouts/header.php';
?>

<div class="container-fluid vh-100">
    <div class="row h-100">
        <!-- Left Side - Image/Branding -->
        <div class="col-lg-6 d-none d-lg-flex bg-success align-items-center justify-content-center">
            <div class="text-center text-white p-5">
                <i class="bi bi-cup-hot-fill" style="font-size: 120px;"></i>
                <h1 class="mt-4 mb-3">Join Us Today!</h1>
                <p class="lead">Start managing your coffee shop efficiently</p>
                <ul class="list-unstyled mt-4 text-start" style="max-width: 400px; margin: 0 auto;">
                    <li class="mb-3"><i class="bi bi-check-circle-fill me-2"></i> Easy inventory management</li>
                    <li class="mb-3"><i class="bi bi-check-circle-fill me-2"></i> Track sales and revenue</li>
                    <li class="mb-3"><i class="bi bi-check-circle-fill me-2"></i> Customer management</li>
                    <li class="mb-3"><i class="bi bi-check-circle-fill me-2"></i> Detailed analytics</li>
                </ul>
            </div>
        </div>

        <!-- Right Side - Registration Form -->
        <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="w-100" style="max-width: 500px; padding: 2rem;">
                <div class="text-center mb-4">
                    <i class="bi bi-cup-hot-fill text-success" style="font-size: 60px;"></i>
                    <h2 class="mt-3 mb-2">Create Account</h2>
                    <p class="text-muted">Fill in the details to get started</p>
                </div>

                <form action="" method="POST" class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">First Name *</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="John" required>
                            <div class="invalid-feedback">
                                Please provide your first name.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Last Name *</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Doe" required>
                            <div class="invalid-feedback">
                                Please provide your last name.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address *</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="john.doe@example.com" required>
                            <div class="invalid-feedback">
                                Please provide a valid email.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-phone"></i>
                            </span>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="+1 234 567 8900">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="shopName" class="form-label">Coffee Shop Name *</label>
                        <input type="text" class="form-control" id="shopName" name="shopName" placeholder="My Coffee Shop" required>
                        <div class="invalid-feedback">
                            Please provide your shop name.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password *</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-lock"></i>
                            </span>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Minimum 8 characters" required minlength="8">
                            <div class="invalid-feedback">
                                Password must be at least 8 characters.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password *</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-lock-fill"></i>
                            </span>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Repeat password" required>
                            <div class="invalid-feedback">
                                Passwords must match.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="terms" required>
                        <label class="form-check-label" for="terms">
                            I agree to the <a href="#" class="text-decoration-none">Terms and Conditions</a>
                        </label>
                        <div class="invalid-feedback">
                            You must agree to the terms.
                        </div>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-lg">
                            <i class="bi bi-person-plus"></i> Create Account
                        </button>
                    </div>
                </form>

                <div class="text-center mt-4">
                    <p class="mb-0">Already have an account? <a href="index.php?page=login" class="text-decoration-none">Login here</a></p>
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

// Password confirmation validation
document.getElementById('confirmPassword').addEventListener('input', function() {
    const password = document.getElementById('password').value;
    const confirmPassword = this.value;
    
    if (password !== confirmPassword) {
        this.setCustomValidity('Passwords do not match');
    } else {
        this.setCustomValidity('');
    }
});
</script>

<?php require_once 'app/views/layouts/footer.php'; ?>
