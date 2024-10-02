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

        /* MENU */

        #menu {
            max-width: 100%;
            max-height: 100%;
            width: 40rem;
            margin-top: 28px;
            margin-left: 19.5rem;
            width: 70rem;
            height: 10rem;
            border-radius: 25px;
        }

        .container-menu {
            background-color: white ;
        }

        .menu h2{
            padding-top: 50px;
            padding-left: 20px;
        }

        
        .menu a {
            color: black;
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

        /* .menu img {
            max-width: 100%;
            max-height: 100%;
            width: 30rem;
            height: 10rem;
            display: block;
            justify-content: center;
            align-items: center;
            margin-left: 38rem;
        } */

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

        .form-select {
            width: 20rem;
        }

        #select {
            align-items: center;
            justify-content: center;
            background-color: gray;
        }

        .all-select {
            margin-left: 13.7rem;
        }

        .selection {
    display: flex;
    justify-content: center;
    gap: 20px; /* Space between columns */
}

.selection .selection-group {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 23rem; /* Adjust width for consistency */
}

.selection-group h2 {
    margin-bottom: 10px;
    font-size: 18px;
    text-align: center;
}

.form-select {
    width: 100%; /* Make select fill the width of the parent */
}

.submit-selection-button {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 20px;
    margin-right: 34.5rem;
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

<!-- 
        <section id="menu" class="container-menu">
            <div class="menu">
                <img src="{{ asset('images/group3.png') }}" alt="Logo Image">
            </div>
        </section> -->

        <br> 

        <section id="menu" class="container-menu">
            <div class="menu">
                <a href="{{ route('teller_forum') }}" style="text-decoration: none;"><h2>TEST 1</h2></a>
            </div>
        </section>

        <section id="menu" class="container-menu">
            <div class="menu">
                <a href="{{ route('teller_forum_2') }}" style="text-decoration: none;"><h2>TEST 2</h2></a>
            </div>
        </section>

        <section id="menu" class="container-menu">
            <div class="menu">
                <a href="{{ route('teller_forum_3') }}" style="text-decoration: none;"><h2>TEST 3</h2></a>
            </div>
        </section>

        <section id="menu" class="container-menu">
            <div class="menu">
                <a href="{{ route('teller_forum_4') }}" style="text-decoration: none;"><h2>TEST 4</h2></a>
            </div>
        </section>

        <section id="menu" class="container-menu">
            <div class="menu">
                <a href="{{ route('teller_forum_5') }}" style="text-decoration: none;"><h2>TEST 5</h2></a>
            </div>
        </section>

        <br><br><br>

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
