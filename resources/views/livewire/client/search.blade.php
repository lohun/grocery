<div>
    <div class="filter--search">
        <div class="container">
            <div class="filter--search__content row">
                <div class="col-lg-3 d-none d-lg-block">
                    <button class="button button--md" id="filter">
                        Filter
                        <span>
                            <svg width="22" height="19" viewBox="0 0 22 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18 5.75C18.4142 5.75 18.75 5.41421 18.75 5C18.75 4.58579 18.4142 4.25 18 4.25V5.75ZM9 4.25C8.58579 4.25 8.25 4.58579 8.25 5C8.25 5.41421 8.58579 5.75 9 5.75V4.25ZM18 4.25H9V5.75H18V4.25Z"
                                    fill="white" />
                                <path
                                    d="M13 14.75C13.4142 14.75 13.75 14.4142 13.75 14C13.75 13.5858 13.4142 13.25 13 13.25V14.75ZM4 13.25C3.58579 13.25 3.25 13.5858 3.25 14C3.25 14.4142 3.58579 14.75 4 14.75V13.25ZM13 13.25H4V14.75H13V13.25Z"
                                    fill="white" />
                                <circle cx="5" cy="5" r="4" stroke="white" stroke-width="1.5" />
                                <circle cx="17" cy="14" r="4" stroke="white" stroke-width="1.5" />
                            </svg>
                        </span>
                    </button>
                </div>
                <div class="col-lg-9">
                    <div class="filter--search-result">
                        <div class="sort-list">
                            <label for="sort">Sort by:</label>
                            <select id="sort" class="sort-list__dropmenu">
                                <option wire:click="sort(1)">Recommended</option>
                                <option wire:click="sort(2)">Highest Price First</option>
                                <option wire:click="sort(3)">Lowest Price First</option>
                            </select>
                        </div>
                        <!-- <div class="result-found">
                                            <p><span class="number">52</span> Results Found</p>
                                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="shop shop--one">
        <div class="container">
            <div class="row shop-content">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <!-- filter button -->
                        <button class="filter">
                            <svg width="22" height="19" viewBox="0 0 22 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18 5.75C18.4142 5.75 18.75 5.41421 18.75 5C18.75 4.58579 18.4142 4.25 18 4.25V5.75ZM9 4.25C8.58579 4.25 8.25 4.58579 8.25 5C8.25 5.41421 8.58579 5.75 9 5.75V4.25ZM18 4.25H9V5.75H18V4.25Z"
                                    fill="white"></path>
                                <path
                                    d="M13 14.75C13.4142 14.75 13.75 14.4142 13.75 14C13.75 13.5858 13.4142 13.25 13 13.25V14.75ZM4 13.25C3.58579 13.25 3.25 13.5858 3.25 14C3.25 14.4142 3.58579 14.75 4 14.75V13.25ZM13 13.25H4V14.75H13V13.25Z"
                                    fill="white"></path>
                                <circle cx="5" cy="5" r="4" stroke="white" stroke-width="1.5"></circle>
                                <circle cx="17" cy="14" r="4" stroke="white" stroke-width="1.5"></circle>
                            </svg>
                        </button>
                        <div class="shop__sidebar-content">
                            <div class="accordion shop" id="shop">
                                <!-- All Categories  -->
                                <div class="accordion-item shop-item">
                                    <h2 class="accordion-header" id="shop-item-accordion--one">
                                        <button class="accordion-button shop-button font-body--xxl-500" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            All Categories
                                            <span class="icon">
                                                <svg width="14" height="8" viewBox="0 0 14 8" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13 7L7 1L1 7" stroke="#1A1A1A" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse shop-collapse collapse show show"
                                        aria-labelledby="shop-item-accordion--one" data-bs-parent="#shop">
                                        <div class="accordion-body shop-body">
                                            <div class="categories">

                                                @foreach ($categories as $category)
                                                    <div class="categories-item">
                                                        <div class="form-check">

                                                            <input class="form-check-input"
                                                                wire:click="changeCategory('{{ $category['slug'] }}')"
                                                                type="radio" name="category" />
                                                            <label class="form-check-label" for="fruit">
                                                                {{$category['name']}}</label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Price Range -->
                                <!-- <div class="accordion-item shop-item">
                                    <h2 class="accordion-header" id="shop-item-accordion--two">
                                        <button class="accordion-button shop-button font-body--xxl-500 collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Price
                                            <span class="icon">
                                                <svg width="14" height="8" viewBox="0 0 14 8" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13 7L7 1L1 7" stroke="#1A1A1A" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse shop-collapse collapse show"
                                        aria-labelledby="shop-item-accordion--two" data-bs-parent="#shop">
                                        <div class="price-range-slider">
                                            <div id="priceRangeSlider"></div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>

                            <div class="accordion-item shop-item">
                                <!-- button to submit filter -->
                                <button class="filter">
                                    <svg width="22" height="19" viewBox="0 0 22 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18 5.75C18.4142 5.75 18.75 5.41421 18.75 5C18.75 4.58579 18.4142 4.25 18 4.25V5.75ZM9 4.25C8.58579 4.25 8.25 4.58579 8.25 5C8.25 5.41421 8.58579 5.75 9 5.75V4.25ZM18 4.25H9V5.75H18V4.25Z"
                                            fill="white"></path>
                                        <path
                                            d="M13 14.75C13.4142 14.75 13.75 14.4142 13.75 14C13.75 13.5858 13.4142 13.25 13 13.25V14.75ZM4 13.25C3.58579 13.25 3.25 13.5858 3.25 14C3.25 14.4142 3.58579 14.75 4 14.75V13.25ZM13 13.25H4V14.75H13V13.25Z"
                                            fill="white"></path>
                                        <circle cx="5" cy="5" r="4" stroke="white" stroke-width="1.5"></circle>
                                        <circle cx="17" cy="14" r="4" stroke="white" stroke-width="1.5"></circle>
                                    </svg>
                                </button>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-lg-9">

                    <!-- Desktop Version  -->
                    @foreach ($products as $product)
                        <div class="row shop__product-items">
                            <div class="col-xl-4 col-md-6">
                                <div class="cards-md cards-md--four w-100">
                                    <div class="cards-md__img-wrapper">
                                        <a href="product-details.html">
                                            <img src="{{ asset("products/" . $product->product_image) }}" alt="products" />
                                        </a>
                                        <div class="cards-md__favs-list">
                                            <span class="action-btn"
                                                wire:click="$dispatch('openModal', {component: 'client.modal', arguments: { id: {{ $product->id }} }})">
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
                                        <a href="product-details.html" class="cards-md__info-left">
                                            <h6 class="font-body--md-400">{{ $product->name }}</h6>
                                            <div class="cards-md__info-price">
                                                <span class="font-body--lg-500">₦{{ $product->selling_price }}</span>
                                            </div>
                                        </a>
                                        <div class="cards-md__info-right">
                                            <span class="action-btn animate__heartBeat" wire:click="addToCart({{$product->id}})">
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


                </div>
                {{ $products->links() }}
            </div>
        </div>
    </section>
</div>