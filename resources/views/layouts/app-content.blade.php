<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="description" content="Agri-Map" />
    <link rel="shortcut icon" href="{{ asset('location.png') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="url" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    @stack('links')
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Leaflet --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/plugins/custom/leaflet/leaflet.bundle.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/plugins/custom/leaflet/dist/leaflet.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/custom/leaflet/leaflet.draw.css') }}">

    <style>
        [x-cloak] {
            display: none !important;
        }

        .aside-menu .menu-nav>.menu-item>.menu-heading .menu-icon,
        .aside-menu .menu-nav>.menu-item>.menu-link .menu-icon {
            font-size: 2rem;
            color: #fff;
        }

        .aside .aside-menu .menu-nav>.menu-item>.menu-link .menu-text {
            font-size: 13px;
            color: #fff;
        }

        .aside-menu .menu-nav>.menu-item.menu-item-active>.menu-heading .menu-icon,
        .aside-menu .menu-nav>.menu-item.menu-item-active>.menu-link .menu-icon {
            color: #fff;
        }

        .aside .aside-menu .menu-nav>.menu-item>.menu-link {
            width: 120px;
        }

        label {
            font-weight: bolder !important;
        }
    </style>
</head>

<body id="kt_body" class="header-fixed header-mobile-fixed aside-enabled aside-fixed page-loading">
    @include('partials.header-mobile')
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">
            @include('partials.navigation')
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                @include('partials.header')
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="d-flex flex-column-fluid">
                        <div class="container-fluid">
                            @section('content') @show
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
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
                        "secondary": "#3F4254",
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
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <script src="{{ asset('assets/plugins/custom/leaflet/dist/leaflet-src.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/leaflet/leaflet.draw.js') }}"></script>
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    @stack('scripts')
    <script src="{{ mix('js/app.js') }}"></script>

    <script>
        if (window.livewire) {
            window.livewire.on('hideModal', (modalId) => {
                $(modalId).modal('hide');
            });
        }

        window.addEventListener('swalSuccess', event => {
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: event.detail.message,
                showConfirmButton: false,
                timer: 1500
            })
        });
        window.addEventListener('OfficialError', event => {
            Swal.fire({
                position: 'top-center',
                icon: 'error',
                title: event.detail.message,
                showConfirmButton: true,
            })
        });
        window.addEventListener('exportOfficialError', event => {
            Swal.fire({
                position: 'top-center',
                icon: 'error',
                title: event.detail.message,
                showConfirmButton: true,
            })
        });
        window.addEventListener('CanvassError', event => {
            Swal.fire({
                position: 'top-center',
                icon: 'warning',
                title: event.detail.message,
                showConfirmButton: true,
            })
        });
        window.addEventListener('swalDel', event => {
            Swal.fire({
                position: 'top-center',
                icon: 'error',
                title: event.detail.message,
                showConfirmButton: false,
                timer: 1500
            })
        });
        window.addEventListener('already-confirmed', event => {
            Swal.fire({
                position: 'top-center',
                icon: 'warning',
                title: event.detail.message,
                showConfirmButton: false,
                timer: 1500
            })
        });

        window.addEventListener('swal:confirm', event => {
            Swal.fire({
                position: 'top-center',
                icon: 'warning',
                title: event.detail.message,
                showCancelButton: true,
                confirmButtonText: `Yes`,
                denyButtonText: `Cancel`
            }).then((result) => {
                if (result.isConfirmed) {
                    window.livewire.emit('delete', event.detail.id)
                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: 'Successfully Deleted',
                        showConfirmButton: false,
                        timer: 1000
                    })
                }
            });
        });
        window.addEventListener('swal:confirm-release', event => {
            Swal.fire({
                position: 'top-center',
                icon: 'warning',
                title: event.detail.message,
                showCancelButton: true,
                confirmButtonText: `Yes`,
                denyButtonText: `Cancel`
            }).then((result) => {
                if (result.isConfirmed) {
                    window.livewire.emit('release', event.detail.id)
                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: 'Successfully Released',
                        showConfirmButton: false,
                        timer: 1000
                    })
                }
            });
        });
        window.addEventListener('swal:confirm-cancel', event => {
            Swal.fire({
                position: 'top-center',
                icon: 'warning',
                title: event.detail.message,
                showCancelButton: true,
                confirmButtonText: `Yes`,
                denyButtonText: `Cancel`
            }).then((result) => {
                if (result.isConfirmed) {
                    window.livewire.emit('cancel', event.detail.id)
                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: 'Successfully Cancelled',
                        showConfirmButton: false,
                        timer: 1000
                    })
                }
            });
        });
        window.addEventListener('swal:confirm-uncancel', event => {
            Swal.fire({
                position: 'top-center',
                icon: 'warning',
                title: event.detail.message,
                showCancelButton: true,
                confirmButtonText: `Yes`,
                denyButtonText: `Cancel`
            }).then((result) => {
                if (result.isConfirmed) {
                    window.livewire.emit('uncancel', event.detail.id)
                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: 'Successfully Uncancelled',
                        showConfirmButton: false,
                        timer: 1000
                    })
                }
            });
        });
        window.addEventListener('swal:restore', event => {
            Swal.fire({
                position: 'top-center',
                icon: 'warning',
                title: event.detail.message,
                showCancelButton: true,
                confirmButtonText: `Yes`,
                denyButtonText: `Cancel`
            }).then((result) => {
                if (result.isConfirmed) {
                    window.livewire.emit('restore', event.detail.id)
                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: 'Successfully Restored',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            });
        });
        window.addEventListener('swal:forceDel', event => {
            Swal.fire({
                position: 'top-center',
                icon: 'warning',
                title: event.detail.message,
                showCancelButton: true,
                confirmButtonText: `Yes`,
                denyButtonText: `Cancel`
            }).then((result) => {
                if (result.isConfirmed) {
                    window.livewire.emit('forceDelete', event.detail.id)
                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: 'Successfully Deleted',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            });
        });
        window.addEventListener('swal:norecord', event => {
            Swal.fire({
                position: 'top-center',
                icon: 'warning',
                title: 'Please create a budget expenditure first before you proceed',
                showCancelButton: false,
                confirmButtonText: 'OK',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.livewire.emit('records', event.detail.id)
                }
            });
        });
        window.addEventListener('swal:selectrecord', event => {
            Swal.fire({
                position: 'top-center',
                icon: 'warning',
                title: event.detail.message,
                showCancelButton: false,
                confirmButtonText: 'OK',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.livewire.emit('records', event.detail.id)
                }
            });
        });
        let alertIsShown = false;
        window.addEventListener('swal:failedrelease', event => {
            if (!alertIsShown) {
                alertIsShown = true;
                Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: event.detail.message,
                    // showConfirmButton: true,
                    confirmButtonText: 'OK',
                    allowOutsideClick: false,
                });
            }
        });
        window.addEventListener('swal:successrelease', event => {
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Successfully Released',
                showCancelButton: true,
                confirmButtonText: `OK`
            });
        });
        window.addEventListener('swal:releasedisbursement', event => {
            Swal.fire({
                position: 'top-center',
                icon: 'warning',
                title: event.detail.message,
                showCancelButton: true,
                confirmButtonText: `OK`
            }).then((result) => {
                if (result.isConfirmed) {
                    window.livewire.emit('release', event.detail.id)
                }
            });
        });
    </script>
</body>

</html>
