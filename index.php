<?php require_once 'templates/header.php' ?>
<main>
    <div class="wrapper">
        <div class="product-wrapper">
            <!-- PRODUCT CARD START -->
            <div class="product-card">
                <div class="product-client-inf resized-client-inf">
                    <label name="product-name" class="product-name">
                        <h2>FULL WINTER KIT</h2>
                    </label>
                    <label name="product-short-description" class="product-short-description">
                        <h5>Half Jacket + Skiny Trousers + Boot leather</h5>
                    </label>
                    <label name="product-full-description" class="product-full-description">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                            <br>
                           Lorem Ipsum is simply dummy text of the printing
                            <br>
                           and typesetting industry</p>
                    </label>
                </div>
                <div class="product-preview-area">
                    <div><img src="img/big-product.png" alt="coat" class="main-preview"></div>
                    <div class="description-images">
                        <div><img src="img/1-small-product.png" alt="coat"></div>
                        <div><img src="img/2-small-product.png" alt="coat"></div>
                        <div class="image-active"><img src="img/3-small-product.png" alt="coat"></div>
                    </div>
                </div>
                <div class="product-description-area">
                    <div class="product-client-inf">
                        <label name="product-name" class="product-name">
                            <h2>FULL WINTER KIT</h2>
                        </label>
                        <label name="product-short-description" class="product-short-description">
                            <h5>Half Jacket + Skiny Trousers + Boot leather</h5>
                        </label>
                        <label name="product-full-description" class="product-full-description">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                <br>
                               Lorem Ipsum is simply dummy text of the printing
                                <br>
                               and typesetting industry</p>
                        </label>
                    </div>
                    <div class="product-user-inf">
                        <div class="size-quantity-area">
                            <div class="product-size">
                                <label>Choose Size</label>
                                <div class="size-prop">
                                    <div class="size active-size">S</div>
                                    <div class="prop-separator">-</div>
                                    <div class="size">M</div>
                                    <div class="prop-separator">-</div>
                                    <div class="size">L</div>
                                    <div class="prop-separator">-</div>
                                    <div class="size">XL</div>
                                </div>
                            </div>
                            <div class="product-quantity">
                                <label for="num">Choose quantity</label>
                                <div class="quantity-block">
                                    <button type=button class="quantity-arrow-plus"> +</button>
                                    <input id="num" class="quantity-num" type="number" value="0"/>
                                    <button type=button class="quantity-arrow-minus"> -</button>
                                </div>
                            </div>
                        </div>
                        <div class="price-area">
                            <div class="price">Price: 350$</div>
                            <div class="price-user-actions">
                                <div class="share">
                                    <img src="img/icons/share.svg" alt="share">
                                </div>
                                <div class="add-to-cart">
                                    <img src="img/icons/add_to_cart.svg" alt="add-to-cart">
                                </div>
                                <div class="like">
                                    <img src="img/icons/like.svg" alt="like">
                                </div>
                                <button>Order Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PRODUCT CARD END -->
        </div>
    </div>
</main>
<?php require_once 'templates/footer.php' ?>
