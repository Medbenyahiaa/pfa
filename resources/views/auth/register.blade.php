@extends('layouts.app')
@section('CustomCss')
   <style>
      .register-left{
         text-align: center;
         color: #fff;
         margin-top: 6%;
         }
       .register-left input{
            border: none;
           border-radius: 1.5rem;
           padding: 2%;
          width: 60%;
          background: #f8f9fa;
           font-weight: bold;
           color: #383d41;
           margin-top: 30%;
           margin-bottom: 3%;
            cursor: pointer;
       }
       .register-right{
            background: #f8f9fa;
            border-top-left-radius: 30% 80%;
           border-bottom-left-radius: 30% 80%;
       }
      .register-left img{
          margin-top: 15%;
          margin-bottom: 5%;
          width: 25%;
         -webkit-animation: mover 2s infinite  alternate;
         animation: mover 1s infinite  alternate;
        }
         @-webkit-keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        @keyframes mover {
            0% { transform: translateY(0); }
           100% { transform: translateY(-20px); }
        }
      .register-left p{
           font-weight: lighter;
          padding: 12%;
          margin-top: -9%;
        }
      .register .register-form{
         padding: 10%;
         margin-top: 10%;
        }
       .btnRegister{
           float: right;
          margin-top: 10%;
           border: none;
           border-radius: 1.5rem;
           padding: 2%;
           background: #0062cc;
           color: #fff;
           font-weight: 600;
           width: 50%;
           cursor: pointer;
         }
      .register .nav-tabs{
           margin-top: 3%;
           border: none;
         background: #0062cc;
         border-radius: 1.5rem;
         width: 28%;
         float: right;
        }
       .register .nav-tabs .nav-link{
         padding: 2%;
         height: 34px;
         font-weight: 600;
         color: #fff;
         border-top-right-radius: 1.5rem;
         border-bottom-right-radius: 1.5rem;
        }
      .register .nav-tabs .nav-link:hover{
         border: none;
       }
      .register .nav-tabs .nav-link.active{
          width: 100px;
          color: #0062cc;
          border: 2px solid #0062cc;
          border-top-left-radius: 1.5rem;
          border-bottom-left-radius: 1.5rem;
        }
       .register-heading{
          text-align: center;
          margin-top: 8%;
         margin-bottom: -15%;
         color: #495057;
        }
        .btn-round{
          border-radius: 17px;
        }
        .btn-round-lg{
          border-radius: 22.5px;
        }
        #imagePreview {
            width: 180px;
            height: 180px;
            background-position: center center;
            background-size: cover;
            -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
            display: inline-block;
            background-image: url('css/placeholder-profile.jpg');
        }

        #uploadFile{
        display: none
        }
        
    </style>
@endsection
@section('content')
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Bienvenue</h3>
            <p>“Rester chez soi”</p>
            <a class="btn btn-primary btn-round-lg btn-lg " href="{{route('login')}}" >{{"Login"}}</a>
        </div>
        <div class="col-md-9 register-right">
            <form method="POST" action="{{ route('compte.store') }}">
                @csrf
                
                <div class="tab-content" id="myTabContent">
                    
                        <h3 class="register-heading">Sign In</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div id="imagePreview" src="placeholder-profile.jpg" alt="placeholder image goes here"></div>
                                <input id="uploadFile" type="file" name="image" class="img" />
                                <div class="form-group">
                                    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus placeholder="Nom *"/>
                                    @error('nom')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus placeholder="Prenom*"/>
                                    @error('prenom')
                                      <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="pays" type="text" class="form-control @error('pays') is-invalid @enderror" name="pays" value="{{ old('pays') }}" required autocomplete="pays" autofocus placeholder="Pays *"/>
                                    @error('pays')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </div>
                                <div class="form-group">
                                    <input  id="ville" type="text" class="form-control @error('ville') is-invalid @enderror" name="ville" value="{{ old('ville') }}" required autocomplete="ville" autofocus placeholder="Ville *"  />
                                    @error('ville')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                    @enderror                 
                                </div>
                                <div class="form-group">
                                    <input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse" autofocus placeholder="Adresse *"/>
                                    @error('adresse')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" value="femme" id="femme" name="sexe" class="radio inline @error('sexe') is-invalid @enderror" checked>
                                            <span> Femme</span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" value="homme" id="homme" name="sexe"  class="radio inline @error('sexe') is-invalid @enderror" checked>
                                            <span> Homme</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="telephone" type="text" minlength="10" maxlength="10" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" autofocus placeholder="Telephone *" />
                                    @error('telephone')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email *"/>
                                    @error('email')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password *"/>
                                    @error('password')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password *" />
                                </div>
                                <div class="form-group">
                                    <input id="img" type="text" class="form-control @error('img') is-invalid @enderror" name="img" value="{{ old('img') }}" required autocomplete="img" autofocus placeholder="image *" >
                                    @error('img')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio">
                                        <label for="donateur">{{"DONATEUR"}} </label>
                                        <input type="radio" name="role" value="donateur" id="donateur" class="nav-link @error('role') is-invalid @enderror">
                                        <label for="beneficiare">{{"BENEFICIARE"}} </label>
                                        <input type="radio" name="role" value="beneficiare" id="beneficiare" class="nav-link @error('role') is-invalid @enderror">
                                    </div>
                                </div>
                                <button type="submit" class="btnRegister" >
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    
                    
                </div>
                
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    document.getElementById("uploadFile").addEventListener('change', function () {
	var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function(){ // set image data as background of div
			document.getElementById('imagePreview').style.backgroundImage = "url("+this.result+")";
            }
        }
    });

    document.getElementById('imagePreview').addEventListener('click', function () {
        document.getElementById('uploadFile').click();
    });
</script>
@endsection('content')