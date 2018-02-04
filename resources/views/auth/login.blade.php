@extends('layouts.app')

@section('content')
{{--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
--}}




<div class="w3-display-container" style="min-height: 100%;">
  <div class="w3-display-topleft w3-padding-8">
    <img class="w3-padding" src="{{asset('storage/img/a_main_banner/logo_tjetak_desainer_x1_putih.png')}}" style="width: 200px;">
  </div>
  <div class="w3-display-middle s-full-box l-third" style="height:auto">
    <h2 class="w3-text-white margin-bottom-min20 ssp-bold">Halo Desainer!</h2>
    <p class="w3-text-white ssp-regular w3-large">Mulai Desain dan raih keuntunganmu.</p>

    {{-- White Div containing username and password --}}
    <div class="w3-center w3-padding-large w3-white w3-round-large w3-border ssp-regular" style="width:100%;height:auto;">
      <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        {{-- Username --}}
        <div class="w3-padding-8 search w3-round">
          <i class="far fa-envelope w3-small"></i>
          <input id="email" type="email"  class="width-100" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
        </div>

        {{-- Password --}}
        <div class="w3-padding-8 search w3-round">
          <i class="fas fa-lock w3-small"></i>
          <input id="password" type="password" name="password" required class="width-100" placeholder="Password">
          @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
          <a class="w3-right a-decoration-none w3-text-grey" href="{{ route('password.request') }}">Lupa password?</a>
        </div>

        <br>
        {{-- Checkbox remember me --}}
        <div class="w3-left">
          <label class="checkbox">
            <input class="w3-check color-grey w3-small" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
            <span class="w3-text-grey">Ingat Saya</span>
          </label>
        </div>
        <br>
        <hr>
        {{-- Login Button --}}
        <button class="w3-padding w3-orange w3-hover-opacity w3-round w3-text-white width-100 w3-large" type="submit">Login</button>
      </form>
    </div>
    <p class="ssp-regular w3-text-white w3-center w3-medium">Belum memiliki akun? <a class="a-decoration-none" href="register"><strong>Daftar Sekarang</strong> </a></p>

  </div>
</div>

<footer>
  <div id="footer" class="w3-bar w3-white w3-border w3-tiny w3-row w3-padding w3-padding-24">
    <div class="w3-half">
      <div class="w3-row w3-hide-small">
        <div><img src="{{asset('storage/img/a_main_banner/tjetak_logo.png')}}"
        style="width:13px;" alt="Logo T Tjetak"><span class="w3-mobile"> &copy; Tjetak, Jalan Timor No. 6, Menteng, Jakarta Pusat,
          DKI Jakarta 10350, Indonesia</span></div>
      </div>
      <div class="w3-row w3-hide-large w3-hide-medium text-center">
        <div><img src="{{asset('storage/img/a_main_banner/tjetak_logo.png')}}"
        style="width:13px;" alt="Logo T Tjetak"><span class="w3-mobile" style="white-space:nowrap">&copy; Tjetak, Jalan Timor No. 6, Menteng, Jakarta Pusat,
          DKI Jakarta 10350, Indonesia</span></div>
      </div>
    </div>

    <div class="w3-half w3-text-blue">
      <div class="w3-right w3-hide-small">
        <a class="c-link w3-container w3-cell w3-mobile footerlink" href="#">Tentang Kami</a>
        <a class="c-link w3-container w3-cell w3-mobile footerlink" href="#">Syarat &amp; ketentuan</a>
        <a class="c-link w3-container w3-cell w3-mobile footerlink" href="#">Kebijakan Privasi</a>
      </div>
      <div class="text-center w3-hide-medium w3-hide-large">
        <a class="c-link w3-container w3-mobile footerlink" href="#">Tentang Kami</a>
        <a class="c-link w3-container w3-mobile footerlink" href="#">Syarat &amp; ketentuan</a>
        <a class="c-link w3-container w3-mobile footerlink" href="#">Kebijakan Privasi</a>
      </div>
    </div>

  </div>
</footer>


@endsection