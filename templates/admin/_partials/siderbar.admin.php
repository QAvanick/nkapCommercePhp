<style>
        .sidebar {
            height: 100vh;
            background-color: black;
            /* width: 200px; */
            top: 0;
            left: 0;
            padding: 15px;
        }

        .sidebar .nav-link {
            color: white;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="sidebar d-flex flex-column">
        <h4 class="text-white"><i class="fa-solid fa-house"></i>Menu</h4>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a class="nav-link" href="./dashbord.php"><i class="fa-solid fa-gauge"></i> Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./user.php"><i class="fa-solid fa-user"></i> Users</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="./category_detail.php"><i class="fa-solid fa-clipboard"></i> categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./prodocs_index.php"><i class="fa-solid fa-shop"></i> Produits</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./subscribe.admin.php"><i class="fa-solid fa-envelope"></i> Liste des emails d'abonnés</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./subscribe.php"><i class="fa-solid fa-envelope"></i> Newsletter</a>
            </li>
        </ul>
    </div>