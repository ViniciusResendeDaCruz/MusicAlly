<nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="<?php base_url('dashboard') ?>"><img
                        style="width: 100px;height: 60px;" src="<?php echo base_url('assets/images/MusicAlly.png') ?>"
                        alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini" href="<?php echo base_url('dashboard') ?>"><img
                        style="width: 80px;height: 40px;"
                        src="<?php echo base_url('assets/images/MusicAlly-mini.png') ?>" alt="logo" /></a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle"
                                    src="<?php echo base_url('assets/images/faces/face15.jpg') ?>" alt="" />
                                <span class="count bg-success"></span>
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal">
                                    <?php echo $user['nome'] ?>
                                </h5>
                                <span><?php echo $user['tipo'] == 'P' ? 'Produtor' : 'Membro Comum' ?></span>
                            </div>
                        </div>
                        <a href="#" id="profile-dropdown" data-toggle="dropdown"><i
                                class="mdi mdi-dots-vertical"></i></a>
                        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                            aria-labelledby="profile-dropdown">
                            <a href="<?php echo base_url('perfil') ?>" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-settings text-primary"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">
                                        Minha Conta
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?php echo base_url('playlist') ?>" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-onepassword text-info"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">
                                        Minhas Playlists
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Navegação</span>
                </li>
                <!-- Itens do menu lateral -->

                <li class="nav-item menu-items">
                    <a class="nav-link" href="<?php echo base_url('dashboard') ?>">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="<?php echo base_url('playlist') ?>">
                        <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                        </span>
                        <span class="menu-title">Minhas Playlists</span>
                    </a>
                </li>
                <?php if ($user['tipo'] == 'P') : ?>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="<?php echo base_url('myMusica') ?>">
                        <span class="menu-icon">
                            <i class="mdi mdi-music-note"></i>
                        </span>
                        <span class="menu-title">Minhas Músicas</span>
                    </a>
                </li>
                <?php endif ?>


                <li class="nav-item menu-items">
                    <a class="nav-link" href="<?php echo base_url('relatorio') ?>">
                        <span class="menu-icon">
                            <i class="mdi mdi-chart-bar"></i>
                        </span>
                        <span class="menu-title">Relatórios</span>
                    </a>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="<?php echo base_url('perfil') ?>">
                        <span class="menu-icon">
                            <i class="mdi mdi-contacts"></i>
                        </span>
                        <span class="menu-title">Minha conta</span>
                    </a>
                </li>

                <!-- Fim Itens do menu lateral -->
            </ul>
        </nav>