@extends('layouts.app')

@section('content')
<style>
    #p1 {

        font-size: 20px;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{$top->Name}} TOP</h1>
            <ul>


                <div class="panel panel-default">
                    <div class="panel-body">
                        <p id="p1">{{$top->Description}}</p>
                    </div>
                </div>

                <div class="list-group">
                    <a href="https://www.amazon.es/Rii-inal%C3%A1mbrico-recargable-ajustables-Ordenadores/dp/B07RDJM9RH?ref_=Oct_s9_apbd_otopr_hd_bw_b11TI2Z&pf_rd_r=KVT07E3S303BZ7J2JMW4&pf_rd_p=fd5d8c7c-1fc1-5e74-afca-139586cec4c7&pf_rd_s=merchandised-search-10&pf_rd_t=BROWSE&pf_rd_i=937890031" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">TOP 1: {{$top->pn1}}</h5>
                        </div>
                        <p class="mb-1">{{$top->p1}}</p>
                    </a>
                    <br>
                    <a href="https://www.amazon.es/Rii-inal%C3%A1mbrico-recargable-ajustables-Ordenadores/dp/B07RDJM9RH?ref_=Oct_s9_apbd_otopr_hd_bw_b11TI2Z&pf_rd_r=KVT07E3S303BZ7J2JMW4&pf_rd_p=fd5d8c7c-1fc1-5e74-afca-139586cec4c7&pf_rd_s=merchandised-search-10&pf_rd_t=BROWSE&pf_rd_i=937890031" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">TOP 2: {{$top->pn1}}</h5>
                        </div>
                        <p class="mb-1">{{$top->p1}}</p>
                    </a>
                    <br>
                    <a href="https://www.amazon.es/Rii-inal%C3%A1mbrico-recargable-ajustables-Ordenadores/dp/B07RDJM9RH?ref_=Oct_s9_apbd_otopr_hd_bw_b11TI2Z&pf_rd_r=KVT07E3S303BZ7J2JMW4&pf_rd_p=fd5d8c7c-1fc1-5e74-afca-139586cec4c7&pf_rd_s=merchandised-search-10&pf_rd_t=BROWSE&pf_rd_i=937890031" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">TOP 3: {{$top->pn1}}</h5>
                        </div>
                        <p class="mb-1">{{$top->p1}}</p>
                    </a>
                </div>
                <BR>
                <BR>
            
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h5>COMENTARIOS</h5> <a href="/coments/create" class="btn  float-right">Añadir comentario</a>
                        @foreach($coments as $coment)
                        <div class="well well bs-component">
                            <div class="content">
                                {{$coment->Text}}
                            </div>
                        </div>
                        @endforeach

                       
                    </div>
                </div>
            </ul>
        </div>
    </div>
    @endsection