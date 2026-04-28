<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spesial Buat Kamu ❤️</title>
    <style>
        body {
            margin: 0; padding: 0;
            font-family: 'Poppins', sans-serif;
            background: #fff5f5;
            display: flex; justify-content: center; align-items: center; height: 100vh;
            color: #444;
        }
        .container {
            text-align: center;
            background: white;
            padding: 40px;
            border-radius: 30px;
            box-shadow: 0 15px 35px rgba(255, 182, 193, 0.4);
            max-width: 400px;
        }
        .heart {
            font-size: 60px;
            color: #ff4d6d;
            animation: beat 1s infinite;
        }
        @keyframes beat {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
        h1 { color: #ff4d6d; margin-bottom: 10px; }
        p { line-height: 1.6; font-size: 1.1em; }
        
        /* Tombol Kejutan */
        .btn-kejutan {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background: #ff4d6d;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
            transition: 0.3s;
            box-shadow: 0 4px 15px rgba(255, 77, 109, 0.3);
        }
        .btn-kejutan:hover {
            background: #c9184a;
            transform: translateY(-3px);
        }
        .footer { margin-top: 20px; font-size: 0.8em; color: #aaa; }
    </style>
</head>
<body>
    <div class="container">
        <div class="heart">❤️</div>
        <h1>Halo Cantik!</h1>
        <p>Web ini dibuat khusus buat kamu sebagai bukti kalau aku Sayang kamu (dan demi kamu, apa sih yang enggak? 😜).</p>
        
        <a href="/kejutan" class="btn-kejutan">Klik Dong Sayang ✨</a>
        
        <p style="margin-top:20px;"><i>"Enjoy your life, and stay with me."</i></p>
        <div class="footer">LOVE YOU SAYANGKU</div>
    </div>
</body>
</html>