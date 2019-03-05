@extends('admin.layouts.index')

@section('side')
    @include('admin.chunks.side')
@endsection

@section('content')
    @include('admin.chunks.peoples.chunks.edit')
@endsection

@section('footer')
    @include('admin.chunks.footer')
@endsection
