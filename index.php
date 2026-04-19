<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TractorFix Aranda | Gestión Inteligente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                        url('https://images.unsplash.com/photo-1594495894542-a4e17a73ad94?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }
        .card-feature {
            transition: transform 0.3s ease;
            border: none;
            border-bottom: 4px solid #ffc107;
        }
        .card-feature:hover {
            transform: translateY(-10px);
        }
        .btn-primary { background-color: #004a99; border: none; }
        .text-aranda { color: #ffc107; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><i class="bi bi-gear-fill text-aranda"></i> TRACTOR<span class="text-aranda">FIX</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#ventajas">Ventajas</a></li>
                    <li class="nav-link btn btn-outline-warning ms-lg-3" href="#">Demo Gratis</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section text-center">
        <div class="container">
            <h1 class="display-3 fw-bold mb-3">Tu Taller en la Palma de tu Mano</h1>
            <p class="lead mb-5">Software de gestión para especialistas en maquinaria agrícola. <br> 
            <span class="badge bg-warning text-dark">Lanzamiento exclusivo en Aranda de Duero</span></p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="#contacto" class="btn btn-warning btn-lg px-4 gap-3 fw-bold">Impulsa tu Negocio</a>
                <button type="button" class="btn btn-outline-light btn-lg px-4">Ver Video</button>
            </div>
        </div>
    </header>

    <section id="servicios" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Potencia para tu Emprendimiento</h2>
                <p class="text-muted">Diseñado por y para expertos del sector en la Ribera del Duero.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 p-4 card-feature shadow-sm">
                        <div class="display-5 text-primary mb-3"><i class="bi bi-tools"></i></div>
                        <h4 class="fw-bold">Órdenes de Trabajo</h4>
                        <p class="text-muted">Gestiona reparaciones, recambios y tiempos de mano de obra en segundos.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 p-4 card-feature shadow-sm">
                        <div class="display-5 text-primary mb-3"><i class="bi bi-calendar-check"></i></div>
                        <h4 class="fw-bold">Mantenimiento Preventivo</h4>
                        <p class="text-muted">Alertas automáticas para tus clientes sobre sus próximas revisiones.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 p-4 card-feature shadow-sm">
                        <div class="display-5 text-primary mb-3"><i class="bi bi-graph-up-arrow"></i></div>
                        <h4 class="fw-bold">Control de Inventario</h4>
                        <p class="text-muted">Stock en tiempo real de piezas y suministros agrícolas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-dark text-white text-center">
        <div class="container">
            <h3 class="mb-4">¿Quieres ver cómo funciona en vivo?</h3>
            <p class="mb-4">Únete a nuestra lista de Beta Testers para emprendedores de Aranda.</p>
            <a href="https://wa.me/tu-numero" class="btn btn-success btn-lg">
                <i class="bi bi-whatsapp"></i> Contactar por WhatsApp
            </a>
        </div>
    </section>

    <footer class="py-4 text-center border-top">
        <p class="mb-0 text-muted">&copy; 2026 TractorFix - Innovación desde Aranda de Duero.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>