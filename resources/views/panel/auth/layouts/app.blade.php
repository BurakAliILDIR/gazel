<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<!--begin::Head-->
	<head>
		<meta charset="utf-8" />
		<title>{{ \Illuminate\Support\Str::upper(config('app.name')) }} - GİRİŞ YAP</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Page Custom Styles(used by this page)-->
		<link href="{{ asset('storage/panel/assets/css/pages/login/classic/login-3.css') }}" rel="stylesheet" type="text/css" />
        <!--end::Page Custom Styles-->
        <!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{ asset('storage/panel/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('storage/panel/assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('storage/panel/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles-->
        <!--begin::Layout Themes(used by all pages)-->
        <!--end::Layout Themes-->
		<link rel="shortcut icon" href="{{ asset('storage/panel/assets/media/logos/favicon.ico') }}" />
	</head>
    <!--end::Head-->
    <!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled sidebar-enabled page-loading">
		<!--begin::Main-->
            <div class="d-flex flex-column flex-root">
                  <div class="login login-3 login-signin-on d-flex flex-row-fluid" id="kt_login">
                <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid"
                     style="background-image: url({{ asset('storage/panel/assets/media/bg/bg-1.jpg') }});">
                    <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
                        <div class="d-flex flex-center mb-5">
                            <h1>{{ \Illuminate\Support\Str::upper(config('app.name')) }}</h1>
                        </div>
                        <div class="login-signin">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
		</div>
        <!--end::Main-->
        <!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = {
                "breakpoints": {"sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200},
                "colors": {
                    "theme": {
                        "base": {
                            "white": "#ffffff",
                            "primary": "#663259",
                            "secondary": "#E5EAEE",
                            "success": "#1BC5BD",
                            "info": "#8950FC",
                            "warning": "#FFA800",
                            "danger": "#F64E60",
                            "light": "#F3F6F9",
                            "dark": "#212121"
                        },
                        "light": {
                            "white": "#ffffff",
                            "primary": "#F4E1F0",
                            "secondary": "#ECF0F3",
                            "success": "#C9F7F5",
                            "info": "#EEE5FF",
                            "warning": "#FFF4DE",
                            "danger": "#FFE2E5",
                            "light": "#F3F6F9",
                            "dark": "#D6D6E0"
                        },
                        "inverse": {
                            "white": "#ffffff",
                            "primary": "#ffffff",
                            "secondary": "#212121",
                            "success": "#ffffff",
                            "info": "#ffffff",
                            "warning": "#ffffff",
                            "danger": "#ffffff",
                            "light": "#464E5F",
                            "dark": "#ffffff"
                        }
                    },
                    "gray": {
                        "gray-100": "#F3F6F9",
                        "gray-200": "#ECF0F3",
                        "gray-300": "#E5EAEE",
                        "gray-400": "#D6D6E0",
                        "gray-500": "#B5B5C3",
                        "gray-600": "#80808F",
                        "gray-700": "#464E5F",
                        "gray-800": "#1B283F",
                        "gray-900": "#212121"
                    }
                },
                "font-family": "Poppins"
            };</script>
        <!--end::Global Config-->
        <!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{ asset('storage/panel/assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('storage/panel/assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
		<script src="{{ asset('storage/panel/assets/js/scripts.bundle.js') }}"></script>
        <!--end::Global Theme Bundle-->
        <!--begin::Page Scripts(used by this page)-->
		<script src="{{ asset('storage/panel/assets/js/pages/custom/login/login-general.js') }}"></script>
        <!--end::Page Scripts-->
	</body>
    <!--end::Body-->
</html>
