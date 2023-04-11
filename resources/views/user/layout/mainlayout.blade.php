<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>UD. Sulfi Jaya &mdash; Shop</title>

        @include('user/layout/css_global')
        @yield('custom_css')
    </head>
    <body>
        <div id="app">
        <div class="main-wrapper">
            @include('user/layout/topnavbar')
            <!-- Main Content -->
            <section class="content">
                <div class="section-body">
                    @yield('content')
                    <script type="text/javascript">
                        @yield('script')
                    </script>
                </div>
            </section>
            </div> 
        </div>
        @include('user/layout/js')
        @yield('custom_script')
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        {{-- @include('sweet::alert') --}}
        @include('sweetalert::alert')
    </body>
</html>
