<?php
    //Tipos de arrays
    #Escalar no definimos un indice
    $estudiantes=array("Lautaro","Lucio","Pombo"); /* otra forma  $estudiantes=["Lautaro","Lucio","Pombo"];*/
    $estudiantes[2]="Lucas";
    echo $estudiantes[2];

    #Asosiativos // pares clave-valor
    $tutor=["nombre"=>"Gabriela",
            "edad"=>54];

    #Multidimencionales
    $tutor_2=["nombre"=>"Gabriela",
            "edad"=>54,
            "cursos"=>["PHP","Java","MySQL"]];
    
    echo $tutor_2["cursos"][1];
    #agregarles nuevos elementos
    $tutor_2["pais"]="Argentina";

    #COUNT_RECURSIVE sirve para que tambien cuente los elementos dentro de la clave de un array multidimencional
    echo count($tutor_2,COUNT_RECURSIVE);
?>