@extends('layouts.main')

@section('title', 'home')

@section('css')
<style>

</style>
@endsection

@section('content')
<div class="d-flex justify-content-center w-100">
    <div class="card w-75">
        <div class="card-header fw-bold fw-capital">create user</div>
        <div class="card-body">
            <form action={{route('dashboard.users.update', $user)}} method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-4">
                    <div data-mdb-input-init class="form-outline">
                        <input type="text"
                            id="form6Example1"
                            class="form-control"
                            name="full_name"
                            value='{{old('full_name', $user->full_name)}}'
                            required />
                        <label class="form-label" for="form6Example1">Fullname</label>
                    </div>
                    @error('full_name') <div class="text-danger"> {{$message}}</div> @enderror
                </div>

                <div class="row mb-4">
                    <div data-mdb-input-init class="form-outline">
                        <input type="email"
                            id="form6Example5"
                            class="form-control"
                            name="email"
                            value='{{old('email', $user->email)}}'
                            required />
                        <label class="form-label" for="form6Example5">Email</label>
                    </div>
                    @error('email') <div class="text-danger"> {{$message}}</div> @enderror
                </div>

                <div class="row mb-4">
                    <div data-mdb-input-init class="form-outline">
                        <input type="password" id="form6Example1" class="form-control" name="password" />
                        <label class="form-label" for="form6Example1">password</label>
                    </div>
                    @error('password') <div class="text-danger"> {{$message}}</div> @enderror
                </div>

                <hr>
                <!-- Submit button -->
                <button data-mdb-ripple-init type="submit" class="btn btn-primary fw-capital">create</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection