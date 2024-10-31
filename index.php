<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios y Listas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .container {
            max-width: 600px;
            width: 100%;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .sidebar {
            width: 200px;
            background-color: #333;
            padding-top: 20px;
            position: fixed;
            height: 100vh;
            top: 0;
            left: 0;
        }

        .sidebar button {
            width: 100%;
            padding: 15px;
            background-color: #444;
            border: none;
            color: white;
            text-align: left;
            cursor: pointer;
            font-size: 16px;
            border-bottom: 1px solid #555;
        }

        .sidebar button:hover {
            background-color: #555;
        }

        .main-content {
            margin-left: 220px;
            display: flex;
            justify-content: center;
            width: 100%;
            align-items: center;
            height: 100vh;
        }

        .section {
            display: none;
            text-align: center;
            width: 100%;
        }

        .active {
            display: block;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .form-button {
            display: block;
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            font-family: inherit;
            transition: background-color 0.3s ease;
        }

        /* Colores para los botones de formularios */
        .form-producto { background-color: #d17cb3; }
        .form-nueva-venta { background-color: #81d8c0; }
        .form-cliente { background-color: #b38ad1; }
        .form-vendedores { background-color: #f1dd57; color: black; }
        .form-categoria { background-color: #8697d8; }
        .form-proveedor { background-color: #d88a84; }

        /* Colores para los botones de listas */
        .list-productos { background-color: #ffb74d; }
        .list-venta { background-color: #64b5f6; }
        .list-clientes { background-color: #81c784; }
        .list-vendedores { background-color: #ba68c8; }

        .form-button:hover {
            opacity: 0.9;
        }

        .form-container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
            display: none;
            margin: 0 auto;
        }

        .buttons-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .buttons-container button {
            padding: 10px;
            width: 48%;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-guardar { background-color: #f1dd57; color: black; }
        .btn-cancelar { background-color: #8697d8; }
        .btn-actualizar { background-color: #d88a84; }

        .side-buttons {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .side-buttons button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-limpiar { background-color: #81d8c0; }
        .btn-eliminar { background-color: #81d8c0; }
        .btn-editar { background-color: #81d8c0; }

    </style>
</head>
<body>

    <div class="sidebar">
        <button onclick="showSection('formularios')">Formularios</button>
        <button onclick="showSection('listas')">Listas</button>
    </div>

    <div class="main-content">
        <!-- Sección Formularios -->
        <div id="formularios" class="section active container">
            <h1>Formularios de ingreso principal</h1>
            <button class="form-button form-producto" onclick="mostrarFormulario('formularioProducto')">Formulario de producto</button>
            <button class="form-button form-nueva-venta" onclick="mostrarFormulario('formularioNuevaVenta')">Formulario de Nueva Venta</button>
            <button class="form-button form-cliente" onclick="mostrarFormulario('formularioCliente')">Formulario de cliente</button>
            <button class="form-button form-vendedores" onclick="mostrarFormulario('formularioVendedores')">Registro Vendedores</button>
            <button class="form-button form-categoria" onclick="mostrarFormulario('formularioCategoria')">Formulario para Agregar Nueva Categoría</button>
            <button class="form-button form-proveedor" onclick="mostrarFormulario('formularioProveedor')">Formulario para agregar un nuevo proveedor</button>
        </div>

        <!-- Sección Listas -->
        <div id="listas" class="section container">
            <h1>Listas / Interfaces</h1>
            <button class="form-button list-productos" onclick="mostrarLista('listaProductos')">Lista de Productos</button>
            <button class="form-button list-venta" onclick="mostrarLista('listaVenta')">Lista de Venta</button>
            <button class="form-button list-clientes" onclick="mostrarLista('listaClientes')">Lista de Clientes</button>
            <button class="form-button list-vendedores" onclick="mostrarLista('listaVendedores')">Tabla de Vendedores</button>
        </div>

        <!-- Contenedor del formulario de producto -->
        <div id="formularioProducto" class="form-container">
            <h1>Formulario de Producto</h1>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="text" id="precio" name="precio">
            </div>
            <div class="form-group">
                <label for="stock">Stock:</label>
                <input type="text" id="stock" name="stock">
            </div>
            <div class="form-group">
                <label for="codigo-barras">Código Barras:</label>
                <input type="text" id="codigo-barras" name="codigo-barras">
            </div>
            <div class="form-group">
                <label for="categoria">Categoría:</label>
                <input type="text" id="categoria" name="categoria">
            </div>
            <div class="buttons-container">
                <button class="btn-guardar">Guardar</button>
                <button class="btn-cancelar" onclick="volverAlMenu()">Cancelar</button>
            </div>
            <div class="buttons-container">
                <button class="btn-actualizar">Actualizar</button>
            </div>
            <div class="side-buttons">
                <button class="btn-limpiar">Limpiar</button>
                <button class="btn-eliminar">Eliminar</button>
                <button class="btn-editar">Editar</button>
            </div>
        </div>

        <!-- Aquí puedes agregar más formularios similares a formularioProducto -->
        <div id="formularioNuevaVenta" class="form-container">
            <h1>Formulario de Nueva Venta</h1>
            <div class="form-group">
                <label for="fecha_venta">Fecha Venta:</label>
                <input type="text" id="fecha_venta" name="fecha_venta">
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="text" id="cantidad" name="cantidad">
            </div>
            <div class="form-group">
                <label for="producto">Producto:</label>
                <input type="text" id="producto" name="producto">
            </div>
            <div class="form-group">
                <label for="Id_Cliente">ID Cliente:</label>
                <input type="text" id="Id_Cliente" name="Id_Cliente">
            </div>
            <div class="form-group">
                <label for="Id_Vendedor">ID Vendedor:</label>
                <input type="text" id="Id_Vendedor" name="Id_Vendedor">
            </div>
            <div class="form-group">
                <label for="total">Total:</label>
                <input type="text" id="total" name="total">
            </div>
            <div class="buttons-container">
                <button class="btn-guardar">Guardar</button>
                <button class="btn-cancelar" onclick="volverAlMenu()">Cancelar</button>
            </div>
            <div class="buttons-container">
                <button class="btn-actualizar">Actualizar</button>
            </div>
            <div class="side-buttons">
                <button class="btn-limpiar">Limpiar</button>
                <button class="btn-eliminar">Eliminar</button>
                <button class="btn-editar">Editar</button>
            </div>
        </div>


        <div id="formularioCliente" class="form-container">
            <h1>Formulario de Cliente</h1>
            <div class="form-group">
                <label for="Id_Cliente">ID Cliente:</label>
                <input type="text" id="Id_Cliente" name="Id_Cliente">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="Apellido_Paterno">Apellido Paterno:</label>
                <input type="text" id="Apellido_Paterno" name="Apellido_Paterno">
            </div>
            <div class="form-group">
                <label for="Apellido_Materno">Apellido Materno:</label>
                <input type="text" id="Apellido_Materno" name="Apellido_Materno">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono:</label>
                <input type="text" id="telefono" name="telefono">
            </div>
            <div class="buttons-container">
                <button class="btn-guardar">Guardar</button>
                <button class="btn-cancelar" onclick="volverAlMenu()">Cancelar</button>
            </div>
            <div class="buttons-container">
                <button class="btn-actualizar">Actualizar</button>
            </div>
            <div class="side-buttons">
                <button class="btn-limpiar">Limpiar</button>
                <button class="btn-eliminar">Eliminar</button>
                <button class="btn-editar">Editar</button>
            </div>
        </div>

        <div id="formularioVendedores" class="form-container">
            <h1>Registro de Vendedores</h1>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="Apellido_Paterno">Apellido Paterno:</label>
                <input type="text" id="Apellido_Paterno" name="Apellido_Paterno">
            </div>
            <div class="form-group">
                <label for="Apellido_Materno">Apellido Materno:</label>
                <input type="text" id="Apellido_Materno" name="Apellido_Materno">
            </div>
            <div class="form-group">
                <label for="Id_Vendedor">ID Vendedor:</label>
                <input type="text" id="Id_Vendedor" name="Id_Vendedor">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono:</label>
                <input type="text" id="telefono" name="telefono">
            </div>
            <div class="buttons-container">
                <button class="btn-guardar">Guardar</button>
                <button class="btn-cancelar" onclick="volverAlMenu()">Cancelar</button>
            </div>
            <div class="buttons-container">
                <button class="btn-actualizar">Actualizar</button>
            </div>
            <div class="side-buttons">
                <button class="btn-limpiar">Limpiar</button>
                <button class="btn-eliminar">Eliminar</button>
                <button class="btn-editar">Editar</button>
            </div>
        </div>


        <div id="formularioCategoria" class="form-container">
            <h1>Formulario para Agregar Nueva Categoría</h1>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" id="categoria" name="categoria">
            </div>
            <div class="buttons-container">
                <button class="btn-guardar">Guardar</button>
                <button class="btn-cancelar" onclick="volverAlMenu()">Cancelar</button>
            </div>
            <div class="buttons-container">
                <button class="btn-actualizar">Actualizar</button>
            </div>
            <div class="side-buttons">
                <button class="btn-limpiar">Limpiar</button>
                <button class="btn-eliminar">Eliminar</button>
                <button class="btn-editar">Editar</button>
            </div>
        </div>

        <div id="formularioProveedor" class="form-container">
            <h1>Formulario para agregar un nuevo proveedor</h1>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono:</label>
                <input type="text" id="telefono" name="telefono">
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion">
            </div>
            <div class="form-group">
                <label for="Id_Vendedor">ID Vendedor:</label>
                <input type="text" id="Id_Vendedor" name="Id_Vendedor">
            </div>
            <div class="buttons-container">
                <button class="btn-guardar">Guardar</button>
                <button class="btn-cancelar" onclick="volverAlMenu()">Cancelar</button>
            </div>
            <div class="buttons-container">
                <button class="btn-actualizar">Actualizar</button>
            </div>
            <div class="side-buttons">
                <button class="btn-limpiar">Limpiar</button>
                <button class="btn-eliminar">Eliminar</button>
                <button class="btn-editar">Editar</button>
            </div>
        </div>

        <!-- Contenedor de Listas -->
        <div id="listaProductos" class="form-container">
            <h1>Lista de Productos</h1>
            <p>Aquí se mostrará la lista de productos.</p>
            <div class="buttons-container">
                <button class="btn-cancelar" onclick="volverAlMenu()">Volver</button>
            </div>
        </div>

        <div id="listaVenta" class="form-container">
            <h1>Lista de Venta</h1>
            <p>Aquí se mostrará la lista de ventas.</p>
            <div class="buttons-container">
                <button class="btn-cancelar" onclick="volverAlMenu()">Volver</button>
            </div>
        </div>

        <div id="listaClientes" class="form-container">
            <h1>Lista de Clientes</h1>
            <p>Aquí se mostrará la lista de clientes.</p>
            <div class="buttons-container">
                <button class="btn-cancelar" onclick="volverAlMenu()">Volver</button>
            </div>
        </div>

        <div id="listaVendedores" class="form-container">
            <h1>Tabla Vendedores</h1>
            <p>Aquí se mostrará la tabla de vendedores.</p>
            <div class="buttons-container">
                <button class="btn-cancelar" onclick="volverAlMenu()">Volver</button>
            </div>
        </div>

    </div>

    <script>
        function showSection(section) {
            // Ocultar todas las secciones
            const sections = document.querySelectorAll('.section');
            sections.forEach((sec) => {
                sec.classList.remove('active');
            });

            // Mostrar la sección seleccionada
            document.getElementById(section).classList.add('active');
        }

        function mostrarFormulario(formularioId) {
            // Ocultar todas las secciones de formularios
            const formularios = document.querySelectorAll('.form-container');
            formularios.forEach((form) => {
                form.style.display = 'none';
            });

            // Mostrar el formulario seleccionado
            document.getElementById(formularioId).style.display = 'block';
        }

        function mostrarLista(listaId) {
            // Ocultar todas las secciones de listas
            const listas = document.querySelectorAll('.form-container');
            listas.forEach((lista) => {
                lista.style.display = 'none';
            });

            // Mostrar la lista seleccionada
            document.getElementById(listaId).style.display = 'block';
        }

        function volverAlMenu() {
            // Ocultar todos los formularios y listas
            const formularios = document.querySelectorAll('.form-container');
            formularios.forEach((form) => {
                form.style.display = 'none';
            });
        }
    </script>
</body>
</html>