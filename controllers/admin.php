<?php

class Admin extends SessionController
{


    function __construct()
    {
        parent::__construct();

        $this->user = $this->getUserSessionData();
        error_log("user " . $this->user->getName());
    }

    function render()
    {
        $this->view->render('admin/index', [
            "user" => $this->user
        ]);
    }

    function createNuevoJefeSecretaria()
    {
        $this->view->render('admin/NJFSecretaria');
    }

    function newCategory()
    {
        error_log('Admin::newJefeSecretaria()');
        if ($this->existPOST(['role'])) {
            $roleJf = $this->getPost('role');
            $jefeSecretariaModel = new JefeSecretariaModel();

            if (!$jefeSecretariaModel->exists($roleJf)) {
                $jefeSecretariaModel->save();
                error_log('Admin::newCategory() => new category created');
                $this->redirect('admin', ['success' => Success::SUCCESS_ADMIN_NEWCATEGORY]);
            } else {
                $this->redirect('admin', ['error' => Errors::ERROR_ADMIN_NEWCATEGORY_EXISTS]);
            }
        }
    }

    private function getStatistics()
    {
        $res = [];

        $usersFModel = new UsersFatherModel();
        $users = $usersFModel->getAll();

        $expenseModel = new InfractionsModel();
        $expenses = $expenseModel->getAll();

        $categoriesModel = new CategoriesModel();
        $categories = $categoriesModel->getAll();

        $res['count-users'] = count($users);
        $res['count-expenses'] = count($expenses);
        $res['max-expenses'] = $this->getMaxAmount($expenses);
        $res['min-expenses'] = $this->getMinAmount($expenses);
        $res['avg-expenses'] = $this->getAverageAmount($expenses);
        $res['count-categories'] = count($categories);
        $res['mostused-category'] = $this->getCategoryMostUsed($expenses);
        $res['lessused-category'] = $this->getCategoryLessUsed($expenses);
        return $res;
    }

    private function getMaxAmount($expenses)
    {
        $max = 0;
        foreach ($expenses as $expense) {
            $max = max($max, $expense->getAmount());
        }

        return $max;
    }
    private function getMinAmount($expenses)
    {
        $min = $this->getMaxAmount($expenses);
        foreach ($expenses as $expense) {
            $min = min($min, $expense->getAmount());
        }

        return $min;
    }

    private function getAverageAmount($expenses)
    {
        $sum = 0;
        foreach ($expenses as $expense) {
            $sum += $expense->getAmount();
        }

        return ($sum / count($expenses));
    }

    private function getCategoryMostUsed($expenses)
    {
        $repeat = [];

        foreach ($expenses as $expense) {
            if (!array_key_exists($expense->getCategoryId(), $repeat)) {
                $repeat[$expense->getCategoryId()] = 0;
            }
            $repeat[$expense->getCategoryId()]++;
        }

        $categoryMostUsed = max($repeat);
        $categoryModel = new CategoriesModel();
        $categoryModel->get($categoryMostUsed);

        $category = $categoryModel->getName();

        return $category;
    }

    private function getCategoryLessUsed($expenses)
    {
        $repeat = [];

        foreach ($expenses as $expense) {
            if (!array_key_exists($expense->getCategoryId(), $repeat)) {
                $repeat[$expense->getCategoryId()] = 0;
            }
            $repeat[$expense->getCategoryId()]++;
        }

        $categoryMostUsed = min($repeat);
        $categoryModel = new CategoriesModel();
        $categoryModel->get($categoryMostUsed);

        $category = $categoryModel->getName();

        return $category;
    }
}
