<div class="container-login">
  <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>

        <div class="col-6">
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
      </div>


      <div class="form-check">
          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

          <label class="form-check-label" for="remember">
              {{ __('Recordarme') }}
          </label>
      </div>

      <div class="submit-login">
          <button type="submit" class="btn btn-dark btn-login">
              {{ __('Ingresar') }}
          </button>
      </div>

      @if (Route::has('password.request'))
          <a class="btn btn-link" href="{{ route('password.request') }}">
              {{ __('Olvide mi contraseña') }}
          </a>
      @endif

  </form>
</div>
