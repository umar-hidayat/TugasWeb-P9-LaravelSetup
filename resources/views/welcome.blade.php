<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Rutin 9 - Setup Laravel</title>
    <!-- Bonus: Styling Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen p-8 flex items-center justify-center font-sans">
    <div class="max-w-xl w-full bg-slate-800 border border-slate-700 p-6 rounded-2xl shadow-xl">
        <h1 class="text-3xl font-bold text-indigo-400">Halo, {{ $name }}! 👋</h1>
        <p class="mt-2 text-slate-400">Selamat datang di tugas rutin P9: Setup Framework Laravel.</p>

        <div class="mt-6">
            <h2 class="text-lg font-semibold text-slate-200 border-b border-slate-700 pb-2">Daftar Mata Kuliah Semester Ini:</h2>
            <ul class="mt-3 space-y-2">
                @foreach ($courses as $c)
                    <li class="bg-slate-700/50 px-4 py-2 rounded-lg text-sm text-slate-300 border border-slate-600/50 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-indigo-400"></span>
                        {{ $c }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>