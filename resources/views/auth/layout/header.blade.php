<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Task</title>

    <!-- Main Styles -->
    <link rel="stylesheet" href="{{ asset('public/assets/styles/style.min.css') }}">

    <!-- Material Design Icon -->
    <link rel="stylesheet" href="{{ asset('public/assets/fonts/material-design/css/materialdesignicons.css') }}">

    <!-- mCustomScrollbar -->
    <link rel="stylesheet" href="{{ asset('public/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css') }}">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="{{ asset('public/assets/plugin/waves/waves.min.css') }}">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="{{ asset('public/assets/plugin/sweet-alert/sweetalert.css') }}">

    <!-- Percent Circle -->
    <link rel="stylesheet" href="{{ asset('public/assets/plugin/percircle/css/percircle.css') }}">

    <!-- Chartist Chart -->
    <link rel="stylesheet" href="{{ asset('public/assets/plugin/chart/chartist/chartist.min.css') }}">

    <!-- FullCalendar -->
    <link rel="stylesheet" href="{{ asset('public/assets/plugin/fullcalendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/plugin/fullcalendar/fullcalendar.print.css') }}" media='print'>

    <!-- Color Picker -->
    <link rel="stylesheet" href="{{ asset('public/assets/color-switcher/color-switcher.min.css') }}">

    <!-- data table -->
    <link rel="stylesheet" href="{{ asset('public/assets/plugin/datatables/media/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('public/assets/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css') }}">
</head>

<body>
<div class="main-menu">
	<header class="header">
		<!-- <a href="#" class="logo">Matrix Bricks</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button> -->
		


	</header>
	<!-- /.header -->
	<div class="content">

		<div class="navigation">
			<ul class="menu js__accordion">
				<!-- <li>
					<a class="waves-effect" href="#"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Dashboard</span></a>
				</li> -->
				<li class="{{ Route::currentRouteName() == 'teacherShow' || Route::currentRouteName() == 'teacheradd' || Route::currentRouteName() == 'teacheredit'
                || Route::currentRouteName() == 'studentShow' || Route::currentRouteName() == 'studentadd' || Route::currentRouteName() == 'studentedit'  ? 'current' : '' }}">
                        <a class="waves-effect parent-item js__control" href="#">
                            <i class="menu-icon mdi mdi-home"></i><span>Home</span>
                            <span class="menu-arrow fa fa-angle-down"></span>
                        </a>
                        <ul class="sub-menu js__content">
						<li><a href="{{ route('teacherShow') }}"style="{{ Route::currentRouteName() == 'teacherShow' ? 'color: orange;' : '' }}">Teacher</a></li>
                        <li><a href="{{ route('studentShow') }}"style="{{ Route::currentRouteName() == 'studentShow' ? 'color: orange;' : '' }}">Student</a></li>

                        </ul>
                    </li>
                    
				
			</ul>
			<!-- /.menu js__accordion -->
		</div>
		<!-- /.navigation -->
	</div>
	<!-- /.content -->
</div>
<!-- /.main-menu -->

<div class="fixed-navbar" style="
    color: red;">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Admin-Dashboard</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		
		<div class="ico-item">
			<img src="{{ asset('public/assets/images/power-on.png') }}" alt="" class="ico-img">
			<ul class="sub-ico-item">
				
				<li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                </li>
			</ul>
			<!-- /.sub-ico-item -->
		</div>
		<!-- /.ico-item -->
	</div>
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->




