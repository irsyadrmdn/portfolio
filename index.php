<?php
// Simple one-page portfolio website using PHP
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Irsyad</title>
    <style>

html {
    scroll-behavior: smooth;
}

    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: radial-gradient(circle at top, #0a0f1f, #000000 70%);
        color: #e8f7ff;
        overflow-x: hidden;
    }

    nav {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 12px;
        align-items: center;
        padding: 15px 20px;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
        backdrop-filter: blur(10px);
        background: rgba(0, 0, 0, 0.45);
        border-bottom: 1px solid rgba(0, 200, 255, 0.35);
        box-shadow: 0 0 20px rgba(0, 200, 255, 0.2);
    }

    nav a {
        color: #ffffff;
        margin: 0 15px;
        text-decoration: none;
        font-weight: 600;
        transition: 0.3s ease;
    }

    nav a:hover {
        color: #ffffff;
        text-shadow: 0 0 10px #ffffff;
    }

    /* Futuristic scanline glow */
    .hero {
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 0 20px;
        position: relative;
    }

    .hero::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: repeating-linear-gradient(
            to bottom,
            rgba(255,255,255,0.03) 0px,
            rgba(255,255,255,0.03) 2px,
            transparent 3px,
            transparent 6px
        );
        pointer-events: none;
    }

    h1 {
        font-size: 90px;
        font-weight: 900;
        margin-top: 120px;
        color: #ffffff;
        text-shadow: 0 0 20px #ffffff;
    }

    h2 {
        font-size: 32px;
        color: #ffffff;
        border-left: 5px solid #ffffff;
        padding-left: 12px;
        margin-bottom: 25px;
        text-shadow: 0 0 10px rgba(255,255,255,0.4);
    }

    section {
        padding: 100px 12%;
    }

    .about-box img {
        border: 3px solid #ffffff;
        box-shadow: 0 0 25px rgba(255,255,255,0.7), 0 0 50px rgba(255,255,255,0.3);
        transition: 0.4s ease;
    }

    .about-box img:hover {
        transform: scale(1.03);
        box-shadow: 0 0 35px rgba(255,255,255,1);
    }


        /* Responsive Fix for Home Section */
        @media (max-width: 900px) {
            #home .home-container {
                flex-direction: column !important;
                height: auto !important;
            }
            #home .home-left img {
                height: 60vh !important;
            }
            #home .home-right {
                padding: 40px 25px !important;
                text-align: center;
            }
            #home h1 { font-size: 48px !important; }
            #home h2 { font-size: 32px !important; }
            #home p { max-width: 100% !important; }
        }

        @media (max-width: 500px) {
            #home h1 { font-size: 38px !important; }
            #home h2 { font-size: 26px !important; }
            #home .home-left img { height: 45vh !important; }
        }

    
    /* Navbar Responsive Fix */
    @media (max-width: 850px) {
        nav {
            justify-content: center;
            flex-wrap: wrap;
            padding: 12px 20px;
            gap: 10px;
        }
        nav a {
            margin: 5px 8px;
            font-size: 14px;
        }
    }

    @media (max-width: 480px) {
        nav a {
            font-size: 12px;
            margin: 4px;
        }
    }

    /* Fade-in animation */
section {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 1s ease, transform 1s ease;
}

/* Section aktif yang terlihat */
section.show {
    opacity: 1;
    transform: translateY(0);
}


</style>
</head>
<body>

<header>
    <nav>
    <nav>
    <a href="#home">Home</a>
    <a href="#about">About Me</a>
    <a href="#skills">Skills</a>   
    <a href="#experience">Experience</a>
    <a href="#certificate">Certificate</a>
    <a href="#education">Education</a>
    <a href="#projects">Projects</a>
    <a href="#contact">Contact</a>
</nav>

    </nav>
</header>

