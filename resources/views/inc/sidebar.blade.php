<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div>
            <p class="app-sidebar__user-name"></p>
            <p class="app-sidebar__user-designation">Red Auto Rent</p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item active" href="dashboard.html"><i class="app-menu__icon fa fa-dashboard"></i><span
                    class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                    class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Add Your Car</span><i
                    class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{url('add_car')}}"><i class="icon fa fa-circle-o"></i>Add your
                        car</a></li>
                <li><a class="treeview-item" href="{{url('car_list')}}"><i class="icon fa fa-circle-o"></i>Car List</a>
                </li>
            </ul>
        </li>
</aside>
