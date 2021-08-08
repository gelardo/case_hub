@extends('layouts.app')

@section('content')

        <div class="container">
          <div class="col-lg-4 col-md-6 ml-auto mr-auto">
              <form method="POST" action="{{ route('login') }}">
                  @csrf
              <div class="card card-login">
                <div class="card-header ">
                  <div class="card-header ">
                    <h3 class="header text-center">{{ __('Login') }}</h3>
                  </div>
                </div>
                <div class="card-body ">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="nc-icon nc-single-02"></i>
                      </span>
                    </div>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                             name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="nc-icon nc-key-25"></i>
                      </span>
                    </div>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                      @error('password')
                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                  </div>
                  <br />
                  <div class="form-group">
                    <div class="form-check">

                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="card-footer ">
                    <button type="submit" class="btn btn-warning btn-round btn-block mb-3">
                        {{ __('Login') }}
                    </button>


                        <a class="btn btn-link" href="{{ route('admin.login') }}">
                            {{ __('Admin Login') }}
                        </a>
                </div>
              </div>
            </form>
          </div>
        </div>



@endsection
