<html>
<head>

</head>
<body>
        <?php
        require_once 'ContaBanco.php';

        $p1 = new ContaBanco(); //Jubileu
        $p2 = new ContaBanco(); // Cleusa

        $p1->abrirConta("CC");
        $p1->setNumConta(777);
        $p1->setDono("Jubileu");

        $p2->abrirConta("CP");
        $p2->setNumConta(888);
        $p2->setDono("Cleusa");

        $p1->depositar(300);
        $p2->depositar(500);

        $p1->sacar(350);
        $p2->sacar(650);

        $p1->fecharConta();
        $p2->fecharConta();
        print_r($p1);
        print_r($p2);
        ?>
</body>
</html>