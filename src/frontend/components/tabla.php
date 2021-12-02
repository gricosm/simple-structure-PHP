<table class="table is-bordered is-hoverable has-text-centered">

    <thead class="thead"> 
        <tr><h1 class="title is-1">PLATOS VARIOS</h1></tr>
        <tr><th class="subtitle">Plato</th><th class="subtitle">Comensales</th><th class="subtitle">Tipo</th><th class="subtitle">Ingredientes</th></tr>
    </thead>

    <tbody class="tbody">
        <?php
            include_once 'helpers/printer.php';
            require_once '../../backend/dish/dishModel.php';

            $platos = getAllDishes();

            print_r('<pre>');
            var_dump($platos);
            die();

            $max = count($platos);
            for ($i = 0; $i < $max; $i++)
            {
                printTableContent($platos[$i]);
            }
        ?>
    </tbody>

</table>