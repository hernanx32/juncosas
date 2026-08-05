<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Usuarios AdminLTE</title>
  <link rel="stylesheet" href="comp/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="comp/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="comp/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="comp/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <div class="content-wrapper p-4">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-users mr-2"></i>Lista de Usuarios</h3>
      </div>
      <div class="card-body">
        <table id="tablaUsuarios" class="table table-bordered table-striped dt-responsive nowrap" style="width:100%">
          <thead>
            <tr>
              <th>ID</th>
              <th>Usuario</th>
              <th>Nombre</th>
              <th>Sucursal</th>
              <th>Acceso</th>
              <th class="text-center">Acciones</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div>

<script src="comp/plugins/jquery/jquery.min.js"></script>
<script src="comp/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="comp/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="comp/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="comp/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>

<script>
$(document).ready(function() {
    $('#tablaUsuarios').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "obtener_datos.php",
        "columns": [
            { "data": "id_usuario" },
            { "data": "usuario" },
            { "data": "nombre" },
            { "data": "id_sucursal" },
            { "data": "id_acceso" },
            { 
                "data": null,
                "orderable": false,
                "searchable": false,
                "className": "text-center",
                "render": function(data, type, row) {
                    return `
                        <button class="btn btn-sm btn-info btn-editar" data-id="${row.id_usuario}" title="Editar">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-sm btn-danger btn-eliminar" data-id="${row.id_usuario}" title="Eliminar">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    `;
                }
            }
        ],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"
        }
    });

    $('#tablaUsuarios').on('click', '.btn-editar', function() {
        let id = $(this).data('id');
        alert('Editar usuario ID: ' + id);
    });

    $('#tablaUsuarios').on('click', '.btn-eliminar', function() {
        let id = $(this).data('id');
        if (confirm('¿Eliminar el usuario ' + id + '?')) {
            // Acción AJAX para eliminar
        }
    });
});
</script>
</body>
</html>