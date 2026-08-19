<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>404 - Halaman Tidak Ditemukan</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Inter', sans-serif;
            color: #1f2937;
            background:
                radial-gradient(circle at 15% 20%, rgba(20, 184, 166, 0.16), transparent 32%),
                radial-gradient(circle at 85% 80%, rgba(6, 182, 212, 0.14), transparent 30%),
                linear-gradient(135deg, #f7fffd 0%, #effcf9 45%, #ffffff 100%);
            overflow-x: hidden;
        }

        .page {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
            overflow: hidden;
        }

        .glow {
            position: absolute;
            border-radius: 999px;
            filter: blur(10px);
            opacity: 0.45;
            animation: float 8s ease-in-out infinite;
        }

        .glow-one {
            width: 220px;
            height: 220px;
            top: -60px;
            left: -60px;
            background: rgba(45, 212, 191, 0.35);
        }

        .glow-two {
            width: 280px;
            height: 280px;
            right: -90px;
            bottom: -90px;
            background: rgba(34, 211, 238, 0.28);
            animation-delay: 1.5s;
        }

        .card {
            position: relative;
            width: 100%;
            max-width: 920px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 32px;
            align-items: center;
            padding: 48px;
            border-radius: 32px;
            background: rgba(255, 255, 255, 0.82);
            border: 1px solid rgba(255, 255, 255, 0.9);
            box-shadow:
                0 30px 80px rgba(15, 118, 110, 0.12),
                inset 0 1px 0 rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            animation: cardIn 0.8s ease-out both;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 14px;
            border-radius: 999px;
            color: #0f766e;
            background: #ccfbf1;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase;
        }

        .badge-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #14b8a6;
            box-shadow: 0 0 0 6px rgba(20, 184, 166, 0.12);
        }

        h1 {
            margin: 20px 0 12px;
            font-size: clamp(52px, 10vw, 110px);
            line-height: 0.9;
            letter-spacing: -0.08em;
            color: #0f766e;
        }

        h2 {
            margin: 0;
            font-size: clamp(26px, 4vw, 42px);
            line-height: 1.15;
            letter-spacing: -0.04em;
        }

        p {
            margin: 18px 0 0;
            max-width: 520px;
            color: #64748b;
            font-size: 16px;
            line-height: 1.8;
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 28px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            min-height: 48px;
            padding: 0 20px;
            border-radius: 14px;
            border: 1px solid transparent;
            text-decoration: none;
            font-weight: 700;
            transition: 0.3s ease;
            cursor: pointer;
        }

        .btn-primary {
            color: white;
            background: linear-gradient(135deg, #14b8a6, #0f766e);
            box-shadow: 0 14px 30px rgba(15, 118, 110, 0.24);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 18px 38px rgba(15, 118, 110, 0.32);
        }

        .btn-secondary {
            color: #0f766e;
            background: rgba(240, 253, 250, 0.9);
            border-color: #99f6e4;
        }

        .btn-secondary:hover {
            transform: translateY(-3px);
            background: #ccfbf1;
        }

        .illustration {
            position: relative;
            min-height: 340px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .circle {
            position: absolute;
            width: 290px;
            height: 290px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(20, 184, 166, 0.12), rgba(6, 182, 212, 0.18));
            animation: pulse 4s ease-in-out infinite;
        }

        .browser {
            position: relative;
            width: 290px;
            padding: 18px;
            border-radius: 24px;
            background: rgba(255, 255, 255, 0.92);
            box-shadow: 0 25px 60px rgba(15, 118, 110, 0.16);
            transform: rotate(-3deg);
            animation: browserFloat 5s ease-in-out infinite;
        }

        .browser-head {
            display: flex;
            gap: 7px;
            padding-bottom: 14px;
            border-bottom: 1px solid #e2e8f0;
        }

        .browser-head span {
            width: 9px;
            height: 9px;
            border-radius: 50%;
        }

        .browser-head span:nth-child(1) {
            background: #fb7185;
        }

        .browser-head span:nth-child(2) {
            background: #facc15;
        }

        .browser-head span:nth-child(3) {
            background: #34d399;
        }

        .browser-body {
            padding: 28px 12px 12px;
            text-align: center;
        }

        .icon {
            width: 78px;
            height: 78px;
            margin: 0 auto 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 22px;
            background: linear-gradient(135deg, #ccfbf1, #cffafe);
            color: #0f766e;
        }

        .icon svg {
            width: 42px;
            height: 42px;
        }

        .line {
            height: 10px;
            margin: 10px auto;
            border-radius: 999px;
            background: #e2e8f0;
        }

        .line-one {
            width: 72%;
        }

        .line-two {
            width: 52%;
        }

        .mini-card {
            position: absolute;
            padding: 12px 16px;
            border-radius: 16px;
            color: #0f766e;
            background: rgba(255, 255, 255, 0.88);
            box-shadow: 0 16px 35px rgba(15, 118, 110, 0.12);
            font-weight: 700;
            font-size: 13px;
            backdrop-filter: blur(12px);
        }

        .mini-one {
            top: 34px;
            right: 8px;
            animation: float 6s ease-in-out infinite;
        }

        .mini-two {
            left: 0;
            bottom: 52px;
            animation: float 7s ease-in-out infinite reverse;
        }

        .footer-note {
            margin-top: 24px;
            color: #94a3b8;
            font-size: 13px;
        }

        @keyframes cardIn {
            from {
                opacity: 0;
                transform: translateY(24px) scale(0.98);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-16px);
            }
        }

        @keyframes browserFloat {
            0%, 100% {
                transform: rotate(-3deg) translateY(0);
            }

            50% {
                transform: rotate(2deg) translateY(-12px);
            }
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
                opacity: 0.8;
            }

            50% {
                transform: scale(1.08);
                opacity: 1;
            }
        }

        @media (max-width: 760px) {
            .page {
                padding: 20px 14px;
            }

            .card {
                grid-template-columns: 1fr;
                padding: 30px 22px;
                border-radius: 24px;
            }

            .illustration {
                min-height: 280px;
                order: -1;
            }

            .circle {
                width: 230px;
                height: 230px;
            }

            .browser {
                width: 240px;
            }

            .actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }

            .mini-one {
                right: 0;
            }

            .mini-two {
                left: 0;
                bottom: 20px;
            }
        }
    </style>
