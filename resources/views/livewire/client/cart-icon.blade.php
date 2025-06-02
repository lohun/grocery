<div class="header__cart">
    <div class="header__cart-item">
        <div class="header__cart-item-content" id="cart-bag">
            <button class="cart-bag">
                <svg width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.3333 14.6667H7.08333L4.25 30.25H29.75L26.9167 14.6667H22.6667M11.3333 14.6667V10.4167C11.3333 7.28705 13.8704 4.75 17 4.75V4.75C20.1296 4.75 22.6667 7.28705 22.6667 10.4167V14.6667M11.3333 14.6667H22.6667M11.3333 14.6667V18.9167M22.6667 14.6667V18.9167"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span class="item-number">{{ $count }}</span>
            </button>
            <div class="header__cart-item-content-info">
                <h5>Shopping cart:</h5>
                <span class="price">₦{{ $total }}</span>
            </div>
        </div>
    </div>
</div>