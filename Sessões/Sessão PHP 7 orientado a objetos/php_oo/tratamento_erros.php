<?php

    try {
        
         echo '<h3> ***Try ***</h3>';

        //$sql = 'Select * from clientes';
        //mysql_query($sql); //Erro

       if (!file_exists('require_arquivo_a.php')){

            throw new Exception("O arquivo em questão deveria estar disponivel as" . date('d/m/Y H:i:s'). "horas mas não estava. Vamos seguir mesmo assim!");
            

       }

    } catch (Error $e) {

        echo '<h3> ***catch Error ***</h3>';
        echo $e;


    } catch (Exception $e) {

        echo '<h3> ***catch Exception ***</h3>';
        echo $e;

    } 

    finally {

        echo '<h3> ***finally ***</h3>';

    }