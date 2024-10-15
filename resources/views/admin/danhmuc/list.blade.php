@extends('layout.admin.layout')
@section('content')
    <!-- main-content-wrap -->
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>All category</h3>
            <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                <li>
                    <a href="index.html"><div class="text-tiny">Dashboard</div></a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <a href="#"><div class="text-tiny">Category</div></a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">All category</div>
                </li>
            </ul>
        </div>
        <!-- all-category -->
        <div class="wg-box">
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
                    <form class="form-search" method="get" action="{{ route('danhmuc.search') }}">
                        <fieldset class="name">
                            <input type="text" placeholder="Search here..." class="" name="search" tabindex="2" value="" aria-required="true" >
                        </fieldset>
                        <div class="button-submit">
                            <button class="" type="submit"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
                <a class="tf-button style-1 w208" href="{{ route('danhmuc.create') }}"><i class="icon-plus"></i>Add new</a>
            </div>
            <div class="wg-table table-all-category">
                <ul class="table-title flex gap20 mb-3">
                    <li>
                        <div class="body-title">Category</div>
                    </li>
                    <li>
                        <div class="body-title">Category ID</div>
                    </li>
                    <li>
                        <div class="body-title">Start date</div>
                    </li>
                    <li>
                        <div class="body-title">Action</div>
                    </li>
                </ul>
                @foreach($data as $key => $item)
    <ul class="flex flex-column">
        <li class="product-item gap14">
            <div class="image no-bg">
                <img src="images/products/41.png" alt="">
            </div>
            <div class="flex items-center justify-between gap20 flex-grow">
                <div class="name">
                    <a href="product-list.html" class="body-title-2">{{ $item->name }}</a>
                </div>
                <div class="body-text">{{ $key+1 }}</div>
                <div class="body-text">{{ $item->created_at }}</div>
                <div class="list-icon-function">
                    <div class="item eye">
                        <i class="icon-eye"></i>
                    </div>
                    <div class="item edit">
                        <a href="{{ route('danhmuc.edit',$item->id) }}"><i class="icon-edit-3"></i></a>
                    </div>
                    <div class="item trash">
                        <form action="{{ route('danhmuc.destroy',$item->id) }}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" onclick="return confirm('Bạn có muốn xóa không?')">
                                <i class="icon-trash-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </li>
    </ul>
@endforeach

                </ul>
            </div>
        </div>
        <!-- /all-category -->
    </div>
    <!-- /main-content-wrap -->
@endsection
