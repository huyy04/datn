@extends('layout.admin.layout')
@section('content')
        <!-- main-content-wrap -->
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Danh sach thuoc tinh</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href=""><div class="text-tiny">Dashboard</div></a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <a href="#"><div class="text-tiny">Ecommerce</div></a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">Product List</div>
                    </li>
                </ul>
            </div>
            <!-- product-list -->
            <div class="wg-box">
                <div class="title-box">
                    <i class="icon-coffee"></i>
                    <div class="body-text">Tip search by Product ID: Each product is provided with a unique ID, which you can rely on to find the exact product you need.</div>
                </div>
                <div class="flex items-center justify-between gap10 flex-wrap">
                    <div class="wg-filter flex-grow">
                        <div class="show">
                            <div class="text-tiny">Showing</div>
                            <div class="select">
                                <select class="">
                                    <option>10</option>
                                    <option>20</option>
                                    <option>30</option>
                                </select>
                            </div>
                            <div class="text-tiny">entries</div>
                        </div>
                        <form class="form-search" action="" method="get" >
                            <fieldset class="name">
                                <input type="text" placeholder="Search here..." class="" name="search" tabindex="2" value="" aria-required="true" >
                            </fieldset>
                            <div class="button-submit">
                                <button class="" type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <a class="tf-button style-1 w208" href="{{ route('thuoc-tinh.create') }}"><i class="icon-plus"></i>Add new</a>
                </div>
                <div class="wg-table table-product-list">
                    <ul class="table-title flex gap20 mb-14">
                        <li>
                            <div class="body-title">Product</div>
                        </li>
                        <li>
                            <div class="body-title">Product Variant ID</div>
                        </li>
                        <li>
                            <div class="body-title">Color</div>
                        </li>
                        <li>
                            <div class="body-title">Size</div>
                        </li>
                        <li>
                            <div class="body-title">Ram</div>
                        </li>
{{--                        <li>--}}
{{--                            <div class="body-title">Brand</div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="body-title">Category</div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="body-title">Date</div>--}}
{{--                        </li>--}}
                        <li>
                            <div class="body-title">Action</div>
                        </li>
                    </ul>
                    @foreach($productVariants as $key => $value)
                        <ul class="flex flex-column">
                            <li class="product-item gap14">
                                <div class="image no-bg">

                                </div>
                                <div class="flex items-center justify-between gap20 flex-grow">
                                    <div class="name">
                                        <a href="" class="body-title-2">{{ $value->product->name }}</a>
                                    </div>
                                    <div class="body-text">{{ $value->id }}</div>
                                    <div class="body-text" style="background-color: {{ $value->color->name }};width: 100px;height: 20px;border-radius: 50%;margin-right: 300px"></div>
                                    <div class="body-text">{{ $value->size->name }}</div>
                                    <div class="name">
                                        <p class="body-title-2">{{ $value->ram_size->name }}</p>
                                    </div>
{{--                                    <div class="body-text">{{ $value->brand->name }}</div>--}}
{{--                                    <div class="body-text">{{ $value->category->name }}</div>--}}
{{--                                    <div class="body-text">{{ $value->created_at }}</div>--}}
                                    <div class="list-icon-function">
                                        <div class="item edit">
                                            <i class="icon-edit-3"></i>
                                        </div>
                                        <div class="item trash">
                                            <i class="icon-trash-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    @endforeach

                </div>
                <div class="divider"></div>
                <div class="flex items-center justify-between flex-wrap gap10">
                    <div class="text-tiny">Showing 10 entries</div>
                    <ul class="wg-pagination">
                        <li>
                            <a href="#"><i class="icon-chevron-left"></i></a>
                        </li>
                        <li>
                            <a href=""></a>
                        </li>
                        <li class="active">
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-chevron-right"></i></a>
                        </li>
                    </ul>

                </div>

            </div>
            <!-- /product-list -->
        </div>
        <!-- /main-content-wrap -->
@endsection
