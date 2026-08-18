<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambahkan Artikel - PGASCOM</title>

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

        /* ================= SIDEBAR ================= */

        .sidebar {
            width: 250px;
            background: #0c192f;
            color: white;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            display: flex;
            flex-direction: column;
        }

        .logo {
            padding: 18px;
        }

        .logo img {
            width: 175px;
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
            justify-content: center;
            align-items: center;
            font-size: 10px;
        }

        .admin-name {
            font-size: 10px;
        }

        .admin-role {
            font-size: 9px;
            color: #8491a7;
            margin-top: 2px;
        }

        /* ================= MAIN ================= */

        .main {
            margin-left: 250px;
            width: calc(100% - 250px);
            min-height: 100vh;
            padding: 22px 18px 35px;
        }

        .breadcrumb {
            font-size: 10px;
            color: #8995a8;
            margin-bottom: 6px;
        }

        .breadcrumb .active {
            color: #0878c9;
        }

        .page-title {
            font-size: 20px;
            margin-bottom: 14px;
        }

        /* ================= FORM ================= */

        .form-layout {
            display: grid;
            grid-template-columns: 2.1fr 1fr;
            gap: 14px;
        }

        .left-column,
        .right-column {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .card {
            background: white;
            border: 1px solid #e1e7ef;
            border-radius: 8px;
            padding: 13px;
        }

        .card-title {
            font-size: 10px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .form-group {
            margin-bottom: 14px;
        }

        .form-group:last-child {
            margin-bottom: 0;
        }

        label {
            display: block;
            font-size: 9px;
            font-weight: 600;
            margin-bottom: 6px;
            color: #24334d;
        }

        .required {
            color: #ef4444;
        }

        input,
        select,
        textarea {
            width: 100%;
            border: 1px solid #dce2eb;
            border-radius: 6px;
            outline: none;
            font-size: 10px;
            padding: 9px 10px;
            color: #344054;
            background: white;
        }

        input,
        select {
            height: 36px;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: #2874dc;
            box-shadow: 0 0 0 2px rgba(40,116,220,.08);
        }

        .slug {
            background: #f5f8fc;
            color: #8190a4;
        }

        textarea {
            min-height: 168px;
            resize: vertical;
            line-height: 1.5;
        }

        /* ================= EDITOR ================= */

        .editor-toolbar {
            height: 34px;
            border: 1px solid #dce2eb;
            border-bottom: none;
            background: #f7f9fc;
            border-radius: 6px 6px 0 0;
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 0 10px;
        }

        .editor-toolbar button {
            border: none;
            background: transparent;
            cursor: pointer;
            font-size: 11px;
            font-weight: 600;
            color: #26344d;
        }

        .editor {
            width: 100%;
            min-height: 170px;
            border: 1px solid #dce2eb;
            border-radius: 0 0 6px 6px;
            padding: 10px;
            font-size: 10px;
            line-height: 1.6;
            outline: none;
        }

        /* ================= UPLOAD ================= */

        .upload-box {
            height: 105px;
            border: 1px dashed #cbd5e1;
            border-radius: 6px;
            background: #f8fafc;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            cursor: pointer;
            overflow: hidden;
        }

        .upload-box:hover {
            border-color: #2874dc;
            background: #f5f9ff;
        }

        .upload-icon {
            font-size: 22px;
            color: #2874dc;
            margin-bottom: 5px;
        }

        .upload-text {
            font-size: 9px;
            color: #0878c9;
            font-weight: 600;
        }

        .upload-subtext {
            font-size: 8px;
            color: #8a96a8;
            margin-top: 3px;
        }

        #image-preview {
            display: none;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* ================= TAGS ================= */

        .tags-box {
            min-height: 38px;
            border: 1px solid #dce2eb;
            border-radius: 6px;
            padding: 5px;
            display: flex;
            align-items: center;
            gap: 5px;
            flex-wrap: wrap;
        }

        .tag {
            background: #f0f4f8;
            border: 1px solid #dce2eb;
            border-radius: 10px;
            padding: 4px 7px;
            font-size: 8px;
            color: #526176;
        }

        /* ================= BUTTON ================= */

        .bottom-buttons {
            margin-top: 14px;
            background: white;
            border: 1px solid #e1e7ef;
            border-radius: 8px;
            padding: 12px 13px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cancel {
            color: #64748b;
            text-decoration: none;
            font-size: 9px;
        }

        .actions {
            display: flex;
            gap: 8px;
        }

        .btn {
            border: 1px solid #dce2eb;
            background: white;
            border-radius: 6px;
            padding: 8px 13px;
            font-size: 9px;
            cursor: pointer;
        }

        .btn-primary {
            background: #0878c9;
            color: white;
            border-color: #0878c9;
        }

        .btn-primary:hover {
            background: #0565a9;
        }

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

            <span style="color:#aeb8c8;">
                ⇥
            </span>

        </div>

    </aside>



    <!-- MAIN -->

    <main class="main">


        <!-- BREADCRUMB -->

        <div class="breadcrumb">

            Dashboard
            &nbsp;›&nbsp;

            Berita
            &nbsp;›&nbsp;

            <span class="active">
                Tambahkan
            </span>

        </div>


        <h1 class="page-title">
            Tambahkan artikel baru
        </h1>



        <form
            method="POST"
            action="#"
            enctype="multipart/form-data"
        >

            @csrf


            <div class="form-layout">


                <!-- ================= LEFT ================= -->

                <div class="left-column">


                    <!-- JUDUL -->

                    <div class="card">

                        <div class="form-group">

                            <label for="title">
                                Judul artikel
                                <span class="required">*</span>
                            </label>

                            <input
                                type="text"
                                id="title"
                                name="title"
                                placeholder="Masukkan judul artikel"
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

                        </div>

                    </div>



                    <!-- CONTENT -->

                    <div class="card">

                        <div class="card-title">

                            Content Body
                            <span class="required">*</span>

                        </div>


                        <div class="editor-toolbar">

                            <button type="button">
                                <b>B</b>
                            </button>

                            <button type="button">
                                <i>I</i>
                            </button>

                            <button type="button">
                                <u>U</u>
                            </button>

                            <button type="button">
                                •
                            </button>

                            <button type="button">
                                ☷
                            </button>

                            <button type="button">
                                🔗
                            </button>

                            <button type="button">
                                &lt;/&gt;
                            </button>

                        </div>


                        <div
                            class="editor"
                            contenteditable="true"
                            id="content"
                        >
                            Tuliskan isi artikel berita PGASCOM di sini...
                        </div>

                    </div>


                </div>



                <!-- ================= RIGHT ================= -->

                <div class="right-column">


                    <!-- PUBLISH -->

                    <div class="card">

                        <div class="card-title">
                            Publish Settings
                        </div>


                        <div class="form-group">

                            <label>
                                Status
                            </label>

                            <select id="status">

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

                            <label>
                                Category
                            </label>

                            <select id="category">

                                <option>
                                    News
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
                                    Sertifikasi
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
                            class="upload-box"
                        >

                            <div id="upload-content">

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
                                id="image-preview"
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



                    <!-- TAGS -->

                    <div class="card">

                        <div class="card-title">
                            Tags & Metadata
                        </div>


                        <div class="tags-box">

                            <span class="tag">
                                PGASCOM ×
                            </span>

                            <span class="tag">
                                Nusantara ×
                            </span>

                        </div>

                    </div>



                    <!-- SEO -->

                    <div class="card">

                        <div class="card-title">
                            SEO Configuration
                        </div>


                        <div class="form-group">

                            <label>
                                Meta Title
                            </label>

                            <input
                                type="text"
                                placeholder="Judul untuk mesin pencari"
                            >

                        </div>


                        <div class="form-group">

                            <label>
                                Meta Description
                            </label>

                            <textarea
                                style="min-height:70px;"
                                placeholder="Deskripsi singkat artikel..."
                            ></textarea>

                        </div>

                    </div>


                </div>

            </div>



            <!-- BOTTOM -->

            <div class="bottom-buttons">

                <a
                    href="{{ route('admin.berita') }}"
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
                        Publikasi
                    </button>

                </div>

            </div>


        </form>


    </main>

</div>



<script>

    // AUTO SLUG

    function generateSlug() {

        const title =
            document.getElementById('title').value;

        const slug =
            title
            .toLowerCase()
            .trim()
            .replace(/[^\w\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-');

        document.getElementById('slug').value = slug;

    }


    // PREVIEW IMAGE

    function previewImage(event) {

        const file =
            event.target.files[0];

        if (!file) {
            return;
        }

        const preview =
            document.getElementById('image-preview');

        const content =
            document.getElementById('upload-content');

        preview.src =
            URL.createObjectURL(file);

        preview.style.display = 'block';

        content.style.display = 'none';

    }


    // SAVE DRAFT

    function saveDraft() {

        document.getElementById('status').value = 'draft';

        alert('Artikel disimpan sebagai draft.');

    }

</script>


</body>

</html>