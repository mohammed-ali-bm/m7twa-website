@extends('layouts.frontend.app')


@section('header')
<div class="page-title-section">
    <div>
        <h1 class="page-title">{!! $page->title !!}</h1>

    </div>
</div>
    @endsection


@section('content')

<div class="box-container">
    
    
        {!! $page->content !!}
</div>
@endsection