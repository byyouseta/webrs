<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 - Akses Ditolak</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet">

    <style>
        *{margin:0;padding:0;box-sizing:border-box}
        body{
            font-family:'Inter',sans-serif;
            background:linear-gradient(135deg,#f7fffd,#effcf9,#ffffff);
            display:flex;
            align-items:center;
            justify-content:center;
            min-height:100vh;
            color:#1f2937;
        }

        .card{
            width:90%;
            max-width:700px;
            background:#fff;
            border-radius:30px;
            padding:60px;
            text-align:center;
            box-shadow:0 25px 70px rgba(15,118,110,.12);
        }

        h1{
            font-size:90px;
            color:#0f766e;
            margin-bottom:10px;
        }

        h2{
            font-size:34px;
            margin-bottom:20px;
        }

        p{
            color:#64748b;
            line-height:1.8;
            margin-bottom:35px;
        }

        .icon{
            width:120px;
            height:120px;
            margin:auto auto 30px;
            background:#ccfbf1;
            border-radius:30px;
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .icon svg{
            width:60px;
            color:#0f766e;
        }

        .btn{
            display:inline-block;
            text-decoration:none;
            padding:14px 28px;
            border-radius:12px;
            font-weight:600;
            transition:.3s;
        }

        .primary{
            background:#0f766e;
            color:#fff;
        }

        .primary:hover{
            background:#115e59;
        }

        .secondary{
            margin-left:10px;
            background:#ecfeff;
            color:#0f766e;
        }

        .secondary:hover{
            background:#ccfbf1;
        }

        @media(max-width:768px){

            .card{
                padding:35px 25px;
            }

            h1{
                font-size:70px;
            }

            h2{
                font-size:26px;
            }

            .btn{
                display:block;
                margin:10px 0;
            }

            .secondary{
                margin-left:0;
            }

        }

    </style>

</head>

<body>

<div class="card">

    <div class="icon">

        <svg xmlns="http://www.w3.org/2000/svg"
             fill="none"
             viewBox="0 0 24 24"
             stroke="currentColor"
             stroke-width="2">

            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M12 15v2m0-8h.01M6 9V7a6 6 0 1112 0v2m-9 0h6a2 2 0 012 2v7a2 2 0 01-2 2H9a2 2 0 01-2-2v-7a2 2 0 012-2z"/>

        </svg>

    </div>

    <h1>403</h1>

    <h2>Akses Ditolak</h2>

    <p>
        Maaf, Anda tidak memiliki hak akses untuk membuka halaman ini.
        Silakan login menggunakan akun yang memiliki izin atau hubungi Administrator.
    </p>

    <a href="{{ url('/') }}" class="btn primary">
        🏠 Kembali ke Beranda
    </a>

    <a href="javascript:history.back()" class="btn secondary">
        ← Halaman Sebelumnya
    </a>

</div>

</body>
</html>
