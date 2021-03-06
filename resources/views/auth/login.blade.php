@extends('layouts.app')
@section('CustomCss')
  <style>
      
        body, html {
            height: 100%;
        background-repeat: no-repeat;
        background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
        }

        .card-container.card {
        max-width: 350px;
        padding: 40px 40px;
        }

    .btn {
        font-weight: 700;
        height: 36px;
        -moz-user-select: none;
        -webkit-user-select: none;
        user-select: none;
        cursor: default;
        }

    /*
    * Card component
    */
    .card {
            background: rgb(0, 0, 0,0,5);
            /* just in case there no content*/
        padding:  40px;
        margin: 0 auto 25px;
            margin-top: 50px;
        /* shadows and rounded borders */
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
            height: 500px;
            box-sizing: border-box;
            position: absolute;
            
        }

        .profile-img-card {
        width: 96px;
        height: 96px;
        margin: 0 auto 10px;
        display: block;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        }

    /*
    * Form styles
    */
        .profile-name-card {
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        margin: 10px 0 0;
        min-height: 1em;
    }

    .reauth-email {
        display: block;
        color: #404040;
        line-height: 2;
        margin-bottom: 10px;
        font-size: 14px;
        text-align: center;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        }

        .form-signin #inputEmail,
        .form-signin #inputPassword {
            direction: ltr;
            height: 44px;
            font-size: 16px;
        }

        .form-signin input[type=email],
        .form-signin input[type=password],
        .form-signin input[type=text],
        .form-signin button {
            width: 100%;
            display: block;
            margin-bottom: 10px;
            z-index: 1;
            position: relative;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .form-signin .form-control:focus {
            border-color: rgb(104, 145, 162);
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
        }

        .btn.btn-signin {
            /*background-color: #4d90fe; */
            background-color: rgb(104, 145, 162);
            /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
            padding: 0px;
            font-weight: 700;
            font-size: 14px;
            height: 36px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            border: none;
            -o-transition: all 0.218s;
            -moz-transition: all 0.218s;
            -webkit-transition: all 0.218s;
            transition: all 0.218s;
        }

        .btn.btn-signin:hover,
        .btn.btn-signin:active,
        .btn.btn-signin:focus {
            background-color: rgb(12, 97, 33);
        }

        .forgot-password {
            color: rgb(104, 145, 162);
        }

  </style>
    
@endsection

  @section('content')

          

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="card card-container">
                            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
                            <img id="profile-img" class="profile-img-card" src="//49.231.30.115/emrcleft/assets/images/avatars/avatar1_big@2x.png" />
                            <p id="profile-name" class="profile-name-card"></p>
                            <form class="form-signin">
                                <span id="reauth-email" class="reauth-email"></span>
                                
                                <div >
                                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email address" required autofocus>
        
                                     @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                </div>
                                

                                     <div >
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" required>
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                


                                <div id="remember" class="checkbox">
                                    <label>
                                        <input type="checkbox" value="remember-me"> {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit"> {{ __('Login') }}</button>
                                <hr class="my-4">
              
                            </form><!-- /form -->
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="forgot-password">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                            <br>
                            <div class="d-flex justify-content-center links">
                                Vous n'avez pas de compte ?
                            </div>
                            <div class="d-flex justify-content-center links">
                                <a href="register">Inscrivez-vous !</a>
                            </div>
                        </div><!-- /card-container -->
                    </div><!-- /container -->
                    </form>
              </div>
            
@endsection