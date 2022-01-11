<nav class="navbar navbar-expand-lg navbar-dark bg-warning  ">
      <div class="container">
        <a class="navbar-header" href="#"><img width="230px" src="{{ asset('utama/logo_iapi.gif') }}" ></a>
        <a class="navbar-header" href="#"><img width="130px" src="{{ asset('utama/ifac.png') }}" ></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-black{{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black{{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black{{ ($active === "posts") ? 'active' : '' }}" href="/posts">Download</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black{{ ($active === "categories") ? 'active' : '' }}" href="/categories">Contact</a>
                            </li>
                            </ul>

                            <ul class="navbar-nav">
                                @auth
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Welcome Back, {{ auth()->user()->name }}
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                    <form action="/logout" method="post">
                                      @csrf
                                      <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Log Out</a></button>
                                    </form>
                                    </li>
                                  </ul>
                                </li>
                                @else
                                <li class="nav-item">
                                  <a href="/login" class="nav-link text-black d-flex {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i>Login</a>
                                </li>
                                @endauth
                              </ul>
                </div>

        </div>
  </nav>
