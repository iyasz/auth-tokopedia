<?php

$set = [];

if (isset($_POST['btn_login'])) {
    $username = htmlspecialchars($_POST['input_username']);

    $select_username = $conn->query("SELECT * FROM admin WHERE username = '$username'")->num_rows;

    if ($select_username < 1) {
        $set['daftar'] = $username;
    } else {
        echo "anime";
    }
}

?>

<style>
    @media only screen and (min-width: 769px) {
        body {
            background-image: url("assets/img/bg.png");
            background-size: 800px;
            background-repeat: no-repeat;
            background-position: center;
            /* background-attachment: fixed; */
            background-position-y: 113px;
        }
    }
</style>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class=" col-12 col-md-7 col-lg-4  ">
            <div class="card card-login card-lg shadow-style border-0">
                <div class="card-body mx-3">
                    <form action="" method="post">
                        <div class="header d-flex align-items-center my-4">
                            <h3 class="fw-bold text-blackToGray">Masuk</h3>
                            <a class="textLinkGreen text-decoration-none ms-auto fs-log2 letter-login ff-open" href="index.php?page=register">Daftar</a>
                        </div>
                        <div class="content">
                            <label class="fs-log1 fw-bold letter-login opacity-75" for="">Nomor HP atau Email</label>
                            <input autocomplete="off" name="input_username" id="post_auth" autocomplete="off" type="text" class="form-control input-login">
                            <p id="validate_reg" class="fs-log1 letter-login mt-1 text-gray">Contoh: email@tokopedia.com</p>
                            <div class="text-end">
                                <a class="textLinkGreen text-decoration-none fs-log2 letter-login ff-open" href="">Butuh bantuan?</a>
                            </div>

                            <button name="btn_login" id="btn_auth" disabled type="submit" class="btn btn-primary mt-2 tr w-100 fw-bold btn-login py-2 rounded-3">Selanjutnya</button>

                            <div class="text-gray d-flex align-items-center lnHR mb-1">
                                <span class="lineHorizontal"></span>
                                <p class=" fs-log1 text-center w-50 letter-login mx-lg-3 mx-md-0 mx-0">atau masuk dengan</p>
                                <span class="lineHorizontal"></span>
                            </div>
                        </div>
                        <div class="mb-3 d-none d-md-block d-lg-block">
                            <a class="btn btn-primary w-100 bg-transparent allMethod QR fw-semibold" href=""><img src="assets/img/qr-code-scan.svg" class="pe-1"> Scan Kode QR</a>
                            <a class="btn btn-primary w-100 bg-transparent allMethod google fw-semibold mt-2 " href=""><img src="assets/img/googleicon.svg" width="22px" class="pe-1"> Google</a>
                        </div>
                        <div class="d-block d-md-none d-lg-none">

                            <!-- off canvs  -->

                            <a class="btn btn-primary letter-login w-100 bg-transparent allMethod QR fw-semibold" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Metode Lain</a>

                            <div class="offcanvas offcanvas-login offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title ff-open fw-semibold text-blackToGray letter-login" id="offcanvasBottomLabel">Pilih akun untuk masuk</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body small">
                                    <a class="btn btn-primary ff-open w-100 bg-transparent allMethod QR fw-semibold " href=""><img src="assets/img/qr-code-scan.svg" class="pe-1 "> Scan Kode QR</a>
                                    <a class="btn btn-primary w-100 bg-transparent allMethod google fw-semibold ff-open mt-2 " href=""><img src="assets/img/googleicon.svg" width="22px" class="pe-1"> Google</a>
                                </div>

                                <!-- sign up -->

                            </div>
                            <p class="letter-login text-center text-gray2 fs-log1 mt-2 fs-log2 ff-open">Belum punya akun? &nbsp;<a href="index.php?page=register" class="text-decoration-none textLinkGreen ">Daftar</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h4 class="ff-open fw-bolder mt-2">Email belum terdaftar</h4>
                <p class="ff-open QR mb-1 mt-2">Lanjut daftar dengan email ini</p>
                <h5 class="ff-open fs-log1 opacity-75"><strong class="fw-bolder"><?= $username ?? ''; ?></strong></h5>
                <div class="mt-4 d-flex justify-content-center">
                    <button class="btn btn-primary px-5">Ubah</button>
                    <button class="btn btn-primary px-5">Ya, Daftar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup  <?= isset($set['daftar']) ? 'd-flex position-fixed ' : '' ?>">
    <div class="popup-content animate__animated animate__pulse">
        <h4 class="ff-open fw-bolder mt-2">Email belum terdaftar</h4>
        <p class="ff-open QR mb-1 mt-2">Lanjut daftar dengan email ini</p>
        <h5 class="ff-open fs-log1 opacity-75"><strong class="fw-bolder"><?= $username ?? ''; ?></strong></h5>
        <div class="mt-4 d-flex justify-content-center">
            <button class="btn btn-primary px-5">Ubah</button>
            <button class="btn btn-primary px-5">Ya, Daftar</button>
        </div>
    </div>
</div>

<div class="container mt-6">
    <div class="row text-center">
        <div class="col-lg-12 col-md-4 d-lg-block d-md-block d-sm-none ">
            <p class="ff-open fs-log3 opacity-75">&copy; 2009-2022, PT Tokopedia <a href="" class="textLinkGreen text-decoration-none fw-bold ff-open ms-3">Bantuan</a></p>
        </div>
    </div>
</div>