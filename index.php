
<?php
$siteName = "My Website";
$year = date("Y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $siteName; ?> | Home</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f8fafc;
            color: #1e293b;
            line-height: 1.6;
        }

        /* Navbar */
        header {
            background: white;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #2563eb;
        }

        nav a {
            text-decoration: none;
            color: #334155;
            margin-left: 24px;
            font-size: 15px;
        }

        nav a:hover {
            color: #2563eb;
        }

        /* Hero section */
        .hero {
            min-height: 75vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 60px 20px;
            background: linear-gradient(135deg, #eff6ff, #f8fafc);
        }

        .hero h1 {
            font-size: clamp(32px, 5vw, 52px);
            max-width: 700px;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .hero p {
            max-width: 550px;
            color: #64748b;
            font-size: 18px;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 13px 26px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }

        .btn:hover {
            background: #1d4ed8;
        }

        /* Features */
        .features {
            padding: 60px 8%;
            text-align: center;
        }

        .features h2 {
            font-size: 30px;
            margin-bottom: 35px;
        }

        .feature-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .feature {
            background: white;
            padding: 30px 20px;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
        }

        .feature h3 {
            margin-bottom: 12px;
        }

        .feature p {
            color: #64748b;
        }

        /* Footer */
        footer {
            background: #0f172a;
            color: #cbd5e1;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
        }

        /* Mobile responsive */
        @media (max-width: 650px) {
            header {
                flex-direction: column;
                gap: 15px;
            }

            nav a {
                margin: 0 8px;
            }

            .feature-container {
                grid-template-columns: 1fr;
            }

            .hero {
                min-height: 60vh;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <header>
        <div class="logo">
            <?php echo $siteName; ?>
        </div>

        <nav>
            <a href="index.php">Home</a>
            <a href="#features">Features</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <!-- Hero -->
    <section class="hero">
        <h1>Welcome to <?php echo $siteName; ?></h1>

        <p>
            A simple and modern website to showcase your ideas,
            services, and projects.
        </p>

        <a href="#features" class="btn">Explore More</a>
    </section>

    <!-- Features -->
    <section class="features" id="features">
        <h2>What We Offer</h2>

        <div class="feature-container">

            <div class="feature">
                <h3>Simple Design</h3>
                <p>A clean and user-friendly experience for everyone.</p>
            </div>

            <div class="feature">
                <h3>Responsive Layout</h3>
                <p>Works smoothly on mobile, tablet, and desktop.</p>
            </div>

            <div class="feature">
                <h3>Built with PHP</h3>
                <p>Easy to customize and extend with dynamic features.</p>
            </div>

        </div>
    </section>

    <!-- Contact -->
    <footer id="contact">
        <p>&copy; <?php echo $year; ?> <?php echo $siteName; ?>. All rights reserved.</p>
    </footer>

</body>
</html>
