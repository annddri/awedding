<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Awedding — Platform Undangan Pernikahan Digital Elegan & Modern</title>
    <meta name="description" content="Buat undangan pernikahan digital elegan, mewah, dan kekinian dalam hitungan menit bersama Awedding. Fitur lengkap: RSVP, Musik Latar, Amplop QRIS, & Custom Nama Tamu.">
    <meta name="keywords" content="undangan pernikahan digital, undangan digital, wedding invitation, Awedding, website pernikahan, rsvp digital">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://awedding.id/">
    <meta property="og:title" content="Awedding — Undangan Pernikahan Digital Elegan">
    <meta property="og:description" content="Solusi undangan pernikahan digital mewah & praktis. Bagikan momen bahagiamu tanpa batas.">
    <meta property="og:image" content="https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=1200&q=80">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>💍</text></svg>">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-slate-50 text-slate-800 selection:bg-rose-500 selection:text-white overflow-x-hidden">

    <!-- App Header & Navigation -->
    @include('components.navbar')

    <!-- Main Content Slot -->
    <main>
        {{ $slot }}
    </main>

    <!-- App Footer -->
    @include('components.footer')

</body>
</html>
