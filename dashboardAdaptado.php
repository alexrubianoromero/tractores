<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - TractorFix Aranda</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <style>
        :root { 
            --sidebar-width: 260px; 
            --primary-dark: #212529;
            --accent-warning: #ffc107;
            --bg-light: #f4f6f9;
        }

        body { 
            background-color: var(--bg-light); 
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            overflow-x: hidden;
        }

        /* --- SIDEBAR MEJORADO --- */
        .sidebar { 
            width: var(--sidebar-width); 
            height: 100vh; 
            position: fixed; 
            top: 0;
            left: 0;
            background: var(--primary-dark); 
            color: white;
            padding-top: 20px;
            z-index: 1100; /* Por encima de todo */
            transition: transform 0.3s ease-in-out;
        }

        /* En móvil, el sidebar empieza escondido a la izquierda */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            /* Clase que activa el JS */
            .sidebar.active {
                transform: translateX(0);
            }
        }

        .main-content { 
            margin-left: var(--sidebar-width); 
            padding: 30px; 
            transition: margin 0.3s;
        }

        @media (max-width: 768px) {
            .main-content { margin-left: 0; padding: 15px; }
        }

        /* --- HEADER MÓVIL --- */
        .mobile-header {
            background: var(--primary-dark);
            padding: 12px 20px;
            display: none;
            z-index: 1000;
        }

        @media (max-width: 768px) {
            .mobile-header { display: flex; justify-content: space-between; align-items: center; position: sticky; top: 0; }
        }

        /* --- ELEMENTOS DE NAVEGACIÓN --- */
        .nav-link { 
            color: #adb5bd; 
            padding: 12px 20px;
            margin: 4px 15px;
            border-radius: 10px;
            transition: all 0.2s;
        }
        .nav-link:hover, .nav-link.active { 
            color: var(--accent-warning); 
            background: rgba(255, 193, 7, 0.15); 
        }

        /* --- TARJETAS --- */
        .card-stat { 
            border: none; 
            border-radius: 18px; 
            border-bottom: 4px solid transparent;
            transition: transform 0.2s;
        }
        .card-stat:hover { transform: translateY(-3px); }

        /* Capa oscura cuando el menú está abierto en móvil */
        .sidebar-overlay {
            display: none;
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 1050;
        }
        .sidebar-overlay.active { display: block; }

        /* Spinner de carga suave */
        .loader-wrapper {
            display: none; /* Oculto por defecto */
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2000;
        }

        /* Efecto de "pulsación" en los enlaces */
        .nav-link:active {
            transform: scale(0.95);
            transition: 0.1s;
        }
    </style>
