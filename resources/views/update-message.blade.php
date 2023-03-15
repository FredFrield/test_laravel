@extends('layouts.app')


@section('title-block')Update Message@endsection

@section('content')
    <h1>Update Message</h1>
    <p>1111111111111</p>

    <form action="{{ route('contact-data-update-submit', $data->id) }}" method="post">

        @csrf

        <div class="form-group">
            <label for="name">Enter name</label>
            <input type="text" name="name" value="{{ $data->name }}" placeholder="Enter Name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{ $data->email }}" placeholder="Enter email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" value="{{ $data->subject }}" placeholder="Message subject" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Message subject</label>
            <textarea name="message" id="message" class="form-control" placeholder="enter message">{{ $data->message }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>


@endsection
