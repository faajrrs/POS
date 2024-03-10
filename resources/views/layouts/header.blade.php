<style>
/* CSS untuk mengubah warna navbar menjadi coklat */
.navbar-static-top {
    background-color: #8B4513 !important; /* Warna coklat */
    color: white; /* Warna teks */
}
/* CSS untuk mengubah warna tombol "Keluar" dan "Profil" menjadi merah */
.user-footer div .btn {
    background-color: #FF0000 !important; /* Warna merah */
    color: white !important; /* Warna teks putih */
}
/* CSS untuk mengubah warna header menjadi coklat */
.main-header a {
    background-color: #964B00 !important; /* Warna coklat */
}
/* CSS untuk efek hover pada menu Administrator */
.navbar-nav > li.dropdown.user.user-menu:hover > a {
    background-color: #FF0000 !important; /* Warna merah saat di-hover */
}

</style>
<header class="main-header">
    <!-- Logo -->
    <a href="http://127.0.0.1:8000/dashboard" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        @php
            $words = explode(' ', $setting->nama_perusahaan);
            $word  = '';
            foreach ($words as $w) {
                $word .= $w[0];
            }
        @endphp
        <span class="logo-mini">{{ $word }}</span>
        <!-- logo for regular state and mobile devices -->
        <b><span class="logo-lg"><b>{{ $setting->nama_perusahaan }}</b></span><b>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ url(auth()->user()->foto ?? '') }}" class="user-image img-profil"
                            alt="User Image">
                        <span class="hidden-xs">{{ auth()->user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ url(auth()->user()->foto ?? '') }}" class="img-circle img-profil"
                                alt="User Image">

                            <p>
                                {{ auth()->user()->name }} - {{ auth()->user()->email }}
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ route('user.profil') }}" class="btn btn-default btn-flat">Profil</a>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat"
                                    onclick="$('#logout-form').submit()">Keluar</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
    @csrf
</form>