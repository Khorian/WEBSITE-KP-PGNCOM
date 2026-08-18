<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambahkan Layanan - PGASCOM</title>

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


        /* =========================
           SIDEBAR
        ========================= */

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


        /* =========================
           MAIN
        ========================= */

        .main {
            margin-left: 250px;
            width: calc(100% - 250px);
            min-height: 100vh;
            padding: 22px 18px 35px;
        }


        /* BREADCRUMB */

        .breadcrumb {
            font-size: 10px;
            color: #8a96a8;
            margin-bottom: 7px;
        }

        .breadcrumb span {
            color: #0878c9;
        }


        /* HEADER */

        .page-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 14px;
        }


        /* =========================
           FORM LAYOUT
        ========================= */

        .form-layout {
            display: grid;
            grid-template-columns: minmax(0, 2.2fr) minmax(250px, 1fr);
            gap: 14px;
        }

        .left-column,
        .right-column {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }


        /* CARD */

        .card {
            background: white;
            border: 1px solid #e2e7ef;
            border-radius: 8px;
            padding: 13px;
        }

        .card-title {
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 13px;
            color: #18243a;
        }


        /* FORM */

        .form-group {
            margin-bottom: 14px;
        }

        .form-group:last-child {
            margin-bottom: 0;
        }

        label {
            display: block;
            font-size: 10px;
            font-weight: 600;
            color: #24334d;
            margin-bottom: 6px;
        }

        .required {
            color: #ef4444;
        }

        input,
        textarea,
        select {
            width: 100%;
            border: 1px solid #dce2eb;
            border-radius: 6px;
            outline: none;
            background: white;
            color: #344054;
            font-size: 10px;
            padding: 9px 10px;
        }

        input:focus,
        textarea:focus,
        select:focus {
            border-color: #2874dc;
            box-shadow: 0 0 0 2px rgba(40,116,220,.08);
        }

        textarea {
            min-height: 190px;
            resize: vertical;
            line-height: 1.5;
        }

        .slug {
            background: #f5f8fc;
            color: #8190a4;
        }

        .help-text {
            font-size: 9px;
            color: #8a96a8;
            margin-top: 5px;
        }


        /* =========================
           IMAGE UPLOAD
        ========================= */

        .upload-area {
            height: 155px;
            border: 1px dashed #ccd5e2;
            border-radius: 7px;
            background: #f8fafc;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            cursor: pointer;
            overflow: hidden;
            position: relative;
        }

        .upload-area:hover {
            border-color: #2874dc;
            background: #f5f9ff;
        }

        .upload-content {
            color: #2874dc;
        }

        .upload-icon {
            font-size: 25px;
            margin-bottom: 8px;
        }

        .upload-text {
            font-size: 10px;
            font-weight: 600;
        }

        .upload-subtext {
            font-size: 8px;
            color: #8a96a8;
            margin-top: 4px;
        }

        #preview {
            display: none;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }


        /* =========================
           BUTTON
        ========================= */

        .bottom-buttons {
            margin-top: 14px;
            background: white;
            border: 1px solid #e2e7ef;
            border-radius: 8px;
            padding: 12px 13px;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cancel {
            color: #64748b;
            text-decoration: none;
            font-size: 10px;
        }

        .actions {
            display: flex;
            gap: 8px;
        }

        .btn {
            border: 1px solid #dce2eb;
            background: white;
            padding: 8px 13px;
            border-radius: 6px;
            font-size: 10px;
            cursor: pointer;
        }

        .btn-primary {
            background: #0878c9;
            border-color: #0878c9;
            color: white;
        }

        .btn-primary:hover {
            background: #0564aa;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media(max-width: 850px) {

            .sidebar {
                width: 200px;
            }

            .main {
                margin-left: 200px;
                width: calc(100% - 200px);
            }

            .form-layout {
                grid-template-columns: 1fr;
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

            <a
                href="{{ route('admin.dashboard') }}"
                class="menu-item"
            >
                ▦ Dashboard
            </a>

            <a
                href="#"
                class="menu-item"
            >
                ⌂ Profil Perusahaan
            </a>

            <a
                href="{{ route('admin.layanan') }}"
                class="menu-item active"
            >
                ◈ Layanan
            </a>

            <a
                href="#"
                class="menu-item"
            >
                ▤ Berita dan kegiatan
            </a>

            <a
                href="#"
                class="menu-item"
            >
                ✉ Kontak Kami
            </a>

            <a
                href="#"
                class="menu-item"
            >
                ⚙ Settings
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

            <form
                method="POST"
                action="{{ route('logout') }}"
            >

                @csrf

                <button
                    type="submit"
                    style="
                        border:none;
                        background:none;
                        color:#aeb8c8;
                        cursor:pointer;
                    "
                >
                    ⇥
                </button>

            </form>

        </div>

    </aside>



    <!-- =========================
         MAIN
    ========================= -->

    <main class="main">


        <!-- BREADCRUMB -->

        <div class="breadcrumb">

            Dashboard
            &nbsp;›&nbsp;
            Layanan
            &nbsp;›&nbsp;

            <span>
                Tambahkan
            </span>

        </div>


        <h1 class="page-title">
            Tambahkan layanan baru
        </h1>



        <form
            method="POST"
            action="#"
            enctype="multipart/form-data"
        >

            @csrf


            <div class="form-layout">


                <!-- =========================
                     LEFT
                ========================= -->

                <div class="left-column">


                    <!-- INFORMASI LAYANAN -->

                    <div class="card">

                        <div class="card-title">
                            Informasi Layanan
                        </div>


                        <div class="form-group">

                            <label for="name">
                                Nama layanan
                                <span class="required">*</span>
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Contoh: SORAIA (Infrastruktur Jaringan & Konektivitas)"
                                required
                                oninput="generateSlug()"
                            >

                        </div>


                        <div class="form-group">

                            <label for="slug">
                                Slug
                                <span style="font-weight:normal;">
                                    (Auto-generated)
                                </span>
                            </label>

                            <input
                                type="text"
                                id="slug"
                                name="slug"
                                class="slug"
                                readonly
                            >

                            <div class="help-text">
                                Slug dibuat otomatis berdasarkan nama layanan.
                            </div>

                        </div>


                    </div>



                    <!-- DESKRIPSI -->

                    <div class="card">

                        <div class="card-title">
                            Deskripsi Layanan
                        </div>


                        <div class="form-group">

                            <label for="description">
                                Deskripsi
                                <span class="required">*</span>
                            </label>

                            <textarea
                                id="description"
                                name="description"
                                placeholder="Tuliskan deskripsi lengkap mengenai layanan PGASCOM..."
                                required
                            ></textarea>

                        </div>

                    </div>


                </div>



                <!-- =========================
                     RIGHT
                ========================= -->

                <div class="right-column">


                    <!-- PUBLISH SETTINGS -->

                    <div class="card">

                        <div class="card-title">
                            Publish Settings
                        </div>


                        <div class="form-group">

                            <label for="status">
                                Status
                            </label>

                            <select
                                id="status"
                                name="status"
                            >

                                <option value="published">
                                    Published
                                </option>

                                <option value="draft">
                                    Draft
                                </option>

                                <option value="archived">
                                    Archived
                                </option>

                            </select>

                        </div>


                        <div class="form-group">

                            <label for="category">
                                Jenis Layanan
                            </label>

                            <select
                                id="category"
                                name="category"
                            >

                                <option value="network">
                                    Jaringan & Konektivitas
                                </option>

                                <option value="it">
                                    IT Managed Services
                                </option>

                                <option value="application">
                                    Sistem & Aplikasi
                                </option>

                                <option value="iot">
                                    IoT & Telemetri
                                </option>

                                <option value="security">
                                    Keamanan TI
                                </option>

                                <option value="smart">
                                    Smart Solutions
                                </option>

                            </select>

                        </div>

                    </div>



                    <!-- FEATURED IMAGE -->

                    <div class="card">

                        <div class="card-title">
                            Featured Image
                        </div>


                        <label
                            for="image"
                            class="upload-area"
                        >

                            <div
                                class="upload-content"
                                id="uploadContent"
                            >

                                <div class="upload-icon">
                                    ⇧
                                </div>

                                <div class="upload-text">
                                    Click to upload image
                                </div>

                                <div class="upload-subtext">
                                    or drag and drop here
                                </div>

                            </div>


                            <img
                                id="preview"
                                alt="Preview"
                            >

                        </label>


                        <input
                            type="file"
                            id="image"
                            name="image"
                            accept="image/*"
                            style="display:none;"
                            onchange="previewImage(event)"
                        >

                    </div>



                    <!-- ICON / IDENTITAS -->

                    <div class="card">

                        <div class="card-title">
                            Informasi Tambahan
                        </div>


                        <div class="form-group">

                            <label for="short_description">
                                Deskripsi Singkat
                            </label>

                            <input
                                type="text"
                                id="short_description"
                                name="short_description"
                                placeholder="Ringkasan singkat layanan..."
                            >

                        </div>


                        <div class="form-group">

                            <label for="order">
                                Urutan Tampilan
                            </label>

                            <input
                                type="number"
                                id="order"
                                name="order"
                                value="1"
                                min="1"
                            >

                        </div>

                    </div>


                </div>


            </div>



            <!-- =========================
                 BOTTOM
            ========================= -->

            <div class="bottom-buttons">


                <a
                    href="{{ route('admin.layanan') }}"
                    class="cancel"
                >
                    Cancel
                </a>


                <div class="actions">

                    <button
                        type="button"
                        class="btn"
                        onclick="saveDraft()"
                    >
                        Simpan sebagai draft
                    </button>


                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Simpan Layanan
                    </button>

                </div>


            </div>


        </form>


    </main>

</div>



<script>


    // =========================
    // AUTO SLUG
    // =========================

    function generateSlug() {

        const name =
            document.getElementById('name').value;

        const slug =
            name
            .toLowerCase()
            .trim()
            .replace(/[^\w\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-');

        document.getElementById('slug').value = slug;

    }



    // =========================
    // IMAGE PREVIEW
    // =========================

    function previewImage(event) {

        const file =
            event.target.files[0];

        if (!file) {
            return;
        }

        const preview =
            document.getElementById('preview');

        const uploadContent =
            document.getElementById('uploadContent');

        preview.src =
            URL.createObjectURL(file);

        preview.style.display = 'block';

        uploadContent.style.display = 'none';

    }



    // =========================
    // DRAFT
    // =========================

    function saveDraft() {

        document.getElementById('status').value = 'draft';

        alert(
            'Layanan disimpan sebagai draft.'
        );

    }

</script>


</body>

</html>