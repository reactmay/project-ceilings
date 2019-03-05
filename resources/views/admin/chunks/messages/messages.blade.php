@extends('admin.layouts.index')

@section('side')
    @include('admin.chunks.side')
@endsection

@section('content')
    @include('admin.chunks.messages.chunks.content')
@endsection

@section('footer')
    @include('admin.chunks.footer')
@endsection
