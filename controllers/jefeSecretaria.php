
<?php

class JefeSecretaria extends SessionController
{

    private $jefeSecretaria;

    function __construct()
    {
        parent::__construct();

        $this->user = $this->getUserSessionData();
        error_log("jefeSecretaria " . $this->user->getName());
    }

    function render()
    {
        $this->view->render('jefeSecretaria/index', [
            "user" => $this->user
        ]);
    }

    function updateDebt()
    {
        if (!$this->existPOST('debt')) {
            $this->redirect('jefeSecretaria', ['error' => Errors::ERROR_USER_UPDATEBUDGET]);
            return;
        }

        $debt = $this->getPost('debt');

        if (empty($debt) || $debt === 0 || $debt < 0) {
            $this->redirect('jefeSecretaria', ['error' => Errors::ERROR_USER_UPDATEBUDGET_EMPTY]);
            return;
        }

        $this->jefeSecretaria->setDebt($debt);
        if ($this->jefeSecretaria->update()) {
            $this->redirect('jefeSecretaria', ['success' => Success::SUCCESS_USER_UPDATEBUDGET]);
        } else {
            //error
        }
    }

    function updateName()
    {
        if (!$this->existPOST('name')) {
            $this->redirect('jefeSecretaria', ['error' => Errors::ERROR_USER_UPDATEBUDGET]);
            return;
        }

        $name = $this->getPost('name');

        if (empty($name)) {
            $this->redirect('jefeSecretaria', ['error' => Errors::ERROR_USER_UPDATEBUDGET]);
            return;
        }

        $this->jefeSecretaria->setName($name);
        if ($this->jefeSecretaria->update()) {
            $this->redirect('jefeSecretaria', ['success' => Success::SUCCESS_USER_UPDATEBUDGET]);
        } else {
            //error
        }
    }

    function updatePassword()
    {
        if (!$this->existPOST(['current_password', 'new_password'])) {
            $this->redirect('jefeSecretaria', ['error' => Errors::ERROR_USER_UPDATEPASSWORD]);
            return;
        }

        $current = $this->getPost('current_password');
        $new     = $this->getPost('new_password');

        if (empty($current) || empty($new)) {
            $this->redirect('jefeSecretaria', ['error' => Errors::ERROR_USER_UPDATEPASSWORD_EMPTY]);
            return;
        }

        if ($current === $new) {
            $this->redirect('jefeSecretaria', ['error' => Errors::ERROR_USER_UPDATEPASSWORD_WRONG]);
            return;
        }

        //validar que el current es el mismo que el guardado
        $newHash = $this->model->comparePasswords($current, $this->jefeSecretaria->getId());
        if ($newHash != NULL) {
            //si lo es actualizar con el nuevo
            $this->jefeSecretaria->setPassword($new, true);

            if ($this->jefeSecretaria->update()) {
                $this->redirect('jefeSecretaria', ['success' => Success::SUCCESS_USER_UPDATEPASSWORD]);
            } else {
                //error
                $this->redirect('jefeSecretaria', ['error' => Errors::ERROR_USER_UPDATEPASSWORD]);
            }
        } else {
            $this->redirect('jefeSecretaria', ['error' => Errors::ERROR_USER_UPDATEPASSWORD]);
            return;
        }
    }

    function updatePhoto()
    {
        if (!isset($_FILES['photo'])) {
            $this->redirect('jefeSecretaria', ['error' => Errors::ERROR_USER_UPDATEPHOTO]);
            return;
        }
        $photo = $_FILES['photo'];

        $target_dir = "public/img/photos/";
        $extarr = explode('.', $photo["name"]);
        $filename = $extarr[sizeof($extarr) - 2];
        $ext = $extarr[sizeof($extarr) - 1];
        $hash = md5(Date('Ymdgi') . $filename) . '.' . $ext;
        $target_file = $target_dir . $hash;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($photo["tmp_name"]);
        if ($check !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            //echo "File is not an image.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            //echo "Sorry, your file was not uploaded.";
            $this->redirect('jefeSecretaria', ['error' => Errors::ERROR_USER_UPDATEPHOTO_FORMAT]);
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($photo["tmp_name"], $target_file)) {
                $this->model->updatePhoto($hash, $this->jefeSecretaria->getId());
                $this->redirect('jefeSecretaria', ['success' => Success::SUCCESS_USER_UPDATEPHOTO]);
            } else {
                $this->redirect('jefeSecretaria', ['error' => Errors::ERROR_USER_UPDATEPHOTO]);
            }
        }
    }
}

?>