<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWNED - Cek Kebocoran Data Anda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-[#F4F6FA] text-gray-800 font-sans min-h-screen flex flex-col justify-between">

    <nav class="bg-[#0B132B] px-6 py-4 flex justify-between items-center text-white">
        <div class="flex items-center space-x-2">
            <span class="text-xl font-bold tracking-wider text-blue-400">❖ PWNED</span>
        </div>
        <div class="hidden md:flex space-x-6 text-sm text-gray-300">
            <a href="/" class="text-blue-400 font-semibold border-b-2 border-blue-400 pb-1">HOME</a>
            <a href="#cek-section" class="hover:text-white">CEK EMAIL</a>
            <a href="#statistik-section" class="hover:text-white">STATISTIK</a>
            <a href="#" class="hover:text-white">TENTANG</a>
        </div>
        <a href="#cek-section" class="bg-blue-600 hover:bg-blue-700 text-sm font-semibold px-4 py-2 rounded">CEK EMAIL</a>
    </nav>

    <main class="flex-grow max-w-5xl w-full mx-auto px-6 py-12 space-y-16">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center bg-white p-8 rounded-2xl shadow-sm">
            <div class="space-y-6">
                <h1 class="text-4xl font-extrabold tracking-tight text-gray-900">
                    Is Your Email <br><span class="text-rose-500 font-black">PWNED?</span>
                </h1>
                <p class="text-gray-600 text-base">
                    Cek apakah email Anda pernah terlibat dalam kebocoran data.
                </p>
                <a href="#cek-section" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded-xl shadow-md transition">
                    CEK EMAIL SEKARANG →
                </a>
            </div>
            <div class="flex justify-center bg-blue-50/50 p-6 rounded-2xl">
                <div class="text-center space-y-2">
                    <span class="text-7xl">🥷</span>
                    <div class="bg-rose-500 text-white text-xs px-3 py-1 rounded-full font-bold uppercase tracking-widest animate-pulse">Data Breach</div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div class="space-y-4">
                <h2 class="text-2xl font-bold text-gray-900 flex items-center gap-2">
                    <span class="text-rose-500">■</span> Apa itu Kebocoran Data?
                </h2>
                <p class="text-gray-600 leading-relaxed text-sm">
                    Kebocoran data terjadi ketika informasi pribadi seperti email, password, dan data penting lainnya dicuri dan disebarkan di internet tanpa izin.
                </p>
            </div>
            <div class="flex justify-center bg-white p-6 rounded-xl border border-gray-100 shadow-sm max-w-sm mx-auto">
                <div class="text-center">
                    <span class="text-5xl">💻</span>
                    <span class="text-3xl block mt-2">🔒</span>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm text-center space-y-3">
                <div class="text-blue-600 text-3xl">🛡️</div>
                <h3 class="font-bold text-gray-900">Lindungi Akun Anda</h3>
                <p class="text-gray-500 text-xs leading-relaxed">Mengetahui kebocoran lebih awal dapat membantu Anda mengamankan akun penting.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm text-center space-y-3">
                <div class="text-blue-600 text-3xl">🔍</div>
                <h3 class="font-bold text-gray-900">Cek dengan Mudah</h3>
                <p class="text-gray-500 text-xs leading-relaxed">Masukkan email Anda dan kami akan memeriksa ribuan data kebocoran.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm text-center space-y-3">
                <div class="text-blue-600 text-3xl">📈</div>
                <h3 class="font-bold text-gray-900">Data Terpercaya</h3>
                <p class="text-gray-500 text-xs leading-relaxed">Kami menggunakan sumber data kebocoran yang diperbarui secara berkala.</p>
            </div>
        </div>

        <div class="bg-[#0B132B] text-white rounded-xl p-8 grid grid-cols-3 text-center gap-4">
            <div>
                <div class="text-2xl md:text-3xl font-bold text-blue-400">352K+</div>
                <div class="text-xs text-gray-400 mt-1">Akun Bocor Tahun Ini</div>
            </div>
            <div>
                <div class="text-2xl md:text-3xl font-bold text-blue-400">48</div>
                <div class="text-xs text-gray-400 mt-1">Sumber Kebocoran</div>
            </div>
            <div>
                <div class="text-2xl md:text-3xl font-bold text-blue-400">100%</div>
                <div class="text-xs text-gray-400 mt-1">Gratis Digunakan</div>
            </div>
        </div>

        <hr id="cek-section" class="border-dashed border-gray-300 my-12">

        <div class="bg-white p-8 rounded-2xl border border-gray-200 shadow-sm space-y-6">
            <div class="text-center space-y-2">
                <h2 class="text-2xl font-bold text-gray-900">Cek Email Anda</h2>
                <p class="text-xs text-gray-500">Masukkan email yang ingin Anda periksa.</p>
            </div>

            <form action="/cek-email#cek-section" method="POST" class="max-w-xl mx-auto flex flex-col sm:flex-row gap-2">
                <?= csrf_field() ?>
                <input type="email" name="email" placeholder="contoh@email.com" required
                       value="<?= old('email', $email ?? '') ?>"
                       class="w-full px-4 py-3 bg-gray-50 text-gray-900 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded-lg flex items-center justify-center gap-2 whitespace-nowrap">
                    CEK SEKARANG 🔍
                </button>
            </form>

            <?php if ($status !== null): ?>
                <div class="border-t border-dashed border-gray-200 pt-6 space-y-6">
                    <h3 class="text-center text-xs font-semibold uppercase tracking-wider text-gray-400">Hasil Pemeriksaan</h3>
                    
                    <?php if ($status === 'safe'): ?>
                        <div class="max-w-2xl mx-auto space-y-4">
                            <div class="border-2 border-emerald-500 bg-emerald-50 rounded-xl p-5 flex items-center gap-4">
                                <div class="bg-emerald-500 text-white p-2 rounded-full text-xl">✓</div>
                                <div>
                                    <h4 class="text-emerald-700 font-bold text-lg">SAFE</h4>
                                    <p class="text-gray-600 text-sm">Tidak ada kebocoran data ditemukan untuk email ini.</p>
                                </div>
                            </div>
                            <div class="bg-gray-50 border border-gray-200 rounded-lg p-4 text-xs text-gray-500 flex items-center gap-2">
                                💡 <span>Tetap jaga keamanan akun Anda dengan menggunakan password yang kuat dan autentikasi dua faktor.</span>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($status === 'pwned'): ?>
                        <div class="max-w-2xl mx-auto space-y-6">
                            <div class="border-2 border-rose-500 bg-rose-50 rounded-xl p-5 flex items-center gap-4">
                                <div class="bg-rose-500 text-white p-2 rounded-full text-xl">⚠️</div>
                                <div>
                                    <h4 class="text-rose-600 font-bold text-lg">PWNED!</h4>
                                    <p class="text-gray-600 text-sm">Email ini ditemukan dalam kebocoran data.</p>
                                </div>
                            </div>
                            <div class="bg-gray-50 border border-gray-200 rounded-lg p-4 text-xs text-gray-500 flex items-center gap-2">
                                🔒 <span>Disarankan untuk segera mengubah password Anda pada akun yang terkait.</span>
                            </div>

                            <div class="space-y-2">
                                <h4 class="text-xs font-bold uppercase tracking-wider text-gray-400">Detail Kebocoran</h4>
                                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white shadow-sm">
                                    <table class="w-full text-left text-xs text-gray-600">
                                        <thead class="bg-gray-50 border-b border-gray-200 text-gray-500 uppercase font-semibold">
                                            <tr>
                                                <th class="px-4 py-3">Sumber Kebocoran</th>
                                                <th class="px-4 py-3">Tanggal</th>
                                                <th class="px-4 py-3">Jenis Data</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-100">
                                            <?php foreach ($details as $detail): ?>
                                                <tr>
                                                    <td class="px-4 py-3 font-medium text-gray-900">🌐 <?= esc($detail['sumber']) ?></td>
                                                    <td class="px-4 py-3 text-gray-500"><?= esc($detail['tanggal']) ?></td>
                                                    <td class="px-4 py-3 text-rose-600 font-medium"><?= esc($detail['jenis']) ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="text-center pt-4">
                        <a href="/" class="text-blue-600 hover:underline text-sm font-medium">🔄 Cek Email Lainnya</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <?php if ($status !== null): ?>
            <div id="statistik-section" class="bg-white p-8 rounded-2xl border border-gray-200 shadow-sm space-y-8">
                <div class="text-center space-y-1">
                    <h2 class="text-2xl font-bold text-gray-900">Statistik Kebocoran Data</h2>
                    <p class="text-xs text-gray-500">Lihat bagaimana tren kebocoran data berkembang.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="border border-gray-200 rounded-xl p-4 flex justify-between items-center bg-gray-50">
                        <div>
                            <span class="text-xs uppercase text-gray-400 block font-semibold">Sumber Aktif</span>
                            <span class="text-2xl font-bold text-gray-900"><?= $statistik['sumber_aktif'] ?></span>
                            <span class="text-emerald-600 font-medium text-xs block mt-1">+5 bulan ini ↗</span>
                        </div>
                        <span class="text-2xl">💻</span>
                    </div>
                    <div class="border border-gray-200 rounded-xl p-4 flex justify-between items-center bg-gray-50">
                        <div>
                            <span class="text-xs uppercase text-gray-400 block font-semibold">Tingkat Kebocoran</span>
                            <span class="text-2xl font-bold text-rose-600"><?= $statistik['tingkat_kebocoran'] ?></span>
                            <span class="text-rose-600 font-medium text-xs block mt-1">Tinggi 🔴</span>
                        </div>
                        <span class="text-2xl">📊</span>
                    </div>
                    <div class="border border-gray-200 rounded-xl p-4 flex justify-between items-center bg-gray-50">
                        <div>
                            <span class="text-xs uppercase text-gray-400 block font-semibold">Total Akun Bocor</span>
                            <span class="text-2xl font-bold text-gray-900"><?= $statistik['total_akun'] ?></span>
                            <span class="text-emerald-600 font-medium text-xs block mt-1">+10.2% dari bulan lalu</span>
                        </div>
                        <span class="text-2xl">👥</span>
                    </div>
                </div>

                <div class="space-y-2">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-gray-400">Tren Kebocoran (10 Tahun Terakhir)</h4>
                    <div class="border border-gray-200 rounded-xl p-4 max-w-2xl mx-auto bg-gray-50">
                        <canvas id="trenChart" height="120"></canvas>
                    </div>
                </div>

                <?php if ($status === 'pwned'): ?>
                    <div class="space-y-3">
                        <h4 class="text-xs font-bold uppercase tracking-wider text-gray-400">Sumber Kebocoran Terbesar</h4>
                        <div class="space-y-3 max-w-2xl mx-auto">
                            <?php foreach ($statistik['top_sumber'] as $index => $sumber): ?>
                                <div class="space-y-1">
                                    <div class="flex justify-between text-xs font-medium">
                                        <span class="text-gray-800"><?= $index+1 ?>. <?= $sumber['nama'] ?></span>
                                        <span class="text-gray-900 font-bold"><?= $sumber['jumlah'] ?></span>
                                    </div>
                                    <div class="w-full bg-gray-100 rounded-full h-2">
                                        <div class="bg-rose-500 h-2 rounded-full" style="width: <?= $sumber['persen'] ?>;"></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

    </main>

    <div class="bg-[#0B132B] text-white py-10 border-t border-gray-800 text-center px-4 space-y-4">
        <span class="text-3xl block">🛡️</span>
        <h3 class="text-xl font-bold">Jaga Keamanan Data Anda</h3>
        <p class="text-xs text-gray-400 max-w-md mx-auto">Periksa email Anda secara berkala dan pastikan akun Anda selalu aman.</p>
        <a href="#cek-section" class="inline-block bg-blue-600 hover:bg-blue-700 text-xs font-semibold px-4 py-2 rounded-lg">CEK EMAIL SEKARANG →</a>
    </div>

    <footer class="bg-[#070D1F] text-center py-4 text-xs text-gray-500 border-t border-gray-900">
        PWNED © 2026 | Cek Kebocoran Data dengan Aman
    </footer>

    <?php if ($status !== null): ?>
    <script>
        const ctx = document.getElementById('trenChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024'],
                datasets: [{
                    label: 'Jumlah Akun Bocor',
                    data: [18000, 32000, 25000, 48000, 38000, 52000, 40000, 58000, 72000, 62000],
                    borderColor: '#2563eb',
                    backgroundColor: 'rgba(37, 99, 235, 0.1)',
                    tension: 0.3,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { display: false } },
                scales: { y: { beginAtZero: true } }
            }
        });
    </script>
    <?php endif; ?>

</body>
</html>