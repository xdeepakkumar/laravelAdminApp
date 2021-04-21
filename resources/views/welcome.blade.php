<!DOCTYPE HTML>
<html>

<head>
    <title>Optin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('dashboard/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />

    <!-- Custom CSS -->
    <link href="{{asset('dashboard/css/style.css')}}" rel='stylesheet' type='text/css' />

    <!-- font-awesome icons CSS -->
    <link href="{{asset('dashboard/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome icons CSS -->

    <!-- side nav css file -->
    <link href='{{asset('dashboard/css/SidebarNav.min.css')}}' media='all' rel='stylesheet' type='text/css' />
    <!-- side nav css file -->

    <!-- js-->
    <script src="{{asset('dashboard/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('dashboard/js/modernizr.custom.js')}}"></script>

    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext"
        rel="stylesheet">
    <!--//webfonts-->

    <!-- Metis Menu -->
    <script src="{{asset('dashboard/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('dashboard/js/custom.js')}}"></script>
    <link href="{{asset('dashboard/css/custom.css')}}" rel="stylesheet">
    <!--//Metis Menu -->
    <style>
        #chartdiv {
            width: 100%;
            height: 295px;
        }
    </style>
    <!--pie-chart -->
    <!-- index page sales reviews visitors pie chart -->
    <script src="{{asset('dashboard/js/pie-chart.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
                $('#demo-pie-1').pieChart({
                    barColor: '#2dde98',
                    trackColor: '#eee',
                    lineCap: 'round',
                    lineWidth: 8,
                    onStep: function (from, to, percent) {
                        $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                    }
                });
    
                $('#demo-pie-2').pieChart({
                    barColor: '#8e43e7',
                    trackColor: '#eee',
                    lineCap: 'butt',
                    lineWidth: 8,
                    onStep: function (from, to, percent) {
                        $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                    }
                });
    
                $('#demo-pie-3').pieChart({
                    barColor: '#ffc168',
                    trackColor: '#eee',
                    lineCap: 'square',
                    lineWidth: 8,
                    onStep: function (from, to, percent) {
                        $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                    }
                });
    
               
            });
    
    </script>
    <!-- //pie-chart -->
    <!-- index page sales reviews visitors pie chart -->

    <!-- requried-jsfiles-for owl -->
    <link href="{{asset('dashboard/css/owl.carousel.css')}}" rel="stylesheet">
    <script src="{{asset('dashboard/js/owl.carousel.js')}}"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                items : 3,
                lazyLoad : true,
                autoPlay : true,
                pagination : true,
                nav:true,
            });
        });
    </script>
    <!-- //requried-jsfiles-for owl -->
</head>

<body>
    
</body>

</html>