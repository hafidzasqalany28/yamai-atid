<!DOCTYPE html>
<html lang="id">

<head>
    <title>Daftar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(img/kaswari_bg.JPG); background-size: cover;">
                        </div>
                        <div class="wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h4 class="mb-4">YamaiAtid - Daftar</h4>
                                </div>
                            </div>

                            <form method="POST" action="{{ route('register') }}" class="signin-form">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Nama</label>
                                    <input type="text" class="form-control" name="name" placeholder="Nama Anda"
                                        required>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="label" for="email">Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Email" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="label" for="password">Kata Sandi</label>
                                    <input type="password" class="form-control" name="password" placeholder="Kata Sandi"
                                        required>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="label" for="password_confirmation">Konfirmasi Kata Sandi</label>
                                    <input type="password" class="form-control" name="password_confirmation"
                                        placeholder="Konfirmasi Kata Sandi" required>
                                </div>

                                <div class="form-group">
                                    <button type="submit"
                                        class="form-control btn btn-primary rounded submit px-3">Daftar
                                    </button>
                                </div>
                            </form>
                            <p class="text-center">Sudah menjadi anggota? <a href="{{ route('login') }}">Masuk</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/style.js') }}"></script>
</body>

</html>
