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
?>
<nav class="clay-navbar">
    <div class="logo" style="display:flex;align-items:center;">
        <img src="64.png" alt="<?php echo htmlspecialchars($config['site_name']); ?>" style="width:28px;height:28px;margin-right:8px;border-radius:6px;">
        <span><?php echo htmlspecialchars($config['site_name']); ?></span>
    </div>
    <ul>
        <li><a href="index.php#home" class="nav-link">首页</a></li>
        <li><a href="index.php#features" class="nav-link">特色</a></li>
        <li><a href="tujian.php" class="nav-link">图鉴</a></li>
    </ul>
    <button class="clay-btn icon-btn" id="theme-toggle" aria-label="切换主题">
        <svg class="theme-icon moon-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round">
            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
        </svg>
        <svg class="theme-icon sun-icon" style="display:none;" xmlns="http://www.w3.org/2000/svg" width="20"
            height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="5"></circle>
            <line x1="12" y1="1" x2="12" y2="3"></line>
            <line x1="12" y1="21" x2="12" y2="23"></line>
            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
            <line x1="1" y1="12" x2="3" y2="12"></line>
            <line x1="21" y1="12" x2="23" y2="12"></line>
            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
        </svg>
    </button>
</nav>
