<?php

 require 'libraries/phpqrcode/qrlib.php';

class Infractions extends SessionController{


    private $userid;


    function __construct(){
        parent::__construct();

        $this->user = $this->getUserSessionData();
        error_log("Infraction::constructor() ");
    }

     function render(){
        error_log("Infraction::RENDER() ");

        $this->view->render('dashboard/index', [
            'user' => $this->user,
            'dates' => $this->getDateList(),
            'categories' => $this->getCategoryList()
        ]);
    }

    function newInfraction(){
        error_log('Expenses::newExpense()');
        if(!$this->existPOST(['title', 'amount', 'category', 'date'])){
            $this->redirect('dashboard', ['error' => Errors::ERROR_EXPENSES_NEWEXPENSE_EMPTY]);
            return;
        }

        if($this->user == NULL){
            $this->redirect('dashboard', ['error' => Errors::ERROR_EXPENSES_NEWEXPENSE]);
            return;
        }

        $infraction = new InfractionsModel();

        $infraction->setTitle($this->getPost('title'));
        $infraction->setAmount((float)$this->getPost('amount'));
        $infraction->setCategoryId($this->getPost('category'));
        $infraction->setDate($this->getPost('date'));
        $infraction->setUserId($this->user->getId());

        $infraction->save();
        $this->redirect('dashboard', ['success' => Success::SUCCESS_EXPENSES_NEWEXPENSE]);
    }

    // new infraction UI
    function create(){
        $categories = new InfractionsModel();
        $this->view->render('infractions/create', [
            "categories" => $categories->getAll(),
            "user" => $this->user
        ]);
    } 

   

function generateQr($username)
{

	$dir = 'storage/'.$username . '/';

	if (!file_exists($dir))
		mkdir($dir);

	$filename = $dir . 'qr.png';

	$tamanio = 15;
	$level = 'H';
	$frameSize = 1;
	$contenido = 'Hola mano';

	QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);

	return '<img src="' . $filename . '" />';
}


    function getCategoryIds(){
        $JoinInfractionsModel = new InfractionsModel();
        $categories = $JoinInfractionsModel->getAll($this->user->getId());

        $res = [];
        foreach ($categories as $cat) {
            array_push($res, $cat->getCategoryId());
        }
        $res = array_values(array_unique($res));
        return $res;
    }

    // crea una lista con los meses donde hay infractions
    private function getDateList(){
        $months = [];
        $res = [];
        $JoinInfractionsModel = new InfractionsModel();
        $infractions = $JoinInfractionsModel->getAll($this->user->getId());

        foreach ($infractions as $infraction) {
            array_push($months, substr($infraction->getDate(),0, 7 ));
        }
        $months = array_values(array_unique($months));
        //mostrar los últimos 3 meses
        if(count($months) >3){
            array_push($res, array_pop($months));
            array_push($res, array_pop($months));
            array_push($res, array_pop($months));
        }
        return $res;
    }

    // crea una lista con las categorias donde hay infractions
    private function getCategoryList(){
        $res = [];
        $JoinInfractionsModel = new InfractionsModel();
        $infractions = $JoinInfractionsModel->getAll($this->user->getId());

        foreach ($infractions as $infraction) {
            array_push($res, $infraction->getNameCategory());
        }
        $res = array_values(array_unique($res));

        return $res;
    }

    // crea una lista con los colores dependiendo de las categorias
    private function getCategoryColorList(){
        $res = [];
        $JoinInfractionsModel = new InfractionsModel();
        $infractions = $JoinInfractionsModel->getAll($this->user->getId());

        foreach ($infractions as $infraction) {
            array_push($res, $infraction->getColor());
        }
        $res = array_unique($res);
        $res = array_values(array_unique($res));

        return $res;
    }

    

    // devuelve el JSON para las llamadas AJAX
    function getHistoryJSON(){
        header('Content-Type: application/json');
        $res = [];
        $joinExpensesCategories = new InfractionsModel();
        $infractions = $joinExpensesCategories->getAll($this->user->getId());

        foreach ($infractions as $infraction) {
            array_push($res, $infraction->toArray());
        }
        
        echo json_encode($res);

    }

    function getInfractionsJSON(){
        header('Content-Type: application/json');

        $res = [];
        $categoryIds     = $this->getCategoryIds();
        $categoryNames  = $this->getCategoryList();
        $categoryColors = $this->getCategoryColorList();

        array_unshift($categoryNames, 'mes');
        array_unshift($categoryColors, 'categorias');
        /* array_unshift($categoryNames, 'categorias');
        array_unshift($categoryColors, NULL); */

        $months = $this->getDateList();

        for($i = 0; $i < count($months); $i++){
            $item = array($months[$i]);
            for($j = 0; $j < count($categoryIds); $j++){
                $total = $this->getTotalByMonthAndCategory( $months[$i], $categoryIds[$j]);
                array_push( $item, $total );
            }   
            array_push($res, $item);
        }

        array_unshift($res, $categoryNames);
        array_unshift($res, $categoryColors);
        
        echo json_encode($res);
    }

    function getTotalByMonthAndCategory($date, $categoryid){
        $iduser = $this->user->getId();
        $JoinInfractionsModel = new InfractionsModel();

        $total = $JoinInfractionsModel->getTotalByMonthAndCategory($date, $categoryid, $iduser);
        if($total == NULL) $total = 0;
        return $total;
    }

    function delete($params){
        error_log("Expenses::delete()");
        
        if($params === NULL) $this->redirect('infractions', ['error' => Errors::ERROR_ADMIN_NEWCATEGORY_EXISTS]);
        $id = $params[0];
        error_log("Expenses::delete() id = " . $id);
        $res = $this->model->delete($id);

        if($res){
            $this->redirect('infractions', ['success' => Success::SUCCESS_EXPENSES_DELETE]);
        }else{
            $this->redirect('infractions', ['error' => Errors::ERROR_ADMIN_NEWCATEGORY_EXISTS]);
        }
    }

}

?>