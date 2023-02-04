<?php

class InfractionsModel extends Model implements IModel{


    private $id;
    private $infractionType;
    private $nInfraction;
    private $id_province;
    private $id_civil;
    private $id_numFunctionary;
    private $comment;
    private $payment;
    private $statusPayment;
    private $date;
    private $code_qr;

    //Declaracion de mis SETTERS
    public function setId($id){ $this->id = $id; }
    public function setInfractionType($infractionType){ $this->infractionType = $infractionType; }
    public function setNInfraction($nInfraction){ $this->nInfraction = $nInfraction; }
    public function setIdProvince($id_province){ $this->id_province = $id_province; }
    public function setIdCivil($id_civil){ $this->id_civil = $id_civil; }
    public function setIdNumFunctionary($id_numFunctionary){ $this->id_numFunctionary = $id_numFunctionary; }
    public function setComment($comment){ $this->comment = $comment; }
    public function setPayment($payment){ $this->payment = $payment; }
    public function setStatusPayment($statusPayment){ $this->statusPayment = $statusPayment; }
    public function setDate($date){ $this->date = $date; }
    public function setCodeQr($code_qr){ $this->code_qr = $code_qr; }

    //Declaracion de mis GETTERS
    public function getId(){ return $this->id;}
    public function getInfractionType(){ return $this->infractionType; }
    public function getNInfraction(){ return $this->nInfraction; }
    public function getIdProvince(){ return $this->id_province; }
    public function getIdCivil(){ return $this->id_civil;}
    public function getIdNumFunctionary(){ return $this->id_numFunctionary; }
    public function getComment(){ return $this->comment; }
    public function getPayment(){ return $this->payment; }
    public function getStatusPayment(){ return $this->StatusPayment; }
    public function getDate(){ return $this->date; }
    public function getCodeQr(){ return $this->code_qr; }



    public function __construct(){
        parent::__construct();
    }

    public function save(){
        try{
            $query = $this->prepare('INSERT INTO infractions (id_infractionType, nInfraction, id_province,id_vehicle,id_civil,id_numFunctionary,comment,code_qr,payment,statusPayment) VALUES(:id_infractionType, :nInfraction, :id_province, :id_vehicle, :id_civil, :id_numFunctionary, :comment, :code_qr, :payment, :statusPayment)');
            $query->execute([
                'id_infractionType' => $this->infractionType, 
                'nInfraction' => $this->nInfraction, 
                'id_province' => $this->id_province, 
                'id_vehicle' => $this->id_vehicle,
                'id_civil' => $this->id_civil,
                'payment' => $this->payment,  
                'id_numFunctionary' => $this->id_numFunctionary, 
                'comment' => $this->comment, 
                'code_qr' => $this->code_qr
            ]);
            if($query->rowCount()) return true;

            return false;
        }catch(PDOException $e){
            return false;
        }
    }