<section id="home" style="padding:0; margin:0; position:relative; overflow:hidden; height:100vh; display:flex; align-items:center;">

    <style>
        /* Fade-in & slide animations */
        @keyframes fadeSlideUp {
            0% {opacity:0; transform:translateY(40px);} 
            100% {opacity:1; transform:translateY(0);} 
        }
        @keyframes fadeSlideRight {
            0% {opacity:0; transform:translateX(-60px);} 
            100% {opacity:1; transform:translateX(0);} 
        }

        /* Hover button smooth */
        .cta-home:hover {
            background:#ffffff !important;
            color:#000 !important;
            transform:translateY(-3px);
            box-shadow:0 8px 18px rgba(255,255,255,0.4);
        }

        /* Decorative glowing line */
        .glow-line {
            width:120px;
            height:4px;
            background:#ffffff;
            border-radius:4px;
            margin:22px 0;
            box-shadow:0 0 20px rgba(255,255,255,0.7);
            animation:fadeSlideRight 1.2s ease forwards;
        }

        /* Mobile responsive */
        @media(max-width:850px){
            #home-flex {flex-direction:column; height:auto;}
            #home-photo {height:45vh !important;}
            #home-text {padding:35px 25px !important; height:auto !important; text-align:center;}
            .glow-line {margin:18px auto;}
        }
    </style>

    <div id="home-flex" style="display:flex; width:100%; height:100%;">

        <!-- LEFT PHOTO -->
        <div id="home-photo" style="flex:1; height:100%; position:relative;">
            <img src="image/image1.jpeg" alt="My Photo" 
                 style="width:100%; height:100%; object-fit:cover; filter:grayscale(100%); opacity:0; animation:fadeSlideUp 1.2s ease forwards;">
        </div>

        <!-- RIGHT TEXT CONTENT -->
        <div id="home-text" 
     style="
        flex:1; 
        background:#0f0f0f; 
        padding:70px; 
        display:flex; 
        flex-direction:column; 
        justify-content:flex-start; 
        padding-top:120px; 
        height:100%; 
        animation:fadeSlideRight 1.4s ease forwards; 
        opacity:0;">

            <h1 style="font-size:70px; font-weight:900; margin:0; line-height:1;">Portfolio</h1>

            <div class="glow-line"></div>

            <h2 style="font-size:45px; font-weight:800; margin:0 0 30px 0; line-height:1.2;">Irsyad <br> Romadoni Rais</h2>

            <p style="max-width:520px; font-size:17px; line-height:1.7; color:#ffffff; opacity:0.9; margin:0 0 30px 0;">
                Hi! I'm a passionate IT enthusiast ready to grow and contribute through technology
            </p>

            <a href="#about" class="cta-home"
               style="padding:12px 28px; background:#ffffff; color:#000000; font-weight:bold; border-radius:4px;
                      text-decoration:none; display:inline-block; transition:0.3s ease; width:max-content;">
                Explore Now
            </a>
        </div>
    </div>
</section>

<section id="about">
    <h2>About Me</h2>

    <div class="about-box" 
         style="display:flex; 
                gap:40px; 
                align-items:center; 
                justify-content:space-between;
                flex-wrap:wrap;">

        <!-- LEFT TEXT -->
        <div style="flex:1; min-width:260px;">
            <p style="font-size:16px; line-height:1.7; color:#e8f7ff;">
            Saya adalah fresh graduate Manajemen Informatika asal Padang dengan IPK 3.35 yang memiliki semangat tinggi untuk mengembangkan karier di bidang IT. Selama masa studi, saya terbiasa bekerja secara individu maupun dalam tim serta aktif dalam organisasi kampus yang membantu membentuk kemampuan kepemimpinan, komunikasi, dan manajemen waktu yang baik.
