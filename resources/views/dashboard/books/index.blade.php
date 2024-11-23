@extends('layouts.main')

@section('title', 'home')

@section('css')
<style>

</style>
@endsection

@section('content')
<div class="card">
    @if (session('success'))
    <div class="p-2">
        <div class="alert alert-success alert-dismissible fade show p-2" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endif

    <div class="card-header d-flex justify-content-between align-items-center">
        <p class="m-0">Manage Books</p>
        <a href="{{route('dashboard.books.create')}}">
            <button type="button"
                class="btn btn-primary btn-rounded"
                data-mdb-ripple-init>
                create book
            </button>
        </a>
    </div>
    <div class="card-body">
        {{ $dataTable->table(['class' => 'table table-hover']) }}
    </div>
</div>
@endsection

@section('scripts')
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}

@endsection