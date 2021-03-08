<!--begin::Header-->
<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Header Menu Wrapper-->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
            <!--begin::Header Logo-->
            <div class="header-logo">
                <a href="index.html">
                    <img alt="Logo" src="{{ asset('assets/media/svg/logos/apple-black.svg') }}" width="25px"/>
                </a>
            </div>
            <!--end::Header Logo-->

            <!--begin::Header Menu-->
            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                <!--begin::Header Nav-->
                <ul class="menu-nav">
                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click"
                        aria-haspopup="true">
                        <a href="{{  route('home') }}" class="menu-link">
                            <span class="menu-text">Beranda</span>
                        </a>
                    </li>
                    <li class="menu-item menu-item-submenu menu-item-rel  {{ (request()->is('master/*')) ? 'menu-item-active' : '' }} " data-menu-toggle="click"
                        aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Master</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('staff.index') }}" class="menu-link">
                                        <i class="flaticon2-group text-primary mr-4"></i>
                                        <span class="menu-text">Data Personil</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('project.index') }}" class="menu-link">
                                        <i class="flaticon2-position text-primary mr-4"></i>
                                        <span class="menu-text">Data Project</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <i class="flaticon2-user-outline-symbol text-primary mr-4"></i>
                                        <span class="menu-text">Data Intern</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <i class="flaticon2-layers-1 text-primary mr-4"></i>
                                        <span class="menu-text">Data Jabatan</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <i class="flaticon2-pie-chart-4 text-primary mr-4"></i>
                                        <span class="menu-text">Data Divisi</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <i class="flaticon2-soft-icons text-primary mr-4"></i>
                                        <span class="menu-text">Data Kategori</span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">SDM</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <i class="flaticon2-list-2 text-success mr-4"></i>
                                        <span class="menu-text">Rekrutmen</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <i class="flaticon2-file-2 text-success mr-4"></i>
                                        <span class="menu-text">Gaji</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <i class="flaticon2-document text-success mr-4"></i>
                                        <span class="menu-text">Mutasi</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <i class="flaticon2-graphic text-success mr-4"></i>
                                        <span class="menu-text">SP</span>
                                    </a>
                                </li>
                                
                                
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                        <a href="" class="menu-link menu-toggle">
                            <span class="menu-text">Surat</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('letter.index') }}" class="menu-link">
                                        <span class="svg-icon svg-icon-warning mr-2"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Safe-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M8,17 C8.55228475,17 9,17.4477153 9,18 L9,21 C9,21.5522847 8.55228475,22 8,22 L3,22 C2.44771525,22 2,21.5522847 2,21 L2,18 C2,17.4477153 2.44771525,17 3,17 L3,16.5 C3,15.1192881 4.11928813,14 5.5,14 C6.88071187,14 8,15.1192881 8,16.5 L8,17 Z M5.5,15 C4.67157288,15 4,15.6715729 4,16.5 L4,17 L7,17 L7,16.5 C7,15.6715729 6.32842712,15 5.5,15 Z" fill="#000000" opacity="0.3"/>
                                                <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000"/>
                                            </g>
                                        </svg><!--end::Svg Icon--></span>
                                        <span class="menu-text">Invoice</span></span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('kwitansi.index') }}" class="menu-link">
                                        <span class="svg-icon svg-icon-warning mr-2"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Mail-error.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.98630124,11 4.48466491,11.0516454 4,11.1500272 L4,7 C4,5.8954305 4.8954305,5 6,5 L20,5 C21.1045695,5 22,5.8954305 22,7 L22,16 C22,17.1045695 21.1045695,18 20,18 L12.9835977,18 Z M19.1444251,6.83964668 L13,10.1481833 L6.85557487,6.83964668 C6.4908718,6.6432681 6.03602525,6.77972206 5.83964668,7.14442513 C5.6432681,7.5091282 5.77972206,7.96397475 6.14442513,8.16035332 L12.6444251,11.6603533 C12.8664074,11.7798822 13.1335926,11.7798822 13.3555749,11.6603533 L19.8555749,8.16035332 C20.2202779,7.96397475 20.3567319,7.5091282 20.1603533,7.14442513 C19.9639747,6.77972206 19.5091282,6.6432681 19.1444251,6.83964668 Z" fill="#000000"/>
                                                <path d="M6.5,14 C7.05228475,14 7.5,14.4477153 7.5,15 L7.5,17 C7.5,17.5522847 7.05228475,18 6.5,18 C5.94771525,18 5.5,17.5522847 5.5,17 L5.5,15 C5.5,14.4477153 5.94771525,14 6.5,14 Z M6.5,21 C5.94771525,21 5.5,20.5522847 5.5,20 C5.5,19.4477153 5.94771525,19 6.5,19 C7.05228475,19 7.5,19.4477153 7.5,20 C7.5,20.5522847 7.05228475,21 6.5,21 Z" fill="#000000" opacity="0.3"/>
                                            </g>
                                        </svg><!--end::Svg Icon--></span>
                                        <span class="menu-text">Kwitansi</span></span>
                                    </a>
                                </li>
                                
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('eksternal.index') }}" class="menu-link">
                                        <span class="svg-icon svg-icon-warning mr-2"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Outgoing-mail.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M5,9 L19,9 C20.1045695,9 21,9.8954305 21,11 L21,20 C21,21.1045695 20.1045695,22 19,22 L5,22 C3.8954305,22 3,21.1045695 3,20 L3,11 C3,9.8954305 3.8954305,9 5,9 Z M18.1444251,10.8396467 L12,14.1481833 L5.85557487,10.8396467 C5.4908718,10.6432681 5.03602525,10.7797221 4.83964668,11.1444251 C4.6432681,11.5091282 4.77972206,11.9639747 5.14442513,12.1603533 L11.6444251,15.6603533 C11.8664074,15.7798822 12.1335926,15.7798822 12.3555749,15.6603533 L18.8555749,12.1603533 C19.2202779,11.9639747 19.3567319,11.5091282 19.1603533,11.1444251 C18.9639747,10.7797221 18.5091282,10.6432681 18.1444251,10.8396467 Z" fill="#000000"/>
                                                <path d="M11.1288761,0.733697713 L11.1288761,2.69017121 L9.12120481,2.69017121 C8.84506244,2.69017121 8.62120481,2.91402884 8.62120481,3.19017121 L8.62120481,4.21346991 C8.62120481,4.48961229 8.84506244,4.71346991 9.12120481,4.71346991 L11.1288761,4.71346991 L11.1288761,6.66994341 C11.1288761,6.94608579 11.3527337,7.16994341 11.6288761,7.16994341 C11.7471877,7.16994341 11.8616664,7.12798964 11.951961,7.05154023 L15.4576222,4.08341738 C15.6683723,3.90498251 15.6945689,3.58948575 15.5161341,3.37873564 C15.4982803,3.35764848 15.4787093,3.33807751 15.4576222,3.32022374 L11.951961,0.352100892 C11.7412109,0.173666017 11.4257142,0.199862688 11.2472793,0.410612793 C11.1708299,0.500907473 11.1288761,0.615386087 11.1288761,0.733697713 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(11.959697, 3.661508) rotate(-90.000000) translate(-11.959697, -3.661508) "/>
                                            </g>
                                        </svg><!--end::Svg Icon--></span>
                                        <span class="menu-text">Surat Eksternal</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('pengumuman.index') }}" class="menu-link">
                                        <span class="svg-icon svg-icon-warning mr-2"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Mail-opened.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3"/>
                                                <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000"/>
                                            </g>
                                        </svg><!--end::Svg Icon--></span>
                                        <span class="menu-text">Surat Pemberitahuan</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('keterangan.index') }}" class="menu-link">
                                        <span class="svg-icon svg-icon-warning mr-2"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Urgent-mail.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3"/>
                                                <path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000"/>
                                            </g>
                                        </svg><!--end::Svg Icon--></span>
                                        <span class="menu-text">Surat Keterangan</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('peringatan.index') }}" class="menu-link">
                                        <span class="svg-icon svg-icon-warning mr-2"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Urgent-mail.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3"/>
                                                <path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000"/>
                                            </g>
                                        </svg><!--end::Svg Icon--></span>
                                        <span class="menu-text">Surat Peringatan</span>
                                    </a>
                                </li>
                                
                                
                            </ul>
                        </div>
                    </li>

                    

                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Legal</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <i class="flaticon2-list-2 text-success mr-4"></i>
                                        <span class="menu-text">Perizinan</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <i class="flaticon2-file-2 text-success mr-4"></i>
                                        <span class="menu-text">Dokumen Kontrak</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <i class="flaticon2-document text-success mr-4"></i>
                                        <span class="menu-text">Lisensi</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <i class="flaticon2-graphic text-success mr-4"></i>
                                        <span class="menu-text">Keuangan</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Pengadaan</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <i class="flaticon2-list-2 text-success mr-4"></i>
                                        <span class="menu-text">Coming Soon...</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Opsi</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <i class="flaticon2-list-2 text-success mr-4"></i>
                                        <span class="menu-text">Coming Soon...</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!--end::Header Nav-->
            </div>
            <!--end::Header Menu-->

        </div>
        <!--end::Header Menu Wrapper-->

        @include('includes.topBar')
    </div>
    <!--end::Container-->
</div>
<!--end::Header-->
