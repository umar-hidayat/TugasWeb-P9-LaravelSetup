<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Tugas Rutin 9 Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen p-8 flex flex-col items-center justify-center font-sans">
    <div class="max-w-xl w-full bg-slate-800 border border-slate-700 p-8 rounded-2xl shadow-xl">
        <h1 class="text-3xl font-bold text-indigo-400 mb-2">Hubungi Saya</h1>
        <p class="text-slate-400 text-sm mb-6">Silakan tinggalkan pesan melalui formulir kontak berikut.</p>

        <form class="space-y-4" onsubmit="event.preventDefault();">
            <div>
                <label class="block text-sm font-medium text-slate-300 mb-1">Nama Lengkap</label>
                <input type="text" placeholder="Masukkan nama..." class="w-full bg-slate-700/50 border border-slate-600 rounded-lg px-4 py-2.5 text-sm text-slate-100 focus:outline-none focus:border-indigo-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-300 mb-1">Email</label>
                <input type="email" placeholder="nama@domain.com" class="w-full bg-slate-700/50 border border-slate-600 rounded-lg px-4 py-2.5 text-sm text-slate-100 focus:outline-none focus:border-indigo-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-300 mb-1">Pesan</label>
                <textarea rows="4" placeholder="Tuliskan pesan Anda di sini..." class="w-full bg-slate-700/50 border border-slate-600 rounded-lg px-4 py-2.5 text-sm text-slate-100 focus:outline-none focus:border-indigo-500"></textarea>
            </div>
            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-500 text-white text-sm font-semibold py-2.5 rounded-lg transition-all">
                Kirim Pesan
            </button>
        </form>

        <div class="mt-6 pt-4 border-t border-slate-700">
            <a href="/" class="text-sm text-indigo-400 hover:underline">← Kembali ke Utama</a>
        </div>
    </div>
</body>
</html>