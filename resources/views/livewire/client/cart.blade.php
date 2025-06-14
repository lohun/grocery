<div class="shopping-cart">
    <div class="shopping-cart-top">
        <div class="shopping-cart-header">
            <h5 class="font-body--xxl-500">Shopping Cart (<span class="count">{{ $count }}</span>)</h5>
            <button class="close">
                <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="22.5" cy="22.5" r="22.5" fill="white" />
                    <path d="M28.75 16.25L16.25 28.75" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M16.25 16.25L28.75 28.75" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>

        @foreach ($cart_items as $item)
            <div class="shopping-cart__product-content">
                <div class="shopping-cart__product-content-item">
                    <div class="img-wrapper">
                        <img src="{{ asset("storage/products/" .$item->options->img) }}" alt="product" />
                    </div>
                    <div class="text-content">
                        <h5 class="font-body--md-400">{{ $item->name }}</h5>
                        <p class="font-body--md-400">{{ $item->price  }} x <span
                                class="font-body--md-500">{{ $item->qty }}</span></p>
                    </div>
                </div>
                <button wire:click="removeItem({{ $item->id }})" class="delete-item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 23C18.0748 23 23 18.0748 23 12C23 5.92525 18.0748 1 12 1C5.92525 1 1 5.92525 1 12C1 18.0748 5.92525 23 12 23Z"
                            stroke="#CCCCCC" stroke-miterlimit="10" />
                        <path d="M16 8L8 16" stroke="#666666" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M16 16L8 8" stroke="#666666" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>

        @endforeach
    </div>
    <div class="shopping-cart-bottom">
        <div class="shopping-cart-product-info">
            <p class="product-count font-body--lg-400">{{ $count }} Product</p>
            <span class="product-price font-body--lg-500">{{ $total }}</span>
        </div>

        <form action="#">
            <button type="submit" wire:click="clearCart" class="button button--lg w-100">Clear Cart</button>
            <a href="{{ route('client.checkout') }}" class="button button--lg w-100">
                Checkout
            </a>
        </form>
    </div>
</div>



@script
<script>
    window.addEventListener("clearOverlay", function (e) {
        let closeBtn = document.querySelector('.shopping-cart .close');
        const body = document.querySelector('body');
        body.classList.remove('overlay');
        shoppingCart.classList.remove('active');
    })
</script>

@endscript