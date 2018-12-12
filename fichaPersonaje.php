<!--
    Ventana de página de personaje del proyecto PathManager.
-->
<div id="accordion" style="width: 100%;">

    <!-- Grupo Personaje -->
    <div class="card cardradius">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Personaje
                </button>
            </h5>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <div class="col-md-12 objectbox">
                    <div class="row">
                        <div class="pcontainer">
                            <span><b>Nombre</b></span>
                        </div>
                        <div class="inputcontainer">
                            <input class="form-control"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 objectbox">
                    <div class="row">
                        <div class="pcontainer">
                            <span><b>Alineamiento</b></span>
                        </div>
                        <div class="inputcontainer">
                            <input class="form-control"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 objectbox">
                    <div class="row">
                        <div class="pcontainer">
                            <span><b>Raza</b></span>
                        </div>
                        <div class="inputcontainer">
                            <input class="form-control"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 objectbox">
                    <div class="row">
                        <div class="pcontainer">
                            <span><b>Clase Favorita</b></span>
                        </div>
                        <div class="inputcontainer">
                            <input class="form-control"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 objectbox">
                    <div class="row">
                        <div class="pcontainer">
                            <span><b>Descripción</b></span>
                        </div>
                        <div class="inputcontainer">
                            <input class="form-control"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 objectbox">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="pcontainer">
                                    <span><b>Nivel Máximo</b></span>
                                </div>
                                <div class="inputcontainer">
                                    <input class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="pcontainer">
                                    <span><b>Edad</b></span>
                                </div>
                                <div class="inputcontainer">
                                    <input class="form-control"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 objectbox">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="pcontainer">
                                    <span><b>Experiencia</b></span>
                                </div>
                                <div class="inputcontainer">
                                    <input class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="pcontainer">
                                    <span><b>Progreso de Nivel</b></span>
                                </div>
                                <div class="inputcontainer">
                                    <input class="form-control"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Grupo de Características Base y Bonus Racial -->
    <div class="card cardradius">
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Características Base y Bonus Racial
                </button>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">

                <div class="col-md-12 objectbox">
                    <div class="row">
                        <div class="col-12">
                            <div class="btn btn-primary" style="width: 100%;" onclick="refrescaValores()">
                                Actualizar valores
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 objectbox">
                    <div class="row">
                        <div class="col-3 nombrecaracteristicacontainer">
                            <span><b>Característica</b></span>
                        </div>

                        <div class="col-3 nombrecaracteristicacontainer">
                            <span><b>Valor Base</b></span>
                        </div>

                        <div class="col-3 nombrecaracteristicacontainer">
                            <span><b>Modificador</b></span>
                        </div>

                        <div class="col-3 nombrecaracteristicacontainer">
                            <span><b>Valor Total</b></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 objectbox">
                    <div class="row">
                        <div class="col-3 nombrecaracteristicacontainer">
                            <span><b>Fuerza</b></span>
                        </div>
                        <div class="col-3 inputcaracteristicacontainer">
                            <input id="baseFue" class="form-control text-center"/>
                        </div>
                        <div class="col-3 modificadorcaracteristica">
                            <span id="modFue" class="form-control disabled text-center">0</span>
                        </div>
                        <div class="col-3 caracteristicaajustadacontainer">
                            <span id="totalFue" class="form-control disabled text-center">0</span>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 objectbox">
                    <div class="row">
                        <div class="col-3 nombrecaracteristicacontainer">
                            <span><b>Constitución</b></span>
                        </div>
                        <div class="col-3 inputcaracteristicacontainer">
                            <input id="baseCon" class="form-control text-center"/>
                        </div>
                        <div class="col-3 modificadorcaracteristica">
                            <span id="modCon" class="form-control disabled text-center">0</span>
                        </div>
                        <div class="col-3 caracteristicaajustadacontainer">
                            <span id="totalCon" class="form-control disabled text-center">0</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 objectbox">
                    <div class="row">
                        <div class="col-3 nombrecaracteristicacontainer">
                            <span><b>Destreza</b></span>
                        </div>
                        <div class="col-3 inputcaracteristicacontainer">
                            <input id="baseDes" class="form-control text-center"/>
                        </div>
                        <div class="col-3 modificadorcaracteristica">
                            <span id="modDes" class="form-control disabled text-center">0</span>
                        </div>
                        <div class="col-3 caracteristicaajustadacontainer">
                            <span id="totalDes" class="form-control disabled text-center">0</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 objectbox">
                    <div class="row">
                        <div class="col-3 nombrecaracteristicacontainer">
                            <span><b>Inteligencia</b></span>
                        </div>
                        <div class="col-3 inputcaracteristicacontainer">
                            <input id="baseInt" class="form-control text-center"/>
                        </div>
                        <div class="col-3 modificadorcaracteristica">
                            <span id="modInt" class="form-control disabled text-center">0</span>
                        </div>
                        <div class="col-3 caracteristicaajustadacontainer">
                            <span id="totalInt" class="form-control disabled text-center">0</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 objectbox">
                    <div class="row">
                        <div class="col-3 nombrecaracteristicacontainer">
                            <span><b>Sabiduría</b></span>
                        </div>
                        <div class="col-3 inputcaracteristicacontainer">
                            <input id="baseSab" class="form-control text-center"/>
                        </div>
                        <div class="col-3 modificadorcaracteristica">
                            <span id="modSab" class="form-control disabled text-center">0</span>
                        </div>
                        <div class="col-3 caracteristicaajustadacontainer">
                            <span id="totalSab" class="form-control disabled text-center">0</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 objectbox">
                    <div class="row">
                        <div class="col-3 nombrecaracteristicacontainer">
                            <span><b>Carisma</b></span>
                        </div>
                        <div class="col-3 inputcaracteristicacontainer">
                            <input id="baseCar" class="form-control text-center"/>
                        </div>
                        <div class="col-3 modificadorcaracteristica">
                            <span id="modCar" class="form-control disabled text-center">0</span>
                        </div>
                        <div class="col-3 caracteristicaajustadacontainer">
                            <span id="totalCar" class="form-control disabled text-center">0</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Grupo de Equipo -->
    <div class="card cardradius">
        <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Equipo
                </button>
            </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
        </div>
    </div>
