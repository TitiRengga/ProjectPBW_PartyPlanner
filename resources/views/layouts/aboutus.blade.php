@extends('layouts.app') 

@section('content')

    <!-- Deskripsi -->
    <section id="deskripsi">
        <div class="container">
            <h1>Deskripsi</h1>
            <div class="row-deskripsi">
                <div class="deskripsi-col">
                    <div class="deskripsi1">
                        <p style="text-align: justify;">
                            Party Planner ialah website yang menyediakan berbagai jasa Party Planning untuk
                            mendekorasi berbagai event organizer. Party Planner sebagai penghubung antara
                            anda dan Jasa Party Planner yang ada inginkan. Website ini tidak hanya terdapat
                            satu tetapi banyak Jasa Party Planning yang tersebar di seluruh Banda Aceh
                            sehingga anda dapat memilih Party Planning yang anda inginkan sesuai kriteria
                            anda. Jasa Party planning banyak diminati karena dapat mewujudkan keinginan para
                            penggunanya dalam mendekorasi acara. Party Planner menawarkan berbagai tema dan
                            warna untuk acara pesta yang kamu inginkan dari berbagai jasa party planning.
                            Mulai dari yang simpel tapi elegan sampai yang glamor. Jasa Party planning yang
                            kami tawarkan sangat terjamin dan harga bersahabat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- service -->
    <section id="services">
        <div class="container">
            <h1>Our Service</h1>
            <div class="row services">
                <div class="col-md-3 text-center">
                    <div class="icon">
                        <i class="fa fa-birthday-cake" style="margin-top:-20px;"></i>
                    </div>
                    <h3>Birthday Party</h3>
                </div>
                <div class="col-md-3 text-center">
                    <div class="icon">
                        <i class="fa fa-shower"></i>
                    </div>
                    <h3>Baby Shower</h3>
                </div>
                <div class="col-md-3 text-center">
                    <div class="icon">
                        <i class="fa fa-group"></i>
                    </div>
                    <h3>Wedding Party</h3>
                </div>
                <div class="col-md-3 text-center">
                    <div class="icon">
                        <i class="fa fa-life-ring"></i>
                    </div>
                    <h3>Engagement Party</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Members -->
    <section id="team">
        <div class="container">
            <h1 style="color:black">Our Team</h1>
            <div class="row">
                <div class="col-md-3 profile-pic text-center">
                    <div class="img-box">
                        <img src="img/profil1.png" class="img-responsive">
                        <ul>
                            <a href="">
                                <li class="fa fa-instagram"></li>
                            </a>
                            <a href="">
                                <li class="fa fa-envelope"></li>
                            </a>
                            <a href="">
                                <li class="fa fa-facebook"></li>
                            </a>
                        </ul>
                    </div>
                    <h2>Titi Rengga Sari</h2>
                    <h3>20 Tahun</h3>
                    <p>Kuliah di Jurusan Informatika Universitas Syiah Kuala</p>
                </div>
                <div class="col-md-3 profile-pic text-center">
                    <div class="img-box">
                        <img src="img/profil2.png" class="img-responsive">
                        <ul>
                            <a href="">
                                <li class="fa fa-instagram"></li>
                            </a>
                            <a href="">
                                <li class="fa fa-envelope"></li>
                            </a>
                            <a href="">
                                <li class="fa fa-facebook"></li>
                            </a>
                        </ul>
                    </div>
                    <h2>Husnul Sausan</h2>
                    <h3>19 Tahun</h3>
                    <p>Kuliah di Jurusan Informatika Universitas Syiah Kuala</p>
                </div>
                <div class="col-md-3 profile-pic text-center">
                    <div class="img-box">
                        <img src="img/profil3.png" class="img-responsive">
                        <ul>
                            <a href="">
                                <li class="fa fa-instagram"></li>
                            </a>
                            <a href="">
                                <li class="fa fa-envelope"></li>
                            </a>
                            <a href="">
                                <li class="fa fa-facebook"></li>
                            </a>
                        </ul>
                    </div>
                    <h2>Dinda Oktavia Randri</h2>
                    <h3>19 Tahun</h3>
                    <p>Kuliah di Jurusan Informatika Universitas Syiah Kuala</p>
                </div>
                <div class="col-md-3 profile-pic text-center">
                    <div class="img-box">
                        <img src="img/profil4.png" class="img-responsive">
                        <ul>
                            <a href="">
                                <li class="fa fa-instagram"></li>
                            </a>
                            <a href="">
                                <li class="fa fa-envelope"></li>
                            </a>
                            <a href="">
                                <li class="fa fa-facebook"></li>
                            </a>
                        </ul>
                    </div>
                    <h2>Nazira Rezky Afifah</h2>
                    <h3>20 Tahun</h3>
                    <p>Kuliah di Jurusan Informatika Universitas Syiah Kuala</p>
                </div>
            </div>
        </div>
    </section>
<!-- 
</body>

</html> -->
@endsection