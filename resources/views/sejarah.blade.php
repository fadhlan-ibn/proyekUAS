<x-layouts.homepage title="Sejarah Sekolah">

    <style>
        .history-card, .visi-misi-card {
            border-radius: 16px;
            padding: 25px;
            background: white;
            transition: all 0.3s ease;
        }

        .history-card:hover,
        .visi-misi-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .history-title, .visi-misi-title {
            font-weight: 700;
            font-size: 1.7rem;
        }

        .history-text, .visi-misi-text {
            text-align: justify;
            line-height: 1.7;
            font-size: 1.05rem;
        }

        ul.misi-list li {
            margin-bottom: 8px;
            line-height: 1.7;
        }
    </style>

    <div class="container py-5">
        {{-- Card Sejarah --}}
        <div class="row justify-content-center mb-3">
            <div class="col-lg-10">
                <div class="card shadow history-card">

                    <h2 class="history-title mb-4 text-center">
                        Sejarah SMA Negeri 9 Kota Bogor
                    </h2>

                    <p class="history-text">
                        Bangunan SMAN 9 Bogor memiliki sejarah panjang yang dimulai sejak era kolonial Belanda,
                        di mana gedung tersebut awalnya dikenal sebagai <strong>Kartini School</strong> atau
                        <strong>Sekolah Kartini</strong>, yang didirikan secara resmi pada tanggal <strong>2 Mei 1915</strong>.
                        Pada zamannya, sekolah ini merupakan institusi pendidikan eksklusif yang ditujukan khusus
                        bagi anak perempuan pribumi dari kalangan berada.
                    </p>

                    <p class="history-text mt-3">
                        Setelah melalui perjalanan sejarah panjang dan perubahan fungsi bangunan pasca kemerdekaan,
                        <strong>SMAN 9 Bogor resmi didirikan pada Mei 2001</strong> sebagai filial dari SMAN 6 Bogor.
                        Kini sekolah ini telah menjadi institusi mandiri yang berfokus pada pendidikan karakter,
                        prestasi akademik dan non-akademik, serta kesiapan menghadapi tantangan global.
                    </p>

                </div>
            </div>
        </div>

        {{-- Card Visi & Misi --}}
        <div class="row justify-content-center g-4">

            {{-- Card Visi --}}
            <div class="col-lg-5">
                <div class="card shadow visi-misi-card h-100">
                    <h2 class="visi-misi-title mb-3 text-center">Visi SMAN 9 Bogor</h2>

                    <p class="visi-misi-text">
                        Visi sekolah ini diwujudkan melalui berbagai misi yang mengarah pada pembentukan generasi yang:
                        <strong>bertakwa, cerdas, berkarakter, menguasai IPTEK, berwawasan lingkungan,</strong>
                        dan memiliki <strong>daya saing global</strong>.
                    </p>
                </div>
            </div>

            {{-- Card Misi --}}
            <div class="col-lg-5">
                <div class="card shadow visi-misi-card h-100">
                    <h2 class="visi-misi-title mb-3 text-center">Misi SMAN 9 Bogor</h2>

                    <ul class="misi-list">
                        <li>Meningkatkan keimanan dan ketakwaan siswa.</li>
                        <li>Menanamkan dan memperkuat karakter unggul.</li>
                        <li>Meningkatkan prestasi akademik serta non-akademik.</li>
                        <li>Mengoptimalkan pemanfaatan IPTEK dalam pembelajaran.</li>
                        <li>Mengembangkan budaya sekolah yang sehat dan berwawasan lingkungan.</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

</x-layouts.homepage>