Saya memiliki minat pada bidang IT Support, Web Developer, Data Entry, serta Administrasi/Perkantoran, dan tetap terbuka terhadap peluang karier lainnya. Dengan komitmen untuk memberikan kontribusi positif bagi perusahaan serta keinginan kuat untuk terus belajar, saya siap beradaptasi dan berkembang dalam lingkungan kerja profesional.
            </p>
        </div>

        <!-- RIGHT IMAGE -->
        <img src="image/image2.jpeg" alt="My Photo"
             style="
                width:280px;
                height:280px;
                object-fit:cover;
                border-radius:14px;
                border:3px solid #00eaff;
                box-shadow:0 0 25px rgba(0,255,255,0.4);
                flex-shrink:0;
             ">
    </div>
</section>

<section id="skills">
    <h2>Skills</h2>

    <style>
        /* ===== FUTURISTIC ELEGANT SKILLS THEME ===== */

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 32px;
            margin-top: 40px;
        }

        .skill-card {
            position: relative;
            padding: 28px 22px;
            background: rgba(15, 20, 35, 0.55);
            border-radius: 18px;
            border: 1px solid rgba(0, 200, 255, 0.18);
            backdrop-filter: blur(15px);
            display: flex;
            align-items: flex-start;
            gap: 14px;
            transition: 0.45s ease;
            cursor: default;
            overflow: hidden;

            /* Outer glow */
            box-shadow: 
                0 0 12px rgba(0, 217, 255, 0.08),
                inset 0 0 12px rgba(255,255,255,0.03);
        }

        /* Futuristic hologram border */
        .skill-card::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 18px;
            background: linear-gradient(
                130deg,
                rgba(0, 225, 255, 0.8),
                rgba(120, 0, 255, 0.8),
                rgba(255, 0, 200, 0.8)
            );
            opacity: 0;
            filter: blur(10px);
            transition: 0.45s ease;
            z-index: -1;
        }

        /* Hover effects */
        .skill-card:hover {
            transform: translateY(-8px);
            box-shadow:
                0 0 30px rgba(0, 217, 255, 0.3),
                inset 0 0 18px rgba(255,255,255,0.04);
        }

        .skill-card:hover::before {
            opacity: 0.55;
        }

        /* Icon style - futuristic glow */
        .skill-icon {
            font-size: 28px;
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            background: rgba(255,255,255,0.07);
            box-shadow:
                0 0 12px rgba(0, 217, 255, 0.4),
                inset 0 0 6px rgba(255,255,255,0.08);
            backdrop-filter: blur(4px);
        }

        /* Skill text */
        .skill-text {
            font-size: 16px;
            line-height: 1.45;
            color: #e9f8ff;
            letter-spacing: 0.3px;
        }
    </style>

    <div class="skills-grid">

        <!-- ORIGINAL SKILLS (Improved style) -->
        <div class="skill-card">
            <span class="skill-icon">🛠️</span>
            <div class="skill-text">IT Support (Troubleshooting & Maintenance)</div>
        </div>

        <div class="skill-card">
            <span class="skill-icon">🌐</span>
            <div class="skill-text">Web Development (HTML, CSS, PHP, MySQL)</div>
        </div>

        <div class="skill-card">
            <span class="skill-icon">📊</span>
            <div class="skill-text">Microsoft Office (Word, Excel, PowerPoint)</div>
        </div>

        <div class="skill-card">
            <span class="skill-icon">📄</span>
            <div class="skill-text">Data Entry & Documentation</div>
        </div>

        <!-- NEW FUTURISTIC SKILLS -->
        <div class="skill-card">
            <span class="skill-icon">🎨</span>
            <div class="skill-text">UI/UX Design</div>
        </div>

        <div class="skill-card">
            <span class="skill-icon">🖼️</span>
            <div class="skill-text">Graphic Design</div>
        </div>

        <div class="skill-card">
            <span class="skill-icon">💻</span>
            <div class="skill-text">System Administration</div>
        </div>

        <div class="skill-card">
            <span class="skill-icon">📣</span>
            <div class="skill-text">Digital Marketing</div>
        </div>

        <div class="skill-card">
            <span class="skill-icon">🖥️</span>
            <div class="skill-text">Web Design</div>
        </div>

        <div class="skill-card">
            <span class="skill-icon">📈</span>
            <div class="skill-text">Sales Marketing</div>
        </div>

    </div>
