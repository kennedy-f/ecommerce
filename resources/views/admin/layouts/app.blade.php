<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="/css/style-starter.css">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
</head>

<body class="sidebar-menu-collapsed">
    {{-- <div class="se-pre-con"></div> <!-- Animacao de loading  --> --}}
    <section>

        @include('admin/layouts/sidebar-menu')

        @include('admin/layouts/header')

        <!-- main content start -->
        <div class="main-content">
            <!-- content -->
            <div class="container-fluid content-top-gap min-vh-85 d-flex">
                <!-- // Breadc  umb -->
                <div class="row col-12">
                    @yield('breadcrumb')


                    <!-- //content -->

                        @yield('content')
                    

                </div>


            </div>

        </div>
        <!-- main content end-->
    </section>

    @include('admin/layouts/footer')

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
        <span class="fa fa-angle-up"></span>
    </button>
    <script src="https://use.fontawesome.com/releases/v5.11.2/js/all.js" data-auto-replace-svg="nest"></script>
    <script>
    // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
            } else {
            document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->


    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/jquery-1.10.2.min.js"></script>

    <!-- chart js -->
    <script src="/js/Chart.min.js"></script>
    <script src="/js/utils.js"></script>
    <!-- //chart js -->

    <!-- Different scripts of charts.  Ex.Barchart, Linechart -->
    <script src="/js/bar.js"></script>
    <script src="/js/linechart.js"></script>
    <!-- //Different scripts of charts.  Ex.Barchart, Linechart -->


    <script src="/js/jquery.nicescroll.js"></script>
    <script src="/js/scripts.js"></script>

    <!-- close script -->
    <script>
        var closebtns = document.getElementsByClassName("close-grid");
        var i;

        for (i = 0; i < closebtns.length; i++) {
            closebtns[i].addEventListener("click", function () {
            this.parentElement.style.display = 'none';
            });
        }
    </script>
    <!-- //close script -->

    <!-- disable body scroll when navbar is in active -->
    <script>
        $(function () {
            $('.sidebar-menu-collapsed').click(function () {
            $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll when navbar is in active -->

    {{-- <!-- loading-gif Js -->
    <script src="/js/modernizr.js"></script>
    <script>
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js --> --}}

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

</body>

</html>
