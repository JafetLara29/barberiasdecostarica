<?php
    /** 
     * Metodo para obtener las horas contenidas entre un intervalo (Hora inicio a Hora fin)
     * @param String $hora_inicio La hora de inicio de la cual queremos empezar el intervalo horas
     * @param String $hora_fin La hora de fin de la cual queremos terminar el intervalo de horas
     * @param String $intervalo El numero de minutos que queremos entre cada valor del intervalor 
     * @return Array Horas del intervalo
    */
    function intervaloHora($hora_inicio, $hora_fin, $intervalo = 60) {
        $hora_inicio = new DateTime( $hora_inicio );
        $hora_fin    = new DateTime( $hora_fin );
        $hora_fin->modify('+1 second'); // Añadimos 1 segundo para que muestre $hora_fin
        
        // Si la hora de inicio es superior a la hora fin
        // añadimos un día más a la hora fin
        if ($hora_inicio > $hora_fin) {            
            $hora_fin->modify('+1 day');
        }

        // Establecemos el intervalo en minutos
        $intervalo = new DateInterval('PT'.$intervalo.'M');
        
        // Sacamos los periodos entre las horas
        $periodo   = new DatePeriod($hora_inicio, $intervalo, $hora_fin);
        
        foreach( $periodo as $hora ) {   
            // Guardamos las horas (intervalos) 
            $horas[] =  $hora->format('g:i');//Le damos el formato hora:minuto y quitamos el formato de 24 hora a uno de 12
        }   

        return $horas;
    }

    /**
     * Metodo para eliminar tildes y de un texto
     * @param String text - El texto que deseamos modificar
     * @return String result - El texto modificado
     */
    function removeAccentMarks($text){
        $accentMarkLetters = [
            'á', 'é', 'í', 'ó', 'ú'
        ];
        $toReplaceLetters = [
            'a', 'e', 'i', 'o', 'u'
        ];
        return str_replace($accentMarkLetters, $toReplaceLetters, $text);
    }

?>

