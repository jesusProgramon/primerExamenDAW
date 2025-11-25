<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor Apache - Proyecto Docker</title>
    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --accent: #e74c3c;
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            background-color: #c0392b;
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
        
        .info-panel {
            background-color: var(--primary);
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
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1>Apache Docker Server</h1>
            </div>
        </div>
    </header>
    
    <section class="hero">
        <div class="container">
            <h2>Servidor Web Apache</h2>
            <p>Despliegue profesional de aplicaciones web en contenedores Docker</p>
            <a href="#features" class="btn">Conoce más</a>
        </div>
    </section>
    
    <section class="features" id="features">
        <div class="container">
            <h2 class="section-title">Características del Servidor</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <h3>Alta Disponibilidad</h3>
                    <p>Configuración optimizada para garantizar el máximo tiempo de actividad y rendimiento.</p>
                </div>
                <div class="feature-card">
                    <h3>Escalabilidad</h3>
                    <p>Arquitectura diseñada para crecer según las necesidades de tu proyecto.</p>
                </div>
                <div class="feature-card">
                    <h3>Seguridad</h3>
                    <p>Implementación de mejores prácticas de seguridad en la configuración del servidor.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="info-panel">
        <div class="container">
            <div class="info-grid">
                <div class="info-item">
                    <h3>IP</h3>
                    <p><?php echo $_SERVER['SERVER_ADDR'] ?? '172.18.0.2'; ?></p>
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
            <div class="server-info">
                <p><strong>Conectado desde:</strong> <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
                <p><strong>Usuario Agente:</strong> <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
            </div>
        </div>
    </footer>

    <script>
        // Efecto de escritura para el título
        document.addEventListener('DOMContentLoaded', function() {
            const heroTitle = document.querySelector('.hero h2');
            const text = heroTitle.textContent;
            heroTitle.textContent = '';
            
            let i = 0;
            function typeWriter() {
                if (i < text.length) {
                    heroTitle.textContent += text.charAt(i);
                    i++;
                    setTimeout(typeWriter, 100);
                }
            }
            
            typeWriter();
        });
    </script>
</body>
</html>