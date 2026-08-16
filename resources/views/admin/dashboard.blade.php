<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin - PGASCOM</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f5f7fb;
            color: #17233c;
        }

        .dashboard {
            display: flex;
            min-height: 100vh;
        }

        /* ==========================
           SIDEBAR
        ========================== */

        .sidebar {
            width: 250px;
            background: #0c1b35;
            color: white;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            display: flex;
            flex-direction: column;
        }

        .logo {
            padding: 25px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }

        .logo img {
            width: 175px;
            height: auto;
        }

        .sidebar-menu {
            padding: 20px 12px;
            flex: 1;
        }

        .menu-title {
            font-size: 11px;
            color: #8290a8;
            margin: 10px 12px;
            text-transform: uppercase;
        }

        .menu-item {
            display: flex;
            align-items: center;
            gap: 12px;

            padding: 12px 14px;

            color: #aeb9cc;
            text-decoration: none;

            border-radius: 7px;

            font-size: 14px;

            margin-bottom: 5px;

            transition: 0.2s;
        }

        .menu-item:hover {
            background: #172b4d;
            color: white;
        }

        .menu-item.active {
            background: #1c3155;
            color: white;
        }

        .menu-icon {
            width: 18px;
            text-align: center;
        }

        .admin-profile {
            padding: 18px;
            border-top: 1px solid rgba(255,255,255,0.08);

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .admin-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .admin-avatar {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: #2874dc;

            display: flex;
            justify-content: center;
            align-items: center;

            font-size: 13px;
            font-weight: bold;
        }

        .admin-name {
            font-size: 12px;
            color: white;
        }

        .admin-role {
            font-size: 10px;
            color: #8c9bb3;
            margin-top: 3px;
        }

        .logout {
            color: #aeb9cc;
            text-decoration: none;
            font-size: 17px;
        }


        /* ==========================
           MAIN
        ========================== */

        .main {
            margin-left: 250px;
            width: calc(100% - 250px);
            min-height: 100vh;
        }

        .content {
            padding: 30px;
        }


        /* ==========================
           HEADER
        ========================== */

        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;

            margin-bottom: 25px;
        }

        .header h1 {
            font-size: 23px;
            margin-bottom: 6px;
        }

        .header p {
            color: #8792a6;
            font-size: 12px;
        }

        .date {
            background: white;
            border: 1px solid #e3e7ef;
            padding: 10px 14px;
            border-radius: 7px;

            font-size: 12px;
            color: #34435c;
        }


        /* ==========================
           STAT CARDS
        ========================== */

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;

            margin-bottom: 20px;
        }

        .stat-card {
            background: white;
            border: 1px solid #e6eaf1;
            border-radius: 9px;

            padding: 18px;

            box-shadow: 0 3px 12px rgba(20, 35, 60, 0.04);
        }

        .stat-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .stat-title {
            font-size: 12px;
            color: #647087;
        }

        .stat-icon {
            width: 32px;
            height: 32px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 7px;

            background: #eef5ff;
            color: #2874dc;
        }

        .stat-number {
            font-size: 24px;
            font-weight: bold;

            margin-top: 8px;
        }

        .stat-change {
            font-size: 10px;
            color: #1bb76e;

            margin-top: 5px;
        }


        /* ==========================
           TABLE
        ========================== */

        .card {
            background: white;
            border: 1px solid #e6eaf1;
            border-radius: 9px;

            padding: 20px;

            box-shadow: 0 3px 12px rgba(20, 35, 60, 0.04);

            margin-bottom: 20px;
        }

        .card-title {
            font-size: 14px;
            font-weight: bold;

            margin-bottom: 18px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;

            font-size: 10px;
            color: #647087;

            padding: 10px 6px;

            border-bottom: 1px solid #e8ebf1;
        }

        td {
            padding: 11px 6px;

            font-size: 10px;

            border-bottom: 1px solid #edf0f4;
        }

        .status {
            padding: 4px 7px;
            border-radius: 5px;

            font-size: 9px;
        }

        .published {
            background: #e5f9ef;
            color: #0caa5b;
        }

        .active {
            background: #e7f0ff;
            color: #2874dc;
        }

        .draft {
            background: #f0f2f5;
            color: #687386;
        }

        .archived {
            background: #ffe8e8;
            color: #e43d3d;
        }

        .actions {
            display: flex;
            gap: 8px;
        }

        .action {
            border: none;
            background: transparent;
            cursor: pointer;
            font-size: 13px;
        }

        .edit {
            color: #2874dc;
        }

        .delete {
            color: #ed4141;
        }


        /* ==========================
           STATISTICS
        ========================== */

        .statistics {
            padding: 25px;
        }

        .statistics-title {
            text-align: center;

            font-size: 18px;
            font-weight: bold;

            margin-bottom: 25px;
        }

        .statistics-grid {
            display: grid;
            grid-template-columns: repeat(2, 180px);
            justify-content: center;
            gap: 90px;
        }

        .statistics-card {
            border: 1px solid #e6eaf1;
            border-radius: 9px;

            padding: 20px;

            text-align: center;

            box-shadow: 0 3px 12px rgba(20, 35, 60, 0.04);
        }

        .statistics-card h4 {
            font-size: 11px;
            color: #647087;

            margin-bottom: 10px;
        }

        .statistics-icon {
            font-size: 28px;
            color: #1680ff;

            margin-bottom: 5px;
        }

        .statistics-number {
            font-size: 20px;
            font-weight: bold;
        }

        .statistics-text {
            font-size: 9px;
            color: #7b8799;

            margin-top: 7px;
        }

        .statistics-change {
            font-size: 9px;
            color: #14aa63;

            margin-top: 4px;
        }


        /* ==========================
           RESPONSIVE
        ========================== */

        @media(max-width: 900px) {

            .sidebar {
                width: 210px;
            }

            .main {
                margin-left: 210px;
                width: calc(100% - 210px);
            }

            .stats {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>

<body>

<div class="dashboard">

    <!-- ==========================
         SIDEBAR
    ========================== -->

    <aside class="sidebar">

        <div class="logo">

            <img
                src="{{ asset('images/logo-pgascom.png') }}"
                alt="PGASCOM"
            >

        </div>


        <div class="sidebar-menu">

            <div class="menu-title">
                Menu
            </div>


            <a href="{{ route('admin.dashboard') }}"
               class="menu-item active">

                <span class="menu-icon">▦</span>

                Dashboard

            </a>


            <a href="#" class="menu-item">

                <span class="menu-icon">⌂</span>

                Profil perusahaan

            </a>


            <a href="#" class="menu-item">

                <span class="menu-icon">◈</span>

                Layanan

            </a>


            <a href="#" class="menu-item">

                <span class="menu-icon">▤</span>

                Berita dan kegiatan

            </a>


            <a href="#" class="menu-item">

                <span class="menu-icon">✉</span>

                Kontak kami

            </a>


            <a href="{{ route('admin.layanan') }}" class="menu-item">
    <span class="menu-icon">◈</span>
    Layanan
</a>

        </div>


        <!-- ADMIN -->

        <div class="admin-profile">

            <div class="admin-info">

                <div class="admin-avatar">
                    SA
                </div>

                <div>

                    <div class="admin-name">
                        Admin PGAS
                    </div>

                    <div class="admin-role">
                        Super Admin
                    </div>

                </div>

            </div>


            <a
                href="{{ route('logout') }}"
                class="logout"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            >
                ⇥
            </a>


            <form
                id="logout-form"
                action="{{ route('logout') }}"
                method="POST"
                style="display:none;"
            >
                @csrf
            </form>

        </div>

    </aside>


    <!-- ==========================
         MAIN CONTENT
    ========================== -->

    <main class="main">

        <div class="content">


            <!-- HEADER -->

            <div class="header">

                <div>

                    <h1>
                        Selamat Datang, Super Admin
                    </h1>

                    <p>
                        Berikut ringkasan data website PGASCOM Regional Lampung.
                    </p>

                </div>


                <div class="date">
                    📅 {{ date('l, d F Y') }}
                </div>

            </div>


            <!-- STATISTICS -->

            <div class="stats">

                <div class="stat-card">

                    <div class="stat-top">

                        <div class="stat-title">
                            Total berita
                        </div>

                        <div class="stat-icon">
                            ▣
                        </div>

                    </div>

                    <div class="stat-number">
                        6
                    </div>

                    <div class="stat-change">
                        ↗ +2 bulan ini
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-top">

                        <div class="stat-title">
                            Total layanan
                        </div>

                        <div class="stat-icon">
                            ▫
                        </div>

                    </div>

                    <div class="stat-number">
                        30
                    </div>

                    <div class="stat-change">
                        ↗ aktif
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-top">

                        <div class="stat-title">
                            Total pengguna
                        </div>

                        <div class="stat-icon">
                            ♙
                        </div>

                    </div>

                    <div class="stat-number">
                        4
                    </div>

                    <div class="stat-change">
                        ↗ 1 Admin aktif dan 3 user aktif
                    </div>

                </div>

            </div>


            <!-- RIWAYAT PENGEDITAN -->

            <div class="card">

                <div class="card-title">
                    Riwayat Pengeditan info
                </div>


                <table>

                    <thead>

                        <tr>

                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Penulis</th>
                            <th>Tanggal/Waktu</th>
                            <th>Status</th>
                            <th>Aksi</th>

                        </tr>

                    </thead>


                    <tbody>

                        <tr>

                            <td>
                                PGASCOM Strengthens Digital Infrastructure in Nusantara Capital
                            </td>

                            <td>
                                News
                            </td>

                            <td>
                                Siti Rahma
                            </td>

                            <td>
                                24 Oct 2023
                            </td>

                            <td>
                                <span class="status published">
                                    Published
                                </span>
                            </td>

                            <td class="actions">

                                <button class="action edit">
                                    ✎
                                </button>

                                <button class="action delete">
                                    ♧
                                </button>

                            </td>

                        </tr>


                        <tr>

                            <td>
                                Sumatera-Java Subsea Cable Fiber Optic Project Phase 4
                            </td>

                            <td>
                                Portfolio
                            </td>

                            <td>
                                Ahmad S.
                            </td>

                            <td>
                                22 Oct 2023
                            </td>

                            <td>
                                <span class="status published">
                                    Published
                                </span>
                            </td>

                            <td class="actions">
                                <button class="action edit">✎</button>
                                <button class="action delete">♧</button>
                            </td>

                        </tr>


                        <tr>

                            <td>
                                International PLC (International Private Leased Circuit)
                            </td>

                            <td>
                                Services
                            </td>

                            <td>
                                Budi H.
                            </td>

                            <td>
                                19 Oct 2023
                            </td>

                            <td>
                                <span class="status active">
                                    Active
                                </span>
                            </td>

                            <td class="actions">
                                <button class="action edit">✎</button>
                                <button class="action delete">♧</button>
                            </td>

                        </tr>


                        <tr>

                            <td>
                                PGASCOM Career Day 2023 - Jakarta Office Openings
                            </td>

                            <td>
                                Careers
                            </td>

                            <td>
                                HR PGAS
                            </td>

                            <td>
                                15 Oct 2023
                            </td>

                            <td>
                                <span class="status draft">
                                    Draft
                                </span>
                            </td>

                            <td class="actions">
                                <button class="action edit">✎</button>
                                <button class="action delete">♧</button>
                            </td>

                        </tr>


                        <tr>

                            <td>
                                New Cloud Core Infrastructure partnership with PGAS Telekomunikasi
                            </td>

                            <td>
                                News
                            </td>

                            <td>
                                Siti Rahma
                            </td>

                            <td>
                                11 Oct 2023
                            </td>

                            <td>
                                <span class="status archived">
                                    Archived
                                </span>
                            </td>

                            <td class="actions">
                                <button class="action edit">✎</button>
                                <button class="action delete">♧</button>
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>


            <!-- STATISTIK -->

            <div class="card statistics">

                <div class="statistics-title">
                    Statistik
                </div>


                <div class="statistics-grid">

                    <div class="statistics-card">

                        <h4>
                            Jumlah pengunjung
                        </h4>

                        <div class="statistics-icon">
                            ◉
                        </div>

                        <div class="statistics-number">
                            20
                        </div>

                        <div class="statistics-text">
                            Pengunjung hari ini
                        </div>

                        <div class="statistics-change">
                            ↗ +2 pengunjung
                        </div>

                    </div>


                    <div class="statistics-card">

                        <h4>
                            Jumlah pesan pengunjung
                        </h4>

                        <div class="statistics-icon">
                            〽
                        </div>

                        <div class="statistics-number">
                            8
                        </div>

                        <div class="statistics-text">
                            Pesan Masuk
                        </div>

                        <div class="statistics-change">
                            ↗ +3 Baru
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

</div>

</body>

</html>