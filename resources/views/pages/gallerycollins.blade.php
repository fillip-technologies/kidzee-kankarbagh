@extends('layouts.app')
@section('content')
    <!-- about-->
    <x-gallery.all-images :allgallery="$allGallery" />

@endsection