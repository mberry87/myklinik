<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('template') }}/plugins/fontawesome-free/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('template') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ asset('template') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('template') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="{{ asset('template') }}/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{ asset('template') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet"
        href="{{ asset('template') }}/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet"
        href="{{ asset('template') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="{{ asset('template') }}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('template') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <link rel="stylesheet"
        href="{{ asset('template') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.11/dist/sweetalert2.min.css">

    <link rel="stylesheet" href="{{ asset('template') }}/dist/css/adminlte.min.css?v=3.2.0">
    <script nonce="2b2b1906-dcd4-4c8a-863c-5da4127316bc">
        try {
            (function(w, d) {
                ! function(o, p, q, r) {
                    o[q] = o[q] || {};
                    o[q].executed = [];
                    o.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    o.zaraz.q = [];
                    o.zaraz._f = function(s) {
                        return async function() {
                            var t = Array.prototype.slice.call(arguments);
                            o.zaraz.q.push({
                                m: s,
                                a: t
                            })
                        }
                    };
                    for (const u of ["track", "set", "debug"]) o.zaraz[u] = o.zaraz._f(u);
                    o.zaraz.init = () => {
                        var v = p.getElementsByTagName(r)[0],
                            w = p.createElement(r),
                            x = p.getElementsByTagName("title")[0];
                        x && (o[q].t = p.getElementsByTagName("title")[0].text);
                        o[q].x = Math.random();
                        o[q].w = o.screen.width;
                        o[q].h = o.screen.height;
                        o[q].j = o.innerHeight;
                        o[q].e = o.innerWidth;
                        o[q].l = o.location.href;
                        o[q].r = p.referrer;
                        o[q].k = o.screen.colorDepth;
                        o[q].n = p.characterSet;
                        o[q].o = (new Date).getTimezoneOffset();
                        if (o.dataLayer)
                            for (const B of Object.entries(Object.entries(dataLayer).reduce(((C, D) => ({
                                    ...C[1],
                                    ...D[1]
                                })), {}))) zaraz.set(B[0], B[1], {
                                scope: "page"
                            });
                        o[q].q = [];
                        for (; o.zaraz.q.length;) {
                            const E = o.zaraz.q.shift();
                            o[q].q.push(E)
                        }
                        w.defer = !0;
                        for (const F of [localStorage, sessionStorage]) Object.keys(F || {}).filter((H => H
                            .startsWith("_zaraz_"))).forEach((G => {
                            try {
                                o[q]["z_" + G.slice(7)] = JSON.parse(F.getItem(G))
                            } catch {
                                o[q]["z_" + G.slice(7)] = F.getItem(G)
                            }
                        }));
                        w.referrerPolicy = "origin";
                        w.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(o[q])));
                        v.parentNode.insertBefore(w, v)
                    };
                    ["complete", "interactive"].includes(p.readyState) ? zaraz.init() : o.addEventListener(
                        "DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document)
        } catch (err) {
            console.error('Failed to run Cloudflare Zaraz: ', err)
            fetch('/cdn-cgi/zaraz/t', {
                credentials: 'include',
                keepalive: true,
                method: 'GET',
            })
        };
    </script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ $userData->photo_profil ? asset('storage/photo_profil/' . $userData->photo_profil) : asset('template/dist/img/avatar5.png') }}"
                            class="user-image img-circle elevation-2" alt="User Image">
                    </a>

                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                        <li class="user-header bg-primary">
                            <img src="{{ $userData->photo_profil ? asset('storage/photo_profil/' . $userData->photo_profil) : asset('template/dist/img/avatar5.png') }}"
                                class="img-circle elevation-2" alt="User Image">
                            <p>
                                <small>
                                    Nama : {{ Auth::user()->name }} <br>
                                    Email : {{ Auth::user()->email }} <br>
                                    Member sejak {{ Auth::user()->created_at->format('d F Y') }}
                                </small>
                            </p>
                        </li>

                        <li class="user-footer">
                            <a href="{{ route('profil.index') }}" class="btn btn-default btn-flat">Profil</a>
                            <a href="{{ route('logout') }}" class="btn btn-default btn-flat float-right">Log Out</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="#" class="brand-link">
                <img src="{{ asset('image') }}/ilustrasi.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item ">
                            <a href="{{ route('dashboard') }}"
                                class="nav-link {{ Request::is('dashboard') ? 'active' : 'inactive' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>DASHBOARD</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('pasien') }}"
                                class="nav-link {{ Request::is('pasien') ? 'active' : 'inactive' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>PASIEN</p>
                            </a>
                        </li>

                        <!-- Master Data -->
                        @can('viewAny', App\User::class)
                            <li
                                class="nav-item {{ Request::is('poli', 'dokter', 'tindakan', 'diagnosa', 'administrasi', 'penunjang', 'obat') ? 'menu-open' : '' }}">
                                <a href="#"
                                    class="nav-link {{ Request::is('poli', 'dokter', 'tindakan', 'diagnosa', 'administrasi', 'penunjang', 'obat') ? 'active' : 'inactive' }}">
                                    <i class="nav-icon fas fa-cogs"></i>
                                    <p>
                                        MASTER DATA
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('poli.index') }}"
                                            class="nav-link {{ Request::is('poli') ? 'active' : '' }}">
                                            <i class="fas fa-user nav-icon"></i>
                                            <p>Master Poli</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('dokter.index') }}"
                                            class="nav-link {{ Request::is('dokter') ? 'active' : '' }}">
                                            <i class="fas fa-user nav-icon"></i>
                                            <p>Master Dokter</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('tindakan.index') }}"
                                            class="nav-link {{ Request::is('tindakan') ? 'active' : '' }}">
                                            <i class="fas fa-user nav-icon"></i>
                                            <p>Master Tindakan</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('diagnosa.index') }}"
                                            class="nav-link {{ Request::is('diagnosa') ? 'active' : '' }}">
                                            <i class="fas fa-user nav-icon"></i>
                                            <p>Master Diagnosa</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('administrasi.index') }}"
                                            class="nav-link {{ Request::is('administrasi') ? 'active' : '' }}">
                                            <i class="fas fa-user nav-icon"></i>
                                            <p>Master Administrasi</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('penunjang.index') }}"
                                            class="nav-link {{ Request::is('penunjang') ? 'active' : '' }}">
                                            <i class="fas fa-user nav-icon"></i>
                                            <p>Master Penunjang</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('obat.index') }}"
                                            class="nav-link {{ Request::is('obat') ? 'active' : '' }}">
                                            <i class="fas fa-user nav-icon"></i>
                                            <p>Master Obat</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endcan

                        @can('viewAny', App\User::class)
                            <li class="nav-item {{ Request::is('user', 'pegawai') ? 'menu-open' : '' }}">
                                <a href="#"
                                    class="nav-link {{ Request::is('user', 'pegawai') ? 'active' : 'inactive' }}">
                                    <i class="nav-icon fas fa-cogs"></i>
                                    <p>
                                        MANAGEMENT
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('user.index') }}"
                                            class="nav-link {{ Request::is('user') ? 'active' : '' }}">
                                            <i class="fas fa-user nav-icon"></i>
                                            <p>User</p>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="{{ route('pegawai.index') }}"
                                            class="nav-link {{ Request::is('pegawai') ? 'active' : '' }}">
                                            <i class="fas fa-id-card nav-icon"></i>
                                            <p>Pegawai</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endcan
                    </ul>
                </nav>

            </div>

        </aside>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    @yield('breadcrumb')
                </div>
            </div>

            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>

        <aside class="control-sidebar control-sidebar-dark">

            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                <small>ver.1.0 beta</small>
            </div>

            <small>Copyright &copy; 2023 | strawberry.dev | ksop tanjungpinang</small>
        </footer>
    </div>

    <script src="{{ asset('template') }}/plugins/jquery/jquery.min.js"></script>

    <script src="{{ asset('template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('template') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="{{ asset('template') }}/plugins/toastr/toastr.min.js"></script>

    <script src="{{ asset('template') }}/plugins/select2/js/select2.full.min.js"></script>
    <script src="{{ asset('template') }}/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>

    <script src="{{ asset('template') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('template') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('template') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('template') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('template') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('template') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

    <script src="{{ asset('template') }}/plugins/moment/moment.min.js"></script>
    <script src="{{ asset('template') }}/plugins/inputmask/jquery.inputmask.min.js"></script>
    <script src="{{ asset('template') }}/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{ asset('template') }}/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="{{ asset('template') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="{{ asset('template') }}/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script src="{{ asset('template') }}/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <script src="{{ asset('template') }}/plugins/dropzone/min/dropzone.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.11/dist/sweetalert2.all.min.js"></script>

    <script src="{{ asset('template') }}/dist/js/adminlte.min.js?v=3.2.0"></script>



    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Date picker

            $(function() {
                $('#date_exp').datetimepicker({

                    format: ('DD/MM/YYYY'),
                    locale: 'id',
                });
            })

            $(function() {
                $('#tgl_lahir').datetimepicker({

                    format: ('DD/MM/YYYY'),
                    locale: 'id',
                });
            })
        })
    </script>

    <!-- Script untuk mengubah format input menjadi format mata uang Rupiah -->
    <script>
        $(document).ready(function() {
            $('#tarif').on('input', function() {
                var inputValue = $(this).val();
                inputValue = inputValue.replace(/[^0-9]/g, '');
                var formattedValue = formatRupiah(inputValue);
                $(this).val(formattedValue);
            });

            $('#harga_modal').on('input', function() {
                var inputValue = $(this).val();
                inputValue = inputValue.replace(/[^0-9]/g, '');
                var formattedValue = formatRupiah(inputValue);
                $(this).val(formattedValue);
            });

            $('#harga_jual').on('input', function() {
                var inputValue = $(this).val();
                inputValue = inputValue.replace(/[^0-9]/g, '');
                var formattedValue = formatRupiah(inputValue);
                $(this).val(formattedValue);
            });

            // Fungsi untuk format sebagai mata uang Rupiah
            function formatRupiah(angka) {
                var reverse = angka.toString().split('').reverse().join('');
                var ribuan = reverse.match(/\d{1,3}/g);
                var formatted = ribuan.join('.').split('').reverse().join('');
                return 'Rp ' + formatted;
            }
        });
    </script>

    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(function() {
                $('#provinsi').on('change', function() {
                    let id_provinsi = $('#provinsi').val();

                    $.ajax({
                        type: 'POST',
                        url: "{{ route('getKabupaten') }}",
                        data: {
                            id_provinsi: id_provinsi
                        },
                        cache: false,

                        success: function(msg) {
                            $('#kabupaten').html(msg);
                        },

                        error: function(data) {
                            console.log('error', data);
                        }
                    })
                });
            });
        })
    </script>

    {{-- <script>
        const tombol = document.querySelector('#tombol');
        tombol.addEventListener('click', function() {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
            });
        });
    </script> --}}

</body>

</html>
