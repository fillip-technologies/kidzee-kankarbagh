@section('content')
<!-- about-->
<x-about-page.our-team
:teacherTeams="$teacherTeams"
:leadershipTeam="$leadershipTeam"
:specialists="$specialists"
/>

@endsection
@extends('layouts.app')