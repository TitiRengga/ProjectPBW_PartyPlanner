@extends('layouts.app') 

@section('content')
    
    <div id="slider">
        <div id="headerSlider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
                <li data-target="#headerSlider" data-slide-to="1"></li>
                <li data-target="#headerSlider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="img/slider1.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="img/slider2.jpg">
                </div>
                <div class=" carousel-item">
                    <img class="d-block img-fluid" src="img/slider3.jpg">
                </div>
            </div>
            <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>About Us</h2>
                    <div class="about-content">
                        Party Planner menawarkan berbagai tema dan warna untuk acara
                        pesta yang kamu inginkan dari berbagai jasa party planning. Mulai
                        dari yang simpel tapi elegan sampai yang glamor. Jasa Party
                        planning yang kami tawarkan sangat terjamin dan harga bersahabat.
                    </div>
                    <a href="/aboutus" class="btn btn-dark">Read More>></a>
                </div>

                <div class="col-md-6 skills-bar">
                    <p>Wedding Party</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 100%">100%</div>
                    </div>
                    <p>Birthday Party</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 100%">100%</div>
                    </div>
                    <p>Baby Shower</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 100%">100%</div>
                    </div>
                    <p>Other's Party</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 80%">80%</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- </body> -->

<!-- </html> -->
@endsection