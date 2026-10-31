<?php require_once '../../modelo/recital.php'; 
$Id = $_GET['id'] ?? null;
$Recital = $Id ? Recital::obtenerPorId($Id) : null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Receta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1>Detalle de Receta</h1>

                <?php if ($Recital): ?>
                <div class="card">
                    <div class="card-body">
                        <p><strong>ID:</strong> <?php echo $Recital->Id; ?></p>
                        <p><strong>Nombre:</strong> <?php echo $Recital->Nombre; ?></p>
                        <p><strong>Lugar:</strong> <?php echo $Recital->Lugar; ?></p>
                        <p><strong>Fecha:</strong> <?php echo $Recital->Fecha; ?></p>
                        <p><strong>Cantidad de cambios:</strong> <?php echo $Recital->Hora; ?></p>
                        <p><strong>Capacidad:</strong> <?php echo $Recital->Capacidad; ?></p>
                        <p><strong>PrecioEntrada:</strong> <?php echo $Recital->PrecioEntrada; ?></p>
                    </div>
                </div>

                <div class="mt-3">
                    <a href="listar.php" class="btn btn-secondary">Volver</a>
                    <a href="editar.php?id=<?php echo $Recital->id; ?>" class="btn btn-warning">Editar</a>
                </div>
                <?php else: ?>
                <div class="alert alert-danger">Recital no encontrado</div>
                <a href="listar.php" class="btn btn-secondary">Volver</a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
