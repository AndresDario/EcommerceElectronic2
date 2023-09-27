<?php
require_once("autoload.php");

$objExamen = new Examen();

// insert Examen
// $insert = $objExamen->insertExamen('Claude Rainville','Math',99);
// echo $insert;

//prend tout les examns
// $examens = $objExamen->getExamens();
// print_r("<pre>");
// print_r($examens);
// print_r("</pre>");

// $updateExamen = $objExamen->updateExamen(9, 'Jane Austen', 'Anglais', 88);
// echo $updateExamen;

//prend examen pour id 
// $examen = $objExamen->getExamenById(3);
// print_r("<pre>");
// print_r($examen);
// print_r("</pre>");

//prend examens pour matiere
// $examen = $objExamen->getExamenByMatiere("Math");
// print_r("<pre>");
// print_r($examen);
// print_r("</pre>");

// //supprimer un examen par son id
// $delete = $objExamen->delExamen(11);
// echo $delete;