</section>




<section id="experience">
    <h2>Experience</h2>

    <style>
        .exp-card {
            background: rgba(15, 20, 35, 0.55);
            padding: 30px;
            border-radius: 16px;
            border: 1px solid rgba(0, 200, 255, 0.25);
            backdrop-filter: blur(12px);
            box-shadow: 0 0 18px rgba(0, 200, 255, 0.18);
            margin-top: 35px;
            transition: 0.45s ease;
        }
        .exp-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 0 28px rgba(0, 200, 255, 0.32);
        }
        .exp-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #ffffff;
        }
        .exp-sub {
            font-size: 16px;
            opacity: 0.8;
            margin-bottom: 18px;
        }
        .exp-list li {
            margin-bottom: 10px;
            line-height: 1.6;
            color: #e6f7ff;
        }
    </style>

    <div class="exp-card">
        <div class="exp-title">Web Developer Intern</div>
        <div class="exp-sub">Dimension Photography Studio — April 2025 × Juli 2025</div>

        <ul class="exp-list">
            <li>Merancang dan membangun <b>Sistem Inventaris Aset Berbasis Web</b> untuk Studio Dimension Photography menggunakan <b>PHP</b> dan <b>MySQL</b>.</li>
            <li>Membuat fitur pengelolaan data aset seperti barang masuk, barang keluar, status aset, lokasi penyimpanan, serta laporan aset.</li>
            <li>Membuat antarmuka sistem yang responsif dan mudah digunakan untuk memudahkan staf studio dalam melakukan pencatatan aset.</li>
            <li>Melakukan pengujian aplikasi, debugging, dan optimalisasi performa agar sistem berjalan lebih stabil dan efisien.</li>
            <li>Berkoordinasi dengan tim Studio Dimension Photography untuk memastikan sistem sesuai kebutuhan operasional harian.</li>
        </ul>
    </div>

</section>


<section id="certificate">
    <h2>Certificate</h2>

    <style>
        .cert-container {
            max-width: 750px;
            margin: 0 auto;
        }

        .cert-card {
            background: rgba(15, 20, 35, 0.55);
            padding: 30px;
            border-radius: 18px;
            border: 1px solid rgba(0, 200, 255, 0.28);
            backdrop-filter: blur(14px);
            text-align: center;
            transition: 0.45s ease;
            box-shadow: 0 0 20px rgba(0, 200, 255, 0.22);
        }

        .cert-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 0 30px rgba(0, 200, 255, 0.35);
        }

        .cert-title {
            font-size: 22px;
            font-weight: 800;
            margin-bottom: 12px;
            color: #ffffff;
            text-shadow: 0 0 10px rgba(255,255,255,0.4);
        }

        .cert-desc {
            font-size: 16px;
            line-height: 1.65;
            opacity: 0.88;
            margin-bottom: 25px;
            color: #e8f7ff;
        }

        .cert-img {
            width: 100%;
            max-height: 430px;
            object-fit: cover;
            border-radius: 12px;
            border: 3px solid rgba(255,255,255,0.75);
            box-shadow: 0 0 25px rgba(255,255,255,0.45);
            transition: 0.35s ease;
        }

        .cert-img:hover {
            transform: scale(1.03);
            box-shadow: 0 0 35px rgba(255,255,255,0.75);
        }
    </style>

    <div class="cert-container">
        <div class="cert-card">

            <div class="cert-title">
                Dasar Microsoft Excel Administrasi Perkantoran
            </div>

            <div class="cert-desc">
                Sertifikat pelatihan resmi dari <b>Yureka Education Center (YEC)</b> yang terhubung langsung dengan 
                <b>Kementerian Ketenagakerjaan (Kemnaker)</b>. Pelatihan berlangsung selama <b>9 jam</b> yang 
                berfokus pada kemampuan dasar Microsoft Excel untuk kebutuhan administrasi perkantoran modern, 
                pengolahan data, pembuatan laporan, merapikan data, efisiensi kerja serta rumus Excel.
            </div>

            <img src="image/Irsyad Romadoni Rais - Dasar Microsoft Excel Administrasi Perkantoran_page-0001.jpg"
                 alt="Sertifikat YEC"
                 class="cert-img">

        </div>
    </div>

