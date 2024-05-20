@extends('layouts.content.app')

@section('content')
<section class="mt-5">
    <div class="container bg-light p-5">
        <h1>Welcome {{ Auth::user()->name }}</h1>
    </div>
</section>
@endsection
