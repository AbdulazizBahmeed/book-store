@extends('layouts.main')

@section('title', 'home')

@section('css')
<style>
  .nav-pills .nav-link {
    background-color: #25718033;

  }

  .nav-pills .nav-link.active {
    background-color: var(--primary-color-light);
  }

  .form-container {
    height: 100vh;
  }

  .alert {
    font-size: smaller;
  }
</style>
@endsection

@section('content')
<div class="form-container row w-100">
  <div class="col-6 w-100 d-flex align-items-center justify-content-center">
    <div class="card w-50">
      <div class="card-body">

        <!-- Pills navs -->
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
          <li class="nav-item" role="presentation">
            <a
              class="nav-link active"
              id="tab-login"
              data-mdb-pill-init
              href="#pills-login"
              role="tab"
              aria-controls="pills-login"
              aria-selected="true">Login</a>
          </li>
          <li class="nav-item" role="presentation">
            <a
              class="nav-link"
              id="tab-register"
              data-mdb-pill-init
              href="#pills-register"
              role="tab"
              aria-controls="pills-register"
              aria-selected="false">Register</a>
          </li>
        </ul>
        <!-- Pills navs -->

        <!-- Pills content -->
        <div class="tab-content">
          @if (session('error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          <!-- start login form -->
          <div
            class="tab-pane fade show active"
            id="pills-login"
            role="tabpanel"
            aria-labelledby="tab-login">
            <form action="{{route('login')}}" method="POST">
              @csrf
              <!-- Email input -->
              <div data-mdb-input-init class="form-outline">
                <input type="email" id="loginName" class="form-control" name="email" />
                <label class="form-label" for="loginName">Email or username</label>
              </div>
              @error('email') <div class="text-danger mt-1 ps-1"> {{$message}}</div> @enderror

              <!-- Password input -->
              <div data-mdb-input-init class="form-outline mt-4">
                <input type="password" id="loginPassword" class="form-control" name="password" />
                <label class="form-label" for="loginPassword">Password</label>
              </div>
              @error('password') <div class="text-danger mt-1 ps-1"> {{$message}}</div> @enderror

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block my-4">Sign in</button>

            </form>
          </div>
          <!-- end login form -->

          <!-- start register form -->
          <div
            class="tab-pane fade"
            id="pills-register"
            role="tabpanel"
            aria-labelledby="tab-register">
            <form action="{{route('register')}}" method="POST">
              @csrf
              <!-- Name input -->
              <div data-mdb-input-init class="form-outline">
                <input type="text"
                  id="registerName"
                  class="form-control @error('full_name') is-invalid @enderror"
                  name="full_name"
                  required
                  value="{{old('full_name')}}" />
                <label class="form-label" for="registerName">Name</label>
              </div>
              @error('full_name') <div class="text-danger mt-1 ps-1"> {{$message}}</div> @enderror

              <!-- Email input -->
              <div data-mdb-input-init class="form-outline mt-4">
                <input type="email"
                  id="registerEmail"
                  class="form-control @error('email') is-invalid @enderror"
                  name="email"
                  required
                  value="{{old('email')}}" />
                <label class="form-label" for="registerEmail">Email</label>
              </div>
              @error('email') <div class="text-danger mt-1 ps-1"> {{$message}}</div> @enderror

              <!-- Password input -->
              <div data-mdb-input-init class="form-outline mt-4">
                <input type="password"
                  id="registerPassword"
                  class="form-control @error('password') is-invalid @enderror"
                  name="password"
                  required
                  value="{{old('password')}}" />
                <label class="form-label" for="registerPassword">Password</label>
              </div>
              @error('password') <div class="text-danger mt-1 ps-1"> {{$message}}</div> @enderror

              <!-- Repeat Password input -->
              <div data-mdb-input-init class="form-outline mt-4">
                <input type="password"
                  id="registerRepeatPassword"
                  class="form-control @error('password_confirmation') is-invalid @enderror"
                  name="password_confirmation"
                  required />
                <label class="form-label" for="registerRepeatPassword">Repeat password</label>
              </div>
              @error('password_confirmation') <div class="text-danger mt-1 ps-1"> {{$message}}</div> @enderror

              <!-- Submit button -->
              <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block my-4">register</button>
            </form>
          </div>
          <!-- end register form -->

        </div>
        <!-- Pills content -->

      </div>
    </div>
  </div>
</div>

@endsection

@section('scripts')

@endsection