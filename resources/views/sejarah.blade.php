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
                        Sejarah SMK Negeri 7 Jakarta
                    </h2>

                    <p class="history-text">
                        SMK Negeri 7 Jakarta merupakan salah satu sekolah menengah kejuruan negeri di Jakarta Timur
                        yang berfokus pada pengembangan kompetensi keahlian teknologi dan bisnis. Sekolah ini
                        telah menjadi lembaga pendidikan yang menghasilkan lulusan berkompeten sejak masa awal
                        pendiriannya dan terus mengembangkan fasilitas serta kualitas pembelajaran sejalan dengan
                        perkembangan dunia industri.
                    </p>

                    <p class="history-text mt-3">
                        Seiring dengan berkembangnya kebutuhan tenaga kerja yang terampil, SMK Negeri 7 Jakarta terus
                        berinovasi dalam kurikulum, menjalin kerja sama industri, dan meningkatkan kompetensi guru.
                        Sekolah ini kini menjadi salah satu SMK unggulan di Provinsi DKI Jakarta.
                    </p>

                </div>
            </div>
        </div>

        {{-- Card Visi dan Misi --}}
        <div class="row justify-content-center g-4">

            <div class="col-lg-5">
                <div class="card shadow visi-misi-card h-100">
                    <h2 class="visi-misi-title mb-3 text-center">Visi SMK Negeri 7 Jakarta</h2>

                    <p class="visi-misi-text">
                        Menjadi sekolah menengah kejuruan yang unggul, berkarakter, berprestasi, dan mampu bersaing
                        di tingkat nasional maupun internasional.
                    </p>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card shadow visi-misi-card h-100">
                    <h2 class="visi-misi-title mb-3 text-center">Misi SMK Negeri 7 Jakarta</h2>

                    <ul class="misi-list">
                        <li>Meningkatkan keimanan dan ketakwaan peserta didik.</li>
                        <li>Mengembangkan kompetensi keahlian sesuai kebutuhan dunia industri.</li>
                        <li>Meningkatkan prestasi akademik dan non-akademik.</li>
                        <li>Mewujudkan pembelajaran berbasis teknologi dan informasi.</li>
                        <li>Menjalin kerja sama industri untuk penempatan magang dan lulusan.</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

</x-layouts.homepage>
