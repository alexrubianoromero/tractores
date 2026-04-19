<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TractorFix Mobile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body { background-color: #f4f7f6; padding-bottom: 70px; } /* Espacio para el menú inferior */
        
        /* Encabezado superior */
        .header-mobile {
            background: #212529;
            color: white;
            padding: 15px;
            border-radius: 0 0 20px 20px;
            margin-bottom: 20px;
        }

        /* Tarjetas de resumen */
        .stat-card {
            border: none;
            border-radius: 15px;
            padding: 15px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }

        /* Menú inferior tipo App */
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
        .nav-item-mobile {
            text-align: center;
            color: #6c757d;
            text-decoration: none;
            font-size: 0.75rem;
        }
        .nav-item-mobile.active { color: #004a99; fw-bold; }
        .nav-item-mobile i { font-size: 1.4rem; display: block; }

        /* Estilo de la lista de tareas */
        .job-card {
            background: white;
            border-radius: 12px;
            margin-bottom: 12px;
            padding: 15px;
            border-left: 5px solid #ffc107;
        }
    </style>
</head>
<body>

    <div class="header-mobile shadow-sm">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <small class="text-warning">Hola, Administrador</small>
                <h5 class="mb-0">TractorFix Aranda</h5>
            </div>
            <div class="position-relative">
                <i class="bi bi-bell fs-4"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.5rem;">3</span>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="d-flex overflow-auto pb-3 mb-2" style="gap: 15px; scrollbar-width: none;">
            <div class="stat-card bg-white text-center" style="min-width: 120px;">
                <span class="text-muted small">Activos</span>
                <h4 class="fw-bold mb-0">12</h4>
            </div>
            <div class="stat-card bg-white text-center" style="min-width: 120px;">
                <span class="text-muted small">Listos</span>
                <h4 class="fw-bold text-success mb-0">5</h4>
            </div>
            <div class="stat-card bg-white text-center" style="min-width: 120px;">
                <span class="text-muted small">Pendientes</span>
                <h4 class="fw-bold text-danger mb-0">3</h4>
            </div>
        </div>

        <h6 class="fw-bold mb-3 mt-4">TRABAJOS EN CURSO</h6>

        <div class="job-card shadow-sm">
            <div class="d-flex justify-content-between">
                <span class="