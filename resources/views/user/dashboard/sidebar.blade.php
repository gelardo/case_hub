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
{{--                user--}}
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
                <a href="{{url('user/dashboard')}}">
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashboard</p>
                </a>
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

                            <a href="{{url('user/case_main/index')}}">
                                <span class="sidebar-mini-icon">C</span>
                                <span class="sidebar-normal"> Cases List </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('user/case_issues_log/index')}}">
                                <span class="sidebar-mini-icon">CI</span>
                                <span class="sidebar-normal"> Case Issue </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('user/case_proceeding/index')}}">
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
                            <a href="{{url('user/billing/index')}}">
                                <span class="sidebar-mini-icon">B</span>
                                <span class="sidebar-normal"> Billing </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>

