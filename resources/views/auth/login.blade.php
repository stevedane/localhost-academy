@extends('layouts.guest',['title'=>'Login Page','activeLink'=>'login'])

@section('content')
<form method="POST" action="{{ route('login') }}">
                        @csrf
                         <div class="card card-login card-hidden">
                <div class="card-header card-header-rose text-center">
                  <h4 class="card-title">{{ __('Login') }}</h4>
                </div>
                <div class="card-body ">
                  <p class="card-description text-center">Connect to your account</p>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">email</i>
                        </span>
                      </div>
                      <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email..." value="{{ old('email') }}" required autocomplete="email" autofocus>
                      @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </span>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password...">
                      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </span>
                </div>
                <div class="card-footer justify-content-center">
                  <button type="submit" class="btn btn-rose btn-link btn-lg">
                                    {{ __('Connexion') }}
                                </button>
                </div>
              </div>
            </form>
@endsection
