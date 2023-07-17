<!--begin::Aside-->
<div class="aside aside-left  aside-fixed  d-flex flex-column flex-row-auto" id="kt_aside">
    <!--begin::Brand-->
    <div class="brand flex-column-auto " id="kt_brand">
        <!--begin::Logo-->
        <a href="" class="brand-logo">
            <h2>Admin-Panel</h2>
        </a>
        <!--end::Logo-->
        <!--begin::Toggle-->
        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
            <span class="svg-icon svg-icon svg-icon-xl">
                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg--><svg
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path
                            d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                            fill="#000000" fill-rule="nonzero"
                            transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) " />
                        <path
                            d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                            fill="#000000" fill-rule="nonzero" opacity="0.3"
                            transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) " />
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span> </button>
        <!--end::Toolbar-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <!--begin::Menu Container-->
        <div id="kt_aside_menu" class="aside-menu my-4 " data-menu-vertical="1" data-menu-scroll="1"
            data-menu-dropdown-timeout="500">
            <!--begin::Menu Nav-->
            @if(auth()->user()->user_type == 'Admin')
            <ul class="menu-nav ">
                <li class="menu-item {{ (request()->is('admin/dashboard')) ? 'menu-item-active' : '' }}"
                    aria-haspopup="true">
                    <a href="{{route('admin.dashboard')}}" class="menu-link ">
                        <span class="svg-icon menu-icon">
                            <en class="la la-dashboard"></en>
                        </span><span class="menu-text">Dashboard</span>
                    </a>
                </li>
                <li class="menu-item  menu-item-submenu {{ (request()->is('admin/about/*')) ? 'menu-item-open' : '' }}"
                    menu-item-open aria-haspopup="true" data-menu-toggle="hover"><a href="javascript:;"
                        class="menu-link menu-toggle"><span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z"
                                        fill="#000000" fill-rule="nonzero"
                                        transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000) " />
                                    <path
                                        d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z"
                                        fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span><span class="menu-text">About</span><i class="menu-arrow"></i></a>
                    <div class="menu-submenu "><i class="menu-arrow"></i>
                        <ul class="menu-subnav">

                            <li class="menu-item {{ (request()->is('admin/about/college*')) ? 'menu-item-active' : '' }}"
                                aria-haspopup="true">
                                <a href="{{route('college.index')}}" class="menu-link ">
                                    <en class="menu-bullet menu-bullet-dot"><span></span></en><span class="menu-text">
                                       About College</span>
                                </a>
                            </li>
                            <li class="menu-item {{ (request()->is('admin/about/mission_vission*')) ? 'menu-item-active' : '' }}"
                                aria-haspopup="true">
                                <a href="{{route('mission_vission.index')}}" class="menu-link ">
                                    <en class="menu-bullet menu-bullet-dot"><span></span></en><span class="menu-text">
                                    Vision Mission & Objectives</span>
                                </a>
                            </li>
                            <li class="menu-item {{ (request()->is('admin/about/manager-message*')) ? 'menu-item-active' : '' }}"
                                aria-haspopup="true">
                                <a href="{{route('manager-message.index')}}" class="menu-link ">
                                    <en class="menu-bullet menu-bullet-dot"><span></span></en><span class="menu-text">
                                    Manager Message</span>
                                </a>
                            </li>
                            <li class="menu-item {{ (request()->is('admin/about/director-message*')) ? 'menu-item-active' : '' }}"
                                aria-haspopup="true">
                                <a href="{{route('director-message.index')}}" class="menu-link ">
                                    <en class="menu-bullet menu-bullet-dot"><span></span></en><span class="menu-text">
                                    Director Message</span>
                                </a>
                            </li>
                            <li class="menu-item {{ (request()->is('admin/about/hod-message*')) ? 'menu-item-active' : '' }}"
                                aria-haspopup="true">
                                <a href="{{route('hod-message.index')}}" class="menu-link ">
                                    <en class="menu-bullet menu-bullet-dot"><span></span></en><span class="menu-text">
                                    Hod Message</span>
                                </a>
                            </li>
                            <li class="menu-item {{ (request()->is('admin/about/advisor-message*')) ? 'menu-item-active' : '' }}"
                                aria-haspopup="true">
                                <a href="{{route('advisor-message.index')}}" class="menu-link ">
                                    <en class="menu-bullet menu-bullet-dot"><span></span></en><span class="menu-text">
                                    Advisor Message</span>
                                </a>
                            </li>
                          
                        </ul>
                    </div>
                </li>
                <li class="menu-item {{ (request()->is('admin/manage-academics*')) ? 'menu-item-active' : '' }}"
                    aria-haspopup="true">
                    <a href="{{route('manage-academics.index')}}" class="menu-link ">
                        <span class="svg-icon menu-icon">
                            <en class="la la-newspaper"></en>
                        </span>
                        <span class="menu-text">Manage Academics</span>
                    </a>
                </li>
                <li class="menu-item {{ (request()->is('admin/manage-event*')) ? 'menu-item-active' : '' }}"
                    aria-haspopup="true">
                    <a href="{{route('manage-event.index')}}" class="menu-link ">
                        <span class="svg-icon menu-icon">
                            <en class="la la-newspaper"></en>
                        </span>
                        <span class="menu-text">Manage Event</span>
                    </a>
                </li>
                <li class="menu-item {{ (request()->is('admin/faculty*')) ? 'menu-item-active' : '' }}"
                    aria-haspopup="true">
                    <a href="{{route('faculty.index')}}" class="menu-link ">
                        <span class="svg-icon menu-icon">
                            <en class="fas fa-users"></en>
                        </span>
                        <span class="menu-text">Manage Faculties</span>
                    </a>
                </li>
                <li class="menu-item {{ (request()->is('admin/banners*')) ? 'menu-item-active' : '' }}"
                    aria-haspopup="true">
                    <a href="{{route('banners.index')}}" class="menu-link ">
                        <span class="svg-icon menu-icon">
                            <en class="fas fa-flag"></en>
                        </span>
                        <span class="menu-text">Manage Banner</span>
                    </a>
                </li>
                <li class="menu-item {{ (request()->is('admin/department*')) ? 'menu-item-active' : '' }}"
                    aria-haspopup="true">
                    <a href="{{route('department.index')}}" class="menu-link ">
                        <span class="svg-icon menu-icon">
                            <en class="la la-building"></en>
                        </span>
                        <span class="menu-text">Manage Department</span>
                    </a>
                </li>
                <li class="menu-item {{ (request()->is('admin/StudentServices*')) ? 'menu-item-active' : '' }}"
                    aria-haspopup="true">
                    <a href="{{route('StudentServices.index')}}" class="menu-link ">
                        <span class="svg-icon menu-icon">
                            <en class="la la-building"></en>
                        </span>
                        <span class="menu-text">Student Services</span>
                    </a>
                </li>
                <li class="menu-item {{ (request()->is('admin/gallery*')) ? 'menu-item-active' : '' }}"
                    aria-haspopup="true">
                    <a href="{{route('gallery.index')}}" class="menu-link ">
                        <span class="svg-icon menu-icon">
                            <en class="la la-image"></en>
                        </span>
                        <span class="menu-text">Manage Gallery</span>
                    </a>
                </li>
                <li class="menu-item {{ (request()->is('admin/videoData*')) ? 'menu-item-active' : '' }}"
                    aria-haspopup="true">
                    <a href="{{route('videoData.index')}}" class="menu-link ">
                        <span class="svg-icon menu-icon">
                            <en class="la la-video-camera"></en>
                        </span>
                        <span class="menu-text">Manage Gallery Video</span>
                    </a>
                </li>
                <li class="menu-item  menu-item-submenu {{ (request()->is('admin/placement/*')) ? 'menu-item-open' : '' }}" ḍ
     menu-item-open aria-haspopup="true" data-menu-toggle="hover"><a href="javascript:;"
         class="menu-link menu-toggle"><span class="svg-icon menu-icon">
             <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg--><svg
                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                 height="24px" viewBox="0 0 24 24" version="1.1">
                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                     <rect x="0" y="0" width="24" height="24" />
                     <path
                         d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z"
                         fill="#000000" fill-rule="nonzero"
                         transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000) " />
                     <path
                         d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z"
                         fill="#000000" opacity="0.3" />
                 </g>
             </svg>
             <!--end::Svg Icon-->
         </span><span class="menu-text">Placement</span><i class="menu-arrow"></i></a>
     <div class="menu-submenu "><i class="menu-arrow"></i>
         <ul class="menu-subnav">

             <li class="menu-item {{ (request()->is('admin/placement/add-member*')) ? 'menu-item-active' : '' }}"
                 aria-haspopup="true">
                 <a href="{{route('add-member.index')}}" class="menu-link ">
                     <en class="menu-bullet menu-bullet-dot"><span></span></en><span class="menu-text">
                         Add Member</span>
                 </a>
             </li>
             <li class="menu-item {{ (request()->is('admin/placement/add-Recruiter*')) ? 'menu-item-active' : '' }}"
                 aria-haspopup="true">
                 <a href="{{route('add-Recruiter.index')}}" class="menu-link ">
                     <en class="menu-bullet menu-bullet-dot"><span></span></en><span class="menu-text">
                         Add Recruiters</span>
                 </a>
             </li>
         </ul>
     </div>
 </li>
                
                <li class="menu-item  menu-item-submenu {{ (request()->is('admin/setting/*')) ? 'menu-item-open' : '' }}"
                    menu-item-open aria-haspopup="true" data-menu-toggle="hover"><a href="javascript:;"
                        class="menu-link menu-toggle"><span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z"
                                        fill="#000000" fill-rule="nonzero"
                                        transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000) " />
                                    <path
                                        d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z"
                                        fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span><span class="menu-text">Setting</span><i class="menu-arrow"></i></a>
                    <div class="menu-submenu "><i class="menu-arrow"></i>
                        <ul class="menu-subnav">

                            <li class="menu-item {{ (request()->is('admin/setting/profile*')) ? 'menu-item-active' : '' }}"
                                aria-haspopup="true"><a href="{{route('setting.profile')}}" class="menu-link ">
                                    <en class="menu-bullet menu-bullet-dot"><span></span></en><span
                                        class="menu-text">Profile</span>
                                </a></li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item {{ (request()->is('logout*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{route('logout')}}" class="menu-link ">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                        fill="#000000" fill-rule="nonzero" />
                                    <path
                                        d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                        fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span><span class="menu-text">Logout</span>
                    </a>
                </li>
            </ul>
            @elseif(auth()->user()->user_type == 'Student')
            <ul class="menu-nav ">
                <li class="menu-item  {{ (request()->is('dashboard')) ? 'menu-item-active' : '' }}"
                    aria-haspopup="true">
                    <a href="{{route('admin.dashboard')}}" class="menu-link ">
                        <span class="svg-icon menu-icon">
                            <en class="la la-dashboard"></en>
                        </span><span class="menu-text">Dashboard</span>
                    </a>
                </li>
                <li class="menu-item {{ (request()->is('logout*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{route('logout')}}" class="menu-link ">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                        fill="#000000" fill-rule="nonzero" />
                                    <path
                                        d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                        fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span><span class="menu-text">Logout</span>
                    </a>
                </li>

            </ul>
            @elseif(auth()->user()->user_type == 'Faculty')
            <ul class="menu-nav ">
                <li class="menu-item {{ (request()->is('/')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{route('faculty.dashboard')}}" class="menu-link ">
                        <span class="svg-icon menu-icon">
                            <en class="la la-dashboard"></en>
                        </span><span class="menu-text">Dashboard</span>
                    </a>
                </li>
                <li class="menu-item {{ (request()->is('logout*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{route('logout')}}" class="menu-link ">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                        fill="#000000" fill-rule="nonzero" />
                                    <path
                                        d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                        fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span><span class="menu-text">Logout</span>
                    </a>
                </li>


            </ul>
            @endif
            <!--end::Menu Nav-->
        </div>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</div>
<!--end::Aside-->

<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
    <!--begin::Header-->
    <div id="kt_header" class="header  header-fixed ">
        <!--begin::Container-->
        <div class=" container-fluid  d-flex align-items-stretch justify-content-between">
            <!--begin::Header Menu Wrapper-->
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                <!--begin::Header Menu-->
                <div id="kt_header_menu" class="header-menu header-menu-mobile  header-menu-layout-default ">

                </div>
                <!--end::Header Menu-->
            </div>
            <!--end::Header Menu Wrapper-->

            <!--begin::Topbar-->
            <div class="topbar">
                <!--begin::User-->
                <div class="topbar-item">
                    <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                        id="kt_quick_user_toggle">
                        <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                        <span
                            class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{auth()->user()->name}}</span>
                    </div>
                </div>
                <!--end::User-->
            </div>
            <!--end::Topbar-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Header-->

    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
            <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-2">

                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                        {{auth()->user()->user_type}} </h5>
                    <!--end::Page Title-->
                    <!--begin::Actions-->

                    <!--end::Actions-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->