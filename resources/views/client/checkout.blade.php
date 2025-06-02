@extends('layouts.client')

@section('title')
<title>Pay for your Items</title>
@endsection

@section('content')
    <livewire:client.cart />
    <!-- Billing Section Start  -->
    <livewire:client.checkout />
    <!-- Billing Section  End  -->



    @include('layouts.body.client_footer')
@endsection