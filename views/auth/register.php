<?php

// include "app/sendmail.php";
$olds = [];

if (isset($_POST['daftar'])) {
    $input_register = $_POST['post_register'];

    if (empty($input_register)) {
        $olds['register'] = "Nomor Ponsel atau Email harus diisi";
        echo "<script>alert('NGAPAIN DEK')</script>";
        echo "<script>validate_reg.innerHTML = 'Nomor Ponsel atau Email harus diisi';</script>";
        echo "<script>location.replace('index.php?page=register')</script>";
    }

    if (empty($olds)) {

        echo "<script>location.replace('index.php?page=home')</script>";
    }
}


// $errs = [];
// $olds = [];

// if (isset($_POST['kirim'])) {
//     $nama = htmlspecialchars($_POST['nama']);
//     $email = htmlspecialchars($_POST['email']);
//     $pesan = htmlspecialchars($_POST['pesan']);


//     if (empty($nama) == TRUE) {
//         $errs['nama'] = "Masukan Nama Anda";
//         $olds['email'] = $_POST['email'];
//         $olds['pesan'] = $_POST['pesan'];

//         // echo "<script>location.replace('index.php#contact')</script>";
//     }

//     if (empty($errs) == FALSE) {
//         echo "<script>window.location.replace('#contact')</script>";
//     }

//     if (empty($errs) == TRUE) {

//         $subject = "Pesan Portfolio | From " . $email;
//         $subjectFeed = "Pesan Anda Telah Dikirim";

//         $emails = "zakamaragames@gmail.com";
//         $namas = "Yasz Avellia!";

//         $messageFeed = "Terimakasih!. Pesan anda telah berhasil terkirim :3";
//         $message = $pesan;

//         //send

//         $send = send_email($email, $namas, $emails, $nama, $subject, $message);

//         //feedback

//         $feedback = feedback($emails, $namas, $email, $subjectFeed, $messageFeed);
//         if ($send == TRUE and $feedback == TRUE) {
//             $swal = 1;
//             echo '<script>
//                     setInterval(function () {
//                         window.location.href="index.php"
//                     }, 1800);
//                 </script>';
//         } else {
//             var_dump($send);
//             die;
//         }
//     }
// }


?>

<div class="container-fluid ">
    <div class="row mt-4 justify-content-md-center justify-content-lg-start">
        <div class="col-lg-6 d-lg-block d-md-none d-none mt-5">
            <div class="text-center ff-open ms-5">
                <img src="assets/img/register_new.png" width="370px" alt="">
                <h4 class="mt-4 mb-3 fw-bold ">Jual Beli Hudah Hanya di Tokopedia</h4>
                <p class="fs-log2 fw-semibold opacity-75 letter-login3">Gabung dan rasakan kemudahan bertransaksi di Tokopedia</p>
            </div>
        </div>
        <div class="col-lg-5 col-md-7 col-sm-12">
            <div class="card card-login shadow-style2 border-0">
                <div class="card-body mx-4">
                    <form action="" method="post">
                        <div class="header text-center ">
                            <h4 class="f-header mb-1 ff-open fs fw-bold">Daftar Sekarang</h4>
                            <p class="fs-log opacity-75 letter-login ">Sudah punya akun Tokopedia? <a class="text-decoration-none textLinkGreen" href="index.php?page=login">Masuk</a></p>
                            <a class="btn btn-primary d-lg-block d-md-block d-none w-100 bg-transparent allMethod google  fw-semibold mt-2 " href=""><img src="assets/img/googleicon.svg" width="18px" class="me-4"> Google</a>
                        </div>
                        <div class="text-gray d-flex align-items-center lnHR mb-1 d-lg-flex d-md-flex d-none">
                            <span class="lineHorizontal"></span>
                            <p class="fw-semibold text-center w-50 ff-open fs-log2 letter-login mx-lg-3 mx-md-0 mx-0">atau masuk dengan</p>
                            <span class="lineHorizontal"></span>
                        </div>
                        <div class="">
                            <p class="mb-1 fs-log3 fw-semibold opacity-50 ff-open">Phone Number or Email</p>
                            <input autocomplete="off" name="post_register" id="post_auth" type="text" class="form-control input-login inp_reg">
                            <p class="fs-log2 mt-1 text-gray " id="validate_reg">Example: email@tokopedia.com</p>

                            <button id="btn_auth" disabled="disabled" name="daftar" type="submit" class="btn btn-primary w-100 letter-login2 fw-bold btn-login py-2 rounded-3">Daftar</button>
                            <div class="text-gray d-flex align-items-center lnHR mb-1 d-lg-none d-md-none d-sm-flex">
                                <span class="lineHorizontal"></span>
                                <p class="fw-semibold text-center w-50 ff-open fs-log2 letter-login mx-lg-3 mx-md-0 mx-0">atau masuk dengan</p>
                                <span class="lineHorizontal"></span>

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
                                </div>
                            </div>
                            <div class="text-center opacity-75 mt-3">
                                <p class="ff-open fs-log2 letter-login">Dengan mendaftar, saya menyetujui <br> <a href="" class="text-decoration-none textLinkGreen">Syarat dan Ketentuan</a> serta <a href="" class="text-decoration-none textLinkGreen">Kebijakan Privasi</a></p>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container d-lg-block d-md-block d-none mt-6 mb-3">
    <div class="row text-center">
        <div class="col-lg-12 col-md-4  ">
            <p class="ff-open fs-log1 opacity-75">&copy; 2009-2022, PT Tokopedia <a href="" class="textLinkGreen text-decoration-none fw-bold ff-open ms-3">Tokopedia Care</a></p>
        </div>
    </div>
</div>