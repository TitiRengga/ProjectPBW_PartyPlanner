@extends('layouts.app') 

@section('content')
    
    <body class="text-center">
        <div class="container">
        <fieldset>
            <form class="form-signin" action="/booking" method="post">
            @csrf
                <img class="my-4" src="img/logo.png" alt="" width="85" height="85">
                <h1 class="h3 mb-3 font-weight-normal" style="color:black">Booking disini yuk!</h1>
                <label for="Nama" class="sr-only">Nama</label>
                <input type="text" name="Nama" id="Nama" class="form-control" placeholder="Nama" required>
                <br>
                <label for="Alamat" class="sr-only">Alamat</label>
                <input type="text" name="Alamat" id="Alamat" class="form-control" placeholder="Alamat" required>
                <br>
                <label for="Email" class="sr-only">Email address</label>
                <input type="email" name="Email" id="Email" class="form-control" placeholder="Email address" required autofocus>
                <br>
                Tanggal Pemesanan Party:<br>
                <input type="date" name="Tanggal_Booking" class="form-control" required >
                <br>
                <select class="form-control" name="Toko" id="Toko">
                    <option value="">Toko yang Anda inginkan</option>
                    <option value="Kingda Party">Kingda Party</option>
                    <option value="HS Party Planner">HS Party Planner</option>
                </select>
                <br>
                <select class="form-control" name="Tipe_Pesta" id="Tipe_Pesta">
                    <option value="">Pilih Party yang Anda inginkan</option>
                    <option value="Wedding">Wedding</option>
                    <option value="Birthday">Birthday</option>
                    <option value="Baby Shower">Baby Shower</option>
                    <option value="Engangement">Engangement</option>
                    <option value="Bridal Shower">Bridal Shower</option>
                    <option value="Akikah">Akikah</option>
                    <option value="Photobooth">Photobooth</option>
                </select>
                <br>
        <a href="/pesan"> <button class="btn btn-lg btn-dark btn-block" type="submit">BOOKING</button></a>
        </fieldset>
        <p class="mt-5 mb-3 text-muted">&copy; Party Planner</p>
    </form>
        </div>
    </body>
    </html>
@endsection