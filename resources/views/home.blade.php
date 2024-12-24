<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>TRANG CHỦ</title>
   
    <script src="color-modes.js"></script>
    <!-- Bootstrap 5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Iconos de bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        body {
            height: 100%;
        }

        aside {
            position: fixed;
            overflow: auto;
            height: calc(100vh - 68px);
        }

        main {
            position: relative;
            overflow: auto;
            margin-left: auto;
        }

        #sidebarshow {
            display: none;
        }

        @media screen and (max-width: 575px) {
            #sidebarshow {
                display: inline;
            }

            #sidebartoggle {
                display: none;
            }
        }

        .fixed-bottom-end {
            position: fixed;
            bottom: 10px;
            left: 10px;
            z-index: 1050;
        }

        body {
            margin-top: 20px;
        }

        .footer_area {
            position: relative;
            z-index: 1;
            padding: 60px;
        }

        ol li,
        ul li {
            list-style: none;
        }

        ol,
        ul {
            margin: 0;
            padding: 0;
        }
    </style>

</head>

<body class="bg-body-tertiary">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="bootstrap" viewBox="0 0 118 94">
            <title>SALES MANAGEMENT</title>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z">
            </path>
        </symbol>
    </svg>
    <aside class="collapse show collapse-horizontal col-sm-2 p-3 border-end bg-body-tertiary" id="collapseWidthExample">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <i class="bi bi-cart-fill" style="font-size: 40px;"></i>
            <span class="d-print-block">SALES MANAGEMENT</span>
        </a>

        <hr>

        <ul class="nav nav-pills flex-column mb-auto">
            <li>
                <a href="{{route('home')}}" class="nav-link link-body-emphasis">
                    <p class="d-flex align-items-center" style="position:fixed;">
                        <i class="bi bi-house-door" style="font-size: 20px;"></i>
                        <span class="ms-2">Home</span>
                    </p><br>
                </a>
            </li>
            <li>
            <a href="{{route('products.index')}}" class="nav-link link-body-emphasis">
                <p class="d-flex align-items-center" style="position:fixed;">
                <i class="bi bi-box2" style="font-size: 20px;"></i>
                <span class="ms-2">Products</span>
                </p><br>
            </a>

            </li>

            <li>
                <a href="{{route('customers.index')}}" class="nav-link link-body-emphasis">
                    <p class="d-flex align-items-center" style="position:fixed;">
                        <i class="bi bi-person" style="font-size: 20px;"></i>
                        <span class="ms-2">Customers</span>
                    </p><br>
                </a>
            </li>
            <li>
            <a href="{{ route('orders.index') }}"  class="nav-link link-body-emphasis">
                    <p class="d-flex align-items-center" style="position:fixed;">
                        <i class="bi bi-cart-check" style="font-size: 20px;"></i>
                        <span class="ms-2">Orders</span>
                    </p><br>
                </a>
            </li>
            <li>
            
            </div>
    </aside>
    <main class="col-sm-10 bg-body-tertiary" id="main">
        <div class="container-fluid">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
                id="title">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-outline-secondary" id="sidebartoggle">
                            <i class="bi bi-list"></i>
                        </button>
                        <button type="button" class="btn btn-outline-secondary" id="sidebarshow">
                            <i class="bi bi-arrow-bar-left"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer_area">
        <div class="container">
            <div class="row">
               
                <div class="col-md-6">
         
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
