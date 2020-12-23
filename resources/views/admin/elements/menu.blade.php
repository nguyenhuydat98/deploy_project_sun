<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="{{ trans('admin.nemu.search') }}">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                </span>
                </div>
            <li>
                <a href="{{ route('admin.dashboard') }}" class="active">
                    <i class="fa fa-dashboard fa-fw"></i>
                    {{ trans('admin.menu.dashboard') }}
                </a>
            </li>
            <li>
                <a href="{{ route('order_chart') }}" class="active">
                    <i class="fa fa-bar-chart-o fa-fw"></i>
                    {{ trans('admin.menu.chart') }}
                </a>
            </li>
            <li>
                <a href="#" >
                    <i class="fa fa-table fa-fw"></i>
                    {{ trans('admin.menu.user_management') }}
                </a>
            </li>
            @can('viewAny', App\Models\Product::class)
                <li>
                    <a href=""><i class="fa fa-table fa-fw"></i>
                        {{ trans('admin.menu.product_management') }}
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ route('products.index') }}">
                                {{ trans('admin.menu.product_management.list_product') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('categories.index')}}">
                                {{ trans('admin.menu.product_management.category') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('brands.index') }}">
                                {{ trans('admin.menu.product_management.brand') }}
                            </a>
                        </li>
                    </ul>
                </li>
            @endcan
            @can('viewAny', App\Models\Order::class)
                <li>
                    <a href="{{ route('orders.index') }}"><i class="fa fa-table fa-fw"></i> {{ trans('admin.menu.order_management') }}</a>
                </li>
            @endcan
            @can('viewAny', App\Models\Supplier::class)
                <li>
                    <a href="{{ route('suppliers.index') }}">
                        <i class="fa fa-table fa-fw"></i>
                        {{ trans('admin.menu.supplier_management') }}
                    </a>
                </li>
            @endcan
        </ul>
    </div>
</div>
