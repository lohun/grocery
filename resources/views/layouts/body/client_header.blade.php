<!-- Header Section start -->
<header class="header header--one">
    <div class="header__center">
        <div class="container">
            <div class="header__center-content">
                <div class="header__brand">
                    <button class="header__sidebar-btn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 12H21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M3 6H21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M3 18H15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                    <a href="{{route('client.home')}}">
                        <img src="{{asset('images/android-chrome-192x192.png')}}" style="width: 95px; height: 95px;"
                            alt="brand-logo" />
                    </a>
                </div>
                <form method="get" action="{{ route('client.search') }}">
                    <div class="header__input-form">
                        <input type="text" placeholder="Search" name="s" autocomplete="off" />
                        <span class="search-icon">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.16667 16.3333C12.8486 16.3333 15.8333 13.3486 15.8333 9.66667C15.8333 5.98477 12.8486 3 9.16667 3C5.48477 3 2.5 5.98477 2.5 9.66667C2.5 13.3486 5.48477 16.3333 9.16667 16.3333Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M17.4999 18L13.8749 14.375" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <button type="submit" class="search-btn button button--md">
                            Search
                        </button>
                    </div>
                </form>

                <livewire:client.cart-icon />


            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="container">
            <div class="header__bottom-content">
                <ul class="header__navigation-menu">
                    <!-- Homepages -->
                    <li class="header__navigation-menu-link">
                        <a href="{{ route('client.home') }}">Home</a>
                    </li>
                    <li class="header__navigation-menu-link">
                        <a href="#">
                            Categories
                            <span class="drop-icon">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.33332 5.66667L7.99999 10.3333L12.6667 5.66667" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </a>
                        <ul class="header__navigation-drop-menu">
                            <div class="header__navigation-drop-menu-link">
                                <a href="{{ route('client.product', ['baby-foods']) }}">Baby Food</a>
                            </div>
                            <div class="header__navigation-drop-menu-link">
                                <a href="{{ route('client.product', ['bakery']) }}">Baked Food and Pastries</a>
                            </div>
                            <div class="header__navigation-drop-menu-link">
                                <a href="{{ route('client.product', ['beverages']) }}">Beverages</a>
                            </div>
                            <div class="header__navigation-drop-menu-link">
                                <a href="{{ route('client.product', ['canned-packaged-foods']) }}">Canned and Packaged
                                    Foods</a>
                            </div>
                            <div class="header__navigation-drop-menu-link">
                                <a href="{{ route('client.product', ['condiments-spices']) }}">Condiments and Spices</a>
                            </div>
                            <li class="header__navigation-drop-menu-link">
                                <a href="{{ route('client.product', ['dairy']) }}">Diary</a>
                            </li>
                            <div class="header__navigation-drop-menu-link">
                                <a href="{{ route('client.product', ['frozen-foods']) }}">Frozen Food</a>
                            </div>
                            <div class="header__navigation-drop-menu-link">
                                <a href="{{ route('client.product', ['health-wellness']) }}">Health and Wellness</a>
                            </div>
                            <div class="header__navigation-drop-menu-link">
                                <a href="{{ route('client.product', ['household-supplies']) }}">Household Supplies</a>
                            </div>
                            <div class="header__navigation-drop-menu-link">
                                <a href="{{ route('client.product', ['personal-care']) }}">Personal Care</a>
                            </div>
                            <div class="header__navigation-drop-menu-link">
                                <a href="{{ route('client.product', ['pet-supplies']) }}">Pet Supplies</a>
                            </div>
                            <div class="header__navigation-drop-menu-link">
                                <a href="{{ route('client.product', ['produce']) }}">Produce</a>
                            </div>
                            <div class="header__navigation-drop-menu-link">
                                <a href="{{ route('client.product', ['snacks-sweets']) }}">Snacks and Sweets</a>
                            </div>
                            <div class="header__navigation-drop-menu-link">
                                <a href="{{ route('client.product', ['whole-foods']) }}">Whole Food</a>
                            </div>
                        </ul>
                    </li>
                    <li class="header__navigation-menu-link">
                        <a href="{{ route('client.about') }}">About us </a>
                    </li>
                    <li class="header__navigation-menu-link">
                        <a href="{{ route('client.checkout') }}">Checkout </a>
                    </li>
                </ul>

                <a href="#" class="header__telephone-number">
                    <span>
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.4359 2.375C15.9193 2.77396 17.2718 3.55567 18.358 4.64184C19.4441 5.72801 20.2258 7.08051 20.6248 8.56388"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M13.5306 5.75687C14.4205 5.99625 15.2318 6.46521 15.8833 7.11678C16.5349 7.76835 17.0039 8.57967 17.2433 9.46949"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M7.115 11.6517C8.02238 13.5074 9.5263 15.0049 11.3859 15.9042C11.522 15.9688 11.6727 15.9966 11.8229 15.9851C11.9731 15.9736 12.1178 15.9231 12.2425 15.8386L14.9812 14.0134C15.1022 13.9326 15.2414 13.8833 15.3862 13.8698C15.5311 13.8564 15.677 13.8793 15.8107 13.9364L20.9339 16.1326C21.1079 16.2065 21.2532 16.335 21.3479 16.4987C21.4426 16.6623 21.4815 16.8523 21.4589 17.04C21.2967 18.307 20.6784 19.4714 19.7196 20.3154C18.7608 21.1593 17.5273 21.6249 16.25 21.625C12.3049 21.625 8.52139 20.0578 5.73179 17.2682C2.94218 14.4786 1.375 10.6951 1.375 6.75C1.37512 5.47279 1.84074 4.23941 2.68471 3.28077C3.52867 2.32213 4.6931 1.70396 5.96 1.542C6.14771 1.51936 6.33769 1.55832 6.50134 1.653C6.66499 1.74769 6.79345 1.89298 6.86738 2.067L9.06537 7.1945C9.1219 7.32698 9.14485 7.47137 9.13218 7.61485C9.11951 7.75833 9.07162 7.89647 8.99275 8.017L7.17275 10.7977C7.09015 10.923 7.04141 11.0675 7.03129 11.2171C7.02117 11.3668 7.05001 11.5165 7.115 11.6517V11.6517Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        +2349070599628
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="header__sidebar">
        <button class="header__cross">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
        <div class="header__mobile-sidebar">
            <div class="header__mobile-top">
                <form method="get" action="{{ route('client.search') }}">
                    <div class="header__mobile-input">
                        <input type="text" placeholder="Search" name="s" />
                        <button class="search-btn">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.16667 16.3333C12.8486 16.3333 15.8333 13.3486 15.8333 9.66667C15.8333 5.98477 12.8486 3 9.16667 3C5.48477 3 2.5 5.98477 2.5 9.66667C2.5 13.3486 5.48477 16.3333 9.16667 16.3333Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M17.4999 18L13.8749 14.375" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </form>
                <ul class="header__mobile-menu">
                    <li class="header__mobile-menu-item">
                        <a class="header__mobile-menu-item-link" href="{{ route('client.home') }}">Home</a>
                    </li>
                    <li class="header__mobile-menu-item">
                        <a href="#" class="header__mobile-menu-item-link">
                            Categories
                            <span class="drop-icon">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.33332 5.66667L7.99999 10.3333L12.6667 5.66667" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </a>
                        <ul class="header__mobile-dropdown-menu">
                            <li class="header__mobile-dropdown-menu-link">
                                <a href="{{ route('client.product', ['baby-foods']) }}">Baby Food</a>
                            </li>
                            <li class="header__mobile-dropdown-menu-link">
                                <a href="{{ route('client.product', ['bakery']) }}">Baked Food and Pastries</a>
                            </li>
                            <li class="header__mobile-dropdown-menu-link">
                                <a href="{{ route('client.product', ['beverages']) }}">Beverages</a>
                            </li>
                            <li class="header__mobile-dropdown-menu-link">
                                <a href="{{ route('client.product', ['canned-packaged-foods']) }}">Canned and Packaged
                                    Foods</a>
                            </li>
                            <li class="header__mobile-dropdown-menu-link">
                                <a href="{{ route('client.product', ['condiments-spices']) }}">Condiments and Spices</a>
                            </li>
                            <li class="header__mobile-dropdown-menu-link">
                                <a href="{{ route('client.product', ['dairy']) }}">Diary</a>
                            </li>
                            <li class="header__mobile-dropdown-menu-link">
                                <a href="{{ route('client.product', ['frozen-foods']) }}">Frozen Food</a>
                            </li>
                            <li class="header__mobile-dropdown-menu-link">
                                <a href="{{ route('client.product', ['health-wellness']) }}">Health and Wellness</a>
                            </li>
                            <li class="header__mobile-dropdown-menu-link">
                                <a href="{{ route('client.product', ['household-supplies']) }}">Household Supplies</a>
                            </li>
                            <li class="header__mobile-dropdown-menu-link">
                                <a href="{{ route('client.product', ['personal-care']) }}">Personal Care</a>
                            </li>

                            <li class="header__mobile-dropdown-menu-link">
                                <a href="{{ route('client.product', ['pet-supplies']) }}">Pet Supplies</a>
                            </li>

                            <li class="header__mobile-dropdown-menu-link">
                                <a href="{{ route('client.product', ['produce']) }}">Produce</a>
                            </li>

                            <li class="header__mobile-dropdown-menu-link">
                                <a href="{{ route('client.product', ['snacks-sweets']) }}">Snacks and Sweets</a>
                            </li>

                            <li class="header__mobile-dropdown-menu-link">
                                <a href="{{ route('client.product', ['whole-foods']) }}">Whole Food</a>
                            </li>

                        </ul>
                    </li>
                    <li class="header__mobile-menu-item">
                        <a class="header__mobile-menu-item-link" href="{{ route('client.about') }}">About us </a>
                    </li>

                    <li class="header__mobile-menu-item">
                        <a class="header__mobile-menu-item-link" href="{{ route('client.checkout') }}">Checkout </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Header  Section start -->