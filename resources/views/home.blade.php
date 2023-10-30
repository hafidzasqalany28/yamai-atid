@extends('layouts.layout')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-dark p-0 mb-5">
    <div class="row g-0 flex-column-reverse flex-lg-row">
        <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
            <div class="header-bg h-100 d-flex flex-column justify-content-center p-5">
                <h1 class="display-4 text-light mb-5">Nikmati Hari Libur Anda di Taman Yamai-Atid</h1>
                <div class="d-flex align-items-center pt-4 animated slideInDown">
                    <a href="" class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5">Selengkapnya</a>
                    <button type="button" class="btn-play" data-bs-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                    <h6 class="text-white m-0 ms-4 d-none d-sm-block">Putar Vidio</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="owl-carousel header-carousel">
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="">
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('assets/img/carousel-2.jpg') }}" alt="">
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('assets/img/carousel-3.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/POafw2XIrWM" id="video"
                        allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->



<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5 mb-4">Mengapa Anda Harus Mengunjungi Taman <span
                        class="text-primary">Yamai-Atid</span> ???</h1>
                <p class="mb-4">Terlalu sering kita terjebak dalam hiruk-pikuk kehidupan yang akhirnya membuat kita
                    gampang stress. Namun ketika Anda memasuki Taman Yamai-Atid, Stress anda dapat berkurang dengan melihat
                    keanekaragaman flora dan fauna yang menyegarkan pikiran. Luangkan waktu anda dan segera
                    datang.</p>
                <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Lingkungan Alami</h5>
                <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Fauna & Flora Yang unik</h5>
                <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Memudahkan Interaksi dengan sistem
                    QR Code</h5>
                <a class="btn btn-primary py-3 px-5 mt-3" href="">Baca Selengkapnya</a>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="img-border">
                    <img class="img-fluid" src="{{ asset('assets/img/rusa1.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Facts Start -->
<div class="container-xxl bg-primary facts my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-paw fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">{{ $faunaCount }}</h1>
                <p class="text-white mb-0">Jenis Fauna</p>
            </div>
            <div class="col-md-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">{{ $floraCount }}</h1>
                <p class="text-white mb-0">Jenis Flora</p>
            </div>
            <div class="col-md-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-certificate fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">{{ $totalQuantity }}</h1>
                <p class="text-white mb-0">Total Fauna & Flora</p>
            </div>
            {{-- <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-users fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">{{ $totalVisitors }}</h1>
                <p class="text-white mb-0">Pengunjung Perhari</p>
            </div> --}}
        </div>
    </div>
</div>
<!-- Facts End -->



<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <h1 class="display-5 mb-0">Layanan Khusus Untuk Pengunjung <span class="text-primary">Yamai-Atid</span>
                </h1>
            </div>
            <div class="col-lg-6">
                <div class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5">
                    <i class="fa fa-3x fa-mobile-alt text-white"></i>
                    <div class="ms-4">
                        <p class="text-white mb-0">Hubungi Untuk Info Lebih Lanjut</p>
                        <h2 class="text-white mb-0">+012 345 6789</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gy-5 gx-4">
            {{-- <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid mb-3" src="{{ asset('assets/img/icon/icon-2.png') }}" alt="Ikon">
                <h5 class="mb-3">Parkir lot</h5>
                <span>Kenyamanan Anda adalah prioritas kami. Nikmati parkir lot gratis yang tersedia di Taman
                    Yamai-Atid, sehingga Anda dapat menikmati pengalaman tanpa masalah mencari tempat parkir</span>
            </div> --}}
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <img class="img-fluid mb-3" src="{{ asset('assets/img/icon/icon-3.png') }}" alt="Ikon">
                <h5 class="mb-3">Swafoto & QR Code</h5>
                <span>Dalam petualangan seru di Taman Yamai-Atid, abadikan momen Anda dengan foto-foto indah flora
                    maupun fauna
                    kami, dan dapat melakukan QR Code untuk mengakses informasi eksklusif, tentang setiap flora &
                    fauna dengan QR Code kami.</span>
            </div>

            {{-- <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <img class="img-fluid mb-3" src="{{ asset('assets/img/icon/icon-4.png') }}" alt="Ikon">
                <h5 class="mb-3">Layanan Pemandu</h5>
                <span>Tidak perlu khawatir saat menjelajah. Kami menyediakan layanan pemandu profesional yang akan
                    membimbing Anda sepanjang perjalanan Anda di Taman Yamai-Atid. Dapatkan informasi lengkap dan
                    pengetahuan yang mendalam tentang keanekaragaman hayati.</span>
            </div> --}}
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <img class="img-fluid mb-3" src="{{ asset('assets/img/icon/icon-5.png') }}" alt="Ikon">
                <h5 class="mb-3">Makanan & Minuman</h5>
                <span>Menikmati petualangan memang melelahkan. Nikmati makanan dan minuman lezat yang tersedia di Taman
                    Yamai-Atid. Terdapat berbagai pilihan menu yang memuaskan selera.</span>
            </div>
            {{-- <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid mb-3" src="{{ asset('assets/img/icon/icon-6.png') }}" alt="Ikon">
                <h5 class="mb-3">Toko Souvenir</h5>
                <span>Bawa pulang kenangan dari petualangan Anda di Taman Yamai-Atid. Jelajahi berbagai pilihan produk
                    suvenir di toko kami, yang memungkinkan Anda membawa pulang potongan kecil dari keindahan
                    alam.</span>
            </div> --}}
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <img class="img-fluid mb-3" src="{{ asset('assets/img/icon/icon-7.png') }}" alt="Ikon">
                <h5 class="mb-3">Wi-Fi Cepat & Gratis</h5>
                <span>Kami mengerti bahwa Anda mungkin ingin tetap terhubung. Nikmati akses internet Wi-Fi cepat dan
                    gratis di seluruh Taman Yamai-Atid, sehingga Anda dapat tetap terhubung dengan dunia digital selama
                    petualangan Anda.</span>
            </div>
            {{-- <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <img class="img-fluid mb-3" src="{{ asset('assets/img/icon/icon-8.png') }}" alt="Ikon">
                <h5 class="mb-3">Area Bermain</h5>
                <span>Bagi keluarga yang berkunjung bersama anak-anak, Taman Yamai-Atid memiliki area bermain yang
                    menyenangkan. Biarkan anak-anak Anda bermain dan bersenang-senang di area yang aman dan menyenangkan
                    ini.</span>
            </div> --}}
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <img class="img-fluid mb-3" src="{{ asset('assets/img/icon/icon-9.png') }}" alt="Ikon">
                <h5 class="mb-3">Tempat Istirahat</h5>
                <span>Selama kunjungan Anda, Anda mungkin memerlukan tempat untuk beristirahat sejenak. Taman Yamai-Atid
                    menyediakan tempat istirahat yang nyaman, di mana Anda dapat bersantai sejenak sebelum melanjutkan
                    petualangan Anda.</span>
            </div>
        </div>

    </div>
</div>
</div>
<!-- Service End -->


<!-- Fauna Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Eksplorasi Keanekaragaman <span class="text-primary">Fauna</span> di
                        Yamai-Atid
                    </h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Lihat Lebih Banyak Fauna</a>
                </div>
            </div>
        </div>
        <div class="row g-4">
            @foreach($faunaData as $fauna)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ $fauna->delay }}">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="animal-item" href="{{ asset($fauna->image_path . $fauna->image_name) }}"
                            data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid img-border img-thumbnail"
                                    src="{{ asset($fauna->image_path . $fauna->image_name) }}"
                                    alt="{{ $fauna->common_name }}">
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">{{ $fauna->type }}</p>
                                    <h5 class="text-white mb-0">{{ $fauna->common_name }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Fauna End -->


<!-- Flora Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <h1 class="display-5 mb-0">Eksplorasi Keanekaragaman <span class="text-primary">Flora</span> di
                    Yamai-Atid
                </h1>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a class="btn btn-primary py-3 px-5" href="#">Lihat Lebih Banyak Flora</a>
            </div>
        </div>
        <div class="row g-4">
            @foreach($floraData as $flora)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="animal-item" href="{{ asset($flora->image_path . $flora->image_name) }}"
                            data-lightbox="flora">
                            <div class="position-relative">
                                <img class="img-fluid img-border img-thumbnail"
                                    src="{{ asset($flora->image_path . $flora->image_name) }}" alt="">
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">flora</p>
                                    <h5 class="text-white mb-0">{{ $flora->common_name }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Flora End -->

<!-- Visiting Hours Start -->
<div class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-6 text-white mb-5">Jam Kunjungan</h1>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <span>Senin</span>
                        <span>07:30 - 17:00 WIT</span>
                    </li>
                    <li class="list-group-item">
                        <span>Selasa</span>
                        <span>07:30 - 17:00 WIT</span>
                    </li>
                    <li class="list-group-item">
                        <span>Rabu</span>
                        <span>07:30 - 17:00 WIT</span>
                    </li>
                    <li class="list-group-item">
                        <span>Kamis</span>
                        <span>07:30 - 17:00 WIT</span>
                    </li>
                    <li class="list-group-item">
                        <span>Jumat</span>
                        <span>07:30 - 17:00 WIT</span>
                    </li>
                    <li class="list-group-item">
                        <span>Sabtu</span>
                        <span>07:30 - 17:00 WIT</span>
                    </li>
                    <li class="list-group-item">
                        <span>Minggu</span>
                        <span>07:30 - 17:00 WIT</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 text-light wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-6 text-white mb-5">Informasi Kontak</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Lokasi</td>
                            <td>Maro, Kec. Merauke, Kabupaten Merauke, Papua 99614</td>
                        </tr>
                        <tr>
                            <td>No.Telp</td>
                            <td>
                                <p class="mb-2">+012 345 6789</p>
                                <p class="mb-0">+098 765 4321</p>
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>
                                <p class="mb-0">yamai-atid@example.com</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Visiting Hours End -->

@endsection