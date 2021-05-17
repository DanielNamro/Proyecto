<!DOCTYPE html>
<html lang="es">

<head>
    <title>Título de la WEB</title>
    <meta charset="UTF-8">
    <meta name="title" content="Título de la WEB">
    <meta name="description" content="Descripción de la WEB">
    <link rel="stylesheet" href="./Proyecto/resources/css/bootstrap.min.css">
    <script src="./Proyecto/resources/js/jquery-3.4.1.min.js"></script>
    <script src="./Proyecto/resources/js/bootstrap.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');
        body {
            background-image: url(concrete-texture.png);
        }
        
        body {
            margin: 0px auto;
            padding: 0px auto;
        }
        
        #cabecer {
            height: 100px;
            margin-bottom: 2%;
        }
        
        #log {
            float: center;
        }
        
        #h1 {
            height: 150px;
            display: flex;
            align-items: center;
        }
        
        #h2 {
            height: 150px;
            display: flex;
            align-items: center;
        }
        
        #bus {
            width: 350px;
        }
        
        .navbar-nav.navbar-center {
            position: absolute;
            display: block;
            left: 50%;
            transform: translatex(-50%);
        }
        
        #ul1,
        li {
            padding-left: 40px;
        }
        
        #subt {
            text-align: center;
            font-family: 'Dancing Script', cursive;
            font-size: 50px;
            margin-bottom: 30px;
        }
        
        section {
            /*border: 1px solid black;*/
            height: 2200px;
            margin-left: 20%;
            margin-right: 20%;
        }
        
        #s1 {
            height: 275px;
            float: left;
        }
        
        #img1 {
            width: 100%;
            height: 100%;
        }
        
        #img2 {
            width: 100%;
            height: 100%;
        }
        
        #s2 {
            border: 1px solid black;
            height: 135px;
            float: right;
            margin-bottom: 5px;
        }
        
        #s3 {
            border: 1px solid black;
            height: 135px;
            float: right;
        }
        
        #subt2 {
            text-align: center;
            font-family: 'Dancing Script', cursive;
            font-size: 50px;
            margin-top: 60px;
            margin-bottom: 60px;
        }
        
        .galeria {
            height: calc( 300px + 3em);
            width: 760px;
            margin: 1em auto;
            position: relative;
        }
        
        .galeria img {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 3s;
        }
        
        .galeria input[type=radio] {
            position: relative;
            bottom: calc(-300px - 1.5em);
            left: .5em;
        }
        
        .galeria input[type=radio]:nth-of-type(1):checked~img:nth-of-type(1) {
            opacity: 1;
        }
        
        .galeria input[type=radio]:nth-of-type(2):checked~img:nth-of-type(2) {
            opacity: 1;
        }
        
        .galeria input[type=radio]:nth-of-type(3):checked~img:nth-of-type(3) {
            opacity: 1;
        }
        
        .galeria input[type=radio]:nth-of-type(4):checked~img:nth-of-type(4) {
            opacity: 1;
        }
    </style>
</head>

<body>
    <header>
        <div class="row" id="cabecer">
            <div class="col-lg-6" id="h1"><img src="logos/unnamed.png" alt="" id="log" class="center-block"></div>
            <div class="col-lg-6" id="h2" class=" justify-content-center">


                <div class="search head_search" id="bus">
                    <form class="form-search">
                        <div class="input-group">
                            <input class="form-control form-text" maxlength="128" placeholder="Buscar" size="15" type="text" />
                            <span class="input-group-btn"><button class="btn btn-black"><i
                                        class="fa fa-search fa-lg">&nbsp;</i></button></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <div class="row">
        <nav class=" col-lg-12 navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-center" id="ul1">
                    <li><a href="#">Center 1</a></li>
                    <li><a href="#">Center 2</a></li>
                    <li><a href="#">Center 3</a></li>
                    <li><a href="#">Center 1</a></li>
                    <li><a href="#">Center 2</a></li>
                    <li><a href="#">Center 3</a></li>
                    <li><a href="#">Center 1</a></li>

                </ul>

            </div>
        </nav>
    </div>
    <section>
        <article>
            <h2 id="subt">Te ayudaremos a encontrar lo que mas te conviene
            </h2>
            <div class="row">
                <div class="galeria">
                    <input type="radio" name="navegacion" id="_1" checked>
                    <input type="radio" name="navegacion" id="_2">
                    <input type="radio" name="navegacion" id="_3">
                    <input type="radio" name="navegacion" id="_4">
                    <img src="ori.png" />
                    <img src="preparation-baking-kitchen-ingredients-for-cooking.jpg" />
                    <img src="http://placekitten.com/260/300" />
                    <img src="http://www.stevensegallery.com/260/300" />
                </div>
            </div>
            <h2 id="subt2">Disfruta de todos nuestros tops
            </h2>




            <div class="panel-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">LOS MEJORES RATONES</div>
                    <div class="panel-body"><img id="img1" class="img-fluid" src="./img/foto1.jpg" /></div>
                </div>
            </div>
            <div class="panel-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">MONITORES POR MENOS DE 100€</div>
                    <div class="panel-body"><img id="img2" class="img-fluid" src="./img/foto2.jpg" /></div>
                </div>
            </div>
            <div class="panel-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">MONITORES POR MENOS DE 100€</div>
                    <div class="panel-body">
                        <img class="img-fluid" id="img3" src="./img/foto3.jpg" />
                    </div>
                </div>
            </div>
            <div class="panel-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">MONITORES POR MENOS DE 100€</div>
                    <div class="panel-body"><img id="img4" class="img-fluid" src="./img/foto4.jpg" /></div>
                </div>
            </div>

            </div>
        </article>
    </section>
    <aside>
        <h3></h3>
        <p></p>
    </aside>
    <footer>
        <h4></h4>
        <a href="#"></a>
        <a href="#"></a>
    </footer>
</body>

</html>