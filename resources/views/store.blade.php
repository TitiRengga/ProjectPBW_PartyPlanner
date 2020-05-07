@extends('layouts.app') 

@section('content')


        <div class="container text-center mb-5 mt-5">
            <h1 style="color:black;">PARTY PLANNER</h1>
            <p>Lihat dan Pesan disini untuk membuat Pesta yang Anda inginkan!</p>
            <img src="img/bg5.jpg" width="100%" height="500" alt="">
            <div class="card my-5" >
            <div class="row no-gutters justify-content-center row-lg-12">
                <div class="col-md-6">
                <img src="img/bg3.jpg" class="card-img" alt="...">
                </div>
                <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title mt-5">Kingda Party</h5>
                    <p class="card-text">
                        <h6>Party Planner Murah Banda Aceh</h6>
                        <br>
                        Birthday - Photobooth - Akikah - Bridal Shower - Engagement - Wedding - Baby Shower
                        <br><br>
                        Contact : <br>
                        Line        : 085762098986 <br>
                        WhatsApp    : 085762098986</p>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="container text-center mb-5">
            <div class="card my-5">
            <div class="row no-gutters justify-content-center row-lg-12">
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title mt-5">HS Party Planner</h5>
                        <p class="card-text">
                        <h6>Party Design & Rent Props Aceh</h6>
                        <br>
                        Birthday - Photobooth - Akikah - Bridal Shower - Engagement - Wedding - Baby Shower
                        <br><br>
                        Contact : <br>
                        Line        : @mpj9704a <br>
                        WhatsApp    : 08116810018</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="img/bg7.jpg" class="card-img" alt="...">
                </div>
            </div>
            </div>
        </div>

        <div class="container text-center mb-5">
            <a class="btn btn-dark" href="{{ route('pesan') }}">BOOKING DISINI</a>
        </div>

        <div class="text-center" id="footer">
        Copyright &copy; 2020
        Designed by Party Planner
    </div>

    <!-- </body>
</html> -->
@endsection
