@extends('layouts.app_main')

@section('content')

<!-- Start Hero Area -->
@include('includes.hero_section')
<!-- End Hero Area -->

<!-- Start about Area -->

<!-- End about Area -->

<!-- Start products Area -->
@include('includes.products')
<!-- End products Area -->

<!-- Start services Area -->
@include('includes.services_section')
<!-- End services Area -->

<!-- ISO section Area -->
@include('includes.iso_section')
<!-- End services Area -->

<!-- Start stats_section Area -->
<!-- include('includes.stats_section')-->
<!-- End stats_section Area -->

<!-- Start contact Area -->
@include('includes.contact_section')
<!-- End contact Area -->

@endsection