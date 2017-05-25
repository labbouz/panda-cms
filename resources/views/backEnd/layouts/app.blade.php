<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('backEnd.layouts.head')

    @yield('style')
</head>

<body>
    @include('backEnd.layouts.preloader')

    <div id="wrapper">
        @include('backEnd.layouts.header')

        @include('backEnd.layouts.leftSidebar')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">

                @yield('content')

                @include('backEnd.layouts.rightSidebar')
            </div>
            <!-- /.container-fluid -->
            @include('backEnd.layouts.footer')
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    @include('backEnd.layouts.script')
    <!-- Custom Theme JavaScript -->
    @yield('scripts')
</body>
</html>
