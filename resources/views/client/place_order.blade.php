@assets
<script src="https://checkout.flutterwave.com/v3.js"></script>
@endassets



<!-- Billing Section Start  -->
<section class="section billing section--xl pt-0">
    <div class="container">
        <div class="row billing__content">
            <div class="col-lg-8">
                <div class="billing__content-card">
                    <div class="billing__content-card-header">
                        <h2 class="font-body--xxxl-500">Complete Your Purchase</h2>
                    </div>
                    <div class="billing__content-card-body">
                        <form action="#">
                            <div class="contact-form__content">
                                <div class="contact-form__content-group">
                                    <div class="contact-form-input">
                                        <label for="fname1">First Name </label>
                                        <input type="text" id="fname1" placeholder="Your first name" />
                                    </div>
                                    <div class="contact-form-input">
                                        <label for="lname2">Last Name </label>
                                        <input type="text" id="lname2" placeholder="Your last name" />
                                    </div>
                                    <div class="contact-form-input">
                                        <label for="company">Middle Name <span>(Optional)</span>
                                        </label>
                                        <input type="text" id="mname" placeholder="Your middle name" />
                                    </div>
                                </div>

                                <div class="contact-form-input">
                                    <label for="address">Street Address </label>
                                    <input type="text" id="address" placeholder="Your Address" />
                                </div>

                                <div class="contact-form__content-group">
                                    <!-- Country -->
                                    <div class="contact-form-input">
                                        <label for="country">Country / Region </label>
                                        <select id="country" disabled class="contact-form-input__dropdown disabled">
                                            <option value="01">Nigeria</option>
                                        </select>
                                    </div>
                                    <!-- states -->
                                    <div class="contact-form-input">
                                        <label for="states">states </label>
                                        <select id="states" disabled class="contact-form-input__dropdown disabled">
                                            <option value="01">Abuja</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="contact-form__content-group">
                                    <div class="contact-form-input">
                                        <label for="email"> email </label>
                                        <input type="text" id="email" placeholder="Email Address" />
                                    </div>
                                    <div class="contact-form-input">
                                        <label for="phone"> Phone </label>
                                        <input type="number" id="phone" placeholder="Phone number" />
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bill-card">
                    <div class="bill-card__content">
                        <div class="bill-card__header">
                            <h2 class="bill-card__header-title font-body--xxl-500">
                                Order Summary
                            </h2>
                        </div>
                        <div class="bill-card__body">
                            <!-- Product Info -->
                            <div class="bill-card__product">
                                @foreach ($cart_items as $item)
                                    <div class="bill-card__product-item">
                                        <div class="bill-card__product-item-content">
                                            <div class="img-wrapper">
                                                <img src="{{$item["option"]["img"]}}" alt="product-img" />
                                            </div>
                                            <h5 class="font-body--md-400">
                                                {{ $item['name'] }} <span class="quantity">{{ $item['quantity'] }}</span>
                                            </h5>
                                        </div>

                                        <p class="bill-card__product-price font-body--md-500">
                                            ₦{{ $item['price'] }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                            <!-- memo  -->
                            <div class="bill-card__memo">
                                <!-- Subtotal  -->
                                <div class="bill-card__memo-item subtotal">
                                    <p class="font-body--md-400">Subtotal:</p>
                                    <span class="font-body--md-500">₦{{ $sub_total }}</span>
                                </div>
                                <!-- Shipping  -->
                                <div class="bill-card__memo-item shipping">
                                    <p class="font-body--md-400">Shipping:</p>
                                    <span class="font-body--md-500">₦{{ $shipping }}</span>
                                </div>
                                <!-- total  -->
                                <div class="bill-card__memo-item total">
                                    <p class="font-body--lg-400">Total:</p>
                                    <span class="font-body--xl-500">₦{{ $total }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bill-card__content">
                        <div class="bill-card__header">
                            <div class="bill-card__header">
                                <h2 class="bill-card__header-title font-body--xxl-500">
                                    Payment Method
                                </h2>
                            </div>
                        </div>
                        <div class="bill-card__body">

                            <button class="button button--lg w-100" type="submit">
                                Place Order
                            </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Billing Section  End  -->






@script


@endscript