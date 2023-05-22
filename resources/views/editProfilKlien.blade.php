<?php
$query = session('userSession');
?>
@extends('layouts.app')

@section('sidebar')
    @include('parts.sidebarKlien')
@endsection

@section('navbar')
    <div class="bg-dark text-white">
        <ul class="nav justify-content-end ">
            <li class="nav-item">
                <h6 class="sf-4 m-3">Selamat Datang | <b><?= $query[0] -> nama ?></b></h6>
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="card p-3 m-5">
            <h4><strong> Edit Profil </strong></h4>
            <form onSubmit=" return confirm('Apakah Anda Yakin Ingin Menyimpan Data?')" action="<?=route('profil.save')?>" method="post">
                @csrf
                <div class="">
                    <div class="form-grup">
                        <strong> Nama</strong> <input class="form-control" type="text" name="nama" value="<?= $query[0]->nama ?>" required>
                    </div>
                    <p> </p>
                    <div class="form-grup">
                        <strong> Email</strong> <input class="form-control" type="email" name="email" value="<?= $query[0]->email ?>" required>
                    </div>
                    <p> </p>
                    <div class="form-grup">
                        <strong> No Handphone</strong> <input class="form-control" type="text" name="noHP" value="<?= $query[0]->noHP ?>" required>
                    </div>
                    <p> </p>
                    <div>
                        <button type="submit" class="btn btn-primary">Simpan Profil</button>
                    </div>
                </div>
            </form>
            <hr>
            <div>
                <button onclick="window.location.replace('<?=route('home.profil')?>')" class="btn btn-danger"> Cancel </button>
            </div>
        </div>
    </div>
@endsection

@section('footer')
<?php
    // if(isset($pass))
    // {
    //     if($pass==0)
    //     {
    //         echo("<script> 
    //             alert('Password Salah');
    //         </script>");
    //     }
    //     elseif($pass==1)
    //     {
    //         echo("<script> 
    //             alert('Password Baru tidak Serupa');
    //         </script>");
    //     }
    //     $pass=NULL;
    // }
    $hasil = session() -> get('hasil');
    $data = session() -> get('data');
    if(isset($hasil))
    {
        print($hasil);
        if($hasil == true)
        {
            session('userSession')[0]->nama = $data['nama'];
            session('userSession')[0]->email = $data['email'];
            session('userSession')[0]->noHP = $data['noHP'];
            $hasil = NULL;
            echo("<script> 
                alert('Update Berhasil');
            </script>");
            
        }
        elseif($hasil == false)
        {
            echo("<script>alert('Update Gagal')</script>");
        }
    }
?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
@endsection