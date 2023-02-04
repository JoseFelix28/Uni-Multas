<?php

class Errors{
    
    const ERROR_ADMIN_NEWCATEGORY_EXISTS        = "1f8f0ae8963b16403c3ec9ebb851f156";
    const ERROR_USER_UPDATENAME_EMPTY           = "0f0735f8603324a7bca482debdf088fa";
    const ERROR_USER_UPDATENAME                 = "98217b0c263b136bf14925994ca7a0aa";
    const ERROR_USER_UPDATEPASSWORD             = "365009a3644ef5d3cf7a229a09b4d690";
    const ERROR_USER_UPDATEPASSWORD_EMPTY       = "0f0735f8603324a7bca482debdf088fa";
    const ERROR_USER_UPDATEPASSWORD_WRONG       = "27731b37e286a3c6429a1b8e44ef3ff6";
    const ERROR_USER_UPDATEPHOTO                = "dfb4dc6544b0dae81ea132de667b2a5d";
    const ERROR_USER_UPDATEPHOTO_FORMAT         = "53f3554f0533aa9f20fbf46bd5328430";
    const ERROR_LOGIN_AUTHENTICATE              = "11c37cfab311fbe28652f4947a9523c4";
    const ERROR_LOGIN_AUTHENTICATE_EMPTY        = "2194ac064912be67fc164539dc435a42";
    const ERROR_LOGIN_AUTHENTICATE_DATA         = "bcbe63ed8464684af6945ad8a89f76f8";
    const ERROR_SIGNUP_NEWUSER                  = "1fdce6bbf47d6b26a9cd809ea1910222";
    const ERROR_SIGNUP_USERNAME_EMPTY           = "1fdce6bbf47d6b26a9cd809ea1910256";
    const ERROR_SIGNUP_PASSWORD_EMPTY           = "bcbe63ed8464684af6945ad8a89f76f8";
    const ERROR_SIGNUP_PASSWORD_WRONG           = "1fdce6bbf47d6b26a9cd809ea191026r";
    const ERROR_SIGNUP_NEWUSER_EMPTY            = "a5bcd7089d83f45e17e989fbc86003ed";
    const ERROR_SIGNUP_USERNAME_LENGHT          = "e2e23on3oi3dni3d32noed3244334242"; 
    const ERROR_SIGNUP_NEWUSER_EXISTS           = "a74accfd26e06d012266810952678cf3"; 
    const ERROR_SIGNUP_USERNAME_ALPHANUM        = "5bcd7089d83f455bcd7089d83f455bcf";
    const ERROR_SIGNUP_PASSWORD_ALPHANUM        = "je43lkm34lkm345klm5435455bcd7089";
    const ERROR_SIGNUP_PASSWORD_LENGHT          = "23n32lk5bcd7089lknn32kl4n42l3k43";
    const ERROR_SIGNUP_POST                     = "32kj3lejd3d3jdpo3d2pj3jpo5gjp656";
    const ERROR_SIGNUP_NAME_EMPTY               = "233424234332r3gf5g454g54g2435g54";
    const ERROR_SIGNUP_NAME_LENGHT              = "oi2332roihf4555465g4g56g6g65g65g";
    const ERROR_SIGNUP_SNDNAME_LENGHT           = "hi44hohoih3232423ohi324f5g653jio";
    const ERROR_SIGNUP_LASTNAME_EMPTY           = "ji34j435f43v56vbg56gh65bg667hh67";
    const ERROR_SIGNUP_LASTNAME_LENGHT          = "poj3joir3453546f545c43cv345vyy65";
    private $errorsList = [];

    public function __construct()
    {
        $this->errorsList = [
            Errors::ERROR_ADMIN_NEWCATEGORY_EXISTS  => 'El nombre de la categoría ya existe, intenta otra',
            Errors::ERROR_USER_UPDATENAME_EMPTY     => 'El nombre no puede estar vacio',
            Errors::ERROR_USER_UPDATENAME           => 'No se puede actualizar el nombre',
            Errors::ERROR_USER_UPDATEPASSWORD       => 'No se puede actualizar la contraseña',
            Errors::ERROR_USER_UPDATEPASSWORD_EMPTY => 'El nombre no puede estar vacio o ser negativo',
            Errors::ERROR_USER_UPDATEPASSWORD_WRONG => 'Los passwords no son los mismos',
            Errors::ERROR_USER_UPDATEPHOTO          => 'Hubo un error al actualizar la foto',
            Errors::ERROR_USER_UPDATEPHOTO_FORMAT   => 'El archivo no es una imagen',
            Errors::ERROR_LOGIN_AUTHENTICATE        => 'Hubo un problema al autenticarse',
            Errors::ERROR_LOGIN_AUTHENTICATE_EMPTY  => 'Los campos no pueden estar vacíos',
            Errors::ERROR_LOGIN_AUTHENTICATE_DATA   => 'Error en las credenciales',
            Errors::ERROR_SIGNUP_NEWUSER            => 'Error inesperado, intente registrarse nuevamente',
            Errors::ERROR_SIGNUP_USERNAME_EMPTY     => 'El nombre de usuario no puede estar vacío o ser menor a 8 caracteres',
            Errors::ERROR_SIGNUP_PASSWORD_EMPTY     => 'La contraseña no puede estar vacía o ser menor a 8 caracteres',
            Errors::ERROR_SIGNUP_PASSWORD_WRONG     => 'Las contraseñas no coinciden',
            Errors::ERROR_SIGNUP_NEWUSER_EMPTY      => 'Los campos no pueden estar vacíos',
            Errors::ERROR_SIGNUP_USERNAME_LENGHT    => 'El nombre de usario no debe ser menor a 8 caracteres ni mayor a 10', 
            Errors::ERROR_SIGNUP_NEWUSER_EXISTS     => 'Nombre se usuario no disponible',
            Errors::ERROR_SIGNUP_USERNAME_ALPHANUM  => 'El nombre de usuario solo acepta letras y numeros',
            Errors::ERROR_SIGNUP_PASSWORD_ALPHANUM  => 'La contraseña solo acepta letras y numeros',
            Errors::ERROR_SIGNUP_PASSWORD_LENGHT    => 'Nombre de usuario no disponible',
            Errors::ERROR_SIGNUP_POST               => 'No se pudo enviar el registro de usuario, intentelo mas tarde',
            Errors::ERROR_SIGNUP_NAME_EMPTY         => 'El nombre no puede estar vacio',
            Errors::ERROR_SIGNUP_NAME_LENGHT        => "Error al registrar el nombre",
            Errors::ERROR_SIGNUP_SNDNAME_LENGHT     => "Error al Registrar el segundo nombre",
            Errors::ERROR_SIGNUP_LASTNAME_EMPTY     => "El campo apellidos no puede estar vacio",
            Errors::ERROR_SIGNUP_LASTNAME_LENGHT    => "Error al registrar el apellido",
            
        ];
    }

    function get($hash){
        return $this->errorsList[$hash];
    }

    function existsKey($key){
        if(array_key_exists($key, $this->errorsList)){
            return true;
        }else{
            return false;
        }
    }
}
?>