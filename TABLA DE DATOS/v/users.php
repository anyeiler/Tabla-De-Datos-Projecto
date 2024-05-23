<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Datos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="Container">

        <?php

        $tableHTML = '<table id="example" class="table-rounded">';

        $tableHTML .= '<thead><tr>';
        $tableHTML .= '<th>Cedula</th>';
        $tableHTML .= '<th>Nombres</th>';
        $tableHTML .= '<th>Apellidos</th>';
        $tableHTML .= '<th>Telefono</th>';
        $tableHTML .= '</tr></thead>';
        
        $tableHTML .= '<tbody>';
        foreach ($data as $row) {
            $tableHTML .= '<tr>';
            $tableHTML .= "<td><button type='button' class='botonShow'><i class='material-icons icon-color'>add</i></button></td>";
            $tableHTML .= "<td>
                                <div class='btn'>
                                <a class='btnEdit'><i class='material-icons iconoM'>edit</i></a>
                                <a class='btnDelete'><i class='material-icons iconoM'>delete</i></a>
                                </div>
                            </td>";
            $tableHTML .= '<td>' . htmlspecialchars($row['cedula']) . '</td>';
            $tableHTML .= '<td>' . htmlspecialchars($row['nombres']) . '</td>';
            $tableHTML .= '<td>' . htmlspecialchars($row['apellidos']) . '</td>';
            $tableHTML .= '<td>' . htmlspecialchars($row['telefono']) . '</td>';
            $tableHTML .= '</tr>';

            $tableHTML .= '</table>';

</body>
</html>