</head>
<body>
    <div id="loader" class="loader-wrapper">
        <div class="spinner-border text-warning" role="status" style="width: 3rem; height: 3rem;">
            <span class="visually-hidden">Cargando...</span>
        </div>
    </div>

    <div class="sidebar-overlay" id="overlay" onclick="toggleMenu()"></div>

    <div class="mobile-header shadow">
        <span class="text-warning fw-bold fs-5"><i class="bi bi-gear-fill"></i> TractorFix</span>
        <button class="btn btn-dark border-secondary" onclick="toggleMenu()">
            <i class="bi bi-list fs-3"></i>
        </button>
    </div>

    <aside class="sidebar shadow" id="sidebar">
        <div class="px-4 mb-4 d-none d-md-block">
            <h4 class="fw-bold text-warning mb-0"><i class="bi bi-gear-fill"></i> TractorFix</h4>
            <small class="text-muted">Gestión de Talleres v1.0</small>
        </div>
        
        <nav class="nav flex-column">
            <a class="nav-link active" href="#"><i class="bi bi-speedometer2 me-3"></i>Panel de Control</a>
            <a class="nav-link" href="#"><i class="bi bi-truck me-3"></i>Fichas Técnicas</a>
            <a class="nav-link" href="#"><i class="bi bi-tools me-3"></i>Órdenes de Trabajo</a>
            <a class="nav-link" href="#"><i class="bi bi-box-seam me-3"></i>Almacén</a>
            <a class="nav-link" href="#"><i class="bi bi-people me-3"></i>Clientes</a>
            <hr class="mx-4 text-secondary">
            <a class="nav-link text-danger mt-auto d-md-none" href="#" onclick="toggleMenu()">
                <i class="bi bi-x-circle me-3"></i>Cerrar Menú
            </a>
        </nav>
    </aside>

    <main class="main-content">
        <div class="row align-items-center mb-4">
            <div class="col-8">
                <h2 class="fw-bold m-0">Estado del Taller</h2>
                <p class="text-muted d-none d-sm-block">Vista rápida de las operaciones en Aranda.</p>
            </div>
            <div class="col-4 text-end">
                <button class="btn btn-warning fw-bold shadow-sm px-3" data-bs-toggle="modal" data-bs-target="#modalNuevaOrden">
                    <i class="bi bi-plus-lg"></i> <span class="d-none d-md-inline">Nueva Orden</span>
                </button>
                <!-- <button class="btn btn-warning fw-bold shadow-sm px-3">
                    <i class="bi bi-plus-lg"></i> <span class="d-none d-md-inline">Nueva Orden</span>
                </button> -->
            </div>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card card-stat bg-white p-3 shadow-sm" style="border-color: #0d6efd;">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted text-uppercase fw-bold">En Taller</small>
                            <h2 class="fw-bold mb-0">12</h2>
                        </div>
                        <i class="bi bi-wrench-adjustable fs-1 text-primary opacity-50"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card card-stat bg-white p-3 shadow-sm" style="border-color: #198754;">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted text-uppercase fw-bold">Terminados</small>
                            <h2 class="fw-bold mb-0">5</h2>
                        </div>
                        <i class="bi bi-check-circle fs-1 text-success opacity-50"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card card-stat bg-white p-3 shadow-sm" style="border-color: #dc3545;">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted text-uppercase fw-bold">Pendiente Pieza</small>
                            <h2 class="fw-bold mb-0">3</h2>
                        </div>
                        <i class="bi bi-clock-history fs-1 text-danger opacity-50"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card card-stat bg-white p-3 shadow-sm" style="border-color: #ffc107;">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted text-uppercase fw-bold">Facturación</small>
                            <h2 class="fw-bold mb-0">8.42k€</h2>
                        </div>
                        <i class="bi bi-currency-euro fs-1 text-warning opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border-0 shadow-sm rounded-4">
            <div class="table-responsive p-3">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr class="small text-muted">
                            <th>CLIENTE</th>
                            <th>MAQUINARIA</th>
                            <th class="d-none d-lg-table-cell text-center">ESTADO</th>
                            <th class="text-end">ACCIÓN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Bodegas Aranda S.L.</strong><br><small class="text-muted">ID: #4402</small></td>
                            <td>John Deere 6120M</td>
                            <td class="d-none d-lg-table-cell text-center">
                                <span class="badge bg-info text-dark rounded-pill px-3">En Proceso</span>
                            </td>
                            <td class="text-end">
                                <button class="btn btn-sm btn-light border"><i class="bi bi-eye"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script>

        function toggleMenu() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        
        sidebar.classList.toggle('active');
        overlay.classList.toggle('active');
    }

    // Control de navegación
    document.querySelectorAll('.sidebar .nav-link').forEach(link => {
        link.addEventListener('click', (e) => {
            // 1. Mostrar spinner de carga
            const loader = document.getElementById('loader');
            loader.style.display = 'block';

            // 2. Si estamos en móvil, cerramos el menú
            if (window.innerWidth <= 768) {
                toggleMenu();
            }

            // 3. Simular carga de datos (luego lo quitas cuando tengas PHP real)
            setTimeout(() => {
                loader.style.display = 'none';
            }, 800);
        });
    });
        // // 1. Función principal para abrir/cerrar
        // function toggleMenu() {
        //     const sidebar = document.getElementById('sidebar');
        //     const overlay = document.getElementById('overlay');
            
        //     sidebar.classList.toggle('active');
        //     overlay.classList.toggle('active');
        // }

        // // 2. MAGIA: Cerrar automáticamente al hacer clic en una opción
        // document.querySelectorAll('.sidebar .nav-link').forEach(link => {
        //     link.addEventListener('click', () => {
        //         // Solo actuamos si estamos en móvil (pantalla < 768px)
        //         if (window.innerWidth <= 768) {
        //             toggleMenu();
        //         }
        //     });
        // });




        // function toggleMenu() {
        //     const sidebar = document.getElementById('sidebar');
        //     const overlay = document.getElementById('overlay');
            
        //     sidebar.classList.toggle('active');
        //     overlay.classList.toggle('active');
        // }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <div class="modal fade" id="modalNuevaOrden" tabindex="-1" aria-labelledby="modalNuevaOrdenLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 20px;">
                
                <div class="modal-header bg-dark text-white" style="border-radius: 20px 20px 0 0;">
                    <h5 class="modal-title fw-bold" id="modalNuevaOrdenLabel">
                        <i class="bi bi-file-earmark-plus text-warning me-2"></i>Nueva Orden de Trabajo
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body p-4">
                    <form id="formNuevaOrden" action="guardar_orden.php" method="POST" enctype="multipart/form-data">
                        
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted">Cliente / Agricultor</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-person"></i></span>
                                    <select class="form-select border-start-0 bg-light" name="cliente_id" required>
                                        <option value="" selected disabled>Seleccionar cliente...</option>
                                        <option value="1">Bodegas Aranda S.L.</option>
                                        <option value="2">Agrícola Ribera</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted">Maquinaria / Tractor</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-truck"></i></span>
                                    <select class="form-select border-start-0 bg-light" name="tractor_id" required>
                                        <option value="" selected disabled>Seleccionar tractor...</option>
                                        <option value="101">John Deere 6120M</option>
                                        <option value="102">New Holland T6</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <label class="form-label small fw-bold text-muted">Descripción del Problema</label>
                                <textarea class="form-control bg-light" name="descripcion" rows="3" placeholder="Ej: Ruido en la transmisión o pérdida de fuerza en el hidráulico..." required></textarea>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted">Prioridad</label>
                                <div class="d-flex gap-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="prioridad" id="prioNormal" value="normal" checked>
                                        <label class="form-check-label" for="prioNormal">Normal</label>
                                    </div>
                                    <div class="form-check text-danger">
                                        <input class="form-check-input" type="radio" name="prioridad" id="prioAlta" value="alta">
                                        <label class="form-check-label fw-bold" for="prioAlta text-danger">¡Urgente!</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 text-end">
                                <label class="btn btn-outline-secondary btn-sm w-100 mt-2">
                                    <i class="bi bi-camera me-2"></i> Adjuntar Foto de Avería
                                    <input type="file" name="foto_averia" hidden accept="image/*" capture="environment">
                                </label>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="d-flex justify-content-end gap-2">
                            <button type="button" class="btn btn-light fw-bold px-4" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-warning fw-bold px-4 shadow-sm">
                                <i class="bi bi-check-lg me-1"></i> Abrir Orden
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>