@extends('layouts.app')

@section('content')
    <p>
        I am a full-stack developer in love with Laravel. I'm also passionate about SQL, unit testing, iOS, AWS.
    </p>
    <p>
        During the days I'm busy working on <a href="https://lum.fm">lum.fm</a>.
    </p>
    <p>
        Looking for help on your Laravel application? <a href="{{ route('contact') }}">Get in touch</a>. I'm always looking for ways to fill my free time.
        As a lead developer at a Laravel driven start up, I've learned a lot so far and I'm looking forward to sharing. I also plan to fill up my
        <a href="{{ route('posts.index') }}">blog</a> with nuggets of knowledge.
        I'm no Laravel expert... But <a href="#">I've</a> <a href="#">learned</a> a <a href="#">few</a> <a href="#">things</a>.
    </p>
    <p>
        Outside of development, I enjoy playing basketball, snowboarding, dogs, video games, and talking with friends around a campfire with beers in hand. 🍺
    </p>
@endsection
