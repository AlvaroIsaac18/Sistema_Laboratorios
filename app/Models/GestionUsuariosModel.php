<?php

namespace App\Models;

use App\config\database\DbConnect;
use PDO;

class GestionUsuariosModel extends DbConnect {
    public function getAll() {
        try {
          
            $this->connect();

            $sql = "
                SELECT 
                    `idDocente` AS `id`,
                    `cedulaDocente` AS `cedula`,
                    CONCAT(`nomDocente`, ' ', `apellidoDocente`) AS `nombre_completo`,
                    LOWER(CONCAT(SUBSTRING(`nomDocente`, 1, 1), `apellidoDocente`)) AS `usuario`,
                    `correoInstitucionalDocente` AS `correo`,
                    'Docente' AS `rol`,
                    'Dpto. Académico' AS `departamento`,
                    'Activo' AS `estado`,
                    'No registrado' AS `ultimo_acceso`
                FROM `tbldocente`
                
                UNION ALL
                
                SELECT 
                    `idTecnico` AS `id`,
                    `cedulaTecnico` AS `cedula`,
                    `nomTecnico` AS `nombre_completo`,
                    LOWER(REPLACE(`nomTecnico`, ' ', '')) AS `usuario`,
                    CONCAT(LOWER(REPLACE(`nomTecnico`, ' ', '')), '@uptaeb.edu.ve') AS `correo`,
                    'Auxiliar' AS `rol`,
                    `direccionTecnico` AS `departamento`,
                    'Activo' AS `estado`,
                    'No registrado' AS `ultimo_acceso`
                FROM `tbltecnico`
                
                UNION ALL
                
                SELECT 
                    `idPersonalDireccion` AS `id`,
                    `cedulaPersonalDireccion` AS `cedula`,
                    `nomPersonalDireccion` AS `nombre_completo`,
                    LOWER(REPLACE(`nomPersonalDireccion`, ' ', '')) AS `usuario`,
                    CONCAT(LOWER(REPLACE(`nomPersonalDireccion`, ' ', '')), '@uptaeb.edu.ve') AS `correo`,
                    'Administrador' AS `rol`,
                    `cargoPersonalDireccion` AS `departamento`,
                    'Activo' AS `estado`,
                    'No registrado' AS `ultimo_acceso`
                FROM `tblpersonaldireccion`
                
                ORDER BY `nombre_completo` ASC
            ";

           
            $response = $this->con->prepare($sql);
            $response->execute();

        
            return $response->fetchAll(PDO::FETCH_ASSOC);

        } catch(\PDOException $e) {
            die("Error crítico en GestionUsuariosModel::getAll: " . $e->getMessage());
        }
    }

   
    public function delete($id, $rol) {
        try {
            $this->connect();
            
            
            if ($rol === 'Docente') {
                $sql = "DELETE FROM `tbldocente` WHERE `idDocente` = :id";
            } elseif ($rol === 'Auxiliar') {
                $sql = "DELETE FROM `tbltecnico` WHERE `idTecnico` = :id";
            } else {
                $sql = "DELETE FROM `tblpersonaldireccion` WHERE `idPersonalDireccion` = :id";
            }

            $response = $this->con->prepare($sql);
            $response->bindParam(':id', $id, PDO::PARAM_INT);

            return $response->execute();

        } catch(\PDOException $e) {
            die("Error al eliminar el registro de personal: " . $e->getMessage());
        }
    }
}