</head>

<body>
    <main class="page">
        <div class="glow glow-one"></div>
        <div class="glow glow-two"></div>

        <section class="card">
            <div class="content">
                <div class="badge">
                    <span class="badge-dot"></span>
                    Error 404
                </div>

                <h1>404</h1>

                <h2>Halaman yang kamu cari tidak ditemukan.</h2>

                <p>
                    URL mungkin salah, halaman telah dipindahkan, atau konten sudah tidak tersedia.
                    Silakan kembali ke halaman utama atau menuju halaman sebelumnya.
                </p>

                <div class="actions">
                    <a href="{{ url('/') }}" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             width="20"
                             height="20"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2"
                             stroke-linecap="round"
                             stroke-linejoin="round">
                            <path d="m3 11 9-9 9 9"></path>
                            <path d="M5 10v10h14V10"></path>
                            <path d="M9 20v-6h6v6"></path>
                        </svg>

                        Kembali ke beranda
                    </a>

                    <button type="button"
                            class="btn btn-secondary"
                            onclick="history.back()">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             width="20"
                             height="20"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2"
                             stroke-linecap="round"
                             stroke-linejoin="round">
                            <path d="m15 18-6-6 6-6"></path>
                        </svg>

                        Halaman sebelumnya
                    </button>
                </div>

                <div class="footer-note">
                    {{ config('app.name', 'Website') }} • {{ now()->year }}
                </div>
            </div>

            <div class="illustration">
                <div class="circle"></div>

                <div class="browser">
                    <div class="browser-head">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <div class="browser-body">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="1.8"
                                 stroke-linecap="round"
                                 stroke-linejoin="round">
                                <circle cx="12" cy="12" r="9"></circle>
                                <path d="M9 9h.01"></path>
                                <path d="M15 9h.01"></path>
                                <path d="M8 16c1-1.5 2.3-2 4-2s3 .5 4 2"></path>
                            </svg>
                        </div>

                        <strong>Page not found</strong>

                        <div class="line line-one"></div>
                        <div class="line line-two"></div>
                    </div>
                </div>

                <div class="mini-card mini-one">
                    URL tidak tersedia
                </div>

                <div class="mini-card mini-two">
                    Silakan kembali
                </div>
            </div>
        </section>
    </main>
</body>
</html>
