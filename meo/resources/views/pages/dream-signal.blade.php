@php
    $imageUrl = $character->image_path ? Storage::disk('public')->url($character->image_path) : null;
@endphp

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="DREAM SIGNAL — Yoshiro Ming Hiroshima. A dreamy digital archive of Ming's world.">
        <title>DREAM SIGNAL — Yoshiro Ming Hiroshima</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="dream-signal-page">
        <div class="space-backdrop" aria-hidden="true">
            <span class="nebula nebula-one"></span>
            <span class="nebula nebula-two"></span>
            <span class="planet planet-one"></span>
            <span class="planet planet-two"></span>
            <span class="planet planet-three"></span>
            <span class="starfield"></span>
        </div>

        <div class="noise-layer" aria-hidden="true"></div>

        <div class="loading-overlay" id="loadingOverlay" aria-live="polite">
            <div class="loading-content">
                <span class="loading-label">initializing dream archive...</span>
                <div class="loading-bar"><span></span></div>
                <strong>DREAMER FOUND.</strong>
            </div>
        </div>

        <header class="topbar container">
            <div class="brand-block">
                <div class="brand-m" data-glitch="M">M</div>
                <div class="brand-meta">
                    <span class="brand-kicker">DREAM SIGNAL</span>
                    <span class="brand-sub">ARCHIVE // ACTIVE</span>
                </div>
            </div>

            <nav class="nav-shell" aria-label="Main navigation">
                <a href="#home">HOME</a>
                <a href="#profile">PROFILE</a>
                <a href="#likes">LIKES</a>
                <a href="#lore">LORE</a>
                <a href="#skills">SKILLS</a>
                <a href="#gallery">GALLERY</a>
                <a href="#system">SYSTEM</a>
            </nav>
        </header>

        <main class="page-shell">
            <section class="hero container" id="home">
                <div class="hero-copy">
                    <div class="status-row">
                        <span class="status-pill">STATUS: ONLINE</span>
                        <span class="status-pill alt">DREAM STATE: ACTIVE</span>
                    </div>

                    <h1 class="display-title">DREAM SIGNAL</h1>

                    <div class="identity-wrap">
                        <div class="m-logo-wrap">
                            <div class="m-logo {{ $imageUrl ? 'has-image' : '' }}" style="--bg-image: url('{{ $imageUrl ?? '' }}');">
                                @if ($imageUrl)
                                    <img src="{{ $imageUrl }}" alt="Yoshiro Ming Hiroshima portrait">
                                @else
                                    <span>M</span>
                                @endif
                            </div>
                        </div>

                        <div class="identity-copy">
                            <p class="eyebrow">YOSHIRO MING HIROSHIMA</p>
                            <h2>{{ $character->title ?? 'DREAMER' }}</h2>
                            <div class="signal-grid">
                                <div><span>MOOD</span><strong>{{ $character->mood }}</strong></div>
                                <div><span>ENERGY</span><strong>{{ $character->energy }}</strong></div>
                                <div><span>SIGNAL</span><strong>{{ $character->signal }}</strong></div>
                                <div><span>ARCHIVE</span><strong>{{ $character->status }}</strong></div>
                            </div>
                        </div>
                    </div>

                    <div class="cta-row">
                        <button class="primary-btn" type="button">BOOK A DREAM</button>
                        <button class="ghost-btn" type="button">OPEN ARCHIVE</button>
                    </div>
                </div>

                <aside class="info-panel">
                    <div class="panel-header">
                        <span>PROFILE // SIGNAL</span>
                        <span class="tiny-dot"></span>
                    </div>
                    <div class="mini-card">
                        <span class="label">VOID NOTE</span>
                        <p>"A little loud, a little bright, and always ready to help."</p>
                    </div>
                    <div class="mini-grid">
                        <div><span>AGE</span><strong>16</strong></div>
                        <div><span>PRONOUNS</span><strong>HE/THEY</strong></div>
                        <div><span>ID</span><strong>DEMI-BOY</strong></div>
                        <div><span>LOVE</span><strong>AROMANTIC</strong></div>
                    </div>
                </aside>
            </section>

            <section class="comments-strip container" aria-label="Japanese comments">
                <marquee behavior="scroll" direction="left" scrollamount="5">
                    <span>かわいい！</span>
                    <span>この子好き</span>
                    <span>Ming.exe 起動中...</span>
                    <span>夢みたい</span>
                    <span>え、かわいい</span>
                    <span>今日も元気そう</span>
                    <span>この色好き</span>
                    <span>最高すぎる</span>
                    <span>Ming！！！</span>
                    <span>夢を見てるみたい</span>
                </marquee>
            </section>

            <section class="content-grid container" id="profile">
                <div class="section-heading">
                    <span class="section-kicker">PROFILE</span>
                    <h3>DATA FILE</h3>
                </div>

                <div class="profile-grid">
                    <article class="glass-card">
                        <span class="card-tag">NAME</span>
                        <p>{{ $character->name }}</p>
                    </article>
                    <article class="glass-card">
                        <span class="card-tag">AGE</span>
                        <p>{{ $character->age }}</p>
                    </article>
                    <article class="glass-card">
                        <span class="card-tag">PRONOUNS</span>
                        <p>{{ $character->pronouns }}</p>
                    </article>
                    <article class="glass-card">
                        <span class="card-tag">IDENTITY</span>
                        <p>{{ $character->identity }}</p>
                    </article>
                    <article class="glass-card">
                        <span class="card-tag">ORIENTATION</span>
                        <p>{{ $character->sexuality }} / {{ $character->romantic_orientation }}</p>
                    </article>
                    <article class="glass-card wide">
                        <span class="card-tag">PERSONALITY</span>
                        <p>{{ $character->personality }}</p>
                    </article>
                </div>
            </section>

            <section class="content-grid container" id="likes">
                <div class="section-heading">
                    <span class="section-kicker">LIKES</span>
                    <h3>WHAT MAKES MING LIGHT UP</h3>
                </div>
                <div class="tag-cloud">
                    @foreach ($character->likes as $like)
                        <span>{{ $like }}</span>
                    @endforeach
                </div>
            </section>

            <section class="content-grid container" id="dislikes">
                <div class="section-heading">
                    <span class="section-kicker">DISLIKES</span>
                    <h3>UNPLEASANT SIGNALS</h3>
                </div>
                <div class="tag-cloud muted">
                    @foreach ($character->dislikes as $dislike)
                        <span>{{ $dislike }}</span>
                    @endforeach
                </div>
            </section>

            <section class="content-grid container" id="lore">
                <div class="section-heading">
                    <span class="section-kicker">LORE</span>
                    <h3>MEMORY ARCHIVE</h3>
                </div>
                <div class="lore-grid">
                    @foreach ($character->lore as $item)
                        <article class="lore-card">
                            <span class="card-tag">ARCHIVE</span>
                            <p>{{ $item }}</p>
                        </article>
                    @endforeach
                </div>
            </section>

            <section class="content-grid container" id="skills">
                <div class="section-heading">
                    <span class="section-kicker">SKILLS</span>
                    <h3>COMBAT STYLE</h3>
                </div>
                <div class="skills-grid">
                    @foreach ($character->skills as $skill)
                        <article class="skill-card">
                            <span class="card-tag">STYLE</span>
                            <h4>{{ $skill }}</h4>
                        </article>
                    @endforeach
                </div>
            </section>

            <section class="content-grid container" id="quotes">
                <div class="section-heading">
                    <span class="section-kicker">QUOTES</span>
                    <h3>SIGNAL FRAGMENTS</h3>
                </div>
                <div class="quote-grid">
                    <article class="quote-card">“I’m not trying to be perfect. I just want people to feel better when I’m around.”</article>
                    <article class="quote-card">“If I can help, I will. That’s just what feels right.”</article>
                    <article class="quote-card">“A little chaos is fine, as long as nobody gets left behind.”</article>
                </div>
            </section>

            <section class="content-grid container" id="gallery">
                <div class="section-heading">
                    <span class="section-kicker">GALLERY</span>
                    <h3>ARCHIVE IMAGES</h3>
                </div>
                <div class="gallery-grid">
                    <figure class="gallery-item tall">
                        <div class="gallery-art art-one"></div>
                        <figcaption>dream bloom</figcaption>
                    </figure>
                    <figure class="gallery-item">
                        <div class="gallery-art art-two"></div>
                        <figcaption>night orbit</figcaption>
                    </figure>
                    <figure class="gallery-item">
                        <div class="gallery-art art-three"></div>
                        <figcaption>signal bloom</figcaption>
                    </figure>
                    <figure class="gallery-item wide">
                        <div class="gallery-art art-four"></div>
                        <figcaption>archive memory</figcaption>
                    </figure>
                </div>
            </section>

            <section class="content-grid container" id="system">
                <div class="section-heading">
                    <span class="section-kicker">SYSTEM</span>
                    <h3>STATUS NODE</h3>
                </div>
                <div class="system-panel">
                    <div class="system-row"><span>CORE</span><strong>ONLINE</strong></div>
                    <div class="system-row"><span>DATABASE</span><strong>CONNECTED</strong></div>
                    <div class="system-row"><span>STORAGE</span><strong>READY</strong></div>
                    <div class="system-row"><span>SIGNAL</span><strong>ACTIVE</strong></div>
                    <div class="system-row"><span>DREAM STATE</span><strong>STABLE</strong></div>
                    <div class="system-row"><span>Ming64</span><strong>ARCHIVE FOUND</strong></div>
                </div>
            </section>

            <section class="container upload-section">
                <div class="section-heading">
                    <span class="section-kicker">UPLOAD</span>
                    <h3>RELINK THE SIGNAL</h3>
                </div>

                <form class="upload-box" id="uploadForm" action="{{ route('upload.image') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="imageInput" class="upload-label">
                        <span>SELECT IMAGE</span>
                        <input id="imageInput" type="file" name="image" accept="image/png,image/jpeg,image/webp,image/avif" required>
                    </label>
                    <button class="primary-btn" type="submit">UPLOAD IMAGE</button>
                </form>
                <div class="upload-status" id="uploadStatus" aria-live="polite"></div>
            </section>
        </main>

        <footer class="footer container">
            <div>
                <span>DREAM SIGNAL</span>
                <span>YOSHIRO MING HIROSHIMA</span>
            </div>
            <div>
                <span>DREAM ARCHIVE</span>
                <span>SIGNAL ACTIVE</span>
            </div>
        </footer>
    </body>
</html>
