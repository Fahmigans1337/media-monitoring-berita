<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - IMA Ebdesk</title>
    <!-- Menggunakan Bootstrap 5 dari folder assets -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .login-card {
            border: none;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .login-header {
            font-size: 1.5rem;
            font-weight: 600;
            color: #333;
        }
    </style>
</head>
<body>

<div class="container login-container">
    <div class="row justify-content-center w-100">
        <div class="col-md-8 col-lg-6">
            <div class="card login-card">
                <div class="card-body p-5">
                    
                    <div class="text-center mb-4">
                        <h1 class="login-header">IMA Application</h1>
                        <p class="text-muted">Silakan login untuk melanjutkan</p>
                    </div>

                    <!-- Menampilkan pesan error atau sukses -->
                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= esc($error) ?>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($success)): ?>
                        <div class="alert alert-success" role="alert">
                            <?= esc($success) ?>
                        </div>
                    <?php endif; ?>

                    <!-- Form Login -->
                    <form action="<?= site_url('auth/login') ?>" method="post">
                        
                        <!-- Token Keamanan CSRF (Wajib di CodeIgniter) -->
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="contoh@ebdesk.com" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password Anda" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Login</button>
                        </div>
                    </form>

                    <div class="text-center mt-4">
                        <p class="text-muted small">
                            © <?= date('Y') ?> Ebdesk Technology. All rights reserved.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
