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

        /* Form styling */
        .form-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding-top: 20px;
        }

        #button {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 200px ;
            padding-top: 15rem ;
        }

        #plus {
            justify-content: center;
            align-items: center;
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
                <a href="{{ route('teller') }}">TELLER</a>
                <a href="{{ route('customer_service') }}" class="active">CUSTOMER SERVICE</a>
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

        <section id="button">
        <a href="{{ route('customerservice_forum') }}" type="button" class="btn btn-success btn-lg"><svg xmlns="http://www.w3.org/2000/svg" id="plus" width="16" height="16"  fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/>
    </svg></a>
        </section>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- Custom JS to toggle dropdown -->
        <script>
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
