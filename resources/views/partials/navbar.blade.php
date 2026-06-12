<nav class="bg-surface/80 dark:bg-surface/80 backdrop-blur-md docked full-width top-0 sticky z-50 border-b border-tertiary/10 shadow-sm">
    <div class="px-margin-mobile md:px-margin-desktop py-3 md:py-4 max-w-container-max mx-auto w-full">
        <div class="flex flex-col gap-3 md:flex-row md:items-center md:relative">
            <div class="flex items-center justify-between gap-4">
                <div class="flex items-center">
                    <img src="{{ asset('Mahreen.png') }}" alt="Logo Mahreen Indonesia" class="h-10 w-auto max-w-[180px] object-contain md:h-12 md:max-w-[220px]" />
                </div>
                <div class="flex items-center gap-2 md:hidden">
                    <button class="bg-secondary-container text-on-secondary-container px-3.5 py-2 rounded-full font-label-lg text-label-lg font-bold hover:opacity-80 transition-opacity active:scale-95 duration-200" data-i18n="nav.join_short">
                        Gabung
                    </button>
                    <button class="theme-toggle inline-flex h-10 w-10 items-center justify-center bg-surface-container-high text-on-surface rounded-full border border-outline-variant/30 hover:bg-surface-variant/70 active:scale-95 duration-200" data-theme-toggle type="button">
                        <span class="material-symbols-outlined text-[20px]" data-theme-icon>light_mode</span>
                    </button>
                    <div class="relative" data-language-dropdown>
                        <button class="theme-toggle inline-flex h-10 w-10 items-center justify-center bg-surface-container-high text-on-surface rounded-full border border-outline-variant/30 hover:bg-surface-variant/70 active:scale-95 duration-200" data-language-trigger type="button" aria-haspopup="true" aria-expanded="false" aria-label="Pilih bahasa" title="Pilih bahasa">
                            <span class="material-symbols-outlined text-[20px]">translate</span>
                        </button>
                        <div class="hidden absolute right-0 top-full mt-2 min-w-[170px] rounded-xl border border-outline-variant/30 bg-surface-container-high shadow-2xl p-2 z-50" data-language-menu>
                            <button class="flex w-full items-center gap-3 rounded-lg px-3 py-2 text-left text-on-surface hover:bg-surface-variant/70 transition-colors" data-language-option="id" type="button" aria-pressed="false">
                                <span class="inline-flex h-5 w-7 overflow-hidden rounded-[4px] border border-outline-variant/40 shadow-sm" aria-hidden="true">
                                    <svg class="h-full w-full" viewBox="0 0 28 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="28" height="10" fill="#D91023"/>
                                        <rect y="10" width="28" height="10" fill="#FFFFFF"/>
                                    </svg>
                                </span>
                                <span>Indonesia</span>
                            </button>
                            <button class="flex w-full items-center gap-3 rounded-lg px-3 py-2 text-left text-on-surface hover:bg-surface-variant/70 transition-colors" data-language-option="en" type="button" aria-pressed="false">
                                <span class="inline-flex h-5 w-7 overflow-hidden rounded-[4px] border border-outline-variant/40 shadow-sm" aria-hidden="true">
                                    <svg class="h-full w-full" viewBox="0 0 28 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="28" height="20" fill="#1F4AA8"/>
                                        <path d="M0 0H3.5L28 16.5V20H24.5L0 3.5V0Z" fill="#FFFFFF"/>
                                        <path d="M28 0H24.5L0 16.5V20H3.5L28 3.5V0Z" fill="#FFFFFF"/>
                                        <path d="M0 0H2.1L28 17.3V20H25.9L0 2.7V0Z" fill="#D91023"/>
                                        <path d="M28 0H25.9L0 17.3V20H2.1L28 2.7V0Z" fill="#D91023"/>
                                        <rect x="11" width="6" height="20" fill="#FFFFFF"/>
                                        <rect y="7" width="28" height="6" fill="#FFFFFF"/>
                                        <rect x="12.2" width="3.6" height="20" fill="#D91023"/>
                                        <rect y="8.2" width="28" height="3.6" fill="#D91023"/>
                                    </svg>
                                </span>
                                <span>English</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-5 overflow-x-auto whitespace-nowrap md:hidden">
                <a class="nav-link text-primary font-bold border-b-2 border-secondary pb-1 font-label-lg text-label-lg transition-colors" data-nav-link data-i18n="nav.home" href="#home">Beranda</a>
                <a class="nav-link text-on-surface-variant dark:text-on-surface-variant hover:text-primary font-label-lg text-label-lg transition-colors border-b-2 border-transparent pb-1" data-nav-link data-i18n="nav.about" href="#about">Tentang</a>
                <a class="nav-link text-on-surface-variant dark:text-on-surface-variant hover:text-primary font-label-lg text-label-lg transition-colors border-b-2 border-transparent pb-1" data-nav-link data-i18n="nav.contact" href="#kontak">Kontak</a>
            </div>
            <div class="hidden md:flex md:absolute md:left-1/2 md:-translate-x-1/2 items-center gap-6 lg:gap-8">
                <a class="nav-link text-primary font-bold border-b-2 border-secondary pb-1 font-label-lg text-label-lg transition-colors" data-nav-link data-i18n="nav.home" href="#home">Beranda</a>
                <a class="nav-link text-on-surface-variant dark:text-on-surface-variant hover:text-primary font-label-lg text-label-lg transition-colors border-b-2 border-transparent pb-1" data-nav-link data-i18n="nav.about" href="#about">Tentang</a>
                <a class="nav-link text-on-surface-variant dark:text-on-surface-variant hover:text-primary font-label-lg text-label-lg transition-colors border-b-2 border-transparent pb-1" data-nav-link data-i18n="nav.contact" href="#kontak">Kontak</a>
            </div>
            <div class="hidden md:flex items-center gap-3 md:ml-auto">
                <button class="inline-flex bg-secondary-container text-on-secondary-container px-5 py-2 rounded-full font-label-lg text-label-lg font-bold hover:opacity-80 transition-opacity active:scale-95 duration-200" data-i18n="nav.join_now">
                    Gabung Sekarang
                </button>
                <button class="theme-toggle inline-flex h-10 w-10 items-center justify-center bg-surface-container-high text-on-surface rounded-full border border-outline-variant/30 hover:bg-surface-variant/70 active:scale-95 duration-200" data-theme-toggle type="button">
                    <span class="material-symbols-outlined text-[20px]" data-theme-icon>light_mode</span>
                </button>
                <div class="relative" data-language-dropdown>
                    <button class="theme-toggle inline-flex h-10 w-10 items-center justify-center bg-surface-container-high text-on-surface rounded-full border border-outline-variant/30 hover:bg-surface-variant/70 active:scale-95 duration-200" data-language-trigger type="button" aria-haspopup="true" aria-expanded="false" aria-label="Pilih bahasa" title="Pilih bahasa">
                        <span class="material-symbols-outlined text-[20px]">translate</span>
                    </button>
                    <div class="hidden absolute right-0 top-full mt-2 min-w-[170px] rounded-xl border border-outline-variant/30 bg-surface-container-high shadow-2xl p-2 z-50" data-language-menu>
                        <button class="flex w-full items-center gap-3 rounded-lg px-3 py-2 text-left text-on-surface hover:bg-surface-variant/70 transition-colors" data-language-option="id" type="button" aria-pressed="false">
                            <span class="inline-flex h-5 w-7 overflow-hidden rounded-[4px] border border-outline-variant/40 shadow-sm" aria-hidden="true">
                                <svg class="h-full w-full" viewBox="0 0 28 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="28" height="10" fill="#D91023"/>
                                    <rect y="10" width="28" height="10" fill="#FFFFFF"/>
                                </svg>
                            </span>
                            <span>Indonesia</span>
                        </button>
                        <button class="flex w-full items-center gap-3 rounded-lg px-3 py-2 text-left text-on-surface hover:bg-surface-variant/70 transition-colors" data-language-option="en" type="button" aria-pressed="false">
                            <span class="inline-flex h-5 w-7 overflow-hidden rounded-[4px] border border-outline-variant/40 shadow-sm" aria-hidden="true">
                                <svg class="h-full w-full" viewBox="0 0 28 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="28" height="20" fill="#1F4AA8"/>
                                    <path d="M0 0H3.5L28 16.5V20H24.5L0 3.5V0Z" fill="#FFFFFF"/>
                                    <path d="M28 0H24.5L0 16.5V20H3.5L28 3.5V0Z" fill="#FFFFFF"/>
                                    <path d="M0 0H2.1L28 17.3V20H25.9L0 2.7V0Z" fill="#D91023"/>
                                    <path d="M28 0H25.9L0 17.3V20H2.1L28 2.7V0Z" fill="#D91023"/>
                                    <rect x="11" width="6" height="20" fill="#FFFFFF"/>
                                    <rect y="7" width="28" height="6" fill="#FFFFFF"/>
                                    <rect x="12.2" width="3.6" height="20" fill="#D91023"/>
                                    <rect y="8.2" width="28" height="3.6" fill="#D91023"/>
                                </svg>
                            </span>
                            <span>English</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
