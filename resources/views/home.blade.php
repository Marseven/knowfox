@extends('layouts.app')

@section('content')
<div class="home container">
    @include('partials.messages')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('partials.search-form')
        </div>
    </div>
</div>
@endsection
