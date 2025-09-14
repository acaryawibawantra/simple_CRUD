@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Show Profile</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-primary" href="{{ route('profiles.index') }}">Back</a>
            </div>
        </div>
    </div>
   
    <div class="row mt-3">
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $profile->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $profile->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group">
                <strong>Phone:</strong>
                {{ $profile->phone }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group">
                <strong>Address:</strong>
                {{ $profile->address }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group">
                <strong>Bio:</strong>
                {{ $profile->bio }}
            </div>
        </div>
    </div>
@endsection