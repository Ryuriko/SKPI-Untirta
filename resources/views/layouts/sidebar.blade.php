<nav id="sidebar" class="p-3">
    <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
        <i class="fa fa-bars"></i>
        <span class="sr-only">Toggle Menu</span>
        </button>
    </div>
    <h1><a href="/" class="logo">SKPI</a></h1>
    <ul class="list-unstyled components mb-5">
        <li class="{{Request::is('/') | Request::is('login') | Request::is('registration') ? 'active' : ''}}">
            <a href="/"><span class="fa fa-home mr-3"></span> Homepage</a>
        </li>
        <li class="{{Request::is('submissions*') ? 'active' : ''}}">
            <a href="/submissions"><span class="fa fa-paper-plane mr-3"></span> Submissions</a>
        </li>
        <li class="{{Request::is('prodi/user*') ? 'active' : ''}}">
            <a href="/prodi/user"><span class="fa fa-user mr-3"></span> Users</a>
        </li>
        <li class="{{Request::is('prodi/skpi*') ? 'active' : ''}}">
            <a href="/prodi/skpi"><span class="fa fa-sticky-note mr-3"></span> SKPI</a>
        </li>
        <li class="{{Request::is('dekanat*') ? 'active' : ''}}">
            <a href="/dekanat/skpi"><span class="fa fa-plane mr-3"></span> SKPI</a>
        </li>
    </ul>
</nav>