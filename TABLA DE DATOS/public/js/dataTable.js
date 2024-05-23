$(document).ready(function() {
    var table = $('#example').DataTable({
        "responsive": {
            "details": {
                "type": 'column'
            }
        },
        language: {
            search: "Buscar:",
            lengthMenu: "Mostrar _MENU_ registros",
            info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
            infoEmpty: "No Se encontraron Registors",
            infoFiltered: "(filtrado de _MAX_ registros totales)",
            zeroRecords: "No se encontraron resultados",
            paginate: {
                first: "Primero",
                last: "Último",
                next: "Siguiente",
                previous: "Anterior"
            }
        },
        lengthMenu: [[5, 10, 20, -1], [5, 10, 20, "Todos"]],
        pageLength: -1,
        rowCallback: function(row, data, index) {
            if (index % 2 === 0) {
                $(row).removeClass('row-odd').addClass('row-even');
            } else {
                $(row).removeClass('row-even').addClass('row-odd');
            }
        },
        initComplete: function() {
            var addButton = $('<button>')
                .html('Agregar Usuario <i class="material-icons">person_add</i> ')
                .addClass('add-button');
            $('#example_filter').append(addButton);

            var searchBox = $('#example_filter input[type="search"]');
            searchBox.attr('placeholder', 'Buscar...');
            searchBox.removeAttr('aria-controls');

            $('#example_filter label').contents().filter(function() {
                return this.nodeType === 3; // Nodo de texto
            }).remove();
        }
    });
});
