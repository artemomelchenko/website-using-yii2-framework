<?php

$controllerId = Yii::$app->controller->uniqueId;
$username = \common\models\User::findOne(Yii::$app->user->id)->username;
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="/admin/img/Logo_128x128.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Admin BizMental</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/admin/img/No avatar.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="/admin/" class="d-block"><?= $username ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview menu-open">
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-server"></i>
                                <p>
                                    Main Page
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/main/index" class="nav-link <?= $controllerId == 'main' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Settings for Main Page</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/services/index" class="nav-link <?= $controllerId == 'services' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Services</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/faq/index" class="nav-link <?= $controllerId == 'faq' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>FAQ</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-server"></i>
                                <p>
                                    Services Page
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/subservices/index" class="nav-link <?= $controllerId == 'subservices' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>SubServices</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/page-services/index" class="nav-link <?= $controllerId == 'page-services' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Settings for Services</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-server"></i>
                                <p>
                                    Contact page
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item <?= $controllerId == 'contact' ? 'active' : '' ?>">
                                    <a href="/admin/contact/index" class="nav-link <?= $controllerId == 'contact' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Settings for contact</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-server"></i>
                                <p>
                                    Testimonials Page
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/testimonials/index" class="nav-link <?= $controllerId == 'testimonials' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Testimonals</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/page-testimonials/index" class="nav-link <?= $controllerId == 'page-testimonials' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Settings for testimonials</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?= $controllerId == 'settings' ? 'active' : '' ?>">
                            <a href="/admin/settings/index" class="nav-link <?= $controllerId == 'settings' ? 'active' : '' ?>">
                                <i class="fas fa-server nav-icon"></i>
                                <p>Settings</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
<!--                <li class="nav-item">-->
<!--                    <a href="/admin/services/index" class="nav-link --><?//= $controllerId == 'services' ? 'active' : '' ?><!--">-->
<!--                        <i class="nav-icon fas fa-server"></i>-->
<!--                        <p>-->
<!--                            Services-->
<!--                        </p>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a href="/admin/faq/index" class="nav-link --><?//= $controllerId == 'faq' ? 'active' : '' ?><!--">-->
<!--                        <i class="nav-icon fas fa-server"></i>-->
<!--                        <p>-->
<!--                            FAQ-->
<!--                        </p>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a href="/admin/subservices/index" class="nav-link --><?//= $controllerId == 'subservices' ? 'active' : '' ?><!--">-->
<!--                        <i class="nav-icon fas fa-server"></i>-->
<!--                        <p>-->
<!--                            Subservices-->
<!--                        </p>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a href="/admin/testimonials/index" class="nav-link --><?//= $controllerId == 'testimonials' ? 'active' : '' ?><!--">-->
<!--                        <i class="nav-icon fas fa-server"></i>-->
<!--                        <p>-->
<!--                            Testimonials-->
<!--                        </p>-->
<!--                    </a>-->
<!--                </li>-->

<!--                <li class="nav-item has-treeview menu-open">-->
<!--                    <a href="#" class="nav-link active">-->
<!--                        <i class="nav-icon fas fa-tachometer-alt"></i>-->
<!--                        <p>-->
<!--                            Dashboard-->
<!--                            <i class="right fas fa-angle-left"></i>-->
<!--                        </p>-->
<!--                    </a>-->
<!--                    <ul class="nav nav-treeview">-->
<!--                        <li class="nav-item">-->
<!--                            <a href="./index.html" class="nav-link active">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Dashboard v1</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="./index2.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Dashboard v2</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="./index3.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Dashboard v3</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->

<!--                <li class="nav-header">EXAMPLES</li>-->
<!--                <li class="nav-item">-->
<!--                    <a href="pages/calendar.html" class="nav-link">-->
<!--                        <i class="nav-icon far fa-calendar-alt"></i>-->
<!--                        <p>-->
<!--                            Calendar-->
<!--                            <span class="badge badge-info right">2</span>-->
<!--                        </p>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a href="pages/gallery.html" class="nav-link">-->
<!--                        <i class="nav-icon far fa-image"></i>-->
<!--                        <p>-->
<!--                            Gallery-->
<!--                        </p>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="nav-item has-treeview">-->
<!--                    <a href="#" class="nav-link">-->
<!--                        <i class="nav-icon far fa-envelope"></i>-->
<!--                        <p>-->
<!--                            Mailbox-->
<!--                            <i class="fas fa-angle-left right"></i>-->
<!--                        </p>-->
<!--                    </a>-->
<!--                    <ul class="nav nav-treeview">-->
<!--                        <li class="nav-item">-->
<!--                            <a href="pages/mailbox/mailbox.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Inbox</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="pages/mailbox/compose.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Compose</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="pages/mailbox/read-mail.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Read</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="nav-item has-treeview">-->
<!--                    <a href="#" class="nav-link">-->
<!--                        <i class="nav-icon fas fa-book"></i>-->
<!--                        <p>-->
<!--                            Pages-->
<!--                            <i class="fas fa-angle-left right"></i>-->
<!--                        </p>-->
<!--                    </a>-->
<!--                    <ul class="nav nav-treeview">-->
<!--                        <li class="nav-item">-->
<!--                            <a href="pages/examples/invoice.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Invoice</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="pages/examples/profile.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Profile</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="pages/examples/e_commerce.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>E-commerce</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="pages/examples/projects.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Projects</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="pages/examples/project_add.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Project Add</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="pages/examples/project_edit.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Project Edit</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="pages/examples/project_detail.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Project Detail</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="pages/examples/contacts.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Contacts</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="nav-item has-treeview">-->
<!--                    <a href="#" class="nav-link">-->
<!--                        <i class="nav-icon far fa-plus-square"></i>-->
<!--                        <p>-->
<!--                            Extras-->
<!--                            <i class="fas fa-angle-left right"></i>-->
<!--                        </p>-->
<!--                    </a>-->
<!--                    <ul class="nav nav-treeview">-->
<!--                        <li class="nav-item">-->
<!--                            <a href="pages/examples/login.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Login</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="pages/examples/register.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Register</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="pages/examples/forgot-password.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Forgot Password</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="pages/examples/recover-password.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Recover Password</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="pages/examples/lockscreen.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Lockscreen</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="pages/examples/legacy-user-menu.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Legacy User Menu</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="pages/examples/language-menu.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Language Menu</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="pages/examples/404.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Error 404</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="pages/examples/500.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Error 500</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="pages/examples/pace.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Pace</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="pages/examples/blank.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Blank Page</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="starter.html" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Starter Page</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>