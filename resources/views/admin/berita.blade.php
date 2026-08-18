<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kelola Berita - PGASCOM</title>

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

        .layout {
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */

        .sidebar {
            width: 250px;
            background: #0c192f;
            color: white;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            display: flex;
            flex-direction: column;
        }

        .logo {
            padding: 18px;
        }

        .logo img {
            width: 175px;
            max-width: 100%;
        }

        .menu {
            padding: 10px;
            flex: 1;
        }

        .menu-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 11px 13px;
            margin-bottom: 4px;
            color: #aab5c8;
            text-decoration: none;
            font-size: 12px;
            border-radius: 6px;
        }

        .menu-item:hover {
            background: #172946;
            color: white;
        }

        .menu-item.active {
            background: #1c2f4d;
            color: white;
        }

        .admin-profile {
            border-top: 1px solid rgba(255,255,255,.08);
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .admin-info {
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #2676d9;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: bold;
        }

        .admin-name {
            font-size: 10px;
            color: white;
        }

        .admin-role {
            font-size: 9px;
            color: #8491a7;
            margin-top: 2px;
        }

        /* MAIN */

        .main {
            margin-left: 250px;
            width: calc(100% - 250px);
            min-height: 100vh;
            padding: 22px 18px 30px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .title h1 {
            font-size: 20px;
            margin-bottom: 4px;
        }

        .title p {
            font-size: 10px;
            color: #8995a8;
        }

        .add-button {
            background: #0878c9;
            color: white;
            border: none;
            border-radius: 6px;
            padding: 10px 15px;
            font-size: 10px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
        }

        .add-button:hover {
            background: #0565a9;
        }

        /* FILTER */

        .filter-card {
            background: white;
            border: 1px solid #e1e7ef;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 14px;
        }

        .filters {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .search {
            position: relative;
            width: 190px;
        }

        .search input {
            width: 100%;
            height: 34px;
            border: 1px solid #dce2eb;
            border-radius: 6px;
            padding: 0 10px 0 28px;
            font-size: 10px;
            outline: none;
        }

        .search-icon {
            position: absolute;
            left: 9px;
            top: 9px;
            font-size: 11px;
            color: #8995a8;
        }

        select {
            height: 34px;
            border: 1px solid #dce2eb;
            border-radius: 6px;
            padding: 0 25px 0 9px;
            background: white;
            font-size: 10px;
            color: #526176;
            outline: none;
        }

        .export {
            margin-left: auto;
            height: 34px;
            border: 1px solid #dce2eb;
            background: white;
            border-radius: 6px;
            padding: 0 12px;
            font-size: 10px;
            color: #536176;
        }

        /* TABLE */

        .table-card {
            background: white;
            border: 1px solid #e1e7ef;
            border-radius: 8px;
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        th {
            height: 42px;
            background: #f8fafc;
            font-size: 8px;
            color: #637188;
            text-align: left;
            padding: 0 9px;
            font-weight: 600;
        }

        td {
            height: 54px;
            border-top: 1px solid #edf0f4;
            padding: 6px 9px;
            font-size: 9px;
            color: #344054;
        }

        .checkbox {
            width: 13px;
            height: 13px;
        }

        .image-cell {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .article-image {
            width: 45px;
            height: 32px;
            object-fit: cover;
            border-radius: 3px;
            background: #edf2f7;
        }

        .article-title {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            font-weight: 600;
        }

        .category {
            color: #6f7d91;
        }

        .date {
            color: #758196;
        }

        .status {
            display: inline-block;
            padding: 4px 7px;
            border-radius: 10px;
            font-size: 7px;
            font-weight: 600;
        }

        .published {
            color: #079455;
            background: #e7f8ef;
        }

        .draft {
            color: #c78300;
            background: #fff3d6;
        }

        .archived {
            color: #64748b;
            background: #edf1f5;
        }

        .views {
            color: #738096;
        }

        .actions {
            display: flex;
            gap: 8px;
        }

        .edit {
            color: #536b85;
            cursor: pointer;
        }

        .delete {
            color: #ef4444;
            cursor: pointer;
        }

        /* FOOTER */

        .table-footer {
            padding: 12px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 9px;
            color: #8190a4;
        }

        .pagination {
            display: flex;
            gap: 4px;
        }

        .page {
            min-width: 25px;
            height: 25px;
            border: 1px solid #dce2eb;
            background: white;
            border-radius: 4px;
            font-size: 8px;
            color: #526176;
        }

        .page.active {
            background: #0878c9;
            color: white;
            border-color: #0878c9;
        }

        /* BOTTOM BAR */

        .bottom-bar {
            background: #0c192f;
            color: white;
            width: 455px;
            margin: 14px auto 0;
            border-radius: 8px;
            padding: 8px 12px;
            display: flex;
            align-items: center;
            gap: 12px;
            box-shadow: 0 5px 18px rgba(0,0,0,.2);
        }

        .selected {
            font-size: 9px;
            margin-right: auto;
        }

        .bottom-button {
            border: none;
            border-radius: 5px;
            padding: 7px 9px;
            background: #1c2a40;
            color: white;
            font-size: 8px;
            cursor: pointer;
        }

        .danger {
            background: #ef4444;
        }

        @media(max-width: 900px) {

            .sidebar {
                width: 200px;
            }

            .main {
                margin-left: 200px;
                width: calc(100% - 200px);
            }

            .filters {
                flex-wrap: wrap;
            }

            table {
                min-width: 850px;
            }

            .table-card {
                overflow-x: auto;
            }
        }

        @media(max-width: 600px) {

            .sidebar {
                display: none;
            }

            .main {
                margin-left: 0;
                width: 100%;
            }
        }

    </style>

</head>

<body>

<div class="layout">


    <!-- SIDEBAR -->

    <aside class="sidebar">

        <div class="logo">

            <img
                src="{{ asset('images/logo-pgascom.png') }}"
                alt="PGASCOM"
            >

        </div>


        <div class="menu">

            <a
                href="{{ route('admin.dashboard') }}"
                class="menu-item"
            >
                ▦ Dashboard
            </a>

            <a href="#" class="menu-item">
                ⌂ Profil Perusahaan
            </a>

            <a
                href="{{ route('admin.layanan') }}"
                class="menu-item"
            >
                ◈ Layanan
            </a>

            <a
                href="{{ route('admin.berita') }}"
                class="menu-item active"
            >
                ▤ Berita dan kegiatan
            </a>

            <a href="#" class="menu-item">
                ✉ Kontak Kami
            </a>

            <a href="#" class="menu-item">
                ⚙ Kelola pengguna
            </a>

        </div>


        <div class="admin-profile">

            <div class="admin-info">

                <div class="avatar">
                    AP
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

            <span style="color:#aeb8c8;">
                ⇥
            </span>

        </div>

    </aside>



    <!-- MAIN -->

    <main class="main">


        <!-- HEADER -->

        <div class="header">

            <div class="title">

                <h1>
                    Kelola Berita
                </h1>

                <p>
                    48 Berita tersimpan
                </p>

            </div>


            <a
                href="{{ route('admin.berita.create') }}"
                class="add-button"
            >
                ＋&nbsp; Tambahkan artikel baru
            </a>

        </div>



        <!-- FILTER -->

        <div class="filter-card">

            <div class="filters">


                <div class="search">

                    <span class="search-icon">
                        ⌕
                    </span>

                    <input
                        type="text"
                        placeholder="cari artikel..."
                    >

                </div>


                <select>

                    <option>
                        Kategori: Semua
                    </option>

                    <option>
                        Infrastruktur
                    </option>

                    <option>
                        Produk
                    </option>

                    <option>
                        Layanan
                    </option>

                    <option>
                        Kegiatan
                    </option>

                    <option>
                        Berita
                    </option>

                </select>


                <select>

                    <option>
                        Status: semua
                    </option>

                    <option>
                        Publikasi
                    </option>

                    <option>
                        Draft
                    </option>

                    <option>
                        Arsip
                    </option>

                </select>


                <select>

                    <option>
                        📅 tanggal
                    </option>

                    <option>
                        Terbaru
                    </option>

                    <option>
                        Terlama
                    </option>

                </select>


                <button class="export">
                    ⇩&nbsp; Export CSV
                </button>


            </div>

        </div>



        <!-- TABLE -->

        <div class="table-card">

            <table>

                <thead>

                <tr>

                    <th style="width:30px;">
                        □
                    </th>

                    <th style="width:110px;">
                        GAMBAR
                    </th>

                    <th>
                        JUDUL ARTIKEL
                    </th>

                    <th style="width:90px;">
                        KATEGORI
                    </th>

                    <th style="width:80px;">
                        PENULIS
                    </th>

                    <th style="width:100px;">
                        TANGGAL PUBLIKASI
                    </th>

                    <th style="width:70px;">
                        STATUS
                    </th>

                    <th style="width:70px;">
                        PENONTON
                    </th>

                    <th style="width:55px;">
                        AKSI
                    </th>

                </tr>

                </thead>


                <tbody>


                <!-- ARTIKEL 1 -->

                <tr>

                    <td>
                        <input type="checkbox" class="checkbox">
                    </td>

                    <td>

                        <div class="image-cell">

                            <img
                                src="{{ asset('images/news-1.png') }}"
                                class="article-image"
                            >

                        </div>

                    </td>

                    <td>

                        <div class="article-title">
                            PGASCOM Strengthens Digital Infrastructure in Nusantara Capital
                        </div>

                    </td>

                    <td class="category">
                        Infrastruktur
                    </td>

                    <td>
                        Siti Rahma
                    </td>

                    <td class="date">
                        24 Oct 2023
                    </td>

                    <td>

                        <span class="status published">
                            Publikasi
                        </span>

                    </td>

                    <td class="views">
                        1,240
                    </td>

                    <td>

                        <div class="actions">

                            <span class="edit">
                                ✎
                            </span>

                            <span class="delete">
                                ♜
                            </span>

                        </div>

                    </td>

                </tr>



                <!-- ARTIKEL 2 -->

                <tr>

                    <td>
                        <input type="checkbox" class="checkbox">
                    </td>

                    <td>

                        <img
                            src="{{ asset('images/news-2.png') }}"
                            class="article-image"
                        >

                    </td>

                    <td>
                        <div class="article-title">
                            Sumatera-Java Subsea Cable Fiber Optic Project Phase 4
                        </div>
                    </td>

                    <td class="category">
                        Produk
                    </td>

                    <td>
                        Ahmad S.
                    </td>

                    <td class="date">
                        22 Oct 2023
                    </td>

                    <td>

                        <span class="status published">
                            Publikasi
                        </span>

                    </td>

                    <td class="views">
                        849
                    </td>

                    <td>

                        <div class="actions">

                            <span class="edit">✎</span>

                            <span class="delete">♜</span>

                        </div>

                    </td>

                </tr>



                <!-- ARTIKEL 3 -->

                <tr>

                    <td>
                        <input type="checkbox" class="checkbox">
                    </td>

                    <td>

                        <img
                            src="{{ asset('images/pgcom.png') }}"
                            class="article-image"
                        >

                    </td>

                    <td>

                        <div class="article-title">
                            International IPLC Connection Expansion to Southeast Asia
                        </div>

                    </td>

                    <td class="category">
                        Layanan
                    </td>

                    <td>
                        Budi H.
                    </td>

                    <td class="date">
                        19 Oct 2023
                    </td>

                    <td>

                        <span class="status draft">
                            Draft
                        </span>

                    </td>

                    <td class="views">
                        120
                    </td>

                    <td>

                        <div class="actions">

                            <span class="edit">✎</span>

                            <span class="delete">♜</span>

                        </div>

                    </td>

                </tr>



                <!-- ARTIKEL 4 -->

                <tr>

                    <td>
                        <input type="checkbox" class="checkbox">
                    </td>

                    <td>

                        <img
                            src="{{ asset('images/news-1.png') }}"
                            class="article-image"
                        >

                    </td>

                    <td>

                        <div class="article-title">
                            PGASCOM Career Day 2023 - Jakarta Office Opening
                        </div>

                    </td>

                    <td class="category">
                        Kegiatan
                    </td>

                    <td>
                        HR PGAS
                    </td>

                    <td class="date">
                        15 Oct 2023
                    </td>

                    <td>

                        <span class="status published">
                            Publikasi
                        </span>

                    </td>

                    <td class="views">
                        2,350
                    </td>

                    <td>

                        <div class="actions">

                            <span class="edit">✎</span>

                            <span class="delete">♜</span>

                        </div>

                    </td>

                </tr>



                <!-- ARTIKEL 5 -->

                <tr>

                    <td>
                        <input type="checkbox" class="checkbox">
                    </td>

                    <td>

                        <img
                            src="{{ asset('images/news-2.png') }}"
                            class="article-image"
                        >

                    </td>

                    <td>

                        <div class="article-title">
                            New Cloud Core Infrastructure partnership with PGAS Telekomunikasi
                        </div>

                    </td>

                    <td class="category">
                        Berita
                    </td>

                    <td>
                        Siti Rahma
                    </td>

                    <td class="date">
                        11 Oct 2023
                    </td>

                    <td>

                        <span class="status archived">
                            Arsip
                        </span>

                    </td>

                    <td class="views">
                        410
                    </td>

                    <td>

                        <div class="actions">

                            <span class="edit">✎</span>

                            <span class="delete">♜</span>

                        </div>

                    </td>

                </tr>



                <!-- ARTIKEL 6 -->

                <tr>

                    <td>
                        <input type="checkbox" class="checkbox">
                    </td>

                    <td>

                        <img
                            src="{{ asset('images/news-1.png') }}"
                            class="article-image"
                        >

                    </td>

                    <td>

                        <div class="article-title">
                            Nusantara Smart City Fiber Core Architecture
                        </div>

                    </td>

                    <td class="category">
                        Berita
                    </td>

                    <td>
                        Ahmad S.
                    </td>

                    <td class="date">
                        08 Oct 2023
                    </td>

                    <td>

                        <span class="status published">
                            Publikasi
                        </span>

                    </td>

                    <td class="views">
                        1,105
                    </td>

                    <td>

                        <div class="actions">

                            <span class="edit">✎</span>

                            <span class="delete">♜</span>

                        </div>

                    </td>

                </tr>



                <!-- ARTIKEL 7 -->

                <tr>

                    <td>
                        <input type="checkbox" class="checkbox">
                    </td>

                    <td>

                        <img
                            src="{{ asset('images/pgcom.png') }}"
                            class="article-image"
                        >

                    </td>

                    <td>

                        <div class="article-title">
                            PT PGAS Telekomunikasi Nusantara ISO 27001 Certification
                        </div>

                    </td>

                    <td class="category">
                        Sertifikasi
                    </td>

                    <td>
                        Super Admin
                    </td>

                    <td class="date">
                        28 Sep 2023
                    </td>

                    <td>

                        <span class="status published">
                            Publikasi
                        </span>

                    </td>

                    <td class="views">
                        678
                    </td>

                    <td>

                        <div class="actions">

                            <span class="edit">✎</span>

                            <span class="delete">♜</span>

                        </div>

                    </td>

                </tr>



                <!-- ARTIKEL 8 -->

                <tr>

                    <td>
                        <input type="checkbox" class="checkbox">
                    </td>

                    <td>

                        <img
                            src="{{ asset('images/news-2.png') }}"
                            class="article-image"
                        >

                    </td>

                    <td>

                        <div class="article-title">
                            Strategic Partnership with Local ISPs in Kalimantan
                        </div>

                    </td>

                    <td class="category">
                        Produk
                    </td>

                    <td>
                        Budi H.
                    </td>

                    <td class="date">
                        22 Sep 2023
                    </td>

                    <td>

                        <span class="status draft">
                            Draft
                        </span>

                    </td>

                    <td class="views">
                        98
                    </td>

                    <td>

                        <div class="actions">

                            <span class="edit">✎</span>

                            <span class="delete">♜</span>

                        </div>

                    </td>

                </tr>


                </tbody>

            </table>



            <!-- TABLE FOOTER -->

            <div class="table-footer">

                <span>
                    Lihat 1-8 dari 48 hasil
                </span>

                <div class="pagination">

                    <button class="page">
                        Sebelumnya
                    </button>

                    <button class="page active">
                        1
                    </button>

                    <button class="page">
                        2
                    </button>

                    <button class="page">
                        3
                    </button>

                    <button class="page">
                        ...
                    </button>

                    <button class="page">
                        6
                    </button>

                    <button class="page">
                        Selanjutnya
                    </button>

                </div>

            </div>

        </div>



        <!-- BOTTOM BAR -->

        <div class="bottom-bar">

            <div class="selected">
                <b>2</b>
                &nbsp; Artikel dipilih
            </div>

            <button class="bottom-button">
                ↗ batalkan publikasi
            </button>

            <button class="bottom-button">
                ▣ Arsip
            </button>

            <button class="bottom-button danger">
                ▣ Hapus item dipilih
            </button>

        </div>


    </main>

</div>

</body>

</html>