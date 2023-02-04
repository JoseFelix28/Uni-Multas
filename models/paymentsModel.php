
<?php

abstract class PaymentsModel extends Model {

    private $id;
    private $statusPayment;


    public function __construct(){
        parent::__construct();
    }

    public function update(){
        try{
            $query = $this->db->connect()->prepare('UPDATE infractions SET  statusPayment= :statusPayment WHERE id = :id');
            $query->execute([
                'id' => $this->id, 
                'statusPayment' => $this->statusPayment
            ]);
            return true;
        }catch(PDOException $e){
            echo $e;
            return false;
        }
    }
    public function getAll(){
        $items = [];

        try{
            $query = $this->query('SELECT * FROM Infractions');

            while($p = $query->fetch(PDO::FETCH_ASSOC)){
                $item = new PaymentsModel();
                $item->from($p); 
                
                array_push($items, $item);
            }

            return $items;

        }catch(PDOException $e){
            echo $e;
        }
    }
    
    public function get($id){
        try{
            $query = $this->prepare('SELECT * FROM infractions WHERE id = :id');
            $query->execute([ 'id' => $id]);
            $category = $query->fetch(PDO::FETCH_ASSOC);

            $this->from($category);

            return $this;
        }catch(PDOException $e){
            return false;
        }
    }
   


    public function from($array){
        $this->id = $array['id'];
        $this->statusPayment = $array['statusPayment'];

    }

    

    public function setId($id){$this->id = $id;}
    public function setStatusPayment($statusPayment){$this->statusPayment = $statusPayment;}


    public function getId(){return $this->id;}
    public function getStatusPayment(){ return $this->statusPayment;}


}

?>