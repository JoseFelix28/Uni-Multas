<?php

//Esta es mi clase Padre

class UsersFatherModel extends Model implements IModel
{

    private $id;
    private $role;
    private $username;
    private $password;
    private $name;
    private $lastName;
    private $bornDate;
    private $nationalID;
    private $gender;
    private $debt;
    private $nFunctionary;
    private $id_provinceModerator;
    private $photo;
    private $mailAddress;
    private $id_vehicle;
    private $nLicense;
    private $typeLicense;
    private $statusUser;
    private $country;


    public function __construct()
    {

        parent::__construct();

        $this->username = '';
        $this->password = '';
        $this->role = '';
        $this->name = '';
        $this->lastName = '';
        $this->bornDate = date("F j, Y, g:i a");
        $this->nationality = '';
        $this->nationalID = '';
        $this->gender = '';
        $this->id_positionFunctionary = '';
        $this->nFunctionary = '';
        $this->id_provinceModerator = '';
        $this->id_provinceModerator = '';
        $this->photo = '';
        $this->mailAddress = '';
        $this->id_vehicle = 0.0;
        $this->nLicense = 0.0;
        $this->typeLicense = '';
        $this->statusUser = '';
        $this->country = 0.0;
    }
    // Funciones Basicas de Usuarios

    public function save()
    {
        try {
            $query = $this->prepare('INSERT INTO users (`username`, `role`, `password`, `name`, `sndName`, `lastName`, `bornDate`, `nationalID`, `id_country`, `mailAddress`, `nLicense`, `typeLicense`, `gender`) 
            VALUES(:username, :role, :password, :name,:sndName, :lastName,:dateBorn, :nationalID,:country,:mailAddress,:nLicense,:typeLicense,:gender)');
            $query->execute([
                'username'  => $this->username,
                'password'  => $this->password,
                'nationalID'    => $this->nationalID,
                'name'     => $this->name,
                'sndName'     => $this->sndName,
                'lastName'      => $this->lastName,
                'mailAddress'     => $this->mailAddress,
                'dateBorn'     => $this->dateBorn,
                'nLicense'     => $this->nLicense,
                'typeLicense'     => $this->typeLicense,
                'gender'     => $this->gender,
                'id_country'     => $this->country,
                'role'         => $this->role,  
            ]);
            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }

    public function getAll()
    {
        $items = [];

        try {
            $query = $this->query('SELECT * FROM users');

            while ($p = $query->fetch(PDO::FETCH_ASSOC)) {
                $item = new UsersFatherModel();
                $item->setId($p['id']);
                $item->setUsername($p['username']);
                $item->setPassword($p['password'], false);
                $item->setRole($p['role']);
                $item->setName($p['name']);
                $item->setSndName($p['sndName']);
                $item->setlastName($p['lastName']);


                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            echo $e;
        }
    }





    function updateName($name, $iduser)
    {
        try {
            $query = $this->db->connect()->prepare('UPDATE users SET name = :val WHERE id = :id');
            $query->execute(['val' => $name, 'id' => $iduser]);

            if ($query->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return NULL;
        }
    }

    function updateLastName($lastName, $iduser)
    {
        try {
            $query = $this->db->connect()->prepare('UPDATE users SET name = :val WHERE id = :id');
            $query->execute(['val' => $lastName, 'id' => $iduser]);

            if ($query->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return NULL;
        }
    }

    function updatePhoto($name, $iduser)
    {
        try {
            $query = $this->db->connect()->prepare('UPDATE users SET photo = :val WHERE id = :id');
            $query->execute(['val' => $name, 'id' => $iduser]);

            if ($query->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return NULL;
        }
    }

    function updatePassword($new, $iduser)
    {
        try {
            $hash = password_hash($new, PASSWORD_DEFAULT, ['cost' => 10]);
            $query = $this->db->connect()->prepare('UPDATE users SET password = :val WHERE id = :id');
            $query->execute(['val' => $hash, 'id' => $iduser]);

            if ($query->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return NULL;
        }
    }




    public function get($id)
    {
        try {
            $query = $this->prepare('SELECT users.id,users.username,users.password,users.role,users.name,users.lastName,users.nationalID,users.mailAddress,users.nLicense,users.typeLicense,users.debt FROM users WHERE id = :id');
            $query->execute(['id' => $id]);
            $user = $query->fetch(PDO::FETCH_ASSOC);
            $this->id = $user['id'];
            $this->username = $user['username'];
            $this->password = $user['password'];
            $this->role = $user['role'];
            $this->name = $user['name'];
            $this->lastName = $user['lastName'];
            $this->photo = $user['photo'];
            $this->nationalID = $user['nationalID'];
            $this->mailAddress = $user['mailAddress'];
            $this->nLicense = $user['nLicense'];
            $this->typeLicense = $user['typeLicense'];
            $this->debt = $user['debt'];
            return $this;
        } catch (PDOException $e) {
            return false;
        }
    }



    public function delete($id)
    {
        try {
            $query = $this->prepare('UPDATE users SET statusUser = :statusUser WHERE id = :id');
            $query->execute([
                'id'        => $this->id,
                'statusUser' => $this->statusUser
            ]);
            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }

    public function update()
    {
        try {
            $query = $this->prepare('UPDATE users SET password = :password, role = :role WHERE id = :id');
            $query->execute([
                'id'        => $this->id,
                'password' => $this->password,
                'role' => $this->role
            ]);
            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }

    public function exists($username)
    {
        try {
            $query = $this->prepare('SELECT username FROM users WHERE username = :username');
            $query->execute(['username' => $username]);

            if ($query->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }

    function comparePasswords($current, $userNamecheck)
    {
        try {
            $query = $this->db->connect()->prepare('SELECT username, password FROM USERS WHERE id = :id');
            $query->execute(['username' => $userNamecheck]);

            if ($row = $query->fetch(PDO::FETCH_ASSOC)) return password_verify($current, $row['password']);

            return NULL;
        } catch (PDOException $e) {
            return NULL;
        }
    }


    public function from($array)
    {
        $this->id = $array['id'];
        $this->username = $array['username'];
        $this->password = $array['password'];
        $this->role = $array['role'];
        $this->debt = $array['debt'];
        $this->photo = $array['photo'];
        $this->name = $array['name'];
    }


    private function getHashedPassword($password)
    {
        return password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);
    }



    public function setPassword($password, $hash = true)
    {
        if ($hash) {
            $this->password = $this->getHashedPassword($password);
        } else {
            $this->password = $password;
        }
    }




    // Declaracion de mis Setters en la clase Padre

    public function setUserName($username){$this->username = $username;}

    public function setId($id){$this->id = $id;}
    public function setRole($role){$this->role = $role;}
    public function setName($name){$this->name = $name;}
    public function setSndName($SndName){$this->setSndName=$SndName;}
    public function setLastName($lastName){$this->lastName = $lastName;}
    public function setNationality($nationality){$this->nationality = $nationality;}
    public function setNationalityID($nationalID){$this->nationalID = $nationalID;}
    public function setBornDate($bornDate){$this->role = $bornDate;}
    public function setDebt($debt){$this->debt = $debt;}
    public function setGender($gender){$this->gender = $gender;}
    public function setPositionFunctionary($positionFunctionary){$this->positionFunctionary = $positionFunctionary;}
    public function setNFunctionary($nFunctionary){$this->nFunctionary = $nFunctionary;}
    public function setID_ProvinceFunctionary($nFunctionary){$this->nFunctionary = $nFunctionary;}
    public function setMailAddress($mailAddress){$this->mailAddress = $mailAddress;}
    public function setIDVehicle($id_vehicle){$this->id_vehicle = $id_vehicle;}
    public function setNLicense($nLicense){$this->nLicense = $nLicense;}
    public function setTypeLicense($typeLicense){$this->typeLicense = $typeLicense;}
    public function setPhoto($photo){$this->photo = $photo;}
    public function setCountry($country){$this->country = $country;}

    // Declaracion de mis Getters en la clase Padre

    public function getId(){return $this->id;}
    public function getUsername(){return $this->username;}
    public function getPassword(){return $this->password;}
    public function getRole(){return $this->role;}
    public function getName(){return $this->name;}
    public function getLastName(){return $this->lastName;}
    public function getNationalID(){return $this->nationalID;}
    public function getTypeNationality(){return $this->typeLicense;}
    public function getDebt(){return $this->debt;}
    public function getGender(){return $this->gender;}
    public function getBornDate(){return $this->bornDate;}
    public function getPositionFunctionary(){return $this->PositionFunctionary;}
    public function getNFunctionary(){return $this->nFunctionary;}
    public function getIDProvinceFunctionary(){return $this->id_provinceModerator;}
    public function getMailAddress(){return $this->mailAddress;}
    public function getIDVehicle(){return $this->id_vehicle;}
    public function getNLicense(){return $this->nLicense;}
    public function getTypeLicense(){return $this->typeLicense;}
    public function getStatusUser(){return $this->statusUser;}
    public function getPhoto(){return $this->photo;}
}
