<x-layouts.homepage title="Kontak Sekolah">

    <style>
        .contact-card {
            border-radius: 16px;
            padding: 25px;
            background: white;
            transition: all 0.3s ease;
            text-align: center;
        }
        .contact-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        .contact-icon {
            font-size: 2.8rem;
            margin-bottom: 10px;
            color: #0d6efd;
        }
    </style>

    <div class="container py-5">
        <h2 class="mb-3 text-center fw-bold text-white">Kontak Sekolah</h2>

        <div class="row g-4 justify-content-center">

            {{-- Alamat --}}
            <div class="col-md-6 col-lg-3">
                <div class="card shadow contact-card">
                    <i class="bi bi-geo-alt-fill contact-icon"></i>
                    <h5 class="fw-bold">Alamat</h5>
                    <p class="mb-0">Jl. Tenggiri No. 2, Rawamangun, Jakarta Timur</p>
                </div>
            </div>

            {{-- Telepon --}}
            <div class="col-md-6 col-lg-3">
                <div class="card shadow contact-card">
                    <i class="bi bi-telephone-fill contact-icon"></i>
                    <h5 class="fw-bold">Telepon</h5>
                    <p class="mb-0">(021) 4890308</p>
                </div>
            </div>

            {{-- Email --}}
            <div class="col-md-6 col-lg-3">
                <div class="card shadow contact-card">
                    <i class="bi bi-envelope-fill contact-icon"></i>
                    <h5 class="fw-bold">Email</h5>
                    <p class="mb-0">smkn7jakarta@gmail.com</p>
                </div>
            </div>

            {{-- Website --}}
            <div class="col-md-6 col-lg-3">
                <div class="card shadow contact-card">
                    <i class="bi bi-globe2 contact-icon"></i>
                    <h5 class="fw-bold">Website</h5>
                    <a href="https://smkn7jakarta.sch.id" target="_blank">
                        smkn7jakarta.sch.id
                    </a>
                </div>
            </div>

        </div>

        {{-- Google Maps --}}
        <div class="mt-5">
            <h3 class="text-center fw-bold mb-3 text-white">Lokasi Sekolah</h3>

            <div class="map-container shadow rounded" style="overflow:hidden; height:400px;">
                <iframe 
                    width="100%" 
                    height="100%" 
                    frameborder="0" 
                    style="border:0;"
                    allowfullscreen
                    loading="lazy"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.416656992001!2d106.885358!3d-6.209050!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5004e3c0f2d%3A0x6c427dfb001f0a93!2sSMK%20Negeri%207%20Jakarta!5e0!3m2!1sid!2sid!4v1700000000000">
                </iframe>
            </div>
        </div>

    </div>

</x-layouts.homepage>
