@include('common.header')

@include('common.navbar')




<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        @yield('content')


    </div>
    <div class="footer-area text-center offprint">
    &copy;2017-{{date('Y')}} Bogra Polytechnic Institute All rights Reserved <span> | Developed  by Ashik khan</span>
</div>
    <!-- /. PAGE INNER  -->

</div>
<!-- /. PAGE WRAPPER  -->


@include('common.footer')
