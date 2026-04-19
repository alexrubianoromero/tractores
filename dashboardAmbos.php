<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TractorFix Multiplataforma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root { --primary-dark: #212529; --accent: #ffc107; }
        body { background-color: #f8f9fa; }

        /* --- CONFIGURACIÓN PARA ESCRITORIO (PC) --- */
        @media (min-width: 992px) {
            .sidebar {
                position: fixed;
                top: 0;
                left: 0;
                height: 100vh;
                width: 240px;
                background: var(--primary-dark);
                padding-top: 20px;
                z-index: 1000;
            }
            .main-content { margin-left: 240px; padding: 40px; }
            .bottom-nav { display: none; } /* Ocultar menú móvil en PC */
            .mobile-header { display: none; }
        }

        /* --- CONFIGURACIÓN PARA MÓVIL --- */
        @media (max-width: 991px) {
            .sidebar { display: none; } /* Ocultar sidebar en móvil */
            .main-content { padding: 15px; padding-bottom: 80px; }
            .bottom-nav {
                position: fixed;
                bottom: 0;
                width: 100%;
                background: white;
                display: flex;
                justify-content: space-around;
                padding: 10px 0;
                border-top: 1px solid #dee2e6;
                z-index: 1000;
            }
            .desktop-only { display: none !important; } /* Ocultar tablas complejas */
        }

        /* Estilos Comunes */
        .nav-link { color: #adb5bd; padding: 12px 20px; }
        .nav-link.active { color: var(--accent); background: rgba(255,193,7,0.1); }
        .card-custom { border: none; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        .nav-item-mobile { text-align: center; color: #6c757d; text-decoration: none; font-size: 0.7rem; }
        .nav-item-mobile.active { color: #004a99; }
        .nav-item-mobile i { font-size: 1.3rem; display: block; }
    </style>
</head>
<body>

    <div class="sidebar">
        <div class="px-4 mb-4 text-white">
            <h4 class="fw-bold text-warning"><i class="bi bi-gear-fill"></i> TractorFix</h4>
            <small class="opacity-50">Aranda de Duero</small>
        </div>
        <nav class="nav flex-column">
            <a class="nav-link active" href="#"><i class="bi bi-house-door me-2"></i> Inicio</a>
            <a class="nav-link" href="#"><i class="bi bi-truck me-2"></i> Tractores</a>
            <a class="nav-link" href="#"><i class="bi bi-tools me-2"></i> Reparaciones</a>
            <a class="nav-link" href="#"><i class="bi bi-people me-2"></i> Clientes</a>
        </nav>
    </div>

    <div class="mobile-header bg-dark text-white p-3 d-lg-none">
        <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold">TractorFix Aranda</span>
            <i class="bi bi-person-circle fs-4"></i>
        </div>
    </div>

    <main class="main-content">
        <div class="container-fluid">
            
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold mb-0">Panel de Control</h2>
                <button class="btn btn-warning fw-bold shadow-sm">+ <span class="d-none d-sm-inline">Nueva Orden</span></button>
            </div>

            <div class="row g-3 mb-4">
                <div class="col-6 col-lg-3">
                    <div class="card card-custom p-3 bg-white">
                        <small class="text-muted d-block text-uppercase small">Activos</small>
                        <span class="h4 fw-bold">12</span>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="card card-custom p-3 bg-white">
                        <small class="text-muted d-block text-uppercase small">Listos</small>
                        <span class="h4 fw-bold text-success">5</span>
                    </div>
                </div>