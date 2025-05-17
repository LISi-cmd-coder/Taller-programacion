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
    <h1 class="text-center mb-4">Información de Comercialización</h1>

    <!-- Medios de Pago -->
    <section class="mb-5">
        <h2 class="text-center mb-3">Medios de Pago</h2>
        <div class="card shadow-sm">
            <div class="card-body">

                <h5 class="card-title text-center">Aceptamos</h5>
                <div class="d-flex justify-content-around align-items-center mb-3">
                   <div class="d-flex flex-column align-items-center">
                   <img src="<?= base_url('img/mp.png') ?>" alt="Mercado Pago" style="height: 50px;">
                     <span class="mt-2 small text-muted">Mercado Pago</span>
                   </div>
                   
                    <div class="d-flex  flex-column align-items-center">
                        <img src="<?= base_url('img/bancaria.jpg') ?>" alt="Transferencia bancaria" style="height: 50px">
                        <span class= "mt-2 small text-muted">Transferencia Bancaria</span>
                    </div>
                   <div class="d-flex  flex-column align-items-center">
                        <img src="<?= base_url('img/efec.jpg') ?>" alt=" Efectivo" style="height: 50px">
                        <span class= "mt-2 small text-muted"> Efectivo</span>
                    </div>
                </div>
                <p class="text-center">¡Ahora podés pagar con Tarjeta Naranja en 6 cuotas sin interés!</p>
            </div>
        </div>
    </section>

    <!-- Tipos de Entrega -->
    <section class="mb-5">
        <h2 class="text-center mb-3">Tipos de Entrega</h2>
        <ul>
            <li><strong>Retiro en local:</strong> Podés retirar tu pedido personalmente en nuestro local sin costo adicional.</li>
            <li><strong>Entrega programada:</strong> Coordinamos día y horario según tu disponibilidad.</li>
            <li><strong>Entrega urgente:</strong> Servicio rápido con recargo adicional. Sujeto a disponibilidad.</li>
        </ul>
    </section>

    <!-- Formas de Envío -->
    <section class="mb-5">
        <h2 class="text-center mb-3">Formas de Envío</h2>
        <ul>
            <li><strong>Envío local:</strong> Dentro de la ciudad de Corrientes, entregamos en el día si realizás tu pedido antes de las 14 hs.</li>
            <li><strong>Envío nacional:</strong> Utilizamos Correo Argentino o servicios privados. El costo varía según destino y peso.</li>
            <li><strong>Seguimiento:</strong> Todos los envíos incluyen código de seguimiento para que sepas dónde está tu pedido.</li>
        </ul>
    </section>

    <!-- Información útil adicional -->
    <section>
        <h2 class="text-center mb-3">Información Útil</h2>
        <ul>
            <li>Los productos tienen garantía de satisfacción: podés solicitar cambios dentro de las 48 hs.</li>
            <li>Realizamos embalaje seguro para preservar la integridad del producto durante el transporte.</li>
            <li>Contactanos por WhatsApp o email para cualquier consulta previa a la compra.</li>
        </ul>
    </section>
</div>

<?= view('templates/footer') ?>
