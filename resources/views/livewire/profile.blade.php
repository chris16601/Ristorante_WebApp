<div>
    <x-app-layout>
        <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
            <div class="pt-7 pb-6 bg-cover"
                style="background-image: url('../assets/img/header-orange-purple.jpg'); background-position: bottom;">
            </div>
            <div class="container">
                <div class="card card-body py-2 bg-transparent shadow-none">
                    <div class="row">
                        <div class="col-auto">
                            <div
                                class="avatar avatar-2xl rounded-circle position-relative mt-n7 border border-gray-100 border-4">
                                <img src="../assets/img/team-2.jpg" alt="profile_image" class="w-100">
                            </div>
                        </div>
                        <div class="col-auto my-auto">
                            <div class="h-100">
                                <h3 class="mb-0 font-weight-bold">
                                    {{ $current_name }}
                                </h3>
                                <p class="mb-0">
                                    {{ $email }}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3 text-sm-end">
                            <!--<a href="javascript:;" class="btn btn-sm btn-white">Cancel</a>-->
                            <a href="javascript:;" class="btn btn-sm btn-dark">Save</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container my-3 py-3">
                <div class="row">
                    <div class="col-12 col-xl-4 mb-4">
                        <div class="card border shadow-xs h-100">
                            <div class="card-header pb-0 p-3">
                                <h6 class="mb-0 font-weight-semibold text-lg">Notifications settings</h6>
                                <p class="text-sm mb-1">Here you can set preferences.</p>
                            </div>
                            <div class="card-body p-3">
                                <h6 class="text-dark font-weight-semibold mb-1">Account</h6>
                                <ul class="list-group">
                                    <li class="list-group-item border-0 px-0">
                                        <div class="form-check form-switch ps-0">
                                            <input class="form-check-input ms-auto" type="checkbox"
                                                id="flexSwitchCheckDefault" checked>
                                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                for="flexSwitchCheckDefault">Email me when someone follows me</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0 px-0">
                                        <div class="form-check form-switch ps-0">
                                            <input class="form-check-input ms-auto" type="checkbox"
                                                id="flexSwitchCheckDefault1">
                                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                for="flexSwitchCheckDefault1">Email me when someone answers on my
                                                post</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0 px-0">
                                        <div class="form-check form-switch ps-0">
                                            <input class="form-check-input ms-auto" type="checkbox"
                                                id="flexSwitchCheckDefault2" checked>
                                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                for="flexSwitchCheckDefault2">Email me when someone mentions me</label>
                                        </div>
                                    </li>
                                </ul>
                                <h6 class="text-dark font-weight-semibold mt-2 mb-1">Application</h6>
                                <ul class="list-group">
                                    <li class="list-group-item border-0 px-0">
                                        <div class="form-check form-switch ps-0">
                                            <input class="form-check-input ms-auto" type="checkbox"
                                                id="flexSwitchCheckDefault3">
                                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                for="flexSwitchCheckDefault3">New launches and projects</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0 px-0">
                                        <div class="form-check form-switch ps-0">
                                            <input class="form-check-input ms-auto" type="checkbox"
                                                id="flexSwitchCheckDefault4" checked>
                                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                for="flexSwitchCheckDefault4">Monthly product updates</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item border-0 px-0 pb-0">
                                        <div class="form-check form-switch ps-0">
                                            <input class="form-check-input ms-auto" type="checkbox"
                                                id="flexSwitchCheckDefault5">
                                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                for="flexSwitchCheckDefault5">Subscribe to newsletter</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4 mb-4">
                        <div class="card border shadow-xs h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-8 col-9">
                                        <h6 class="mb-0 font-weight-semibold text-lg">Informazioni Profilo</h6>
                                        <p class="text-sm mb-1">Modifica le informazioni riguardanti te stesso</p>
                                    </div>
                                    <div class="col-md-4 col-3 text-end">
                                        <button type="button" class="btn btn-white btn-icon px-2 py-2" data-bs-toggle="modal" data-bs-target="#profile_modal">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="currentColor">
                                                <path
                                                    d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <ul class="list-group">
                                    <li
                                        class="list-group-item border-0 ps-0 text-dark font-weight-semibold pt-0 pb-1 text-sm">
                                        <span class="text-secondary">Nome:</span> &nbsp; {{ $nome }}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm">
                                        <span class="text-secondary">Cognome</span> &nbsp; {{ $cognome }}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm">
                                        <span class="text-secondary">Telefono:</span> &nbsp; @if($tel == null) Non Disponibile @else {{ $tel }} @endif
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm">
                                        <span class="text-secondary">Email:</span> &nbsp; {{ $email }}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm">
                                        <span class="text-secondary">Ruolo:</span> &nbsp; {{ $ruolo }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <footer class="footer pt-3  ">
                    <div class="container-fluid">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-lg-6 mb-lg-0 mb-4">
                                <div class="copyright text-center text-xs text-muted text-lg-start">
                                    Copyright
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>
                                    Battista
                                    <a href="https://www.creative-tim.com" class="text-secondary"
                                        target="_blank">Christian</a>.
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                    <li class="nav-item">
                                        <a href="https://www.creative-tim.com" class="nav-link text-xs text-muted"
                                            target="_blank">Creative Tim</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://www.creative-tim.com/presentation"
                                            class="nav-link text-xs text-muted" target="_blank">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://www.creative-tim.com/blog" class="nav-link text-xs text-muted"
                                            target="_blank">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://www.creative-tim.com/license"
                                            class="nav-link text-xs pe-0 text-muted" target="_blank">License</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <div class="fixed-plugin">
            <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
                <i class="fa fa-cog py-2"></i>
            </a>
            <div class="card shadow-lg ">
                <div class="card-header pb-0 pt-3 ">
                    <div class="float-start">
                        <h5 class="mt-3 mb-0">Corporate UI Configurator</h5>
                        <p>See our dashboard options.</p>
                    </div>
                    <div class="float-end mt-4">
                        <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                            <i class="fa fa-close"></i>
                        </button>
                    </div>
                    <!-- End Toggle Button -->
                </div>
                <hr class="horizontal dark my-1">
                <div class="card-body pt-sm-3 pt-0">
                    <!-- Sidebar Backgrounds -->
                    <div>
                        <h6 class="mb-0">Sidebar Colors</h6>
                    </div>
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <div class="badge-colors my-2 text-start">
                            <span class="badge filter bg-gradient-primary active" data-color="primary"
                                onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-info" data-color="info"
                                onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-success" data-color="success"
                                onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-warning" data-color="warning"
                                onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-danger" data-color="danger"
                                onclick="sidebarColor(this)"></span>
                        </div>
                    </a>
                    <!-- Sidenav Type -->
                    <div class="mt-3">
                        <h6 class="mb-0">Sidenav Type</h6>
                        <p class="text-sm">Choose between 2 different sidenav types.</p>
                    </div>
                    <div class="d-flex">
                        <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-slate-900"
                            onclick="sidebarType(this)">Dark</button>
                        <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white"
                            onclick="sidebarType(this)">White</button>
                    </div>
                    <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                    <!-- Navbar Fixed -->
                    <div class="mt-3">
                        <h6 class="mb-0">Navbar Fixed</h6>
                    </div>
                    <div class="form-check form-switch ps-0">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                            onclick="navbarFixed(this)">
                    </div>
                    <hr class="horizontal dark my-sm-4">
                    <a class="btn bg-gradient-dark w-100" target="_blank"
                        href="https://www.creative-tim.com/product/corporate-ui-dashboard-laravel">Free Download</a>
                    <a class="btn btn-outline-dark w-100" target="_blank"
                        href="https://www.creative-tim.com/learning-lab/bootstrap/installation-guide/corporate-ui-dashboard">View
                        documentation</a>
                    <div class="w-100 text-center">
                        <a class="github-button" href="https://github.com/creativetimofficial/corporate-ui-dashboard" target="_blank"
                            data-icon="octicon-star" data-size="large" data-show-count="true"
                            aria-label="Star creativetimofficial/corporate-ui-dashboard on GitHub">Star</a>
                        <h6 class="mt-3">Thank you for sharing!</h6>
                        <a href="https://twitter.com/intent/tweet?text=Check%20Corporate%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fcorporate-ui-dashboard"
                            class="btn btn-dark mb-0 me-2" target="_blank">
                            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/corporate-ui-dashboard-laravel"
                            class="btn btn-dark mb-0 me-2" target="_blank">
                            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</div>