<div id="wrapper">
	<div class="main-content">
		<div class="row">
			
        @yield('content')
		</div>
		<!-- /.row -->		
		<!-- <footer class="footer">
			<ul class="list-inline" style="margin-left: 289px;">
				<li> © <?php echo date("Y"); ?>.</li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Terms</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</footer> -->
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{asset ('public/assets/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('public/assets/scripts/modernizr.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugin/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugin/nprogress/nprogress.js') }}"></script>
    <script src="{{ asset('public/assets/plugin/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugin/waves/waves.min.js') }}"></script>
    <!-- Full Screen Plugin -->
    <script src="{{ asset('public/assets/plugin/fullscreen/jquery.fullscreen-min.js') }}"></script>

    <!-- Google Chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- chart.js Chart -->
    <script src="{{ asset('public/assets/plugin/chart/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/scripts/chart.chartjs.init.min.js') }}"></script>

    <!-- FullCalendar -->
    <script src="{{ asset('public/assets/plugin/moment/moment.js') }}"></script>
    <script src="{{ asset('public/assets/plugin/fullcalendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('public/assets/scripts/fullcalendar.init.js') }}"></script>

    <!-- Sparkline Chart -->
    <script src="{{ asset('public/assets/plugin/chart/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('public/assets/scripts/chart.sparkline.init.min.js') }}"></script>

    <script src="{{ asset('public/assets/scripts/main.min.js') }}"></script>
    <script src="{{ asset('public/assets/color-switcher/color-switcher.min.js') }}"></script>

    <!-- data table -->
    <script src="{{ asset('public/assets/plugin/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugin/datatables/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}">
    </script>
    <script src="{{ asset('public/assets/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js') }}">
    </script>
    <script src="{{ asset('public/assets/scripts/datatables.demo.min.js') }}"></script>

    <!-- ck editor -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-s6sCJ0EXs6KwQFB6Pv7BlK39V9yzwbT9lCjyBjy/CwI=" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>


    
    <script type="text/javascript">
        function showDiv(select) {
            if (select.value == 1) {
                document.getElementById('hidden_div').style.display = "block";
            } else {
                document.getElementById('hidden_div').style.display = "none";
            }
        }
    </script>
    <script>
        $(() => {
            CKEDITOR.config.toolbar = [{
                    name: 'clipboard',
                    groups: ['clipboard', 'undo'],
                    items: ['Undo', 'Redo']
                },
                {
                    name: 'links',
                    items: ['Link', 'Unlink']
                },
                {
                    name: 'insert',
                    items: ['Image', 'Table']
                },
                {
                    name: 'basicstyles',
                    groups: ['basicstyles', 'cleanup'],
                    items: ['Bold', 'Italic', 'Underline']
                },
                {
                    name: 'paragraph',
                    groups: ['list', 'indent', 'blocks', 'align', 'bidi'],
                    items: ['NumberedList', 'BulletedList', '-', 'JustifyLeft', 'JustifyCenter',
                        'JustifyRight',
                        'JustifyBlock'
                    ]
                },
                {
                    name: 'styles',
                    items: ['FontSize']
                },
                {
                    name: 'colors',
                    items: ['TextColor']
                },
                {
                    name: 'others',
                    items: ['-']
                },
                {
                    name: 'document',
                    items: ['Source']
                },
            ];
            CKEDITOR.on('dialogDefinition', function (ev) {
                // Take the dialog name and its definition from the event data.
                var dialogName = ev.data.name;
                var dialogDefinition = ev.data.definition;
                if (dialogName == 'link') {
                    // Get a reference to the "Link Info" tab.
                    var targetTab = dialogDefinition.getContents('target');
                    // Set the default value for the URL field.
                    //         var urlField = infoTab.get( 'url' );
                    //         urlField[ 'default' ] = 'www.example.com';

                    //         var linkTpyeField = infoTab.get('linkType');
                    //         linkTpyeField['items'] = [["URL", 'url']];
                    // 重写target 效果
                    var targetField = targetTab.elements[0].children[0];

                    targetField['items'] = [
                        ["New Window (_blank)", "_blank"]
                    ];
                    targetField['default'] = '_blank';
                    // 隐藏advance
                    var advancedtab = dialogDefinition.getContents("advanced");
                    advancedtab['hidden'] = true;
                    //
                    //
                    //

                } else if (dialogName === 'image') {
                    var imageInfo = dialogDefinition.getContents('info');
                    console.log('ccc', imageInfo)
                }
            });
            document.querySelectorAll('.editor').forEach((element) => {
                CKEDITOR.replace(element);
            });
        });
    </script>

</body>
</html>