//carga modulos
function cargarModuloColores()
{
    $.ajax
    ({
        url: "vistas/vts_colores.php",
        context: document.body
    })
    .done(function (data)
    {
        $("#divContenido").html(data);
    });
}

function cargarModuloColecciones()
{
    $.ajax
    ({
        url: "vistas/vts_colecciones.php",
        context: document.body
    })
    .done(function (data)
    {
        $("#divContenido").html(data);
    });
}

function cargarModuloTipoDeProducto()
{
    $.ajax
    ({
        url: "vistas/vts_tipo_producto.php",
        context: document.body
    })
    .done(function (data)
    {
        $("#divContenido").html(data);
    });
}

function cargarModuloMarca()
{
    $.ajax
    ({
        url:"vistas/vts_marcas.php",
        context: document.body
    })
    .done(function (data)
    {
        $("#divContenido").html(data);
    });
}

function cargarModuloLinea()
{
    $.ajax
    ({
        url:"vistas/vts_lineas.php",
        context: document.body
    })
    .done(function (data)
    {
        $("#divContenido").html(data);
    });
}

function cargarModuloCorridas()
{
    $.ajax
    ({
        url:"vistas/vts_corridas.php",
        context: document.body
    })
    .done(function (data)
    {
        $("#divContenido").html(data);
    });
}

function cargarModuloTemporada()
{
    $.ajax
    ({
        url:"vistas/vts_temporadas.php",
        context: document.body
    })
    .done(function (data)
    {
        $("#divContenido").html(data);
    });
}


function cargarModuloMarca()
{
    $.ajax
    ({
        url:"vistas/vts_marcas.php",
        context: document.body
    })
    .done(function (data)
    {
        $("#divContenido").html(data);
    });
}


function cargarModuloComponentes()
{
    $.ajax
    ({
        url:"vistas/vts_componentes.php",
        context: document.body
    })
    .done(function (data)
    {
        $("#divContenido").html(data);
    });
}

function cargarModuloProductos()
{
    $.ajax
    ({
        url:"vistas/vts_productos.php",
        context: document.body
    })
    .done(function (data)
    {
        $("#divContenido").html(data);
    });
}

function cargarMarcaProducto()
{
    $.ajax
    ({
        url:"vistas/vts_marca_tipo_producto.php",
        context: document.body
    })
    .done(function (data)
    {
        $("#divContenido").html(data);
    });
}

function cargarProductoCombinacion()
{
    $.ajax
    ({
        url:"vistas/vts_producto_combinacion.php",
        context: document.body
    })
    .done(function (data)
    {
        $("#divContenido").html(data);
    });
}
