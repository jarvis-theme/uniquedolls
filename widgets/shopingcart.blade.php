<div id="shopping-cart" class="fr">
    <a href="{{url('checkout')}}" class="cart-btn" title="View Your Cart">
        <span><strong>{{Shpcart::cart()->total_items()}}</strong> on cart</span>
        <span class="price"><strong>{{ price(Shpcart::cart()->total() )}}</strong></span>
    </a>
</div>