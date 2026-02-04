<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">

    <style>
        body {
            background: #f5f6fa;
        }
        .card {
            margin-top: 120px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-header bg-success text-white text-center">
                    <h4>Reset Password</h4>
                </div>

                <div class="card-body">

                    <!-- Error message -->
                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>

                    <?= form_open('admin/reset-password') ?>
                    <?= csrf_field() ?>

                    <!-- Hidden Token -->
                    <input type="hidden" name="token" value="<?= esc($token) ?>">

                    <div class="form-group mb-3">
                        <label>New Password</label>
                        <input type="password"
                               name="password"
                               class="form-control"
                               placeholder="Enter new password"
                               required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Confirm Password</label>
                        <input type="password"
                               name="cpassword"
                               class="form-control"
                               placeholder="Confirm password"
                               required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">
                            Reset Password
                        </button>
                    </div>

                    <?= form_close() ?>

                </div>

                <div class="card-footer text-center">
                    <a href="<?= base_url('admin/login') ?>">Back to Login</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
