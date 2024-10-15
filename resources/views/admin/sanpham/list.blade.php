@extends('layout.admin.layout')
@section('content')
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
                        <form class="form-search" action="{{ route('san-pham.search') }}" method="get" >
                            <fieldset class="name">
                                <input type="text" placeholder="Search here..." class="" name="search" tabindex="2" value="" aria-required="true" >
                            </fieldset>
                            <div class="button-submit">
                                <button class="" type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <a class="tf-button style-1 w208" href="{{ route('san-pham.create') }}"><i class="icon-plus"></i>Add new</a>
                </div>
                <div class="wg-table table-product-list">
                    <ul class="table-title flex gap20 mb-14">
                        <li>
                            <div class="body-title">Product</div>
                        </li>
                        <li>
                            <div class="body-title">Product ID</div>
                        </li>
{{--                        <li>--}}
{{--                            <div class="body-title">Description</div>--}}
{{--                        </li>--}}
                        <li>
                            <div class="body-title">Price</div>
                        </li>
                        <li>
                            <div class="body-title">Quantity</div>
                        </li>
                        <li>
                            <div class="body-title">Brand</div>
                        </li>
                        <li>
                            <div class="body-title">Category</div>
                        </li>
                        <li>
                            <div class="body-title">Date</div>
                        </li>
                        <li>
                            <div class="body-title">Action</div>
                        </li>
                    </ul>
                    @foreach($products as $key => $value)
                        <ul class="flex flex-column">
                            <li class="product-item gap14">
                                <div class="image no-bg">
                                    @if($value->image)
                                        <img src="{{ asset('storage/'.$value->image) }}" alt="">
                                    @else
                                        <span>k co anh</span>
                                    @endif
                                </div>
                                <div class="flex items-center justify-between gap20 flex-grow">
                                    <div class="name">
                                        <a href="product-list.html" class="body-title-2">{{ $value->name }}</a>
                                    </div>
                                    <div class="body-text">{{ $value->id }}</div>
{{--                                    <div class="body-text">{{ $value->description }} </div>--}}
                                    <div class="body-text">{{ $value->price }} vnd</div>
                                    <div class="name">
                                        <p class="body-title-2">{{ $value->ton_kho }}</p>
                                    </div>
                                    <div class="body-text">{{ $value->brand->name }}</div>
                                    <div class="body-text">{{ $value->category->name }}</div>
                                    <div class="body-text">{{ $value->created_at }}</div>
                                    <div class="list-icon-function">
                                        <div class="item eye">
                                            <a href="{{ route('san-pham.show',$value->id) }}"><i class="icon-eye"></i></a>
                                        </div>
                                        <div class="item edit">
                                            <a href="{{ route('san-pham.edit',$value->id) }}"><i class="icon-edit-3"></i></a>
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
                    <ul class="pagination">
                        {{ $products->links() }}
                    </ul>
                </div>
            </div>
@endsection
