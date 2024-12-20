@extends('layouts.app_main')

@section('content')

<!-- Start Hero Area -->
@include('includes.hero_section')
<!-- End Hero Area -->

<!-- Start about Area -->
@include('includes.about_section')
<!-- End about Area -->

<!-- Start services Area -->
@include('includes.services_section')
<!-- End services Area -->

<!-- Start call_to_action Area -->
@include('includes.call_to_action_section')
<!-- End call_to_action Area -->

<!-- Start products Area -->
@include('includes.products')
<!-- End products Area -->

<!-- Start stats_section Area -->
@include('includes.stats_section')
<!-- End stats_section Area -->

<!-- Start contact Area -->
@include('includes.contact_section')
<!-- End contact Area -->

@endsection