<x-guest-layout>
    <style>
        ul.nav{
            list-style-type: none !important;
        }

    </style>

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>{{ __('messages.addresses') }}</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="/">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">{{ __('messages.addresses') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- User Dashboard Section Start -->
    <section class="user-dashboard-section section-b-space">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-xxl-3 col-lg-4">
                    <div class="dashboard-left-sidebar">
                        <div class="close-button d-flex d-lg-none">
                            <button class="close-sidebar">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                        <div class="profile-box">
                            <div class="cover-image">
                                <img src="{{ asset('frontend/assets/images/inner-page/cover-img.jpg') }}" class="img-fluid blur-up lazyload"
                                    alt="">
                            </div>

                            <div class="profile-contain">
                                <div class="profile-image">
                                    <div class="position-relative">
                                        @if ($user->user_photo)
                                        <img src="{{ asset('upload/profile/' . $user->user_photo) }}"
                                            class="blur-up lazyload update_img" alt=""  id="uploaded_image">
                                        @else
                                        <img src="{{ asset('frontend/assets/images/profile.png') }}"
                                            class="blur-up lazyload update_img" alt=""  id="uploaded_image">
                                        @endif
                                            <div class="cover-icon">
                                                <label for="user_profile_upload_input">
                                                    <i class="fa-solid fa-pen">
                                                    <input type="file" id="user_profile_upload_input" name="user_profile" class="form-control" onchange="uploadUserProfile()">
                                                    </i>
                                                </label>
                                            </div>
                                    </div>
                                </div>

                                <div class="profile-name">
                                    <h3>{{ $user->name }}</h3>
                                    <h6 class="text-content">{{ $user->email }}</h6>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-pills user-nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-dashboard-tab"
                                    type="button" style="font-size: 14px; text-align: center;" href="{{route ('user_dashboard')}}"><i data-feather="home"></i>
                                    {{ __('messages.dashboard') }}</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-order-tab" 
                                    style="font-size: 14px; text-align: center;" href="{{route ('user_order')}}"><i
                                        data-feather="shopping-bag"></i>{{ __('messages.orders') }}</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="delivery-detail" 
                                    type="button" style="font-size: 14px; text-align: center;" href="{{route ('user_delivery_status')}}"><i data-feather="box"></i>
                                    {{ __('messages.delivery_status') }}</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-address-tab"
                                    type="button" role="tab" style="font-size: 14px; text-align: center;" href="{{route ('user_addresses')}}"><i
                                        data-feather="map-pin"></i>{{ __('messages.addresses') }}</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-profile-tab"
                                    type="button" role="tab" style="font-size: 14px; text-align: center;" href="{{route ('user_profile')}}"><i data-feather="user"></i>
                                    {{ __('messages.profile') }}</a>
                            </li>
                            @php
                                $buyer = DB::table('buyers')->where('user_id', $user->id)->first();
                                $noti = DB::table('user_notifications')->where('buyer_id', $buyer->id)->where('seen', 0)->count();
                            @endphp
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-profile-tab"
                                    type="button" role="tab" style="font-size: 14px; text-align: center; display: flex; align-items: center;" href="{{route ('user_message')}}"><i data-feather="mail"></i>
                                    {{ __('messages.message') }}
                                    <span id="notification-badge" class="badge rounded-pill badge-theme" style="color: #ff6b6b; font-size: 12px; margin-left: auto;">
                                        <b>{{ $noti > 0 ? 'new' : '' }}</b>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- User Dashboard Section End -->
                <!-- Address View Start -->
                <div class="col-xxl-9 col-lg-8">
                    <button class="btn left-dashboard-show btn-animation btn-md fw-bold d-block mb-4 d-lg-none">
                       {{ __('messages.my_menu') }}</button>
                    <div class="dashboard-right-sidebar">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-dashboard" role="tabpanel">
                                <div class="dashboard-address">
                                    <div class="title title-flex">
                                        <div>
                                            <h2>{{ __('messages.my_address_book') }}</h2>
                                            <span class="title-leaf">
                                                <svg class="icon-width bg-gray">
                                                    <use xlink:href="{{ asset('frontend/assets/svg/leaf.svg#leaf') }}"></use>
                                                </svg>
                                            </span>
                                        </div>

                                        <button class="btn theme-bg-color text-white btn-sm fw-bold mt-lg-0 mt-3"
                                            data-bs-toggle="modal" data-bs-target="#add-address"><i data-feather="plus"
                                                class="me-2"></i> {{ __('messages.add_new_address') }}</button>
                                    </div>
                                    @php
                                        function formatZipCode($zipCode) {
                                            if (preg_match('/^\d{3}-\d{4}$/', $zipCode)) {
                                                return $zipCode;
                                            }
                                            if (preg_match('/^\d{7}$/', $zipCode)) {
                                                return substr($zipCode, 0, 3) . '-' . substr($zipCode, 3, 4);
                                            }
                                            return $zipCode; // return as-is if not a standard 7 digit zip code
                                        }
                                    @endphp
                                    <div class="row g-sm-4 g-3">
                                        @foreach($data as $item)
                                        <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6">
                                            <div class="address-box">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                    <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="selected_address" 
                                                            value="{{ $item->id }}" id="address_{{ $item->id }}" {{ $item->default == 1 ? 'checked':''}}>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-10">    
                                                            <label>{{ $item->place }}</label>
                                                    </div>
                                                </div>
                                            <div class="table-responsive address-table">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td>{{ __('messages.name') }}:</td>
                                                                <td>
                                                                    <p>{{ $item->name }}</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ __('messages.address') }}:</td>
                                                                <td>
                                                                    <p>〒{{ formatZipCode($item->post_code) }}</p>
                                                                    <p>{{ $item->prefecture->name }}</p>
                                                                    <p>{{ $item->city }} {{ $item->chome }}</p>
                                                                    <p>{{ $item->building }} {{ $item->room_no }}</p>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>{{ __('messages.phone') }}:</td>
                                                                <td>{{ $item->phone }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="button-group">
                                                    <button class="btn theme-bg-color btn-sm add-button w-100 edit-address-btn"
                                                            data-bs-toggle="modal" 
                                                            data-bs-target="#editAddress{{ $item->id }}"
                                                            onclick="">
                                                            <i data-feather="edit"></i> {{ __('messages.btn_edit') }}
                                                    </button>
                                                    @if ($item->main_address != 1)
                                                    <button class="btn btn-sm add-button w-100" 
                                                            data-bs-toggle="modal" 
                                                            data-bs-target="#removeProfile{{ $item->id }}"
                                                            onclick="showDeleteModal('{{ $item->id }}')" style="background-color: #ff6b6b;">
                                                        <i data-feather="trash-2"></i> {{ __('messages.btn_remove') }}
                                                    </button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- Address View End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- User Dashboard Section End -->

    <!-- Add Address Modal Box Start -->
    <div class="modal fade theme-modal" id="add-address" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('messages.add_new_address') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
    
                <form id="address-form" class="row g-4" action="{{ route('add_newaddress') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-floating mb-4 theme-form-floating form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="{{ __('messages.enter_name') }}">
                            <label for="name">{{ __('messages.name') }}</label>
                            <span class="error" style="color:red" id="error-name"></span>
                        </div>
    
                        <div class="form-floating mb-4 theme-form-floating form-group">
                            <input type="text" class="form-control" id="post_code" name="post_code" placeholder="{{ __('messages.enter_postal_code') }}">
                            <label for="post_code">{{ __('messages.postal_code') }}</label>
                            <span class="error" style="color:red" id="error-post_code"></span>
                        </div>
    
                        <div class="form-floating mb-4 theme-form-floating form-group">
                            <select class="form-control" id="prefectures" name="prefectures">
                                <option>{{ __('messages.choose_prefecture') }}</option>
                                @foreach ($prefecture as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            <span class="error" style="color:red" id="error-prefectures"></span>
                        </div>
                        
                        <div class="form-floating mb-4 theme-form-floating form-group">
                            <input type="text" class="form-control" id="city" name="city" placeholder="{{ __('messages.city_placeholder') }}">
                            <label for="city">{{ __('messages.city') }}</label>
                            <span class="error" style="color:red" id="error-city"></span>
                        </div>
                        
                        <div class="form-floating mb-4 theme-form-floating form-group">
                            <input type="text" class="form-control" id="chome" name="chome" placeholder="{{ __('messages.chome_placeholder') }}">
                            <label for="chome">{{ __('messages.chome') }}</label>
                            <span class="error" style="color:red" id="error-chome"></span>
                        </div>
                        
                        <div class="form-floating mb-4 theme-form-floating form-group">
                            <input type="text" class="form-control" id="building" name="building" placeholder="{{ __('messages.building_placeholder') }}">
                            <label for="building">{{ __('messages.building') }}</label>
                            <span class="error" style="color:red" id="error-building"></span>
                        </div>
                        
                        <div class="form-floating mb-4 theme-form-floating form-group">
                            <input type="text" class="form-control" id="roomno" name="roomno" placeholder="{{ __('messages.roomno_placeholder') }}">
                            <label for="roomno">{{ __('messages.roomno') }}</label>
                            <span class="error" style="color:red" id="error-roomno"></span>
                        </div>
    
                        <div class="form-floating mb-4 theme-form-floating form-group">
                            <input class="form-control" id="phone" name="phone" placeholder="{{ __('messages.enter_phone') }}">
                            <label for="phone">{{ __('messages.phone') }}</label>
                            <span class="error" style="color:red" id="error-phone"></span>
                        </div>
    
                        <div class="form-floating mb-4 theme-form-floating form-group">
                            <select class="form-control" id="place" name="place">
                                <option>{{ __('messages.choose_place') }}</option>
                                <option value="Home">{{ __('messages.home') }}</option>
                                <option value="Office">{{ __('messages.office') }}</option>
                                <option value="Other">{{ __('messages.other') }}</option>
                            </select>
                            <span class="error" style="color:red" id="error-place"></span>
                        </div>
                    </div>
    
                    <div class="modal-footer">
                        <button type="button" class="btn theme-bg-color btn-md text-white" onclick="validateForm()">{{ __('messages.btn_save') }}</button>
                        <button type="button" class="btn btn-secondary btn-md" data-bs-dismiss="modal" style="background-color: #ff6b6b;">{{ __('messages.btn_close') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Confirm Add Address Modal Start -->
    <div class="modal fade theme-modal remove-profile" id="confirmToAdd" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
            <div class="modal-content" style="background-color: #f5f5f5;">
                <div class="modal-header d-block text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel22">{{ __('messages.are_you_sure_to_add') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box">
                        <p>{{ __('messages.add_this_address_to_your_address_book') }}</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn theme-bg-color btn-md fw-bold text-light" id="confirmYes">{{ __('messages.btn_yes') }}</button>
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal"
                    style="background-color: #ff6b6b;border-color: #ff6b6b;">{{ __('messages.btn_no') }}</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Confirm Add Address Modal End -->
    <!-- Add Address Modal Box End -->
    <!-- Edit Address Modal Box Start -->
    @foreach($data as $item)
        <div class="modal fade theme-modal" id="editAddress{{ $item->id }}" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ __('messages.edit_address') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <form method="post" action="{{ route('edit_address') }}" class="row g-4" id="edit-form-{{ $item->id }}">
                    @csrf
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        
                        <div class="modal-body">
                            <div class="form-floating mb-4 theme-form-floating form-group">
                                <input type="text" class="form-control" id="name-{{ $item->id }}" name="name" placeholder="{{ __('messages.enter_name') }}" value="{{ $item->name }}">
                                <label for="name">{{ __('messages.name') }}</label>
                                <span class="error" style="color:red" id="error-name-{{ $item->id }}"></span>
                            </div>

                            <div class="form-floating mb-4 theme-form-floating form-group">
                                <input type="text" class="form-control" id="post_code-{{ $item->id }}" name="post_code" placeholder="{{ __('messages.enter_postal_code') }}" value="{{ $item->post_code }}">
                                <label for="post_code">{{ __('messages.postal_code') }}</label>
                                <span class="error" style="color:red" id="error-post_code-{{ $item->id }}"></span>
                            </div>

                            <div class="form-floating mb-4 theme-form-floating form-group">
                                <select class="form-control" id="prefectures-{{ $item->id }}" name="prefectures">
                                    <option>{{ __('messages.choose_prefecture') }}</option>
                                    @foreach ($prefecture as $item1)
                                        <option value="{{ $item1->id }}" name="prefectures" {{ $item1->id == $item->prefecture_id ? 'selected' : '' }}>{{ $item1->name }}</option>
                                    @endforeach
                                </select>
                                <span class="error" style="color:red" id="error-prefectures-{{ $item->id }}"></span>
                            </div>
                            
                            <div class="form-floating mb-4 theme-form-floating form-group">
                                <input type="text" class="form-control" id="city-{{ $item->id }}" name="city" placeholder="{{ __('messages.city_placeholder') }}" value="{{ $item->city }}">
                                <label for="city">{{ __('messages.city') }}</label>
                                <span class="error" style="color:red" id="error-city-{{ $item->id }}"></span>
                            </div>

                            <div class="form-floating mb-4 theme-form-floating form-group">
                                <input type="text" class="form-control" id="chome-{{ $item->id }}" name="chome" placeholder="{{ __('messages.chome_placeholder') }}" value="{{ $item->chome }}">
                                <label for="chome">{{ __('messages.chome') }}</label>
                                <span class="error" style="color:red" id="error-chome-{{ $item->id }}"></span>
                            </div>

                            <div class="form-floating mb-4 theme-form-floating form-group">
                                <input type="text" class="form-control" id="building-{{ $item->id }}" name="building" placeholder="{{ __('messages.building_placeholder') }}" value="{{ $item->building }}">
                                <label for="building">{{ __('messages.building') }}</label>
                                <span class="error" style="color:red" id="error-building-{{ $item->id }}"></span>
                            </div>

                            <div class="form-floating mb-4 theme-form-floating form-group">
                                <input type="text" class="form-control" id="roomno-{{ $item->id }}" name="roomno" placeholder="{{ __('messages.roomno_placeholder') }}" value="{{ $item->room_no }}">
                                <label for="roomno">{{ __('messages.roomno') }}</label>
                                <span class="error" style="color:red" id="error-roomno-{{ $item->id }}"></span>
                            </div>

                            <div class="form-floating mb-4 theme-form-floating form-group">
                                <input class="form-control" id="phone-{{ $item->id }}" name="phone" placeholder="{{ __('messages.enter_phone') }}" value="{{ $item->phone }}">
                                <label for="phone">{{ __('messages.phone') }}</label>
                                <span class="error" style="color:red" id="error-phone-{{ $item->id }}"></span>
                            </div>

                            <div class="form-floating mb-4 theme-form-floating form-group">
                                <select class="form-control" id="place-{{ $item->id }}" name="place">
                                    <option>{{ __('messages.choose_place') }}</option>
                                    <option value="Home" {{ $item->place == 'Home' ? 'selected' : '' }}>{{ __('messages.home') }}</option>
                                    <option value="Office" {{ $item->place == 'Office' ? 'selected' : '' }}>{{ __('messages.office') }}</option>
                                    <option value="Other" {{ $item->place == 'Other' ? 'selected' : '' }}>{{ __('messages.other') }}</option>
                                </select>
                                <span class="error" style="color:red" id="error-place-{{ $item->id }}"></span>
                            </div>
                        </div>
                    
                        <div class="modal-footer">
                            <button type="button" class="btn theme-bg-color btn-md text-white" onclick="validateEditForm({{ $item->id }})">{{ __('messages.btn_save') }}</button>
                            <button type="button" class="btn btn-secondary btn-md" data-bs-dismiss="modal" style="background-color: #ff6b6b;">{{ __('messages.btn_close') }}</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
        <!-- Confirmation Modal for Edit -->
        <div class="modal fade theme-modal remove-profile" id="confirmEdit{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
                <div class="modal-content" style="background-color: #f5f5f5;">
                    <div class="modal-header d-block text-center">
                        <h5 class="modal-title w-100" id="exampleModalLabel{{ $item->id }}">{{ __('messages.are_you_sure_to_edit') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="remove-box">
                            <p>{{ __('messages.this_changes_will_be_saved') }}</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn theme-bg-color btn-md fw-bold text-light" onclick="submitEditForm({{ $item->id }})">{{ __('messages.btn_yes') }}</button>
                        <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal"
                        style="background-color: #ff6b6b;border-color: #ff6b6b;">{{ __('messages.btn_no') }}</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- Edit Address Modal Box End -->
    <!-- Remove Address Modal Start -->
    @foreach($data as $item)
    <div class="modal fade theme-modal remove-profile" id="removeProfile{{ $item->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-block text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel22">{{ __('messages.are_you_sure_to_remove') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box">
                        <p>{{ __('messages.you_can_not_see_this_address_no_more') }}</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('remove_address', ['id' => $item->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn theme-bg-color btn-md fw-bold text-light">{{ __('messages.btn_yes') }}</button>
                    </form>
                    <button type="button" class="btn btn-md fw-bold" data-bs-dismiss="modal"
                    style="background-color: #ff6b6b;border-color: #ff6b6b;">{{ __('messages.btn_no') }}</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- Remove Address Modal End -->
    <script>
        function uploadUserProfile() {
            // Get the selected file
            const fileInput = document.getElementById('user_profile_upload_input');
            const file = fileInput.files[0];
            
            // Create a FormData object and append the file to it
            const formData = new FormData();
            formData.append('user_profile', file);
            
            // Send an AJAX request to the user_profile_upload route
            $.ajax({
                url: '/user-profile-upload',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    // Handle the response data
                    if (data.success) {
                        // If upload successful, update the src attribute of the image tag
                        console.log(data.file_url);
                        $('#uploaded_image').attr('src', data.file_url);
                    } else {
                        // If upload failed, display an error message
                        console.error('Upload failed:', data.error);
                    }
                },
                error: function(xhr, status, error) {
                    // Handle errors
                    console.error('Error:', error);
                }
            });
        }
    </script>
</x-guest-layout>
<!-- Edit Address Script-->
<script>
    $(document).ready(function() {
    $('.edit-btn').on('click', function() {
        var addressData = JSON.parse($(this).data('address'));
        alert(addressData);
        $('#address_id').val(addressData.id);
        $('#name').val(addressData.name);
        $('#post_code').val(addressData.post_code);
        $('#prefectures').val(addressData.prefectures);
        $('#city').val(addressData.city);
        $('#chome').val(addressData.chome);
        $('#building').val(addressData.building);
        $('#roomno').val(addressData.roomno);
        $('#place').val(addressData.place);
        $('#phone').val(addressData.phone);
    });

    $('#saveChanges').on('click', function() {
        var addressId = $('#address_id').val();
        var newName = $('#name').val();
        var newPostCode = $('#post_code').val();
        var newPrefectures = $('#prefectures').val();
        var newCity = $('#city').val();
        var newChome = $('#chome').val();
        var newBuilding = $('#building').val();
        var newRoomNo = $('#roomno').val();
        var newPlace = $('#place').val();
        var newPhone = $('#phone').val();

        // Perform AJAX request to update data in the controller
        $.ajax({
            url: '{{ route("edit_address") }}',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                id: addressId,
                name: newName,
                post_code: newPostCode,
                prefectures: newPrefectures,
                city: newCity,
                chome: newChome,
                building: newBuilding,
                room_no: newRoomNo,
                place: newPlace,
                phone: newPhone
            },
            success: function(response) {
            alert("123");
                // Handle success response
                console.log(response);
                // Close the modal
                $('#editAddress').modal('hide');
            },
            error: function(xhr) {
                // Handle error response
                console.error(xhr.responseText);
            }
        });
    });
});
</script>

<!-- Remove Address Script -->
<script>
    function showDeleteModal(id) {
        $('#removeProfile').modal('show');
        // Update the form action URL dynamically with the selected address id
        $('#deleteForm').attr('action', '/user/remove-address/' + id);
    }
</script>

<!-- Set Default Address Script -->
<script>
    $(document).ready(function() {
        $('input[name="selected_address"]').change(function() {
            var addressId = $(this).val();
            $.ajax({
                url: '/set-default-address/' + addressId,
                type: 'GET',
                success: function(response) {
                    // Handle success response if needed
                    console.log(response.success);
                },
                error: function(xhr, status, error) {
                    // Handle error if needed
                    console.error('Error setting default address:', error);
                }
            });
        });
    });
</script>

<script>
    function validateForm() {
        let isValid = true;
    
        const name = document.getElementById('name').value.trim();
        const post_code = document.getElementById('post_code').value.trim();
        const prefectures = document.getElementById('prefectures').value;
        const city = document.getElementById('city').value.trim();
        const chome = document.getElementById('chome').value.trim();
        const building = document.getElementById('building').value.trim();
        const roomno = document.getElementById('roomno').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const place = document.getElementById('place').value;
    
        // Clear previous error messages
        document.querySelectorAll('.error').forEach(el => el.textContent = '');
    
        if (!name) {
            isValid = false;
            document.getElementById('error-name').textContent = '{{ __('messages.enter_name_error_message')}}';
        } else if (name.length > 255) {
            isValid = false;
            document.getElementById('error-name').textContent = '{{ __('messages.valid_name_error_message') }}';
        }
    
        if (!post_code) {
            isValid = false;
            document.getElementById('error-post_code').textContent = '{{ __('messages.enter_postal_code_error_message') }}';
        } else if (post_code.length !== 7 || !/^\d{7}$/.test(post_code)) {
            isValid = false;
            document.getElementById('error-post_code').textContent = '{{ __('messages.valid_postal_code_error_message') }}';
        }
    
        if (!prefectures || prefectures === '{{ __('messages.choose_prefecture') }}') {
            isValid = false;
            document.getElementById('error-prefectures').textContent = '{{ __('messages.choose_prefecture_error_message') }}';
        }
    
        if (!city) {
            isValid = false;
            document.getElementById('error-city').textContent = '{{ __('messages.enter_city_error_message') }}';
        } else if (city.length > 255) {
            isValid = false;
            document.getElementById('error-city').textContent = '{{ __('messages.valid_city_error_message') }}';
        }
    
        if (!chome) {
            isValid = false;
            document.getElementById('error-chome').textContent = '{{ __('messages.enter_chome_error_message') }}';
        } else if (chome.length > 255) {
            isValid = false;
            document.getElementById('error-chome').textContent = '{{ __('messages.valid_chome_error_message') }}';
        }
    
        if (!building) {
            isValid = false;
            document.getElementById('error-building').textContent = '{{ __('messages.enter_building_error_message') }}';
        } else if (building.length > 255) {
            isValid = false;
            document.getElementById('error-building').textContent = '{{ __('messages.valid_building_error_message') }}';
        }
    
        if (!roomno) {
            isValid = false;
            document.getElementById('error-roomno').textContent = '{{ __('messages.enter_roomno_error_message') }}';
        } else if (roomno.length > 255) {
            isValid = false;
            document.getElementById('error-roomno').textContent = '{{ __('messages.valid_roomno_error_message') }}';
        }
    
        if (!phone) {
            isValid = false;
            document.getElementById('error-phone').textContent = '{{ __('messages.enter_phone_error_message') }}';
        } else if (phone.length > 255) {
            isValid = false;
            document.getElementById('error-phone').textContent = '{{ __('messages.valid_phone_error_message') }}';
        }
    
        if (!place || place === '{{ __('messages.choose_place') }}') {
            isValid = false;
            document.getElementById('error-place').textContent = '{{ __('messages.choose_place_error_message') }}';
        }
    
        if (isValid) {
        // Show confirmation modal
            const confirmModal = new bootstrap.Modal(document.getElementById('confirmToAdd'));
            confirmModal.show();

            // Handle form submission within the confirmation modal
            document.getElementById('confirmYes').addEventListener('click', function() {
                document.getElementById('address-form').submit();
            });
        }
    }
</script>
<script>
    function validateEditForm(id) {
        let isValid = true;
    
        const name = document.getElementById(`name-${id}`).value.trim();
        const post_code = document.getElementById(`post_code-${id}`).value.trim();
        const prefectures = document.getElementById(`prefectures-${id}`).value;
        const city = document.getElementById(`city-${id}`).value.trim();
        const chome = document.getElementById(`chome-${id}`).value.trim();
        const building = document.getElementById(`building-${id}`).value.trim();
        const roomno = document.getElementById(`roomno-${id}`).value.trim();
        const phone = document.getElementById(`phone-${id}`).value.trim();
        const place = document.getElementById(`place-${id}`).value;
    
        // Clear previous error messages
        document.querySelectorAll(`#edit-form-${id} .error`).forEach(el => el.textContent = '');
    
        if (!name) {
            isValid = false;
            document.getElementById(`error-name-${id}`).textContent = '{{ __('messages.enter_name_error_message') }}';
        } else if (name.length > 255) {
            isValid = false;
            document.getElementById(`error-name-${id}`).textContent = '{{ __('messages.valid_name_error_message') }}';
        }
    
        if (!post_code) {
            isValid = false;
            document.getElementById(`error-post_code-${id}`).textContent = '{{ __('messages.enter_postal_code_error_message') }}';
        } else if (post_code.length !== 7 || !/^\d{7}$/.test(post_code)) {
            isValid = false;
            document.getElementById(`error-post_code-${id}`).textContent = '{{ __('messages.valid_postal_code_error_message') }}';
        }
    
        if (!prefectures || prefectures === '{{ __('messages.choose_prefecture') }}') {
            isValid = false;
            document.getElementById(`error-prefectures-${id}`).textContent = '{{ __('messages.choose_prefecture_error_message') }}';
        }
    
        if (!city) {
            isValid = false;
            document.getElementById(`error-city-${id}`).textContent = '{{ __('messages.enter_city_error_message') }}';
        } else if (city.length > 255) {
            isValid = false;
            document.getElementById(`error-city-${id}`).textContent = '{{ __('messages.valid_city_error_message') }}';
        }
    
        if (!chome) {
            isValid = false;
            document.getElementById(`error-chome-${id}`).textContent = '{{ __('messages.enter_chome_error_message') }}';
        } else if (chome.length > 255) {
            isValid = false;
            document.getElementById(`error-chome-${id}`).textContent = '{{ __('messages.valid_chome_error_message') }}';
        }
    
        if (!building) {
            isValid = false;
            document.getElementById(`error-building-${id}`).textContent = '{{ __('messages.enter_building_error_message') }}';
        } else if (building.length > 255) {
            isValid = false;
            document.getElementById(`error-building-${id}`).textContent = '{{ __('messages.valid_building_error_message') }}';
        }
    
        if (!roomno) {
            isValid = false;
            document.getElementById(`error-roomno-${id}`).textContent = '{{ __('messages.enter_roomno_error_message') }}';
        } else if (roomno.length > 255) {
            isValid = false;
            document.getElementById(`error-roomno-${id}`).textContent = '{{ __('messages.valid_roomno_error_message') }}';
        }

        if (!phone) {
            isValid = false;
            document.getElementById(`error-phone-${id}`).textContent = '{{ __('messages.enter_phone_error_message') }}';
        } else if (phone.length > 255) {
            isValid = false;
            document.getElementById(`error-phone-${id}`).textContent = '{{ __('messages.valid_phone_error_message') }}';
        }

        if (!place || place === '{{ __('messages.choose_place') }}') {
            isValid = false;
            document.getElementById(`error-place-${id}`).textContent = '{{ __('messages.choose_place_error_message') }}';
        }

        if (isValid) {
            const confirmModal = new bootstrap.Modal(document.getElementById('confirmEdit' + id));
            confirmModal.show();
        }
    }
    function submitEditForm(id) {
        document.getElementById('edit-form-' + id).submit();
    }
</script>