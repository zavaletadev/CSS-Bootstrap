<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CSS / Bootstrap</title>
    <!-- 
        Agregamos la referencia a Boostrap5 desde un recurso en la nube (CDN)
    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- 
        Agregamos las referencias a FontAwesome
    -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

    <!-- Contenedor principal -->
    <div class="container">
        <!-- Fila dinámica -->
        <div class="row">
            <!-- Columna -->
            <div class="col-12">
                <h1 class="text-center">Hola mundo</h1>
                <hr />
            </div>
        </div>

        <div class="row">
            <?php for($i = 0; $i < 12; $i++) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-2">
                    <div class="card">
                        <div class="card-header">
                            <p class="text-center text-warning">
                                <i class="fas fa-star fa-3x fa-spin"></i>
                            </p>
                        </div>
                        <img src="imagenes/tacos.jpg" class="card-img-top" alt="Imagen" />
                        <div class="card-body">
                            Deliciosos tacos
                        </div>                    
                        <div class="card-footer bg-dark">
                            <p class="text-center">
                                <i class="fas fa-heart text-danger"></i>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

        <form class="row my-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h2 class="card-title text-light">
                            Formularios
                        </h2>
                    </div>

                    <div class="card-body bg-light">
                        <div class="row">
                            <div class="col-md-4 my-2">
                                <label for="form-label">Campo de formulario</label>
                                <input type="text" class="form-control" />
                            </div>

                            <div class="col-md-4 my-2">
                                <label for="form-label">Campo de formulario</label>
                                <input type="text" class="form-control" />
                            </div>

                            <div class="col-md-4 my-2">
                                <label for="form-label">Campo de formulario</label>
                                <input type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 my-2">
                                <label for="form-label">Campo de formulario</label>
                                <input type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 my-2">
                                <label for="form-label">Campo de formulario</label>
                                <input type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 my-2">
                                <label for="exampleDataList" class="form-label">Lista de datos</label>
                                <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Ciudades">
                                <datalist id="datalistOptions">
                                    <option value="San Francisco" />
                                    <option value="New York" />
                                    <option value="Seattle" />
                                    <option value="Los Angeles" />
                                    <option value="Chicago" />
                                </datalist>
                            </div>


                            <div class="col-md-6 my-2">
                                <label class="form-label">Lista de elementos</label>
                                <select class="form-control">
                                    <option value="New York">New York</option>
                                    <option value="Seattle">Seattle</option>
                                    <option value="Los Angeles">Los Angeles</option>
                                    <option value="Chicago">Chicago</option>
                                </select>
                            </div>

                            <div class="col-md-4 my-2">
                                <label class="form-label">Calendario</label>
                                <input type="date" class="form-control">
                            </div>

                            <div class="col-md-8 my-2">
                                <label class="form-label">Campo de texto</label>
                                <input type="tel" class="form-control">
                            </div>

                            <div class="col-md-2 my-2">
                                <button type="button" class="btn btn-primary w-100">
                                    <i class="fas fa-save"></i>
                                </button>
                            </div>

                            <div class="col-md-2 my-2">
                                <button type="button" class="btn btn-dark w-100">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                            </div>

                            <div class="col-md-2 my-2">
                                <button type="button" class="btn btn-danger w-100">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>

                            <div class="col-md-2 my-2">
                                <button type="button" class="btn btn-success w-100">
                                    <i class="fas fa-check-circle"></i>
                                </button>
                            </div>

                            <div class="col-md-2 my-2">
                                <button type="button" class="btn btn-warning w-100">
                                    <i class="fas fa-spinner fa-pulse"></i>
                                </button>
                            </div>

                            <div class="col-md-2 my-2">
                                <button type="button" class="btn btn-secondary w-100">
                                    <i class="fas fa-cog fa-spin"></i>
                                </button>
                            </div>

                            <div class="col-sm-6 my-2">
                                <button type="button" class="btn btn-link w-100">
                                    Botón tipo link                                    
                                </button>
                            </div>

                            <div class="col-sm-6 my-2">
                                <button type="button" class="btn btn-link w-100">
                                    Botón tipo link                                    
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


    <!-- 
        Agregamos la referencia a Boostrap5 desde un recurso en la nube (CDN)
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
