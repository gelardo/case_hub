<div class="sidebar" data-color="info" data-active-color="danger">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color=" default | primary | info | success | warning | danger |"
  -->
    <div class="logo">
        <a href="{{url('/')}}" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{asset('assets/img/logo-small.png')}}">
            </div>
            <!-- <p>CT</p> -->
        </a>
        <a href="{{url('/')}}" class="simple-text logo-normal">
            CaseHub
            <!-- <div class="logo-image-big">
              <img src="../assets/img/logo-big.png">
            </div> -->
        </a>
    </div>
    <div class="sidebar-wrapper">
{{--        <div class="user">--}}
{{--            <div class="photo">--}}
{{--                <img src="../assets/img/faces/ayo-ogunseinde-2.jpg" />--}}
{{--            </div>--}}
{{--            <div class="info">--}}
{{--                <a data-toggle="collapse" href="#collapseExample" class="collapsed">--}}
{{--              <span>--}}
{{--                Admin--}}
{{--                <b class="caret"></b>--}}
{{--              </span>--}}
{{--                </a>--}}
{{--                <div class="clearfix"></div>--}}
{{--                <div class="collapse" id="collapseExample">--}}
{{--                    <ul class="nav">--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                <span class="sidebar-mini-icon">MP</span>--}}
{{--                                <span class="sidebar-normal">My Profile</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                <span class="sidebar-mini-icon">EP</span>--}}
{{--                                <span class="sidebar-normal">Edit Profile</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                <span class="sidebar-mini-icon">S</span>--}}
{{--                                <span class="sidebar-normal">Settings</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <ul class="nav">
            <li class="active">
                <a href="{{url('admin/dashboard')}}">
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#pagesExamples1">
                    <i class="nc-icon nc-book-bookmark"></i>
                    <p>
                       Website Users <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="pagesExamples1">
                    <ul class="nav">
                        <li>
                            <a href="{{url('admin/user/index')}}">
                                <span class="sidebar-mini-icon">T</span>
                                <span class="sidebar-normal"> List Users </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('admin/lawyer/index')}}">
                                <span class="sidebar-mini-icon">L</span>
                                <span class="sidebar-normal"> Lawyer </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#pagesExamples2">
                    <i class="nc-icon nc-book-bookmark"></i>
                    <p>
                       DCMC Meetings <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="pagesExamples2">
                    <ul class="nav">

                        <li>
                            <a href="{{url('admin/dcmc_meeting/index')}}">
                                <span class="sidebar-mini-icon">DM</span>
                                <span class="sidebar-normal"> DCMC Meeting </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#pagesExamples3">
                    <i class="nc-icon nc-book-bookmark"></i>
                    <p>
                       Cases <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="pagesExamples3">
                    <ul class="nav">
                        <li>
                            <a href="{{url('admin/case_main/index')}}">
                                <span class="sidebar-mini-icon">C</span>
                                <span class="sidebar-normal"> Cases List </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/case_issues_log/index')}}">
                                <span class="sidebar-mini-icon">CI</span>
                                <span class="sidebar-normal"> Case Issue </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/case_proceeding/index')}}">
                                <span class="sidebar-mini-icon">CP</span>
                                <span class="sidebar-normal"> Case Proceedings </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#pagesExamples4">
                    <i class="nc-icon nc-book-bookmark"></i>
                    <p>
                       Billing <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="pagesExamples4">
                    <ul class="nav">
                        <li>
                            <a href="{{url('admin/billing/index')}}">
                                <span class="sidebar-mini-icon">B</span>
                                <span class="sidebar-normal"> Billing </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#componentsExamples5">
                    <i class="nc-icon nc-layout-11"></i>
                    <p>
                       Base Settings <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="componentsExamples5">
                    <ul class="nav">
                        <li>
                            <a href="{{url('admin/case_type/index')}}">
                                <span class="sidebar-mini-icon">CT</span>
                                <span class="sidebar-normal"> Case Type </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('admin/case_category/index')}}">
                                <span class="sidebar-mini-icon">CC</span>
                                <span class="sidebar-normal"> Case Category </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/case_nature/index')}}">
                                <span class="sidebar-mini-icon">CS</span>
                                <span class="sidebar-normal">Case Nature</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/district/index')}}">
                                <span class="sidebar-mini-icon">D</span>
                                <span class="sidebar-normal"> District </span>
                            </a>
                        </li>
                        <li>
                        <a href="{{url('admin/police_station/index')}}">
                            <span class="sidebar-mini-icon">PS</span>
                            <span class="sidebar-normal"> Police Station </span>
                        </a>
                        </li>
                        <li>
                            <a href="{{url('admin/court/index')}}">
                                <span class="sidebar-mini-icon">C</span>
                                <span class="sidebar-normal"> Court </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/court_order/index')}}">
                                <span class="sidebar-mini-icon">CO</span>
                                <span class="sidebar-normal"> Court Order </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/additional_court_order/index')}}">
                                <span class="sidebar-mini-icon">ACO</span>
                                <span class="sidebar-normal"> Additional Court Order </span>
                            </a>
                        </li>
{{--                        <li>--}}
{{--                            <a href="{{url('admin/program/index')}}">--}}
{{--                                <span class="sidebar-mini-icon">P</span>--}}
{{--                                <span class="sidebar-normal"> Program </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}


                        <li>
                            <a href="{{url('admin/case_activity_status/index')}}">
                                <span class="sidebar-mini-icon">CAS</span>
                                <span class="sidebar-normal"> Case Activity Status </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('admin/region/index')}}">
                                <span class="sidebar-mini-icon">R</span>
                                <span class="sidebar-normal"> Region </span>
                            </a>
                        </li>
                        <li>

                        <li>
                            <a href="{{url('admin/bill_type/index')}}">
                                <span class="sidebar-mini-icon">BT</span>
                                <span class="sidebar-normal"> Bill Type </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

        </ul>
    </div>
</div>
