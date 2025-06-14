<!-- popular products Section Start  -->
<section class="popular-products section section--md">
    <div class="container">
        <div class="section__head">
            <h2 class="section--title-one font-title--sm">Popular products</h2>
            <a href="{{ route('client.product', ['popular']) }}">
                View All
                <span>
                    <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 7.50049H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M9.95001 1.47559L16 7.49959L9.95001 13.5246" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
            </a>
        </div>

        <!-- Desktop Versions -->
        <div class="popular-products__wrapper">
            @foreach ($products as $product)
                <div class="cards-md">
                    <div class="cards-md__img-wrapper">
                        <a href="#">
                            <img src="{{ asset("storage/products/".$product->product_image) }}" alt="products" />
                        </a>
                        <div class="cards-md__favs-list">
                            <span class="action-btn" wire:click="$dispatch('openModal', {component: 'client.modal', arguments: { id: {{ $product->id }} }})">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 3.54102C3.75 3.54102 1.25 10.0001 1.25 10.0001C1.25 10.0001 3.75 16.4577 10 16.4577C16.25 16.4577 18.75 10.0001 18.75 10.0001C18.75 10.0001 16.25 3.54102 10 3.54102V3.54102Z"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M10 13.125C10.8288 13.125 11.6237 12.7958 12.2097 12.2097C12.7958 11.6237 13.125 10.8288 13.125 10C13.125 9.1712 12.7958 8.37634 12.2097 7.79029C11.6237 7.20424 10.8288 6.875 10 6.875C9.1712 6.875 8.37634 7.20424 7.79029 7.79029C7.20424 8.37634 6.875 9.1712 6.875 10C6.875 10.8288 7.20424 11.6237 7.79029 12.2097C8.37634 12.7958 9.1712 13.125 10 13.125V13.125Z"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="cards-md__info d-flex justify-content-between align-items-center">
                        <a href="#" class="cards-md__info-left">
                            <h6 class="font-body--md-400">{{$product->name}}</h6>
                            <div class="cards-md__info-price">
                                <span class="font-body--lg-500">₦{{$product->selling_price/100}}</span>

                            </div>
                        </a>
                        <div class="cards-md__info-right">
                            <span class="action-btn" wire:click="addToPopularCart({{ $product->id }})">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.66667 8.83333H4.16667L2.5 18H17.5L15.8333 8.83333H13.3333M6.66667 8.83333V6.33333C6.66667 4.49239 8.15905 3 10 3V3C11.8409 3 13.3333 4.49238 13.3333 6.33333V8.83333M6.66667 8.83333H13.3333M6.66667 8.83333V11.3333M13.3333 8.83333V11.3333"
                                        stroke="currentColor" stroke-width="1.3" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Mobile Versions -->
        <div class="swiper-container popular-products--slider">
            @foreach ($products as $product)
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="cards-md w-100">
                            <div class="cards-md__img-wrapper">
                                <a href="#">
                                    <img src="{{ asset("storage/products/" . $product->product_image) }}" alt="products" />
                                </a>
                                <div class="cards-md__favs-list">
                                    <span class="action-btn" wire:click="$emit('showProduct', {{  $product->id }})"
                                        data-bs-toggle="modal" data-bs-target="#productView">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 3.54102C3.75 3.54102 1.25 10.0001 1.25 10.0001C1.25 10.0001 3.75 16.4577 10 16.4577C16.25 16.4577 18.75 10.0001 18.75 10.0001C18.75 10.0001 16.25 3.54102 10 3.54102V3.54102Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path
                                                d="M10 13.125C10.8288 13.125 11.6237 12.7958 12.2097 12.2097C12.7958 11.6237 13.125 10.8288 13.125 10C13.125 9.1712 12.7958 8.37634 12.2097 7.79029C11.6237 7.20424 10.8288 6.875 10 6.875C9.1712 6.875 8.37634 7.20424 7.79029 7.79029C7.20424 8.37634 6.875 9.1712 6.875 10C6.875 10.8288 7.20424 11.6237 7.79029 12.2097C8.37634 12.7958 9.1712 13.125 10 13.125V13.125Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="cards-md__info d-flex justify-content-between align-items-center">
                                <a href="#" class="cards-md__info-left">
                                    <h6 class="font-body--md-400">{{ $product->name }}</h6>
                                    <div class="cards-md__info-price">
                                        <span class="font-body--lg-500">₦{{$product->selling_price/100}}</span>

                                    </div>
                                </a>
                                <div class="cards-md__info-right">
                                    <span class="action-btn animate__heartBeat" wire:click="addToPopularCart($product->id)">
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.66667 8.83333H4.16667L2.5 18H17.5L15.8333 8.83333H13.3333M6.66667 8.83333V6.33333C6.66667 4.49239 8.15905 3 10 3V3C11.8409 3 13.3333 4.49238 13.3333 6.33333V8.83333M6.66667 8.83333H13.3333M6.66667 8.83333V11.3333M13.3333 8.83333V11.3333"
                                                stroke="currentColor" stroke-width="1.3" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<!-- popular products Section end  -->