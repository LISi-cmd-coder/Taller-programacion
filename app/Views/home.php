<?= view('templates/header') ?>
<link rel="stylesheet" href="<?= base_url('css/style.css') ?>"> 


<section class="hero-section">
<!-- Sección Hero con carrusel y texto superpuesto -->
<section class="hero-section">
    <!-- Texto principal -->
    <div class="hero-content">
        <h1 class="display-3 fw-bold">¡WELCOME, al mundo de VAVI!</h1>
        <p class="lead fs-4">Donde cada día, sos más vos.</p>
    </div>

    <!-- Carrusel -->
    <div id="autoCarousel" class="carousel slide h-100" data-bs-ride="carousel">
        
    

        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="<?= base_url('img/fondo.jpg') ?>" class="d-block w-100" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('img/IMG_2206.jpg') ?>" class="d-block w-100" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('img/IMG_2187 (1).jpg') ?>" class="d-block w-100" alt="Imagen 3">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('img/IMG_2221 (1).jpg') ?>" class="d-block w-100" alt="Imagen 4">
            </div>
            
        </div>

        <!-- Controles (opcional) -->
        <button class="carousel-control-prev" type="button" data-bs-target="#autoCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#autoCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<?= view('templates/footer') ?>