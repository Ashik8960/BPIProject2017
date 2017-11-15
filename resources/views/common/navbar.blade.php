
<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <span class="admin-header">B.P.I Staff's CMS</span>
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="{{url('/dashboard')}}">Admin: {{Auth::user()->first_name}} </a>
    </div>
    <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="{{url('/logOut')}}" class="btn btn-danger square-btn-adjust">Logout</a> </div>
</nav>
<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="{{url(Auth::user()->photo)}}" class="user-image img-responsive"/>
            </li>


            <li class="@if($uril=='dashboard') active-m @endif">
                <a  href="{{url('/dashboard')}}"><i class="fa fa-search fa-2x"></i>Find Data</a>
            </li>
            <li class="@if($uril=='softList') active-m @endif">
                <a  href="{{url('/softList')}}"><i class="fa fa-list-ol fa-2x"></i>Soft List all</a>
            </li>
            <li class="@if($uril=='add') active-m @endif">
                <a  href="{{url('/add')}}"><i class="fa fa-plus-square fa-2x"></i>Add Staff Info</a>
            </li>


            <li>
                <a href="#"><i class="fa fa-user fa-2x"></i>Current Staff<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="@if($uril=='currentPrinciple') active-m @endif">
                        <a href="{{url('/currentPrinciple')}}">Current Principle</a>
                    </li>
                    <li class="@if($uril=='currentViceprinciple') active-m @endif">
                        <a href="{{url('/currentViceprinciple')}}">Current Vice Principle</a>
                    </li>
                    <li class="@if($uril=='currentChiefinstructor') active-m @endif">
                        <a href="{{url('/currentChiefinstructor')}}">Current Chief Instructor</a>
                    </li>
                    <li class="@if($uril=='currentCraftinstructor') active-m @endif">
                        <a href="{{url('/currentCraftinstructor')}}">Current Craft Instructor</a>
                    </li>
                    <li class="@if($uril=='currentInstructor') active-m @endif">
                        <a href="{{url('/currentInstructor')}}">Current Instructor</a>
                    </li>
                    <li class="@if($uril=='currentJuniorinstructor') active-m @endif">
                        <a href="{{url('/currentJuniorinstructor')}}">Current junior Instructor</a>
                    </li>
                    <li class="@if($uril=='currentOfficestaff') active-m @endif">
                        <a href="{{url('/currentOfficestaff')}}">Current Office staff</a>
                    </li>


                </ul>

            </li>
            <li>
                <a href="#"><i class="fa fa-users fa-2x"></i>Ex Staff<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li class="@if($uril=='exPrinciple') active-m @endif">
                            <a href="{{url('/exPrinciple')}}">Ex Principle</a>
                        </li>
                        <li class="@if($uril=='exViceprinciple') active-m @endif">
                            <a href="{{url('/exViceprinciple')}}">Ex Vice Principle</a>
                        </li>
                        <li class="@if($uril=='exChiefinstructor') active-m @endif">
                            <a href="{{url('/exChiefinstructor')}}">Ex Chief Instructor</a>
                        </li>
                        <li class="@if($uril=='exCraftinstructor') active-m @endif">
                            <a href="{{url('/exCraftinstructor')}}">Ex Craft Instructor</a>
                        </li>
                        <li class="@if($uril=='exInstructor') active-m @endif">
                            <a href="{{url('/exInstructor')}}">Ex Instructor</a>
                        </li>
                        <li class="@if($uril=='exJuniorinstructor') active-m @endif">
                            <a href="{{url('/exJuniorinstructor')}}">Ex junior Instructor</a>
                        </li>
                        <li class="@if($uril=='exOfficestaff') active-m @endif">
                            <a href="{{url('/exOfficestaff')}}">Ex Office staff</a>
                        </li>




                    </ul>

            </li>


            <li>
                <a href="#"><i class="fa fa-cogs fa-2x"></i>Admin Panel<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="@if($uril=='addAdmin') active-m @endif">
                        <a href="{{url('/addAdmin')}}">Add new Admin</a>
                    </li>
                    <li class="@if($uril=='adminData') active-m @endif">
                        <a href="{{url('/adminData')}}">All Admin Info</a>
                    </li>







                </ul>

            </li>








        </ul>

    </div>

</nav>