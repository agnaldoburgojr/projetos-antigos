            <!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full">
               
        
                <a href="<?=base_url('Acesso/logout');?>" class="btn btn-default pull-right" type="button">
                    <i class="si si-login pull-right"></i>Logout
                </a>
                <a href="<?=base_url('dashboard/relatorio');?>" class="btn btn-default pull-right" type="button">
                    Relatório
                </a>
                <!-- Header Navigation Left -->
                <ul class="nav-header pull-left">
                    <li class="hidden-md hidden-lg">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                            <i class="fa fa-navicon"></i>
                        </button>
                    </li>
                    <!--<li class="hidden-xs hidden-sm">
                         Layout API, functionality initialized in App() -> uiLayoutApi()
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                    </li>-->
                    
                    <!--<li class="visible-xs">
                         Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() 
                        <button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search" data-class="header-search-xs-visible" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </li>-->
                    <!--
                    <li class="js-header-search header-search">
                        <form class="form-horizontal" action="start_backend.html" method="post">
                            <div class="form-material form-material-primary input-group remove-margin-t remove-margin-b">
                                <input class="form-control" type="text" id="base-material-text" name="base-material-text" placeholder="Pesquisar..">
                                <span class="input-group-addon"><i class="si si-magnifier"></i></span>
                            </div>
                        </form>
                    </li>-->
                </ul>
                <!-- END Header Navigation Left -->
            </header>
            <!-- END Header -->
