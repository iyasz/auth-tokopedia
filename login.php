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
            /* width: 360px; */
        }
    }

    .textLinkGreen {
        color: rgb(3, 172, 14) !important;
    }

    .shadow-style {
        box-shadow: 0px 0px 18px 0px rgba(0, 0, 0, 0.05);
        -webkit-box-shadow: 0px 0px 18px 0px rgba(0, 0, 0, 0.05);
        -moz-box-shadow: 0px 0px 18px 0px rgba(0, 0, 0, 0.05) !important;
    }

    .lineHorizontal {
        border: 0.7px solid rgba(0, 0, 0, 0.20) !important;
        width: 31%;
    }

    .lnHR {
        justify-content: center;
        margin: 24px 0;
    }

    .fs-log1 {
        font-size: calc(14px + 0.4px);
    }

    .text-gray {
        color: rgba(0, 0, 0, 0.54) !important;
    }
</style>

<body>

    <div class="container">
        <div class="row text-center">
            <div class="col">
                <img src="logo.png" width="155px" alt="logo">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card card-lg shadow-style border-0">
                    <div class="card-body mx-3">
                        <div class="header d-flex align-items-center ">
                            <h3>Masuk</h3>
                            <a class="textLinkGreen text-decoration-none ms-auto fs-log1" href="">Daftar</a>
                        </div>
                        <div class="content">
                            <label for="">Nomor HP atau Email</label>
                            <input type="text" class="form-control">
                            <p>Contoh: email@tokopedia.com</p>
                            <a class="textLinkGreen text-decoration-none ms-auto fs-log1" href="">Butuh bantuan?</a>
                            <button class="btn btn-primary w-100">Selanjutnya</button>
                            <div class="text-gray d-flex align-items-baseline lnHR">
                                <span class="lineHorizontal"></span>
                                <p class="mx-2 fs-log1 text-center w-50">atau masuk dengan</p>
                                <span class="lineHorizontal"></span>
                            </div>
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