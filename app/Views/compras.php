<?= view('templates/header') ?>
<link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
<style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .container {
        flex: 1;
    }

    .footer {
        margin-top: auto;
        background-color: #f8f9fa;
        padding: 20px 0;
        text-align: center;
    }
</style>
<div class="container my-5">
    <h1 class="text-center mb-4">Medios de Pago</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-center">Aceptamos</h5>
                    <div class="d-flex justify-content-around align-items-center mb-3">
                        <img src="<?= base_url('img/mp.png') ?>" alt="Mercado Pago" style="height: 50px;">
                        <img src="<?= base_url('img/bancaria.png') ?>" alt="Transferencia Bancaria" style="height: 50px;">
                        <img src="<?= base_url('img/efec.png') ?>" alt="Efectivo" style="height: 50px;">
                    </div>
                    <p class="text-center">
                        ¡Ahora podés pagar con Tarjeta Naranja en 6 cuotas sin interés!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<?= view('templates/footer') ?>