</section>



<section id="education">
    <h2>Education</h2>

    <style>
        .edu-card {
            max-width: 800px;
            margin: 0 auto;
            padding: 30px;
            background: rgba(15, 20, 35, 0.55);
            border-radius: 18px;
            border: 1px solid rgba(0, 200, 255, 0.28);
            box-shadow: 0 0 20px rgba(0, 200, 255, 0.22);
            backdrop-filter: blur(14px);
            transition: 0.45s ease;
        }

        .edu-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 0 35px rgba(0, 200, 255, 0.35);
        }

        .edu-title {
            font-size: 24px;
            font-weight: 800;
            margin-bottom: 10px;
            color: #ffffff;
            text-shadow: 0 0 10px rgba(255,255,255,0.4);
        }

        .edu-sub {
            font-size: 18px;
            opacity: 0.9;
            margin-bottom: 8px;
            color: #dff7ff;
        }

        .edu-gpa {
            font-size: 17px;
            margin-top: 10px;
            font-weight: 600;
            color: #9beaff;
        }
    </style>

    <div class="edu-card">
        <div class="edu-title">Diploma III – Ahli Madya Manajemen Informatika</div>
        <div class="edu-sub">Universitas Putra Indonesia "YPTK" Padang</div>
        <div class="edu-gpa">IPK: 3.35</div>
    </div>
</section>


<section id="projects">
    <h2>Projects</h2>

    <style>
        .project-wrapper {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(290px, 1fr));
            gap: 35px;
            margin-top: 40px;
        }

        .project-card {
            background: rgba(15, 20, 35, 0.55);
            padding: 22px;
            border-radius: 18px;
            border: 1px solid rgba(0, 200, 255, 0.25);
            backdrop-filter: blur(12px);
            transition: 0.45s ease;
            box-shadow: 0 0 20px rgba(0, 200, 255, 0.18);
        }

        .project-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 0 28px rgba(0, 200, 255, 0.32);
        }

        .project-img {
            width: 100%;
            height: 190px;
            object-fit: cover;
            border-radius: 12px;
            border: 2px solid rgba(255,255,255,0.75);
            box-shadow: 0 0 18px rgba(255,255,255,0.4);
            margin-bottom: 18px;
            transition: 0.35s ease;
        }

        .project-img:hover {
            transform: scale(1.03);
            box-shadow: 0 0 28px rgba(255,255,255,0.75);
        }

        .project-title {
            font-size: 20px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 10px;
        }

        .project-desc {
            font-size: 15px;
            line-height: 1.6;
            color: #dff7ff;
            opacity: 0.9;
        }
    </style>

    <div class="project-wrapper">

        <!-- FOTO 1 LOGIN -->
        <div class="project-card">
            <img src="image/login.png" alt="Login Page" class="project-img">
            <div class="project-title">Tampilan Login Sistem</div>
            <div class="project-desc">
                Halaman login sistem inventaris aset berbasis web dengan autentikasi pengguna untuk menjaga keamanan data. Dibuat menggunakan PHP Native dan validasi server-side.
            </div>
        </div>

        <!-- FOTO 2 DASHBOARD -->
        <div class="project-card">
            <img src="image/dashboard.png" alt="Dashboard" class="project-img">
            <div class="project-title">Dashboard Sistem Inventaris</div>
            <div class="project-desc">
                Dashboard utama menampilkan ringkasan data aset, jumlah barang masuk/keluar, status stok barang, dan tampilan sederhana untuk memudahkan monitoring oleh admin.
            </div>
        </div>

        <!-- FOTO 3 FORM DATA BARANG -->
        <div class="project-card">
            <img src="image/formbarang.png" alt="Form Data Barang" class="project-img">
            <div class="project-title">Form Input Data Barang</div>
            <div class="project-desc">
                Form input untuk menambahkan data aset baru seperti nama barang, jenis barang, stok barang, serta satuan barang dan keterangan lengkap lainnya.
            </div>
        </div>

    </div>

