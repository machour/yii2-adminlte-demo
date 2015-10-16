<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'MAIN NAVIGATION', 'icon' => 'fa fa-th', 'options' => ['class' => 'header']],
                    [
                        'label' => 'Dashboard',
                        'icon' => 'fa fa-dashboard',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Dashboard v1', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'view' => 'index']],
                            ['label' => 'Dashboard v2', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'view' => 'index2']],
                        ],
                    ],
                    [
                        'label' => 'Layout Options',
                        'icon' => 'fa fa-files-o',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Top Navigation', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'layout', 'view' => 'top-nav']],
                            ['label' => 'Boxed', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'layout', 'view' => 'boxed']],
                            ['label' => 'Fixed', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'layout', 'view' => 'fixed']],
                            ['label' => 'Collapsed Sidebar', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'layout', 'view' => 'collapsed-sidebar']],
                        ],
                    ],
                    ['label' => 'Widgets', 'icon' => 'fa fa-th', 'url' => ['site/index', 'view' => 'widgets']],
                    [
                        'label' => 'Charts',
                        'icon' => 'fa fa-pie-chart',
                        'url' => '#',
                        'items' => [
                            ['label' => 'ChartJS', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'charts', 'view' => 'chartjs']],
                            ['label' => 'Morris', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'charts', 'view' => 'morris']],
                            ['label' => 'Flot', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'charts', 'view' => 'flot']],
                            ['label' => 'Inline charts', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'charts', 'view' => 'inline']],
                        ],
                    ],
                    [
                        'label' => 'UI Elements',
                        'icon' => 'fa fa-laptop',
                        'url' => '#',
                        'items' => [
                            ['label' => 'General', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'UI', 'view' => 'general']],
                            ['label' => 'Icons', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'UI', 'view' => 'icons']],
                            ['label' => 'Buttons', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'UI', 'view' => 'buttons']],
                            ['label' => 'Sliders', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'UI', 'view' => 'sliders']],
                            ['label' => 'Timeline', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'UI', 'view' => 'timeline']],
                            ['label' => 'Modals', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'UI', 'view' => 'modals']],
                        ],
                    ],
                    [
                        'label' => 'Forms',
                        'icon' => 'fa fa-edit',
                        'url' => '#',
                        'items' => [
                            ['label' => 'General Elements', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'forms', 'view' => 'general']],
                            ['label' => 'Advanced Elements', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'forms', 'view' => 'advanced']],
                            ['label' => 'Editors', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'forms', 'view' => 'editors']],
                        ],
                    ],
                    [
                        'label' => 'Tables',
                        'icon' => 'fa fa-table',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Simple tables', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'tables', 'view' => 'simple']],
                            ['label' => 'Data tables', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'tables', 'view' => 'data']],
                        ],
                    ],
                    ['label' => 'Calendar', 'icon' => 'fa fa-calendar', 'url' => ['site/index', 'view' => 'calendar']],
                    ['label' => 'Mailbox', 'icon' => 'fa fa-envelope', 'url' => ['site/index', 'view' => 'mailbox']],
                    [
                        'label' => 'Examples',
                        'icon' => 'fa fa-folder',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Invoice', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'examples', 'view' => 'invoice']],
                            ['label' => 'Profile', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'examples', 'view' => 'profile']],
                            ['label' => 'Login', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'examples', 'view' => 'login']],
                            ['label' => 'Register', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'examples', 'view' => 'register']],
                            ['label' => 'Lockscreen', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'examples', 'view' => 'lockscreen']],
                            ['label' => '404 Error', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'examples', 'view' => '404']],
                            ['label' => '500 Error', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'examples', 'view' => '500']],
                            ['label' => 'Blank Page', 'icon' => 'fa fa-circle-o', 'url' => ['site/index', 'folder' => 'examples', 'view' => 'blank']],
                        ],
                    ],
                    [
                        'label' => 'Multilevel',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Level One', 'icon' => 'fa fa-circle-o', 'url' => '#'],
                            ['label' => 'Level One', 'icon' => 'fa fa-circle-o', 'url' => '#', 'items' => [
                                ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#', 'items' => [
                                    ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#'],
                                    ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#'],
                                ]
                            ]]],
                            ['label' => 'Level One', 'icon' => 'fa fa-circle-o', 'url' => '#'],
                        ],
                    ],
                    ['label' => 'Documentation', 'icon' => 'fa fa-book', 'url' => '#'],
                    ['label' => 'LABELS', 'icon' => 'fa fa-th', 'options' => ['class' => 'header']],
                    ['label' => 'Important', 'icon' => 'fa fa-circle-o text-red', 'url' => '#'],
                    ['label' => 'Warning', 'icon' => 'fa fa-circle-o text-yellow', 'url' => '#'],
                    ['label' => 'Information', 'icon' => 'fa fa-circle-o text-aqua', 'url' => '#'],
                ],
            ]
        ) ?>

    </section>

</aside>
