@extends('layout.client.layout')
@section('content')
    <main class="main-content">
        <!--== Start: Page Banner Section ==-->
        <div class="page-banner-section" data-bg-img="assets/images/photos/bg3.jpg">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>SHOPPING Checkout</li>
                </ul>
            </div>
        </div>
        <!--== End: Page Banner Section ==-->

        <!--== Start Checkout Area Wrapper ==-->
        <div class="section-padding shop-checkout-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="billing-info-wrap">
                            <h3 class="checkout-title">Billing Details</h3>
                            <div class="row">
                                <div class="col-12">
                                    <div class="billing-info mb-4">
                                        <label>First name <abbr class="required" title="required">*</abbr></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="billing-info mb-4">
                                        <label>Last name <abbr class="required" title="required">*</abbr></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="billing-info mb-4">
                                        <label>Company name (optional) <abbr class="required" title="required">*</abbr></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="billing-select mb-4">
                                        <label>Country / Region <abbr class="required" title="required">*</abbr></label>
                                        <div class="select-style">
                                            <select class="select-active">
                                                <option>Bangladesh</option>
                                                <option>Bahrain</option>
                                                <option>Azerbaijan</option>
                                                <option>Barbados</option>
                                                <option>Barbados</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="billing-info mb-4">
                                        <label>Street Address <abbr class="required" title="required">*</abbr></label>
                                        <input class="billing-address" placeholder="House number and street name" type="text">
                                        <input placeholder="Apartment, suite, unit, etc. (optional)" type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="billing-info mb-4">
                                        <label>Town / City <abbr class="required" title="required">*</abbr></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="billing-select mb-4">
                                        <label>District <abbr class="required" title="required">*</abbr></label>
                                        <div class="select-style">
                                            <select class="select-active">
                                                <option>Select an option…</option>
                                                <option>Barguna</option>
                                                <option>Bandarban</option>
                                                <option>Barbados</option>
                                                <option>Barbados</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="billing-info mb-4">
                                        <label>Postcode / ZIP (optional) <abbr class="required" title="required">*</abbr></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="billing-info mb-4">
                                        <label>Phone <abbr class="required" title="required">*</abbr></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="billing-info mb-4">
                                        <label>Email Address <abbr class="required" title="required">*</abbr></label>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-account">
                                <input class="form-check-input checkout-toggle" type="checkbox">
                                <span>Ship to a different address?</span>
                            </div>
                            <div class="different-address open-toggle mt-30">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="billing-info mb-4">
                                            <label>First name <abbr class="required" title="required">*</abbr></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="billing-info mb-4">
                                            <label>Last name <abbr class="required" title="required">*</abbr></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="billing-info mb-4">
                                            <label>Company name (optional) <abbr class="required" title="required">*</abbr></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="billing-select mb-4">
                                            <label>Country / Region <abbr class="required" title="required">*</abbr></label>
                                            <div class="select-style">
                                                <select class="select-active">
                                                    <option>Bangladesh</option>
                                                    <option>Bahrain</option>
                                                    <option>Azerbaijan</option>
                                                    <option>Barbados</option>
                                                    <option>Barbados</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="billing-info mb-4">
                                            <label>Street Address <abbr class="required" title="required">*</abbr></label>
                                            <input class="billing-address" placeholder="House number and street name" type="text">
                                            <input placeholder="Apartment, suite, unit, etc. (optional)" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="billing-info mb-4">
                                            <label>Town / City <abbr class="required" title="required">*</abbr></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="billing-select mb-4">
                                            <label>District <abbr class="required" title="required">*</abbr></label>
                                            <div class="select-style">
                                                <select class="select-active">
                                                    <option>Select an option…</option>
                                                    <option>Barguna</option>
                                                    <option>Bandarban</option>
                                                    <option>Barbados</option>
                                                    <option>Barbados</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="billing-info mb-4">
                                            <label>Postcode / ZIP (optional) <abbr class="required" title="required">*</abbr></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="billing-info mb-4">
                                            <label>Phone <abbr class="required" title="required">*</abbr></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="billing-info mb-4">
                                            <label>Email Address <abbr class="required" title="required">*</abbr></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="additional-info-wrap">
                                <label>Order notes (optional)</label>
                                <textarea placeholder="Notes about your order, e.g. special notes for delivery. " name="message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="your-order-area mt-10 mt-lg-0">
                            <h4 class="checkout-title">Your order</h4>
                            <div class="your-order-wrap">
                                <div class="your-order-info-wrap">
                                    <div class="your-order-title">
                                        <h6>Product <span>Subtotal</span></h6>
                                    </div>
                                    <div class="your-order-product">
                                        <ul>
                                            <li>Digital Lens Camera × 4 <span>$140.00 </span></li>
                                            <li>Headphone Supersonic × 1 <span>$39.59 </span></li>
                                        </ul>
                                    </div>
                                    <div class="your-order-subtotal">
                                        <h3>Subtotal <span>$617.59</span></h3>
                                    </div>
                                    <div class="your-order-shipping">
                                        <span>Shipping</span>
                                        <ul>
                                            <li><input type="radio" name="shipping" value="info" checked="checked"><label>Free shipping</label></li>
                                            <li><input type="radio" name="shipping" value="info" checked="checked"><label>Flat rate: <span>$100.00</span></label></li>
                                            <li><input type="radio" name="shipping" value="info" checked="checked"><label>Local pickup: <span>$120.00</span></label></li>
                                        </ul>
                                    </div>
                                    <div class="your-order-total">
                                        <h3>Total <span>$617.59 </span></h3>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="pay-top sin-payment">
                                        <input id="payment_method_1" class="input-radio" type="radio" value="cheque" checked="checked" name="payment_method">
                                        <label for="payment_method_1"> Direct Bank Transfer </label>
                                        <div class="payment-box payment_method_bacs">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                        </div>
                                    </div>
                                    <div class="pay-top sin-payment">
                                        <input id="payment-method-2" class="input-radio" type="radio" value="cheque" name="payment_method">
                                        <label for="payment-method-2">Check payments</label>
                                        <div class="payment-box payment_method_bacs">
                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                        </div>
                                    </div>
                                    <div class="pay-top sin-payment">
                                        <input id="payment-method-3" class="input-radio" type="radio" value="cheque" name="payment_method">
                                        <label for="payment-method-3">Cash on delivery </label>
                                        <div class="payment-box payment_method_bacs">
                                            <p>Pay with cash upon delivery. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="payment-condition">
                                    <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="checkout.html">privacy policy</a>.</p>
                                </div>
                            </div>
                            <div class="place-order">
                                <a href="checkout.html">Place Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Checkout Area Wrapper ==-->
    </main>
@endsection
