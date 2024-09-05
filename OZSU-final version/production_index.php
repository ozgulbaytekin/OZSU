<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÖZSU Mineral Water</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="/ozsu/all.min.css"> <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="/ozsu/magnific-popup.css">
    <link rel="stylesheet" href="/ozsu/templatemo-ocean-vibes.css">
    <!--

    TemplateMo 554 Ocean Vibes

    https://templatemo.com/tm-554-ocean-vibes

    -->
</head>

<body>
<style>
    #tm-video-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: -1;
    }

    #tm-video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .tm-container {
        position: relative;
        z-index: 1;
        background-color: white;
    }
</style>
<header class="tm-site-header">
    <a href="http://localhost/ozsu/index1.php#"><img src="ÖZSU logo.png" alt="ÖZSU Logo" class="logo-image"></a>
</header>

<div id="tm-video-container">
    <video autoplay muted loop id="tm-video">
        <source src="Waterfall Clip.mp4" type="video/mp4">
    </video>
</div>

<div class="tm-container">
    <nav class="tm-main-nav">
        <ul id="inline-popups">
            <li class="tm-nav-item">
                <a href="#testimonials" data-effect="mfp-move-from-top" class="tm-nav-link">
                    Productions
                    <i class="fas fa-3x fa-tint"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>

<div id="testimonials" class="popup mfp-with-anim mfp-hide tm-bg-gray">
    <a href="#" class="tm-close-popup">
        return home
        <i class="fas fa-times"></i>
    </a>
    <div class="tm-testimonials-inner">
        <h2 class="tm-color-gray tm-testimonial-col tm-page-title">Productions</h2>
        <div class="tm-row tm-testimonial-row">
            <div class="tm-col tm-testimonial-col">
                <table>
                    <tr>
                        <td colspan="2"><div id="resultofSave" style="background-color: #71aae1;"></div></td>
                    </tr>
                    <tr>
                        <td valign="top"><div class="tm-col-6 tm-intro-col-l" id="ProductionFormDiv"></div></td>
                        <td valign="top"><div class="tm-col-6" id="ProductionTableDiv"></div></td>
                    </tr>
                </table>
            </div>
            <div class="tm-col tm-testimonial-col tm-testimonial-col-2">
                <!-- Table content for Productions -->
            </div>
            <div class="tm-col tm-testimonial-col tm-testimonial-col-2">
                <!-- Additional content for Productions -->
            </div>
        </div>
    </div>
</div>

<footer class="tm-footer">
    <span>Copyright &copy; 2023 ÖzSu</span>
</footer>

<script src="/ozsu/jquery-3.4.1.min.js"></script>
<script src="/ozsu/imagesloaded.pkgd.min.js"></script>
<script src="/ozsu/isotope.pkgd.min.js"></script>
<script src="/ozsu/jquery.magnific-popup.min.js"></script>
<script src="/ozsu/templatemo-script.js"></script>
<script src="/ozsu/script_ozsu.js?p=<?php echo time(); ?>"></script>
</body>
</html>
