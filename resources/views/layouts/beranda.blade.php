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
            width: 100%; /* Full width of the viewport */
            margin-left: 0; /* No margin to the left */
            padding: 20px 0; /* Adjust padding as needed */
            background-color: white;
        }

        #logo {
            display: block;
            max-height: 100px; /* Adjust logo height */
            max-width: calc(100% + 20rem);
            margin: 0 auto; /* Center logo if necessary */
        }

        .logo {
            text-align: center; /* Center content within the logo section */
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
            max-width: 100%;  /* Image scales to fit within its container */
            max-height: 70px;  /* Set the maximum height */
            height: auto;  /* Keep aspect ratio */
            width: auto;
            display: block;  /* Ensures the image is treated as a block element */
            margin-left: 270px;
        }

        .sidebar img {
            margin-top : 70px ;
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
    /* Ensure the toggle button is visible on mobile screens */
    .toggle-btn {
        display: block; /* Show toggle button on mobile */
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
    /* Hide the toggle button on larger screens */
    .toggle-btn {
        display: none; /* Hide menu button on desktop */
    }
}
    </style>
</head>
<body>

    <!-- Toggle Button for Mobile -->
    <button class="toggle-btn" onclick="toggleSidebar()">☰ Menu</button>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- profile -->
        <img src="{{ asset(path: 'images/image-removebg-preview (6).png') }}" alt="">
        <p>ADMIN 1</p>


          <!-- Dropdown Button -->
          <button class="dropdown-btn">KERTAS KERJA FRONTLINE
            <i class="fa fa-caret-down"></i>
        </button>
        <!-- Dropdown Menu -->
        <div class="submenu">
            <a href="{{ route('teller') }}">TELLER</a>
            <a href="{{ route('customer_service') }}">CUSTOMER SERVICE</a>
            <a href="#satpam">SATPAM</a>
        </div>

<!-- divider -->

         <!-- Dropdown Button -->
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

        // Toggle the submenu when the dropdown button is clicked
        document.querySelector('.dropdown-btn').addEventListener('click', function() {
            const submenu = this.nextElementSibling;
            submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
        });
    </script>   

            <!-- Custom JS to toggle dropdown -->
            <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.style.display = sidebar.style.display === 'block' ? 'none' : 'block';
        }

        // Toggle the submenu when the dropdown button is clicked
        document.querySelector('.dropdown-btn-1').addEventListener('click', function() {
            const submenu = this.nextElementSibling;
            submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
        });
    </script>   


    

</body>
</html>
