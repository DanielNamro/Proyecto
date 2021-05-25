@extends('layouts.app')

@section('content')

<style>
    #subt {
        text-align: center;
        font-family: 'Dancing Script', cursive;
        font-size: 50px;
        margin-bottom: 30px;
    }

    #subt2 {
        text-align: center;
        font-family: 'Dancing Script', cursive;
        font-size: 50px;

        margin-bottom: 60px;
    }

    #ca {
        margin-bottom: 10px;
    }

    #carouselExampleIndicators {
        width: 1000px;
        height: 500px;
        float: none;
    }
</style>
<main class="py-4">
    <!--     @yield('content')-->
</main>



<div id="contenedor" class="container col-lg-10 justify-content-center">
        <h2 id="subt">WE WILL HELP YOU TO FIND WHAT IS THE BEST FOR YOU
        </h2>

        <div class="container ">
            <div class="row ">
                <div id="carouselExampleIndicators"
                    class="carousel slide  mx-auto d-block col-lg-10 col-md-10 col-sm-10 col-xs-12"
                    data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://www.ejemplos.co/wp-content/plugins/contextual-related-posts/default.png"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.ejemplos.co/wp-content/plugins/contextual-related-posts/default.png"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.ejemplos.co/wp-content/plugins/contextual-related-posts/default.png"
                                class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev d-block" href="#carouselExampleIndicators" role="button"
                        data-slide="prev">

                        <span class="sr-only ">Previous</span>
                    </a>
                    <a class="carousel-control-next d-block " href="#carouselExampleIndicators" role="button"
                        data-slide="next">

                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- Carousel wrapper -->
            <div class="row">
                <h2 id="subt2">Enjoy our best tops</h2>

                <div class="card-deck" id="ca">
                    <div class="card">
                        <div class="card-body mx-auto">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body mx-auto">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                content.
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body mx-auto">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This card has even longer content than the first to show that equal
                                height
                                action.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <h4 id="subt2">Gaming</h4>

                <div class="card-deck" id="ca">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                content.
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This card has even longer content than the first to show that equal
                                height
                                action.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <h2 id="subt2">Electronics
                </h2>


                <div class="card-deck" id="ca">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                content.
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This card has even longer content than the first to show that equal
                                height
                                action.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection


</html>