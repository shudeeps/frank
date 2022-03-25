<div class="wrapper">

    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Search Content</h3>
        </div>

        <ul class="list-unstyled components">
            <p>Dummy Heading</p>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Category</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Car</a>
                    </li>
                    <li>
                        <a href="#">Book</a>
                    </li>
                    <li>
                        <a href="#">Electronic</a>
                    </li>
                </ul>
            </li>
                       
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Page Content -->
    <div id="content">
    @yield('content')
    </div>

</div>