</section>



<section id="contact" style="padding: 100px 12%;">

    <h2>Contact Information</h2>

    <style>
        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(330px, 1fr));
            gap: 35px;
            margin-top: 40px;
        }

        .contact-card {
            background: rgba(15, 20, 35, 0.55);
            padding: 25px;
            border-radius: 16px;
            border: 1px solid rgba(0, 200, 255, 0.25);
            backdrop-filter: blur(14px);
            color: #e8f7ff;
            box-shadow: 0 0 18px rgba(0, 200, 255, 0.20);
            transition: 0.45s ease;
        }

        .contact-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 0 28px rgba(0, 200, 255, 0.35);
        }

        .contact-item {
            display: flex;
            align-items: center;
            background: rgba(255,255,255,0.05);
            border-radius: 12px;
            padding: 14px 18px;
            margin-bottom: 16px;
            border-left: 4px solid #00d9ff;
            gap: 15px;
        }

        .contact-icon {
            font-size: 24px;
        }

        .contact-text {
            line-height: 1.5;
            font-size: 15px;
        }

        /* Social Media */
        .social-links {
            margin-top: 30px;
            display: flex;
            gap: 18px;
        }

        .social-btn {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255,255,255,0.08);
            border-radius: 50%;
            font-size: 20px;
            transition: 0.35s;
            text-decoration: none;
            color: #ffffff;
            border: 1px solid rgba(255,255,255,0.25);
        }

        .social-btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 0 14px rgba(255,255,255,0.6);
            background: rgba(255,255,255,0.25);
        }

        footer {
            text-align: center;
            padding: 25px 10px;
            margin-top: 60px;
            background: rgba(0,0,0,0.45);
            backdrop-filter: blur(8px);
            border-top: 1px solid rgba(0, 200, 255, 0.25);
            color: #d9faff;
            font-size: 14px;
        }

        .contact-buttons {
    display: flex;
    gap: 15px;
    margin-top: 20px;
}

.contact-btn {
    padding: 10px 18px;
    border-radius: 12px;
    font-size: 14px;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
    color: #fff;
}