</div>

<script>
    function refrescaValores() {

        /* Valores Fuerza */
        var baseFue = document.getElementById('baseFue').value;
        var totalFue = baseFue;
        var modFue = Math.round(((totalFue - 10) / 2) - 0.1);
        $("#totalFue").text(totalFue);
        $("#modFue").text(modFue);

        /* Valores Constitución */
        var baseCon = document.getElementById('baseCon').value;
        var totalCon = baseCon;
        var modCon = Math.round(((totalCon - 10) / 2) - 0.1);
        $("#totalCon").text(totalCon);
        $("#modCon").text(modCon);

        /* Valores Destreza */
        var baseDes = document.getElementById('baseDes').value;
        var totalDes = baseDes;
        var modDes = Math.round(((totalDes - 10) / 2) - 0.1);
        $("#totalDes").text(totalDes);
        $("#modDes").text(modDes);

        /* Valores Inteligencia */
        var baseInt = document.getElementById('baseInt').value;
        var totalInt = baseInt;
        var modInt = Math.round(((totalInt - 10) / 2) - 0.1);
        $("#totalInt").text(totalInt);
        $("#modInt").text(modInt);

        /* Valores Sabiduría */
        var baseSab = document.getElementById('baseSab').value;
        var totalSab = baseSab;
        var modSab = Math.round(((totalSab - 10) / 2) - 0.1);
        $("#totalSab").text(totalSab);
        $("#modSab").text(modSab);

        /* Valores Carisma */
        var baseCar = document.getElementById('baseCar').value;
        var totalCar = baseCar;
        var modCar = Math.round(((totalCar - 10) / 2) - 0.1);
        $("#totalCar").text(totalCar);
        $("#modCar").text(modCar);

    }
</script>