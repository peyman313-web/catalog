@extends('layouts.catalog', ['class' => 'sold-page', 'page' => __('sold Page'), 'contentClass' => 'sold-page'])
@section("content")
        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <section class="content">
            <section class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include("catalog.sidebar")
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-9">
                            <!--============ Section Title===================================================================-->
                            <div class="section-title clearfix">
                                <div class="float-left float-xs-none">
                                    <label class="mr-3 align-text-bottom">Sort by: </label>
                                    <select name="sorting" id="sorting" class="small width-200px" data-placeholder="Default Sorting" >
                                        <option value="">Default Sorting</option>
                                        <option value="1">Newest First</option>
                                        <option value="2">Oldest First</option>
                                        <option value="3">Lowest Price First</option>
                                        <option value="4">Highest Price First</option>
                                    </select>

                                </div>
                                <div class="float-right d-xs-none thumbnail-toggle">
                                    <a href="" class="change-class" data-change-from-class="list" data-change-to-class="grid" data-parent-class="items">
                                        <i class="fa fa-th"></i>
                                    </a>
                                    <a href="" class="change-class active" data-change-from-class="grid" data-change-to-class="list" data-parent-class="items">
                                        <i class="fa fa-th-list"></i>
                                    </a>
                                </div>
                            </div>
                            <!--============ Items ==========================================================================-->
                            <div class="items list grid-xl-3-items grid-lg-3-items grid-md-2-items">
                                <div class="item item-sold">
                                    <div class="ribbon-diagonal">
                                        <div class="ribbon-diagonal__inner">
                                            <span>Sold</span>
                                        </div>
                                        <!--end ribbon-diagonal__inner-->
                                    </div>
                                    <!--end ribbon-diagonal-->
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="" class="tag category">Home & Decor</a>
                                                <a href="http://themestarz.net/html/craigs/single-listing-1.html" class="title">Furniture for sale</a>
                                                <span class="tag">Offer</span>
                                            </h3>
                                            <a href="http://themestarz.net/html/craigs/single-listing-1.html" class="image-wrapper background-image">
                                                <img src="index_files/image-01.jpg" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="">Manhattan, NY</a>
                                        </h4>
                                        <div class="price">$80</div>
                                        <div class="meta">
                                            <figure>
                                                <i class="fa fa-calendar-o"></i>02.05.2017
                                            </figure>
                                            <figure>
                                                <a href="">
                                                    <i class="fa fa-user"></i>Jane Doe
                                                </a>
                                            </figure>
                                        </div>
                                        <!--end meta-->
                                        <div class="description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
                                        </div>
                                        <!--end description-->
                                        <a href="http://themestarz.net/html/craigs/single-listing-1.html" class="detail text-caps underline">Detail</a>
                                    </div>
                                </div>
                                <!--end item-->

                                <div class="item">
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="" class="tag category">Education</a>
                                                <a href="http://themestarz.net/html/craigs/single-listing-1.html" class="title">Creative Course</a>
                                                <span class="tag">Offer</span>
                                            </h3>
                                            <a href="http://themestarz.net/html/craigs/single-listing-1.html" class="image-wrapper background-image">
                                                <img src="index_files/image-02.jpg" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="">Nashville, TN</a>
                                        </h4>
                                        <div class="price">$125</div>
                                        <div class="meta">
                                            <figure>
                                                <i class="fa fa-calendar-o"></i>28.04.2017
                                            </figure>
                                            <figure>
                                                <a href="">
                                                    <i class="fa fa-user"></i>Peter Browner
                                                </a>
                                            </figure>
                                        </div>
                                        <!--end meta-->
                                        <div class="description">
                                            <p>Proin at tortor eros. Phasellus porta nec elit non lacinia. Nam bibendum erat at leo faucibus vehicula. Ut laoreet porttitor risus, eget suscipit tellus tincidunt sit amet. </p>
                                        </div>
                                        <!--end description-->
                                        <div class="additional-info">
                                            <ul>
                                                <li>
                                                    <figure>Start Date</figure>
                                                    <aside>25.06.2017 09:00</aside>
                                                </li>
                                                <li>
                                                    <figure>Length</figure>
                                                    <aside>2 months</aside>
                                                </li>
                                                <li>
                                                    <figure>Bedrooms</figure>
                                                    <aside>3</aside>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--end addition-info-->
                                        <a href="http://themestarz.net/html/craigs/single-listing-1.html" class="detail text-caps underline">Detail</a>
                                    </div>
                                </div>
                                <!--end item-->

                                <div class="item">
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="" class="tag category">Adventure</a>
                                                <a href="http://themestarz.net/html/craigs/single-listing-1.html" class="title">Into The Wild</a>
                                                <span class="tag">Ad</span>
                                            </h3>
                                            <a href="http://themestarz.net/html/craigs/single-listing-1.html" class="image-wrapper background-image">
                                                <img src="index_files/image-03.jpg" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="">Seattle, WA</a>
                                        </h4>
                                        <div class="price">$1,560</div>
                                        <div class="meta">
                                            <figure>
                                                <i class="fa fa-calendar-o"></i>21.04.2017
                                            </figure>
                                            <figure>
                                                <a href="">
                                                    <i class="fa fa-user"></i>Peak Agency
                                                </a>
                                            </figure>
                                        </div>
                                        <!--end meta-->
                                        <div class="description">
                                            <p>Nam eget ullamcorper massa. Morbi fringilla lectus nec lorem tristique gravida</p>
                                        </div>
                                        <!--end description-->
                                        <a href="http://themestarz.net/html/craigs/single-listing-1.html" class="detail text-caps underline">Detail</a>
                                    </div>
                                </div>
                                <!--end item-->

                                <div class="item item-sold">
                                    <div class="ribbon-diagonal">
                                        <div class="ribbon-diagonal__inner">
                                            <span>Sold</span>
                                        </div>
                                        <!--end ribbon-diagonal__inner-->
                                    </div>
                                    <!--end ribbon-diagonal-->
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="" class="tag category">Real Estate</a>
                                                <a href="http://themestarz.net/html/craigs/single-listing-1.html" class="title">Luxury Apartment</a>
                                                <span class="tag">Offer</span>
                                            </h3>
                                            <a href="http://themestarz.net/html/craigs/single-listing-1.html" class="image-wrapper background-image">
                                                <img src="index_files/image-04.jpg" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="">Greeley, CO</a>
                                        </h4>
                                        <div class="price">$75,000</div>
                                        <div class="meta">
                                            <figure>
                                                <i class="fa fa-calendar-o"></i>13.03.2017
                                            </figure>
                                            <figure>
                                                <a href="">
                                                    <i class="fa fa-user"></i>Hills Estate
                                                </a>
                                            </figure>
                                        </div>
                                        <!--end meta-->
                                        <div class="description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
                                        </div>
                                        <!--end description-->
                                        <div class="additional-info">
                                            <ul>
                                                <li>
                                                    <figure>Area</figure>
                                                    <aside>368m<sup>2</sup></aside>
                                                </li>
                                                <li>
                                                    <figure>Bathrooms</figure>
                                                    <aside>2</aside>
                                                </li>
                                                <li>
                                                    <figure>Bedrooms</figure>
                                                    <aside>3</aside>
                                                </li>
                                                <li>
                                                    <figure>Garage</figure>
                                                    <aside>1</aside>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--end addition-info-->
                                        <a href="http://themestarz.net/html/craigs/single-listing-1.html" class="detail text-caps underline">Detail</a>
                                    </div>
                                </div>
                                <!--end item-->

                                <div class="item item-sold">
                                    <div class="ribbon-diagonal">
                                        <div class="ribbon-diagonal__inner">
                                            <span>Sold</span>
                                        </div>
                                        <!--end ribbon-diagonal__inner-->
                                    </div>
                                    <!--end ribbon-diagonal-->
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="" class="tag category">Architecture</a>
                                                <a href="http://themestarz.net/html/craigs/single-listing-1.html" class="title">We'll Redesign Your Apartment</a>
                                                <span class="tag">Offer</span>
                                            </h3>
                                            <a href="http://themestarz.net/html/craigs/single-listing-1.html" class="image-wrapper background-image">
                                                <img src="index_files/image-05.jpg" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="">Greeley, CO</a>
                                        </h4>
                                        <div class="price">
                                            <span class="appendix">From</span>
                                            $200
                                        </div>
                                        <div class="meta">
                                            <figure>
                                                <i class="fa fa-calendar-o"></i>13.03.2017
                                            </figure>
                                            <figure>
                                                <a href="">
                                                    <i class="fa fa-user"></i>XL Designers
                                                </a>
                                            </figure>
                                        </div>
                                        <!--end meta-->
                                        <div class="description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
                                        </div>
                                        <!--end description-->
                                        <div class="additional-info">
                                            <ul>
                                                <li>
                                                    <figure>Area</figure>
                                                    <aside>368m<sup>2</sup></aside>
                                                </li>
                                                <li>
                                                    <figure>Bathrooms</figure>
                                                    <aside>2</aside>
                                                </li>
                                                <li>
                                                    <figure>Bedrooms</figure>
                                                    <aside>3</aside>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--end addition-info-->
                                        <a href="http://themestarz.net/html/craigs/single-listing-1.html" class="detail text-caps underline">Detail</a>
                                    </div>
                                </div>
                                <!--end item-->

                            </div>
                            <!--end items-->
                        </div>
                        <!--end col-md-9-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content-->

        <!--*********************************************************************************************************-->
        <!--************ FOOTER *************************************************************************************-->
        <!--*********************************************************************************************************-->

@endsection
