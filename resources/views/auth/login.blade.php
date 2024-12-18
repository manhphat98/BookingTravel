<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập - Travel</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: url('https://source.unsplash.com/1600x900/?travel,landscape') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.9);
            width: 400px;
            padding: 20px 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .login-header {
            font-size: 28px;
            font-weight: bold;
            color: #34495e;
            margin-bottom: 15px;
            position: relative;
        }
        .login-header::after {
            content: '';
            width: 50px;
            height: 3px;
            background: #6ab7ff;
            display: block;
            margin: 10px auto 0 auto;
            border-radius: 2px;
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            color: #555;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            box-sizing: border-box;
        }
        .form-group input:focus {
            border-color: #6ab7ff;
            outline: none;
        }
        .form-check {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .form-check input {
            width: auto;
        }
        .form-check label {
            font-size: 14px;
            color: #555;
        }
        .btn {
            width: 100%;
            padding: 10px;
            background: #6ab7ff;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background: #0056b3;
        }
        .form-footer {
            margin-top: 15px;
            font-size: 14px;
        }
        .form-footer a {
            color: #6ab7ff;
            text-decoration: none;
        }
        .form-footer a:hover {
            text-decoration: underline;
        }
        .travel-icon {
            width: 200px;
            height: 80px;
            margin: 0 auto 20px;
            background: url('{{ asset('fontend/imgs/logo_BookingTravel.png') }}') no-repeat center center;
            background-size: cover;
        }
        .error {
            font-size: 12px;
            color: red;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="travel-icon"></div>
        <div class="login-header">Đăng Nhập Hệ Thống</div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Địa chỉ Email:</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input id="password" type="password" name="password" required autocomplete="current-password">
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-check">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">Lưu thông tin</label>
            </div>
            <button type="submit" class="btn">Đăng Nhập</button>
            @if (Route::has('password.request'))
            <div class="form-footer">
                <a href="{{ route('password.request') }}">Quên mật khẩu?</a>
            </div>
            @endif
        </form>
    </div>
</body>
</html>
