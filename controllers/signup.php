<?php
class Signup extends SessionController
{

    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $this->view->errorMessage = '';
        $this->view->render('login/index');
    }

    function newUser()
    {
        if ($this->existPOST(['name', 'sndName', 'lastName', 'DNI', 'mailAddress', 'usernameRegister', 'passwordRegister', 'passwordVerify', 'nLicense', 'typeLicense', 'gender', 'dateBorn', 'country'])) {

            $name = htmlspecialchars($this->getPost('name'));
            $sndName = htmlspecialchars($this->getPost('sndName'));
            $lastName = htmlspecialchars($this->getPost('lastName'));
            $DNI = htmlspecialchars($this->getPost('DNI'));
            $mailAddress = htmlspecialchars($this->getPost('mailAddress'));
            $username = htmlspecialchars($this->getPost('usernameRegister'));
            $password = htmlspecialchars($this->getPost('passwordRegister'));
            $passwordVerify = htmlspecialchars($this->getPost('passwordVerify'));
            $nLicense = htmlspecialchars($this->getPost('nLicense'));
            $typeLicense = htmlspecialchars($this->getPost('typeLicense'));
            $gender = htmlspecialchars($this->getPost('gender'));
            $dateBorn = htmlspecialchars($this->getPost('dateBorn'));
            $country = htmlspecialchars($this->getPost('country'));


           

                                

 //Envio de los datos sanitizados al modelo
 $user = new UsersFatherModel();
 $user->setName($name); 
 $user->setSndName($sndName);
 $user->setLastName($lastName);
 $user->setUsername($username);
 $user->setPassword($password);
 $user->setNationalityID($DNI);
 $user->setNLicense($nLicense);
 $user->setTypeLicense($typeLicense);
 $user->setGender($gender);
 $user->setMailAddress($mailAddress);
 $user->setBornDate($dateBorn);
 $user->setCountry($country);
 $user->setRole("user");

 

 $query = ("INSERT INTO users (`username` `password`, `name`, `sndName`, `lastName`, `bornDate`, `nationalID`, `id_country`, `mailAddress`, `nLicense`, `typeLicense`, `gender`) 
 VALUES('$name', '$password','$user->setRole('user')', '$name','$sndName', '$lastName','$dateBorn', '$DNI','$country','$mailAddress','$nLicense','$typeLicense','$gender')");
            //validacion para el registro de usuario

           /* //Validar Nombre
            if (!ctype_alpha($name) || $name == '' || empty($name) ) {

                $this->redirect('login', ['error' => Errors::ERROR_SIGNUP_NAME_EMPTY]);
            } else
        
                //Validar segundo nombre
                if (!ctype_alpha($sndName)  ){
                    $this->redirect('login', ['error' => Errors::ERROR_SIGNUP_SNDNAME_LENGHT]);
                } else 
                //Validar Apellido
                if ($lastName == '' || empty($lastName) ) {

                    echo  ['error' => Errors::ERROR_SIGNUP_LASTNAME_EMPTY];
                } else
            
                    if ((strlen($username) < 1) || (strlen($username) > 50)) {
                        $this->redirect('', ['error' => Errors::ERROR_SIGNUP_LASTNAME_LENGHT]);
                    } else 
            // Username vacio
            if ($username == '' || empty($username) ) {

                $this->redirect('login', ['error' => Errors::ERROR_SIGNUP_USERNAME_EMPTY]);
            } else
                // Username menor a 8 caracteres
                if ((strlen($username) < 8) || (strlen($username) > 12)) {
                    $this->redirect('login', ['error' => Errors::ERROR_SIGNUP_USERNAME_LENGHT]);
                } else

                    // Username diferente a valores alfanumericos
                    if (!ctype_alnum($username)) {
                        $this->redirect('login', ['error' => Errors::ERROR_SIGNUP_USERNAME_ALPHANUM]);
                    } else



                        // Contraseña vacia
                        if ($password == '' || empty($password) || $passwordVerify == '' || empty($passwordVerify)) {

                            $this->redirect('login', ['error' => Errors::ERROR_SIGNUP_PASSWORD_EMPTY]);
                        } else if ($password != $passwordVerify) {
                            $this->redirect('login', ['error' => Errors::ERROR_SIGNUP_PASSWORD_WRONG]);
                        } else

                            // contraseña diferente a valores alfanumericos
                            if (!ctype_alnum($password)) {
                                $this->redirect('login', ['error' => Errors::ERROR_SIGNUP_PASSWORD_ALPHANUM]);
                            } else
                                // Contraseña menor a 8 caracteres o mayor a 10
                                if ((strlen($password) < 8) || (strlen($password) > 10)) {
                                    $this->redirect('login', ['error' => Errors::ERROR_SIGNUP_PASSWORD_LENGHT]);
                                } else

          
            if ($user->exists($username)) {

                $this->redirect('login', ['error' => Errors::ERROR_SIGNUP_NEWUSER_EXISTS]);
            } else */
            
            
            if ($user->save()) {
                
                $this->redirect('', ['success' => Success::SUCCESS_SIGNUP_NEWUSER]);
            } else {
                
                $this->redirect('login', ['error' => Errors::ERROR_SIGNUP_NEWUSER]);
             
            }
        } else {

            $this->redirect('login', ['error' => Errors::ERROR_SIGNUP_POST]);
        
        }
    
    }
}
