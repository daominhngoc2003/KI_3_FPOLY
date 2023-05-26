
    <div class="sidebar">
        <div class="sidebar-logo">
            <a href="../index.php">
                <img src="../image/logo.png" alt="Protend logo" >
            </a>
            <div class="sidebar-close" id="sidebar-close">
                <i class='bx bx-left-arrow-alt'></i>
            </div>
        </div>

        <div class="simlebar-sc" data-simplebar>
            <ul class="sidebar-menu tf">
                <li>
                    <a href="index.php">
                        <i class='bx bxs-home'></i>
                        <span>Trang chủ</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?act=listdm">
                        <i class='bx bxs-bolt'></i>
                        <span>Danh mục</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?act=listsp">
                        <i class='bx bxs-user'></i>
                        <span>Sản phẩm</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?act=listtaikhoan">
                        <i class='bx bxs-dashboard'></i>
                        <span>Tài khoản</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?act=listbill">
                        <i class='bx bxs-dashboard'></i>
                        <span>Hóa đơn</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?act=listbl">
                        <i class='bx bx-calendar'></i>
                        <span>Bình luận</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?act=listthongke">
                        <i class='bx bxs-component'></i>
                        <span>Thống kê</span>
                    </a>
                </li>
                <li>
                    <a class="darkmode-toggle" id="darkmode-toggle" onclick="switchTheme()">
                        <div>
                            <i class='bx bx-cog mr-10'></i>
                            <span>darkmode</span>
                        </div>
                        <span class="darkmode-switch"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
<div class="main-header">
    <div class="d-flex">
        <div class="mobile-toggle" id="mobile-toggle">
            <i class='bx bx-menu'></i>
        </div>
        
    </div>
        <div class="dropdown d-inline-block mt-12">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php if($_SESSION['username']){ extract($_SESSION['username']); ?>    
                <img class="rounded-circle header-profile-user"  src="<?= $image_user ?>" alt="Header Avatar">
                <span class="pulse-css"></span>
                <span class="info d-xl-inline-block  color-span">
                    
                    <span class="d-block fs-20 font-w600"><?= $username ?></span>
                    <span class="d-block mt-7"><?= $email ?></span>
                </span>
                <i class='bx bx-chevron-down'></i>
                <?php } ?>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i>
                    <span>Profile</span></a>
                <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i>
                    <span>My Wallet</span></a>
                <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span>Settings</span></a>
                <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i>
                    <span>Lock screen</span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="../index.php"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                    <span>Logout</span></a>
            </div>
        </div>
    </div>
</div>