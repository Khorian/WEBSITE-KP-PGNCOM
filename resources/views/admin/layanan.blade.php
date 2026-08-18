<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kelola Layanan - PGASCOM</title>

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

        /* =========================
           LAYOUT
        ========================= */

        .dashboard {
            display: flex;
            min-height: 100vh;
        }


        /* =========================
           SIDEBAR
        ========================= */

        .sidebar {

            width: 250px;

            background: #0c192f;

            color: white;

            position: fixed;

            top: 0;
            left: 0;
            bottom: 0;

            display: flex;

            flex-direction: column;
        }


        .logo {

            padding: 18px;

            border-bottom: 1px solid rgba(255,255,255,0.05);
        }


        .logo img {

            width: 175px;

            max-width: 100%;
        }


        .menu {

            padding: 15px 10px;

            flex: 1;
        }


        .menu-title {

            font-size: 10px;

            color: #75839b;

            margin: 8px 13px 12px;

            text-transform: uppercase;
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

            transition: .2s;
        }


        .menu-item:hover {

            background: #172946;

            color: white;
        }


        .menu-item.active {

            background: #1c2f4d;

            color: white;
        }


        .icon {

            width: 17px;

            text-align: center;

            font-size: 13px;
        }


        /* =========================
           ADMIN PROFILE
        ========================= */

        .admin-profile {

            border-top: 1px solid rgba(255,255,255,0.08);

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

            justify-content: center;

            align-items: center;

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


        .logout {

            color: #aeb8c8;

            text-decoration: none;

            font-size: 16px;
        }


        /* =========================
           MAIN
        ========================= */

        .main {

            margin-left: 250px;

            width: calc(100% - 250px);

            min-height: 100vh;
        }


        .content {

            padding: 22px 18px;
        }


        /* =========================
           HEADER
        ========================= */

        .header {

            display: flex;

            justify-content: space-between;

            align-items: flex-start;

            margin-bottom: 30px;
        }


        .header h1 {

            font-size: 20px;

            color: #17233c;

            margin-bottom: 5px;
        }


        .header p {

            font-size: 11px;

            color: #8490a4;
        }


        .add-button {

            background: #0878c9;

            color: white;

            border: none;

            padding: 11px 16px;

            border-radius: 6px;

            font-size: 11px;

            font-weight: 600;

            cursor: pointer;
        }


        .add-button:hover {

            background: #0564aa;
        }


        /* =========================
           LAYANAN GRID
        ========================= */

        .services-grid {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 25px 22px;
        }


        .service-card {

            background: white;

            border: 1px solid #e3e7ee;

            border-radius: 7px;

            overflow: hidden;

            box-shadow: 0 2px 8px rgba(20,35,60,.03);

            position: relative;
        }


        .service-card input[type="checkbox"] {

            position: absolute;

            top: 10px;

            right: 10px;

            width: 15px;

            height: 15px;

            z-index: 2;

            cursor: pointer;
        }


        .service-image {

            width: 100%;

            height: 120px;

            object-fit: cover;

            display: block;
        }


        .service-content {

            padding: 10px;
        }


        .service-title {

            font-size: 11px;

            font-weight: bold;

            color: #18243a;

            margin-bottom: 4px;

            min-height: 25px;
        }


        .service-description {

            font-size: 9px;

            color: #727e92;

            line-height: 1.4;

            height: 27px;

            overflow: hidden;

            margin-bottom: 7px;
        }


        .service-actions {

            display: flex;

            gap: 10px;
        }


        .edit-button,
        .delete-button {

            flex: 1;

            border: none;

            height: 25px;

            border-radius: 5px;

            font-size: 9px;

            cursor: pointer;
        }


        .edit-button {

            background: #e2f0ff;

            color: #0878d1;
        }


        .delete-button {

            background: #ffe2e2;

            color: #ef4444;
        }


        /* =========================
           BOTTOM ACTION
        ========================= */

        .bottom-action {

            position: fixed;

            bottom: 20px;

            left: calc(50% + 125px);

            transform: translateX(-50%);

            background: #0d1a30;

            color: white;

            padding: 9px 14px;

            border-radius: 7px;

            box-shadow: 0 5px 20px rgba(0,0,0,.25);

            display: flex;

            align-items: center;

            gap: 10px;

            font-size: 10px;
        }


        .selected {

            background: #0878d1;

            padding: 3px 6px;

            border-radius: 4px;

            font-size: 9px;
        }


        .bottom-button {

            border: none;

            padding: 7px 10px;

            border-radius: 5px;

            font-size: 9px;

            cursor: pointer;
        }


        .cancel {

            background: #17243a;

            color: #d6dce6;
        }


        .archive {

            background: #26344b;

            color: white;
        }


        .delete-selected {

            background: #ef4444;

            color: white;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media(max-width: 1000px) {

            .services-grid {

                grid-template-columns: repeat(2, 1fr);
            }

        }


        @media(max-width: 700px) {

            .sidebar {

                width: 200px;
            }

            .main {

                margin-left: 200px;

                width: calc(100% - 200px);
            }

            .services-grid {

                grid-template-columns: 1fr;
            }

        }

    </style>

</head>


<body>


<div class="dashboard">


    <!-- =========================
         SIDEBAR
    ========================= -->

    <aside class="sidebar">


        <div class="logo">

            <img
                src="{{ asset('images/logo-pgascom.png') }}"
                alt="PGASCOM"
            >

        </div>


        <div class="menu">


            <div class="menu-title">
                Menu
            </div>


            <a
                href="{{ route('admin.dashboard') }}"
                class="menu-item"
            >

                <span class="icon">▦</span>

                Dashboard

            </a>


            <a
                href="#"
                class="menu-item"
            >

                <span class="icon">⌂</span>

                Profil perusahaan

            </a>


            <a
                href="{{ route('admin.layanan') }}"
                class="menu-item active"
            >

                <span class="icon">◈</span>

                Layanan

            </a>


            <a
                href="#"
                class="menu-item"
            >

                <span class="icon">▤</span>

                Berita dan kegiatan

            </a>


            <a
                href="#"
                class="menu-item"
            >

                <span class="icon">✉</span>

                Kontak kami

            </a>


            <a
                href="#"
                class="menu-item"
            >

                <span class="icon">⚙</span>

                Kelola pengguna

            </a>


        </div>


        <!-- ADMIN -->

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
                        role
                    </div>

                </div>

            </div>


            <form
                action="{{ route('logout') }}"
                method="POST"
            >

                @csrf

                <button
                    type="submit"
                    style="
                        border:none;
                        background:none;
                        color:#aeb8c8;
                        cursor:pointer;
                        font-size:16px;
                    "
                >
                    ⇥
                </button>

            </form>


        </div>


    </aside>



    <!-- =========================
         MAIN CONTENT
    ========================= -->

    <main class="main">


        <div class="content">


            <!-- HEADER -->

            <div class="header">


                <div>

                    <h1>
                        Kelola Layanan
                    </h1>

                    <p>
                        6 Layanan tersimpan
                    </p>

                </div>


                <a
    href="{{ route('admin.layanan.create') }}"
    class="add-button"
    style="text-decoration:none; display:inline-block;"
>
    ＋ Tambahkan Layanan
</a>


            </div>



            <!-- =========================
                 SERVICES
            ========================= -->

            <div class="services-grid">


                <!-- CARD 1 -->

                <div class="service-card">

                    <input
                        type="checkbox"
                        class="service-check"
                    >


                    <img
                        src="{{ asset('images/layanan-1.jpg') }}"
                        class="service-image"
                        alt="SORAIA"
                    >


                    <div class="service-content">

                        <div class="service-title">
                            SORAIA (Infrastruktur Jaringan & Konektivitas)
                        </div>


                        <div class="service-description">
                            Jaringan backbone serat optik andal dan...
                        </div>


                        <div class="service-actions">

                            <button
                                class="edit-button"
                                onclick="editService('SORAIA')"
                            >
                                ✎ Edit
                            </button>

                            <button
                                class="delete-button"
                                onclick="deleteService('SORAIA')"
                            >
                                ♧ Hapus
                            </button>

                        </div>

                    </div>

                </div>



                <!-- CARD 2 -->

                <div class="service-card">

                    <input
                        type="checkbox"
                        class="service-check"
                    >


                    <img
                        src="{{ asset('images/layanan-2.jpg') }}"
                        class="service-image"
                        alt="SINTA"
                    >


                    <div class="service-content">

                        <div class="service-title">
                            SINTA / SINTA (IT Managed Services & Infrastructure)
                        </div>


                        <div class="service-description">
                            Pengelolaan infrastruktur IT end-to-end...
                        </div>


                        <div class="service-actions">

                            <button
                                class="edit-button"
                                onclick="editService('SINTA')"
                            >
                                ✎ Edit
                            </button>

                            <button
                                class="delete-button"
                                onclick="deleteService('SINTA')"
                            >
                                ♧ Hapus
                            </button>

                        </div>

                    </div>

                </div>



                <!-- CARD 3 -->

                <div class="service-card">

                    <input
                        type="checkbox"
                        class="service-check"
                    >


                    <img
                        src="{{ asset('images/layanan-3.jpg') }}"
                        class="service-image"
                        alt="GITA"
                    >


                    <div class="service-content">

                        <div class="service-title">
                            GITA (Sistem & Aplikasi)
                        </div>


                        <div class="service-description">
                            Pembuatan dan pengembangan aplikasi penunjang operasional bisnis.
                        </div>


                        <div class="service-actions">

                            <button
                                class="edit-button"
                                onclick="editService('GITA')"
                            >
                                ✎ Edit
                            </button>

                            <button
                                class="delete-button"
                                onclick="deleteService('GITA')"
                            >
                                ♧ Hapus
                            </button>

                        </div>

                    </div>

                </div>



                <!-- CARD 4 -->

                <div class="service-card">

                    <input
                        type="checkbox"
                        class="service-check"
                    >


                    <img
                        src="{{ asset('images/layanan-4.jpg') }}"
                        class="service-image"
                        alt="SINATRA"
                    >


                    <div class="service-content">

                        <div class="service-title">
                            SINATRA (IoT & Telemetri)
                        </div>


                        <div class="service-description">
                            Solusi infrastruktur teknologi operasional berbasis SCADA dan Internet of Things.
                        </div>


                        <div class="service-actions">

                            <button
                                class="edit-button"
                                onclick="editService('SINATRA')"
                            >
                                ✎ Edit
                            </button>

                            <button
                                class="delete-button"
                                onclick="deleteService('SINATRA')"
                            >
                                ♧ Hapus
                            </button>

                        </div>

                    </div>

                </div>



                <!-- CARD 5 -->

                <div class="service-card">

                    <input
                        type="checkbox"
                        class="service-check"
                    >


                    <img
                        src="{{ asset('images/layanan-5.jpg') }}"
                        class="service-image"
                        alt="AMBER"
                    >


                    <div class="service-content">

                        <div class="service-title">
                            AMBER (Keamanan TI)
                        </div>


                        <div class="service-description">
                            Penerapan teknologi perlindungan sistem terintegrasi untuk membantu...
                        </div>


                        <div class="service-actions">

                            <button
                                class="edit-button"
                                onclick="editService('AMBER')"
                            >
                                ✎ Edit
                            </button>

                            <button
                                class="delete-button"
                                onclick="deleteService('AMBER')"
                            >
                                ♧ Hapus
                            </button>

                        </div>

                    </div>

                </div>



                <!-- CARD 6 -->

                <div class="service-card">

                    <input
                        type="checkbox"
                        class="service-check"
                    >


                    <img
                        src="{{ asset('images/layanan-6.jpg') }}"
                        class="service-image"
                        alt="SISKA"
                    >


                    <div class="service-content">

                        <div class="service-title">
                            SISKA (Smart Solutions)
                        </div>


                        <div class="service-description">
                            Penerapan teknologi pintar terintegrasi untuk membantu pengambilan keputusan bisnis.
                        </div>


                        <div class="service-actions">

                            <button
                                class="edit-button"
                                onclick="editService('SISKA')"
                            >
                                ✎ Edit
                            </button>

                            <button
                                class="delete-button"
                                onclick="deleteService('SISKA')"
                            >
                                ♧ Hapus
                            </button>

                        </div>

                    </div>

                </div>


            </div>


        </div>


    </main>


</div>



<!-- =========================
     BOTTOM ACTION
========================= -->

<div
    class="bottom-action"
    id="bottomAction"
    style="display:none;"
>

    <span
        class="selected"
        id="selectedCount"
    >
        0
    </span>


    <span>
        Layanan dipilih
    </span>


    <button
        class="bottom-button cancel"
        onclick="cancelSelection()"
    >
        ✕ Batalkan pilihan
    </button>


    <button
        class="bottom-button archive"
    >
        ▣ Arsip
    </button>


    <button
        class="bottom-button delete-selected"
        onclick="deleteSelected()"
    >
        ♧ Hapus item dipilih
    </button>

</div>



<script>


    // =========================
    // CHECKBOX
    // =========================

    const checkboxes =
        document.querySelectorAll('.service-check');

    const bottomAction =
        document.getElementById('bottomAction');

    const selectedCount =
        document.getElementById('selectedCount');


    function updateSelection() {

        let selected = 0;

        checkboxes.forEach(function(checkbox) {

            if (checkbox.checked) {

                selected++;

            }

        });


        selectedCount.textContent = selected;


        if (selected > 0) {

            bottomAction.style.display = 'flex';

        } else {

            bottomAction.style.display = 'none';

        }

    }


    checkboxes.forEach(function(checkbox) {

        checkbox.addEventListener(
            'change',
            updateSelection
        );

    });



    // =========================
    // BATAL PILIHAN
    // =========================

    function cancelSelection() {

        checkboxes.forEach(function(checkbox) {

            checkbox.checked = false;

        });

        updateSelection();

    }



    // =========================
    // EDIT
    // =========================

    function editService(name) {

        alert(
            'Edit layanan: ' + name +
            '\n\nForm edit akan kita buat pada tahap berikutnya.'
        );

    }



    // =========================
    // DELETE
    // =========================

    function deleteService(name) {

        if (
            confirm(
                'Apakah kamu yakin ingin menghapus layanan ' +
                name +
                '?'
            )
        ) {

            alert(
                'Layanan ' +
                name +
                ' akan dihapus setelah database dibuat.'
            );

        }

    }



    // =========================
    // DELETE SELECTED
    // =========================

    function deleteSelected() {

        let selected = 0;

        checkboxes.forEach(function(checkbox) {

            if (checkbox.checked) {

                selected++;

            }

        });


        if (selected === 0) {

            return;

        }


        if (
            confirm(
                'Hapus ' +
                selected +
                ' layanan yang dipilih?'
            )
        ) {

            alert(
                'Fungsi hapus database akan dibuat berikutnya.'
            );

        }

    }

</script>


</body>

</html>