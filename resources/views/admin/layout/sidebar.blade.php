  <aside class="sidebar navbar-default" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{ URL('admin_dashboard')}}" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                      
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Product<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{URL('addproduct')}}">Add Product</a>
                                </li>
                                <li>
                                    <a href="{{URL('productlist')}}">Product List</a>
                                </li>
                            </ul>
                           
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{URL('adduser')}}">Add User</a>
                                </li>
                                <li>
                                    <a href="{{URL('userlist')}}">Users List</a>
                                </li>
                            </ul>
                           
                        </li>
                    </ul>
                </div>
            </aside>