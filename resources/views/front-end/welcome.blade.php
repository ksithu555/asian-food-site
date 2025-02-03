
<x-guest-layout>
    @php $error = $errors->toArray();
    @endphp
    <style>
        .home-section pt-2
        {
        background-image: url(../assets/images/vegetable/banner/1.jpg);
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        display: block;
        }

    </style>
        <!-- Home Section Start -->
        <section class="home-section pt-2">
            <div class="container-fluid-lg">
                <div class="row g-4">
                    <div class="col-xl-8 ratio_65">
                        <div class="home-contain h-100">
                            <div class="h-100">
                                <img src="{{ asset('frontend/assets/images/homepage/' . $tops[0]->image) }}" class="bg-img blur-up lazyload" alt="">
                            </div>
                                <div class="home-detail p-center-left w-75">
                                    <div>

                                        <h6>Exclusive offer <span>{{ $tops[0]->discount }} OFF</span></h6>

                                        <h1 class="text-uppercase">
                                            {{ $tops[0]->phaseone }}
                                            <span class="daily">
                                            {{ $tops[0]->phasetwo}}
                                            </span>
                                        </h1>
                                        <p class="w-75 d-none d-sm-block">
                                            {{ $tops[0]->phasethree }}
                                        </p>
                                    @if ($productsGroupedByDiscount[30] != null)
                                        <button onclick="location.href = '{{ route('show-discount-product', ['ids' => $productsGroupedByDiscount[30]]) }}';"
                                            class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">{{ __('messages.shop_now') }}
                                            <i class="fa-solid fa-right-long icon"></i></button>
                                    @endif
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="col-xl-4 ratio_65">
                        <div class="row g-4">
                            <div class="col-xl-12 col-md-6">
                                <div class="home-contain">
                                    <img src="{{ asset('frontend/assets/images/homepage/' . $tops[1]->image) }}"
                                        class="bg-img blur-up lazyload" alt="">
                                    <div class="home-detail p-center-left home-p-sm w-75">
                                        <div>

                                            <h2 class="mt-0 text-danger">{{ $tops[1]->discount }} <span class="discount text-title">OFF</span>
                                            </h2>

                                            <h3 class="theme-color">{{ $tops[1]->phaseone }}</h3>
                                            <p class="w-75">{{ $tops[1]->phasetwo }}</p>
                                        @if ($productsGroupedByDiscount[45] != null)
                                            <a href="{{ route('show-discount-product', ['ids' => $productsGroupedByDiscount[45]]) }}"
                                                class="shop-button">{{ __('messages.shop_now') }}
                                                <i class="fa-solid fa-right-long"></i></a>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 col-md-6">
                                <div class="home-contain">
                                    <img src="{{ asset('frontend/assets/images/homepage/' . $tops[2]->image) }}" class="bg-img blur-up lazyload"
                                        alt="">
                                    <div class="home-detail p-center-left home-p-sm w-75">
                                        <div>
                                            <h2 class="mt-0 text-danger">{{ $tops[2]->discount }} <span class="discount text-title">OFF</span>
                                            </h2>
                                            <h3 class="theme-color">{{ $tops[2]->phaseone }}</h3>
                                            <p class="w-75">{{ $tops[2]->phasetwo }}</p>
                                        @if ($productsGroupedByDiscount[50] != null)
                                            <a href="{{ route('show-discount-product', ['ids' => $productsGroupedByDiscount[50]]) }}" class="shop-button">
                                                {{ __('messages.shop_now') }} 
                                                <i class="fa-solid fa-right-long"></i></a>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Home Section End -->

        <!-- Banner Section Start -->
        <section class="banner-section ratio_60 wow fadeInUp">
            <div class="container-fluid-lg">
                <div class="banner-slider">
                    <div>
                        <div class="banner-contain hover-effect">
                            <img src={{ asset('frontend/assets/images/homepage/' . $tops[3]->image ) }} class="bg-img blur-up lazyload" alt="">
                            <div class="banner-details">
                                <div class="banner-box">

                                    <h6 class="text-danger">{{ $tops[3]->discount }} OFF</h6>

                                    <h5>{{ $tops[3]->phaseone }}</h5>
                                    <h6 class="text-content">{{ $tops[4]->phasetwo }}</h6>
                                </div>
                                @if ($productsGroupedByDiscount[5] != null)
                                <a href="{{ route('show-discount-product', ['ids' => $productsGroupedByDiscount[5]]) }}" class="banner-button text-white">
                                    {{ __('messages.shop_now') }} 
                                    <i class="fa-solid fa-right-long ms-2"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="banner-contain hover-effect">
                            <img src={{ asset('frontend/assets/images/homepage/' . $tops[4]->image) }} class="bg-img blur-up lazyload" alt="">
                            <div class="banner-details">
                                <div class="banner-box">

                                    <h6 class="text-danger">{{ $tops[4]->discount }} OFF</h6>

                                    <h5>{{ $tops[4]->phaseone }}</h5>
                                    <h6 class="text-content">{{ $tops[4]->phasetwo }}</h6>
                                </div>
                                @if ($productsGroupedByDiscount[10] != null)
                                <a href="{{ route('show-discount-product', ['ids' => $productsGroupedByDiscount[10]]) }}" class="banner-button text-white">
                                    {{ __('messages.shop_now') }}
                                    <i class="fa-solid fa-right-long ms-2"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="banner-contain hover-effect">
                            <img src={{ asset('frontend/assets/images/homepage/' . $tops[5]->image ) }} class="bg-img blur-up lazyload" alt="">
                            <div class="banner-details">
                                <div class="banner-box">

                                    <h6 class="text-danger">{{ $tops[5]->discount }} OFF</h6>

                                    <h5>{{ $tops[5]->phaseone }}</h5>
                                    <h6 class="text-content">{{ $tops[5]->phasetwo }}</h6>
                                </div>
                                @if ($productsGroupedByDiscount[15] != null)
                                <a href="{{ route('show-discount-product', ['ids' => $productsGroupedByDiscount[15]]) }}" class="banner-button text-white">
                                    {{ __('messages.shop_now') }}
                                    <i class="fa-solid fa-right-long ms-2"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="banner-contain hover-effect">
                            <img src={{ asset('frontend/assets/images/homepage/' . $tops[6]->image )  }} class="bg-img blur-up lazyload" alt="">
                            <div class="banner-details">
                                <div class="banner-box">
                                    <h6 class="text-danger">{{ $tops[6]->discount }} OFF</h6>

                                    <h5>{{ $tops[6]->phaseone }}</h5>
                                    <h6 class="text-content">{{ $tops[6]->phasetwo }}</h6>
                                </div>
                                @if ($productsGroupedByDiscount[20] != null)
                                <a href="{{ route('show-discount-product', ['ids' => $productsGroupedByDiscount[20]]) }}" class="banner-button text-white">
                                    {{ __('messages.shop_now') }} 
                                    <i class="fa-solid fa-right-long ms-2"></i>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section End -->

        <!-- Product Section Start -->
        <section class="product-section">
            <div class="container-fluid-lg">
                <div class="row g-sm-4 g-3">
                    <div class="col-xxl-3 col-xl-4 d-none d-xl-block">
                        <div class="p-sticky">
                            <div class="category-menu">
                                <h3>{{ __('messages.category') }}</h3>
                                <ul>
                                    @foreach($categories as $list)
                                    <li>

                                        <div class="category-list">
                                            <img src="{{ asset('images/'.$list->category_icon)}}" class="blur-up lazyload" alt="">

                                            <h5>
                                                <a href="{{ url("/categorysidebar/".$list->id ) }}">
                                                    {{ $list->{'category_name_' . app()->getLocale()} ?? $list->category_name }}
                                                </a>
                                            </h5>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>

                                <ul class="value-list">
                                    <li>
                                        <div class="category-list">
                                            <h5 class="ms-0 text-title">
                                                <a href="{{ route('show-discount-product', ['topic' => 'value-of-the-day']) }}">
                                                    {{ __('messages.today_best_sellers') }}
                                                </a>
                                            </h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="category-list">
                                            <h5 class="ms-0 text-title">
                                                <a href="{{ route('show-discount-product', ['topic' => 'top-50-offers']) }}">
                                                    {{ __('messages.top_50_discounts') }}
                                                </a>
                                            </h5>
                                        </div>
                                    </li>
                                    <li class="mb-0">
                                        <div class="category-list">
                                            <h5 class="ms-0 text-title">
                                                <a href="{{ route('show-discount-product', ['topic' => 'new-arrivals']) }}">
                                                    {{ __('messages.new_arrivals') }}
                                                </a>
                                            </h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="ratio_156 section-t-space">
                                <div class="home-contain hover-effect">
                                    <img src="{{ asset('frontend/assets/images/homepage/' . $tops[7]->image )}}" class="bg-img blur-up lazyload"
                                        alt="">
                                    <div class="home-detail p-top-left home-p-medium">
                                        <div>

                                            <h6 class="text-yellow home-banner">{{ $tops[7]->discount }}</h6>

                                            <h3 class="text-uppercase fw-normal"><span
                                                    class="theme-color fw-bold">{{ $tops[7]->phaseone }}</span> 
                                                    {{ $tops[7]->phasetwo }}</h3>
                                            <h3 class="fw-light">{{ $tops[7]->phasethree }}</h3>
                                        @if($seafood != null)
                                            <button onclick="window.open('{{ route('show-discount-product', ['ids' => $seafood]) }}', '_blank');"
                                                    class="btn btn-animation btn-md mend-auto">
                                                    {{ __(messages.shop_now) }} <i class="fa-solid fa-arrow-right icon"></i>
                                            </button>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ratio_medium section-t-space">
                                <div class="home-contain hover-effect">
                                    <img src="{{ asset('frontend/assets/images/homepage/' . $tops[8]->image)}}" class="img-fluid blur-up lazyload"
                                        alt="">
                                    <div class="home-detail p-top-left home-p-medium">
                                        <div>
                                            <h4 class="text-yellow text-exo home-banner">{{ $tops[8]->discount }}</h4>
                                            <h2 class="text-uppercase fw-normal mb-0 text-russo theme-color">{{ $tops[8]->discount }}</h2>
                                            <h2 class="text-uppercase fw-normal text-title">{{ $tops[8]->discount }}</h2>
                                        @if($vegetableHalfDiscount != null)
                                            <p class="mb-3">Super Offer to {{ $tops[8]->discount }} Off</p>
                                            <button onclick="window.open('{{ route('show-discount-product', ['ids' => $vegetableHalfDiscount]) }}', '_blank');"
                                                    class="btn btn-animation btn-md mend-auto">
                                                    {{ __('messages.shop_now') }} <i class="fa-solid fa-arrow-right icon"></i>
                                            </button>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if(count($trendingProducts) > 0)
                            <div class="section-t-space">
                                <div class="category-menu">
                                    <h3>{{ __('messages.trending_products') }}</h3>
                                    <ul class="product-list border-0 p-0 d-block">
                                    @foreach($trendingProducts as $trending)
                                        <li>
                                            <div class="offer-product">
                                                <a href="{{ route('show-product-left-thumbnail', ['id' => $trending->id]) }}" class="offer-image">
                                                    <img src="{{ asset('upload/product_thambnail/'.$trending->product_thambnail)}}"
                                                        class="blur-up lazyload" alt="">
                                                </a>

                                                <div class="offer-detail">
                                                    <div>
                                                        <a href="{{ route('show-product-left-thumbnail', ['id' => $trending->id]) }}" class="text-title">
                                                            <h6 class="name">{{ $trending->product_name }}</h6>
                                                        </a>
                                                        <span>{{ $trending->product_size}}</span>
                                                        <h6 class="price theme-color">¥{{ number_format($trending->selling_price, 0, '.', ',') }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endif

                            @if ($customers)
                            @foreach($customers as $customer)
                            <div class="section-t-space">
                                <div class="category-menu">
                                    <h3>{{ $customer->title }}</h3>
                                    <div class="review-box">
                                        <div class="review-contain">
                                            <h5 class="w-75">{{ $customer->subtitle }}</h5>
                                            <p>{!! $customer->content !!}</p>
                                        </div>

                                        <div class="review-profile">
                                            <div class="review-image">
                                                <img src="{{ asset('images/'.$customer->image) }}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div class="review-detail">
                                                <h5>{{ $customer->name }}</h5>
                                                <h6>{{ $customer->position }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="col-xxl-9 col-xl-8">
                    @if ($coupons->count() > 0)
                    @if(count($topSaveTodayProducts) > 0)
                        <div class="title title-flex">
                            <div>
                                <h2>{{ __('messages.top_coupon_items') }}</h2>
                                <span class="title-leaf">
                                    <svg class="icon-width">
                                        <use xlink:href="{{ asset('frontend/assets/svg/leaf.svg#leaf') }}"></use>
                                    </svg>
                                </span>
                                <p>{{ __('messages.dont_miss_opportunity') }}</p>
                            </div>
                            <div class="timing-box">
                                <div class="timing">
                                    <i data-feather="clock"></i>
                                    <h6 class="name">{{ __('messages.today') }} :</h6>
                                    <h6 class="name" id="formatted-date"></h6>
                                </div>
                            </div>
                        </div>

                        <div class="section-b-space">
                            <div class="product-border border-row overflow-hidden">
                                <div class="product-box-slider no-arrow">
                                    @foreach($topSaveTodayProducts as $topSaveProduct)
                                        <div>
                                            <div class="row m-0">
                                                @php
                                                    $starRating = 0;
                                                    $count = 0;
                                                @endphp
                                                @foreach ($reviews as $review)
                                                    @if ($topSaveProduct->id == $review->product_id)
                                                        @php
                                                            $count += 1;
                                                            $starRating += $review->stars_rated;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                @if ($count != 0)
                                                    @php
                                                        $starRating = $starRating / $count;
                                                    @endphp
                                                @endif
                                                <div class="col-12 px-0">
                                                    <div class="product-box">
                                                    @if ($topSaveProduct->created_at->diffInDays(\Carbon\Carbon::now()) < 7)
                                                        <div class="label-tag">
                                                            <span>{{ __('messages.new') }}</span>
                                                        </div>
                                                    @endif
                                                        <div class="product-image">
                                                            <a href="{{ route('show-product-left-thumbnail', ['id' => $topSaveProduct->id]) }}">
                                                                <img src="{{ asset('upload/product_thambnail/'.$topSaveProduct->product_thambnail)}}"
                                                                    class="img-fluid blur-up lazyload" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="product-detail">
                                                            <a href="{{ route('show-product-left-thumbnail', ['id' => $topSaveProduct->id]) }}">
                                                                <h6 class="name">{{ $topSaveProduct->product_name }}</h6>
                                                            </a>
                                                            <h5 class="sold text-content">
                                                                    <span class="theme-color price">¥{{ number_format($topSaveProduct->selling_price, 0, '.', ',') }}</span>

                                                                @if ($topSaveProduct->discount_percent != 0)
                                                                    <del>¥{{ number_format($topSaveProduct->original_price, 0, '.', ',') }}</del>
                                                                @endif
                                                            </h5>
                                                            <div class="product-rating mt-sm-2 mt-1">
                                                                <ul class="rating">
                                                                    @for ($i = 1; $i <= 5; $i++)
                                                                        @if ($i <= $starRating)
                                                                            <li><i data-feather="star" class="fill"></i></li>
                                                                        @else
                                                                            <li><i data-feather="star"></i></li>
                                                                        @endif
                                                                    @endfor
                                                                </ul>
                                                                @if ($topSaveProduct->in_stock > 0)
                                                                    <h6 class="theme-color">{{ $topSaveProduct->in_stock }} {{ __('messages.in_stock') }}</h6>
                                                                @else
                                                                    <h6 class="theme-color">
                                                                        {{ __('messages.no_stock_left') }}
                                                                    </h6>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="slider-1 product-wrapper no-arrow">
                        @if ($coupons->count() > 0)
                            @foreach($coupons as $coupon)
                                <a href="{{ route('show-coupon-product', ['id' => $coupon->id]) }}">
                                <div class="">
                                    <div class="banner-contain">
                                        <img src="{{ asset('frontend/assets/images/homepage/coupon1.jpg') }}" class="bg-img blur-up lazyload" alt="">
                                        <div class="banner-details p-center p-4 text-white text-center">
                                            <div>
                                                <h3 class="lh-base fw-bold offer-text">{{ $coupon->name }}</h3>
                                                <h4 class="lh-base fw-bold offer-text">
                                                    Get ¥{{ number_format($coupon->discount_amount, 0, '', ',') }} Cashback! Min Order of
                                                        ¥{{ number_format($coupon->mini_amount, 0, '', ',') }}
                                                </h4>
                                                <h5 class="lh-base fw-bold offer-text">Expired Date :
                                                    {{ date('Y/m/d', strtotime($coupon->startdate)) }} ~
                                                    {{ date('Y/m/d', strtotime($coupon->enddate)) }}
                                                </h5>
                                                @if ($coupon->seller)
                                                    @if ($coupon->seller->coupon_status == 1)
                                                    <h4 class="lh-base fw-bold offer-text">Publisher : {{ $coupon->seller->shop_name }}</h4>
                                                    @endif
                                                @elseif ($coupon->product->first())
                                                    @if ($coupon->product->first()->coupon_status == 1)
                                                    <h4 class="lh-base fw-bold offer-text">Publisher : Asian Food Museum</h4>
                                                    @endif
                                                @endif
                                                <h6 class="coupon-code">Use Code : {{ $coupon->coupon_code}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            @endforeach
                        @endif
                        </div>
                    @endif
                    @endif

                        <div class="title section-t-space">
                            <h2>Browse by Categories</h2>
                            <span class="title-leaf">
                                <svg class="icon-width">
                                    <use xlink:href="{{ asset('frontend/assets/svg/leaf.svg#leaf') }}"></use>
                                </svg>
                            </span>
                            <p>Top Categories Of The Week</p>
                        </div>

                        <div class="category-slider-2 product-wrapper no-arrow">
                            @foreach($categories as $list)
                            <div>
                                <a href="{{ url("/categorysidebar/".$list->id ) }}" class="category-box category-dark">
                                    <div>
                                        <img src="{{ asset('images/'.$list->category_icon) }}" class="blur-up lazyload" alt="">
                                        <h5>{{ $list->category_name }}</h5>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>

                        <div class="section-t-space section-b-space">
                            <div class="row g-md-4 g-3">
                                <div class="col-md-6">
                                    <div class="banner-contain hover-effect">
                                        <img src="{{ asset('frontend/assets/images/homepage/' . $tops[9]->image) }}" class="bg-img blur-up lazyload"
                                            alt="">
                                        <div class="banner-details p-center-left p-4">
                                            <div>

                                                <h3 class="text-exo">50% offer</h3>

                                                <h4 class="text-russo fw-normal theme-color mb-2">{{ $tops[9]->phaseone }}</h4>
                                            @if($meatHalfDiscount != null)
                                                <button onclick="location.href = '{{ route('show-discount-product', ['ids' => $meatHalfDiscount]) }}';"
                                                    class="btn btn-animation btn-sm mend-auto">Shop Now <i
                                                        class="fa-solid fa-arrow-right icon"></i></button>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="banner-contain hover-effect">
                                        <img src="{{ asset('frontend/assets/images/homepage/' . $tops[10]->image ) }}" class="bg-img blur-up lazyload"
                                            alt="">
                                        <div class="banner-details p-center-left p-4">
                                            <div>

                                                <h3 class="text-exo">50% offer</h3>

                                                <h4 class="text-russo fw-normal theme-color mb-2">{{ $tops[10]->phaseone }}</h4>
                                            @if($vegetableHalfDiscount != null)
                                                <button onclick="location.href = '{{ route('show-discount-product', ['ids' => $vegetableHalfDiscount]) }}';"
                                                    class="btn btn-animation btn-sm mend-auto">Shop Now <i
                                                        class="fa-solid fa-arrow-right icon"></i></button>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section-b-space">
                            <div class="row g-md-4 g-3">
                                <div class="col-xxl-8 col-xl-12 col-md-7">
                                    <div class="banner-contain hover-effect">
                                        <img src="{{ asset('frontend/assets/images/homepage/' . $tops[11]->image )}}" class="bg-img blur-up lazyload"
                                            alt="">
                                        <div class="banner-details p-center-left p-4">
                                            <div>

                                                <h2 class="text-kaushan fw-normal text-danger">{{ $tops[11]->discount }} Off</h2>

                                                <h2 class="text-kaushan fw-normal theme-color">{{ $tops[11]->phaseone }}</h2>
                                                <h3 class="mt-2 mb-3">{{ $tops[11]->phasetwo }}</h3>
                                                <p class="text-content banner-text">
                                                    {{ $tops[11]->phasethree }}
                                                </p>
                                            @if ($productsGroupedByDiscount[25] != null)
                                                <button onclick="location.href = '{{ route('show-discount-product', ['ids' => $productsGroupedByDiscount[25]]) }}';"
                                                    class="btn btn-animation btn-sm mend-auto">Shop Now <i
                                                        class="fa-solid fa-arrow-right icon"></i></button>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-xl-12 col-md-5">
                                        <img src="{{ asset('frontend/assets/images/homepage/' . $tops[12]->image )}}" class="bg-img blur-up lazyload"
                                            alt="">
                                @if ($productsGroupedByDiscount[20] != null)
                                    <a href="{{ route('show-discount-product', ['ids' => $productsGroupedByDiscount[20]]) }}" class="banner-contain hover-effect h-100">
                                        <div class="banner-details p-center-left p-4 h-100">
                                            <div>
                                                <h2 class="text-kaushan fw-normal text-danger">20% Off</h2>
                                                <h3 class="mt-2 mb-2 theme-color">{{ $tops[12]->phaseone }}</h3>
                                                <h3 class="fw-normal product-name text-title">{{ $tops[12]->phasetwo }}</h3>
                                            </div>
                                        </div>
                                    </a>
                                @endif
                                </div>
                            </div>
                        </div>

                        @php
                            $productCount = $bestSellerProducts->count();
                        @endphp
                        @if($productCount > 0)
                        <div class="title d-block">
                            <div>
                                <h2>Our best Seller</h2>
                                <span class="title-leaf">
                                    <svg class="icon-width">
                                        <use xlink:href="{{ asset('frontend/assets/svg/leaf.svg#leaf') }}"></use>
                                    </svg>
                                </span>
                                <p>Indulge in Perfection, Taste the Best.</p>
                            </div>
                        </div>

                        <div class="best-selling-slider product-wrapper wow fadeInUp">
                        @for ($i = 0; $i < ceil($productCount / 4); $i++)
                            <div>
                                <ul class="product-list">
                            @php
                                $index = $i * 4;
                            @endphp
                            @for ($j = 0; $j < 4 && ($index + $j) < $productCount; $j++)
                                    @php
                                        $product = $bestSellerProducts[$index + $j];
                                    @endphp
                                    <li>
                                        <div class="offer-product">
                                            <a href="{{ route('show-product-left-thumbnail', ['id' => $product->id]) }}" class="offer-image">
                                                <img src="{{ asset('upload/product_thambnail/'.$product->product_thambnail)}}"
                                                    class="blur-up lazyload" alt="">
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="{{ route('show-product-left-thumbnail', ['id' => $product->id]) }}" class="text-title">
                                                        <h6 class="name">
                                                            @if(mb_strlen($product->product_name) > 30)
                                                                {!! mb_substr($product->product_name, 0, 30) . '<br>' . mb_substr($product->product_name, 30, 30) . '...' !!}
                                                            @else
                                                                {!! nl2br(e($product->product_name)) !!}
                                                            @endif
                                                        </h6>
                                                    </a>
                                                    <span>{{ $product->product_size }}</span>
                                                    <h6 class="price theme-color">¥{{ number_format($product->selling_price, 0, '.', ',') }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                            @endfor
                                </ul>
                            </div>
                        @endfor
                        @endif
                        </div>

                        <div class="section-t-space">
                            <div class="banner-contain hover-effect">
                                <img src="{{ asset('frontend/assets/images/homepage/' . $tops[13]->image ) }}" class="bg-img blur-up lazyload" alt="">
                                <div class="banner-details p-center banner-b-space w-100 text-center">
                                    <div>
                                        <h6 class="ls-expanded theme-color mb-sm-3 mb-1">{{ $tops[13]->phaseone }}</h6>
                                        <h2 class="banner-title">{{ $tops[13]->phasetwo }}</h2>
                                    @if($vegetable != null)
                                        <button onclick="location.href = '{{ route('show-discount-product', ['ids' => $vegetable]) }}';"
                                            class="btn btn-animation btn-sm mx-auto mt-sm-3 mt-2">Shop Now <i
                                                class="fa-solid fa-arrow-right icon"></i></button>
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="title section-t-space">
                            <h2>Blog</h2>
                            <span class="title-leaf">
                                <svg class="icon-width">
                                    <use xlink:href="{{ asset('frontend/assets/svg/leaf.svg#leaf') }}"></use>
                                </svg>
                            </span>
                            <p>Savoring Life's Flavors, One Bite at a Time.</p>
                        </div>

                        <div class="slider-3-blog ratio_65 no-arrow product-wrapper">

                        @foreach($blogs as $list)
                            <div>
                                <div class="blog-box">
                                    <div class="blog-box-image">
                                        <a href="{{ url('/blogdetail/'.$list->id ) }}" class="blog-image">
                                            <img src="{{ asset('images/'.($list->image)   ) }}" class="bg-img blur-up lazyload"
                                                alt="">
                                        </a>
                                    </div>

                                    <a href="{{ url('/blogdetail/'.$list->id ) }}" class="blog-detail">
                                        <h6>{{ date('Y/m/d', strtotime($list->created_at)) }}</h6>
                                        <h5>{{ $list->title }}</h5>
                                    </a>
                                </div>
                            </div>

                        @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Product Section End -->

        <!-- Newsletter Section Start -->

        <section class="newsletter-section section-b-space">
            <div class="container-fluid-lg">
                <div class="newsletter-box newsletter-box-2">
                    <div class="newsletter-contain py-5">
                        <div class="container-fluid">
                            @include('components.messagebox')
                            <div class="row">
                                <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 offset-xxl-2 offset-md-1">
                                    <div class="newsletter-detail">
                                        <h2>Join Our Newsletter And Get...</h2>
                                        <h5>Get access to the latest information.</h5>
                                        @php $action= route('registernewsletter'); @endphp
                                        <form class="theme-form theme-form-2 mega-form" id="registernewsletter" class="contact-form" method="POST" action="{{ $action }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="input-box">
                                                <input type="email" class="form-control" id="newsletter" name="newsletter"
                                                    placeholder="Enter Your Email">
                                                <i class="fa-solid fa-envelope arrow"></i>
                                                <button class="sub-btn btn-submit  btn-animation">
                                                    <span class="d-sm-block d-none">Subscribe</span>
                                                    <i class="fa-solid fa-arrow-right icon"></i>
                                                </button>
                                            </div>
                                            <p style="display:none" class="newsletter error text-danger"></p>
                                            @if (!empty($error['newsletter']))
                                                @foreach ($error['newsletter'] as  $key => $value)
                                                    <p class="newsletter error text-danger">{{ $value }}</p>
                                                @endforeach
                                            @endif
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Newsletter Section End -->

        <!-- Cookie Bar Box Start -->
        <div class="cookie-bar-box">
            <div class="cookie-box">
                <div class="cookie-image">
                    <img src="{{ asset('frontend/assets/images/cookie-bar.png') }}" class="blur-up lazyload" alt="">
                    <h2>{{ __('messages.cookies') }}</h2>
                </div>

                <div class="cookie-contain">
                    <h5 class="text-content">{{ __('messages.we_use_cookies') }}</h5>
                </div>
            </div>

            <div class="button-group">
                <a href="{{ url('/privacy-policy') }}" class="text-content">
                    <button class="btn privacy-button">{{ __('messages.privacy_policy') }}</button>
                </a>
                <button class="btn ok-button">OK</button>
            </div>
        </div>
        <!-- Cookie Bar Box End -->
        @php
            $remainingTime = 0;
            if ($coupons->count() > 0)
            {
                $targetDate = strtotime($coupons[0]->enddate);
                $remainingTime = ($targetDate - time()) * 1000;
            }
            if ($remainingTime < 0) {
                $remainingTime = 0;
            }
        @endphp

        <!-- Timer Js -->
        <!-- <script src="{{ asset('frontend/assets/js/timer1.js') }}"></script>
        <script>
            var remainingTime = {{ $remainingTime }};
            var deadline = new Date(Date.parse(new Date()) + remainingTime);
            console.log(deadline);
            initializeClock('clockdiv-1', deadline);
        </script> -->

        <script>
            var today = new Date();
            var formattedDate = today.getFullYear() + '/' + ('0' + (today.getMonth() + 1)).slice(-2) + '/' + ('0' + today.getDate()).slice(-2);
            document.getElementById("formatted-date").innerText = formattedDate;
        </script>
        <script>
            $('.btn-submit').click(function() {
                $('.error').hide();
                var email = $.trim($("#newsletter").val());
                var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

                if (email === "") {
                    $('.error.newsletter').text('Email is required');
                    $('.error.newsletter').show();
                    return false;
                } else if (!emailPattern.test(email)) {
                    $('.error.newsletter').text('Invalid email format');
                    $('.error.newsletter').show();
                    return false;
                } else {
                    $('.error').hide();
                    $('#confirmModal').modal('show');
                }
            });
        </script>
    </x-guest-layout>