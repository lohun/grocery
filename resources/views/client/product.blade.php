@extends('layouts.client')

@section('title')
    <title>Grocery Now | Products</title>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/lib/nouislider.min.css') }}">
    @livewireStyles
@endsection


@section('content')

    <livewire:client.cart  />

    <!-- breedcrumb section start  -->
    <div class="section breedcrumb">
        <div class="breedcrumb__img-wrapper">
            <img src="{{ asset('images/banner/breedcrumb.jpg') }}" alt="breedcrumb" />
            <div class="container">
                <ul class="breedcrumb__content">
                    <li>
                        <a href="index.html">
                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1 8L9 1L17 8V18H12V14C12 13.2044 11.6839 12.4413 11.1213 11.8787C10.5587 11.3161 9.79565 11 9 11C8.20435 11 7.44129 11.3161 6.87868 11.8787C6.31607 12.4413 6 13.2044 6 14V18H1V8Z"
                                    stroke="#808080" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span> > </span>
                        </a>
                    </li>
                    <li class="active">Popular Products</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breedcrumb section end   -->
    <!-- Filter  -->
    <div class="filter--search">
        <div class="container">
            <div class="filter--search__content row">
                <div class="col-lg-3 d-none d-lg-block">
                    <button class="button button--md" id="filter">
                        Filter
                        <span>
                            <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                <option value="01">Latest</option>
                                <option value="02">Newest</option>
                                <option value="03">Oldest</option>
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



    <livewire:client.archive category="{{$categories_id}}" />



    @include('layouts.body.client_footer')

    <livewire:client.modal />
@endsection


@section('scripts')
    <script src="{{ asset('js/lib/nouislider.min.js') }}"></script>
    @livewireScripts
@endsection