.contact-btn.email { background: #0066ff; }
.contact-btn.whatsapp { background: #25D366; }
.contact-btn.website { background: #8a2be2; }

.contact-btn:hover {
    opacity: 0.85;
    transform: translateY(-2px);
}

.icon-img {
    width: 22px;
    height: 22px;
    object-fit: contain;
}



    </style>

<section id="contact" style="padding: 100px 12%;">    

    <!-- Tombol Kontak -->
    <div class="contact-buttons">

        <!-- Email -->
        <a href="mailto:youremail@example.com" class="contact-btn email">
            <img class="icon-img" src="https://cdn-icons-png.flaticon.com/512/732/732200.png">  
            Email
        </a>

        <!-- WhatsApp -->
        <a href="https://wa.me/6285363711457" target="_blank" class="contact-btn whatsapp">
            <img class="icon-img" src="https://cdn-icons-png.flaticon.com/512/733/733585.png">
            WhatsApp
        </a>

        <!-- Website -->
        <a href="https://yourwebsite.com" target="_blank" class="contact-btn website">
            <img class="icon-img" src="https://cdn-icons-png.flaticon.com/512/841/841364.png">
            Website
        </a>

    </div>


    <!-- GRID MAIN CONTAINER -->
    <div class="contact-container">

        <!-- CONTACT CARD LEFT -->
        <div class="contact-card">

            <div class="contact-item">
                <img class="icon-img" src="https://cdn-icons-png.flaticon.com/512/854/854878.png">
                <div class="contact-text">
                    <b>Location</b><br>
                    Padang, West Sumatra
                </div>
            </div>

            <div class="contact-item">
                <img class="icon-img" src="https://cdn-icons-png.flaticon.com/512/732/732200.png">
                <div class="contact-text">
                    <b>Email</b><br>
                    irsyadromadonirais@gmail.com
                </div>
            </div>

            <div class="contact-item">
                <img class="icon-img" src="https://cdn-icons-png.flaticon.com/512/733/733585.png">
                <div class="contact-text">
                    <b>WhatsApp</b><br>
                    +62-853-6371-1457
                </div>
            </div>

            <div class="contact-item">
                <img class="icon-img" src="https://cdn-icons-png.flaticon.com/512/841/841364.png">
                <div class="contact-text">
                    <b>Website</b><br>
                    https://irsyadrmdn.github.io/
                </div>
            </div>

            <!-- SOCIAL ICONS -->
            <div class="social-links">

                <a class="social-btn" href="https://www.linkedin.com/in/irsyadromadonirais/" target="_blank">
                    <img class="icon-img" src="https://cdn-icons-png.flaticon.com/512/3536/3536505.png">
                </a>

                <a class="social-btn" href="https://www.instagram.com/irsyad.rmdn/" target="_blank">
                    <img class="icon-img" src="https://cdn-icons-png.flaticon.com/512/1409/1409946.png">
                </a>

                <a class="social-btn" href="https://github.com/irsyadrmdn" target="_blank">
                    <img class="icon-img" src="https://cdn-icons-png.flaticon.com/512/270/270798.png">
                </a>

            </div>

        </div>
        <!-- END CONTACT CARD LEFT -->


        <!-- CONTACT FORM RIGHT -->
        <div class="contact-card">

            <h3 style="margin-top:0; margin-bottom:18px; color:#ffffff;">Send Me a Message</h3>

            <form>
                <input type="text" placeholder="Your Name" 
                    style="width:100%; padding:12px; margin-bottom:15px; border-radius:8px; border:none;">

                <input type="email" placeholder="Your Email"
                    style="width:100%; padding:12px; margin-bottom:15px; border-radius:8px; border:none;">

                <input type="text" placeholder="Subject"
                    style="width:100%; padding:12px; margin-bottom:15px; border-radius:8px; border:none;">

                <textarea placeholder="Your Message"
                    style="width:100%; height:140px; padding:12px; border-radius:8px; border:none; resize:none;"></textarea>

                <button type="submit"
                    style="margin-top:18px; width:100%; padding:12px; background:linear-gradient(90deg,#00d9ff,#ff00d4);
                    border:none; border-radius:8px; color:white; font-size:16px; font-weight:bold; cursor:pointer;">
                    Send Message
                </button>
            </form>

        </div>
        <!-- END CONTACT FORM RIGHT -->

    </div>
    <!-- END GRID -->

</section>

<style>
footer {
    margin: 0 !important;
    padding: 20px 10px;
}

html, body {
    margin: 0;
    padding: 0;
    height: 100%;
}

section:last-of-type {
    margin-bottom: 0 !important;
    padding-bottom: 0 !important;
}
</style>

<footer>
    © 2025 Irsyad Romadoni Rais. All rights reserved.
</footer>

<script>
    const sections = document.querySelectorAll("section");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    }, { threshold: 0.2 });

    sections.forEach(section => observer.observe(section));
</script>

</body>
</html>
