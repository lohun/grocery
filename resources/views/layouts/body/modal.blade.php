<!-- Product Quick View Modal -->
<div class="modal fade products" id="productView" tabindex="-1" aria-labelledby="productViewLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row productsView" style="margin-top: 32px;">
                    <div class="col-xl-6">
                        <!-- Product View Slider -->
                        <div class="gallery-view">
                            <div class="gallery-main-image products__gallery-img--lg">
                                <img class="product-main-image" src="{{ asset('images/product-details/img-01.png') }}"
                                    alt="Slide 01" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <!-- Products information -->
                        <div class="products__content">
                            <div class="products__content-title">
                                <h2 class="font-title--md">Chinese Cabbage</h2>
                                <span class="label stock-in">in Stock</span>
                                <!-- <span class="label stock-out">Stock out</span> -->
                            </div>

                            <div class="products__content-price">
                                <h2 class="font-body--xxxl-500">
                                    $17.28
                                </h2>
                            </div>
                        </div>
                        <!-- brand  -->
                        <div class="products__content">
                            
                            <p class="products__content-brand-info font-body--md-400">
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                himenaeos. Nulla nibh diam, blandit vel consequat nec, ultrices et ipsum. Nulla varius
                                magna a consequat pulvinar.
                            </p>
                        </div>
                        <!-- Action button -->
                        <div class="products__content">
                            <div class="products__content-action">
                                <div class="counter-btn-wrapper products__content-action-item">
                                    <button class="counter-btn-dec counter-btn" onclick="decrement()">
                                        -
                                    </button>
                                    <input type="number" id="counter-btn-counter" class="counter-btn-counter" min="1"
                                        max="1000" placeholder="1" />
                                    <button class="counter-btn-inc counter-btn" onclick="increment()">
                                        +
                                    </button>
                                </div>
                                <!-- add to cart  -->
                                <button class="button button--md products__content-action-item w-50 d-flex">
                                    Add to Cart
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.66667 7.33333H3.16667L1.5 16.5H16.5L14.8333 7.33333H12.3333M5.66667 7.33333V4.83333C5.66667 2.99239 7.15905 1.5 9 1.5V1.5C10.8409 1.5 12.3333 2.99238 12.3333 4.83333V7.33333M5.66667 7.33333H12.3333M5.66667 7.33333V9.83333M12.3333 7.33333V9.83333"
                                                stroke="currentColor" stroke-width="1.3" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>