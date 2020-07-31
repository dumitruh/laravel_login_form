@extends('layouts.app')

@section('title-page')
    Login page
@endsection

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error) 
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


