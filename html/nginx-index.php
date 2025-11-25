<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor Nginx - Proyecto Docker</title>
    <style>
        :root {
            --primary: #27ae60;
            --secondary: #2ecc71;
            --accent: #e67e22;
            --light: #ecf0f1;
            --dark: #2c3e50;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            min-height: 100vh;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        header {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .logo h1 {
            color: var(--primary);
            font-size: 1.5rem;
        }
        
        .hero {
            padding: 100px 0;
            text-align: center;
            color: white;
        }
        
        .hero h2 {
            font-size: 3rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto 2rem;
        }
        
        .btn {
            display: inline-block;
            background-color: var(--accent);
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        
        .btn:hover {
            background-color: #d35400;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .features {
            padding: 80px 0;
            background-color: white;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            color: var(--primary);
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .feature-card {
            background-color: var(--light);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
        }
        
        .feature-card h3 {
            color: var(--secondary);
            margin-bottom: 15px;
        }
        
        .performance {
            background-color: var(--primary);
            color: white;
            padding: 60px 0;
            text-align: center;
        }
        
        .performance-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .stat {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 20px;
        }
        
        .stat h3 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: var(--secondary);
        }
        
        .info-panel {
            background-color: var(--dark);
            color: white;
            padding: 60px 0;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .info-item {
            text-align: center;
        }
        
        .info-item h3 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: var(--secondary);
        }
        
        footer {
            background-color: var(--dark);
            color: white;
            padding: 30px 0;
            text-align: center;
        }
        
        .server-info {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 20px;
            margin-top: 30px;
            display: inline-block;
        }
        
        .tech-badge {
            display: inline-block;
            background-color: var(--secondary);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            margin: 5px;
            font-size: 0.8rem;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1>Nginx Docker Server</h1>
            </div>
        </div>
    </header>
    
    <section class="hero">
        <div class="container">
            <h2>Servidor Web Nginx</h2>
            <p>Alto rendimiento y eficiencia para aplicaciones web modernas</p>
            <a href="#features" class="btn">Descubre más</a>
        </div>
    </section>
    
    <section class="features" id="features">
        <div class="container">
            <h2 class="section-title">Ventajas de Nginx</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <h3>Alto Rendimiento</h3>
                    <p>Arquitectura basada en eventos que maneja miles de conexiones simultáneas con mínimo uso de recursos.</p>
                </div>
                <div class="feature-card">
                    <h3>Balanceo de Carga</h3>
                    <p>Capacidades avanzadas de balanceo de carga para distribuir tráfico entre múltiples servidores.</p>
                </div>
                <div class="feature-card">
                    <h3>Caché Eficiente</h3>
                    <p>Sistema de caché que acelera la entrega de contenido estático y dinámico.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="performance">
        <div class="container">
            <h2>Optimizado para Rendimiento</h2>
            <p>Nginx está diseñado para ofrecer el máximo rendimiento incluso bajo cargas pesadas</p>
            
            <div class="performance-stats">
                <div class="stat">
                    <h3>+10k</h3>
                    <p>Conexiones concurrentes</p>
                </div>
                <div class="stat">
                    <h3>µs</h3>
                    <p>Tiempo de respuesta</p>
                </div>
                <div class="stat">
                    <h3>99.9%</h3>
                    <p>Disponibilidad</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="info-panel">
        <div class="container">
            <div class="info-grid">
                <div class="info-item">
                    <h3>IP</h3>
                    <p><?php echo $_SERVER['SERVER_ADDR'] ?? '172.18.0.5'; ?></p>
                </div>
                <div class="info-item">
                    <h3>Hostname</h3>
                    <p><?php echo gethostname(); ?></p>
                </div>
                <div class="info-item">
                    <h3>Software</h3>
                    <p><?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>
                </div>
                <div class="info-item">
                    <h3>PHP</h3>
                    <p><?php echo phpversion(); ?></p>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <p>Proyecto de Despliegue de Aplicaciones Web - Jesús Miranda Díaz</p>
            <div>
                <span class="tech-badge">Docker</span>
                <span class="tech-badge">Nginx</span>
                <span class="tech-badge">PHP</span>
                <span class="tech-badge">Networking</span>
            </div>
            <div class="server-info">
                <p><strong>Conectado desde:</strong> <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
                <p><strong>Usuario Agente:</strong> <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
            </div>
        </div>
    </footer>

    <script>
        // Animación para las tarjetas de características
        document.addEventListener('DOMContentLoaded', function() {
            const featureCards = document.querySelectorAll('.feature-card');
            
            featureCards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 300 * index);
            });
            
            // Contador animado para las estadísticas
            const stats = document.querySelectorAll('.stat h3');
            stats.forEach(stat => {
                const target = parseInt(stat.textContent);
                let current = 0;
                const increment = target / 50;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    stat.textContent = Math.floor(current).toLocaleString();
                }, 30);
            });
        });
    </script>
</body>
</html>