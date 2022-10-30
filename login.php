<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

    <title>Document</title>
</head>

<style>
    @media only screen and (min-width: 769px) {
        body {
            background-image: url('bg.png');
            background-size: 790px;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-position-y: 130px;
        }

        .card-lg {
            width: 82%;
            margin-left: 10%;

        }
    }

    @media only screen and (max-width: 768px) {

        .card-lg {
            box-shadow: none !important;
        }

    }

    .card-login {
        position: relative;
        top: 43px;
    }

    .textLinkGreen {
        color: rgb(3, 154, 14) !important;
    }

    .text-blackToGray {
        color: #31353b;
    }

    .letter-login {
        letter-spacing: -0.7px;
    }

    .shadow-style {
        box-shadow: 0px 0px 18px 0px rgba(0, 0, 0, 0.05);
        -webkit-box-shadow: 0px 0px 18px 0px rgba(0, 0, 0, 0.05);
        -moz-box-shadow: 0px 0px 18px 0px rgba(0, 0, 0, 0.05) !important;
    }

    .lineHorizontal {
        border-bottom: 1px solid rgba(0, 0, 0, 0.15);
        width: 31%;
        position: relative;
        top: -6px;
    }

    .lnHR {
        justify-content: center;
        margin: 24px 0;
    }

    .fs-log1 {
        font-size: calc(14px + 0.4px);
    }

    .text-gray {
        color: rgba(0, 0, 0, 0.45) !important;
    }

    .input-login:focus {
        box-shadow: none;
        outline: none;
        border-color: rgb(3, 230, 10);
    }

    .button-login {
        background-color: #E5E7E9 !important;
        border: 0;
        color: #757575 !important;
    }

    .button-login:hover {
        cursor: no-drop;
    }

    .button-login:active {
        cursor: no-drop;
        background-color: #d7d7d7 !important;
    }

    .allMethod {
        border-color: #E5E7E9;
    }

    .allMethod:hover {
        border-color: #E5E7E9;
    }

    .allMethod:active {
        border-color: #d7d7d7 !important;
    }

    .QR {
        color: #757575;
    }

    .QR:hover {
        color: #757575;
    }

    .QR:active {
        color: #757575 !important;
    }

    .google {
        color: #31353b;
    }

    .google:hover {
        color: #31353b;
    }

    .google:active {
        color: #31353b !important;
    }

    /* .button-login:active:hover:not([disabled]) {
        cursor: no-drop;
    }

    .button-login:hover:disabled {
        cursor: no-drop;
    }

    .button-login:active:disabled {
        background-color: red !important;
    } */
</style>

<body>

    <div class="container-fluid">
        <div class="row text-center">
            <div class="col mt-5">
                <img src="logo.png" width="160px" alt="logo">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class=" col-12 col-md-7 col-lg-4  ">
                <div class="card  card-login card-lg shadow-style border-0">
                    <div class="card-body mx-3">
                        <div class="header d-flex align-items-center my-4">
                            <h3 class="fw-bold text-blackToGray">Masuk</h3>
                            <a class="textLinkGreen text-decoration-none ms-auto fs-log1 letter-login" href="">Daftar</a>
                        </div>
                        <div class="content">
                            <label class="fs-log1 fw-bold letter-login opacity-75" for="">Nomor HP atau Email</label>
                            <input type="text" class="form-control input-login">
                            <p class="fs-log1 letter-login mt-1 text-gray">Contoh: email@tokopedia.com</p>
                            <div class="text-end">
                                <a class="textLinkGreen text-decoration-none fs-log1 letter-login" href="">Butuh bantuan?</a>
                            </div>
                            <button class="btn btn-primary mt-2 w-100 fw-bold button-login py-2 rounded-3">Selanjutnya</button>
                            <div class="text-gray d-flex align-items-center lnHR mb-1">
                                <span class="lineHorizontal"></span>
                                <p class=" fs-log1 text-center w-50 letter-login mx-lg-3 mx-md-0 mx-0">atau masuk dengan</p>
                                <span class="lineHorizontal"></span>
                            </div>
                        </div>
                        <div class="mb-3 d-none d-md-block d-lg-block">
                            <a class="btn btn-primary w-100 bg-transparent allMethod QR fw-semibold" href=""><img src="qr-code-scan.svg" class="pe-1"> Scan Kode QR</a>
                            <a class="btn btn-primary w-100 bg-transparent allMethod google fw-semibold mt-2 " href=""><img src="googleicon.svg" width="22px" class="pe-1"> Google</a>
                        </div>
                        <div class="d-block d-md-none d-lg-none">
                            <a class="btn btn-primary letter-login w-100 bg-transparent allMethod QR fw-semibold" href="">Metode Lain</a>
                            <p class="letter-login text-center text-gray fs-log1 mt-2">Belum punya akun? <a href="" class="text-decoration-none textLinkGreen">Daftar</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>