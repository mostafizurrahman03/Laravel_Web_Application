@php use Illuminate\Support\Facades\Auth; @endphp
<?php
function active($selectedMenu){
    $menu = strtok(Route::current()->getName(),".");
//    echo $menu."*";
//    echo $selectedMenu."#";
//    exit;
    if($menu==$selectedMenu){
        echo "active";
    }
}
?>
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading"></div>
                <a class="nav-link {{ Request::is('index.html') ? 'active' : '' }}" href="/dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <div class="sb-sidenav-menu-heading">Interface</div>



                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProject" aria-expanded="false" aria-controls="collapseProject">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Products
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseProject" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <a class="nav-link" href="{{ route('products.create') }}">Add New</a>
                    <a class="nav-link" href="{{ route('products.index') }}">Manage Products</a>

                    </nav>
                </div>


                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProfile" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Users
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseProfile" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link {{active('users')}}" href="{{ route('users.index') }}">Users List</a>
                    </nav>
                </div>

            </div>

        </div>
    </nav>
</div>