@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-title"> WELCOME TO HOME PAGE </h1>
            </div>
        </div>
    </div>
@endsection

@push('css')
<style>
    .page-title{
        padding-top: 5vh;
        font-size: 3rem;
        color: rgb(93, 158, 223);
    }
</style>
@endpush
