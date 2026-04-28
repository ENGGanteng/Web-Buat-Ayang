<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buket Mawar Buat Kamu ❤️</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap');

        body {
            margin: 0; padding: 0;
            background: linear-gradient(135deg, #fff5f5 0%, #ffe0e0 100%);
            display: flex; justify-content: center; align-items: center;
            height: 100vh; overflow: hidden;
            font-family: 'Poppins', sans-serif;
        }

        .garden {
            position: relative;
            width: 100%; height: 100%;
            display: flex; justify-content: center; align-items: flex-end;
            padding-bottom: 10vh;
        }

        /* Kontainer Utama Mawar (Grow from bottom) */
        .rose-wrapper {
            position: relative;
            transform: scale(0);
            transform-origin: bottom;
            animation: growGarden 2.5s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        }

        /* --- TANGKAI UTAMA (NYATU SAMA BUNGA) --- */
        .stem-cluster {
            position: absolute; bottom: 0; left: 50%;
            transform: translateX(-50%);
            display: flex; gap: 20px; align-items: flex-end;
        }

        .stem {
            position: relative;
            width: 12px; height: 350px;
            background: linear-gradient(to bottom, #2d6a4f, #1b4332);
            border-radius: 6px 6px 0 0;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        /* Daun Estetik nempel di tangkai */
        .leaf {
            position: absolute;
            width: 55px; height: 30px;
            background: linear-gradient(135deg, #2d6a4f, #40916c);
            border-radius: 40px 0 40px 0;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .leaf-left { left: -35px; top: 150px; transform: rotate(-35deg); }
        .leaf-right { right: -35px; top: 200px; transform: rotate(205deg) scaleX(-1); }

        /* --- MAWAR RAHASIA (BUKAN BUHLE-BUHLE-AN) --- */
        /* Mawar ini nempel di ujung tangkai */
        .rose {
            position: absolute; top: -70px; left: 50%;
            transform: translateX(-50%) scale(0);
            transform-origin: bottom;
            width: 140px; height: 140px;
            animation: bloom 1.5s 2s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        }

        /* Teknik CSS Pseudo buat bikin kelopak mawar rimbun */
        .rose::before, .rose::after, .rose .inner {
            content: '';
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, #ff4d6d 0%, #c9184a 100%);
            box-shadow: 0 4px 15px rgba(199, 24, 74, 0.3);
        }

        /* Kelopak Luar */
        .rose::before {
            width: 140px; height: 140px;
            left: 0; top: 0;
            clip-path: polygon(50% 0%, 100% 38%, 82% 100%, 18% 100%, 0% 38%);
        }

        /* Kelopak Tengah */
        .rose::after {
            width: 100px; height: 100px;
            left: 20px; top: 20px;
            clip-path: polygon(50% 10%, 90% 40%, 75% 90%, 25% 90%, 10% 40%);
            background: linear-gradient(135deg, #c9184a 0%, #800e2b 100%);
            z-index: 2;
        }

        /* Inti Mawar (Warna emas gradasi) */
        .rose .inner {
            width: 50px; height: 50px;
            left: 45px; top: 45px;
            background: radial-gradient(circle, #ffb703 0%, #fb8500 100%);
            box-shadow: 0 0 15px rgba(251, 133, 0, 0.8);
            z-index: 3;
        }

        /* --- BUKET MAWAR (VARIASI POSISI) --- */
        /* Mawar Tengah (Besar) */
        .rose-center .rose { animation-delay: 2s; }

        /* Mawar Kiri (Sedikit lebih kecil) */
        .rose-left { transform: rotate(-10deg); margin-bottom: 20px; }
        .rose-left .stem { height: 300px; }
        .rose-left .rose { transform: translateX(-50%) scale(0.8); animation-delay: 2.3s; }

        /* Mawar Kanan (Sedikit lebih tinggi) */
        .rose-right { transform: rotate(10deg); margin-bottom: -20px; }
        .rose-right .stem { height: 380px; }
        .rose-right .rose { transform: translateX(-50%) scale(0.9); animation-delay: 2.6s; }


        /* Teks Pesan Estetik */
        .message-box {
            position: absolute; top: 15vh; left: 0; width: 100%;
            text-align: center;
            opacity: 0;
            animation: showText 1.5s 5s forwards;
            pointer-events: none; /* Biar gak ngeblok interaksi */
        }
        .message {
            color: #c9184a;
            font-size: 26px; font-weight: 600;
            line-height: 1.6;
            margin: 0;
            text-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .sub-message {
            font-size: 16px; font-weight: 300;
            color: #777; margin-top: 10px;
        }

        /* --- ANIMASI --- */
        @keyframes growGarden {
            to { transform: scale(1); }
        }
        @keyframes bloom {
            to { transform: translateX(-50%) scale(1); }
        }
        @keyframes showText {
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="garden">
        <div class="rose-wrapper">
            <div class="stem-cluster">
                
                <div class="stem rose-left">
                    <div class="leaf leaf-left"></div>
                    <div class="rose">
                        <div class="inner"></div>
                    </div>
                </div>

                <div class="stem rose-center">
                    <div class="leaf leaf-left"></div>
                    <div class="leaf leaf-right"></div>
                    <div class="rose">
                        <div class="inner"></div>
                    </div>
                </div>

                <div class="stem rose-right">
                    <div class="leaf leaf-right"></div>
                    <div class="rose">
                        <div class="inner"></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="message-box">
            <p class="message">Tumbuh satu buket mawar indah,<br>khusus buat kamu yang terindah. ❤️</p>
            <p class="sub-message"><i>kamila 😍</i></p>
        </div>
    </div>
</body>
</html>