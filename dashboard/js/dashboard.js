function mostrar()
{
    alert('mostrar aviso');
}



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