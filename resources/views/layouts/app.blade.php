<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul', 'Aplikasi Akademik')</title>
    <style>
    :root { --utama: #f9a8d4; --utama-tua: #be185d; --utama-terang: #f472b6; --latar: #fff7fb; --garis: #fce7f3; --teks: #5b2145; --teks-muted: #a78497; }
    * { box-sizing: border-box; }
    body { margin: 0; font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif; background: var(--latar); color: var(--teks); line-height: 1.6; }
    .wadah { max-width: 1000px; margin: 0 auto; padding: 0 20px; }
    .topbar { background: #fce7f3; border-bottom: 2px solid var(--utama); padding: 14px 0; }
    .topbar .wadah { display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 10px; }
    .topbar h2 { margin: 0; font-size: 20px; color: var(--utama-tua); }
    nav a { color: var(--teks); text-decoration: none; padding: 8px 14px; border-radius: 999px; margin-left: 4px; }
    nav a:hover { background: #fbcfe8; }
    nav a.aktif { background: var(--utama-terang); color: #fff; font-weight: 600; }
    main { padding-top: 24px; padding-bottom: 24px; min-height: 60vh; }
    h1 { margin: 0 0 16px; font-size: 26px; color: var(--utama-tua); }
    footer { text-align: center; color: var(--teks-muted); padding: 20px 0; border-top: 1px solid var(--garis); font-size: 14px; }
    .panel { background: #fff; border: 1px solid var(--garis); border-radius: 16px; padding: 20px; box-shadow: 0 2px 8px rgba(244,114,182,.12); overflow-x: auto; }
    table.tabel { width: 100%; border-collapse: collapse; }
    .tabel th { background: #fce7f3; color: var(--utama-tua); text-align: left; padding: 10px 12px; font-weight: 600; border-bottom: 2px solid var(--utama); }
    .tabel th:first-child { border-radius: 10px 0 0 0; }
    .tabel th:last-child { border-radius: 0 10px 0 0; }
    .tabel td { padding: 10px 12px; border-bottom: 1px solid var(--garis); }
    .tabel tr.genap td { background: #fffafc; }
    .tabel tbody tr:hover td { background: #fef1f8; }
    .tabel .kosong { text-align: center; color: var(--teks-muted); padding: 24px; }
    .badge { display: inline-block; padding: 3px 10px; border-radius: 999px; font-size: 12px; font-weight: 600; }
    .badge-baru { background: #dcfce7; color: #166534; }
    .badge-aktif { background: #fce7f3; color: #9d174d; }
    .badge-akhir { background: #fef3c7; color: #92400e; }
    .badge-besar { background: #ffe4e6; color: #9f1239; }
    .btn { display: inline-block; background: var(--utama-terang); color: #fff; text-decoration: none; padding: 6px 14px; border-radius: 999px; font-size: 14px; }
    .btn:hover { background: var(--utama-tua); }
    .btn-abu { background: #fce7f3; color: var(--utama-tua); }
    .btn-abu:hover { background: #fbcfe8; }
    .detail { display: grid; grid-template-columns: 180px 1fr; gap: 10px 16px; margin: 0 0 20px; }
    .detail dt { color: var(--teks-muted); }
    .detail dd { margin: 0; font-weight: 600; }
    .kartu-wrap { display: flex; gap: 16px; flex-wrap: wrap; margin: 0 0 20px; }
    .kartu { flex: 1; min-width: 160px; background: #fff; border: 1px solid var(--garis); border-radius: 16px; padding: 16px; box-shadow: 0 2px 8px rgba(244,114,182,.12); }
    .kartu small { display: block; color: var(--teks-muted); margin-bottom: 4px; }
    .kartu strong { font-size: 26px; color: var(--utama-tua); }
    .batang-wrap { background: var(--garis); border-radius: 999px; height: 12px; }
    .batang { background: var(--utama-terang); height: 12px; border-radius: 999px; }
    .pagination { display: flex; gap: 6px; list-style: none; padding: 0; margin: 16px 0 0; flex-wrap: wrap; }
    .pagination .page-link { display: block; padding: 6px 12px; border: 1px solid var(--garis); border-radius: 999px; text-decoration: none; color: var(--utama-tua); background: #fff; }
    .pagination .active .page-link { background: var(--utama-terang); color: #fff; border-color: var(--utama-terang); }
    .pagination .disabled .page-link { color: var(--teks-muted); }
    .form-grup { margin-bottom: 14px; }
    .form-grup label { display: block; margin-bottom: 4px; color: var(--teks-muted); }
    .form-grup input { width: 100%; max-width: 420px; padding: 8px 12px; border: 1px solid var(--garis); border-radius: 10px; font: inherit; }
    .alert { background: #dcfce7; color: #166534; padding: 10px 16px; border-radius: 10px; margin-bottom: 16px; }
    </style>
</head>
<body>
    <header class="topbar">
        <div class="wadah">
            <h2>Sistem Informasi Akademik</h2>
            @include('partials.navbar')
        </div>
    </header>

    <main class="wadah">
        @if (session('pesan'))
            <div class="alert">{{ session('pesan') }}</div>
        @endif
        @yield('konten')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Praktikum Pemrograman Web</p>
    </footer>
</body>
</html>