<nav class="navbar navbar-expand-lg shadow-sm fixed-top" style="background-color: #D8D8D8;">
    <div class="container align-items-center">
        <a class="navbar-brand" href="<?= base_url(); ?>"><img src="img/Logo.png" alt="" class="img-fluid p-3" style="height: 75px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto gap-xl-2">
                <a class="nav-link d-flex gap-2 <?= ($url == "") ? "active" : ''; ?>" href="<?= base_url(); ?>"><i class="bi bi-house-door"></i>
                    <p class="mb-0">Home</p>
                </a>
                <a class="nav-link d-flex gap-2 <?= ($url == "challenges") ? "active" : ''; ?>" href="<?= base_url('/challenges'); ?>"><i class="bi bi-lightbulb"></i>
                    <p class="mb-0">Challenges</p>
                </a>
                <a class="nav-link d-flex gap-2 <?= ($url == "reward") ? "active" : ''; ?>" href="<?= base_url('/reward'); ?>"><i class="bi bi-gift"></i>
                    <p class="mb-0">Reward</p>
                </a>
            </div>
            <div class="d-flex align-items-center ms-auto gap-2">
                <a href="login" class="btn nav2 border-0 rounded px-4 text-white" style="background-color: #15C626;">Login</a>
                <a href="register" class="btn nav2 border-0 rounded px-4" style="background-color: #F9F871;">Sign In</a>
                <?php if (session()->get('login') == true) : ?>
                    <div class="dropdown">
                        <a role="button" class="dropdown-toggle text-dark d-flex align-items-center text-decoration-none" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="" class="rounded-circle" style="width: 10px;" alt="">
                            <p class="mb-0">Account Name</p>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark bg-danger p-0">
                            <li class="text-center text-white"><a class="dropdown-item" href="#">Log Out</a></li>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>