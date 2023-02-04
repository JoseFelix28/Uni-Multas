<?php
                        date_default_timezone_set("America/Caracas");
                        $fecha_actual = date("Y") - 16;
                        $fecha_maxima = date(date("Y") - 80);
                        $i = 1;
                        echo  '<select class="years">';
                        while ($fecha_maxima < $fecha_actual) {
                            echo
                            '<option value="' . $i . '">' . ($fecha_actual - $i) . '</option>';

                            $i++;

                            if ($i > 64) {
                                break;
                            }
                        }
                        echo '</select>';
$a=(date("Y")%("100"));
$b=(date("Y")%400);
echo $b;
if($a=0 || $b=0){
    echo 'bisiesto';
}
                        ?>


<?php
//Trigger
INSERT INTO dbLogs (ACTION) VALUES (concat('Se creó un nuevo Usuario usuario--> ID: ',new.id,' ,username: ',new.username,' ,role: ',new.role,' ,contraseña: ',new.password,' ,nombre: ',new.name,' , Segundo nombre: ',new.sndName,' ,apellido: ',new.lastName,' ,fecha Nacimiento: ',new.bornDate,' ,cedula: ',new.nationalID,'Pais de procedencia',new.id_country,'foto: ',new.photo,' Correo Electronico: ',new.mailAddress,' ,numero de Licencia: ',new.nLicense,' fecha y hota del registro: ',new.dateRegister))





?>


<?php if ( array_key_exists( "default", $_GET ) && !is_null ($_GET[ 'default' ]) ) {

    # White list the allowable languages
    switch ($_GET['default']) {
            case "AFGANISTÁN":
            case "ALBANIA":
            case "ALEMANIA":
            case "ANDORRA":
            case "ANGOLA":
            case "ANTIGUAYBARBUDA":
            case "ARABIASAUDÍ":
            case "ARGELIA":
            case "ARGENTINA":
            case "ARMENIA":
            case "ARUBA":
            case "AUSTRALIA":
            case "AUSTRIA":
            case "AZERBAIYÁN":
            case "BAHAMAS":
            case "BAHRÉIN":
            case "BANGLADESH":
            case "BARBADOS":
            case "BELARRÚS":
            case "BELICE":
            case "BENÍN":
            case "BOLIVIA":
            case "BOSNIA-HERZEGOVINA":
            case "BOTSUANA":
            case "BRASIL":
            case "BRUNÉI":
            case "BULGARIA":
            case "BURKINAFASO":
            case "BURUNDI":
            case "BUTÁN":
            case "BÉLGICA":
            case "CABOVERDE":
            case "CAMBOYA":
            case "CAMERÚN":
            case "CANADÁ":
            case "CATAR":
            case "CHAD":
            case "CHILE":
            case "CHINA":
            case "CHIPRE":
            case "COLOMBIA":
            case "COMORAS":
            case "CONGO":
            case "CONGO(Rep.Democrática del)":
            case "COREA DEL NORTE)":
            case "COREA DEL SUR":
            case "COSTARICA":
            case "CROACIA":
            case "CUBA":
            case "CURAZAO":
            case "CÔTED'IVOIRE":
            case "DINAMARCA":
            case "DOMINICA":
            case "ECUADOR":
            case "EGIPTO":
            case "EL SALVADOR":
            case "EMIRATOS ÁRABES UNIDOS":
            case "ERITREA":
            case "ESLOVAQUIA":
            case "ESLOVENIA":
            case "ESPAÑA":
            case "ESTADO DE LA CIUDAD DEL VATICANO":
            case "ESTADO DE PALESTINA":
            case "ESTADOS UNIDOS":
            case "ESTONIA":
            case "ESWATINI":
            case "ETIOPÍA":
            case "FILIPINAS":
            case "FINLANDIA":
            case "FIYI":
            case "FRANCIA":
            case "GABÓN":
            case "GAMBIA":
            case "GEORGIA":
            case "GHANA":
            case "GRANADA":
            case "GRECIA":
            case "GUATEMALA":
            case "GUINEA":
            case "GUINEABISSAU":
            case "GUINEA ECUATORIAL":
            case "GUYANA":
            case "HAITÍ":
            case "HONDURAS":
            case "HUNGRÍA":
            case "INDIA":
            case "INDONESIA":
            case "IRAK":
            case "IRLANDA":
            case "IRÁN":
            case "ISLANDIA":
            case "ISRAEL":
            case "ITALIA":
            case "JAMAICA":
            case "JAPÓN":
            case "JORDANIA":
            case "KAZAJSTÁN":
            case "KENIA":
            case "KIRGUISTÁN":
            case "KIRIBATI":
            case "KUWAIT":
            case "LAOS":
            case "LESOTO LETONIA":
            case "LIBERIA":
            case "LITUANIA":
            case "LUXEMBURGO":
            case "LÍBANO":
            case "MACEDONIA DEL NORTE":
            case "MADAGASCAR":
            case "MALASIA":
            case "MALAUI":
            case "MALDIVAS":
            case "MALTA":
            case "MALÍ":
            case "MARRUECOS":
            case "MARSHALL(Islas)":
            case "MAURICIO":
            case "MAURITANIA":
            case "MICRONESIA":
            case "MOLDOVA":
            case "MONGOLIA":
            case "MONTENEGRO":
            case "MOZAMBIQUE":
            case "MYANMAR":
            case "MÉXICO":
            case "MÓNACO":
            case "NAMIBIA":
            case "NAURU":
            case "NEPAL":
            case "NICARAGUA":
            case "NIGERIA":
            case "NORUEGA":
            case "NUEVA ZELANDA":
            case "NÍGER":
            case "OMÁN":
            case "PAKISTÁN":
            case "PANAMÁ":
            case "PAPÚANUEVAGUINEA":
            case "PARAGUAY":
            case "PAÍSESBAJOS":
            case "PERÚ":
            case "POLONIA":
            case "PORTUGAL":
            case "REINOUNIDO":
            case "REP.CENTROAFRICANA":
            case "REP.CHECA":
            case "REP.DOMINICANA":
            case "RUANDA":
            case "RUMANIA":
            case "RUSIA":
            case "SALOMÓN(Islas)":
            case "SAMOA":
            case "SAN CRISTÓBAL Y NIEVES":
            case "SANMARINO":
            case "SANMARTÍN":
            case "SAN VICENTE Y LAS GRANADINAS":
            case "SANTALUCÍA":
            case "SANTOTOMÉYPRÍNCIPE":
            case "SENEGAL":
            case "SERBIA":
            case "SEYCHELLES":
            case "SIERRALEONE":
            case "SINGAPUR":
            case "SIRIA":
            case "SOMALIA":
            case "SRILANKA":
            case "SUDÁFRICA":
            case "SUDÁN":
            case "SUDÁNDELSUR":
            case "SUECIA":
            case "SUIZA":
            case "SURINAM":
            case "TAILANDIA":
            case "TANZANIA":
            case "TAYIKISTÁN":
            case "TIMOR-LESTE":
            case "TOGO":
            case "TONGA":
            case "TRINIDAD Y TOBAGO":
            case "TURKMENISTÁN":
            case "TURQUÍA":
            case "TÚNEZ":
            case "UCRANIA":
            case "UGANDA":
            case "URUGUAY":
            case "UZBEKISTÁN":
            case "VANUATU":
            case "VENEZUELA":
            case "VIETNAM":
            case "YEMEN":
            case "YIBUTI":
            case "ZAMBIA":
            case "ZIMBABUE":
           
            # ok
            break;
        default:
            header ("location: ?default=VENEZUELA");
            exit;
    }
}

?>



