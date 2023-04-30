<?php
include '../config.php';
include '../Model/Reservation.php';

class reservationC
{
    public function listreservation()
    {
        $sql = "SELECT * FROM reservation";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deletreservation($id_reservation)
    {
        $sql = "DELETE FROM reservation WHERE id_reservation = :id_reservation";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_reservation', $id_reservation);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addreservation($reservation)
    {
        $sql = "INSERT INTO reservation  
        VALUES (NULL, :fn,:ln, :ad,:qt,:id)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'qt' => $reservation->getquantité(),
                'id' => $reservation->getidmateriel(),
               
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updatereservation($reservation, $id_reservation)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE reservation SET 
                   quantité = :quantité, 
                    idmateriel= :idmateriel
                   
                WHERE id_reservation= :id_reservation'
            );
            $query->execute([
                
                'quantité' => $reservation->getquantité(),
                'idmateriel' => $reservation->getidmateriel()


            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showreservation($id_reservation)
    {
        $sql = "SELECT * from reservation where id_reservation = $id_reservation";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $reservation = $query->fetch();
            return $reservation;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
