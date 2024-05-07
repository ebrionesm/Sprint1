<?php

$alumnosNotas = [
    'Pedro' => [4, 8, 5, 9, 5],
    'Sara' => [7, 7.5, 6, 10, 8],
    'Luis' => [8, 6.5, 8.5, 9, 10],
    'Marta' => [6, 3, 7, 6, 8]
];

notasMedias($alumnosNotas);

function notasMedias($alumnosNotas)
{
    $notaTotalAlumno = 0;
    $notaTotal = 0;
    foreach($alumnosNotas as $alumnos => $notas)
    {
        $notaTotalAlumno = 0;
        foreach($notas as $nota)
        {
            $notaTotalAlumno += $nota;
            $notaTotal += $nota;
        }
        
        echo "Nota media " . $alumnos . ": " . $notaTotalAlumno/count($notas) . "<br>";
    }

    echo "Nota media total: " . $notaTotal/20 . "<br>";
}

?>