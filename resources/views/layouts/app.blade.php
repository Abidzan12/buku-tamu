<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            background-color: #f0f2f5;
        }

        .sidebar {
            width: 250px;
            background-color: #111827;
            color: #fff;
            height: 100vh;
            position: fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: width 0.3s;
        }

        .sidebar.collapsed {
            width: 70px;
        }

        .sidebar-logo {
            text-align: center;
            font-size: 1.8rem;
            margin: 20px 0;
        }

        .sidebar-menu {
            flex-grow: 1;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            padding-top: 10px;
         }

        .menu-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #f1f1f1;
            transition: opacity 0.3s;
        }

        .sidebar.collapsed .menu-title {
            opacity: 0;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 90%;
            padding: 10px 15px;
            margin: 5px 0;
            text-decoration: none;
            color: #d1d5db;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .sidebar-menu a i {
            min-width: 24px;
            margin-right: 10px;
            text-align: center;
        }

        .sidebar-menu a span {
            white-space: nowrap;
            transition: opacity 0.3s, width 0.3s;
        }

        .sidebar.collapsed .sidebar-menu a span {
            opacity: 0;
            width: 0;
            overflow: hidden;
        }

        .sidebar-menu a:hover {
            background-color: #374151;
            color: #fff;
        }

        .sidebar-menu a.active {
            background-color: #f59e0b;
            color: #111827;
        }

        .submenu {
            width: 100%;
            padding-left: 10px;
        }

        .content {
            margin-left: 250px;
            padding: 30px;
            transition: margin-left 0.3s;
            width: calc(100% - 250px);
        }

        .sidebar.collapsed ~ .content {
            margin-left: 70px;
            width: calc(100% - 70px);
        }

        .toggle-btn {
            position: fixed;
            top: 20px;
            left: 260px;
            z-index: 1001;
            background: #111827;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 6px;
            cursor: pointer;
            transition: left 0.3s;
        }

        .sidebar.collapsed ~ .toggle-btn {
            left: 80px;
        }
    </style>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-logo">
            <i class="fa-brands fa"></i>
        </div>
        <div class="sidebar-menu">
            
            <a href="{{ url('/home') }}" class="active"><i class="fa fa-gauge"></i> <span>Dashboard</span></a>
            <div class="submenu">
                <a href="{{ route('tamu.create') }}"><i class="fa fa-user-plus"></i> <span>Tambah Tamu</span></a>
                <a href="{{ route('tamu.index') }}"><i class="fa fa-list"></i> <span>Daftar Tamu</span></a>
            </div>
        </div>
    </div>

    <button class="toggle-btn" onclick="toggleSidebar()"><i class="fa fa-bars"></i></button>

    <div class="content" id="mainContent">
        @yield('content')
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('mainContent');
            const button = document.querySelector('.toggle-btn');
            sidebar.classList.toggle('collapsed');
        }
    </script>
</body>
</html>
