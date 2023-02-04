<?php

class UserModel extends Model{

    private $expenseId;
    private $title;
    private $amount;
    private $categoryId;
    private $date;
    private $userId;
    private $nameCategory;
    private $color;
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getAll($userid){
        $items = [];
        try{
            $query = $this->prepare("SELECT * FROM users WHERE id=:id;");
            $query->execute(["userid" => $userid]);


            while($p = $query->fetch(PDO::FETCH_ASSOC)){
                $item = new UserModel();
                $item->from($p);
                array_push($items, $item);
            }

            return $items;

        }catch(PDOException $e){
            echo $e;
        }
    }

    public function getDebts($id)
    {
        $items = [];
        try {
            $query = $this->prepare("SELECT users.id,provinces.province,lbryinfractions.name,lbryinfractions.charge FROM users INNER JOIN infractions ON users.id=:id AND users.id=infractions.id_civil INNER JOIN lbryinfractions ON lbryinfractions.id=infractions.id_infractionType and infractions.statusPayment='pendiente' INNER JOIN provinces ON provinces.id=infractions.id_province;");
            $query->execute(['id' => $id]);
            $user = $query->fetch(PDO::FETCH_ASSOC);
            $this->id = $user['id'];
            $this->province = $user['province'];
            $this->nameInfraction = $user['name'];
            $this->charge = $user['charge'];
            while($p = $query->fetch(PDO::FETCH_ASSOC)){
                $item = new UsersFatherModel();
                $item->from($p); 
                
                array_push($items, $item);
            }

            return $items;
        } catch (PDOException $e) {
            return false;
        }
    }
    
    //FIXME: mover a ExpensesModel
    function getTotalByMonthAndCategory($date, $categoryid, $userid){
        try{
            $total = 0;
            $year = substr($date, 0, 4);
            $month = substr($date, 5, 7);
            $query = $this->db->connect()->prepare('SELECT SUM(amount) AS total from expenses WHERE category_id = :val AND id_user = :user AND YEAR(date) = :year AND MONTH(date) = :month');
            $query->execute(['val' => $categoryid, 'user' => $userid, 'year' => $year, 'month' => $month]);

            if($query->rowCount() > 0){
                $total = $query->fetch(PDO::FETCH_ASSOC)['total'];
            }else{
                return 0;
            }
            
            return $total;

        }catch(PDOException $e){
            return NULL;
        }
    }

    

    public function from($array){
        $this->expenseId = $array['expense'];
        $this->title = $array['title'];
        $this->categoryId = $array['category_id'];
        $this->amount = $array['amount'];
        $this->date = $array['date'];
        $this->userId = $array['id_user'];
        $this->nameCategory = $array['name'];
        $this->color = $array['color'];
    }

    public function toArray(){
        $array = [];
        $array['id'] = $this->expenseId;
        $array['title'] = $this->title;
        $array['category_id'] = $this->categoryId;
        $array['amount'] = $this->amount;
        $array['date'] = $this->date;
        $array['id_user'] = $this->userId;
        $array['name'] = $this->nameCategory;
        $array['color'] = $this->color;

        return $array;
    }

    public function getExpense(){return $this->expenseId;}
    public function getTitle(){return $this->title;}
    public function getCategoryId(){return $this->categoryId;}
    public function getAmount(){return $this->amount;}
    public function getDate(){return $this->date;}
    public function getUserId(){return $this->userId;}
    public function getNameCategory(){return $this->nameCategory;}
    public function getColor(){return $this->color;}
}
?>