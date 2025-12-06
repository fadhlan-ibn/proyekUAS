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
                    <p class="mb-0"> Jl. Kartini No.1, RT.01/RW.02, Kota Bogor</p>
                </div>
            </div>

            {{-- Telepon --}}
            <div class="col-md-6 col-lg-3">
                <div class="card shadow contact-card">
                    <i class="bi bi-telephone-fill contact-icon"></i>
                    <h5 class="fw-bold">Telepon</h5>
                    <p class="mb-0">(0251) 8324361</p>
                </div>
            </div>

            {{-- Email --}}
            <div class="col-md-6 col-lg-3">
                <div class="card shadow contact-card">
                    <i class="bi bi-envelope-fill contact-icon"></i>
                    <h5 class="fw-bold">Email</h5>
                    <p class="mb-0">sman9bogor@ymail.com</p>
                </div>
            </div>

            {{-- Website --}}
            <div class="col-md-6 col-lg-3">
                <div class="card shadow contact-card">
                    <i class="bi bi-globe2 contact-icon"></i>
                    <h5 class="fw-bold">Website</h5>
                    <a href="https://smanegeri9kotabogor.sch.id/" target="_blank">
                        smanegeri9kotabogor.sch.id
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
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31878.24539252193!2d106.7604786!3d-6.5532527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c7cb00f7ea81%3A0x55a0d3f83a1d32dc!2sSMAN%209%20Bogor!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid">
                    </iframe>
                </div>
            </div>

    </div>

</x-layouts.homepage>
