@extends('layouts.master')
@section('Content-fluid')
<div class="panel-header panel-header-sm">
  
</div>
@endsection
@section('title')
    Annonce
@endsection
@section('titlePage')
    Ecrire Ton Annonce
@endsection

@section('content')
    <center>
    <div class="card" style="width: 50%; border-radius: 26px; background-color: #ececec">
        <div class="card-header">
            <div style="text-align: center;"><h3 style="color: #ff3636">Annonce</h3></div>
        </div>
        <div class="card-body">
        <form method="post" action=" {{ route('annonce.store')}}" class="section " enctype="multipart/form-data">

    {{csrf_field()}}


    <!--  Sujet -->
    <!-- -->
    <div class="input-group form-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-maps"></i></span>
        </div>
        <input type="text" class="form-control" name="ville" placeholder="ville " value="{{ old('ville') }}">
    </div>

    <!-- Gestion d'erreur  -->
    @if( $errors->has('ville'))
        <p class="erreur">
            {{ $errors->first('ville') }}
        </p>

    @endif
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input type="text" class="form-control" name="sujet" placeholder=" Sujet" value="{{ old('sujet') }}">

        </div>

        
      

        
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <textarea type="text" class="form-control" name="detail" placeholder=" detail" value="{{ old('detail') }}"></textarea>
        </div>

    <!--  -->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-mobile"></i></span>
            </div>
            <input  type="text"
                    class="form-control" name="photo" placeholder="photo" value="{{ old('photo') }}">
        </div>

       
    

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
