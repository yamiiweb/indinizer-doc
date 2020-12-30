@extends('layout')

@section('title')
{{ $post->title }}
@endsection

@section('subtitle')
{{ $post->subtitle }}
@endsection

@section('content')
{!! $post->content !!}
@endsection
