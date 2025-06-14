@extends('layouts.client')


@section('title')

    <title>Grocery Now | Home</title>

@endsection



@section('content')

    <livewire:client.cart />

    <section class="hero section--xl section">
        <div class="container">
            <div class="row hero__content">
                <div class="col-lg-6 order-lg-0 order-2">
                    <div class="hero__text-content">
                        <h5>
                            100% Fresh Orders Guaranteed
                        </h5>
                        <p class="info">
                            Grocery Now is an on-demand delivery and
                            pickup service based in Abuja, Nigeria. It is a
                            brand under Ecofarm Energy, a clean tech
                            startup that offers e-mobility as a productive
                            use of green mini-grids.
                            Grocery Now has a technology platform that
                            connects customers with local grocery stores,
                            enabling them to shop online and have their
                            orders delivered or prepared for pickup
                            Our mission is to make grocery shopping fast,
                            fresh, and convenient
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-0 order-1">
                    <div class="hero__img-wrapper">
                        <img src="{{ asset('images/gcnow.PNG') }}" alt="img" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End  -->

    <!-- Hero Two Section Start  -->
    <section class="hero section section--xl">
        <div class="container hero--two">
            <div class="hero__img-wrapper-two-bg">
                <img src="{{ asset('images/2p.PNG') }}" alt="banner-lg" />
            </div>
            <div class="hero__content">
                <div class="hero__text-content">
                    <h5>
                        100% Transparency
                    </h5>
                    <p class="info--two">
                        Grocery Now app connects customers, our partner grocery stores, and our shoppers to
                        deliver groceries quickly and conveniently.
                        Steps in Getting your orders:
                        Customers download the Grocery Now app or visit our website.
                        They select a nearby store from our partnered retailers across Wuse, Maitama, and Asokoro,
                        and add items to their cart.
                        Choose delivery (same-day, often within 1 - 2 hours) or pickup at the store.
                        They pay via card or digital wallet, including delivery fees and optional tips.
                        The responsibilities of our Shoppers:
                        Orders are assigned to our shoppers.
                        Go to the store, pick items off shelves, and deliver them to the customer's address. Your
                        delivery is tracked in real time via our app.
                        Delivery windows range from 1 hour to scheduled days
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Two Section End   -->

    <!-- Hero Three  Section start  -->
    <section class="hero section--xl section">
        <div class="container">
            <div class="row hero__content">
                <div class="col-lg-6">
                    <div class="hero__text-content">
                        <h6>
                            Nigeria's First Electric Vehicle Delivery Service
                        </h6>
                        <p class="info--two">
                            Our electric fleet runs on renewable energy from our solar-powered
                            charging stations, slashing fuel costs to near zero and enabling us to
                            offer discounts on orders over NGN 15,000. This will make orders
                            cheaper than competitors.
                            Our charging stations, powered by solar panels and battery storage,
                            keep our e-trikes and e-bikes with insulated cargo boxes running 24/7.
                            This ensures that fresh produce and chilled goods stay pristine, setting
                            us apart from competitors.
                            We use e-bikes and e-trikes to make grocery delivery for groceries faster
                            in 45 minutes or less, outpacing our competitors.
                            Our smart logistics and route optimization ensure faster delivery times,
                            and retailers can integrate with our platform to expand their customer
                            base.
                            Also, with our platform, retailers can fully use digital marketing and
                            analytics to improve their sales
                        </p>
                        <a href="{{ route('client.product', ['dairy']) }}" class="button button--md">
                            Shop now
                            <span>
                                <svg width="17" height="15" viewBox="0 0 17 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 7.50049H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M9.95001 1.47559L16 7.49959L9.95001 13.5246" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero__img-wrapper">
                        <img src="{{ asset('images/1.PNG') }}" alt="img" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.body.client_footer')


@endsection

@section('script')
    <script src="{{  asset('js/home1.js')  }}"></script>

@endsection