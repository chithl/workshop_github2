<?php 
$pageTitle = 'Login';
require_once 'app/views/layouts/header.php';
?>

<div class="container-fluid vh-100">
    <div class="row h-100">
        <!-- Left Side - Image/Branding -->
        <div class="col-lg-6 d-none d-lg-flex bg-primary align-items-center justify-content-center">
            <div class="text-center text-white p-5">
                <i class="bi bi-cup-hot-fill" style="font-size: 120px;"></i>
                <h1 class="mt-4 mb-3">Coffee Shop Admin</h1>
                <p class="lead">Manage your coffee shop with ease</p>
            </div>
        </div>

        <!-- Right Side - Login Form -->
        <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="w-100" style="max-width: 450px; padding: 2rem;">
                <div class="text-center mb-5">
                    <i class="bi bi-cup-hot-fill text-primary" style="font-size: 60px;"></i>
                    <h2 class="mt-3 mb-2">Welcome Back!</h2>
                    <p class="text-muted">Please login to your account</p>
                </div>

                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-lock"></i>
                            </span>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                        </div>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">
                            Remember me
                        </label>
                        <a href="#" class="float-end text-decoration-none">Forgot Password?</a>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="bi bi-box-arrow-in-right"></i> Login
                        </button>
                    </div>
                </form>

                <div class="text-center mt-4">
                    <p class="mb-0">Don't have an account? <a href="index.php?page=register" class="text-decoration-none">Register here</a></p>
                </div>

                <hr class="my-4">

                <div class="text-center">
                    <p class="text-muted mb-3">Or login with</p>
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-danger">
                            <i class="bi bi-google"></i> Login with Google
                        </button>
                        <button class="btn btn-outline-primary">
                            <i class="bi bi-facebook"></i> Login with Facebook
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'app/views/layouts/footer.php'; ?>
