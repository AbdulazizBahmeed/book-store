@extends('layouts.main')

@section('title', 'home')

@section('css')
<style>

</style>
@endsection

@section('content')
<div class="d-flex justify-content-center w-100">
    <div class="card w-75">
        <div class="card-header fw-bold fw-capital">edit category</div>
        <div class="card-body">
            <form action={{route('dashboard.categories.update', $category)}} method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-4">
                    <div data-mdb-input-init class="form-outline">
                        <input type="text"
                            id="form6Example1"
                            class="form-control"
                            name="name"
                            value='{{old('name', $category->name)}}'
                            required />
                        <label class="form-label" for="form6Example1">name</label>
                    </div>
                    @error('name') <div class="text-danger"> {{$message}}</div> @enderror
                </div>

                <hr>
                <!-- Submit button -->
                <button data-mdb-ripple-init type="submit" class="btn btn-primary fw-capital">update</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection