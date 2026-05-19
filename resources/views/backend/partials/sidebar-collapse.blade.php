<div id="miniSidebar">
    <div class="brand-logo">
        <a class="d-none d-md-flex align-items-center gap-2" href="@@webRoot/index.html">
            <img src="{{ asset('backend/assets/images/brand/logo/logo-icon.svg') }}" alt="" />
            <span class="fw-bold fs-4  site-logo-text">Dasher</span>
        </a>
    </div>
    <ul class="navbar-nav flex-column  ">

        <!-- Nav item -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <span class="nav-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-dashboard">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M10 13a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M13.45 11.55l2.05 -2.05" />
                        <path d="M6.4 20a9 9 0 1 1 11.2 0l-11.2 0" />
                    </svg>
                </span>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('content.information') }}">
                <span class="nav-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-bookmarks">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 10v11l-5 -3l-5 3v-11a3 3 0 0 1 3 -3h4a3 3 0 0 1 3 3" />
                        <path d="M11 3h5a3 3 0 0 1 3 3v11" />
                    </svg>
                </span>
                <span class="text">Daftar Informasi</span>
            </a>
        </li>

        {{-- Title --}}
        <li class="nav-item">
            <div class="nav-heading">Pengaturan Users</div>
            <hr class="mx-5 nav-line mb-1" />
        </li>
        <!-- Nav item -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <span class="nav-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-key">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h5" />
                        <path d="M18.5 18.5l-3.5 3.5l-1.5 -1.5" />
                        <path d="M18.554 18.414a2 2 0 1 1 2.828 -2.828a2 2 0 0 1 -2.828 2.828" />
                        <path d="M16 19l1 1" />
                    </svg>
                </span>
                <span class="text">Pengaturan Users</span>
            </a>
            <ul class="dropdown-menu flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('master.users') }}">
                        <!-- ICON -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-user-share">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h3" />
                            <path d="M16 22l5 -5" />
                            <path d="M21 21.5v-4.5h-4.5" />
                        </svg>
                        <span>Users</span>
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('master.roles') }}">
                        <!-- ICON -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-home-lock">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12h-2l9 -9l8 8" />
                            <path d="M5 12v7a2 2 0 0 0 2 2h6" />
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2c.688 0 1.294 .347 1.654 .875" />
                            <path d="M17 19a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-2" />
                            <path d="M18 18v-1.5a1.5 1.5 0 1 1 3 0v1.5" />
                        </svg>
                        <span>Role</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('master.permissions') }}">
                        <!-- ICON -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-ai-gateway">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 6.5a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0" />
                            <path d="M15 6.5a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0" />
                            <path d="M15 17.5a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0" />
                            <path d="M4 17.5a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0" />
                            <path d="M8.5 15.5l7 -7" />
                        </svg>
                        <span>Permissions</span>
                    </a>
                </li>
                @can('Logs-View')
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2" href="{{ route('master.logs') }}">
                            <!-- ICON -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-api-book">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 1.006 -.5" />
                                <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                                <path d="M3 6v13" />
                                <path d="M12 6v13" />
                                <path d="M21 6v6" />
                                <path d="M17.001 19a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M19.001 15.5v1.5" />
                                <path d="M19.001 21v1.5" />
                                <path d="M22.032 17.25l-1.299 .75" />
                                <path d="M17.27 20l-1.3 .75" />
                                <path d="M15.97 17.25l1.3 .75" />
                                <path d="M20.733 20l1.3 .75" />
                            </svg>
                            <span>Logs</span>
                        </a>
                    </li>
                @endcan
            </ul>
        </li>
    </ul>

</div>

{{-- Mobile Sidebar --}}
<div class="offcanvasNav offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">

        <a class="d-flex align-items-center gap-2" href="{{ route('content.information') }}">
            <img src="{{ asset('backend/assets/images/brand/logo/logo-icon.svg') }}" alt="" />
            <span class="fw-bold fs-4  site-logo-text">Dasher</span>
        </a>

        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-0">
        <ul class="navbar-nav flex-column  ">


            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link" href="@@webRoot/index.html">
                    <span class="nav-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-dashboard">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 13a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M13.45 11.55l2.05 -2.05" />
                            <path d="M6.4 20a9 9 0 1 1 11.2 0l-11.2 0" />
                        </svg>
                    </span>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('content.information') }}">
                    <span class="nav-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-bookmarks">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 10v11l-5 -3l-5 3v-11a3 3 0 0 1 3 -3h4a3 3 0 0 1 3 3" />
                            <path d="M11 3h5a3 3 0 0 1 3 3v11" />
                        </svg>
                    </span>
                    <span class="text">Daftar Informasi</span>
                </a>
            </li>

            {{-- Title --}}
            <li class="nav-item">
                <div class="nav-heading">Pengaturan Users</div>
                <hr class="mx-5 nav-line mb-1" />
            </li>
            <!-- Nav item -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <span class="nav-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-user-key">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h5" />
                            <path d="M18.5 18.5l-3.5 3.5l-1.5 -1.5" />
                            <path d="M18.554 18.414a2 2 0 1 1 2.828 -2.828a2 2 0 0 1 -2.828 2.828" />
                            <path d="M16 19l1 1" />
                        </svg>
                    </span>
                    <span class="text">Pengaturan Users</span>
                </a>
                <ul class="dropdown-menu flex-column">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2" href="{{ route('master.users') }}">
                            <!-- ICON -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-user-share">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h3" />
                                <path d="M16 22l5 -5" />
                                <path d="M21 21.5v-4.5h-4.5" />
                            </svg>
                            <span>Users</span>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2" href="{{ route('master.roles') }}">
                            <!-- ICON -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-home-lock">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12h-2l9 -9l8 8" />
                                <path d="M5 12v7a2 2 0 0 0 2 2h6" />
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2c.688 0 1.294 .347 1.654 .875" />
                                <path
                                    d="M17 19a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-2" />
                                <path d="M18 18v-1.5a1.5 1.5 0 1 1 3 0v1.5" />
                            </svg>
                            <span>Role</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2" href="{{ route('master.permissions') }}">
                            <!-- ICON -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-ai-gateway">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 6.5a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0" />
                                <path d="M15 6.5a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0" />
                                <path d="M15 17.5a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0" />
                                <path d="M4 17.5a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0" />
                                <path d="M8.5 15.5l7 -7" />
                            </svg>
                            <span>Permissions</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2" href="{{ route('master.logs') }}">
                            <!-- ICON -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-api-book">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 1.006 -.5" />
                                <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                                <path d="M3 6v13" />
                                <path d="M12 6v13" />
                                <path d="M21 6v6" />
                                <path d="M17.001 19a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M19.001 15.5v1.5" />
                                <path d="M19.001 21v1.5" />
                                <path d="M22.032 17.25l-1.299 .75" />
                                <path d="M17.27 20l-1.3 .75" />
                                <path d="M15.97 17.25l1.3 .75" />
                                <path d="M20.733 20l1.3 .75" />
                            </svg>
                            <span>Logs</span>
                        </a>
                    </li>

                </ul>
            </li>

        </ul>
    </div>
</div>
