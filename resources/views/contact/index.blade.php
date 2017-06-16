@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center jumbotron blue-jumbotron">
                <h1>Contact Pal Lighting</h1>
                    <hr class="short-hr">
                    <p>Welcome to Pal Lighting. You can contact us using the form below.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-8 col-sm-offset-2">
                    {!! Form::open(['route' => 'contact_store', 'class' => 'form', 'novalidate' => 'novalidate']) !!}
                        <div class="form-group">
                            {!! Form::label('Your Name') !!}
                            {!! Form::text('name', null, ['required', 'class' => 'form-control no-radius', 'placeholder' => 'Your name']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Your Email Address') !!}
                            {!! Form::text('email', null, ['required', 'class' => 'form-control no-radius', 'placeholder' => 'Your email address']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Your Message') !!}
                            {!! Form::textarea('message', null, ['required', 'class' => 'form-control no-radius', 'placeholder' => 'Your message']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Contact us', ['class' => 'btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection