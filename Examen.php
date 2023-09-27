<?php
require_once("autoload.php");

class Examen extends Conexion
{
    private $strEtudiant;
    private $strMatiere;
    private $intNote;
    private $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function insertExamen(string $etudiant, string $matiere, int $note)
    {
        $this->strEtudiant = $etudiant;
        $this->strMatiere = $matiere;
        $this->intNote = $note;

        $sql = "INSERT INTO examens(etudiant,matiere,note) VALUES(?,?,?)";
        $insert = $this->conexion->prepare($sql);
        $arrData = array($this->strEtudiant, $this->strMatiere, $this->intNote);
        $resInsert = $insert->execute($arrData);
        $idInsert = $this->conexion->lastInsertId();
        return $idInsert;
    }

    public function getExamens()
    {
        $sql = "SELECT * FROM examens";
        $execute = $this->conexion->query($sql);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    }


    public function updateExamen(int $id_examen, string $etudiant, string $matiere, int $note)
    {
        $this->strEtudiant = $etudiant;
        $this->strMatiere = $matiere;
        $this->intNote = $note;
        $sql = "UPDATE examens SET etudiant=?, matiere=?, note=? WHERE id_examen=$id_examen";
        $update = $this->conexion->prepare($sql);
        $arrData = array($this->strEtudiant, $this->strMatiere, $this->intNote);
        $resExecute = $update->execute($arrData);
        return $resExecute;
    }

    public function getExamenById(int $id)
    {
        $sql = "SELECT * FROM examens WHERE id_examen = ? ";
        $arrWhere = array($id);
        $query = $this->conexion->prepare($sql);
        $query->execute($arrWhere);
        $request = $query->fetch(PDO::FETCH_ASSOC);
        return $request;
    }

    public function getExamenByMatiere(string $matiere)
    {
        $sql = "SELECT * FROM examens WHERE matiere = ? ";
        $arrWhere = array($matiere);
        $query = $this->conexion->prepare($sql);
        $query->execute($arrWhere);
        $request = $query->fetchall(PDO::FETCH_ASSOC);
        return $request;
    }

    public function delExamen(int $id)
    {
        $sql = "DELETE FROM examens WHERE id_examen = ?";
        $arrWhere = array($id);
        $delete = $this->conexion->prepare($sql);
        $del = $delete->execute($arrWhere);
        return $del;
    }
}
