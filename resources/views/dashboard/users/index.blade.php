@extends('layouts.main')

@section('title', 'home')

@section('css')
<style>

</style>
@endsection

@section('content')
<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">
        <p class="m-0">Manage Users</p>
        <a href="{{route('dashboard.users.create')}}">
            <button type="button"
                class="btn btn-primary btn-rounded"
                data-mdb-ripple-init>
                create user
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