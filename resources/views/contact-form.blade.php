@extends('layouts.app') 

@section('content')

    <div class="container con-form">
        <div class="row justify-content-center">
            <div>

                <br><br>
                <h4>Contact Us</h4>
                <p>Have any question or feedback?</p>
                <br><br>

                @if(Session::has('status'))
                <div class="alert alert-success">{{ Session::get('status') }}</div>
                @endif

                <form action="/contact" method="post">

                    {{ csrf_field() }}

                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" placeholder="Name" />
                    
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" placeholder="Email Address" />

                    <label for="email">Number Phone</label>
                    <input class="form-control" type="numberic" name="no.hp" placeholder="Number Phone" />
                    
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="" placeholder="Message" cols="30" rows="3"></textarea><br>


                    <button class="btn btn-dark btn-block">Submit</button>
                    <br>
                <form>
            </div>
        </div>
    </div>
    

@endsection