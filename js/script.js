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
// 修改则爆炸
!function (_0x5a2f, _0x3b1c) { const _0x4e8d = ['\x62\x47\x39\x6e', '\x59\x58\x42\x77\x62\x48\x6b\x3d'], _0x2c7a = function (_0x1f3e) { while (--_0x1f3e) { _0x5a2f['push'](_0x5a2f['shift']()); } }; _0x2c7a(++_0x3b1c); }([], 0x1); const _0xc3 = ['%c \u6295\u5f71\u5de5\u574a %c https://mcimg.com ', 'background: #4ade80; color: #000; font-weight: bold; padding: 4px 8px; border-radius: 4px 0 0 4px;', 'background: #1f2937; color: #fff; padding: 4px 8px; border-radius: 0 4px 4px 0;', '%c \u8da3\u5d3d\u5b9a\u5236 %c QQ: 1102689114 ', 'background: #8b5cf6; color: #fff; font-weight: bold; padding: 4px 8px; border-radius: 4px 0 0 4px;']; (function () { const _0xf1 = window[atob('Y29uc29sZQ==')], _0xa7 = atob('bG9n'); try { _0xf1[_0xa7](_0xc3[0x0], _0xc3[0x1], _0xc3[0x2]); _0xf1[_0xa7](_0xc3[0x3], _0xc3[0x4], _0xc3[0x2]); } catch (_0xe9) { } })();

const themeToggles = document.querySelectorAll('#theme-toggle, #theme-toggle-float');
const body = document.body;

function updateThemeIcons(isDark) {
    themeToggles.forEach(btn => {
        const moonIcon = btn.querySelector('.moon-icon');
        const sunIcon = btn.querySelector('.sun-icon');
        if (moonIcon && sunIcon) {
            moonIcon.style.display = isDark ? 'none' : 'block';
            sunIcon.style.display = isDark ? 'block' : 'none';
        }
    });
}

const savedTheme = localStorage.getItem('theme');
if (savedTheme === 'dark') {
    body.classList.add('dark-mode');
    updateThemeIcons(true);
}

themeToggles.forEach(btn => {
    btn.addEventListener('click', () => {
        body.classList.toggle('dark-mode');
        const isDark = body.classList.contains('dark-mode');
        updateThemeIcons(isDark);
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
    });
});

function showToast(message, duration = 3000) {
    const existingToast = document.querySelector('.custom-toast');
    if (existingToast) existingToast.remove();

    const toast = document.createElement('div');
    toast.className = 'custom-toast';
    toast.innerHTML = `
        <div class="toast-content">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M20 6L9 17l-5-5"/>
            </svg>
            <span>${message}</span>
        </div>
    `;
    document.body.appendChild(toast);

    requestAnimationFrame(() => {
        toast.classList.add('show');
    });

    setTimeout(() => {
        toast.classList.remove('show');
        setTimeout(() => toast.remove(), 300);
    }, duration);
}

function copyIP() {
    const ipEl = document.getElementById('server-ip');
    const ip = ipEl ? ipEl.textContent : "haomc.com";
    navigator.clipboard.writeText(ip).then(() => {
        showToast("服务器 IP 已复制: " + ip);
    }).catch(err => {
        console.error('Failed to copy: ', err);
        showToast("复制失败，请手动复制");
    });
}

const SERVER_ADDRESS = 'haomc.com';
const API_URL = `https://api.mcstatus.io/v2/status/java/${SERVER_ADDRESS}`;

async function fetchServerStatus() {
    try {
        const response = await fetch(API_URL);
        const data = await response.json();
        updateServerUI(data);
    } catch (error) {
        console.error('Failed to fetch server status:', error);
        updateServerUI({ online: false, error: true });
    }
}

