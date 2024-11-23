@extends('layouts.main')

@section('title', 'home')

@section('css')
<style>

</style>
@endsection

@section('content')
<div class="d-flex justify-content-center w-100">
    <div class="card w-75">
        <div class="card-header fw-bold fw-capital">create book</div>
        <div class="card-body">
            <form action={{route('dashboard.books.store')}} method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row mb-4">
                    <div class="col-6">
                        <div data-mdb-input-init class="form-outline">
                            <input type="text"
                                id="form6Example1"
                                class="form-control"
                                name="name"
                                value='{{old('name')}}'
                                required />
                            <label class="form-label" for="form6Example1">name</label>
                        </div>
                        @error('name') <div class="text-danger"> {{$message}}</div> @enderror
                    </div>
                    <div class="col-6">
                        <div data-mdb-input-init class="form-outline">
                            <input type="text"
                                id="form6Example2"
                                class="form-control"
                                name="author"
                                value='{{old('author')}}'
                                required />
                            <label class="form-label" for="form6Example2">author</label>
                        </div>
                        @error('author') <div class="text-danger"> {{$message}}</div> @enderror
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-6">
                        <div data-mdb-input-init class="form-outline">
                            <input type="text"
                                id="form6Example3"
                                class="form-control"
                                name="borrow_rate"
                                value='{{old('borrow_rate')}}'
                                required />
                            <label class="form-label" for="form6Example3">borrow rate in SR</label>
                        </div>
                        @error('borrow_rate') <div class="text-danger"> {{$message}}</div> @enderror
                    </div>
                    <div class="col-6">
                        <div data-mdb-input-init class="form-outline">
                            <select id="form6Example4"
                                class="form-control select-input"
                                name="category_id"
                                required
                                >
                                @if(!old('category_id'))
                                <option selected disabled>select a category</option>
                                @endif
                                @foreach($categories as $category)
                                <option
                                    value={{$category->id}}
                                    @if(old('category_id') == $category->id)
                                    selected
                                    @endif
                                    >
                                    {{$category->name}}
                                </option>
                                @endforeach
                            </select>
                            <label class="form-label" for="form6Example4">category</label>
                        </div>
                        @error('category_id') <div class="text-danger"> {{$message}}</div> @enderror
                    </div>
                </div>

                <div class="row-column mb-4 ">
                    <div class="col-12">
                        <label class="form-label" for="image-input">book Cover image</label>
                        <input name='cover_image' type="file" class="form-control file-input" id="image-input" required/>
                        @error('cover_image') <div class="text-danger"> {{$message}}</div> @enderror
                    </div>
                    <div class="col-6 w-100 d-flex justify-content-center align-items-center mt-4">
                        <div class="w-25">
                            <img id="image-preview" src=''
                                class="img-thumbnail" />
                        </div>
                    </div>
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