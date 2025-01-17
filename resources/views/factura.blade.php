<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
    <link rel="stylesheet" href="{{ asset('factura.css') }}">
    <script src="{{ asset('factura.js') }}" defer></script>
</head>
<body>
    <div class="container">
        <h2>Factura</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="cart-items">
            <h3>Productos seleccionados</h3>
            <table>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody id="cart-items">
                    <!-- Aquí se insertarán los items del carrito -->
                </tbody>
            </table>
        </div>

        <div class="summary">
            <h3>Resumen</h3>
            <form action="{{ route('factura.store') }}" method="POST">
                @csrf

                <label for="fecha-pago">Fecha de Pago</label>
                <input type="date" name="FechaPago" id="fecha-pago" required>

                <label for="metodopago">Método de Pago</label>
                <select name="MetodoPago" id="metodopago" required>
                    <option value="Tarjeta Debito">Tarjeta Débito</option>
                    <option value="Tarjeta Credito">Tarjeta Crédito</option>
                    <option value="Efectivo">Efectivo</option>
                    <option value="PSE">PSE</option>
                </select>

                <label for="costo-envio">Costo Envío</label>
                <input type="number" name="CostoEnvio" id="costo-envio" step="0.01" readonly>

                <label>Subtotal: <span id="subtotal"></span>
                <input type="hidden" name="subtotal" id="hidden-subtotal">
                </label>

                <label>Impuesto (IVA 21%): <span id="tax"></span>
                <input type="hidden" name="IVA" id="hidden-iva">
                </label>

                <label>Total: <strong id="total"></strong>
                <input type="hidden" name="valor_pago" id="hidden-total">
                </label>

                <label for="id-venta">Id Venta</label>
                <input type="number" name="IdVenta" id="id-venta" readonly>

                <label for="numero-envio">Número de Envío</label>
                <input type="number" name="numero_Envio" id="numero-envio" readonly>

                <button type="submit">Finalizar Compra</button>
            </form>
        </div>
    </div>

  
</body>
</html>
