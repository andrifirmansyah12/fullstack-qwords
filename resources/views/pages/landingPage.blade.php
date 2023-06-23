@extends('templates.template')

@section('content')
    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb-5 pb-5 pb-lg-0 mb-lg-0">

                    <h6>#QwordsYourSuccess</h6>

                    <h1 class="text-black mb-4">Cloud Hosting untuk Kesuksesan Websitemu!</h1>

                    <a href="#section_2" class="btn custom-btn smoothscroll me-3">Pesan Sekarang</a>

                    <a href="#" class="link link--kale smoothscroll">Lagi ada promo lho!</a>
                    <img class="archer-disc" src="{{ asset('images/panah.png') }}" alt="">
                </div>

                <div class="hero-image-wrap col-lg-6 col-12 mt-3 mt-lg-5 mb-0 mb-lg-5">
                    <img src="{{ asset('images/Launching-pana.png') }}" class="hero-image img-fluid"
                        alt="education online books">
                </div>

            </div>
        </div>
    </section>

    <section class="featured-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12">
                    <div class="avatar-group d-flex flex-wrap align-items-center">
                        <a href="#item-1" class="button-diskon">
                            <div class="reviews-group mt-2 mt-lg-2">
                                <small class="me-3">Diskon hingga</small>

                                <strong>50</strong>
                                <small>%</small>

                                <small class="ms-3">Cek sekarang!</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-lg-4"></section>

    <section class="book-section section-padding" id="section_2">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-12">
                    <img src="images/Server-amico.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 col-12">
                    <div class="book-section-info">
                        <h6>Find your Domain Name</h6>

                        <h2 class="mb-4">Cari Nama Domainmu</h2>

                        <p>Nama Domain digunakan untuk mempermudah pengunjung menuju ke situs Anda. Pilih nama
                            domain yang paling mencerminkan bisnis, produk, atau layanan Anda.</p>

                        <div class="group mt-4">
                            <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                                <g>
                                    <path
                                        d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                                    </path>
                                </g>
                            </svg>
                            <input placeholder="Cari nama domain Anda" type="search" class="input">
                        </div>

                        <div class="mt-4 d-lg-flex justify-content-between align-items-center">
                            <div class="group col-lg-6 col-12 pe-lg-3">
                                <select class="form-select input-selected" aria-label="Default select example">
                                    <option value="0" selected>.id</option>
                                    <option value="1">.abogado</option>
                                    <option value="2">.ac</option>
                                    <option value="3">.ac.id</option>
                                </select>
                            </div>
                            <div class="group col-lg-6 col-12 ps-lg-3 mt-lg-0 mt-4">
                                <button class="input-button text-center" type="submit">Cari</button>
                            </div>
                        </div>

                        <div class="mt-5 d-xl-flex justify-content-between align-items-center">
                            <div class="text-center price-domain mt-xl-0 mt-4">
                                <small>.com</small>
                                <h5 class="fw-bold text-white">Rp 165.000</h5>
                            </div>
                            <div class="text-center price-domain mt-xl-0 mt-4">
                                <small>.id</small>
                                <h5 class="fw-bold text-white">Rp 225.000</h5>
                            </div>
                            <div class="text-center price-domain mt-xl-0 mt-4">
                                <small>.info</small>
                                <h5 class="fw-bold text-white">Rp 77.000</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center mb-lg-5 mb-0">
                    <div class="card-text p-4 d-lg-flex justify-content-between align-items-center">
                        <div class="col-lg-6 col-12 pe-lg-3 pe-0">
                            <img src="{{ asset('images/Cloud hosting-pana.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 col-12 pt-lg-0 pt-3 ps-lg-3 ps-0">
                            <p class="section-qw">
                                Qwords menawarkan layanan Cloud Hosting yang Cepat,
                                Aman, dan Dukungan 24 jam untuk memenuhi kebutuhan hosting Anda.
                                <span style="color: var(--primary-color); font-weight: bold;">Tersertifikasi ISO
                                    27001 dengan Data Center Tier 3.</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12 mt-5">
                    <nav id="navbar-example3" class="h-100 flex-column align-items-stretch">
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link smoothscroll" href="#item-1">Cloud Hosting Indonesia Diskon Hingga
                                50%</a>

                            <a class="nav-link smoothscroll" href="#item-2">Lihat Juga Layanan Kami Yang Lain</a>

                            <a class="nav-link smoothscroll" href="#item-3">Solusi Paket Hosting Terbaik dari
                                Kami</a>

                            <a class="nav-link smoothscroll" href="#item-4">Komitmen Qwords</a>
                        </nav>
                    </nav>
                </div>

                <div class="col-lg-8 col-12">
                    <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true"
                        class="scrollspy-example-2" tabindex="0">
                        <div class="scrollspy-example-item" id="item-1">
                            <h1 style="font-weight: bold" class="my-4">Cloud Hosting Indonesia <span
                                    style="color: #ff6d0b">Diskon Hingga 50%</span></h1>

                            <p>Layanan cloud hosting indonesia terbaik dengan teknologi andal untuk website anda</p>

                            <div class="owl-carousel owl-theme">
                                <div class="pack-container">
                                    <div class="header">
                                        <p class="title">
                                            Value Cloud Hosting
                                        </p>
                                        <h4 class="fw-bold">VCH1</h4>
                                        <span class="text-decoration-line-through">Rp 24.500</span>
                                        <div class="price-container">
                                            <span>Rp 24.500</span>
                                        </div>
                                    </div>
                                    <div>
                                        <ul class="lists">
                                            <li class="list">
                                                <span>
                                                    <i class="bi bi-hdd text-white"></i>
                                                </span>
                                                <div class="desc-list">
                                                    <p class="m-0 text-black">
                                                        Disk
                                                    </p>
                                                    <p class="m-0 text-black fw-bold">
                                                        3 GB
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="list">
                                                <span>
                                                    <i class="bi bi-speedometer2 text-white"></i>
                                                </span>
                                                <div class="desc-list">
                                                    <p class="m-0 text-black">
                                                        Bandwith
                                                    </p>
                                                    <p class="m-0 text-black fw-bold">
                                                        Unlimited
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="list">
                                                <span>
                                                    <i class="bi bi-postage text-white"></i>
                                                </span>
                                                <div class="desc-list">
                                                    <p class="m-0 text-black">
                                                        Core CPU
                                                    </p>
                                                    <p class="m-0 text-black fw-bold">
                                                        0.5 Core
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="list">
                                                <span>
                                                    <i class="bi bi-search text-white"></i>
                                                </span>
                                                <div class="desc-list">
                                                    <p class="m-0 text-black">
                                                        Addon / Parked Domain
                                                    </p>
                                                    <p class="m-0 text-black fw-bold">
                                                        No
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="button-container">
                                        <button type="button">
                                            Pesan Sekarang
                                        </button>
                                    </div>
                                </div>
                                <div class="pack-container">
                                    <div class="header">
                                        <p class="title">
                                            Value Cloud Hosting
                                        </p>
                                        <h4 class="fw-bold">VCH1</h4>
                                        <span class="text-decoration-line-through">Rp 24.500</span>
                                        <div class="price-container">
                                            <span>Rp 24.500</span>
                                        </div>
                                    </div>
                                    <div>
                                        <ul class="lists">
                                            <li class="list">
                                                <span>
                                                    <i class="bi bi-hdd text-white"></i>
                                                </span>
                                                <div class="desc-list">
                                                    <p class="m-0 text-black">
                                                        Disk
                                                    </p>
                                                    <p class="m-0 text-black fw-bold">
                                                        3 GB
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="list">
                                                <span>
                                                    <i class="bi bi-speedometer2 text-white"></i>
                                                </span>
                                                <div class="desc-list">
                                                    <p class="m-0 text-black">
                                                        Bandwith
                                                    </p>
                                                    <p class="m-0 text-black fw-bold">
                                                        Unlimited
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="list">
                                                <span>
                                                    <i class="bi bi-postage text-white"></i>
                                                </span>
                                                <div class="desc-list">
                                                    <p class="m-0 text-black">
                                                        Core CPU
                                                    </p>
                                                    <p class="m-0 text-black fw-bold">
                                                        0.5 Core
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="list">
                                                <span>
                                                    <i class="bi bi-search text-white"></i>
                                                </span>
                                                <div class="desc-list">
                                                    <p class="m-0 text-black">
                                                        Addon / Parked Domain
                                                    </p>
                                                    <p class="m-0 text-black fw-bold">
                                                        No
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="button-container">
                                        <button type="button">
                                            Pesan Sekarang
                                        </button>
                                    </div>
                                </div>
                                <div class="pack-container">
                                    <div class="header">
                                        <p class="title">
                                            Value Cloud Hosting
                                        </p>
                                        <h4 class="fw-bold">VCH1</h4>
                                        <span class="text-decoration-line-through">Rp 24.500</span>
                                        <div class="price-container">
                                            <span>Rp 24.500</span>
                                        </div>
                                    </div>
                                    <div>
                                        <ul class="lists">
                                            <li class="list">
                                                <span>
                                                    <i class="bi bi-hdd text-white"></i>
                                                </span>
                                                <div class="desc-list">
                                                    <p class="m-0 text-black">
                                                        Disk
                                                    </p>
                                                    <p class="m-0 text-black fw-bold">
                                                        3 GB
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="list">
                                                <span>
                                                    <i class="bi bi-speedometer2 text-white"></i>
                                                </span>
                                                <div class="desc-list">
                                                    <p class="m-0 text-black">
                                                        Bandwith
                                                    </p>
                                                    <p class="m-0 text-black fw-bold">
                                                        Unlimited
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="list">
                                                <span>
                                                    <i class="bi bi-postage text-white"></i>
                                                </span>
                                                <div class="desc-list">
                                                    <p class="m-0 text-black">
                                                        Core CPU
                                                    </p>
                                                    <p class="m-0 text-black fw-bold">
                                                        0.5 Core
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="list">
                                                <span>
                                                    <i class="bi bi-search text-white"></i>
                                                </span>
                                                <div class="desc-list">
                                                    <p class="m-0 text-black">
                                                        Addon / Parked Domain
                                                    </p>
                                                    <p class="m-0 text-black fw-bold">
                                                        No
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="button-container">
                                        <button type="button">
                                            Pesan Sekarang
                                        </button>
                                    </div>
                                </div>
                                <div class="pack-container">
                                    <div class="header">
                                        <p class="title">
                                            Value Cloud Hosting
                                        </p>
                                        <h4 class="fw-bold">VCH1</h4>
                                        <span class="text-decoration-line-through">Rp 24.500</span>
                                        <div class="price-container">
                                            <span>Rp 24.500</span>
                                        </div>
                                    </div>
                                    <div>
                                        <ul class="lists">
                                            <li class="list">
                                                <span>
                                                    <i class="bi bi-hdd text-white"></i>
                                                </span>
                                                <div class="desc-list">
                                                    <p class="m-0 text-black">
                                                        Disk
                                                    </p>
                                                    <p class="m-0 text-black fw-bold">
                                                        3 GB
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="list">
                                                <span>
                                                    <i class="bi bi-speedometer2 text-white"></i>
                                                </span>
                                                <div class="desc-list">
                                                    <p class="m-0 text-black">
                                                        Bandwith
                                                    </p>
                                                    <p class="m-0 text-black fw-bold">
                                                        Unlimited
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="list">
                                                <span>
                                                    <i class="bi bi-postage text-white"></i>
                                                </span>
                                                <div class="desc-list">
                                                    <p class="m-0 text-black">
                                                        Core CPU
                                                    </p>
                                                    <p class="m-0 text-black fw-bold">
                                                        0.5 Core
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="list">
                                                <span>
                                                    <i class="bi bi-search text-white"></i>
                                                </span>
                                                <div class="desc-list">
                                                    <p class="m-0 text-black">
                                                        Addon / Parked Domain
                                                    </p>
                                                    <p class="m-0 text-black fw-bold">
                                                        No
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="button-container">
                                        <button type="button">
                                            Pesan Sekarang
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="scrollspy-example-item" id="item-2">
                            <h1 class="fw-bold mb-4">Lihat Juga Layanan Kami Yang Lain</h1>

                            <p class="desc-features">Optimalkan performa website bisnis Anda dengan berbagai
                                layanan berkualitas dari
                                Qwords</p>

                            <div class="container">
                                <div class="row gap-4 container-service">
                                    <div class="card-service">
                                        <div class="header-service">
                                            <span class="icon-service">
                                                <svg fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path clip-rule="evenodd"
                                                        d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z"
                                                        fill-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                            <p class="alert-service m-0 fw-bold">SSL</p>
                                        </div>

                                        <p class="message-service">
                                            Jadikan website Anda lebih terpercaya dan disukai oleh search engine
                                            dengan menggunakan SSL Certificate.
                                        </p>

                                        <p class="text-black">Mulai dari</p>

                                        <h3 class="fw-bold" style="color: #ff6d0b">Rp. 112.000 / tahun</h3>

                                        <div class="actions-service">
                                            <a class="read-service" href="">
                                                Pesan Sekarang
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-service">
                                        <div class="header-service">
                                            <span class="icon-service">
                                                <svg fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path clip-rule="evenodd"
                                                        d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z"
                                                        fill-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                            <p class="alert-service m-0 fw-bold">SSL</p>
                                        </div>

                                        <p class="message-service">
                                            Jadikan website Anda lebih terpercaya dan disukai oleh search engine
                                            dengan menggunakan SSL Certificate.
                                        </p>

                                        <p class="text-black">Mulai dari</p>

                                        <h3 class="fw-bold" style="color: #ff6d0b">Rp. 112.000 / tahun</h3>

                                        <div class="actions-service">
                                            <a class="read-service" href="">
                                                Pesan Sekarang
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-service">
                                        <div class="header-service">
                                            <span class="icon-service">
                                                <svg fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path clip-rule="evenodd"
                                                        d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z"
                                                        fill-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                            <p class="alert-service m-0 fw-bold">SSL</p>
                                        </div>

                                        <p class="message-service">
                                            Jadikan website Anda lebih terpercaya dan disukai oleh search engine
                                            dengan menggunakan SSL Certificate.
                                        </p>

                                        <p class="text-black">Mulai dari</p>

                                        <h3 class="fw-bold" style="color: #ff6d0b">Rp. 112.000 / tahun</h3>

                                        <div class="actions-service">
                                            <a class="read-service" href="">
                                                Pesan Sekarang
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="scrollspy-example-item" id="item-3">
                            <h1 class="fw-bold my-4">Solusi Paket Hosting Terbaik dari Kami</h1>

                            <p class="desc-features">Kami menawarkan solusi paket hosting terbaik untuk segala
                                kebutuhan website dan
                                sistem Anda. Mulai dari blog hingga website bisnis dan perusahaan</p>

                            <div class="container">
                                <div class="row gap-4 container-host">
                                    <div class="card-host">
                                        <div class="card-img-host"><img src="{{ asset('images/Cloud hosting-pana.png') }}"
                                                alt="">
                                        </div>
                                        <div class="card-title-host">Perusahaan</div>
                                        <div class="card-subtitle-host">Wujudkan website perusahaan profesional dan
                                            berkelas dengan dukungan web hosting terbaik dan fitur keamanan ekstra.
                                        </div>
                                    </div>
                                    <div class="card-host">
                                        <div class="card-img-host"><img src="{{ asset('images/Cloud hosting-pana.png') }}"
                                                alt="">
                                        </div>
                                        <div class="card-title-host">UMKM dan Toko Online</div>
                                        <div class="card-subtitle-host">Memberikan hosting terbaik untuk mendukung
                                            kebutuhan website pemasaran barang/jasa secara online.</div>
                                    </div>
                                    <div class="card-host">
                                        <div class="card-img-host"><img src="{{ asset('images/Cloud hosting-pana.png') }}"
                                                alt="">
                                        </div>
                                        <div class="card-title-host">Organisasi dan Komunitas</div>
                                        <div class="card-subtitle-host">Bikin website organisasi atau komunitas
                                            Anda dengan paket hosting unggulan yang ramah kantong.</div>
                                    </div>
                                    <div class="card-host">
                                        <div class="card-img-host"><img src="{{ asset('images/Cloud hosting-pana.png') }}"
                                                alt="">
                                        </div>
                                        <div class="card-title-host">Sekolah</div>
                                        <div class="card-subtitle-host">Infrastruktur web hosting terbaik untuk
                                            menunjang kegiatan e-learning. Didukung platform MOODLE khusus
                                            pembelajaran daring.</div>
                                    </div>
                                    <div class="card-host">
                                        <div class="card-img-host"><img src="{{ asset('images/Cloud hosting-pana.png') }}"
                                                alt=""></div>
                                        <div class="card-title-host">Developer</div>
                                        <div class="card-subtitle-host">Tersedia paket hosting Indonesia dengan
                                            spesifikasi khusus yang dev-friendly. Ekstra NodeJS dan Git Version
                                            Control.</div>
                                    </div>
                                    <div class="card-host">
                                        <div class="card-img-host"><img src="{{ asset('images/Cloud hosting-pana.png') }}"
                                                alt=""></div>
                                        <div class="card-title-host">Blogger dan Personal</div>
                                        <div class="card-subtitle-host">Memfasilitasi blogger dengan infrastruktur
                                            hosting Indonesia terbaik serta template website premium untuk tampil
                                            lebih profesional.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="scrollspy-example-item" id="item-4">
                            <h1 class="fw-bold my-4">Komitmen Qwords</h1>

                            <p class="desc-features">Berbagai alasan mengapa pelanggan memilih sewa hosting di
                                Qwords</p>

                            <div class="container">
                                <div class="row gap-4 container-commit">
                                    <div class="card-commit">
                                        <div class="header-commit">
                                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/call.webp"
                                                alt="">
                                            <span class="title-commit">Layanan 24/7</span>
                                        </div>
                                        <p class="desc-commit">
                                            Tim Technical Support dan Customer Service Qwords siap membantu Anda
                                            selama 24 jam, 7 hari. Anda dapat menghubungi melalui Live chat, Call
                                            Center, dan Support Ticket.
                                        </p>
                                    </div>
                                    <div class="card-commit">
                                        <div class="header-commit">
                                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/book.webp"
                                                alt="">
                                            <span class="title-commit">Panduan Manual Lengkap</span>
                                        </div>
                                        <p class="desc-commit">
                                            Qwords dilengkapi dengan halaman knowledge base berisi tutorial dan tips
                                            seputar pengelolaan website dan hosting. Dapat diakses dengan mudah dan
                                            solutif.
                                        </p>
                                    </div>
                                    <div class="card-commit">
                                        <div class="header-commit">
                                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/router.webp"
                                                alt="">
                                            <span class="title-commit">Up time 99.99%</span>
                                        </div>
                                        <p class="desc-commit">
                                            Uptime Network & Server di atas 99. 99% dengan konfigurasi server yang
                                            tepat. Didukung manajemen jaringan dan multiple upstream tier 1 provider
                                            network serta multiple peering.
                                        </p>
                                    </div>
                                    <div class="card-commit">
                                        <div class="header-commit">
                                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/guard.webp"
                                                alt="">
                                            <span class="title-commit">Jaminan keamanan</span>
                                        </div>
                                        <p class="desc-commit">
                                            Keamanan menjadi fokus utama kami di Qwords. Tindakan pemantauan dan
                                            pencegahan yang berstandar & berkelanjutan telah menjadi perhatian utama
                                            kami.
                                        </p>
                                    </div>
                                    <div class="card-commit">
                                        <div class="header-commit">
                                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/networkAlt.webp"
                                                alt="">
                                            <span class="title-commit">Clustered DNS</span>
                                        </div>
                                        <p class="desc-commit">
                                            DNS Server Cloud Hosting Qwords terhubung satu dengan yang lainnya. Hal
                                            ini membuat DNS Server akan selalu dapat di akses karena saling
                                            membackup antar server.
                                        </p>
                                    </div>
                                    <div class="card-commit">
                                        <div class="header-commit">
                                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/diamond.webp"
                                                alt="">
                                            <span class="title-commit">High Enterprise Server</span>
                                        </div>
                                        <p class="desc-commit">
                                            Standar server Qwords adalah server kelas enterprise Dual Xeon Octa Core
                                            yang merupakan hardware kelas terbaik. Hardware ini biasa digunakan oleh
                                            perusahaan terkemuka.
                                        </p>
                                    </div>
                                    <div class="card-commit">
                                        <div class="header-commit">
                                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/router.webp"
                                                alt="">
                                            <span class="title-commit">Tier 1 Network</span>
                                        </div>
                                        <p class="desc-commit">
                                            Tier 1 Network merupakan jaringan dunia tanpa transit network, yang
                                            membuat jaringan lebih cepat serta jalur routing yang lebih pendek dan
                                            ketersediaan backup network.
                                        </p>
                                    </div>
                                    <div class="card-commit">
                                        <div class="header-commit">
                                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/network.webp"
                                                alt="">
                                            <span class="title-commit">Peering Network</span>
                                        </div>
                                        <p class="desc-commit">
                                            Jaringan di Qwords terhubung langsung ke public peering seperti OpenIXP
                                            dan CDIX yang membuat latency atau waktu tunggu pengiriman data semakin
                                            kecil.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================ Action ======================================== --}}

    <section>
        <div class="container container-website">
            <div class="row">
                <div class="col-lg-12 col-12 mb-lg-5 mb-0">
                    <div class="card-text p-4 d-lg-flex justify-content-between align-items-center">
                        <div class="col-lg-6 col-12 pe-lg-3 pe-0">
                            <img src="{{ asset('images/Website designer-pana.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 col-12 pt-lg-0 pt-3 ps-lg-3 ps-0">
                            <p class="section-qw">
                                <span style="color: var(--primary-color); font-weight: bold;">
                                    Bikin website impian
                                </span>
                                dengan mudah disini hanya 1jutaan
                            </p>
                            <small class="text-black">
                                Bikin website impian include paket hosting Indonesia terbaik hanya 1 jutaan Jasa
                                pembuatan website profesional untuk Perusahaan, Bisnis & UKM. Bikin Website Impian
                                dengan mudah di sini, desain website elegan dan mudah dikelola
                            </small>
                            <div class="container-button">
                                <button class="button-website">
                                    <span>Lihat Selengkapnya</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================ Customer ======================================== --}}

    <section class="reviews-section section-padding-customer" id="section_4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center mb-4">
                    <h1 style="font-weight: 800">Telah Dipercaya oleh 45.000+ Pelanggan Aktif</h1>
                </div>

                <div class="img-costumer text-center">
                    <img class="img-fluid"
                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Cimory.webp"
                        alt="">
                    <img class="img-fluid"
                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Forisa.webp"
                        alt="">
                    <img class="img-fluid"
                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Elsheskin.webp"
                        alt="">
                    <img class="img-fluid"
                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Icon.webp"
                        alt="">
                    <img class="img-fluid"
                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/Horison.webp"
                        alt="">
                    <img class="img-fluid"
                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Pelanggan/MD.webp"
                        alt="">
                </div>
                <a href="#" class="my-5 text-center fw-bold" style="color: #ff6d0b">Dan Masih Banyak yang
                    Lainnya <span class="ps-3"><i class="bi bi-arrow-right"></i></span></a>
            </div>
        </div>
    </section>

    {{-- ============================================ Partner ======================================== --}}

    <section class="reviews-section" id="section_4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center mb-4">
                    <h1 style="font-weight: 800">Partner Kami</h1>
                </div>

                <div class="img-costumer text-center">
                    <img class="img-fluid"
                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Google.webp"
                        alt="">
                    <img class="img-fluid"
                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Cpanel.webp"
                        alt="">
                    <img class="img-fluid"
                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Idea.webp"
                        alt="">
                    <img class="img-fluid"
                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/Archi.webp"
                        alt="">
                    <img class="img-fluid"
                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/partner-customer/Partner/dotid.webp"
                        alt="">
                </div>

                <a href="#" class="my-5 text-center fw-bold" style="color: #ff6d0b">Lihat Semua Partner
                    <span class="ps-3"><i class="bi bi-arrow-right"></i></span></a>
            </div>
        </div>
    </section>

    {{-- ============================================ Garansi ======================================== --}}

    <section class="author-section section-author" id="section_3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/illustrations/guarantee.webp"
                        class="author-image img-fluid" alt="">
                </div>

                <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                    <h1 class="mb-4 fw-bold">Garansi 30 Hari <span style="color: #ff6d0b">Uang Kembali</span></h2>

                        <p>Untuk menjaga kepuasan pelanggan, kami memberikan garansi uang kembali yang berlaku
                            hingga 30 hari setelah hosting aktif.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================ Testimonials ======================================== --}}

    <section class="reviews-section section-author" id="section_4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center mb-5">
                    <h1>Apa Kata Mereka?</h1>
                    <p class="m-0 content-review">Apa kata mereka yang sudah menggunakan layanan web hosting
                        Indonesia dari Qwords? Simak
                        pengalaman mereka yang telah membuktikan sendiri fitur dari layanan kami.</p>
                </div>

                <div class="card-review">
                    <div class="body-review">
                        <div class="img-review">
                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/testi1.webp"
                                alt="">
                        </div>
                        <div>
                            <figure>
                                <blockquote>
                                    <p class="m-0 fw-bold" style="color: #ff6d0b">Budi Raharjo</p>
                                </blockquote>
                                <figcaption class="blockquote-footer">
                                    <cite title="Source Title">Founder ID Cert</cite>
                                </figcaption>
                            </figure>
                            <p></p>
                            <div class="header-review">
                                <p class="title-review">
                                    <i class="bi bi-quote"></i>
                                    Semoga Qwords dapat terus bertahan, sehingga kami dan masyarakat Indonesia bisa
                                    mendapatkan layanan yang terbaik dari Qwords.
                                    <i class="bi bi-quote"></i>
                                </p>
                            </div>

                            <p class="message-review">
                                Kami, ID Cert, merupakan sebuah perusahaan yang bergerak dalam bidang penyedia jasa
                                informasi keamanan di Indonesia. Oleh karena itu, kami membutuhkan Qwords untuk
                                mendukung kebutuhan kami terhadap server dan hosting yang selalu up selama 24 jam.
                            </p>

                            <div class="actions-review">
                                <a class="read-review" href="">
                                    lihat video selengkapnya
                                    <i class="bi bi-arrow-right text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-review">
                    <div class="body-review-left">
                        <div>
                            <figure>
                                <blockquote>
                                    <p class="m-0 fw-bold" style="color: #ff6d0b">Budi Raharjo</p>
                                </blockquote>
                                <figcaption class="blockquote-footer">
                                    <cite title="Source Title">Founder ID Cert</cite>
                                </figcaption>
                            </figure>
                            <p></p>
                            <div class="header-review">
                                <p class="title-review">
                                    <i class="bi bi-quote"></i>
                                    Semoga Qwords dapat terus bertahan, sehingga kami dan masyarakat Indonesia bisa
                                    mendapatkan layanan yang terbaik dari Qwords.
                                    <i class="bi bi-quote"></i>
                                </p>
                            </div>

                            <p class="message-review">
                                Kami, ID Cert, merupakan sebuah perusahaan yang bergerak dalam bidang penyedia jasa
                                informasi keamanan di Indonesia. Oleh karena itu, kami membutuhkan Qwords untuk
                                mendukung kebutuhan kami terhadap server dan hosting yang selalu up selama 24 jam.
                            </p>

                            <div class="actions-review">
                                <a class="read-review" href="">
                                    lihat video selengkapnya
                                    <i class="bi bi-arrow-right text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="img-review">
                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/testi2.webp"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="card-review">
                    <div class="body-review">
                        <div class="img-review">
                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/testi3.webp"
                                alt="">
                        </div>
                        <div>
                            <figure>
                                <blockquote>
                                    <p class="m-0 fw-bold" style="color: #ff6d0b">Budi Raharjo</p>
                                </blockquote>
                                <figcaption class="blockquote-footer">
                                    <cite title="Source Title">Founder ID Cert</cite>
                                </figcaption>
                            </figure>
                            <p></p>
                            <div class="header-review">
                                <p class="title-review">
                                    <i class="bi bi-quote"></i>
                                    Semoga Qwords dapat terus bertahan, sehingga kami dan masyarakat Indonesia bisa
                                    mendapatkan layanan yang terbaik dari Qwords.
                                    <i class="bi bi-quote"></i>
                                </p>
                            </div>

                            <p class="message-review">
                                Kami, ID Cert, merupakan sebuah perusahaan yang bergerak dalam bidang penyedia jasa
                                informasi keamanan di Indonesia. Oleh karena itu, kami membutuhkan Qwords untuk
                                mendukung kebutuhan kami terhadap server dan hosting yang selalu up selama 24 jam.
                            </p>

                            <div class="actions-review">
                                <a class="read-review" href="">
                                    lihat video selengkapnya
                                    <i class="bi bi-arrow-right text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================ Liputan ======================================== --}}

    <section class="reviews-section mb-lg-5 mb-0" id="section_4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center mb-4">
                    <h1 style="font-weight: 800">Diliput oleh</h1>
                </div>

                <div class="img-costumer text-center">
                    <img class="img-fluid"
                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/liputan/Detikcom.webp"
                        alt="">
                    <img class="img-fluid"
                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/liputan/Liputan6.webp"
                        alt="">
                    <img class="img-fluid"
                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/liputan/TribunJogja.webp"
                        alt="">
                    <img class="img-fluid"
                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/liputan/antara.webp"
                        alt="">
                    <img class="img-fluid"
                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/liputan/RM.webp"
                        alt="">
                    <img class="img-fluid"
                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/liputan/KoranBernas.webp"
                        alt="">
                </div>

                <a href="#" class="my-5 text-center fw-bold" style="color: #ff6d0b">Lihat Semua Liputan
                    <span class="ps-3"><i class="bi bi-arrow-right"></i></span></a>
            </div>
        </div>
    </section>

    {{-- ============================================ Metode Payment ======================================== --}}
    <section class="reviews-section mb-lg-5 mb-0" id="section_4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center mb-4">
                    <h3 style="font-weight: 800" class="content-faq">Pilih metode e-payment otomatis. Layanan Domain,
                        Hosting, VPS langsung aktif tanpa perlu konfirmasi bayar.</h3>
                </div>

                <div class="text-center">
                    <img class="img-fluid"
                        src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/all-payment.webp"
                        alt="">
                </div>

                <a href="#" class="my-5 text-center fw-bold" style="color: #ff6d0b">Lihat Panduan Pembayaran
                    <span class="ps-3"><i class="bi bi-arrow-right"></i></span></a>
            </div>
        </div>
    </section>

    {{-- ============================================ Info Faq ======================================== --}}
    <section class="reviews-section mb-lg-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center mb-5 mt-3">
                    <h1 style="font-weight: 800;" class="content-faq">Pertanyaan seputar <span
                            style="color: #ff6d0b">Layanan Web
                            Hosting</span> Qwords</h1>
                </div>

                <div class="faq-one">
                    <h5 class="faq-page">Apa itu web hosting?</h5>
                    <div class="faq-body">
                        <p>
                            Hosting adalah tempat penyimpanan file dan data website seperti teks, video dan gambar
                            website. File dan data tersebut di simpan di dalam server yang terkoneksi dengan
                            internet sehingga data tersebut dapat diakses oleh siapa saja, kapan saja dan di mana
                            saja.
                        </p>
                        <p>
                            Penjelasan lebih lanjut dapat Anda baca pada artikel ini :
                            https://qwords.com/blog/apa-itu-hosting
                        </p>
                    </div>
                </div>
                <hr class="hr-line">
                <div class="faq-two">
                    <h5 class="faq-page">Ada berapa jenis hosting di Qwords?</h5>
                    <div class="faq-body">
                        <p>
                            Untuk mendukung kesuksesan bisnis di era digital, Qwords menghadirkan beragam paket
                            hosting Indonesia yang bisa dipilih sesuai kebutuhan.
                        </p>
                        <h5>Value Performance</h5>
                        <p>
                            Value Cloud Hosting merupakan paket cloud hosting murah Indonesia yang dirancang khusus
                            untuk keperluan sederhana seperti UKM, toko online, blog, website sederhana, hingga
                            email untuk penggunaan personal.
                        </p>
                        <p>
                            Hosting murah dari Qwords untuk pengguna baru website atau Anda yang baru terjun ke
                            dalam industri/bisnis online. Storage sesuai kebutuhan, fleksibel, dan ekstra lega mulai
                            3 GB hingga
                        </p>
                        <h5>
                            High Performance Cloud Hosting Bisnis
                        </h5>
                        <p>
                            Productivity starts here! Berikan Hosting terbaik untuk bisnis Anda. Kinerja lebih
                            produktif dengan performa tinggi & optimal untuk website profesional perusahaan,
                            e-commerce, startup bisnis, serta support Moodle--platform open source yang memudahkan
                            sistem pembelajaran online
                        </p>
                        <h5>
                            High Performance Cloud Hosting Enterprise
                        </h5>
                        <p>
                            Nikmati versi terbaik dedicated hosting melalui paket HPCH Enterprise. Tampil lebih
                            premium dengan resource dedicated hanya untuk 1 pengguna. Performa lebih stabil, bebas
                            gangguan dari Cloud Hosting lainnya. More productivity, less drama
                        </p>
                        <h5>
                            WordPress Hosting
                        </h5>
                        <p>
                            Hosting khusus bagi Anda yang menggunakan CMS WordPress. Dilengkapi CloudPop untuk
                            kinerja WordPress yang optimal.
                        </p>
                        <p>
                            WordPress Hosting Indonesia yang dioptimalkan dengan CloudPOP
                        </p>
                        <h5>
                            Unlimited Hosting
                        </h5>
                        <p>
                            Paket Unlimited Hosting Indonesia yang dapat diandalkan, tanpa batasan! Free Domain &
                            SSL Certificate dengan Uptime Server 99,99%.
                        </p>
                        <p>
                            Didukung Website Builder dan Web Accelerator dengan Module LSAPI PRO + CRIU. Akses
                            internasional ngebut, serta garansi 30 hari uang kembali.
                        </p>
                    </div>
                </div>
                <hr class="hr-line">
                <div class="faq-three">
                    <h5 class="faq-page">Apa kelebihan dari cloud hosting Qwords?</h5>
                    <div class="faq-body">
                        <p>
                            Cloud hosting Qwords sudah dipercaya 45,000+ pelanggan dari dalam dan luar negeri. Anda
                            akan mendapatkan jaminan keamanan, Uptime 99.99%, dukungan teknis selama 24 jam, 7 hari
                            melalui Live chat, Call Center, atau Support Ticket dan masih banyak lagi.
                        </p>
                    </div>
                </div>
                <hr class="hr-line">
                <div class="faq-three">
                    <h5 class="faq-page">Mengapa saya perlu web hosting?</h5>
                    <div class="faq-body">
                        <p>
                            Tanpa web hosting, Anda tidak bisa membuat website company profile, portal berita, blog
                            pribadi, website toko online, atau jenis website lain yang bisa diakses secara online.
                        </p>
                        <p>
                            Penyedia layanan web hosting seperti Qwords.com membantu memastikan data-data dan file
                            website Anda tetap aman serta responsif ketika diakses oleh pengguna secara online.
                        </p>
                    </div>
                </div>
                <hr class="hr-line">
                <div class="faq-four">
                    <h5 class="faq-page">Bagaimana cara membeli hosting?</h5>
                    <div class="faq-body">
                        <p>
                            Kami memiliki panduan cara membeli hosting di Qwords sesuai kebutuhan dengan mudah yang
                            dapat Anda akses selengkapnya di sini. Beli hosting Indonesia di Qwords kini juga
                            semakin mudah dengan adanya berbagai metode pembayaran
                        </p>
                    </div>
                </div>
                <hr class="hr-line">
                <div class="faq-five">
                    <h5 class="faq-page">Apakah saya bisa transfer Hosting ke Qwords Cloud Web Hosting Indonesia?
                    </h5>
                    <div class="faq-body">
                        <p>
                            Ya, Anda bisa melakukan transfer Hosting dari provider lain ke Qwords Cloud Hosting
                            Indonesia. Caranya, silahkan lakukan pemesanan Cloud Hosting baru sesuai paket yang Anda
                            inginkan, kemudian informasikan kebutuhan migrasi pada tim support kami, lalu proses
                            migrasi akan dibantu hingga selesai.
                            Cloud hosting Qwords sudah dipercaya 45,000+ pelanggan dari dalam dan luar negeri. Anda
                            akan mendapatkan jaminan keamanan, Uptime 99.99%, dukungan teknis selama 24 jam, 7 hari
                            melalui Live chat, Call Center, atau Support Ticket dan masih banyak lagi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================ Info Bantuan ======================================== --}}
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 mb-lg-5 mb-0">
                    <div class="card-text p-4 d-lg-flex justify-content-between align-items-center">
                        <div class="col-lg-6 col-12 text-center">
                            <h1 style="font-weight: 800">Butuh <span style="color: #ff6d0b">Bantuan?</span></h1>
                            <p class="text-black">Kami siap membantu anda 24 Jam</p>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="row gap-2">
                                <div class="card-info">
                                    <div class="title-info">
                                        <span>
                                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/phoneAlt.svg"
                                                alt="">
                                        </span>
                                    </div>
                                    <div class="data-info">
                                        <p class="m-0 pt-3">
                                            0804-1-808-888
                                        </p>
                                    </div>
                                </div>
                                <div class="card-info">
                                    <div class="title-info">
                                        <span>
                                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/phoneAlt.svg"
                                                alt="">
                                        </span>
                                    </div>
                                    <div class="data-info">
                                        <p class="m-0 pt-3">
                                            021 39708800
                                        </p>
                                    </div>
                                </div>
                                <div class="card-info">
                                    <div class="title-info">
                                        <span>
                                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/phoneAlt.svg"
                                                alt="">
                                        </span>
                                    </div>
                                    <div class="data-info">
                                        <p class="m-0 pt-3">
                                            +6281 7437 111
                                        </p>
                                        <small style="color: #ff6d0b" class="text-center"><strong>( WhatsApp only
                                                )</strong></small>
                                    </div>
                                </div>
                                <div class="card-info">
                                    <div class="title-info">
                                        <span>
                                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/emailAlt.svg"
                                                alt="">
                                        </span>
                                    </div>
                                    <div class="data-info">
                                        <p class="m-0 pt-3">
                                            info@qwords.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
