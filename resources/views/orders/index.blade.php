@extends('layouts.main')

@section('title', 'home')

@section('css')
<style>
#datatable tbody tr:nth-child(1){
    width: 2000px;
}
</style>
@endsection

@section('content')
<div class="container mt-5">
    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center pt-4">
            <h3 class="fw-bold">Ordered books</h3>
        </div>
        <div class="card-body">
            {{ $dataTable->table(['class' => 'table table-hover']) }}
        </div>
    </div>
</div>

@endsection

@section('scripts')
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}

@endsection