@extends('layout.admin.layout')
@section('content')
    <div class="main-content">
        <!-- main-content-wrap -->
        <div class="main-content-inner">
            <!-- main-content-wrap -->
            <div class="main-content-wrap">
                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                    <h3>All User</h3>
                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                        <li>
                            <a href="index.html"><div class="text-tiny">Dashboard</div></a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <a href="#"><div class="text-tiny">User</div></a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <div class="text-tiny">All User</div>
                        </li>
                    </ul>
                </div>
                <!-- all-user -->
                <div class="wg-box">
                    <div class="flex items-center justify-between gap10 flex-wrap">
                        <div class="wg-filter flex-grow">
                            <form class="form-search">
                                <fieldset class="name">
                                    <input type="text" placeholder="Search here..." class="" name="name" tabindex="2" value="" aria-required="true" required="">
                                </fieldset>
                                <div class="button-submit">
                                    <button class="" type="submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <a class="tf-button style-1 w208" href="add-new-user.html"><i class="icon-plus"></i>Add new</a>
                    </div>
                    <div class="wg-table table-all-user">
                        <ul class="table-title flex gap20 mb-14">
                            <li>
                                <div class="body-title">User</div>
                            </li>
                            <li>
                                <div class="body-title">Phone</div>
                            </li>
                            <li>
                                <div class="body-title">Email</div>
                            </li>
                            <li>
                                <div class="body-title">Action</div>
                            </li>
                        </ul>
                        <ul class="flex flex-column">
                            <li class="user-item gap14">
                                <div class="image">
                                    <img src="images/avatar/user-6.png" alt="">
                                </div>
                                <div class="flex items-center justify-between gap20 flex-grow">
                                    <div class="name">
                                        <a href="#" class="body-title-2">Kristin Watson</a>
                                        <div class="text-tiny mt-3">Product name</div>
                                    </div>
                                    <div class="body-text">$1,452.500</div>
                                    <div class="body-text">1,638</div>
                                    <div class="list-icon-function">
                                        <div class="item eye">
                                            <i class="icon-eye"></i>
                                        </div>
                                        <div class="item edit">
                                            <i class="icon-edit-3"></i>
                                        </div>
                                        <div class="item trash">
                                            <i class="icon-trash-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="user-item gap14">
                                <div class="image">
                                    <img src="images/avatar/user-7.png" alt="">
                                </div>
                                <div class="flex items-center justify-between gap20 flex-grow">
                                    <div class="name">
                                        <a href="#" class="body-title-2">Kristin Watson</a>
                                        <div class="text-tiny mt-3">Product name</div>
                                    </div>
                                    <div class="body-text">$1,452.500</div>
                                    <div class="body-text">1,638</div>
                                    <div class="list-icon-function">
                                        <div class="item eye">
                                            <i class="icon-eye"></i>
                                        </div>
                                        <div class="item edit">
                                            <i class="icon-edit-3"></i>
                                        </div>
                                        <div class="item trash">
                                            <i class="icon-trash-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="user-item gap14">
                                <div class="image">
                                    <img src="images/avatar/user-8.png" alt="">
                                </div>
                                <div class="flex items-center justify-between gap20 flex-grow">
                                    <div class="name">
                                        <a href="#" class="body-title-2">Kristin Watson</a>
                                        <div class="text-tiny mt-3">Product name</div>
                                    </div>
                                    <div class="body-text">$1,452.500</div>
                                    <div class="body-text">1,638</div>
                                    <div class="list-icon-function">
                                        <div class="item eye">
                                            <i class="icon-eye"></i>
                                        </div>
                                        <div class="item edit">
                                            <i class="icon-edit-3"></i>
                                        </div>
                                        <div class="item trash">
                                            <i class="icon-trash-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="user-item gap14">
                                <div class="image">
                                    <img src="images/avatar/user-9.png" alt="">
                                </div>
                                <div class="flex items-center justify-between gap20 flex-grow">
                                    <div class="name">
                                        <a href="#" class="body-title-2">Kristin Watson</a>
                                        <div class="text-tiny mt-3">Product name</div>
                                    </div>
                                    <div class="body-text">$1,452.500</div>
                                    <div class="body-text">1,638</div>
                                    <div class="list-icon-function">
                                        <div class="item eye">
                                            <i class="icon-eye"></i>
                                        </div>
                                        <div class="item edit">
                                            <i class="icon-edit-3"></i>
                                        </div>
                                        <div class="item trash">
                                            <i class="icon-trash-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="user-item gap14">
                                <div class="image">
                                    <img src="images/avatar/user-10.png" alt="">
                                </div>
                                <div class="flex items-center justify-between gap20 flex-grow">
                                    <div class="name">
                                        <a href="#" class="body-title-2">Kristin Watson</a>
                                        <div class="text-tiny mt-3">Product name</div>
                                    </div>
                                    <div class="body-text">$1,452.500</div>
                                    <div class="body-text">1,638</div>
                                    <div class="list-icon-function">
                                        <div class="item eye">
                                            <i class="icon-eye"></i>
                                        </div>
                                        <div class="item edit">
                                            <i class="icon-edit-3"></i>
                                        </div>
                                        <div class="item trash">
                                            <i class="icon-trash-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="user-item gap14">
                                <div class="image">
                                    <img src="images/avatar/user-11.png" alt="">
                                </div>
                                <div class="flex items-center justify-between gap20 flex-grow">
                                    <div class="name">
                                        <a href="#" class="body-title-2">Kristin Watson</a>
                                        <div class="text-tiny mt-3">Product name</div>
                                    </div>
                                    <div class="body-text">$1,452.500</div>
                                    <div class="body-text">1,638</div>
                                    <div class="list-icon-function">
                                        <div class="item eye">
                                            <i class="icon-eye"></i>
                                        </div>
                                        <div class="item edit">
                                            <i class="icon-edit-3"></i>
                                        </div>
                                        <div class="item trash">
                                            <i class="icon-trash-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="user-item gap14">
                                <div class="image">
                                    <img src="images/avatar/user-12.png" alt="">
                                </div>
                                <div class="flex items-center justify-between gap20 flex-grow">
                                    <div class="name">
                                        <a href="#" class="body-title-2">Kristin Watson</a>
                                        <div class="text-tiny mt-3">Product name</div>
                                    </div>
                                    <div class="body-text">$1,452.500</div>
                                    <div class="body-text">1,638</div>
                                    <div class="list-icon-function">
                                        <div class="item eye">
                                            <i class="icon-eye"></i>
                                        </div>
                                        <div class="item edit">
                                            <i class="icon-edit-3"></i>
                                        </div>
                                        <div class="item trash">
                                            <i class="icon-trash-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="user-item gap14">
                                <div class="image">
                                    <img src="images/avatar/user-13.png" alt="">
                                </div>
                                <div class="flex items-center justify-between gap20 flex-grow">
                                    <div class="name">
                                        <a href="#" class="body-title-2">Kristin Watson</a>
                                        <div class="text-tiny mt-3">Product name</div>
                                    </div>
                                    <div class="body-text">$1,452.500</div>
                                    <div class="body-text">1,638</div>
                                    <div class="list-icon-function">
                                        <div class="item eye">
                                            <i class="icon-eye"></i>
                                        </div>
                                        <div class="item edit">
                                            <i class="icon-edit-3"></i>
                                        </div>
                                        <div class="item trash">
                                            <i class="icon-trash-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="user-item gap14">
                                <div class="image">
                                    <img src="images/avatar/user-14.png" alt="">
                                </div>
                                <div class="flex items-center justify-between gap20 flex-grow">
                                    <div class="name">
                                        <a href="#" class="body-title-2">Kristin Watson</a>
                                        <div class="text-tiny mt-3">Product name</div>
                                    </div>
                                    <div class="body-text">$1,452.500</div>
                                    <div class="body-text">1,638</div>
                                    <div class="list-icon-function">
                                        <div class="item eye">
                                            <i class="icon-eye"></i>
                                        </div>
                                        <div class="item edit">
                                            <i class="icon-edit-3"></i>
                                        </div>
                                        <div class="item trash">
                                            <i class="icon-trash-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="user-item gap14">
                                <div class="image">
                                    <img src="images/avatar/user-15.png" alt="">
                                </div>
                                <div class="flex items-center justify-between gap20 flex-grow">
                                    <div class="name">
                                        <a href="#" class="body-title-2">Kristin Watson</a>
                                        <div class="text-tiny mt-3">Product name</div>
                                    </div>
                                    <div class="body-text">$1,452.500</div>
                                    <div class="body-text">1,638</div>
                                    <div class="list-icon-function">
                                        <div class="item eye">
                                            <i class="icon-eye"></i>
                                        </div>
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
                    </div>
                    <div class="divider"></div>
                    <div class="flex items-center justify-between flex-wrap gap10">
                        <div class="text-tiny">Showing 10 entries</div>
                        <ul class="wg-pagination">
                            <li>
                                <a href="#"><i class="icon-chevron-left"></i></a>
                            </li>
                            <li>
                                <a href="#">1</a>
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
                <!-- /all-user -->
            </div>
            <!-- /main-content-wrap -->
        </div>
        <!-- /main-content-wrap -->
        <!-- bottom-page -->
        <div class="bottom-page">
            <div class="body-text">Copyright © 2024 Remos. Design with</div>
            <i class="icon-heart"></i>
            <div class="body-text">by <a href="https://themeforest.net/user/themesflat/portfolio">Themesflat</a> All rights reserved.</div>
        </div>
        <!-- /bottom-page -->
    </div>
@endsection
