<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title> <!-- Yield for title -->
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <style>
        body, html {
            margin: 0;
            display: block;
            background-color: #D9D9D9;
            height: 100%;
            width: 100%;
        }

        /* sidebar */
        .sidebar {
            width: 250px;
            background-color: #000A63;
            height: 100vh;
            position: fixed;
        }

        .sidebar a {
            color: white;
            display: block;
            padding: 15px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .sidebar p {
            color: white;
            margin-right: 30px;
            text-align: center;
        }

        /* Nested dropdown menu styling */
        .submenu {
            display: none;
            background-color: #333; /* Darker background for the submenu */
        }

        .submenu a {
            padding-left: 30px; /* Indent submenu items */
        }

        /* Highlight active menu item */
        .submenu a.active {
            background-color: #495057;
            color: white;
        }

        /* Ensure submenu is displayed */
        .submenu-open {
            display: block !important; /* Ensure it's always open */
        }

        .dropdown-btn {
            cursor: pointer;
            background-color: #FA1C24;
            color: white;
            border: none;
            width: 100%;
            text-align: left;
            padding: 15px;
            font-size: 16px;
            outline: none;
            text-align: center;
        }

        .dropdown-btn:hover {
            background-color: #C24D51;
        }

        .dropdown-btn-1 {
            cursor: pointer;
            background-color: #FED207;
            color: white;
            border: none;
            width: 100%;
            text-align: left;
            padding: 15px;
            font-size: 16px;
            outline: none;
            text-align: center;
        }

        .dropdown-btn-1:hover {
            background-color: #CFBA56;
        }

        /* Responsive Logo Section */
        .container-logo {
            width: 100%;
            margin-left: 0;
            padding: 20px 0;
            background-color: white;
        }

        #logo {
            display: block;
            max-height: 100px;
            max-width: calc(100% + 20rem);
            margin: 0 auto;
        }

        .logo {
            text-align: center;
        }

        .logo h1 {
            font-size: 2rem;
            color: #000A63;
        }

        .logo p {
            color: #333;
        }

        /* Image styling */
        .logo img {
            max-width: 100%;
            max-height: 70px;
            height: auto;
            width: auto;
            display: block;
            margin-left: 270px;
        }

        .sidebar img {
            margin-top: 70px;
        }


        /* Forum */

        #forum{
            margin-left: 20rem;
            width: 70rem;
        }

        /* Custom styling for table */
        table {
            width: 100%;
            margin-top: 20px;
            
        }
        th, td {
            text-align: center;
            vertical-align: middle;
        }

        thead {
            /* background-color: yellow !important;  */
        }

        .kelas {
            border: none !important;  /* Remove borders from table cells */
            background-color: red !important;
            height:50px; 
        }

        .sub-kelas {
            border: none !important;  /* Remove borders from table cells */
            background-color: #1872E8 !important;
            height:50px; 
        }

        .dub-kelas {
            border: none !important;  /* Remove borders from table cells */
            background-color: #FFE198 !important;
            height:50px; 
        }

        th {
            border: none !important;  /* Remove borders from table cells */
            background-color: yellow !important;
            height:70px; 
        }
        .number {
            width: 50px ;
        }

        .pertanyaan {
            width: 300px;
        }

        .centang {
            width: 100px ;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .container-logo {
                margin-left: 0;
            }

            .toggle-btn {
                display: block;
                position: fixed;
                top: 10px;
                left: 10px;
                z-index: 1000;
                background-color: #343a40;
                color: white;
                padding: 10px;
                border-radius: 5px;
            }
        }

        @media (min-width: 769px) {
            .toggle-btn {
                display: none;
            }
        }
    </style>

    <body>

        <!-- Toggle Button for Mobile -->
        <button class="toggle-btn" onclick="toggleSidebar()">☰ Menu</button>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- profile -->
            <img src="{{ asset('images/image-removebg-preview (6).png') }}" alt="">
            <p>ADMIN 1</p>

            <!-- Dropdown Button -->
            <button class="dropdown-btn">KERTAS KERJA FRONTLINE
                <i class="fa fa-caret-down"></i>
            </button>
            <!-- Dropdown Menu -->
            <div class="submenu submenu-open">
                <a href="{{ route('teller') }}" class="active">TELLER</a>
                <a href="{{ route('customer_service') }}">CUSTOMER SERVICE</a>
                <a href="{{ route('satpam') }}">SATPAM</a>
            </div>

            <!-- Divider -->
            <button class="dropdown-btn-1">KERTAS KERJA PEGAWAI DASAR
                <i class="fa fa-caret-down"></i>
            </button>
            <!-- Dropdown Menu -->
            <div class="submenu">
                <a href="#cleaning_service">CLEANING SERVICE</a>
                <a href="#pesuruh">PESURUH</a>
                <a href="#pengemudi">PENGEMUDI</a>
            </div>
        </div>

        <!-- Logo Section -->
        <section id="logo" class="container-logo">
            <div class="logo">
                <img src="{{ asset('images/logo-bank.png') }}" alt="Logo Image">
            </div>
        </section>

        <!-- forum -->

        <Section id="forum">
        <div class="container mt-5 ml-5">

        <form>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">TEST</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th scope="col" class="kelas"></th>
                        <th scope="col" class="kelas">TRANDSFER DEBET REKENING</th>
                        <th scope="col" class="kelas"></th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th scope="col" class="sub-kelas"></th>
                        <th scope="col" class="sub-kelas">KONDISI LINGKUNGAN MEJA KERJA - TELLER</th>
                        <th scope="col" class="sub-kelas"></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr>
                        <td class="number">
                            <span>1</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah kondisi toon bank Teller rapi dan bersih, file kerja tidak berantakan ? (clean desk policy diterapkan)</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                                <input class="form-check-input" type="checkbox" id="switch1_row1" onchange="toggleSwitchLabel(this, 'label_switch1_row1')">
                                <label class="form-check-label" for="switch1_row1" id="label_switch1_row1">Positif</label>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 2 -->
                    <tr>
                        <td class="number">
                            <span>2</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah di meja kerja terdapat bunga/brosur/permen/pulpen/papan nama ?</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                                <input class="form-check-input" type="checkbox" id="switch2_row2" onchange="toggleSwitchLabel(this, 'label_switch2_row2')">
                                <label class="form-check-label" for="switch2_row2" id="label_switch2_row2">Positif</label>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 3 -->
                    <tr>
                        <td class="number">
                            <span>3</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Sekitar meja, credenza bersih & rapih (tidak terdapat barang selain file kerja, contoh ; makanan, minuman, jaket, topi, sendal jepit)</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                                <input class="form-check-input" type="checkbox" id="switch3_row3" onchange="toggleSwitchLabel(this, 'label_switch3_row3')">
                                <label class="form-check-label" for="switch3_row3" id="label_switch3_row3">Positif</label>
                            </div>
                        </td>
                    </tr>

                    <!-- sub-Kelas -->
                    <thead>
                    <tr>
                        <th scope="col" class="sub-kelas"></th>
                        <th scope="col" class="sub-kelas">PENAMPILAN - TELLER (PILIH SALAH SATU SESUAI GENDER TELLER YANG MELAYANI)</th>
                        <th scope="col" class="sub-kelas"></th>
                    </tr>
                    </thead>

                    <!-- dub-Kelas -->
                    <thead>
                    <tr>
                        <th scope="col" class="dub-kelas"></th>
                        <th scope="col" class="dub-kelas">Bagaimana pakaian TELLER – WANITA yang melayani anda ?</th>
                        <th scope="col" class="dub-kelas"></th>
                    </tr>
                    </thead>

                    <!-- Row 4 -->
                    <tr>
                        <td class="number">
                            <span>1</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Menggunakan seragam perusahaan secara lengkap dan rapi (semua kancing terpasang)</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                                <input class="form-check-input" type="checkbox" id="switch4_row4" onchange="toggleSwitchLabel(this, 'label_switch4_row4')">
                                <label class="form-check-label" for="switch4_row4" id="label_switch4_row4">Positif</label>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 5 -->
                    <tr>
                        <td class="number">
                            <span>2</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah Teller dalam bertata rias rambut (Wanita : (memakai jilbab dengan rapih)?</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                                <input class="form-check-input" type="checkbox" id="switch5_row5" onchange="toggleSwitchLabel(this, 'label_switch5_row5')">
                                <label class="form-check-label" for="switch5_row5" id="label_switch5_row5">Positif</label>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 6 -->
                    <tr>
                        <td class="number">
                            <span>3</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah Teller memakai bedak, lipstik dan blush on (perona pipi) ?</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                                <input class="form-check-input" type="checkbox" id="switch6_row6" onchange="toggleSwitchLabel(this, 'label_switch6_row6')">
                                <label class="form-check-label" for="switch6_row6" id="label_switch6_row6">Positif</label>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 7 -->
                    <tr>
                        <td class="number">
                            <span>4</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah Teller dalam berpakaian bersih rapih dan sopan, sesuai dengan ketentuan ?</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                                <input class="form-check-input" type="checkbox" id="switch7_row7" onchange="toggleSwitchLabel(this, 'label_switch7_row7')">
                                <label class="form-check-label" for="switch7_row7" id="label_switch7_row7">Positif</label>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 8 -->
                    <tr>
                        <td class="number">
                            <span>5</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Aksesoris tidak lebih dari 5 titik (Anting, kalung, jam tangan, gelang, kaca mata, bros hijab dan cincin)</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                                <input class="form-check-input" type="checkbox" id="switch8_row8" onchange="toggleSwitchLabel(this, 'label_switch8_row8')">
                                <label class="form-check-label" for="switch8_row8" id="label_switch8_row8">Positif</label>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 9 -->
                    <tr>
                        <td class="number">
                            <span>6</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>ID Card dipasang di tempatnya dan terbaca (bagian dada kiri atas atau di saku)</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                                <input class="form-check-input" type="checkbox" id="switch9_row9" onchange="toggleSwitchLabel(this, 'label_switch9_row9')">
                                <label class="form-check-label" for="switch9_row9" id="label_switch9_row9">Positif</label>
                            </div>
                        </td>
                    </tr>

                    <!-- dub-Kelas -->
                    <thead>
                    <tr>
                        <th scope="col" class="dub-kelas"></th>
                        <th scope="col" class="dub-kelas">Bagaimana pakaian TELLER – PRIA yang melayani anda ?</th>
                        <th scope="col" class="dub-kelas"></th>
                    </tr>
                    </thead>

                    <!-- Row 10 -->
                    <tr>
                        <td class="number">
                            <span>1</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Menggunakan seragam perusahaan secara lengkap dan rapi (semua kancing terpasang)</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                                <input class="form-check-input" type="checkbox" id="switch10_row10" onchange="toggleSwitchLabel(this, 'label_switch10_row10')">
                                <label class="form-check-label" for="switch10_row10" id="label_switch10_row10">Positif</label>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 11 -->
                    <tr>
                        <td class="number">
                            <span>2</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Menggunakan seragam perusahaan secara lengkap dan rapi (semua kancing terpasang)</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch11_row11" onchange="toggleSwitchLabel(this, 'label_switch11_row11')">
                            <label class="form-check-label" for="switch11_row11" id="label_switch11_row11">Positif</label>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 12 -->
                    <tr>
                        <td class="number">
                            <span>3</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah Kondisi kemeja dan dasi Teller bersih dan rapi (semua kancing terpasang)</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch12_row12" onchange="toggleSwitchLabel(this, 'label_switch12_row12')">
                            <label class="form-check-label" for="switch12_row12" id="label_switch12_row12">Positif</label>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 13 -->
                    <tr>
                        <td class="number">
                            <span>4</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah Teller dalam berpakaian bersih rapih dan sopan, sesuai dengan ketentuan ?</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch13_row13" onchange="toggleSwitchLabel(this, 'label_switch13_row13')">
                            <label class="form-check-label" for="switch13_row13" id="label_switch13_row13">Positif</label>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 14 -->
                    <tr>
                        <td class="number">
                            <span>5</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Aksesoris tidak lebih dari 3 titik (Ikat Pinggang Formal, Jam Tangan dan Cincin)</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch14_row14" onchange="toggleSwitchLabel(this, 'label_switch14_row14')">
                            <label class="form-check-label" for="switch14_row14" id="label_switch14_row14">Positif</label>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 15 -->
                    <tr>
                        <td class="number">
                            <span>6</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>ID Card dipasang ditempatnya dan terbaca (bagian dada kiri atas atau di saku)</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch15_row15" onchange="toggleSwitchLabel(this, 'label_switch15_row15')">
                            <label class="form-check-label" for="switch15_row15" id="label_switch15_row15">Positif</label>
                            </div>
                        </td>
                    </tr>

                    <!-- sub-kelas -->
                    <thead>
                    <tr>
                        <th scope="col" class="sub-kelas"></th>
                        <th scope="col" class="sub-kelas">SIKAP - TELLER</th>
                        <th scope="col" class="sub-kelas"></th>
                    </tr>
                    </thead>
                    <!-- dub-Kelas -->
                    <thead>
                    <tr>
                        <th scope="col" class="dub-kelas"></th>
                        <th scope="col" class="dub-kelas">Sikap Teller di Awal melayani</th>
                        <th scope="col" class="dub-kelas"></th>
                    </tr>
                    </thead>

                    <!-- Row 16 -->
                    <tr>
                        <td class="number">
                            <span>1</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Menyambut nasabah sambil berdiri, tersenyum & menatap mata nasabah</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch16_row16" onchange="toggleSwitchLabel(this, 'label_switch16_row16')">
                            <label class="form-check-label" for="switch16_row16" id="label_switch16_row16">Positif</label>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 17 -->
                    <tr>
                        <td class="number">
                            <span>2</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Mengucapkan salam (selamat pagi / siang / sore / Assalamualaikum) sambil mengatupkan tangan</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch17_row17" onchange="toggleSwitchLabel(this, 'label_switch17_row17')">
                            <label class="form-check-label" for="switch17_row17" id="label_switch17_row17">Positif</label>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 18 -->
                    <tr>
                        <td class="number">
                            <span>3</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah Teller menyapa dan melakukan <b>Ice Breaking</b> (Apa Kabar?Terima kasih sudah menunggu) kepada nasabah?</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch18_row18" onchange="toggleSwitchLabel(this, 'label_switch18_row18')">
                            <label class="form-check-label" for="switch18_row18" id="label_switch18_row18">Positif</label>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 19 -->
                    <tr>
                        <td class="number">
                            <span>4</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Memperkenalkan diri dan menanyakan nama nasabah (yang belum dikenal) dan langsung menyebutkan nama Anda</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch19_row19" onchange="toggleSwitchLabel(this, 'label_switch19_row19')">
                            <label class="form-check-label" for="switch19_row19" id="label_switch19_row19">Positif</label>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 20 -->
                    <tr>
                        <td class="number">
                            <span>5</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Menyapa nasabah dengan sebutan Pak/Ibu</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch20_row20" onchange="toggleSwitchLabel(this, 'label_switch20_row20')">
                            <label class="form-check-label" for="switch20_row20" id="label_switch20_row20">Positif</label>  
                            </div>
                        </td>
                    </tr>

                    <!-- dub-Kelas -->
                    <thead>
                    <tr>
                        <th scope="col" class="dub-kelas"></th>
                        <th scope="col" class="dub-kelas">Sikap Teller saat melayani</th>
                        <th scope="col" class="dub-kelas"></th>
                    </tr>
                    </thead>

                    <!-- Row 21 -->
                    <tr>
                        <td class="number">
                            <span>1</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Pandangan Teller selalu ke mata nasabah ketika berbicara / ada kontak mata</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch21_row21" onchange="toggleSwitchLabel(this, 'label_switch21_row21')">
                            <label class="form-check-label" for="switch21_row21" id="label_switch21_row21">Positif</label>  
                            </div>
                        </td>
                    </tr>
                    <!-- Row 22 -->
                    <tr>
                        <td class="number">
                            <span>2</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Posisi berdiri Teller selama melayani agak condong / maju ke nasabah</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch22_row22" onchange="toggleSwitchLabel(this, 'label_switch22_row22')">
                            <label class="form-check-label" for="switch22_row22" id="label_switch22_row22">Positif</label>  
                            </div>
                        </td>
                    </tr>

                    <!-- Row 23 -->
                    <tr>
                        <td class="number">
                            <span>3</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Perhatian Teller selalu ke nasabah / tidak mengerjakan pekerjaan lain (bukan transaksi nasabah)</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch23_row23" onchange="toggleSwitchLabel(this, 'label_switch23_row23')">
                            <label class="form-check-label" for="switch23_row23" id="label_switch23_row23">Positif</label>  
                            </div>
                        </td>
                    </tr>

                    <!-- Row 24 -->
                    <tr>
                        <td class="number">
                            <span>4</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Meminta ijin (minta maaf) di awal, <b>jika ada interupsi</b> / (mengucapkan terima kasih sudah menunggu ketika kembali)</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch24_row24" onchange="toggleSwitchLabel(this, 'label_switch24_row24')">
                            <label class="form-check-label" for="switch24_row24" id="label_switch24_row24">Positif</label>  
                            </div>
                        </td>
                    </tr>

                    <!-- Row 25 -->
                    <tr>
                        <td class="number">
                            <span>5</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Menggunakan nama nasabah saat melayani</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch25_row25" onchange="toggleSwitchLabel(this, 'label_switch25_row25')">
                            <label class="form-check-label" for="switch25_row25" id="label_switch25_row25">Positif</label>  
                            </div>
                        </td>
                    </tr>

                    <!-- sub-kelas -->
                    <thead>
                    <tr>
                        <th scope="col" class="sub-kelas"></th>
                        <th scope="col" class="sub-kelas">SKILL - TELLER</th>
                        <th scope="col" class="sub-kelas"></th>
                    </tr>
                    </thead>
                    <!-- Row 26 -->
                    <tr>
                        <td class="number">
                            <span>1</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah Teller menawarkan alternatif transaksi lainnya (transaksi digital transfer via ATM/M Banking/E Channel) ?</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch26_row26" onchange="toggleSwitchLabel(this, 'label_switch26_row26')">
                            <label class="form-check-label" for="switch26_row26" id="label_switch26_row26">Positif</label>  
                            </div>
                        </td>
                    </tr>

                    <!-- Row 27 -->
                    <tr>
                        <td class="number">
                            <span>2</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah Teller menyampaikan informasi apabila biaya transfer debet melalui fasilitas digital (ATM/Mbanking/Echannel) lebih murah/BI Fast ?</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch27_row27" onchange="toggleSwitchLabel(this, 'label_switch27_row27')">
                            <label class="form-check-label" for="switch27_row27" id="label_switch27_row27">Positif</label>  
                            </div>
                        </td>
                    </tr>

                    <!-- Row 28 -->
                    <tr>
                        <td class="number">
                            <span>3</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah Teller menyampaikan informasi apabila proses transfer debet melalui fasilitas (ATM/Mbanking/Echannel) bersama lebih cepat sampai ?</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch28_row28" onchange="toggleSwitchLabel(this, 'label_switch28_row28')">
                            <label class="form-check-label" for="switch28_row28" id="label_switch28_row28">Positif</label>  
                            </div>
                        </td>
                    </tr>

                    <!-- Row 29 -->
                    <tr>
                        <td class="number">
                            <span>4</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah Teller menyampaikan informasi apabila transfer debet melalui fasilitas (ATM/Mbanking/Echannel) dilengkapi dengan layar konfirmasi ?</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch29_row29" onchange="toggleSwitchLabel(this, 'label_switch29_row29')">
                            <label class="form-check-label" for="switch29_row29" id="label_switch29_row29">Positif</label>  
                            </div>
                        </td>
                    </tr>

                    <!-- Row 30 -->
                    <tr>
                        <td class="number">
                            <span>5</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah Teller meminta nasabah memilih untuk menggunakan transaksi digital atau melanjutkan transaksi di Teller ?</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch30_row30" onchange="toggleSwitchLabel(this, 'label_switch30_row30')">
                            <label class="form-check-label" for="switch30_row30" id="label_switch30_row30">Positif</label>  
                            </div>
                        </td>
                    </tr>

                    <!-- Row 31 -->
                    <tr>
                        <td class="number">
                            <span>6</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah Teller meminta slip transfer dan buku tabungan, <b>(KTP DAN ATAU Kartu ATM)</b> dengan kedua tangan terbuka?</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch31_row31" onchange="toggleSwitchLabel(this, 'label_switch31_row31')">
                            <label class="form-check-label" for="switch31_row31" id="label_switch31_row31">Positif</label>  
                            </div>
                        </td>
                    </tr>
                    <!-- Row 32 -->
                    <tr>
                        <td class="number">
                            <span>7</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah Teller memeriksa slip transaksi yang Anda isi ?</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch32_row32" onchange="toggleSwitchLabel(this, 'label_switch32_row32')">
                            <label class="form-check-label" for="switch32_row32" id="label_switch32_row32">Positif</label>  
                            </div>
                        </td>
                    </tr>
                    <!-- Row 33 -->
                    <tr>
                        <td class="number">
                            <span>8</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Teller teliti dalam memperhatikan jumlah dana, tanggal, nominal huruf & angka di slip <b>(KETELITIAN)</b></span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch33_row33" onchange="toggleSwitchLabel(this, 'label_switch33_row33')">
                            <label class="form-check-label" for="switch33_row33" id="label_switch33_row33">Positif</label>  
                            </div>
                        </td>
                    </tr>
                    <!-- Row 34 -->
                    <tr>
                        <td class="number">
                            <span>9</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah Teller melakukan konfirmasi nama nasabah, no.rekening, mata uang dan jumlah uang?</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch34_row34" onchange="toggleSwitchLabel(this, 'label_switch34_row34')">
                            <label class="form-check-label" for="switch34_row34" id="label_switch34_row34">Positif</label>  
                            </div>
                        </td>
                    </tr>
                    <!-- Row 35 -->
                    <tr>
                        <td class="number">
                            <span>10</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah Teller meminta nomor telp pengirim dan penerima yang dapat dihubungi?</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch35_row35" onchange="toggleSwitchLabel(this, 'label_switch35_row35')">
                            <label class="form-check-label" for="switch35_row35" id="label_switch35_row35">Positif</label>  
                            </div>
                        </td>
                    </tr>
                    <!-- Row 36 -->
                    <tr>
                        <td class="number">
                            <span>11</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah Teller menginformasikan biaya transfer debet melalui teler ?</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch36_row36" onchange="toggleSwitchLabel(this, 'label_switch36_row36')">
                            <label class="form-check-label" for="switch36_row36" id="label_switch36_row36">Positif</label>  
                            </div>
                        </td>
                    </tr>
                    <!-- Row 37 -->
                    <tr>
                        <td class="number">
                            <span>12</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah Teller menginformasikan kapan dana diterima oleh rekening dituju ?</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch37_row37" onchange="toggleSwitchLabel(this, 'label_switch37_row37')">
                            <label class="form-check-label" for="switch37_row37" id="label_switch37_row37">Positif</label>  
                            </div>
                        </td>
                    </tr>
                    <!-- Row 38 -->
                    <tr>
                        <td class="number">
                            <span>13</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah Teller meminta nasabah tanda tangan dihadapan Teller ?</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch38_row38" onchange="toggleSwitchLabel(this, 'label_switch38_row38')">
                            <label class="form-check-label" for="switch38_row38" id="label_switch38_row38">Positif</label>  
                            </div>
                        </td>
                    </tr>
                    <!-- Row 39 -->
                    <tr>
                        <td class="number">
                            <span>14</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah Teller meminta ijin pada saat proses transaksi ?</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch39_row39" onchange="toggleSwitchLabel(this, 'label_switch39_row39')">
                            <label class="form-check-label" for="switch39_row39" id="label_switch39_row39">Positif</label>  
                            </div>
                        </td>
                    </tr>
                    <!-- Row 40 -->
                    <tr>
                        <td class="number">
                            <span>15</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah Teller mengucapkan terima kasih atas kesediaan nasabah telah menunggu proses penginputan?</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch40_row40" onchange="toggleSwitchLabel(this, 'label_switch40_row40')">
                            <label class="form-check-label" for="switch40_row40" id="label_switch40_row40">Positif</label>  
                            </div>
                        </td>
                    </tr>
                    <!-- Row 41 -->
                    <tr>
                        <td class="number">
                            <span>16</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah Time Delivery Teller pada saat transaksi transfer debet (hingga nasabah menerima buku tabungan & bukti transfer) sampai dengan 2 menit ?</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch41_row41" onchange="toggleSwitchLabel(this, 'label_switch41_row41')">
                            <label class="form-check-label" for="switch41_row41" id="label_switch41_row41">Positif</label>  
                            </div>
                        </td>
                    </tr>
                    <!-- Row 42 -->
                    <tr>
                        <td class="number">
                            <span>17</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah Teller melakukan Tag On terhadap nasabah contoh : menawarkan ATM tarik tunai, tabungan berjangka (tabungan anak/pensiunan) dll</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch42_row42" onchange="toggleSwitchLabel(this, 'label_switch42_row42')">
                            <label class="form-check-label" for="switch42_row42" id="label_switch42_row42">Positif</label>  
                            </div>
                        </td>
                    </tr>
                    <!-- Row 43 -->
                    <tr>
                        <td class="number">
                            <span>18</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Teller memberikan brosur produk secara spontan (sesuai dengan produk yang ditawarkan)</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch43_row43" onchange="toggleSwitchLabel(this, 'label_switch43_row43')">
                            <label class="form-check-label" for="switch43_row43" id="label_switch43_row43">Positif</label>  
                            </div>
                        </td>
                    </tr>
                    <!-- sub-kelas -->
                    <thead>
                    <tr>
                        <th scope="col" class="sub-kelas"></th>
                        <th scope="col" class="sub-kelas">SIKAP - TELLER</th>
                        <th scope="col" class="sub-kelas"></th>
                    </tr>
                    </thead>
                    <!-- dub-Kelas -->
                    <thead>
                    <tr>
                        <th scope="col" class="dub-kelas"></th>
                        <th scope="col" class="dub-kelas">Sikap Teller mengakhiri layanan</th>
                        <th scope="col" class="dub-kelas"></th>
                    </tr>
                    </thead>
                    <!-- Row 44 -->
                    <tr>
                        <td class="number">
                            <span>1</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Apakah Teller berdiri pada saat mengakhiri pelayanan ?</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch44_row44" onchange="toggleSwitchLabel(this, 'label_switch44_row44')">
                            <label class="form-check-label" for="switch44_row44" id="label_switch44_row44">Positif</label>  
                            </div>
                        </td>
                    </tr>
                    <!-- Row 45 -->
                    <tr>
                        <td class="number">
                            <span>2</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Menawarkan bantuan lain (Ada lagi yang bisa saya bantu ?)</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch45_row45" onchange="toggleSwitchLabel(this, 'label_switch45_row45')">
                            <label class="form-check-label" for="switch45_row45" id="label_switch45_row45">Positif</label>  
                            </div>
                        </td>
                    </tr>
                    <!-- Row 46 -->
                    <tr>
                        <td class="number">
                            <span>3</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Tersenyum & menatap mata nasabah</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch46_row46" onchange="toggleSwitchLabel(this, 'label_switch46_row46')">
                            <label class="form-check-label" for="switch46_row46" id="label_switch46_row46">Positif</label>  
                            </div>
                        </td>
                    </tr>
                    <!-- Row 47 -->
                    <tr>
                        <td class="number">
                            <span>4</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Mengucapkan terima kasih</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch47_row47" onchange="toggleSwitchLabel(this, 'label_switch47_row47')">
                            <label class="form-check-label" for="switch47_row47" id="label_switch47_row47">Positif</label>  
                            </div>
                        </td>
                    </tr>
                    <!-- Row 48 -->
                    <tr>
                        <td class="number">
                            <span>5</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Mengucapkan selamat pagi / siang / sore / Assalamualaikum, sambil mengatupkan tangan</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch48_row48" onchange="toggleSwitchLabel(this, 'label_switch48_row48')">
                            <label class="form-check-label" for="switch48_row48" id="label_switch48_row48">Positif</label>  
                            </div>
                        </td>
                    </tr>
                    <!-- Row 49 -->
                    <tr>
                        <td class="number">
                            <span>6</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Menyebutkan nama nasabah</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch49_row49" onchange="toggleSwitchLabel(this, 'label_switch49_row49')">
                            <label class="form-check-label" for="switch49_row49" id="label_switch49_row49">Positif</label>  
                            </div>
                        </td>
                    </tr>
                    <!-- Row 50 -->
                    <tr>
                        <td class="number">
                            <span>7</span> <!-- Static text instead of input -->
                        </td>
                        <td class="pertanyaan">
                            <span>Farewell Greeting ( Contoh : Selamat beraktivitas / Sukses selalu /ditunggu lagi kedatangannya)</span> <!-- Static text instead of input -->
                        </td>
                        <td class="centang">
                            <div class="form-check form-switch d-inline-block me-3">
                            <input class="form-check-input" type="checkbox" id="switch50_row50" onchange="toggleSwitchLabel(this, 'label_switch50_row50')">
                            <label class="form-check-label" for="switch50_row50" id="label_switch50_row50">Positif</label>  
                            </div>
                        </td>
                    </tr>


                    <!-- Add more rows as needed -->
                </tbody>
            </table>

            <!-- Notes Section -->
            <div class="mt-4">
                <label for="catatan" class="form-label">Catatan:</label>
                <textarea id="catatan" class="form-control" rows="4" placeholder="Tulis catatan kamu di sini"></textarea>
            </div>

            <br><br>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('teller') }}" type="button" class="btn btn-danger btn-lg"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
  <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
  <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z"/>
</svg></a>
        </form>
    </div>

       </Section>


        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Custom JS to toggle switch label -->
<script>
    function toggleSwitchLabel(checkbox, labelId) {
        const label = document.getElementById(labelId);
        if (checkbox.checked) {
            label.textContent = 'Negative';
        } else {
            label.textContent = 'Positif';
        }
    }

    function toggleSidebar() {
        const sidebar = document.querySelector('.sidebar');
        sidebar.style.display = sidebar.style.display === 'block' ? 'none' : 'block';
    }

    document.querySelector('.dropdown-btn').addEventListener('click', function() {
        const submenu = this.nextElementSibling;
        submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
    });

    document.querySelector('.dropdown-btn-1').addEventListener('click', function() {
        const submenu = this.nextElementSibling;
        submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
    });
</script>
    </body>

    </html>
