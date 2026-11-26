<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar - Lelang Ikan Hias</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: system-ui, sans-serif;
            color: #1a1a1a;
            background: linear-gradient(180deg, #1565c0 0%, #42a5f5 55%, #e3f2fd 100%);
            overflow-x: hidden;
        }

        .bubbles { position: fixed; inset: 0; overflow: hidden; z-index: 0; pointer-events: none; }
        .bubbles span {
            position: absolute;
            left: var(--l);
            top: var(--t);
            width: var(--s);
            height: var(--s);
            border-radius: 50%;
            background: radial-gradient(circle at 30% 30%, rgba(255,255,255,.95), rgba(255,255,255,.35) 40%, rgba(255,255,255,.12));
            border: 1px solid rgba(255,255,255,.6);
            box-shadow: inset 0 0 8px rgba(255,255,255,.5), 0 0 6px rgba(21,101,192,.18);
        }

        .card {
            position: relative;
            z-index: 1;
            width: calc(100% - 32px);
            max-width: 360px;
            margin: 24px 0;
            padding: 32px 24px;
            background: #fff;
            border: 1px solid #e5e5e5;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .15);
        }
        .logo {
            width: 84px;
            height: 84px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px dashed #b5b5b5;
            border-radius: 12px;
            color: #9a9a9a;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 2px;
        }
        h1 { margin: 0 0 4px; font-size: 22px; }
        .sub { margin: 0 0 20px; color: #666; font-size: 14px; }
        label { display: block; margin: 14px 0 4px; font-size: 14px; }
        input { width: 100%; box-sizing: border-box; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 15px; }
        button { display: block; width: 100%; box-sizing: border-box; margin-top: 18px; padding: 10px; border: 0; border-radius: 6px; background: #1a1a1a; color: #fff; font-size: 15px; cursor: pointer; }
        .foot { margin: 16px 0 0; text-align: center; color: #666; font-size: 14px; }
        .foot a { color: #1565c0; }
        .error { margin-bottom: 8px; padding: 10px; background: #fdecec; color: #b42318; border-radius: 6px; font-size: 14px; }
    </style>
</head>
<body>
    <div class="bubbles" aria-hidden="true">
        <span style="--s:40px;--l:8%;--t:70%"></span>
        <span style="--s:24px;--l:18%;--t:30%"></span>
        <span style="--s:60px;--l:26%;--t:82%"></span>
        <span style="--s:18px;--l:36%;--t:14%"></span>
        <span style="--s:48px;--l:12%;--t:48%"></span>
        <span style="--s:30px;--l:58%;--t:10%"></span>
        <span style="--s:70px;--l:72%;--t:75%"></span>
        <span style="--s:22px;--l:80%;--t:35%"></span>
        <span style="--s:44px;--l:88%;--t:58%"></span>
        <span style="--s:28px;--l:92%;--t:15%"></span>
        <span style="--s:36px;--l:46%;--t:90%"></span>
        <span style="--s:54px;--l:64%;--t:22%"></span>
    </div>

    <div class="card">
        <div class="logo">LOGO</div>

        <h1>Daftar</h1>
        <p class="sub">Buat akun pembeli</p>

        @if ($errors->any())
            <div class="error">{{ $errors->first() }}</div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="name">Nama</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>

            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>

            <label for="password">Kata sandi</label>
            <input id="password" type="password" name="password" required>

            <label for="password_confirmation">Ulangi kata sandi</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required>

            <button type="submit">Daftar</button>
        </form>

        <p class="foot">Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></p>
    </div>
</body>
</html>
