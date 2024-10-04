<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 text-center" href="default-2.html" target="_blank">
            {{-- <img src="{{ asset('../../be/assets/img/logo-ct-dark.png') }}" class="navbar-brand-img h-100" alt="main_logo" /> --}}
            <span class="ms-1 font-weight-bold">WAREHOUSE PRO</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0" />
    <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">
                    Main Menu
                </h6>
            </li>
            <li class="nav-item">
                <a href="{{ route('kategori-produk') }}" class="nav-link">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-tag text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Category</span>
                </a>
            </li>


            <li class="nav-item">
                <a href="{{ route('kategori-produk') }}" class="nav-link">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-briefcase-24 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Product</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('kategori-produk') }}" class="nav-link">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-briefcase-24 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Bundling</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('kategori-produk') }}" class="nav-link">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-briefcase-24 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Package</span>
                </a>
            </li>


            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#hris" class="nav-link" aria-controls="hris" role="button"
                    aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-ui-04 text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">HRIS</span>
                </a>
                <div class="collapse" id="hris">
                    <ul class="nav ms-4">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dapertemen') }}">
                                <span class="sidenav-mini-icon"> K </span>
                                <span class="sidenav-normal"> Dapertemen </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('jabatan') }}">
                                <span class="sidenav-mini-icon"> K </span>
                                <span class="sidenav-normal"> Jabatan </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="https://demos.creative-tim.com/argon-dashboard-pro/pages/applications/wizard.html">
                                <span class="sidenav-mini-icon"> W </span>
                                <span class="sidenav-normal"> Kayawan </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="https://demos.creative-tim.com/argon-dashboard-pro/pages/applications/datatables.html">
                                <span class="sidenav-mini-icon"> D </span>
                                <span class="sidenav-normal"> Absensi </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="https://demos.creative-tim.com/argon-dashboard-pro/pages/applications/calendar.html">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal"> Gaji Karyawan </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="https://demos.creative-tim.com/argon-dashboard-pro/pages/applications/analytics.html">
                                <span class="sidenav-mini-icon"> A </span>
                                <span class="sidenav-normal"> Perizinan </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link"
                    aria-controls="applicationsExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-ui-04 text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Inventory</span>
                </a>
                <div class="collapse" id="applicationsExamples">
                    <ul class="nav ms-4">
                        <li class="nav-item">
                            <a class="nav-link"
                                href="https://demos.creative-tim.com/argon-dashboard-pro/pages/applications/kanban.html">
                                <span class="sidenav-mini-icon"> K </span>
                                <span class="sidenav-normal"> Kanban </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="https://demos.creative-tim.com/argon-dashboard-pro/pages/applications/wizard.html">
                                <span class="sidenav-mini-icon"> W </span>
                                <span class="sidenav-normal"> Wizard </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="https://demos.creative-tim.com/argon-dashboard-pro/pages/applications/datatables.html">
                                <span class="sidenav-mini-icon"> D </span>
                                <span class="sidenav-normal"> DataTables </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="https://demos.creative-tim.com/argon-dashboard-pro/pages/applications/calendar.html">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal"> Calendar </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="https://demos.creative-tim.com/argon-dashboard-pro/pages/applications/analytics.html">
                                <span class="sidenav-mini-icon"> A </span>
                                <span class="sidenav-normal"> Analytics </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#ecommerceExamples" class="nav-link"
                    aria-controls="ecommerceExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-building text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Manufaktur</span>
                </a>
                <div class="collapse" id="ecommerceExamples">
                    <ul class="nav ms-4">
                        <li class="nav-item">
                            <a class="nav-link"
                                href="https://demos.creative-tim.com/argon-dashboard-pro/pages/ecommerce/overview.html">
                                <span class="sidenav-mini-icon"> O </span>
                                <span class="sidenav-normal"> Overview </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" aria-expanded="false"
                                href="#productsExample">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal">
                                    Products <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="productsExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/ecommerce/products/new-product.html">
                                            <span class="sidenav-mini-icon text-xs"> N </span>
                                            <span class="sidenav-normal"> New Product </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/ecommerce/products/edit-product.html">
                                            <span class="sidenav-mini-icon text-xs"> E </span>
                                            <span class="sidenav-normal"> Edit Product </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/ecommerce/products/product-page.html">
                                            <span class="sidenav-mini-icon text-xs"> P </span>
                                            <span class="sidenav-normal"> Product Page </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/ecommerce/products/products-list.html">
                                            <span class="sidenav-mini-icon text-xs"> P </span>
                                            <span class="sidenav-normal"> Products List </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" aria-expanded="false"
                                href="#ordersExample">
                                <span class="sidenav-mini-icon"> O </span>
                                <span class="sidenav-normal">
                                    Orders <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="ordersExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/ecommerce/orders/list.html">
                                            <span class="sidenav-mini-icon text-xs"> O </span>
                                            <span class="sidenav-normal"> Order List </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/ecommerce/orders/details.html">
                                            <span class="sidenav-mini-icon text-xs"> O </span>
                                            <span class="sidenav-normal"> Order Details </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="https://demos.creative-tim.com/argon-dashboard-pro/pages/ecommerce/referral.html">
                                <span class="sidenav-mini-icon"> R </span>
                                <span class="sidenav-normal"> Referral </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            {{-- <li class="nav-item">
                <a data-bs-toggle="collapse" href="#authExamples" class="nav-link" aria-controls="authExamples"
                    role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-app text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">HR</span>
                </a>
                <div class="collapse" id="authExamples">
                    <ul class="nav ms-4">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" aria-expanded="false"
                                href="#signinExample">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal">
                                    Sign In <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="signinExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/signin/basic.html">
                                            <span class="sidenav-mini-icon text-xs"> B </span>
                                            <span class="sidenav-normal"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/signin/cover.html">
                                            <span class="sidenav-mini-icon text-xs"> C </span>
                                            <span class="sidenav-normal"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/signin/illustration.html">
                                            <span class="sidenav-mini-icon text-xs"> I </span>
                                            <span class="sidenav-normal"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" aria-expanded="false"
                                href="#signupExample">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal">
                                    Sign Up <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="signupExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/signup/basic.html">
                                            <span class="sidenav-mini-icon text-xs"> B </span>
                                            <span class="sidenav-normal"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/signup/cover.html">
                                            <span class="sidenav-mini-icon text-xs"> C </span>
                                            <span class="sidenav-normal"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/signup/illustration.html">
                                            <span class="sidenav-mini-icon text-xs"> I </span>
                                            <span class="sidenav-normal"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" aria-expanded="false"
                                href="#resetExample">
                                <span class="sidenav-mini-icon"> R </span>
                                <span class="sidenav-normal">
                                    Reset Password <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="resetExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/reset/basic.html">
                                            <span class="sidenav-mini-icon text-xs"> B </span>
                                            <span class="sidenav-normal"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/reset/cover.html">
                                            <span class="sidenav-mini-icon text-xs"> C </span>
                                            <span class="sidenav-normal"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/reset/illustration.html">
                                            <span class="sidenav-mini-icon text-xs"> I </span>
                                            <span class="sidenav-normal"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" aria-expanded="false" href="#lockExample">
                                <span class="sidenav-mini-icon"> L </span>
                                <span class="sidenav-normal">
                                    Lock <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="lockExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/lock/basic.html">
                                            <span class="sidenav-mini-icon text-xs"> B </span>
                                            <span class="sidenav-normal"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/lock/cover.html">
                                            <span class="sidenav-mini-icon text-xs"> C </span>
                                            <span class="sidenav-normal"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/lock/illustration.html">
                                            <span class="sidenav-mini-icon text-xs"> I </span>
                                            <span class="sidenav-normal"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" aria-expanded="false" href="#StepExample">
                                <span class="sidenav-mini-icon"> 2 </span>
                                <span class="sidenav-normal">
                                    2-Step Verification <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="StepExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/verification/basic.html">
                                            <span class="sidenav-mini-icon text-xs"> B </span>
                                            <span class="sidenav-normal"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/verification/cover.html">
                                            <span class="sidenav-mini-icon text-xs"> C </span>
                                            <span class="sidenav-normal"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/verification/illustration.html">
                                            <span class="sidenav-mini-icon text-xs"> I </span>
                                            <span class="sidenav-normal"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" aria-expanded="false"
                                href="#errorExample">
                                <span class="sidenav-mini-icon"> E </span>
                                <span class="sidenav-normal">
                                    Error <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="errorExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/error/404.html">
                                            <span class="sidenav-mini-icon text-xs"> E </span>
                                            <span class="sidenav-normal"> Error 404 </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/error/500.html">
                                            <span class="sidenav-mini-icon text-xs"> E </span>
                                            <span class="sidenav-normal"> Error 500 </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li> --}}


            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#authExamples" class="nav-link" aria-controls="authExamples"
                    role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-settings text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Settings</span>
                </a>
                <div class="collapse" id="authExamples">
                    <ul class="nav ms-4">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" aria-expanded="false"
                                href="#signinExample">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal">
                                    Manage User <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="signinExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('permissions') }}">
                                            <span class="sidenav-mini-icon text-xs"> B </span>
                                            <span class="sidenav-normal"> Permission </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('role') }}">
                                            <span class="sidenav-mini-icon text-xs"> C </span>
                                            <span class="sidenav-normal"> Role </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('users') }}">
                                            <span class="sidenav-mini-icon text-xs"> I </span>
                                            <span class="sidenav-normal"> User </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('master-modul') }}">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal">
                                    Master Modul <b class="caret"></b></span>
                            </a>

                        </li>




                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" aria-expanded="false"
                                href="#signupExample">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal">
                                    Sign Up <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="signupExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/signup/basic.html">
                                            <span class="sidenav-mini-icon text-xs"> B </span>
                                            <span class="sidenav-normal"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/signup/cover.html">
                                            <span class="sidenav-mini-icon text-xs"> C </span>
                                            <span class="sidenav-normal"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/signup/illustration.html">
                                            <span class="sidenav-mini-icon text-xs"> I </span>
                                            <span class="sidenav-normal"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" aria-expanded="false"
                                href="#resetExample">
                                <span class="sidenav-mini-icon"> R </span>
                                <span class="sidenav-normal">
                                    Reset Password <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="resetExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/reset/basic.html">
                                            <span class="sidenav-mini-icon text-xs"> B </span>
                                            <span class="sidenav-normal"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/reset/cover.html">
                                            <span class="sidenav-mini-icon text-xs"> C </span>
                                            <span class="sidenav-normal"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/reset/illustration.html">
                                            <span class="sidenav-mini-icon text-xs"> I </span>
                                            <span class="sidenav-normal"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" aria-expanded="false" href="#lockExample">
                                <span class="sidenav-mini-icon"> L </span>
                                <span class="sidenav-normal">
                                    Lock <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="lockExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/lock/basic.html">
                                            <span class="sidenav-mini-icon text-xs"> B </span>
                                            <span class="sidenav-normal"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/lock/cover.html">
                                            <span class="sidenav-mini-icon text-xs"> C </span>
                                            <span class="sidenav-normal"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/lock/illustration.html">
                                            <span class="sidenav-mini-icon text-xs"> I </span>
                                            <span class="sidenav-normal"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" aria-expanded="false" href="#StepExample">
                                <span class="sidenav-mini-icon"> 2 </span>
                                <span class="sidenav-normal">
                                    2-Step Verification <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="StepExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/verification/basic.html">
                                            <span class="sidenav-mini-icon text-xs"> B </span>
                                            <span class="sidenav-normal"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/verification/cover.html">
                                            <span class="sidenav-mini-icon text-xs"> C </span>
                                            <span class="sidenav-normal"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/verification/illustration.html">
                                            <span class="sidenav-mini-icon text-xs"> I </span>
                                            <span class="sidenav-normal"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" aria-expanded="false"
                                href="#errorExample">
                                <span class="sidenav-mini-icon"> E </span>
                                <span class="sidenav-normal">
                                    Error <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="errorExample">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/error/404.html">
                                            <span class="sidenav-mini-icon text-xs"> E </span>
                                            <span class="sidenav-normal"> Error 404 </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://demos.creative-tim.com/argon-dashboard-pro/pages/authentication/error/500.html">
                                            <span class="sidenav-mini-icon text-xs"> E </span>
                                            <span class="sidenav-normal"> Error 500 </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- <li class="nav-item">
            <hr class="horizontal dark" />
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">
                DOCS
            </h6>
        </li> --}}

        </ul>
    </div>
    {{-- <div class="sidenav-footer mx-3 my-3">
    <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-60 mx-auto"
            src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/illustrations/icon-documentation.svg"
            alt="sidebar_illustration" />
        <div class="card-body text-center p-3 w-100 pt-0">
            <div class="docs-info">
                <h6 class="mb-0">Need help?</h6>
                <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
            </div>
        </div>
    </div>
    <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/argon-dashboard" target="_blank"
        class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
</div> --}}
</aside>
