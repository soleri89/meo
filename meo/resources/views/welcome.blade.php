<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MING — Make it meaningful</title>
        <meta name="description" content="MING is a modern digital experience that turns ideas into momentum.">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="page-shell">
            <header class="topbar container">
                <div class="brand-wrap">
                    <div class="brand-mark">M</div>
                    <span class="brand-name">MING</span>
                </div>

                <nav class="main-nav" aria-label="Main navigation">
                    <a href="#about">About</a>
                    <a href="#features">Features</a>
                    <a href="#studio">Studio</a>
                    <a href="#pricing">Pricing</a>
                </nav>

                <div class="nav-actions">
                    <a class="link-button" href="#contact">Log in</a>
                    <a class="primary-button" href="#contact">Start now</a>
                </div>
            </header>

            <main>
                <section class="hero container">
                    <div class="hero-copy">
                        <span class="eyebrow">Design with movement</span>
                        <h1>Build a bold digital presence that feels alive.</h1>
                        <p>
                            MING helps brands and creators turn attention into action through sharp strategy,
                            immersive design, and launch-ready experiences.
                        </p>

                        <div class="cta-row">
                            <a class="primary-button" href="#contact">Book a demo</a>
                            <a class="secondary-button" href="#features">See how it works</a>
                        </div>

                        <ul class="mini-proof" aria-label="Key stats">
                            <li><strong>12k+</strong><span>launches</span></li>
                            <li><strong>4.9/5</strong><span>average rating</span></li>
                            <li><strong>3x</strong><span>faster iteration</span></li>
                        </ul>
                    </div>

                    <div class="hero-visual" aria-label="MING product preview">
                        <div class="floating-panel panel-one">
                            <span class="tag">Live Campaign</span>
                            <h3>Autumn launch</h3>
                            <div class="wave-bars">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>

                        <div class="dashboard-card">
                            <div class="dashboard-header">
                                <span class="dot red"></span>
                                <span class="dot amber"></span>
                                <span class="dot green"></span>
                            </div>
                            <div class="dashboard-body">
                                <div class="metric large">
                                    <span class="metric-label">Engagement</span>
                                    <strong>87%</strong>
                                </div>
                                <div class="metric-row">
                                    <div class="metric small">
                                        <span class="metric-label">CTR</span>
                                        <strong>4.8%</strong>
                                    </div>
                                    <div class="metric small accent">
                                        <span class="metric-label">Sales</span>
                                        <strong>+32%</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="floating-panel panel-two">
                            <span class="panel-label">Audience</span>
                            <div class="avatar-stack">
                                <span>A</span>
                                <span>M</span>
                                <span>J</span>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="features container" id="features">
                    <div class="section-heading">
                        <span class="eyebrow">Why MING</span>
                        <h2>Everything your next launch needs.</h2>
                    </div>

                    <div class="feature-grid">
                        <article class="feature-card">
                            <div class="feature-icon">01</div>
                            <h3>Strategy</h3>
                            <p>Positioning, messaging, and roadmap clarity that keeps teams aligned from day one.</p>
                        </article>

                        <article class="feature-card">
                            <div class="feature-icon">02</div>
                            <h3>Brand systems</h3>
                            <p>Visual direction and reusable design language that scales across every channel.</p>
                        </article>

                        <article class="feature-card">
                            <div class="feature-icon">03</div>
                            <h3>Conversion UX</h3>
                            <p>High-impact product storytelling designed to keep momentum and convert attention.</p>
                        </article>
                    </div>
                </section>

                <section class="showcase container" id="studio">
                    <div class="showcase-copy">
                        <span class="eyebrow">Built for momentum</span>
                        <h2>From concept to campaign in one unified flow.</h2>
                        <p>
                            We combine product thinking, creative direction, and performance insight so your team
                            launches with more clarity and less friction.
                        </p>
                        <ul>
                            <li>Fast creative validation</li>
                            <li>Clear stakeholder alignment</li>
                            <li>Conversion-focused execution</li>
                        </ul>
                    </div>

                    <div class="showcase-panel">
                        <div class="timeline-item active">
                            <span class="step-number">01</span>
                            <div>
                                <strong>Discover</strong>
                                <small>Audience, positioning, and opportunity mapping.</small>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <span class="step-number">02</span>
                            <div>
                                <strong>Design</strong>
                                <small>Strategic concepts that match the brand story.</small>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <span class="step-number">03</span>
                            <div>
                                <strong>Launch</strong>
                                <small>Performance tracking and iterative optimization.</small>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="cta-banner container" id="contact">
                    <div>
                        <span class="eyebrow">Ready to move</span>
                        <h2>Make your next launch impossible to ignore.</h2>
                    </div>
                    <a class="primary-button" href="mailto:hello@ming-studio.com">hello@ming-studio.com</a>
                </section>
            </main>
        </div>
    </body>
</html>