    public function getAll(){
        $items = [];

        try{
            $query = $this->query('SELECT * FROM infractions');

            while($p = $query->fetch(PDO::FETCH_ASSOC)){
                $item = new InfractionsModel();
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
            $user = $query->fetch(PDO::FETCH_ASSOC);

            $this->from($user);

            return $this;
        }catch(PDOException $e){
            return false;
        }
    }

    public function getAllByUserId($userid){
        $items = [];

        try{
            $query = $this->prepare('SELECT * FROM infractions WHERE id_user = :userid');
            $query->execute([ "userid" => $userid]);

            while($p = $query->fetch(PDO::FETCH_ASSOC)){
                $item = new InfractionsModel();
                $item->from($p); 
                
                array_push($items, $item);
            }

            return $items;

        }catch(PDOException $e){
            echo $e;
        }
    }

    public function getByUserIdAndLimit($userid, $n){
        $items = [];
        try{
            $query = $this->prepare('SELECT * FROM infractions WHERE id_user = :userid ORDER BY expenses.date DESC LIMIT 0, :n ');
            $query->execute([ 'n' => $n, 'userid' => $userid]);
            while($p = $query->fetch(PDO::FETCH_ASSOC)){
                $item = new InfractionsModel();
                $item->from($p); 
                
                array_push($items, $item);
            }
            error_log("InfractionUserModel::getByUserIdAndLimit(): count: " . count($items));
            return $items;
        }catch(PDOException $e){
            return false;
        }
    }
    /**
     * Regresa el monto total de las multas en este mes
     */
    function getTotalAmountThisMonth($iduser){
        try{
            $year = date('Y');
            $month = date('m');
            $query = $this->db->connect()->prepare('SELECT SUM(amount) AS total FROM infractions WHERE YEAR(date) = :year AND MONTH(date) = :month AND id_user = :iduser');
            $query->execute(['year' => $year, 'month' => $month, 'iduser' => $iduser]);

            $total = $query->fetch(PDO::FETCH_ASSOC)['total'];
            if($total == NULL) $total = 0;
            
            return $total;

        }catch(PDOException $e){
            return NULL;
        }
    }
    /**
     * Obtiene el número de transacciones por mes
     */
    function getMaxExpensesThisMonth($iduser){
        try{
           
            $query = $this->db->connect()->prepare('SELECT SUM(payment) AS total FROM expenses WHERE statusPayment = "pendiente" AND id_user = :iduser');
           

            $total = $query->fetch(PDO::FETCH_ASSOC)['total'];
            if($total == NULL) $total = 0;
            
            return $total;

        }catch(PDOException $e){
            return NULL;
        }
    }

    public function delete($id){
        try{
           /* $query = $this->prepare('DELETE FROM expenses WHERE id = :id');
            $query->execute([ 'id' => $id]);
            return true;*/
        }catch(PDOException $e){
            echo $e;
            return false;
        }
    }

    public function update(){
        try{
            $query = $this->prepare('UPDATE infractions SET statusPayment = :statusPayment, id_civil = :user WHERE id = :id');
            $query->execute([
                'title' => $this->title, 
                'amount' => $this->amount, 
                'category' => $this->categoryid, 
                'user' => $this->userid, 
                'd' => $this->date
            ]);
            return true;
        }catch(PDOException $e){
            echo $e;
            return false;
        }
    }

    public function from($array){
        $this->id = $array['id'];
        $this->title = $array['title'];
        $this->amount = $array['amount'];
        $this->categoryid = $array['category_id'];
        $this->date = $array['date'];
        $this->userid = $array['id_user'];
    }

    /**
     * Obtiene el total de amount de expenses basado en id de categoria
     */
    function getTotalByCategoryThisMonth($categoryid, $userid){
        error_log("InfractionUserModel::getTotalByCategoryThisMonth");
        try{
            $total = 0;
            $year = date('Y');
            $month = date('m');
            $query = $this->prepare('SELECT SUM(amount) AS total from expenses WHERE category_id = :categoryid AND id_user = :userid AND YEAR(date) = :year AND MONTH(date) = :month');
            $query->execute(['categoryid' => $categoryid, 'userid' => $userid, 'year' => $year, 'month' => $month]);
            
            $total = $query->fetch(PDO::FETCH_ASSOC)['total'];
            if($total == NULL) return 0;
            return $total;

        }catch(PDOException $e){
            error_log("**ERROR: InfractionUserModel::getTotalByCategoryThisMonth: error: " . $e);
            return NULL;
        }
    }

    /**
     * Obtiene el total de amount de expenses basado en id de categoria
     */
    function getNumberOfExpensesByCategoryThisMonth($categoryid, $userid){
        try{
            $total = 0;
            $year = date('Y');
            $month = date('m');
            $query = $this->prepare('SELECT COUNT(id) AS total from expenses WHERE category_id = :categoryid AND id_user = :userid AND YEAR(date) = :year AND MONTH(date) = :month');
            $query->execute(['categoryid' => $categoryid, 'userid' => $userid, 'year' => $year, 'month' => $month]);

            $total = $query->fetch(PDO::FETCH_ASSOC)['total'];
            if($total == NULL) return 0;
            return $total;

        }catch(PDOException $e){
            return NULL;
        }
    }
}








?>