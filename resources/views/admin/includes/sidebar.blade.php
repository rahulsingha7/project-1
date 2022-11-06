<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('dashboard')}}">
    <div class="sidebar-brand-text mx-3">Admin</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <span>Students</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('admin-total-student')}}">Total Students</a>
            <a class="collapse-item" href="{{url('admin-pending-student')}}">Pending Requests</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2"
        aria-expanded="true" aria-controls="collapsePages2">
        <span>Teachers</span>
    </a>
    <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('admin-total-teacher')}}">Total Teachers</a>
            <a class="collapse-item" href="{{url('admin-pending-teacher')}}">Pending Requests</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages3"
        aria-expanded="true" aria-controls="collapsePages3">
        <span>Courses</span>
    </a>
    <div id="collapsePages3" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('admin/create-course')}}">Create Courses</a>
            <a class="collapse-item" href="{{url('admin/all-course')}}"> All Courses</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages4"
        aria-expanded="true" aria-controls="collapsePages4">
        <span>Session</span>
    </a>
    <div id="collapsePages4" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('admin/create-session')}}">Create Session</a>
            <a class="collapse-item" href="{{url('admin/all-session')}}">All Session</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages5"
        aria-expanded="true" aria-controls="collapsePages5">
        <span>Section</span>
    </a>
    <div id="collapsePages5" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('admin/create-section')}}">Create Section</a>
            <a class="collapse-item" href="{{url('admin/all-section')}}">All Section</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages7"
        aria-expanded="true" aria-controls="collapsePages7">
        <span>Semester</span>
    </a>
    <div id="collapsePages7" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('admin/create-semester')}}">Create Semester</a>
            <a class="collapse-item" href="{{url('admin/all-semester')}}">All Semester</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages6"
        aria-expanded="true" aria-controls="collapsePages6">
        <span>Assign Teacher</span>
    </a>
    <div id="collapsePages6" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('admin/assign-teacher')}}">Assign Teacher</a>
            <a class="collapse-item" href="{{url('admin/allAssigned-teacher')}}">View Assigned Teacher</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{url('login')}}">
        <span>LogOut</span></a>
</li>
</ul>
