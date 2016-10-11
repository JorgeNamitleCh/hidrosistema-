@extends('admin.layouts.masterComplete')

@section('title', 'Hidrosistema')

@section('styles')
    @parent
@stop

@section('scrips')
	
@stop
@section('content')
		
	<!-- slideshow -->
	@include('admin.partials.slideshow')
	<!-- content -->
	@include('admin.partials.pageContent')
	<!-- gallery -->
	@include('admin.partials.gallery')
									
@stop