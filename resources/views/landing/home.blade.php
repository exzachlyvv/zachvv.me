@extends('layouts.app')

@section('content')
    <p>
        I'm passionate about Laravel, databases, full-stack development, AWS, basketball, snowboarding, emojis, beer, and building fun things.
    </p>
    <p>
        During the days I work on <a href="https://lum.fm">lum.fm</a>.
    </p>
    <p>
        Need help with your Laravel application? <a href="{{ route('contact') }}">Get in touch</a>
    </p>
    <p>
        I'm no Laravel expert. Far from it. But <a href="{{ route('contact') }}">I've</a> <a href="">learned</a> a <a href="">few</a> <a href="">things</a>
    </p>
@endsection
