@extends('layout.client.layout')
@section('content')
    <main class="main-content">
        <!--== Start: Page Banner Section ==-->
        <div class="page-banner-section" data-bg-img="assets/images/photos/bg3.jpg">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>SHOPPING CART</li>
                </ul>
            </div>
        </div>
        <!--== End: Page Banner Section ==-->


        <!--== Start Product Cart Area Wrapper ==-->
        <div class="product-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cart-table-wrap table-responsive">
                            <table class="cart-table">
                                <thead>
                                <tr>
                                    <th class="width-thumbnail"></th>
                                    <th class="width-name">Product</th>
                                    <th class="width-price"> Price</th>
                                    <th class="width-quantity">Quantity</th>
                                    <th class="width-subtotal">Subtotal</th>
                                    <th class="width-remove"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="product-details.html"><img class="w-100" src="../../../../../../public/assets/images/product/single/single-product-thumb-1.jpg" alt="Image" width="210" height="240"></a>
                                    </td>
                                    <td class="product-name">
                                        <h5><a href="product-details.html">New and sale badge product</a></h5>
                                    </td>
                                    <td class="product-price"><span class="amount">$120.00</span></td>
                                    <td class="cart-quality">
                                        <div class="product-details-quality">
                                            <div class="pro-qty">
                                                <input type="text" title="Quantity" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-total"><span>$120.00</span></td>
                                    <td class="product-remove"><a href="#/"><i class="icon-close"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="product-details.html"><img class="w-100" src="../../../../../../public/assets/images/product/single/single-product-thumb-2.jpg" alt="Image" width="210" height="240"></a>
                                    </td>
                                    <td class="product-name">
                                        <h5><a href="product-details.html">This is the large title</a></h5>
                                    </td>
                                    <td class="product-price"><span class="amount">$120.00</span></td>
                                    <td class="cart-quality">
                                        <div class="product-details-quality">
                                            <div class="pro-qty">
                                                <input type="text" title="Quantity" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-total"><span>$120.00</span></td>
                                    <td class="product-remove"><a href="#/"><i class="icon-close"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="product-details.html"><img class="w-100" src="../../../../../../public/assets/images/product/single/single-product-thumb-3.jpg" alt="Image" width="210" height="240"></a>
                                    </td>
                                    <td class="product-name">
                                        <h5><a href="product-details.html">Product with video</a></h5>
                                    </td>
                                    <td class="product-price"><span class="amount">$120.00</span></td>
                                    <td class="cart-quality">
                                        <div class="product-details-quality">
                                            <div class="pro-qty">
                                                <input type="text" title="Quantity" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-total"><span>$120.00</span></td>
                                    <td class="product-remove"><a href="#/"><i class="icon-close"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-shiping-update-wrapper">
                            <div class="cart-shiping-btn continure-btn">
                                <a class="btn btn-link" href="product.html">Continue Shopping</a>
                            </div>
                            <div class="cart-shiping-btn update-btn">
                                <a class="btn btn-link" href="product.html">Update Cart</a>
                                <a class="btn btn-link" href="product.html">Clear Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="cart-calculate-discount-wrap mb-40">
                            <h4>Calculate shipping </h4>
                            <div class="calculate-discount-content">
                                <div class="select-style">
                                    <select class="select-active">
                                        <option>Bangladesh</option>
                                        <option>Bahrain</option>
                                        <option>Azerbaijan</option>
                                        <option>Barbados</option>
                                        <option>Barbados</option>
                                    </select>
                                </div>
                                <div class="select-style">
                                    <select class="select-active">
                                        <option>State / County</option>
                                        <option>Bahrain</option>
                                        <option>Azerbaijan</option>
                                        <option>Barbados</option>
                                        <option>Barbados</option>
                                    </select>
                                </div>
                                <div class="input-style">
                                    <input type="text" placeholder="Town / City">
                                </div>
                                <div class="input-style mb-4">
                                    <input type="text" placeholder="Postcode / ZIP">
                                </div>
                                <div class="calculate-discount-btn">
                                    <a class="btn btn-link" href="#/">Update</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="cart-calculate-discount-wrap mb-40 mt-10 mt-md-0">
                            <h4>Coupon Discount </h4>
                            <div class="calculate-discount-content">
                                <p>Enter your coupon code if you have one.</p>
                                <div class="input-style mb-4">
                                    <input type="text" placeholder="Coupon code">
                                </div>
                                <div class="calculate-discount-btn">
                                    <a class="btn btn-link" href="#/">Apply Coupon</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="grand-total-wrap mt-10 mt-lg-0">
                            <div class="grand-total-content">
                                <h5>Subtotal <span>$180.00</span></h5>
                                <div class="grand-shipping">
                                    <span>Shipping</span>
                                    <ul>
                                        <li><input type="radio" name="shipping" value="info" checked="checked"><label>Free shipping</label></li>
                                        <li><input type="radio" name="shipping" value="info" checked="checked"><label>Flat rate: <span>$100.00</span></label></li>
                                        <li><input type="radio" name="shipping" value="info" checked="checked"><label>Local pickup: <span>$120.00</span></label></li>
                                    </ul>
                                </div>
                                <div class="shipping-country">
                                    <p>Shipping to Bangladesh</p>
                                </div>
                                <div class="grand-total">
                                    <h4>Total <span>$185.00</span></h4>
                                </div>
                            </div>
                            <div class="grand-total-btn">
                                <a class="btn btn-link" href="checkout.html">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Product Cart Area Wrapper ==-->
    </main>
@endsection
