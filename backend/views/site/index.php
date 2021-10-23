<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'Mahekal inventory';

?>
<?= Html::cssFile('@web/css/estilos.css') ?>

<div class="site-index">

    <!--!  <div class="jumbotron">
        <h1>Bienvenido</h1>

        <p class="lead">Elige el departamento al que perteneces</p>

        <p><a class="btn btn-lg btn-success" href="https://www.mahekalbeachresort.com/es">Go to Mahekal =></a></p>
        <p><a class="btn btn-lg btn-danger" href="http://backend.mahekalyii2.com/index.php?r=sistemas%2Findex">SISTEMAS</a></p>
        <p><a class="btn btn-lg btn-danger" href="http://backend.mahekalyii2.com/index.php?r=departamento-comp/index">COMPRAS</a></p>
        <p><a class="btn btn-lg btn-danger" href="http://backend.mahekalyii2.com/index.php?r=articulo/index">Main</a></p>
        <p><a class="btn btn-lg btn-danger" href="http://backend.mahekalyii2.com/index.php?r=admin">RBAC</a></p>
-->

</div>
<div>

    <body>
        <div class="contenedor">
            <div class="contenedor-conciertos">
                <div class="card" title="Recursos humanos" style="background-image: url('./img/rhh.png')">
                    <div class="textos"> </div>
                    <div>
                        
                    <a href="http://backend.mahekalyii2.com/index.php?r=rh%2Findex">
                    <button class="boton">RRHH</button>
                    </a>
                    </div>
                </div>


                <div class="card" title="Sistemas" id="linkimg" style="background-image: url('./img/s1.jpg')">
                <div class="textos"> </div>
                    <div>
                    <a href="http://backend.mahekalyii2.com/index.php?r=sistemas%2Findex">
                    <button class="boton">Sistemas</button>
                    </a>
                    </div>
                </div>

                <div class="card" title="Mantenimiento" style="background-image: url('./img/mn1.png')">
                <div class="textos"> </div>
                    <div>
                    <a href="http://backend.mahekalyii2.com/index.php?r=mantto%2Findex">

                        <button class="boton">Mantto</button>
                        </a>
                    </div>
                </div>

                <div class="card" title="Ama de llaves" style="background-image: url('./img/ama1.jpg')">
                <div class="textos"> </div>
    
                <div>
                <a href="http://backend.mahekalyii2.com/index.php?r=amade%2Findex">

                        <button class="boton">Ama de llaves</button>
                </a>
                    </div>

                </div>
                <div class="card" title="Alimentos y bebidas" style="background-image: url('./img/ayb1.jpg')">
                <div class="textos"> </div>

                    <div>
                    <a href="http://backend.mahekalyii2.com/index.php?r=alimentos%2Findex">

                        <button class="boton">AyB</button>
                        </a>
                    </div>

                </div>
                <div class="card" title="Seguridad" style="background-image: url('./img/sec1.png')">
                <div class="textos"> </div>
   
                <div>
                <a href="http://backend.mahekalyii2.com/index.php?r=seguridad%2Findex">

                        <button class="boton">Seguridad</button>
                    </a>
                    </div>
                </div>

                <div class="card" title="Seguridad" style="background-image: url('./img/almacen.png')">
                <div class="textos"> </div>
   
                <div>
                <a href="http://backend.mahekalyii2.com/index.php?r=almacen%2Findex">

                        <button class="boton">Almacen</button>
                    </a>
                    </div>
                </div>

                <div class="card" title="Seguridad" style="background-image: url('./img/cocina.jpg')">
                <div class="textos"> </div>
   
                <div>
                <a href="http://backend.mahekalyii2.com/index.php?r=cocina%2Findex">

                        <button class="boton">Cocina</button>
                    </a>
                    </div>
                </div>

                <div class="card" title="Seguridad" style="background-image: url('./img/recepcion.jpg')">
                <div class="textos"> </div>
   
                <div>
                <a href="http://backend.mahekalyii2.com/index.php?r=recepcion%2Findex">

                        <button class="boton">Recepcion</button>
                    </a>
                    </div>
                </div>
                
                <div class="card" title="Seguridad" style="background-image: url('./img/conta.jpg')">
                <div class="textos"> </div>
   
                <div>
                <a href="http://backend.mahekalyii2.com/index.php?r=contabilidad%2Findex">

                        <button class="boton">Contabilidad</button>
                    </a>
                    </div>
                </div>

                <div class="card" title="Seguridad" style="background-image: url('./img/users.png')">
                <div class="textos"> </div>
   
                <div>
                <a href="http://backend.mahekalyii2.com/index.php?r=usuario%2Findex">

                        <button class="boton">Usuarios</button>
                    </a>
                    </div>
                </div>

                <div class="card" title="Seguridad" style="background-image: url('./img/admin.png')">
                <div class="textos"> </div>
   
                <div>
                <a href="http://backend.mahekalyii2.com/index.php?r=admin">

                        <button class="boton">Admin</button>
                    </a>
                    </div>
                </div>

            </div>

            <div class="banner" style="background-image: url('./img/banner.jpg')">
                <h3>Rock Legends 2021</h3>
                <ul>
                    <li>Guns N' Roses</li>
                    <li>AC/DC</li>
                    <li>Motley Crue</li>
                    <li>The Cult</li>
                    <li>Poison</li>
                    <li>Def Leppard</li>
                </ul>
                <button class="boton">Comprar Boletos</button>
            </div>
        </div>
    </body>

    <!--The following image works a link <br>
    <a href="http://backend.mahekalyii2.com/index.php?r=sistemas%2Findex"
    >    <img src="<?= Yii::getAlias('@web') ?>/img/pava.png" alt="RRHH" height="150" width="150">
</a>*/-->
</div>
<div class="body-content">

</div>

</div>
</div>