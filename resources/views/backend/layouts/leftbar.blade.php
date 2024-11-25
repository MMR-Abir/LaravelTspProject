<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li>
            <a class="active" href="{{url('admin/dashboard')}}" data-toggle="collapse" data-target="#dashboard_dr"><i class="icon-picture mr-10"></i>Dashboard <span class="pull-right"><span class="label label-success mr-10">4</span><i class="fa fa-fw fa-angle-down"></i></span></a>
            <ul id="dashboard_dr" class="collapse collapse-level-1">
                <li>
                    <a href="index.html">Analytical</a>
                </li>
                <li>
                    <a class="active" href="index2.html">Demographic</a>
                </li>
                <li>
                    <a href="index3.html">Project</a>
                </li>
                <li>
                    <a href="index4.html">Classic</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><i class="icon-basket-loaded mr-10"></i>Specialist<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
            <ul id="ecom_dr" class="collapse collapse-level-1">
                <li>
                    <a href="{{route('specialist.index')}}">All Specialist</a>
                </li>
                <li>
                    <a href="{{url('admin/specialist/create')}}">New Specialist</a>
                </li>

            </ul>
        </li>

        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#dr_list"><i class="icon-basket-loaded mr-10"></i>Doctor Specialist<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
            <ul id="dr_list" class="collapse collapse-level-1">
                <li>
                    <a href="{{route('doctor.index')}}">Doctor Specialist</a>
                </li>
                <li>
                    <a href="{{url('admin/doctor/create')}}">New Doctor Specialist</a>
                </li>

            </ul>
        </li>


    </ul>
</div>
