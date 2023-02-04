<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="views/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uni-Multas</title>
    <link rel="stylesheet" href="views/style.css">
    <link rel="stylesheet" href="views/css/estilos.css">

</head>

<body>
    <div class="parent">

        <div class="nav-menu">
            <div class="div1">
                <img class="img-logo" src="views/logo.png">
                <img class="img-onda" src="views/q.svg">
            </div>

            <div class="div2 navigation sub-menu">


                <ul>
                    <li>
                        <a href="#">

                            <span class="text">Bienvenido!<br>Nombre<br>Matricula</span>
                            <span><img class="img-user" src="views/user.png"></span>
                        </a>
                    </li>
                    <li class="list active">
                        <a href="#">

                            <span class="text ">Inicio</span>
                            <span class="icon ">
                                <ion-icon name="home-outline"></ion-icon>
                            </span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#">

                            <span class="text">Nueva multa</span>
                            <span class="icon">
                                <ion-icon name="add-circle-outline"></ion-icon>
                            </span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#">

                            <span class="text">Registro</span>
                            <span class="icon ">
                                <ion-icon name="document-text-outline"></ion-icon>
                            </span>

                        </a>
                    </li>
                    <li class="list">
                        <a href="#">

                            <span class="text">Cerrar sesión</span>
                            <span class="icon">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </span>
                        </a>
                    </li>

                    <div class="indicator"></div>
                </ul>

            </div>



            <div class="div3">
                <span class="titulo">Nueva Multa</span>
                <form>
                    <div class="labels-one">
                        <div>
                            <span class="textSpan">Nombre del conductor</span>
                            <input class="inputMulta" type="button" placeholder="Nombre">
                        </div>

                        <div>
                            <span class="textSpan">Apellidos del conductor</span>
                            <input class="inputMulta" type="button" placeholder="Nombre">
                        </div>

                        <div>
                            <span class="textSpan">Cedula del Vehiculo</span>
                            <input class="inputMulta" type="button" placeholder="Nombre">
                        </div>


                        <div>
                            <span class="textSpan">aja si</span>
                            <input class="inputMulta" type="button" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="labels-two">
                        <div>
                            <span class="textSpan">Nombre del conductor</span>
                            <input class="inputMulta" type="button" placeholder="Nombre">
                        </div>
                        <div>
                            <span class="textSpan">Nombre del conductor</span>
                            <input class="inputMulta" type="button" placeholder="Nombre">
                        </div>


                        <div>
                            <span class="textSpan">Infracción</span>
                            <a href="#modal" class="btn-open-popup">Abrir PopUp</a>

                            <div class="container-all" id="modal">

                                <div class="popup">
                                    <div class="img"></div>
                                    <div class="container-text">
                                        <span class="textSpan">Seleccion de Multas</span><br><br>
                                        <label><input type="checkbox" id="cbox1" value="first_checkbox"> Conducir vehículos sin haber obtenido la licencia o título profesional correspondiente</label><br><br>
                                        <label><input type="checkbox" id="cbox1" value="first_checkbox"> Desatender las indicaciones de los semáforos</label><br><br>
                                        <label><input type="checkbox" id="cbox1" value="first_checkbox">Conducir vehículos sin haber aprobado la revisión técnica, mecánica y física de los mismos en la oportunidad debida</label><br><br>
                                        <label><input type="checkbox" id="cbox1" value="first_checkbox">Conducir vehículos sobrepasando el límite permitido de velocidad</label><br><br>
                                        <label><input type="checkbox" id="cbox1" value="first_checkbox">Conducir vehículos habiendo sobrepasado el tiempo máximo permitido de conducción para transporte terrestre público de personas y de carga</label><br><br>
                                        <label><input type="checkbox" id="cbox1" value="first_checkbox">Circular con vehículos de transporte terrestre público o privado de personas y de carga, por los canales de circulación no permitidos para tales vehículos</label><br><br>
                                        <label><input type="checkbox" id="cbox1" value="first_checkbox">Conducir vehículos estando incapacitado físicamente para ello</label><br><br>
                                        <label><input type="checkbox" id="cbox1" value="first_checkbox">Conducir vehículos bajo influencia de bebidas alcohólicas, sustancias estupefacientes o psicotrópicas</label><br><br>
                                        <label><input type="checkbox" id="cbox1" value="first_checkbox">Conducir vehículos poniendo en peligro la circulación de otros vehículos debidamente señalizados para ser usados por personas con discapacidad o en labores de enseñanza de conducción</label><br><br>
                                        <label><input type="checkbox" id="cbox1" value="first_checkbox">Conducir vehículos desprovistos de los dispositivos de control, equipos o accesorios de uso obligatorio, relativos a las condiciones de seguridad o cuando dichos aditamentos presenten defectos de funcionamiento o no cumplan con las normas y demás características técnicas previstas en el Reglamento de esta Ley</label><br><br>
                                        <label><input type="checkbox" id="cbox1" value="first_checkbox">Conducir vehículos realizando maniobras prohibidas por el Reglamento de esta Ley o por la autoridad competente, en las vías de circulación</label><br><br>
                                        <label><input type="checkbox" id="cbox1" value="first_checkbox">Conducir vehículos utilizando equipos de comunicación, con excepción del dispositivo de manos libres</label><br><br>
                                        <label><input type="checkbox" id="cbox1" value="first_checkbox">Conducir vehículos que no cumplan con las Normas del Sistema Nacional de Calidad, sin perjuicio de lo establecido en el Reglamento de esta Ley</label><br><br>
                                        <label><input type="checkbox" id="cbox1" value="first_checkbox">Suministrar datos falsos al Registro Nacional de Vehículos y de Conductores y Conductoras, y a las autoridades competentes que intervengan en los casos de infracciones a la presente Ley y en accidentes de tránsito</label><br><br>
                                        <label><input type="checkbox" id="cbox1" value="first_checkbox">Conducir vehículos de transporte terrestre público de personas o carga en cualquiera de sus modalidades, sin estar debidamente autorizado conforme a la ley</label><br><br>
                                        <label><input type="checkbox" id="cbox1" value="first_checkbox">Prestar el servicio de transporte terrestre de carga en cualquiera de sus modalidades, en unidades no aptas o en vías prohibidas para su circulación</label><br><br>
                                        <label><input type="checkbox" id="cbox1" value="first_checkbox">Ejecutar cualquier tipo de actividad o de trabajo que afecte la circulación y la seguridad del tránsito, sin los permisos correspondientes otorgados de acuerdo a lo previsto en el Reglamento de esta Ley</label><br><br>
                                        <label><input type="checkbox" id="cbox1" value="first_checkbox">Las personas que, en ejercicio de la autoridad administrativa, ordenen la colocación de señales y dispositivos de control de tránsito terrestre o efectúen demarcaciones, que no cumplan con las disposiciones nacionales e internacionales establecidas a tal efecto</label><br><br>
                                        <label><input type="checkbox" id="cbox1" value="first_checkbox">Dañen, alteren o sustraigan los dispositivos de control de tránsito; los coloquen o sustituyan sin permiso de la autoridad administrativa competente</label><br><br>
                                        <label><input type="checkbox" id="cbox1" value="first_checkbox">No hacer uso del cinturón de seguridad, ni velar porque los demás ocupantes del vehículo lo utilicen debidamente</label><br><br>
                                        <label><input type="checkbox" id="cbox1" value="first_checkbox">Los propietarios y las propietarias o conductores y conductoras que modifiquen o alteren los elementos y condiciones de seguridad de fabricación de los vehículos, sin la autorización correspondiente</label><br><br>
                                        <label><input type="checkbox" id="cbox1" value="first_checkbox">Los propietarios y las propietarias de vehículos de transporte terrestre público de personas y carga, que no tengan instalados los dispositivos y registro de velocidad, o ejecuten actos tendentes a eliminar o alterar su normal funcionamiento</label><br><br>
                                        <label><input type="checkbox" id="cbox1" value="first_checkbox">Los que se den a la fuga en caso de estar involucrados en accidentes de tránsito</label><br><br>
                                    </div>

                                    <a href="#" class="btn-close-popup">X</a>
                                </div>

                            </div>


                        </div>
                    </div>

                    <div class="labels-three">
                        <div>
                            <span class="textSpan">Nombre del conductor</span>
                            <input class="inputMulta" type="button" placeholder="Nombre">
                        </div>
                        <div>
                            <span class="textSpan">Nombre del conductor</span>
                            <input class="inputMulta" type="button" placeholder="Nombre">
                        </div>
                        <div>
                            <span class="textSpan">Nombre del conductor</span>
                            <input class="inputMulta" type="button" placeholder="Nombre">
                        </div>
                        <div>
                            <span class="textSpan">Nombre del conductor</span>
                            <input class="inputMulta" type="button" placeholder="Nombre">
                        </div>
                        <div>
                            <span class="textSpan">Nombre del conductor</span>
                            <input class="inputMulta" type="button" placeholder="Nombre">
                        </div>

                    </div>

            </div>






            </form>
        </div>
    </div>
    </div>

    <script>
        const list = document.querySelectorAll('.list');

        function activeLink() {
            list.forEach((item) =>
                item.classList.remove('active'));
            this.classList.add('active')
        }
        list.forEach((item) =>
            item.addEventListener('click', activeLink));
    </script>



    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>