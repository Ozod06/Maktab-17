<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="{{ route('index') }}">
            <img src="{{ asset('/admin/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
            <h5 class="logo-text">Dashtreme Admin</h5>
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li class="dropdown active">
            <a href="" class="nav-link active">
                <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li class="dropdown ">
            <a href="{{ route('admin.employee.index') }}" class="nav-link ">
                <i class="zmdi zmdi-flattr"></i> <span>Employees</span></a>
        </li>
        <li class="dropdown ">
            <a href="{{ route('admin.category.index') }}" class="nav-link ">
                <i class="zmdi zmdi-xbox"></i> <span>Category</span></a>
        </li>
        <li class="dropdown ">
            <a href="{{ route('admin.position.index') }}" class="nav-link ">
                <i class="zmdi zmdi-paypal"></i> <span>Position</span></a>
        </li>
        <li class="dropdown ">
            <a href="{{ route('admin.empcategory.index') }}" class="nav-link ">
                <i class="zmdi zmdi-vimeo"></i> <span>EmpCategory</span></a>
        </li>
        <li class="dropdown ">
            <a href="{{ route('admin.director.index') }}" class="nav-link ">
                <i class="zmdi zmdi-youtube"></i> <span>Director</span></a>
        </li>
        <li class="dropdown ">
            <a href="{{ route('admin.statistic.index') }}" class="nav-link ">
                <i class="zmdi zmdi-odnoklassniki"></i> <span>Statistic</span></a>
        </li>
        <li class="dropdown ">
            <a href="{{ route('admin.post.index') }}" class="nav-link ">
                <i class="zmdi zmdi-local-post-office"></i> <span>Posts</span></a>
        </li>
        <li class="dropdown ">
            <a href="{{ route('admin.resourse.index') }}" class="nav-link ">
                <i class="zmdi zmdi-8tracks"></i> <span>Resourse</span></a>
        </li>
        <li class="dropdown ">
            <a href="{{ route('admin.infografik.index') }}" class="nav-link ">
                <i class="zmdi zmdi-info"></i> <span>Infografika</span></a>
        </li>
        <li class="dropdown ">
            <a href="{{ route('admin.classroom.index') }}" class="nav-link ">
                <i class="zmdi zmdi-city"></i> <span>Classroom</span></a>
        </li>
        <li class="dropdown ">
            <a href="{{ route('admin.gallery.index') }}" class="nav-link ">
                <i class="zmdi zmdi-collection-folder-image"></i> <span>Gallery</span></a>
        </li>
        <li class="dropdown ">
            <a href="{{ route('admin.club.index') }}" class="nav-link ">
                <i class="zmdi zmdi-collection-folder-image"></i> <span>Clubs</span></a>
        </li>


    </ul>

</div>
