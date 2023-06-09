<!-- Fixed -->
@extends('layouts.front')

@section('main')
<div class="container-fluid">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="m-3">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <div class="mt-5 ms-3 me-3 text-center">
                                    <img class="img-fluid" src="{{asset('image/login.webp')}}" alt="">
                                </div>
                                <div class="text-center p-4">
                                    <h3><b> Apa itu Konsulikan?</b></h3>
                                    <p><small> Konsulikan merupakan platform yang menghubungkan para perintis pembudidaya ikan air tawar dengan para pakar perikanan agar dapat berkonsultasi mengenai permasalahan yang dialami para pembudidaya </small> </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                                    </div>
                                    <form id="login" method="post" action=" <?php print(route('login.auth')) ?> ">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Username" name="user" required title="Kolom Wajib Di Isi">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="pass" required>
                                        </div>
                                        <br>
                                        <button id="loginSubmit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="">
                                        <p><small><strong>Anda Konsultan atau Ingin Menjadi Konsultan?</strong>
                                                <a class="" href="<?= route('con.login') ?>">
                                                    Klik Di Sini
                                                </a>
                                            </small></p>
                                    </div>
                                    <div class="">
                                        <p><small><strong>Belum Punya Akun?</strong>
                                                <a class="" href="<?= route('setRegister') ?>">
                                                    Daftar Di Sini
                                                </a>
                                            </small></p>

                                    </div>
                                    <div class="">
                                        <p><small><strong>Kembali Ke </strong>
                                                <a class="" href="<?= route('root') ?>">
                                                    Homepage
                                                </a>
                                            </small></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('auth')
<?php
$status = session()->get('status');
if (isset($status)) {
    if ($status) {
        echo ("<script> alert(' Username atau Password Anda Salah! ') </script>");
    }
}
?>
@endsection

@section('footer')
<script>
    $(document).ready(function() {
        $("#loginSubmit").on("click", function(e) {
        
            validateForm();
        });
    })
    function validateForm() {
        $("#login").validate({
            rules: {
                user: {
                    required: true
                },
                pass: {
                    required: true,
                    
                },
            },
            messages: {
            user: {
                required: "Username harus diisi"
            },
            pass: {
                required: "Password harus disii",
                
            },
            },
            submitHandler: function(form) {
            // Tindakan yang akan dijalankan setelah validasi berhasil
                form.submit();
            }
        });
    }
</script>
@endsection