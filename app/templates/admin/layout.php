
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link href="/css/dashboard.css" rel="stylesheet">
</head>
<body>
    <main id="dashboard">
        <aside>
            <div class="dashboard-brand">
                <img src="/images/dashboard_logo.svg" alt="logo">
            </div>
            <nav>
                <ul class="dashboard-nav-list">
                    <li class="dashboard-nav-item"><a href="/dashboard"  >Dashboard</a></li>
                    <li class="dashboard-nav-item">
                        <a href="/dashboard/pages"  >Pages</a>
                        <ul class="pages-list">
                            <li>About
                                <ul>
                                    <li><a href="<?= ROOT . '/dashboard/about/section'?>">about us</a></li>
                                    <li><a href="<?= ROOT . '/dashboard/about/team'?>">team</a></li>
                                </ul>
                            </li>
                            <li>Services
                                <ul>
                                    <li><a href="<?= ROOT . '/dashboard/services/section'?>">vision</a></li>
                                    <li><a href="<?= ROOT . '/dashboard/services/list'?>">services</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= ROOT . '/dashboard/portfolio'?>">Portfolio</a></li>
                            <li><a href="<?= ROOT . '/dashboard/blog'?>">Blog</a></li>
                            <li><a href="<?= ROOT . '/dashboard/blog'?>">Contact</a></li>
                        </ul>
                    </li>
                    <li class="dashboard-nav-item"><a href="/dashboard/team"  >Team</a></li>
                </ul>
                <div class="nav-bootm">
                    <a href="">Settings</a> 
                </div>
            </nav>
        </aside>
        <section>
            <header><h3>Dashboard</h3></header>
            <main><?= $output?></main>
        </section>
    </main>
</body>
</html>