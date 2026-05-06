<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - SiParkir</title>

    <link rel="icon" type="image/x-icon" href="<?= base_url('logo.ico') ?>">
    <link href="<?= base_url('startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
    <link href="<?= base_url('startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css') ?>" rel="stylesheet">

    <style>
        body {
            background: #4e73df;
            font-family: 'Nunito', sans-serif;
        }
        .login-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .login-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,.15);
            width: 100%;
            max-width: 420px;
            padding: 40px 32px;
        }
        .login-card h4 {
            font-weight: 800;
            color: #333;
        }
        .login-card .subtitle {
            font-size: .85rem;
            color: #858796;
            margin-bottom: 24px;
        }
        .form-group label {
            font-size: .8rem;
            font-weight: 700;
            color: #6e707e;
        }
        .btn-login {
            background: #4e73df;
            border: none;
            color: #fff;
            font-weight: 700;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
        }
        .btn-login:hover { background: #2e59d9; color: #fff; }
        .btn-demo {
            background: #f8f9fc;
            border: 1px solid #e3e6f0;
            color: #6e707e;
            font-weight: 600;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            font-size: .85rem;
        }
        .btn-demo:hover { background: #eaecf4; color: #4e73df; }
        .divider {
            display: flex;
            align-items: center;
            margin: 18px 0;
            color: #d1d3e2;
            font-size: .8rem;
        }
        .divider::before, .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #e3e6f0;
        }
        .divider span { padding: 0 12px; }
        .alert-error {
            display: none;
            background: #fff3f3;
            border: 1px solid #f5c6cb;
            border-left: 4px solid #e74a3b;
            color: #e74a3b;
            padding: 10px 14px;
            border-radius: 5px;
            font-size: .82rem;
            font-weight: 600;
            margin-bottom: 16px;
        }
    </style>
</head>
<body>

<div class="login-wrapper">
    <div class="login-card">
        <div class="text-center mb-4">
            <i class="fas fa-parking text-primary" style="font-size:2.2rem"></i>
            <h4 class="mt-2">SiParkir</h4>
            <p class="subtitle">Masuk ke akun Anda untuk melanjutkan</p>
        </div>

        <div class="alert-error" id="alertError"></div>

        <form id="loginForm" onsubmit="return handleLogin(event)">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="password" placeholder="Masukkan password" required>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" onclick="togglePassword()">
                            <i class="fas fa-eye" id="eyeIcon"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="form-group d-flex justify-content-between align-items-center">
                <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="rememberMe">
                    <label class="custom-control-label" for="rememberMe">Ingat saya</label>
                </div>
                <a href="#" class="small" style="color:#4e73df;font-weight:600">Lupa password?</a>
            </div>
            <button type="submit" class="btn btn-login" id="btnLogin">
                <i class="fas fa-sign-in-alt mr-1"></i> Masuk
            </button>
        </form>

        <div class="divider"><span>atau</span></div>

        <button class="btn btn-demo" onclick="demoLogin()">
            <i class="fas fa-user mr-1"></i> Masuk sebagai Demo
        </button>

        <div class="text-center mt-3">
            <a href="<?= base_url('/') ?>" class="small" style="color:#858796">
                <i class="fas fa-arrow-left mr-1"></i> Kembali ke Beranda
            </a>
        </div>
    </div>
</div>

<script src="<?= base_url('startbootstrap-sb-admin-2-gh-pages/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('startbootstrap-sb-admin-2-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script>
function togglePassword() {
    var pw = document.getElementById('password');
    var icon = document.getElementById('eyeIcon');
    if (pw.type === 'password') {
        pw.type = 'text';
        icon.className = 'fas fa-eye-slash';
    } else {
        pw.type = 'password';
        icon.className = 'fas fa-eye';
    }
}

function handleLogin(e) {
    e.preventDefault();
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    if (email === 'admin@siparkir.id' && password === 'admin123') {
        var btn = document.getElementById('btnLogin');
        btn.innerHTML = '<i class="fas fa-spinner fa-spin mr-1"></i> Memproses...';
        btn.disabled = true;
        setTimeout(function() {
            window.location.href = '<?= base_url("/dashboard") ?>';
        }, 800);
    } else {
        var alert = document.getElementById('alertError');
        alert.textContent = 'Email atau password salah! Gunakan: admin@siparkir.id / admin123';
        alert.style.display = 'block';
    }
    return false;
}

function demoLogin() {
    document.getElementById('email').value = 'admin@siparkir.id';
    document.getElementById('password').value = 'admin123';
    document.getElementById('alertError').style.display = 'none';
    setTimeout(function() {
        document.getElementById('loginForm').dispatchEvent(new Event('submit'));
    }, 300);
}
</script>

</body>
</html>
