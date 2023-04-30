<?php
include '../config.php';
include '../Model/Materiel.php';

class materielC
{
    public function listmateriel()
    {
        $sql = "SELECT * FROM materiel";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deletemateriel($id)
    {
        $sql = "DELETE FROM materiel WHERE idmateriel = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addmateriel($materiel)
    {
        $sql = "INSERT INTO materiel (nom,impact_environmental,cout) 
        VALUES (:fn,:ln, :ad)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $materiel->getnom(),
                'ln' => $materiel->getimpact_environmental(),
                'ad' => $materiel->getcout()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updatemateriel($materiel, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE materiel SET 
                    nom = :nom, 
                    impact_environmental = :impact_environmental, 
                    cout = :cout 
                WHERE idmateriel= :idmateriel'
            );
            $query->execute([
                'idmateriel' => $id,
                'nom' => $materiel->getnom(),
                'impact_environmental' => $materiel->getimpact_environmental(),
                'cout' => $materiel->getcout()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showmateriel($id)
    {
        $sql = "SELECT * from materiel where idmateriel = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $materiel = $query->fetch();
            return $materiel;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    function addRes($id,$quan)
    {
        $sql = "INSERT INTO reservation_materiel (id_reservation,idmateriel,quantite_res)  VALUES ((SELECT MAX(id_reservation) FROM reservation),:ln, :ad)";
        $sql1 = "UPDATE reservation_materiel 
        SET quantite_res = quantite_res + :ad
        WHERE id_reservation = (SELECT MAX(id_reservation) FROM reservation) 
        AND idmateriel = :ln; " ;
;
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'ln' => $id,
                'ad' => $quan
            ]);
        } catch (Exception $e) {
            try {
                $query = $db->prepare($sql1);
                $query->execute([
                    'ln' => $id,
                    'ad' => $quan
                ]);
            } catch (Exception $e) {echo 'Error: ' . $e->getMessage();}
        }
    }
    function NewRes()
    {
        $sql = "INSERT INTO reservation (date_deb, statut) 
        VALUES (NOW(), 'En cours');";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
        } catch (Exception $e) {
        }
    }

}
