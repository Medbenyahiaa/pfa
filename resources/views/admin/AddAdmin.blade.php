@extends('layouts.master')
@section('Content-fluid')
<div class="panel-header panel-header-sm">
  
</div>
@endsection

@section('titlePage')
    Gestion d'administrateur
@endsection

@section('content')
    <center>
    <div class="card" style="width: 50%; border-radius: 26px; background-color: #ececec">
        <div class="card-header">
            <div style="text-align: center;"><h3 style="color: #ff3636">ADMINISTRATEUR</h3></div>
        </div>
        <div class="card-body">
    <form method="post" class="section " enctype="multipart/form-data">

    {{csrf_field()}}


    <!-- Email -->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input type="text" class="form-control" name="email" placeholder="Adresse Mail" value="{{ old('email') }}">
        </div>

        <!-- Gestion d'erreur pour l'adresse Mail -->
        @if( $errors->has('email'))

            <p class="erreur">
                {{ $errors->first('email') }}
            </p>

        @endif

    <!-- Mot de passe -->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="Mot de passe" name="password">

        </div>
        <!-- Gestion d'erreur pour le mot de passe -->
        @if( $errors->has('password'))
            <p class="erreur">
                {{ $errors->first('password') }}
            </p>

        @endif

    <!-- Mot de passe de confirmation-->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="Mot de passe de confirmation" name="password_confirmation">
        </div>

        <!-- Gestion d'erreur pour le mot de passe de confirmation-->
        @if( $errors->has('password_confirmation'))

            <p class="erreur">
                {{ $errors->first('password_confirmation') }}
            </p>

        @endif

        <br>

        <!-- Nom Complet-->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" name="nom" placeholder="Nom " value="{{ old('nom') }}">
        </div>

        <!-- Gestion d'erreur pour le Nom -->
        @if( $errors->has('nom'))
            <p class="erreur">
                {{ $errors->first('nom') }}
            </p>

        @endif

    <!-- Numero de téléphone -->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-mobile"></i></span>
            </div>
            <input  type="ttext"
                    class="form-control" name="telephone" placeholder="Numero de Téléphone" value="{{ old('telephone') }}">
        </div>

        <!-- Gestion d'erreur pour le num -->
        @if( $errors->has('telephone'))
            <p class="erreur">
                {{ $errors->first('telephone') }}
            </p>

    @endif

    <!-- Boutton de confirmation -->
        <center>
            <div class="form-group">
                <input type="submit" value="register" class="VoirPlus">
            </div>
        </center>

    </form>
        </div>
    </div>
    </center>

    <div class="table-responsive">
        <table class="table">
            <thead class="tableTitle">
            <tr style=" text-align: center ;" >
                <th scope="col">Role</th>
                <th scope="col">Email</th>
                <th scope="col">Nom </th>
                <th scope="col">Prenom </th>
                <th scope="col">Téléphone</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $users as $user)
                    <tr>
                        <th scope="col">{{ $user->role }}</th>
                        <th scope="col">{{ $user->email }}</th>
                        <th scope="col">{{ $user->nom }}</th>
                        <th scope="col">{{ $user->prenom }}</th>
                        <th scope="col">{{ $user->telephone }}</th>
                    </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
