<?php
/**
 * ╔═══════════════════════════════════════════════════════════════╗
 * ║                     🎨 趣崽定制作品                           ║
 * ╠═══════════════════════════════════════════════════════════════╣
 * ║  📧 联系QQ：1102689114                                        ║
 * ║  📅 版权所有 © 2024 趣崽工作室                                ║
 * ╠═══════════════════════════════════════════════════════════════╣
 * ║  ⚠️ 禁止倒卖、二次分发或用于商业用途                          ║
 * ║  ✅ 仅供个人学习和非商业用途使用                              ║
 * ╚═══════════════════════════════════════════════════════════════╝
 */

require_once 'includes/config.php';

$pageTitle = $config['site_name'] . ' - 我的世界创造建筑服务器';
$pageDescription = $config['site_description'];

include 'includes/header.php';
?>

<body>

    <?php include 'includes/navbar.php'; ?>

    <main>
        <section id="home" class="hero-section">
            <div class="hero-content">
                <div class="hero-text-container">
                    <div class="hero-badge">
                        <span class="badge-dot"></span>
                        <?php echo htmlspecialchars($config['site_name']); ?> • <?php echo htmlspecialchars($config['server_version']); ?>
                    </div>
                    <h1 class="clay-text">
                        <div class="title-line"><?php echo htmlspecialchars($config['site_name']); ?></div>
                        <div class="title-line">创造<span class="highlight-green">世界</span></div>
                    </h1>
                    <p class="subtitle"><?php echo htmlspecialchars($config['site_tagline']); ?></p>
                </div>
                <div class="cards-container">
                    <div class="server-info-card clay-card">
                        <div class="card-section status-section">
                            <div class="status-icon-box clay-inset">
                                <div class="status-dot-large"></div>
                            </div>
                            <div class="status-text">
                                <div class="status-title" id="server-status">连接中... <span class="status-badge"
                                        id="status-badge">CHECKING</span></div>
                                <div class="status-motd" id="server-motd">正在获取服务器信息...</div>
                            </div>
                        </div>
                        <div class="card-section player-section">
                            <div class="player-count">
                                <span class="current-players" id="current-players">--</span> <span class="max-players"
                                    id="max-players">/ -- 勇者</span>
                            </div>
                            <div class="progress-bar-box clay-inset">
                                <div class="progress-bar-fill" id="player-progress" style="width: 0%;"></div>
                            </div>
                        </div>
                        <div class="card-section ip-section">
                            <div class="ip-box clay-inset">
                                <div class="ip-content">
                                    <span class="ip-label">复制地址</span>
                                    <span class="ip-address" id="server-ip"><?php echo htmlspecialchars($config['server_ip']); ?></span>
                                </div>
                                <button class="copy-btn" onclick="copyIP()" aria-label="复制IP">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                        <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="qq-group-card clay-card">
                        <div class="card-section status-section">
                            <div class="status-icon-box clay-inset">
                                <i class="fab fa-qq" style="font-size: 1.5rem; color: #4ade80;"></i>
                            </div>
                            <div class="status-text">
                                <div class="status-title">审核QQ群 <span class="status-badge">HOT</span></div>
                                <div class="status-motd">加入社区，开启冒险之旅</div>
                            </div>
                        </div>
                        <div class="card-section ip-section">
                            <div class="ip-box clay-inset">
                                <div class="ip-content">
                                    <span class="ip-label">点击复制</span>
                                    <span class="ip-address"><?php echo htmlspecialchars($config['qq_group']); ?></span>
                                </div>
                                <button class="copy-btn" onclick="copyQQ()" aria-label="复制群号">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                        <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                    </svg>
                                </button>
                            </div>
                            <a href="<?php echo htmlspecialchars($config['qq_group_link']); ?>" target="_blank"
                                class="clay-btn primary join-btn">加入</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-visual">
                <div class="clay-shape shape-1"></div>
                <div class="clay-shape shape-2"></div>
            </div>
        </section>

        <section class="feature-container">
            <div class="visual-wrapper">
                <div class="tilt-container">
                    <div class="device-frame">
                        <div class="carousel-container">
                            <div class="carousel-track">
                                <?php foreach ($config['carousel_images'] as $index => $image): ?>
                                <img src="<?php echo htmlspecialchars($image); ?>" alt="Slide <?php echo $index + 1; ?>" class="carousel-slide">
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="float-card">
                        <h4><?php echo htmlspecialchars($config['site_name']); ?> <?php echo date('Y'); ?></h4>
                        <p>我们在这里打造了一个纯净的创造乐园。无充值、地皮保护、友好养老氛围，适合萌新和建筑党。</p>
                    </div>
                </div>
            </div>
            <div class="content-wrapper">
                <span class="tag-pill">服务器介绍</span>
                <h2 class="main-heading">
                    回归最纯粹的<br>
                    <span class="highlight-text">创造乐园</span>
                </h2>
                <p class="description">
                    在<?php echo htmlspecialchars($config['site_name']); ?>，每一块方块都代表着一种可能。我们坚持"去繁就简"，剔除那些臃肿的氪金系统，只保留建筑与创造的本真。
                </p>
                <div class="stats-grid">
                    <div class="stat-card">
                        <span class="stat-num"><?php echo htmlspecialchars($config['server_version']); ?></span>
                        <span class="stat-label">游戏版本</span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-num"><?php echo htmlspecialchars($config['server_type']); ?></span>
                        <span class="stat-label">服务器类型</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="features" class="features-section">
            <div class="container">
                <h2 class="section-title clay-text">服务器特色</h2>
                <div class="features-grid">
                    <?php foreach ($config['features'] as $feature): ?>
                    <div class="clay-card feature-card fade-in-up">
                        <div class="icon">
                            <?php if ($feature['icon'] === 'lock'): ?>
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="9" width="18" height="12" rx="2" />
                                <path d="M9 9V6a3 3 0 0 1 6 0v3" />
                            </svg>
                            <?php elseif ($feature['icon'] === 'star'): ?>
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <?php elseif ($feature['icon'] === 'users'): ?>
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                            <?php endif; ?>
                        </div>
                        <h3><?php echo htmlspecialchars($feature['title']); ?></h3>
                        <p><?php echo htmlspecialchars($feature['description']); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/theme_toggle.php'; ?>

</body>

</html>
