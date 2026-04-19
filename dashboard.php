<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - TractorFix Aranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root { --sidebar-width: 250px; --primary-color: #004a99; }
        body { background-color: #f8f9fa; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        
        /* Sidebar Estilo Profesional */
        .sidebar { 
            width: var(--sidebar-width); 
            height: 100vh; 
            position: fixed; 
            background: #212529; 
            color: white;
            padding-top: 20px;
        }
        .main-content { margin-left: var(--sidebar-width); padding: 30px; }
        
        .nav-link { color: #adb5bd; transition: 0.3s; margin-bottom: 5px; }
        .nav-link:hover, .nav-link.active { color: #ffc107; background: rgba(255,193,7,0.1); }
        
        .card-stat { border: none; border-radius: 15px; transition: 0.3s; }
        .card-stat:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1); }
        
        .status-badge { font-size: 0.8rem; padding: 5px 12px; border-radius: 20px; }
    </style>
</head>
<body>

    <div class="sidebar d-none d-md-block">
        <div class="px-4 mb-4">
            <h4 class="fw-bold text-warning"><i class="bi bi-gear-fill"></i> TractorFix</h4>
            <small class="text-muted">Aranda de Duero v1.0</small>
        </div>
        <nav class="nav flex-column px-3">
            <a class="nav-link active" href="#"><i class="bi bi-speedometer2 me-2"></i> Panel Principal</a>
            <a class="nav-link" href="#"><i class="bi bi-truck me-2"></i> Flota de Tractores</a>
            <a class="nav-link" href="#"><i class="bi bi-tools me-2"></i> Órdenes Activas</a>
            <a class="nav-link" href="#"><i class="bi bi-box-seam me-2"></i> Inventario / Stock</a>
            <a class="nav-link" href="#"><i class="bi bi-people me-2"></i> Clientes (Agricultores)</a>
            <hr class="text-secondary">
            <a class="nav-link" href="#"><i class="bi bi-file-earmark-bar-graph me-2"></i> Reportes</a>
        </nav>
    </div>

    <main class="main-content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold">Resumen del Taller</h2>
                <p class="text-muted">Estado actual de las reparaciones hoy.</p>
            </div>
            <button class="btn btn-warning fw-bold"><i class="bi bi-plus-lg"></i> Nueva Orden</button>
        </div>

        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card card-stat bg-white p-3 shadow-sm">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="text-muted">En Reparación</h6>
                            <h3 class="fw-bold">12</h3>
                        </div>
                        <div class="fs-1 text-primary"><i class="bi bi-wrench-adjustable"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-stat bg-white p-3 shadow-sm">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="text-muted">Listos para Entrega</h6>
                            <h3 class="fw-bold">5</h3>
                        </div>
                        <div class="fs-1 text-success"><i class="bi bi-check-circle"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-stat bg-white p-3 shadow-sm">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="text-muted">Esperando Piezas</h6>
                            <h3 class="fw-bold">3</h3>
                        </div>
                        <div class="fs-1 text-danger"><i class="bi bi-clock-history"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-stat bg-white p-3 shadow-sm">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="text-muted">Facturación Mes</h6>
                            <h3 class="fw-bold">8.420€</h3>
                        </div>
                        <div class="fs-1 text-warning"><i class="bi bi-currency-euro"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3">
                <h5 class="mb-0 fw-bold">Seguimiento de Maquinaria</h5>
            </div>
            <div class="table-responsive p-3">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Cliente</th>
                            <th>Modelo Tractor</th>
                            <th>Problema / Servicio</th>
                            <th>Prioridad</th>
                            <th>Estado</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Bodegas Aranda S.L.</strong></td>
                            <td>John Deere 6120M</td>
                            <td>Revisión Hidráulica</td>
                            <td><span class="badge bg-danger">Alta</span></td>
                            <td><span class="status-badge bg-info text-dark">Desmontando</span></td>
                            <td><button class="btn btn-sm btn-outline-primary">Detalles</button></td>
                        </tr>
                        <tr>
                            <td><strong>Agrícola Rib