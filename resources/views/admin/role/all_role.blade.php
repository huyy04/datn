@extends('layout.admin.layout')
@section('content')
    <div class="main-content">
        <!-- main-content-wrap -->
        <div class="main-content-inner">
            <!-- main-content-wrap -->
            <div class="main-content-wrap">
                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                    <h3>Role List</h3>
                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                        <li>
                            <a href="index.html"><div class="text-tiny">Dashboard</div></a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <a href="#"><div class="text-tiny">Roles</div></a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <div class="text-tiny">Role List</div>
                        </li>
                    </ul>
                </div>
                <!-- all-roles -->
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
                        <a class="tf-button style-1 w208" href="create-roles.html"><i class="icon-plus"></i>Add role</a>
                    </div>
                    <div class="wg-table table-all-roles">
                        <ul class="table-title flex gap20 mb-14">
                            <li>
                                <div class="body-title">No</div>
                            </li>
                            <li>
                                <div class="body-title">Name</div>
                            </li>
                            <li>
                                <div class="body-title">Create at</div>
                            </li>
                            <li>
                                <div class="body-title">Action</div>
                            </li>
                        </ul>
                        <ul class="flex flex-column">
                            <li class="roles-item">
                                <div class="body-text">01</div>
                                <div class="body-text">Guy Hawkins</div>
                                <div class="body-text">May 31, 2023</div>
                                <div class="list-icon-function">
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                    <div class="item trash">
                                        <i class="icon-trash-2"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="roles-item">
                                <div class="body-text">02</div>
                                <div class="body-text">Bessie Cooper</div>
                                <div class="body-text">December 2, 2023</div>
                                <div class="list-icon-function">
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                    <div class="item trash">
                                        <i class="icon-trash-2"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="roles-item">
                                <div class="body-text">03</div>
                                <div class="body-text">Wade Warren</div>
                                <div class="body-text">February 28, 2023</div>
                                <div class="list-icon-function">
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                    <div class="item trash">
                                        <i class="icon-trash-2"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="roles-item">
                                <div class="body-text">04</div>
                                <div class="body-text">Ralph Edwards</div>
                                <div class="body-text">December 19, 2023</div>
                                <div class="list-icon-function">
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                    <div class="item trash">
                                        <i class="icon-trash-2"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="roles-item">
                                <div class="body-text">05</div>
                                <div class="body-text">Devon Lane</div>
                                <div class="body-text">December 29, 2023</div>
                                <div class="list-icon-function">
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                    <div class="item trash">
                                        <i class="icon-trash-2"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="roles-item">
                                <div class="body-text">06</div>
                                <div class="body-text">Courtney Henry</div>
                                <div class="body-text">August 24, 2023</div>
                                <div class="list-icon-function">
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                    <div class="item trash">
                                        <i class="icon-trash-2"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="roles-item">
                                <div class="body-text">07</div>
                                <div class="body-text">Savannah Nguyen</div>
                                <div class="body-text">September 24, 2023</div>
                                <div class="list-icon-function">
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                    <div class="item trash">
                                        <i class="icon-trash-2"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="roles-item">
                                <div class="body-text">08</div>
                                <div class="body-text">Jane Cooper</div>
                                <div class="body-text">November 28, 2023</div>
                                <div class="list-icon-function">
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                    <div class="item trash">
                                        <i class="icon-trash-2"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="roles-item">
                                <div class="body-text">09</div>
                                <div class="body-text">Esther Howard</div>
                                <div class="body-text">February 9, 2023</div>
                                <div class="list-icon-function">
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                    <div class="item trash">
                                        <i class="icon-trash-2"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="roles-item">
                                <div class="body-text">10</div>
                                <div class="body-text">Cameron Williamson</div>
                                <div class="body-text">August 7, 2023</div>
                                <div class="list-icon-function">
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                    <div class="item trash">
                                        <i class="icon-trash-2"></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="divider"></div>
                    <div class="flex items-center justify-between flex-wrap gap10">
                        <div class="text-tiny">Showing 10 to 16 in 16 records</div>
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
                <!-- /all-roles -->
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
