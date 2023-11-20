<?php 
    include("bdConnection.php");
    function getCountries(){
        //$count = array("Afganistán","Albania","Alemania","Andorra","Angola","Antigua y Barbuda","Arabia Saudita","Argelia","Argentina","Armenia","Australia","Austria","Azerbaiyán","Bahamas","Bangladés","Barbados","Baréin","Bélgica","Belice","Benín","Bielorrusia","Birmania","Bolivia","Bosnia y Herzegovina","Botsuana","Brasil","Brunéi","Bulgaria","Burkina Faso","Burundi","Bután","Cabo Verde","Camboya","Camerún","Canadá","Catar","Chad","Chile","China","Chipre","Ciudad del Vaticano","Colombia","Comoras","Corea del Norte","Corea del Sur","Costa de Marfil","Costa Rica","Croacia","Cuba","Dinamarca","Dominica","Ecuador","Egipto","El Salvador","Emiratos Árabes Unidos","Eritrea","Eslovaquia","Eslovenia","España","Estados Unidos","Estonia","Etiopía","Filipinas","Finlandia","Fiyi","Francia","Gabón","Gambia","Georgia","Ghana","Granada","Grecia","Guatemala","Guyana","Guinea","Guinea ecuatorial","Guinea-Bisáu","Haití","Honduras","Hungría","India","Indonesia","Irak","Irán","Irlanda","Islandia","Islas Marshall","Islas Salomón","Israel","Italia","Jamaica","Japón","Jordania","Kazajistán","Kenia","Kirguistán","Kiribati","Kuwait","Laos","Lesoto","Letonia","Líbano","Liberia","Libia","Liechtenstein","Lituania","Luxemburgo","Madagascar","Malasia","Malaui","Maldivas","Malí","Malta","Marruecos","Mauricio","Mauritania","México","Micronesia","Moldavia","Mónaco","Mongolia","Montenegro","Mozambique","Namibia","Nauru","Nepal","Nicaragua","Níger","Nigeria","Noruega","Nueva Zelanda","Omán","Países Bajos","Pakistán","Palaos","Palestina","Panamá","Papúa Nueva Guinea","Paraguay","Perú","Polonia","Portugal","Reino Unido","República Centroafricana","República Checa","República de Macedonia","República del Congo","República Democrática del Congo","República Dominicana","República Sudafricana","Ruanda","Rumanía","Rusia","Samoa","San Cristóbal y Nieves","San Marino","San Vicente y las Granadinas","Santa Lucía","Santo Tomé y Príncipe","Senegal","Serbia","Seychelles","Sierra Leona","Singapur","Siria","Somalia","Sri Lanka","Suazilandia","Sudán","Sudán del Sur","Suecia","Suiza","Surinam","Tailandia","Tanzania","Tayikistán","Timor Oriental","Togo","Tonga","Trinidad y Tobago","Túnez","Turkmenistán","Turquía","Tuvalu","Ucrania","Uganda","Uruguay","Uzbekistán","Vanuatu","Venezuela","Vietnam","Yemen","Yibuti","Zambia","Zimbabue");

        $countries = ["AFG" => "Afganistán", "ALB" => "Albania", "DEU" => "Alemania", "ANDO" => "Andorra", "AGO" => "Angola", "ATG" => "Antigua y Barbuda", 
            "SAU" => "Arabia Saudita", "DZA" => "Argelia", "ARG" => "Argentina", "ARM" => "Armenia", "AUS" => "Australia", "AUT" => "Austria", "AZE" => "Azerbaiyán",
            "BHS" => "Bahamas", "BGD" => "Bangladés", "BRB" => "Barbados", "BHR" => "Baréin", "BEL" => "Bélgica", "BLZ" => "Belice", "BEN" => "Benín", "BLR" => "Bielorrusia",
            "MMR" => "Birmania", "BOL" => "Bolivia", "BIH" => "Bosnia y Herzegovina", "BWA" => "Botsuana", "BRA" => "Brasil", "BRN" => "Brunéi", "BGR" => "Bulgaria", 
            "BFA" => "Burkina Faso", "BDI" => "Burundi", "BTN" => "Bután", "CPV" => "Cabo Verde", "KHM" => "Camboya", "CMR" => "Camerún", "CAN" => "Canadá",
            "QAT" => "Catar", "TCD" => "Chad", "CHL" => "Chile", "CHN" => "China", "CYP" => "Chipre", "VAT" => "Ciudad del Vaticano", "COL" => "Colombia", 
            "COM" => "Comoras", "PRK" => "Corea del Norte", "KOR" => "Corea del Sur", "CIV" => "Costa de Marfil", "CRI" => "Costa Rica", "HRV" => "Croacia", 
            "CUB" => "Cuba", "DNK" => "Dinamarca", "DMA" => "Dominica", "ECU" => "Ecuador", "EGY" => "Egipto", "SLV" => "El Salvador", "ARE" => "Emiratos Árabes Unidos",
            "ERI" => "Eritrea", "SVK" => "Eslovaquia", "SVN" => "Eslovenia", "ESP" => "España", "USA" => "Estados Unidos", "EST" => "Estonia", "ETH" => "Etiopía",
            "PHL" => "Filipinas", "FIN" => "Finlandia", "FJI" => "Fiyi", "FRA" => "Francia", "GAB" => "Gabón", "GMB" => "Gambia", "GEO" => "Georgia", "GHA" => "Ghana",
            "GRD" => "Granada", "GRC" => "Grecia", "GTM" => "Guatemala", "GUY" => "Guyana", "GIN" => "Guinea", "GNQ" => "Guinea Ecuatorial", "GNB" => "Guinea-Bisáu", 
            "HTI" => "Haití","HND" => "Honduras", "HUN" => "Hungría", "IND" => "India", "IDN" => "Indonesia", "IRQ" => "Irak", "IRN" => "Irán", "IRL" => "Irlanda",
            "ISL" => "Islandia", "MHL" => "Islas Marshall", "SLB" => "Islas Salomón", "ISR" => "Israel", "ITA" => "Italia", "JAM" => "Jamaica", "JPN" => "Japón",
            "JOR" => "Jordania", "KAZ" => "Kazajistán", "KEN" => "Kenia", "KGZ" => "Kirguistán", "KIR" => "Kiribati", "KWT" => "Kuwait", "LAO" => "Laos", "LSO" => "Lesoto", 
            "LVA" => "Letonia", "LBN" => "Líbano", "LBR" => "Liberia", "LBY" => "Libia", "LIE" => "Liechtenstein", "LTU" => "Lituania", "LUX" => "Luxemburgo", 
            "MDG" => "Madagascar", "MYS" => "Malasia", "MWI" => "Malaui", "MDV" => "Maldivas", "MLI" => "Malí", "MLT" => "Malta", "MAR" => "Marruecos", "MUS" => "Mauricio",
            "MRT" => "Mauritania", "MEX" => "México", "FSM" => "Micronesia", "MDA" => "Moldavia", "MCO" => "Mónaco", "MNG" => "Mongolia", "MNE" => "Montenegro",
            "MOZ" => "Mozambique", "NAM" => "Namibia", "NRU" => "Nauru", "NPL" => "Nepal", "NIC" => "Nicaragua", "NER" => "Níger", "NGA" => "Nigeria", 
            "NOR" => "Noruega", "NZL" => "Nueva Zelanda", "OMN" => "Omán", "NLD" => "Países Bajos", "PAK" => "Pakistán", "PLW" => "Palaos", "PSE" => "Palestina", 
            "PAN" => "Panamá", "PNG" => "Papúa Nueva Guinea", "PRY" => "Paraguay", "PER" => "Perú", "POL" => "Polonia", "PRT" => "Portugal", "GBR" => "Reino Unido", 
            "CAF" => "República Centroafricana", "CZE" => "República Checa", "MKD" => "República de Macedonia", "COG" => "República del Congo", "COD" => "República Democrática del Congo", 
            "DOM" => "República Dominicana", "ZAF" => "República Sudafricana", "RWA" => "Ruanda", "ROU" => "Rumanía", "RUS" => "Rusia", "WSM" => "Samoa", "KNA" => "San Cristóbal y Nieves", 
            "SMR" => "San Marino", "VCT" => "San Vicente y las Granadinas", "LCA" => "Santa Lucía", "STP" => "Santo Tomé y Príncipe", "SEN" => "Senegal", "SRB" => "Serbia", 
            "SYC" => "Seychelles", "SLE" => "Sierra Leona", "SGP" => "Singapur", "SYR" => "Siria", "SOM" => "Somalia", "LKA" => "Sri Lanka", "SWZ" => "Suazilandia", 
            "SDN" => "Sudán", "SSD" => "Sudán del Sur", "SWE" => "Suecia", "CHE" => "Suiza", "SUR" => "Surinam", "THA" => "Tailandia", "TZA" => "Tanzania", 
            "TJK" => "Tayikistán", "TLS" => "Timor Oriental", "TGO" => "Togo", "TON" => "Tonga", "TTO" => "Trinidad y Tobago", "TUN" => "Túnez", "TKM" => "Turkmenistán", 
            "TUR" => "Turquía", "TUV" => "Tuvalu", "UKR" => "Ucrania", "UGA" => "Uganda", "URY" => "Uruguay", "UZB" => "Uzbekistán", "VUT" => "Vanuatu", "VEN" => "Venezuela", 
            "VNM" => "Vietnam", "YEM" => "Yemen", "DJI" => "Yibuti", "ZMB" => "Zambia", "ZWE" => "Zimbabue"];
            return $countries;
        }
    function checkUser(){
        /*$script = 'select u.first_name, r.id as "Id de rol", r.role_name from users as u 
        inner join access as ac
        on u.id = ac.id
        inner join roles as r 
        on u.role_id = r.id
        where  ac.username = 'rom.nr57@gmail.com' && ac.user_password  = 'rom1324';;*/

        
    }

    function saveUser($user){
        $inserted = false;
        $conn = getConnection();
        $role = 2;
        $userId = 0 ;

        $firstName = $user['firstName'];
        $lastName = $user['lastName'];
        $email = $user['email'];
        $password = $user['password'];
        $country = $user['country'];
        $city = $user['city'];
        $address =  $user['address'];
        $secondAddress = $user['secondAddress'];
        $postalCode = $user['postalCode'];
        $phone = $user['phone'];


        $script = "INSERT INTO users (first_name, last_name, role_id) VALUES('$firstName', '$lastName', '$role')";
        
        if(mysqli_query($conn, $script)){
            $userId = mysqli_insert_id($conn);
            $script = "INSERT INTO access (username, user_password, user_id) VALUES('$email', '$password', '$userId')";
            if(mysqli_query($conn, $script)){
                $script = "INSERT INTO addresses (country, city, address,second_address,postal_code,user_id) VALUES('$country', '$city', '$address','$secondAddress','$postalCode','$userId')";
                if(mysqli_query($conn, $script)){
                    $script = "INSERT INTO phone_numbers (phone_number, id_user) VALUES('$phone', '$userId')";
                    if(mysqli_query($conn, $script)){
                        $inserted = true;
                    }
                }
            }
           
        }
        return $inserted;
        };


?>