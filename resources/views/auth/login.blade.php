@extends('layouts.forms')

@section('content')

<div class="app-content content container-fluid">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body"><section class="flexbox-container">
  <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0">
      <div class="card border-grey border-lighten-3 m-0">
          <div class="card-header no-border">
              <div class="card-title text-xs-center">
                  <div class="p-1"><img src="../../app-assets/images/logo/robust-logo-dark.png" alt="VendasJ"></div>
              </div>
              <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>VendasJ Login</span></h6>
          </div>
          <div class="card-body collapse in">
              <div class="card-block">
                <form class="form-horizontal form-simple" method="POST" action="{{ route('login') }}">
                    @csrf

                      <fieldset class="form-group position-relative has-icon-left mb-0">
                        <input type="text" class="form-control form-control-lg input-lg" name="email" id="email" placeholder="Your email | Username" required>

                          <div class="form-control-position">
                              <i class="icon-head"></i>
                          </div>
                      </fieldset>
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                      <fieldset class="form-group position-relative has-icon-left">
                          <input type="password" class="form-control form-control-lg input-lg @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter Password" required>
                          <div class="form-control-position">
                              <i class="icon-key3"></i>
                          </div>
                      </fieldset>
                      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      <fieldset class="form-group row">
                          <div class="col-md-6 col-xs-12 text-xs-center text-md-left">
                              <fieldset>
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                  <label for="remember-me"> Remember Me</label>
                              </fieldset>
                          </div>

                          <div class="col-md-6 col-xs-12 text-xs-center text-md-right">


                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif

                          </div>
                      </fieldset>
                      <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="icon-unlock2"></i> Login</button>
                  </form>
              </div>
          </div>
          <div class="card-footer">

          </div>
      </div>
  </div>
</section>

      </div>
    </div>
  </div>
@endsection
