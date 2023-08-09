<?php

//definir fuso horário Brasil
date_default_timezone_set('America/Sao_Paulo');

//mostrar data e hora no formato
// dd/mm/aaaa hh:mm:ss

$data = date("d/m/Y H:i:s");
echo $data;
