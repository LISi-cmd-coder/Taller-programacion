<?= view('templates/header') ?>
<link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
<div class="container my-5">
    <h1 class="text-center mb-4">Catálogo de Ropa</h1>
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Card 1 -->
        <div class="col">
            <div class="card h-100 shadow-sm">
                <img 
                    src="<?= base_url('img/1.jpg') ?>" 
                    class="card-img-top" 
                    alt="Camiseta Básica"
                    style="height: 300px; object-fit: cover;"
                >
                <div class="card-body">
                    <h5 class="card-title">Camiseta Básica</h5>
                    <p class="card-text">100% algodón, disponible en varios colores.</p>
                </div>
                <div class="card-footer bg-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="h5 text-success">$18.99</span>
                        <button class="btn btn-outline-primary">Ver Detalles</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col">
            <div class="card h-100 shadow-sm">
                <img 
                    src="<?= base_url('img/2.jpg') ?>" 
                    class="card-img-top" 
                    alt="Jeans Slim Fit"
                    style="height: 300px; object-fit: cover;"
                >
                <div class="card-body">
                    <h5 class="card-title">Abanicos</h5>
                    <p class="card-text">Gran variedad en colores</p>
                </div>
                <div class="card-footer bg-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="h5 text-success">$13.99</span>
                        <button class="btn btn-outline-primary">Ver Detalles</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col">
            <div class="card h-100 shadow-sm">
                <img 
                    src="<?= base_url('img/3.jpg') ?>" 
                    class="card-img-top" 
                    alt="Chaqueta Denim"
                    style="height: 300px; object-fit: cover;"
                >
                <div class="card-body">
                    <h5 class="card-title">Abanico Norte</h5>
                    <p class="card-text">Ideal para cualquier tipo de look.</p>
                </div>
                <div class="card-footer bg-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="h5 text-success">$13.99</span>
                        <button class="btn btn-outline-primary">Ver Detalles</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- Cierre del container -->

<?= view('templates/footer') ?>
