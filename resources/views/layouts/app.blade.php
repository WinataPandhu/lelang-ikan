<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Lelang Ikan Hias</title>
    <style>
        body { margin: 0; font-family: system-ui, sans-serif; background: #fff; color: #1a1a1a; }
        header { display: flex; justify-content: space-between; align-items: center; padding: 14px 24px; border-bottom: 1px solid #e5e5e5; }
        main { padding: 24px; }
        button { padding: 8px 14px; border: 1px solid #ccc; background: #fff; border-radius: 6px; cursor: pointer; }
    </style>
</head>
<body>
    <header>
        <strong>Lelang Ikan Hias</strong>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Keluar</button>
        </form>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
