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
<footer class="site-footer">
    <div class="footer-main">
        <div class="footer-brand">
            <div class="footer-logo" style="display:flex;align-items:center;justify-content:center;gap:10px;">
                <img src="64.png" alt="<?php echo htmlspecialchars($config['site_name']); ?>" style="width:32px;height:32px;border-radius:8px;">
                <span class="logo-text"><?php echo htmlspecialchars($config['site_name']); ?></span>
            </div>
            <p class="footer-tagline">在这里，每一块方块都是你的创意。加入我们，共同构建属于你的小镇。</p>
        </div>
        <div class="footer-social">
            <a href="<?php echo htmlspecialchars($config['qq_group_link']); ?>"
                class="social-icon" aria-label="QQ" target="_blank"><i class="fab fa-qq"></i></a>
            <a href="<?php echo htmlspecialchars($config['bilibili_link']); ?>" class="social-icon" aria-label="Bilibili"
                target="_blank"><i class="fab fa-bilibili"></i></a>
        </div>
        <div class="footer-links">
            <a href="<?php echo htmlspecialchars($config['projection_workshop_link']); ?>" target="_blank">投影工坊</a>
            <a href="<?php echo htmlspecialchars($config['qq_group_link']); ?>" target="_blank">审核群聊</a>
        </div>
        <div class="footer-bottom-inline">
            <p class="copyright">© <?php echo date('Y'); ?> <?php echo htmlspecialchars($config['site_name']); ?> | 这不是官方 Minecraft 产品</p>
            <div class="server-status">
                <span class="status-dot-footer"></span>
                <span>网络状态: <strong>在线</strong></span>
            </div>
        </div>
    </div>
</footer>
