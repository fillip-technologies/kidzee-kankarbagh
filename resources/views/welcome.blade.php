@extends('layouts.app')

@section('content')

<!-- Home-slider-->
<x-Home.homeslider :slideImage="$images"/>

<!-- about-->
<x-Home.about-section />

<!-- whychooseus-->
<x-Home.whychooseus />

<!-- review-->
<x-Home.review />

<!-- gallery-->
<x-Home.gallery :galleryImg="$gallery"  />

<!-- faq-->
<x-Home.messages />

<!-- faq-->
<x-Home.faq />

@endsection