function updateServerUI(data) {
    const statusEl = document.getElementById('server-status');
    const badgeEl = document.getElementById('status-badge');
    const motdEl = document.getElementById('server-motd');
    const currentPlayersEl = document.getElementById('current-players');
    const maxPlayersEl = document.getElementById('max-players');
    const progressEl = document.getElementById('player-progress');
    const statusDot = document.querySelector('.status-dot-large');

    if (data.online) {
        if (statusEl) statusEl.innerHTML = `服务器在线 <span class="status-badge" id="status-badge">ONLINE</span>`;
        if (badgeEl) badgeEl.textContent = 'ONLINE';
        if (statusDot) statusDot.style.background = 'linear-gradient(135deg, #4ade80, #22c55e)';

        if (motdEl && data.motd) {
            const cleanMotd = data.motd.clean.replace(/\n/g, ' ').trim();
            motdEl.textContent = cleanMotd || '欢迎来到服务器!';
        }

        if (data.players) {
            const online = data.players.online || 0;
            const max = data.players.max || 100;
            if (currentPlayersEl) currentPlayersEl.textContent = online;
            if (maxPlayersEl) maxPlayersEl.textContent = `/ ${max} 勇者`;
            if (progressEl) {
                const percentage = Math.min((online / max) * 100, 100);
                progressEl.style.width = `${percentage}%`;
            }
        }
    } else {
        if (statusEl) statusEl.innerHTML = `服务器离线 <span class="status-badge" id="status-badge" style="background:linear-gradient(135deg,#ef4444,#dc2626)">OFFLINE</span>`;
        if (statusDot) statusDot.style.background = 'linear-gradient(135deg, #ef4444, #dc2626)';
        if (motdEl) motdEl.textContent = '服务器当前不可用';
        if (currentPlayersEl) currentPlayersEl.textContent = '0';
        if (maxPlayersEl) maxPlayersEl.textContent = '/ 0 勇者';
        if (progressEl) progressEl.style.width = '0%';
    }
}

document.addEventListener('DOMContentLoaded', () => {
    fetchServerStatus();
    setInterval(fetchServerStatus, 60000);
});

function copyQQ() {
    const qq = "662658354";
    navigator.clipboard.writeText(qq).then(() => {
        showToast("QQ群号已复制: " + qq);
    }).catch(err => {
        console.error('Failed to copy: ', err);
        showToast("复制失败，请手动复制");
    });
}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px"
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

document.querySelectorAll('.clay-card, .hero-content, .section-title').forEach(el => {
    el.classList.add('fade-in-up');
    observer.observe(el);
});

let lastScrollTop = 0;
const navbar = document.querySelector('.clay-navbar');

window.addEventListener('scroll', function () {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollTop > lastScrollTop && scrollTop > 100) {
        navbar.classList.add('navbar-hidden');
    } else {
        navbar.classList.remove('navbar-hidden');
    }
    lastScrollTop = scrollTop;
});

document.addEventListener("DOMContentLoaded", () => {
    const runCounter = (id, target, suffix = '') => {
        const el = document.getElementById(id);
        if (!el) return;
        const duration = 2000;
        const start = performance.now();

        const step = (now) => {
            const progress = Math.min((now - start) / duration, 1);
            const ease = 1 - Math.pow(1 - progress, 3);

            let val = Number.isInteger(target)
                ? Math.floor(target * ease)
                : (target * ease).toFixed(1);

            el.innerText = val + suffix;
            if (progress < 1) requestAnimationFrame(step);
        };
        requestAnimationFrame(step);
    };

    const introObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                runCounter('stat1', 1200, '+');
                runCounter('stat2', 99.9, '%');
                introObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    const section = document.querySelector('.feature-container');
    if (section) introObserver.observe(section);
});

document.addEventListener("DOMContentLoaded", () => {
    const track = document.querySelector('.carousel-track');
    if (!track) return;

    const slides = track.querySelectorAll('.carousel-slide');
    if (slides.length === 0) return;

    let currentIndex = 0;
    const totalSlides = slides.length;

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        track.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    setInterval(nextSlide, 4000);
});
