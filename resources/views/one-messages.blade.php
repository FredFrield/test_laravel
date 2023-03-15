@extends('layouts.app')

@section('title-block')Message {{ $data->subject }}@endsection

@section('content')
    <h1>Message {{ $data->subject }}</h1>

    <div class="alert alert-info">
        <p>{{ $data->name }}</p>
        <p>{{ $data->message }}</p>
        <p>{{ $data->email }}</p>
        <p><small>{{ $data->created_at }}</small></p>
        <a href="{{ route('contact-data-update', $data->id) }}"><button class="btn btn-primary">Edit...</button></a>
        <a href="{{ route('contact-data-delete', $data->id) }}"><button class="btn btn-danger">Delete...</button></a>

    </div>

@endsection
