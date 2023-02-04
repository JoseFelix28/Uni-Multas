<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uni-Multas</title>
    <link rel="icon" href="<?php echo constant('URL'); ?>public/icons/logo-icon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/login.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/signUp.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/popUp.css">
</head>
<?php $this->showMessages(); ?>

<body>

    <div class="container-login">
        <span class="text-logo">UNI-MULTAS</span>
        <img class="logo-max" src="<?php echo constant('URL'); ?>public/img/logo-icon-white.png">
        <form action="<?php echo constant('URL'); ?>login/authenticate" method="POST" class="formulario__login">

            <span class="text-login">Iniciar sesión</span>
            <input class="input-login" autocomplete="off" type="text" autocomplete="off" name="username" placeholder="Usuario">
            <input class="input-login" autocomplete="off" type="password" autocomplete="off" name="password" placeholder="Contraseña">
            <input class="btn-login" type="submit" value="Entrar">
            <hr>
            <a href="#Registrarse" class="btn-open-popup"><span class="btn-payment">No tienes cuenta? Registrate</span></a>
        </form>
        <div class="popUP">
                

                <div class="container-all" id="Registrarse">

                    <div class="popup">
                        <form action="<?php echo constant('URL'); ?>signup/newUser" method="POST" class="formulario__register">
                            <input type="text" autocomplete="off" class="nameUser" name="name" placeholder="Nombre">
                            <input type="text" autocomplete="off" class="sndName" name="sndName" placeholder="Segundo Nombre">
                            <input type="text" autocomplete="off" class="lastName" name="lastName" placeholder="Apellidos">
                            <input type="text" autocomplete="off" class="DNI" name="DNI" placeholder="DNI o Cédula">
                            <input type="text" autocomplete="off" class="mailAddress" name="mailAddress" placeholder="Correo Electronico">
                            <input type="text" autocomplete="off" class="username" name="usernameRegister" placeholder="Usuario">
                            <input type="password" autocomplete="off" class="password" name="passwordRegister" placeholder="Contraseña">
                            <input type="password" autocomplete="off" class="passwordSuccess" name="passwordVerify" placeholder="Confirmar contraseña">
                            <input type="text" autocomplete="off" class="nLicense" name="nLicense" placeholder="Numero de Licencia">
                            <select class="typeLicense" name="typeLicense">
                                <option value="1">2nd</option>
                                <option value="3" selected="1">3rd</option>
                                <option value="3">4th</option>
                                <option value="4">5th</option>
                            </select>
                            <select name="gender" class="gender">
                                <option >Sexo</option>
                                <option value="man">Hombre</option>
                                <option value="woman">Mujer</option>
                                <option value="non-binary">No Binario</option>
                            </select>

                            <input type="date" name="dateBorn" class="Fecha" [max]="fechaMaxima" [min]="fechaMinima">
                            <select class="country" name="country" id="">
                                <option value="1">AFGANISTÁN</option>
                                <option value="2">ALBANIA</option>
                                <option value="3">ALEMANIA</option>
                                <option value="4">ANDORRA</option>
                                <option value="5">ANGOLA</option>
                                <option value="6">ANTIGUAYBARBUDA</option>
                                <option value="7">ARABIASAUDÍ</option>
                                <option value="8">ARGELIA</option>
                                <option value="9">ARGENTINA</option>
                                <option value="10">ARMENIA</option>
                                <option value="11">ARUBA</option>
                                <option value="12">AUSTRALIA</option>
                                <option value="13">AUSTRIA</option>
                                <option value="14">AZERBAIYÁN</option>
                                <option value="15">BAHAMAS</option>
                                <option value="16">BAHRÉIN</option>
                                <option value="17">BANGLADESH</option>
                                <option value="18">BARBADOS</option>
                                <option value="19">BELARRÚS</option>
                                <option value="20">BELICE</option>
                                <option value="21">BENÍN</option>
                                <option value="22">BOLIVIA</option>
                                <option value="23">BOSNIA-HERZEGOVINA</option>
                                <option value="24">BOTSUANA</option>
                                <option value="25">BRASIL</option>
                                <option value="26">BRUNÉI</option>
                                <option value="27">BULGARIA</option>
                                <option value="28">BURKINAFASO</option>
                                <option value="29">BURUNDI</option>
                                <option value="30">BUTÁN</option>
                                <option value="31">BÉLGICA</option>
                                <option value="32">CABOVERDE</option>
                                <option value="33">CAMBOYA</option>
                                <option value="34">CAMERÚN</option>
                                <option value="35">CANADÁ</option>
                                <option value="36">CATAR</option>
                                <option value="37">CHAD</option>
                                <option value="38">CHILE</option>
                                <option value="39">CHINA</option>
                                <option value="40">CHIPRE</option>
                                <option value="41">COLOMBIA</option>
                                <option value="42">COMORAS</option>
                                <option value="43">CONGO</option>
                                <option value="45">COREA DEL SUR</option>
                                <option value="46">COSTA RICA</option>
                                <option value="47">CROACIA</option>
                                <option value="48">CUBA</option>
                                <option value="49">CURAZAO</option>
                                <option value="50">CÔTED'IVOIRE</option>
                                <option value="51">DINAMARCA</option>
                                <option value="52">DOMINICA</option>
                                <option value="53">ECUADOR</option>
                                <option value="54">EGIPTO</option>
                                <option value="55">EL SALVADOR</option>
                                <option value="56">EMIRATOS ÁRABES UNIDOS</option>
                                <option value="57">ERITREA</option>
                                <option value="58">ESLOVAQUIA</option>
                                <option value="59">ESLOVENIA</option>
                                <option value="60">ESPAÑA</option>
                                <option value="61">ESTADO DE LA CIUDAD DEL VATICANO</option>
                                <option value="62">ESTADO DE PALESTINA</option>
                                <option value="63">ESTADOS UNIDOS</option>
                                <option value="64">ESTONIA</option>
                                <option value="65">ESWATINI</option>
                                <option value="66">ETIOPÍA</option>
                                <option value="67">FILIPINAS</option>
                                <option value="68">FINLANDIA</option>
                                <option value="69">FIYI</option>
                                <option value="70">FRANCIA</option>
                                <option value="71">GABÓN</option>
                                <option value="72">GAMBIA</option>
                                <option value="73">GEORGIA</option>
                                <option value="74">GHANA</option>
                                <option value="75">GRANADA</option>
                                <option value="76">GRECIA</option>
                                <option value="77">GUATEMALA</option>
                                <option value="78">GUINEA</option>
                                <option value="79">GUINEABISSAU</option>
                                <option value="80">GUINEA ECUATORIAL</option>
                                <option value="81">GUYANA</option>
                                <option value="82">HAITÍ</option>
                                <option value="83">HONDURAS</option>
                                <option value="84">HUNGRÍA</option>
                                <option value="85">INDIA</option>
                                <option value="86">INDONESIA</option>
                                <option value="87">IRAK</option>
                                <option value="88">IRLANDA</option>
                                <option value="89">IRÁN</option>
                                <option value="90">ISLANDIA</option>
                                <option value="91">ISRAEL</option>
                                <option value="92">ITALIA</option>
                                <option value="93">JAMAICA</option>
                                <option value="94">JAPÓN</option>
                                <option value="95">JORDANIA</option>
                                <option value="96">KAZAJSTÁN</option>
                                <option value="97">KENIA</option>
                                <option value="98">KIRGUISTÁN</option>
                                <option value="99">KIRIBATI</option>
                                <option value="100">KUWAIT</option>
                                <option value="101">LAOS</option>
                                <option value="102">LESOTO LETONIA</option>
                                <option value="103">LIBERIA</option>
                                <option value="104">LITUANIA</option>
                                <option value="105">LUXEMBURGO</option>
                                <option value="106">LÍBANO</option>
                                <option value="107">MACEDONIA DEL NORTE</option>
                                <option value="108">MADAGASCAR</option>
                                <option value="109">MALASIA</option>
                                <option value="110">MALAUI</option>
                                <option value="111">MALDIVAS</option>
                                <option value="112">MALTA</option>
                                <option value="113">MALÍ</option>
                                <option value="114">MARRUECOS</option>
                                <option value="115">MARSHALL(Islas)</option>
                                <option value="116">MAURICIO</option>
                                <option value="117">MAURITANIA</option>
                                <option value="118">MICRONESIA</option>
                                <option value="119">MOLDOVA</option>
                                <option value="120">MONGOLIA</option>
                                <option value="121">MONTENEGRO</option>
                                <option value="122">MOZAMBIQUE</option>
                                <option value="123">MYANMAR</option>
                                <option value="124">MÉXICO</option>
                                <option value="125">MÓNACO</option>
                                <option value="126">NAMIBIA</option>
                                <option value="127">NAURU</option>
                                <option value="128">NEPAL</option>
                                <option value="129">NICARAGUA</option>
                                <option value="130">NIGERIA</option>
                                <option value="131">NORUEGA</option>
                                <option value="132">NUEVA ZELANDA</option>
                                <option value="133">NÍGER</option>
                                <option value="134">OMÁN</option>
                                <option value="135">PAKISTÁN</option>
                                <option value="136">PANAMÁ</option>
                                <option value="137">PAPÚANUEVAGUINEA</option>
                                <option value="138">PARAGUAY</option>
                                <option value="139">PAÍSESBAJOS</option>
                                <option value="140">PERÚ</option>
                                <option value="141">POLONIA</option>
                                <option value="142">PORTUGAL</option>
                                <option value="143">REINOUNIDO</option>
                                <option value="144">REP.CENTROAFRICANA</option>
                                <option value="145">REP.CHECA</option>
                                <option value="146">REP.DOMINICANA</option>
                                <option value="147">RUANDA</option>
                                <option value="148">RUMANIA</option>
                                <option value="149">RUSIA</option>
                                <option value="150">SALOMÓN(Islas)</option>
                                <option value="151">SAMOA</option>
                                <option value="152">SAN CRISTÓBAL Y NIEVES</option>
                                <option value="153">SANMARINO</option>
                                <option value="154">SANMARTÍN</option>
                                <option value="155">SAN VICENTE Y LAS GRANADINAS</option>
                                <option value="156">SANTALUCÍA</option>
                                <option value="157">SANTOTOMÉYPRÍNCIPE</option>
                                <option value="158">SENEGAL</option>
                                <option value="159">SERBIA</option>
                                <option value="160">SEYCHELLES</option>
                                <option value="161">SIERRALEONE</option>
                                <option value="162">SINGAPUR</option>
                                <option value="163">SIRIA</option>
                                <option value="164">SOMALIA</option>
                                <option value="165">SRILANKA</option>
                                <option value="166">SUDÁFRICA</option>
                                <option value="167">SUDÁN</option>
                                <option value="168">SUDÁNDELSUR</option>
                                <option value="169">SUECIA</option>
                                <option value="170">SUIZA</option>
                                <option value="171">SURINAM</option>
                                <option value="172">TAILANDIA</option>
                                <option value="173">TANZANIA</option>
                                <option value="174">TAYIKISTÁN</option>
                                <option value="175">TIMOR-LESTE</option>
                                <option value="176">TOGO</option>
                                <option value="177">TONGA</option>
                                <option value="178">TRINIDAD Y TOBAGO</option>
                                <option value="179">TURKMENISTÁN</option>
                                <option value="180">TURQUÍA</option>
                                <option value="181">TÚNEZ</option>
                                <option value="182">UCRANIA</option>
                                <option value="183">UGANDA</option>
                                <option value="184">URUGUAY</option>
                                <option value="185">UZBEKISTÁN</option>
                                <option value="186">VANUATU</option>
                                <option value="187" selected="1">VENEZUELA</option>
                                <option value="188">VIETNAM</option>
                                <option value="189">YEMEN</option>
                                <option value="190">YIBUTI</option>
                                <option value="191">ZAMBIA</option>
                                <option value="192">ZIMBABUE</option>


                            </select>
                            <input type="submit" class="registro" value="Registrar">
                        </form>
                        <a href="#" class="btn-close-popup">X</a>
                    </div>

                  
                </div>
            </div>
    </div>
</body>

</html>

<script const url=location.href; src="public/js/signUp.js"></script>