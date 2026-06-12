<!DOCTYPE html>
<html class="dark" lang="id">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title', 'Mahreen Indonesia | Nusantara Creative Engine')</title>
    <link rel="icon" type="image/png" sizes="256x256" href="{{ asset('mahreen-favicon.png') }}" />
    <link rel="shortcut icon" href="{{ asset('mahreen-favicon.png') }}" />
    <link rel="apple-touch-icon" href="{{ asset('mahreen-favicon.png') }}" />
    <script>
        (() => {
            const savedTheme = localStorage.getItem('mahreen-theme');
            const useDarkTheme = savedTheme ? savedTheme === 'dark' : true;
            const savedLanguage = localStorage.getItem('mahreen-language') || 'id';

            document.documentElement.classList.toggle('dark', useDarkTheme);
            document.documentElement.setAttribute('data-theme', useDarkTheme ? 'dark' : 'light');
            document.documentElement.setAttribute('lang', savedLanguage);
            document.documentElement.setAttribute('data-language', savedLanguage);
        })();
    </script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <style>
        :root {
            --outline: 135 145 152;
            --primary: 44 90 105;
            --tertiary-container: 216 243 237;
            --tertiary-fixed: 130 221 207;
            --on-surface: 28 35 39;
            --on-secondary-container: 75 56 0;
            --surface-variant: 231 236 239;
            --error: 186 28 45;
            --secondary-container: 244 223 163;
            --surface-bright: 255 255 255;
            --primary-fixed-dim: 102 139 151;
            --surface-container-high: 239 243 246;
            --on-tertiary: 255 255 255;
            --primary-fixed: 210 230 236;
            --secondary: 187 145 17;
            --inverse-surface: 34 40 44;
            --surface-dim: 236 240 243;
            --surface-container-lowest: 250 252 253;
            --surface: 250 252 253;
            --error-container: 255 218 214;
            --on-tertiary-fixed-variant: 14 112 98;
            --primary-container: 221 236 241;
            --on-secondary: 56 41 0;
            --on-tertiary-fixed: 0 58 50;
            --surface-tint: 44 90 105;
            --tertiary: 18 145 126;
            --on-primary-fixed-variant: 41 77 90;
            --secondary-fixed-dim: 214 173 55;
            --on-primary-fixed: 10 33 40;
            --on-secondary-fixed-variant: 105 79 0;
            --surface-container-low: 245 247 249;
            --inverse-on-surface: 241 244 246;
            --on-error-container: 147 27 39;
            --on-secondary-fixed: 43 31 0;
            --background: 246 248 250;
            --on-primary: 255 255 255;
            --outline-variant: 208 214 218;
            --on-surface-variant: 92 102 108;
            --on-tertiary-container: 21 125 110;
            --tertiary-fixed-dim: 78 192 173;
            --on-background: 22 28 31;
            --inverse-primary: 174 203 216;
            --secondary-fixed: 252 227 140;
            --on-primary-container: 36 72 84;
            --surface-container: 242 245 247;
            --on-error: 255 255 255;
            --surface-container-highest: 231 236 239;
            --glass-bg: 255 255 255;
            --glass-border: 196 207 213;
            --pattern-dot: 44 90 105;
            --blob-opacity: 0.11;
            --section-offset: 8.5rem;
        }
        html.dark {
            --outline: 140 146 149;
            --primary: 174 203 216;
            --tertiary-container: 0 46 39;
            --tertiary-fixed: 142 245 225;
            --on-surface: 224 227 229;
            --on-secondary-container: 52 40 0;
            --surface-variant: 50 53 55;
            --error: 255 180 171;
            --secondary-container: 175 141 17;
            --surface-bright: 54 58 59;
            --primary-fixed-dim: 174 203 216;
            --surface-container-high: 39 42 44;
            --on-tertiary: 0 55 48;
            --primary-fixed: 202 231 244;
            --secondary: 233 195 73;
            --inverse-surface: 224 227 229;
            --surface-dim: 16 20 21;
            --surface-container-lowest: 11 15 16;
            --surface: 16 20 21;
            --error-container: 147 0 10;
            --on-tertiary-fixed-variant: 0 80 70;
            --primary-container: 13 43 53;
            --on-secondary: 60 47 0;
            --on-tertiary-fixed: 0 32 27;
            --surface-tint: 174 203 216;
            --tertiary: 113 216 197;
            --on-primary-fixed-variant: 47 75 85;
            --secondary-fixed-dim: 233 195 73;
            --on-primary-fixed: 0 31 40;
            --on-secondary-fixed-variant: 87 69 0;
            --surface-container-low: 25 28 30;
            --inverse-on-surface: 45 49 51;
            --on-error-container: 255 218 214;
            --on-secondary-fixed: 36 26 0;
            --background: 16 20 21;
            --on-primary: 23 52 62;
            --outline-variant: 66 72 74;
            --on-surface-variant: 194 199 203;
            --on-tertiary-container: 48 159 142;
            --tertiary-fixed-dim: 113 216 197;
            --on-background: 224 227 229;
            --inverse-primary: 71 98 110;
            --secondary-fixed: 255 224 136;
            --on-primary-container: 119 147 159;
            --surface-container: 29 32 34;
            --on-error: 105 0 5;
            --surface-container-highest: 50 53 55;
            --glass-bg: 13 43 53;
            --glass-border: 174 203 216;
            --pattern-dot: 174 203 216;
            --blob-opacity: 0.15;
        }
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
            line-height: 1.5;
            transition: background-color 220ms ease, color 220ms ease;
        }
        @media (min-width: 768px) {
            :root {
                --section-offset: 6rem;
            }
        }
        #home,
        #stats,
        #about,
        #kontak {
            scroll-margin-top: var(--section-offset);
        }
        .nav-link {
            transition: color 220ms ease, border-color 220ms ease, transform 220ms ease;
        }
        .nav-link:hover {
            transform: translateY(-1px);
        }
        .theme-toggle {
            transition: background-color 220ms ease, color 220ms ease, border-color 220ms ease, transform 220ms ease;
        }
        .theme-toggle:hover {
            transform: translateY(-1px);
        }
        .section-focus {
            animation: section-focus 850ms cubic-bezier(0.22, 1, 0.36, 1);
        }
        @keyframes section-focus {
            0% {
                transform: translateY(24px);
                opacity: 0.7;
                filter: saturate(0.9) brightness(0.92);
            }
            55% {
                transform: translateY(-4px);
                opacity: 1;
                filter: saturate(1.06) brightness(1.04);
            }
            100% {
                transform: translateY(0);
                opacity: 1;
                filter: none;
            }
        }
        .glass-card {
            background: rgba(var(--glass-bg), 0.4);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(var(--glass-border), 0.18);
        }
        .glow-hover:hover {
            box-shadow: 0 0 20px rgba(113, 216, 197, 0.2);
        }
        .gradient-text {
            background: linear-gradient(135deg, rgb(var(--primary)) 0%, rgb(var(--tertiary)) 50%, rgb(var(--secondary)) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .tech-pattern {
            background-image: radial-gradient(circle at 2px 2px, rgba(var(--pattern-dot), 0.08) 1px, transparent 0);
            background-size: 40px 40px;
        }
        .blob-glow {
            filter: blur(80px);
            opacity: var(--blob-opacity);
            position: absolute;
            z-index: 0;
        }
        .animate-spin-slow {
            animation: spin 20s linear infinite;
        }
        .about-flip-card {
            perspective: 1800px;
            isolation: isolate;
            cursor: pointer;
        }
        .about-flip-card__inner {
            position: absolute;
            inset: 0;
            transform-style: preserve-3d;
            transition: transform 700ms cubic-bezier(0.22, 1, 0.36, 1);
            will-change: transform;
        }
        .about-flip-card.is-flipped .about-flip-card__inner {
            transform: rotateY(180deg);
        }
        .about-flip-card:focus-visible {
            outline: 2px solid rgba(var(--tertiary-fixed), 0.9);
            outline-offset: 4px;
        }
        .about-flip-card__face {
            position: absolute;
            inset: 0;
            overflow: hidden;
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
            border-radius: 1.5rem;
        }
        .about-flip-card__face::after {
            content: '';
            position: absolute;
            inset: 1rem;
            border-radius: 1rem;
            border: 1px solid rgba(255, 255, 255, 0.08);
            pointer-events: none;
        }
        .about-flip-card__face--back {
            transform: rotateY(180deg);
        }
        .about-flip-card__image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            opacity: 0.96;
        }
        .about-flip-card__veil {
            position: absolute;
            inset: 0;
            background:
                linear-gradient(180deg, rgba(7, 20, 26, 0.05) 0%, rgba(7, 20, 26, 0.62) 100%),
                radial-gradient(circle at top right, rgba(142, 245, 225, 0.12), transparent 36%);
        }
        .about-flip-card__veil--gold {
            background:
                linear-gradient(180deg, rgba(7, 20, 26, 0.08) 0%, rgba(7, 20, 26, 0.7) 100%),
                radial-gradient(circle at top right, rgba(255, 224, 136, 0.16), transparent 36%);
        }
        .about-flip-card__badge {
            position: absolute;
            top: 1.1rem;
            left: 1.1rem;
            z-index: 2;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.65rem 0.95rem;
            border-radius: 9999px;
            border: 1px solid rgba(255, 255, 255, 0.14);
            background: rgba(8, 18, 23, 0.58);
            backdrop-filter: blur(10px);
            color: rgb(var(--on-background));
            font-size: 0.78rem;
            font-weight: 600;
            letter-spacing: 0.04em;
        }
        .about-flip-card__badge .material-symbols-outlined {
            font-size: 1rem;
        }
        .about-flip-card__badge--primary {
            color: rgb(var(--primary-fixed));
        }
        .about-flip-card__badge--secondary {
            color: rgb(var(--secondary-fixed));
        }
        .about-flip-card__badge--tertiary {
            color: rgb(var(--tertiary-fixed));
        }
        .about-flip-card__hint {
            position: absolute;
            right: 1.1rem;
            bottom: 1.1rem;
            z-index: 2;
            padding: 0.55rem 0.8rem;
            border-radius: 9999px;
            background: rgba(8, 18, 23, 0.52);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(224, 227, 229, 0.82);
            font-size: 0.72rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }
        .js-ready .scroll-reveal-sequence [data-reveal-item] {
            opacity: 0;
            transform: translate3d(0, 36px, 0) scale(0.985);
            filter: blur(10px);
            clip-path: inset(100% 0 0 0);
            transition:
                opacity 680ms cubic-bezier(0.22, 1, 0.36, 1),
                transform 680ms cubic-bezier(0.22, 1, 0.36, 1),
                filter 680ms cubic-bezier(0.22, 1, 0.36, 1),
                clip-path 820ms cubic-bezier(0.22, 1, 0.36, 1);
            transition-delay: var(--reveal-delay, 0ms);
            will-change: opacity, transform, filter, clip-path;
        }
        .js-ready .scroll-reveal-sequence.is-visible [data-reveal-item] {
            opacity: 1;
            transform: translate3d(0, 0, 0) scale(1);
            filter: blur(0);
            clip-path: inset(0 0 0 0);
        }
        @media (prefers-reduced-motion: reduce) {
            .about-flip-card__inner {
                transition: none;
            }
            .js-ready .scroll-reveal-sequence [data-reveal-item] {
                opacity: 1;
                transform: none;
                filter: none;
                clip-path: inset(0 0 0 0);
                transition: none;
            }
        }
        html:not(.dark) .glass-card img.mix-blend-luminosity {
            mix-blend-mode: normal;
            opacity: 0.92;
        }
        html:not(.dark) .glass-card .bg-gradient-to-t {
            opacity: 0.45;
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "outline": "rgb(var(--outline) / <alpha-value>)",
                      "primary": "rgb(var(--primary) / <alpha-value>)",
                      "tertiary-container": "rgb(var(--tertiary-container) / <alpha-value>)",
                      "tertiary-fixed": "rgb(var(--tertiary-fixed) / <alpha-value>)",
                      "on-surface": "rgb(var(--on-surface) / <alpha-value>)",
                      "on-secondary-container": "rgb(var(--on-secondary-container) / <alpha-value>)",
                      "surface-variant": "rgb(var(--surface-variant) / <alpha-value>)",
                      "error": "rgb(var(--error) / <alpha-value>)",
                      "secondary-container": "rgb(var(--secondary-container) / <alpha-value>)",
                      "surface-bright": "rgb(var(--surface-bright) / <alpha-value>)",
                      "primary-fixed-dim": "rgb(var(--primary-fixed-dim) / <alpha-value>)",
                      "surface-container-high": "rgb(var(--surface-container-high) / <alpha-value>)",
                      "on-tertiary": "rgb(var(--on-tertiary) / <alpha-value>)",
                      "primary-fixed": "rgb(var(--primary-fixed) / <alpha-value>)",
                      "secondary": "rgb(var(--secondary) / <alpha-value>)",
                      "inverse-surface": "rgb(var(--inverse-surface) / <alpha-value>)",
                      "surface-dim": "rgb(var(--surface-dim) / <alpha-value>)",
                      "surface-container-lowest": "rgb(var(--surface-container-lowest) / <alpha-value>)",
                      "surface": "rgb(var(--surface) / <alpha-value>)",
                      "error-container": "rgb(var(--error-container) / <alpha-value>)",
                      "on-tertiary-fixed-variant": "rgb(var(--on-tertiary-fixed-variant) / <alpha-value>)",
                      "primary-container": "rgb(var(--primary-container) / <alpha-value>)",
                      "on-secondary": "rgb(var(--on-secondary) / <alpha-value>)",
                      "on-tertiary-fixed": "rgb(var(--on-tertiary-fixed) / <alpha-value>)",
                      "surface-tint": "rgb(var(--surface-tint) / <alpha-value>)",
                      "tertiary": "rgb(var(--tertiary) / <alpha-value>)",
                      "on-primary-fixed-variant": "rgb(var(--on-primary-fixed-variant) / <alpha-value>)",
                      "secondary-fixed-dim": "rgb(var(--secondary-fixed-dim) / <alpha-value>)",
                      "on-primary-fixed": "rgb(var(--on-primary-fixed) / <alpha-value>)",
                      "on-secondary-fixed-variant": "rgb(var(--on-secondary-fixed-variant) / <alpha-value>)",
                      "surface-container-low": "rgb(var(--surface-container-low) / <alpha-value>)",
                      "inverse-on-surface": "rgb(var(--inverse-on-surface) / <alpha-value>)",
                      "on-error-container": "rgb(var(--on-error-container) / <alpha-value>)",
                      "on-secondary-fixed": "rgb(var(--on-secondary-fixed) / <alpha-value>)",
                      "background": "rgb(var(--background) / <alpha-value>)",
                      "on-primary": "rgb(var(--on-primary) / <alpha-value>)",
                      "outline-variant": "rgb(var(--outline-variant) / <alpha-value>)",
                      "on-surface-variant": "rgb(var(--on-surface-variant) / <alpha-value>)",
                      "on-tertiary-container": "rgb(var(--on-tertiary-container) / <alpha-value>)",
                      "tertiary-fixed-dim": "rgb(var(--tertiary-fixed-dim) / <alpha-value>)",
                      "on-background": "rgb(var(--on-background) / <alpha-value>)",
                      "inverse-primary": "rgb(var(--inverse-primary) / <alpha-value>)",
                      "secondary-fixed": "rgb(var(--secondary-fixed) / <alpha-value>)",
                      "on-primary-container": "rgb(var(--on-primary-container) / <alpha-value>)",
                      "surface-container": "rgb(var(--surface-container) / <alpha-value>)",
                      "on-error": "rgb(var(--on-error) / <alpha-value>)",
                      "surface-container-highest": "rgb(var(--surface-container-highest) / <alpha-value>)"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "9999px"
              },
              "spacing": {
                      "margin-mobile": "20px",
                      "stack-md": "24px",
                      "unit": "8px",
                      "margin-desktop": "48px",
                      "stack-sm": "8px",
                      "container-max": "1180px",
                      "gutter": "20px",
                      "stack-lg": "40px",
                      "stack-xl": "64px"
              },
              "fontFamily": {
                      "label-md": ["Poppins"],
                      "body-lg": ["Poppins"],
                      "body-md": ["Poppins"],
                      "headline-xl": ["Poppins"],
                      "label-lg": ["Poppins"],
                      "display-lg-mobile": ["Poppins"],
                      "headline-lg": ["Poppins"],
                      "display-lg": ["Poppins"],
                      "headline-md": ["Poppins"]
              },
              "fontSize": {
                      "label-md": ["11px", {"lineHeight": "1.2", "fontWeight": "500"}],
                      "body-lg": ["clamp(15px, 1.15vw, 17px)", {"lineHeight": "1.7", "fontWeight": "400"}],
                      "body-md": ["clamp(14px, 1vw, 15px)", {"lineHeight": "1.65", "fontWeight": "400"}],
                      "headline-xl": ["clamp(30px, 3.2vw, 40px)", {"lineHeight": "1.2", "fontWeight": "600"}],
                      "label-lg": ["13px", {"lineHeight": "1.2", "letterSpacing": "0.04em", "fontWeight": "600"}],
                      "display-lg-mobile": ["clamp(28px, 6.2vw, 34px)", {"lineHeight": "1.15", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                      "headline-lg": ["clamp(24px, 2.2vw, 30px)", {"lineHeight": "1.3", "fontWeight": "600"}],
                      "display-lg": ["clamp(38px, 4.2vw, 50px)", {"lineHeight": "1.08", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                      "headline-md": ["clamp(20px, 1.8vw, 22px)", {"lineHeight": "1.35", "fontWeight": "600"}]
              }
            },
          },
        }
    </script>
    @stack('styles')
</head>
<body class="bg-background text-on-background antialiased selection:bg-tertiary selection:text-tertiary-container tech-pattern">
    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const root = document.documentElement;
            const themeToggleButtons = Array.from(document.querySelectorAll('[data-theme-toggle]'));
            const languageDropdowns = Array.from(document.querySelectorAll('[data-language-dropdown]'));
            const languageTriggers = Array.from(document.querySelectorAll('[data-language-trigger]'));
            const languageMenus = Array.from(document.querySelectorAll('[data-language-menu]'));
            const languageOptions = Array.from(document.querySelectorAll('[data-language-option]'));
            const navLinks = Array.from(document.querySelectorAll('[data-nav-link]'));
            const inPageLinks = Array.from(document.querySelectorAll('a[href^="#"]:not([href="#"])'));
            const sections = navLinks
                .map(link => document.querySelector(link.getAttribute('href')))
                .filter(Boolean);
            const navbar = document.querySelector('nav');
            let updateSectionOffsetVar = () => {};
            let syncActiveLinkWithScroll = () => {};
            const closeLanguageMenus = () => {
                languageMenus.forEach((menu) => {
                    menu.classList.add('hidden');
                });

                languageTriggers.forEach((trigger) => {
                    trigger.setAttribute('aria-expanded', 'false');
                });
            };
            const translations = {
                id: {
                    page_title: 'Mahreen Indonesia | Berkarya Untuk Indonesia',
                    'nav.home': 'Beranda',
                    'nav.about': 'Tentang',
                    'nav.contact': 'Kontak',
                    'nav.join_short': 'Gabung',
                    'nav.join_now': 'Gabung Sekarang',
                    'hero.badge': 'Berkarya Untuk Indonesia',
                    'hero.title_prefix': 'Generasi Muda',
                    'hero.title_gradient': 'Berkarya',
                    'hero.title_suffix': 'untuk Indonesia.',
                    'hero.description': 'Mahreen Indonesia mengajak generasi muda Indonesia memadukan kreativitas, teknologi, dan kolaborasi untuk melahirkan karya yang relevan, membuka peluang, dan memberi dampak positif bagi masyarakat.',
                    'hero.cta_primary': 'Mulai Berkarya',
                    'hero.cta_secondary': 'Lihat Arah Gerakan',
                    'stats.alumni': 'Talenta Muda',
                    'stats.projects': 'Karya Berdampak',
                    'stats.cities': 'Kota Terhubung',
                    'stats.mentors': 'Inisiatif Digital',
                    'about.title': 'Berkarya Untuk Indonesia',
                    'about.description': 'Mahreen Indonesia menjadi ruang bagi generasi muda untuk mengubah ide menjadi karya, kreativitas menjadi solusi, dan teknologi menjadi dampak yang terasa bagi masyarakat Indonesia.',
                    'about.creative.title': 'Kreativitas yang Relevan',
                    'about.creative.description': 'Kami mendorong generasi muda untuk melahirkan karya yang berakar pada realitas Indonesia: kuat dalam gagasan, relevan secara visual, dan mampu menyampaikan pesan yang menggerakkan.',
                    'about.creative.point1': 'Ide lokal yang tumbuh menjadi karya nyata',
                    'about.creative.point2': 'Visual dan narasi yang dekat dengan masyarakat',
                    'about.creative.point3': 'Ekspresi kreatif yang membawa nilai dan arah',
                    'about.business.title': 'Teknologi untuk Solusi',
                    'about.business.description': 'Di sinilah kreativitas diterjemahkan menjadi sistem, platform, dan solusi yang memudahkan hidup. Teknologi dipakai bukan untuk terlihat canggih, tetapi untuk menjawab kebutuhan nyata di tengah masyarakat.',
                    'about.business.point1': 'Teknologi yang berangkat dari kebutuhan lokal',
                    'about.business.point2': 'Sistem digital untuk efisiensi dan akses yang lebih luas',
                    'about.business.point3': 'Solusi praktis yang bisa dipakai dan dirasakan',
                    'about.social.title': 'Dampak untuk Masyarakat',
                    'about.social.description': 'Setiap karya yang lahir perlu kembali ke masyarakat. Karena itu, Mahreen Indonesia menempatkan kolaborasi, empati, dan kebermanfaatan sebagai ukuran penting dari pertumbuhan generasi muda.',
                    'about.social.point1': 'Kolaborasi terbuka antar talenta muda Indonesia',
                    'about.social.point2': 'Kepekaan terhadap tantangan dan kebutuhan sekitar',
                    'about.social.point3': 'Karya yang memberi manfaat positif dan terukur',
                    'about.visual.creative.front': 'Ide Menjadi Karya',
                    'about.visual.creative.back': 'Karya untuk Indonesia',
                    'about.visual.business.front': 'Teknologi Tepat Guna',
                    'about.visual.business.back': 'Solusi untuk Komunitas',
                    'about.visual.social.front': 'Kolaborasi Anak Muda',
                    'about.visual.social.back': 'Dampak Positif',
                    'about.visual.flip_hint': 'Tap untuk flip',
                    'cta.badge': 'Gerakan Anak Muda Indonesia',
                    'cta.title_line1': 'Saat kreativitas bertemu teknologi,',
                    'cta.title_line2': 'lahirlah karya untuk Indonesia.',
                    'cta.description': 'Kami membangun ruang bagi generasi muda yang ingin mencipta, bereksperimen, dan memanfaatkan teknologi untuk menghadirkan perubahan yang bermanfaat bagi lingkungan dan masyarakat.',
                    'cta.primary': 'Gabung Gerakan',
                    'cta.secondary': 'Diskusi Kolaborasi',
                    'contact.title': 'Bangun Dampak Bersama',
                    'contact.description': 'Jika Anda ingin mengajak generasi muda berkarya, membangun solusi kreatif, atau mengembangkan teknologi yang berguna untuk masyarakat, Mahreen Indonesia siap menjadi ruang kolaborasi berikutnya.',
                    'contact.email_label': 'Email Kami',
                    'contact.location_label': 'Lokasi',
                    'contact.location_value': 'Cimahi, Indonesia',
                    'contact.form.name': 'Nama Lengkap',
                    'contact.form.name_placeholder': 'Masukkan nama Anda',
                    'contact.form.email': 'Email',
                    'contact.form.email_placeholder': 'email@anda.com',
                    'contact.form.message': 'Pesan',
                    'contact.form.message_placeholder': 'Apa yang bisa kami bantu?',
                    'contact.form.submit': 'Kirim Pesan',
                    'footer.description': 'Mahreen Indonesia mengajak generasi muda berkarya dengan kreativitas dan teknologi untuk menghadirkan dampak positif bagi masyarakat Indonesia.',
                    'footer.nav_title': 'Navigasi',
                    'footer.about': 'Tentang Mahreen',
                    'footer.impact': 'Dampak',
                    'footer.contact': 'Kontak Kami',
                    'footer.legal_title': 'Legal & Support',
                    'footer.privacy': 'Kebijakan Privasi',
                    'footer.terms': 'Syarat & Ketentuan',
                    'footer.help': 'Pusat Bantuan',
                    'language.label': 'Pilih bahasa',
                    'footer.copyright': '© 2024 Mahreen Indonesia. Inovasi, kolaborasi, dan kebermanfaatan untuk bertumbuh bersama.'
                },
                en: {
                    page_title: 'Mahreen Indonesia | Creating for Indonesia',
                    'nav.home': 'Home',
                    'nav.about': 'About',
                    'nav.contact': 'Contact',
                    'nav.join_short': 'Join',
                    'nav.join_now': 'Join Now',
                    'hero.badge': 'Creating for Indonesia',
                    'hero.title_prefix': 'Young Indonesians',
                    'hero.title_gradient': 'Creating',
                    'hero.title_suffix': 'for Indonesia.',
                    'hero.description': 'Mahreen Indonesia invites young Indonesians to combine creativity, technology, and collaboration to produce relevant work, open opportunities, and create positive impact for society.',
                    'hero.cta_primary': 'Start Creating',
                    'hero.cta_secondary': 'See the Movement',
                    'stats.alumni': 'Young Talents',
                    'stats.projects': 'Impactful Works',
                    'stats.cities': 'Connected Cities',
                    'stats.mentors': 'Digital Initiatives',
                    'about.title': 'Creating for Indonesia',
                    'about.description': 'Mahreen Indonesia is a space where young people can turn ideas into work, creativity into solutions, and technology into impact that is truly felt by Indonesian communities.',
                    'about.creative.title': 'Relevant Creativity',
                    'about.creative.description': 'We encourage young people to create work rooted in Indonesian realities: strong in ideas, relevant in visuals, and able to communicate messages that move people.',
                    'about.creative.point1': 'Local ideas growing into real work',
                    'about.creative.point2': 'Visuals and narratives close to society',
                    'about.creative.point3': 'Creative expression with value and direction',
                    'about.business.title': 'Technology for Solutions',
                    'about.business.description': 'This is where creativity becomes systems, platforms, and solutions that make life easier. Technology is used not to look sophisticated, but to answer real needs in society.',
                    'about.business.point1': 'Technology built from local needs',
                    'about.business.point2': 'Digital systems for efficiency and wider access',
                    'about.business.point3': 'Practical solutions people can use and feel',
                    'about.social.title': 'Impact for Society',
                    'about.social.description': 'Every piece of work should return value to society. That is why Mahreen Indonesia places collaboration, empathy, and usefulness at the center of youth growth.',
                    'about.social.point1': 'Open collaboration among young Indonesian talents',
                    'about.social.point2': 'Sensitivity to surrounding challenges and needs',
                    'about.social.point3': 'Work that creates positive and measurable impact',
                    'about.visual.creative.front': 'Ideas into Work',
                    'about.visual.creative.back': 'Work for Indonesia',
                    'about.visual.business.front': 'Appropriate Technology',
                    'about.visual.business.back': 'Solutions for Communities',
                    'about.visual.social.front': 'Youth Collaboration',
                    'about.visual.social.back': 'Positive Impact',
                    'about.visual.flip_hint': 'Tap to flip',
                    'cta.badge': 'Indonesia’s Youth Movement',
                    'cta.title_line1': 'When creativity meets technology,',
                    'cta.title_line2': 'work for Indonesia comes to life.',
                    'cta.description': 'We are building a space for young people who want to create, experiment, and use technology to bring meaningful change to communities and society.',
                    'cta.primary': 'Join the Movement',
                    'cta.secondary': 'Discuss Collaboration',
                    'contact.title': 'Build Impact Together',
                    'contact.description': 'If you want to invite young people to create, build creative solutions, or develop technology that benefits society, Mahreen Indonesia is ready to be your next collaboration space.',
                    'contact.email_label': 'Our Email',
                    'contact.location_label': 'Location',
                    'contact.location_value': 'Cimahi, Indonesia',
                    'contact.form.name': 'Full Name',
                    'contact.form.name_placeholder': 'Enter your name',
                    'contact.form.email': 'Email',
                    'contact.form.email_placeholder': 'your@email.com',
                    'contact.form.message': 'Message',
                    'contact.form.message_placeholder': 'How can we help?',
                    'contact.form.submit': 'Send Message',
                    'footer.description': 'Mahreen Indonesia invites young people to create with creativity and technology to bring positive impact to Indonesian society.',
                    'footer.nav_title': 'Navigation',
                    'footer.about': 'About Mahreen',
                    'footer.impact': 'Impact',
                    'footer.contact': 'Contact Us',
                    'footer.legal_title': 'Legal & Support',
                    'footer.privacy': 'Privacy Policy',
                    'footer.terms': 'Terms & Conditions',
                    'footer.help': 'Help Center',
                    'language.label': 'Choose language',
                    'footer.copyright': '© 2024 Mahreen Indonesia. Innovation, collaboration, and meaningful impact for shared growth.'
                }
            };

            const applyTheme = (isDarkTheme) => {
                root.classList.toggle('dark', isDarkTheme);
                root.setAttribute('data-theme', isDarkTheme ? 'dark' : 'light');
                localStorage.setItem('mahreen-theme', isDarkTheme ? 'dark' : 'light');

                themeToggleButtons.forEach((button) => {
                    const icon = button.querySelector('[data-theme-icon]');
                    const nextModeLabel = isDarkTheme ? 'Terang' : 'Gelap';

                    if (icon) {
                        icon.textContent = isDarkTheme ? 'light_mode' : 'dark_mode';
                    }

                    button.setAttribute('aria-label', `Aktifkan mode ${nextModeLabel.toLowerCase()}`);
                    button.setAttribute('title', `Aktifkan mode ${nextModeLabel.toLowerCase()}`);
                });
            };

            const applyLanguage = (language) => {
                const selectedLanguage = translations[language] ? language : 'id';
                const dictionary = translations[selectedLanguage];

                root.setAttribute('lang', selectedLanguage);
                root.setAttribute('data-language', selectedLanguage);
                localStorage.setItem('mahreen-language', selectedLanguage);
                document.title = dictionary.page_title;

                document.querySelectorAll('[data-i18n]').forEach((element) => {
                    const key = element.dataset.i18n;
                    if (dictionary[key]) {
                        element.textContent = dictionary[key];
                    }
                });

                document.querySelectorAll('[data-i18n-placeholder]').forEach((element) => {
                    const key = element.dataset.i18nPlaceholder;
                    if (dictionary[key]) {
                        element.setAttribute('placeholder', dictionary[key]);
                    }
                });

                languageTriggers.forEach((button) => {
                    button.setAttribute('aria-label', dictionary['language.label']);
                    button.setAttribute('title', dictionary['language.label']);
                });

                languageOptions.forEach((option) => {
                    const isActive = option.dataset.languageOption === selectedLanguage;

                    option.classList.toggle('bg-primary/12', isActive);
                    option.classList.toggle('text-primary', isActive);
                    option.classList.toggle('font-semibold', isActive);
                    option.classList.toggle('text-on-surface', !isActive);
                    option.setAttribute('aria-pressed', isActive ? 'true' : 'false');
                });
            };

            themeToggleButtons.forEach((button) => {
                button.addEventListener('click', () => {
                    applyTheme(!root.classList.contains('dark'));
                    updateSectionOffsetVar();
                    syncActiveLinkWithScroll();
                });
            });

            languageTriggers.forEach((trigger) => {
                trigger.addEventListener('click', (event) => {
                    event.stopPropagation();

                    const dropdown = trigger.closest('[data-language-dropdown]');
                    const menu = dropdown?.querySelector('[data-language-menu]');
                    const willOpen = Boolean(menu?.classList.contains('hidden'));

                    closeLanguageMenus();

                    if (menu && willOpen) {
                        menu.classList.remove('hidden');
                        trigger.setAttribute('aria-expanded', 'true');
                    }
                });
            });

            languageOptions.forEach((option) => {
                option.addEventListener('click', () => {
                    applyLanguage(option.dataset.languageOption || 'id');
                    closeLanguageMenus();
                });
            });

            document.addEventListener('click', (event) => {
                const clickedInsideDropdown = languageDropdowns.some((dropdown) => dropdown.contains(event.target));

                if (!clickedInsideDropdown) {
                    closeLanguageMenus();
                }
            });

            document.addEventListener('keydown', (event) => {
                if (event.key === 'Escape') {
                    closeLanguageMenus();
                }
            });

            applyTheme(root.classList.contains('dark'));
            applyLanguage(root.getAttribute('data-language') || 'id');

            if (!sections.length || !navbar) {
                return;
            }

            const getScrollOffset = () => {
                const navHeight = navbar.getBoundingClientRect().height;
                const extraGap = window.innerWidth >= 768 ? 14 : 12;

                return navHeight + extraGap;
            };

            updateSectionOffsetVar = () => {
                document.documentElement.style.setProperty('--section-offset', `${getScrollOffset()}px`);
            };

            const getSectionTargetTop = (section) => {
                const sectionTop = section.getBoundingClientRect().top + window.scrollY;
                const sectionStyles = window.getComputedStyle(section);
                const paddingTop = Number.parseFloat(sectionStyles.paddingTop) || 0;
                const contentGap = window.innerWidth >= 768 ? 14 : 12;
                const visualInset = section.id === 'home'
                    ? 0
                    : Math.max(paddingTop - contentGap, 0);

                return Math.max(sectionTop - getScrollOffset() + visualInset, 0);
            };

            const getActiveSectionId = () => {
                const marker = window.scrollY + getScrollOffset() + 24;
                let activeSection = sections[0];

                sections.forEach((section) => {
                    if (marker >= getSectionTargetTop(section)) {
                        activeSection = section;
                    }
                });

                return activeSection?.id || 'home';
            };

            const focusSection = (section) => {
                section.classList.remove('section-focus');
                void section.offsetWidth;
                section.classList.add('section-focus');

                window.clearTimeout(section.__focusTimeout);
                section.__focusTimeout = window.setTimeout(() => {
                    section.classList.remove('section-focus');
                }, 900);
            };

            const setActiveLink = (targetId) => {
                navLinks.forEach((link) => {
                    const isActive = link.getAttribute('href') === `#${targetId}`;

                    link.classList.toggle('text-primary', isActive);
                    link.classList.toggle('font-bold', isActive);
                    link.classList.toggle('border-secondary', isActive);
                    link.classList.toggle('text-on-surface-variant', !isActive);
                    link.classList.toggle('border-transparent', !isActive);
                });
            };

            const scrollToSection = (section) => {
                const targetTop = getSectionTargetTop(section);

                window.scrollTo({
                    top: targetTop,
                    behavior: 'smooth'
                });

                focusSection(section);

                window.setTimeout(() => {
                    const correctedTop = getSectionTargetTop(section);
                    const currentDelta = Math.abs(window.scrollY - correctedTop);

                    if (currentDelta > 6) {
                        window.scrollTo({
                            top: correctedTop,
                            behavior: 'smooth'
                        });
                    }
                }, 420);
            };

            inPageLinks.forEach((link) => {
                const targetSelector = link.getAttribute('href');
                const targetSection = targetSelector ? document.querySelector(targetSelector) : null;

                if (!targetSection) {
                    return;
                }

                link.addEventListener('click', (event) => {
                    event.preventDefault();

                    const targetId = targetSection.id;
                    if (targetId) {
                        setActiveLink(targetId);
                        scrollToSection(targetSection);
                        window.history.replaceState(null, '', `#${targetId}`);
                    }
                });
            });
            let scrollTicking = false;

            syncActiveLinkWithScroll = () => {
                setActiveLink(getActiveSectionId());
                scrollTicking = false;
            };

            window.addEventListener('scroll', () => {
                if (!scrollTicking) {
                    window.requestAnimationFrame(syncActiveLinkWithScroll);
                    scrollTicking = true;
                }
            }, { passive: true });

            updateSectionOffsetVar();
            window.addEventListener('resize', () => {
                updateSectionOffsetVar();
                syncActiveLinkWithScroll();
            });

            const initialHash = window.location.hash?.replace('#', '');
            const initialSection = initialHash ? document.getElementById(initialHash) : null;

            syncActiveLinkWithScroll();

            if (initialSection) {
                window.requestAnimationFrame(() => {
                    scrollToSection(initialSection);
                });
            }
        });
    </script>

    @stack('scripts')
</body>
</html>
