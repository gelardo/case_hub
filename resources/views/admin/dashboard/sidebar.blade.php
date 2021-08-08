<div class="sidebar" data-color="info" data-active-color="danger">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color=" default | primary | info | success | warning | danger |"
  -->
    <div class="logo">
        <a href="{{url('/')}}" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="../assets/img/logo-small.png">
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
                <a href="../examples/dashboard.html">
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#pagesExamples">
                    <i class="nc-icon nc-book-bookmark"></i>
                    <p>
                        Users <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="pagesExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{url('admin/user/index')}}">
                                <span class="sidebar-mini-icon">T</span>
                                <span class="sidebar-normal"> List Users </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#componentsExamples">
                    <i class="nc-icon nc-layout-11"></i>
                    <p>
                        Settings <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="componentsExamples">
                    <ul class="nav">
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
                            <a href="{{url('admin/program/index')}}">
                                <span class="sidebar-mini-icon">P</span>
                                <span class="sidebar-normal"> Program </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/district/index')}}">
                                <span class="sidebar-mini-icon">D</span>
                                <span class="sidebar-normal"> District </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/court/index')}}">
                                <span class="sidebar-mini-icon">C</span>
                                <span class="sidebar-normal"> Court </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/case_status/index')}}">
                                <span class="sidebar-mini-icon">CS</span>
                                <span class="sidebar-normal"> Case Status </span>
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
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#formsExamples">
                    <i class="nc-icon nc-ruler-pencil"></i>
                    <p>
                        Forms <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="formsExamples">
                    <ul class="nav">
                        <li>
                            <a href="../examples/forms/regular.html">
                                <span class="sidebar-mini-icon">RF</span>
                                <span class="sidebar-normal"> Regular Forms </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/forms/extended.html">
                                <span class="sidebar-mini-icon">EF</span>
                                <span class="sidebar-normal"> Extended Forms </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/forms/validation.html">
                                <span class="sidebar-mini-icon">V</span>
                                <span class="sidebar-normal"> Validation Forms </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/forms/wizard.html">
                                <span class="sidebar-mini-icon">W</span>
                                <span class="sidebar-normal"> Wizard </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#tablesExamples">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>
                        Tables <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="tablesExamples">
                    <ul class="nav">
                        <li>
                            <a href="../examples/tables/regular.html">
                                <span class="sidebar-mini-icon">RT</span>
                                <span class="sidebar-normal"> Regular Tables </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/tables/extended.html">
                                <span class="sidebar-mini-icon">ET</span>
                                <span class="sidebar-normal"> Extended Tables </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/tables/datatables.net.html">
                                <span class="sidebar-mini-icon">DT</span>
                                <span class="sidebar-normal"> DataTables.net </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#mapsExamples">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>
                        Maps <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="mapsExamples">
                    <ul class="nav">
                        <li>
                            <a href="../examples/maps/google.html">
                                <span class="sidebar-mini-icon">GM</span>
                                <span class="sidebar-normal"> Google Maps </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/maps/fullscreen.html">
                                <span class="sidebar-mini-icon">FSM</span>
                                <span class="sidebar-normal"> Full Screen Map </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/maps/vector.html">
                                <span class="sidebar-mini-icon">VM</span>
                                <span class="sidebar-normal"> Vector Map </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="../examples/widgets.html">
                    <i class="nc-icon nc-box"></i>
                    <p>Widgets</p>
                </a>
            </li>
            <li>
                <a href="../examples/charts.html">
                    <i class="nc-icon nc-chart-bar-32"></i>
                    <p>Charts</p>
                </a>
            </li>
            <li>
                <a href="../examples/calendar.html">
                    <i class="nc-icon nc-calendar-60"></i>
                    <p>Calendar</p>
                </a>
            </li>
        </ul>
    </div>
</div>
