@include('common.header')

@include('common.navbar')




<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        @yield('content')


    </div>
    <div class="footer-area text-center">
    &copy;Copy Right Bogra Polytechnics Institute All rights Reserved <span>| Develop by Ashik</span>
</div>
    <!-- /. PAGE INNER  -->

</div>
<!-- /. PAGE WRAPPER  -->


@include('common.footer')
