<nav class="navbar navbar-default">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo e(url('/catalog')); ?>">
                <span class="glyphicon glyphicon-tower" aria-hidden="true"></span>
                Videoclub-Ian
            </a>
        </div>

        <?php if( true || Auth::check() ): ?>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li<?php echo e(Request::is('catalog*') && !Request::is('catalog/create')? ' class=active' : ''); ?>>
                    <a href="<?php echo e(url('/catalog')); ?>">
                        <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                        Catálogo
                    </a>
                </li>
                <li<?php echo e(Request::is('catalog/create') ? ' class=active' : ''); ?>>
                    <a href="<?php echo e(url('/catalog/create')); ?>">
                        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                        Nueva película
                    </a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?php echo e(url('/')); ?>">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        Cerrar sesión
                    </a>
                </li>
            </ul>
        </div>
        <?php endif; ?>
    </div>
</nav>
