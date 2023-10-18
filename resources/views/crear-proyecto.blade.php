<!DOCTYPE html>
<html lang="es">

<head>
    <title>Crear proyecto</title>
</head>

<body>
    <form action="/crear-proyecto" method="post">
        @csrf
        <input type="text" name="nombre_proyecto" placeholder="Nombre del proyecto">
        <input type="text" name="contrato_convenio" placeholder="Contrato o convenio">
        <input type="text" name="ciudad" placeholder="Ciudad">
        <input type="date" name="fecha_firma_contrato">
        <input type="number" name="valor_contrato" placeholder="Valor del contrato">
        <button type="submit">Crear proyecto</button>
    </form>
</body>

</html>