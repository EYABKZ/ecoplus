
<?php

include '../view/addmateriel.php';
include '../model/materiel.php';
include '../config.php';

class materielc
{
    public function listmateriel()
    {
        $sql = "SELECT * FROM matériel";
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
        $sql = "DELETE FROM matériel WHERE id = :id";
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
        $sql = "INSERT INTO matériel  
        VALUES (NULL, :nom,:impact, :cout)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $materiel->getnom(),
                'impact' => $materiel->getimpact(),
                'cout' => $materiel->getcout()
               
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
                'UPDATE matériel SET 
                    nom = :nom, 
                    impact = :impact, 
                    coutt = :cout, 
                 
                WHERE id= :id'
            );
            $query->execute([
                'id' => $id,
                'nom' => $materiel->getnom(),
                'impact_environmental' => $materiel->getimpact_environmental(),
                'cout' => $materiel->getcout(),
               
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showmateriel($id)
    {
        $sql = "SELECT * from matériel where id = $id";
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
}
