@extends('layouts.app')

@section('title', 'Mahreen Indonesia | Berkarya Untuk Indonesia')

@section('content')
    <main>
        <section class="relative min-h-[auto] sm:min-h-[76vh] lg:min-h-[82vh] flex items-center px-margin-mobile md:px-margin-desktop py-10 sm:py-14 md:py-stack-xl overflow-hidden" id="home">
            <div class="blob-glow w-[280px] h-[280px] sm:w-[500px] sm:h-[500px] bg-primary top-[-6%] right-[-12%] sm:right-[-5%] rounded-full"></div>
            <div class="blob-glow w-[240px] h-[240px] sm:w-[400px] sm:h-[400px] bg-tertiary bottom-[-8%] left-[-10%] sm:left-[-5%] rounded-full"></div>
            <div class="max-w-container-max mx-auto w-full relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 md:gap-gutter items-center">
                    <div class="lg:col-span-7 flex flex-col gap-5 md:gap-stack-md">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-primary/10 border border-primary/20 w-fit mb-1 sm:mb-2">
                            <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                            <span class="text-label-md font-bold text-primary tracking-widest uppercase" data-i18n="hero.badge">Berkarya Untuk Indonesia</span>
                        </div>
                        <h1 class="font-display-lg text-[clamp(2.25rem,8vw,3.6rem)] md:text-display-lg leading-[1.04] sm:leading-tight max-w-[12ch] sm:max-w-none">
                            <span data-i18n="hero.title_prefix">Generasi Muda</span> <span class="gradient-text" data-i18n="hero.title_gradient">Berkarya</span> <span data-i18n="hero.title_suffix">untuk Indonesia.</span>
                        </h1>
                        <p class="font-body-lg text-[clamp(0.98rem,4vw,1.08rem)] leading-7 text-on-surface-variant max-w-xl" data-i18n="hero.description">
                            Mahreen Indonesia mengajak generasi muda Indonesia memadukan kreativitas, teknologi, dan kolaborasi untuk melahirkan karya yang relevan, membuka peluang, dan memberi dampak positif bagi masyarakat.
                        </p>
                        <div class="flex flex-col sm:flex-row flex-wrap gap-3 mt-1 sm:mt-3">
                            <button class="w-full sm:w-auto min-h-[52px] bg-primary text-on-primary px-6 md:px-8 py-3.5 md:py-4 rounded-full font-label-lg text-label-lg font-bold flex items-center justify-center gap-2 hover:bg-tertiary transition-all shadow-lg active:scale-95 duration-200" data-i18n="hero.cta_primary">
                                Mulai Berkarya
                                <span class="material-symbols-outlined">rocket_launch</span>
                            </button>
                            <button class="w-full sm:w-auto min-h-[52px] bg-surface-variant/50 backdrop-blur-sm border border-outline-variant/30 text-on-surface px-6 md:px-8 py-3.5 md:py-4 rounded-full font-label-lg text-label-lg font-bold hover:bg-surface-variant transition-all active:scale-95 duration-200" data-i18n="hero.cta_secondary">
                                Lihat Arah Gerakan
                            </button>
                        </div>
                    </div>
                    <div class="lg:col-span-5 relative mt-2 sm:mt-10 lg:mt-0">
                        <div class="relative z-10 glass-card p-2 rounded-2xl rotate-0 sm:rotate-2 transform transition-transform hover:rotate-0 duration-500 w-full max-w-[300px] min-[380px]:max-w-[340px] sm:max-w-[360px] md:max-w-[380px] lg:max-w-[400px] xl:max-w-[420px] mx-auto lg:ml-auto">
                            <img alt="Ilustrasi generasi muda Indonesia berkarya dengan kreativitas dan teknologi" class="w-full h-auto object-cover rounded-xl shadow-2xl" src="{{ asset('images/hero-berkarya-indonesia.svg') }}" />
                        </div>
                        <div class="absolute -bottom-3 right-2 md:right-4 w-20 h-20 md:w-28 md:h-28 bg-secondary/20 blur-3xl rounded-full"></div>
                        <div class="absolute top-1/2 left-1/2 hidden sm:block -translate-x-1/2 -translate-y-1/2 w-[92%] h-[92%] border border-primary/10 rounded-full scale-125 -z-10 animate-spin-slow"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="px-margin-mobile md:px-margin-desktop py-8 md:py-stack-lg border-y border-outline-variant/10 bg-surface-container-lowest" id="stats">
            <div class="max-w-container-max mx-auto">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-4 md:gap-8">
                    <div class="text-center group mobile-stat-card">
                        <div class="text-display-lg-mobile font-bold text-primary mb-1 group-hover:scale-110 transition-transform" data-counter data-target="1000" data-suffix="+">0+</div>
                        <div class="text-label-lg font-bold text-on-surface-variant uppercase tracking-wider" data-i18n="stats.alumni">Talenta Muda</div>
                    </div>
                    <div class="text-center group mobile-stat-card">
                        <div class="text-display-lg-mobile font-bold text-secondary mb-1 group-hover:scale-110 transition-transform" data-counter data-target="50" data-suffix="+">0+</div>
                        <div class="text-label-lg font-bold text-on-surface-variant uppercase tracking-wider" data-i18n="stats.projects">Karya Berdampak</div>
                    </div>
                    <div class="text-center group mobile-stat-card">
                        <div class="text-display-lg-mobile font-bold text-tertiary mb-1 group-hover:scale-110 transition-transform" data-counter data-target="10" data-suffix="+">0+</div>
                        <div class="text-label-lg font-bold text-on-surface-variant uppercase tracking-wider" data-i18n="stats.cities">Kota Terhubung</div>
                    </div>
                    <div class="text-center group mobile-stat-card">
                        <div class="text-display-lg-mobile font-bold text-primary mb-1 group-hover:scale-110 transition-transform" data-counter data-target="25" data-suffix="+">0+</div>
                        <div class="text-label-lg font-bold text-on-surface-variant uppercase tracking-wider" data-i18n="stats.mentors">Inisiatif Digital</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="px-margin-mobile md:px-margin-desktop py-12 md:py-stack-xl bg-surface-container-low overflow-hidden" id="about">
            <div class="max-w-container-max mx-auto">
                    <div class="mb-9 md:mb-stack-lg text-left max-w-3xl">
                    <h2 class="font-headline-xl text-headline-xl text-primary mb-4 tracking-tight" data-i18n="about.title">Berkarya Untuk Indonesia</h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant" data-i18n="about.description">
                        Mahreen Indonesia menjadi ruang bagi generasi muda untuk mengubah ide menjadi karya, kreativitas menjadi solusi, dan teknologi menjadi dampak yang terasa bagi masyarakat Indonesia.
                    </p>
                </div>
                <div class="flex flex-col gap-12 md:gap-stack-xl">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-stack-lg items-center group">
                        <div class="order-2 md:order-1 flex flex-col gap-stack-sm scroll-reveal-sequence" data-reveal-sequence>
                            <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center text-primary mb-3" data-reveal-item>
                                <span class="material-symbols-outlined text-4xl">brush</span>
                            </div>
                            <h3 class="font-headline-lg text-headline-lg text-on-surface group-hover:text-primary transition-colors" data-i18n="about.creative.title" data-reveal-item>Kreativitas yang Relevan</h3>
                            <p class="font-body-lg text-body-lg text-on-surface-variant" data-i18n="about.creative.description" data-reveal-item>
                                Kami mendorong generasi muda untuk melahirkan karya yang berakar pada realitas Indonesia: kuat dalam gagasan, relevan secara visual, dan mampu menyampaikan pesan yang menggerakkan.
                            </p>
                            <ul class="flex flex-col gap-2 mt-3 text-on-surface-variant font-body-md">
                                <li class="flex items-center gap-2" data-reveal-item><span class="material-symbols-outlined text-primary text-sm">check_circle</span><span data-i18n="about.creative.point1">Ide lokal yang tumbuh menjadi karya nyata</span></li>
                                <li class="flex items-center gap-2" data-reveal-item><span class="material-symbols-outlined text-primary text-sm">check_circle</span><span data-i18n="about.creative.point2">Visual dan narasi yang dekat dengan masyarakat</span></li>
                                <li class="flex items-center gap-2" data-reveal-item><span class="material-symbols-outlined text-primary text-sm">check_circle</span><span data-i18n="about.creative.point3">Ekspresi kreatif yang membawa nilai dan arah</span></li>
                            </ul>
                        </div>
                        <div class="order-1 md:order-2 glass-card rounded-[1.7rem] md:rounded-3xl overflow-hidden aspect-[4/3] min-[420px]:aspect-video relative about-flip-card" aria-pressed="false" data-flip-card role="button" tabindex="0">
                            <div class="about-flip-card__inner">
                                <div class="about-flip-card__face">
                                    <img alt="Ilustrasi karya kreatif generasi muda Indonesia" class="about-flip-card__image" src="{{ asset('images/about-creative-digital.svg') }}" />
                                    <div class="about-flip-card__veil"></div>
                                    <div class="about-flip-card__badge about-flip-card__badge--primary">
                                        <span class="material-symbols-outlined">draw</span>
                                        <span data-i18n="about.visual.creative.front">Ide Menjadi Karya</span>
                                    </div>
                                    <div class="about-flip-card__hint" data-i18n="about.visual.flip_hint">Tap untuk flip</div>
                                </div>
                                <div class="about-flip-card__face about-flip-card__face--back">
                                    <img alt="Ilustrasi karya anak muda untuk Indonesia" class="about-flip-card__image" src="{{ asset('images/about-collaboration-impact.svg') }}" />
                                    <div class="about-flip-card__veil about-flip-card__veil--gold"></div>
                                    <div class="about-flip-card__badge about-flip-card__badge--secondary">
                                        <span class="material-symbols-outlined">hub</span>
                                        <span data-i18n="about.visual.creative.back">Karya untuk Indonesia</span>
                                    </div>
                                    <div class="about-flip-card__hint" data-i18n="about.visual.flip_hint">Tap untuk flip</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-stack-lg items-center group">
                        <div class="order-1 glass-card rounded-[1.7rem] md:rounded-3xl overflow-hidden aspect-[4/3] min-[420px]:aspect-video relative about-flip-card about-flip-card--delay" aria-pressed="false" data-flip-card role="button" tabindex="0">
                            <div class="about-flip-card__inner">
                                <div class="about-flip-card__face">
                                    <img alt="Ilustrasi teknologi untuk solusi Indonesia" class="about-flip-card__image" src="{{ asset('images/about-creative-digital.svg') }}" />
                                    <div class="about-flip-card__veil about-flip-card__veil--gold"></div>
                                    <div class="about-flip-card__badge about-flip-card__badge--secondary">
                                        <span class="material-symbols-outlined">monitoring</span>
                                        <span data-i18n="about.visual.business.front">Teknologi Tepat Guna</span>
                                    </div>
                                    <div class="about-flip-card__hint" data-i18n="about.visual.flip_hint">Tap untuk flip</div>
                                </div>
                                <div class="about-flip-card__face about-flip-card__face--back">
                                    <img alt="Ilustrasi solusi digital untuk komunitas" class="about-flip-card__image" src="{{ asset('images/about-collaboration-impact.svg') }}" />
                                    <div class="about-flip-card__veil"></div>
                                    <div class="about-flip-card__badge about-flip-card__badge--primary">
                                        <span class="material-symbols-outlined">auto_awesome</span>
                                        <span data-i18n="about.visual.business.back">Solusi untuk Komunitas</span>
                                    </div>
                                    <div class="about-flip-card__hint" data-i18n="about.visual.flip_hint">Tap untuk flip</div>
                                </div>
                            </div>
                        </div>
                        <div class="order-2 flex flex-col gap-stack-sm scroll-reveal-sequence" data-reveal-sequence>
                            <div class="w-14 h-14 rounded-2xl bg-secondary/10 flex items-center justify-center text-secondary mb-3" data-reveal-item>
                                <span class="material-symbols-outlined text-4xl">memory</span>
                            </div>
                            <h3 class="font-headline-lg text-headline-lg text-on-surface group-hover:text-secondary transition-colors" data-i18n="about.business.title" data-reveal-item>Teknologi untuk Solusi</h3>
                            <p class="font-body-lg text-body-lg text-on-surface-variant" data-i18n="about.business.description" data-reveal-item>
                                Di sinilah kreativitas diterjemahkan menjadi sistem, platform, dan solusi yang memudahkan hidup. Teknologi dipakai bukan untuk terlihat canggih, tetapi untuk menjawab kebutuhan nyata di tengah masyarakat.
                            </p>
                            <ul class="flex flex-col gap-2 mt-3 text-on-surface-variant font-body-md">
                                <li class="flex items-center gap-2" data-reveal-item><span class="material-symbols-outlined text-secondary text-sm">check_circle</span><span data-i18n="about.business.point1">Teknologi yang berangkat dari kebutuhan lokal</span></li>
                                <li class="flex items-center gap-2" data-reveal-item><span class="material-symbols-outlined text-secondary text-sm">check_circle</span><span data-i18n="about.business.point2">Sistem digital untuk efisiensi dan akses yang lebih luas</span></li>
                                <li class="flex items-center gap-2" data-reveal-item><span class="material-symbols-outlined text-secondary text-sm">check_circle</span><span data-i18n="about.business.point3">Solusi praktis yang bisa dipakai dan dirasakan</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-stack-lg items-center group">
                        <div class="order-2 md:order-1 flex flex-col gap-stack-sm scroll-reveal-sequence" data-reveal-sequence>
                            <div class="w-14 h-14 rounded-2xl bg-tertiary/10 flex items-center justify-center text-tertiary mb-3" data-reveal-item>
                                <span class="material-symbols-outlined text-4xl">groups</span>
                            </div>
                            <h3 class="font-headline-lg text-headline-lg text-on-surface group-hover:text-tertiary transition-colors" data-i18n="about.social.title" data-reveal-item>Dampak untuk Masyarakat</h3>
                            <p class="font-body-lg text-body-lg text-on-surface-variant" data-i18n="about.social.description" data-reveal-item>
                                Setiap karya yang lahir perlu kembali ke masyarakat. Karena itu, Mahreen Indonesia menempatkan kolaborasi, empati, dan kebermanfaatan sebagai ukuran penting dari pertumbuhan generasi muda.
                            </p>
                            <ul class="flex flex-col gap-2 mt-3 text-on-surface-variant font-body-md">
                                <li class="flex items-center gap-2" data-reveal-item><span class="material-symbols-outlined text-tertiary text-sm">check_circle</span><span data-i18n="about.social.point1">Kolaborasi terbuka antar talenta muda Indonesia</span></li>
                                <li class="flex items-center gap-2" data-reveal-item><span class="material-symbols-outlined text-tertiary text-sm">check_circle</span><span data-i18n="about.social.point2">Kepekaan terhadap tantangan dan kebutuhan sekitar</span></li>
                                <li class="flex items-center gap-2" data-reveal-item><span class="material-symbols-outlined text-tertiary text-sm">check_circle</span><span data-i18n="about.social.point3">Karya yang memberi manfaat positif dan terukur</span></li>
                            </ul>
                        </div>
                        <div class="order-1 md:order-2 glass-card rounded-[1.7rem] md:rounded-3xl overflow-hidden aspect-[4/3] min-[420px]:aspect-video relative about-flip-card about-flip-card--reverse" aria-pressed="false" data-flip-card role="button" tabindex="0">
                            <div class="about-flip-card__inner">
                                <div class="about-flip-card__face">
                                    <img alt="Ilustrasi kolaborasi anak muda Indonesia" class="about-flip-card__image" src="{{ asset('images/about-collaboration-impact.svg') }}" />
                                    <div class="about-flip-card__veil"></div>
                                    <div class="about-flip-card__badge about-flip-card__badge--tertiary">
                                        <span class="material-symbols-outlined">groups</span>
                                        <span data-i18n="about.visual.social.front">Kolaborasi Anak Muda</span>
                                    </div>
                                    <div class="about-flip-card__hint" data-i18n="about.visual.flip_hint">Tap untuk flip</div>
                                </div>
                                <div class="about-flip-card__face about-flip-card__face--back">
                                    <img alt="Ilustrasi dampak positif untuk masyarakat Indonesia" class="about-flip-card__image" src="{{ asset('images/about-creative-digital.svg') }}" />
                                    <div class="about-flip-card__veil about-flip-card__veil--gold"></div>
                                    <div class="about-flip-card__badge about-flip-card__badge--secondary">
                                        <span class="material-symbols-outlined">volunteer_activism</span>
                                        <span data-i18n="about.visual.social.back">Dampak Positif</span>
                                    </div>
                                    <div class="about-flip-card__hint" data-i18n="about.visual.flip_hint">Tap untuk flip</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="px-margin-mobile md:px-margin-desktop py-12 md:py-stack-xl relative overflow-hidden">
            <div class="max-w-container-max mx-auto">
                <div class="relative rounded-[24px] md:rounded-[32px] p-5 sm:p-7 md:p-16 lg:p-20 text-center overflow-hidden border border-white/5 shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-container via-surface-container-high to-tertiary-container z-0"></div>
                    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-20 mix-blend-overlay"></div>
                    <div class="relative z-10">
                        <div class="mb-4 sm:mb-5 inline-block px-4 sm:px-5 py-2 rounded-full glass-card border-secondary/20 text-secondary font-bold text-label-lg uppercase tracking-widest" data-i18n="cta.badge">
                            Gerakan Anak Muda Indonesia
                        </div>
                        <h2 class="font-display-lg text-[clamp(2rem,7vw,3rem)] md:text-headline-xl text-on-primary-container mb-5 md:mb-stack-md max-w-4xl mx-auto leading-[1.08]">
                            <span data-i18n="cta.title_line1">Saat kreativitas bertemu teknologi,</span> <br class="hidden md:block" /> <span data-i18n="cta.title_line2">lahirlah karya untuk Indonesia.</span>
                        </h2>
                        <p class="font-body-lg text-[clamp(0.98rem,4vw,1.08rem)] leading-7 text-primary/80 max-w-2xl mx-auto mb-7 md:mb-stack-lg" data-i18n="cta.description">
                            Kami membangun ruang bagi generasi muda yang ingin mencipta, bereksperimen, dan memanfaatkan teknologi untuk menghadirkan perubahan yang bermanfaat bagi lingkungan dan masyarakat.
                        </p>
                        <div class="flex flex-col md:flex-row gap-3 sm:gap-4 justify-center items-center">
                            <button class="w-full md:w-auto min-h-[52px] bg-secondary text-on-secondary px-7 md:px-10 py-3.5 md:py-4 rounded-full font-label-lg text-label-lg font-bold border-b-4 border-on-secondary-fixed-variant hover:scale-105 active:scale-95 transition-all shadow-2xl" data-i18n="cta.primary">
                                Gabung Gerakan
                            </button>
                            <a class="w-full md:w-auto min-h-[52px] flex items-center justify-center px-7 md:px-10 py-3.5 md:py-4 text-on-surface font-bold hover:text-primary transition-colors text-center" data-i18n="cta.secondary" href="#kontak">
                                Diskusi Kolaborasi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="px-margin-mobile md:px-margin-desktop py-12 md:py-stack-xl bg-surface-container-lowest border-t border-outline-variant/10" id="kontak">
            <div class="max-w-container-max mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-stack-xl items-center">
                    <div>
                        <h2 class="font-headline-xl text-headline-xl text-primary mb-4 tracking-tight" data-i18n="contact.title">Bangun Dampak Bersama</h2>
                        <p class="font-body-lg text-body-lg text-on-surface-variant mb-7 md:mb-8" data-i18n="contact.description">
                            Jika Anda ingin mengajak generasi muda berkarya, membangun solusi kreatif, atau mengembangkan teknologi yang berguna untuk masyarakat, Mahreen Indonesia siap menjadi ruang kolaborasi berikutnya.
                        </p>
                        <div class="flex flex-col gap-4 sm:gap-5">
                            <div class="flex items-center gap-4 group glass-card rounded-2xl px-4 py-3">
                                <div class="w-11 h-11 rounded-xl bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-all">
                                    <span class="material-symbols-outlined">mail</span>
                                </div>
                                <div>
                                    <p class="text-label-md text-on-surface-variant uppercase tracking-wider" data-i18n="contact.email_label">Email Kami</p>
                                    <p class="text-body-lg font-bold text-on-surface">halo@mahreen.id</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 group glass-card rounded-2xl px-4 py-3">
                                <div class="w-11 h-11 rounded-xl bg-secondary/10 flex items-center justify-center text-secondary group-hover:bg-secondary group-hover:text-on-secondary transition-all">
                                    <span class="material-symbols-outlined">location_on</span>
                                </div>
                                <div>
                                    <p class="text-label-md text-on-surface-variant uppercase tracking-wider" data-i18n="contact.location_label">Lokasi</p>
                                    <p class="text-body-lg font-bold text-on-surface" data-i18n="contact.location_value">Cimahi, Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="glass-card p-5 sm:p-6 md:p-9 rounded-[24px] md:rounded-[28px] border border-primary/10">
                        <form class="flex flex-col gap-4">
                            <div class="flex flex-col gap-2">
                                <label class="text-label-lg text-on-surface-variant" data-i18n="contact.form.name">Nama Lengkap</label>
                                <input type="text" class="bg-surface-container-high border border-outline-variant/30 rounded-xl px-4 py-3 text-on-surface focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" data-i18n-placeholder="contact.form.name_placeholder" placeholder="Masukkan nama Anda" />
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-label-lg text-on-surface-variant" data-i18n="contact.form.email">Email</label>
                                <input type="email" class="bg-surface-container-high border border-outline-variant/30 rounded-xl px-4 py-3 text-on-surface focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" data-i18n-placeholder="contact.form.email_placeholder" placeholder="email@anda.com" />
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-label-lg text-on-surface-variant" data-i18n="contact.form.message">Pesan</label>
                                <textarea rows="4" class="bg-surface-container-high border border-outline-variant/30 rounded-xl px-4 py-3 text-on-surface focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" data-i18n-placeholder="contact.form.message_placeholder" placeholder="Apa yang bisa kami bantu?"></textarea>
                            </div>
                            <button type="submit" class="mt-3 bg-primary text-on-primary py-3.5 rounded-xl font-bold hover:bg-tertiary transition-all active:scale-95" data-i18n="contact.form.submit">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.body.classList.add('js-ready');

            const statsSection = document.querySelector('#stats');
            const counters = Array.from(document.querySelectorAll('[data-counter]'));
            const flipCards = Array.from(document.querySelectorAll('[data-flip-card]'));
            const revealSequences = Array.from(document.querySelectorAll('[data-reveal-sequence]'));
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        entry.target.classList.remove('opacity-0', 'translate-y-12');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('section, .glass-card, .group').forEach(el => {
                el.classList.add('transition-all', 'duration-1000', 'opacity-0', 'translate-y-12');
                observer.observe(el);
            });

            const setCounterValue = (counter, value) => {
                const suffix = counter.dataset.suffix || '';
                counter.textContent = `${value}${suffix}`;
            };

            let counterAnimationVersion = 0;
            let statsAnimatedInView = false;

            const animateCounter = (counter) => {
                const target = Number.parseInt(counter.dataset.target || '0', 10);
                const duration = 1400;
                const start = performance.now();
                const animationVersion = counterAnimationVersion;

                const step = (now) => {
                    if (animationVersion !== counterAnimationVersion) {
                        return;
                    }

                    const progress = Math.min((now - start) / duration, 1);
                    const easedProgress = 1 - Math.pow(1 - progress, 3);
                    const currentValue = Math.floor(target * easedProgress);

                    setCounterValue(counter, currentValue);

                    if (progress < 1) {
                        window.requestAnimationFrame(step);
                    } else {
                        setCounterValue(counter, target);
                    }
                };

                window.requestAnimationFrame(step);
            };

            if (statsSection && counters.length) {
                const syncStatsCounters = () => {
                    const rect = statsSection.getBoundingClientRect();
                    const viewportMarker = window.innerHeight * 0.58;
                    const isActive = rect.top <= viewportMarker && rect.bottom >= viewportMarker;

                    if (isActive && !statsAnimatedInView) {
                        counterAnimationVersion += 1;
                        statsAnimatedInView = true;
                        counters.forEach((counter, index) => {
                            window.setTimeout(() => animateCounter(counter), index * 120);
                        });
                    } else if (!isActive && statsAnimatedInView) {
                        counterAnimationVersion += 1;
                        statsAnimatedInView = false;
                        counters.forEach((counter) => setCounterValue(counter, 0));
                    }
                };

                let statsTicking = false;
                const requestStatsSync = () => {
                    if (!statsTicking) {
                        window.requestAnimationFrame(() => {
                            syncStatsCounters();
                            statsTicking = false;
                        });
                        statsTicking = true;
                    }
                };

                syncStatsCounters();
                window.addEventListener('scroll', requestStatsSync, { passive: true });
                window.addEventListener('resize', requestStatsSync);
            }

            if (flipCards.length) {
                const toggleFlipCard = (card) => {
                    const isFlipped = card.classList.toggle('is-flipped');
                    card.setAttribute('aria-pressed', isFlipped ? 'true' : 'false');
                };

                flipCards.forEach((card) => {
                    card.addEventListener('click', () => {
                        toggleFlipCard(card);
                    });

                    card.addEventListener('keydown', (event) => {
                        if (event.key === 'Enter' || event.key === ' ') {
                            event.preventDefault();
                            toggleFlipCard(card);
                        }
                    });
                });
            }

            if (revealSequences.length) {
                revealSequences.forEach((sequence) => {
                    Array.from(sequence.querySelectorAll('[data-reveal-item]')).forEach((item, index) => {
                        item.style.setProperty('--reveal-delay', `${index * 110}ms`);
                    });
                });

                const revealObserver = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        entry.target.classList.toggle('is-visible', entry.isIntersecting);
                    });
                }, {
                    threshold: 0.38,
                    rootMargin: '0px 0px -14% 0px'
                });

                revealSequences.forEach((sequence) => {
                    revealObserver.observe(sequence);
                });
            }
        });
    </script>
@endpush
