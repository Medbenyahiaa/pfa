@extends('layouts.master')
@section('Content-fluid')
<div class="panel-header panel-header-sm">
  
</div>
@endsection
@section('title')
    Message
@endsection
@section('titlePage')
    Contacter le bénéficiare
@endsection

@section('content')
    <center>
    <div class="card" style="width: 50%; border-radius: 26px; background-color: #5c5b5b">
        <div class="card-header">
            <div style="text-align: center;"><h3 style="color: #fa7000">Message</h3></div>
        </div>
        <div class="card-body">
        <form method="post" action=" {{ route('annonce.store')}}" class="section " enctype="multipart/form-data">

    {{csrf_field()}}


    <!--  Sujet -->
    <!-- -->

        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <textarea type="text" class="form-control" name="messge" placeholder=" message" value="{{ old('detail') }}"></textarea>
        </div>

    <!--  -->
        

       
    

    <!-- Boutton de confirmation -->
        <center>
            <div class="form-group">
                <input type="submit" value="Envoyer" class="VoirPlus">
            </div>
        </center>

    </form>
        </div>
    </div>
    </center>

    

@endsection
