@extends('layouts.app')


@section('title-block')Контакты@endsection

@section('content')
    <h1>contact</h1>
    <p>1111111111111</p>

    <form action="{{ route('contact-form') }}" method="post">

        @csrf

        <div class="form-group">
            <label for="name">Enter name</label>
            <input type="text" name="name" placeholder="Enter Name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Enter email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" placeholder="Message subject" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Message subject</label>
            <textarea name="message" id="message" class="form-control" placeholder="enter message"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Send</button>
    </form>


@endsection
