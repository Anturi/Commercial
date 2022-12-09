<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Gestionar Inventario</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

</head>

<body>
    <div class="container-sm">
        <header style="text-align:center; margin-top:50px;">
                <img src="https://campusvirtual.poligran.edu.co/img/logopoli_w.png"width="20%" >
                <h1>Proyecto IC Grupo 6 Saludo al profesor Oscar</h1>
            <h2>Gestionar Productos de Inventario</h2>
        </header>
        <hr>
        <div class="row">
            <div class="col-sm-6">
                <a href="" class="btn btn-primary">
                    <span>Dashboard</span></a>
                <a href="" class="btn btn-success">
                    <span>Insertar producto</span></a>
            </div>
        </div>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre del producto</th>
                    <th scope="col">Referencia</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Stock</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">01</th>
                    <td>TV Samart Kalley</td>
                    <td>REF 3245aZ</td>
                    <td>$749.999-</td>
                    <td>1850 gramos</td>
                    <td>Electrodomesticos Hogar</td>
                    <td>130</td>
                    <td>
                        <a href="" data-toggle="modal"><i class="material-icons" style="font-size:32px;color:red">mode_edit</i></a>
                    </td>
                    <td>
                    <form method="post" action="">
                        @method('delete')
                        @csrf
                        <button><i class="material-icons" title="Delete">&#xE872;</i></button>
                    </form>
                </td>
                </tr>
                <tr>
                    <th scope="row">01</th>
                    <td>TV Samart Kalley</td>
                    <td>REF 3245aZ</td>
                    <td>$749.999-</td>
                    <td>1850 gramos</td>
                    <td>Electrodomesticos Hogar</td>
                    <td>130</td>
                    <td>
                        <a href="" data-toggle="modal"><i class="material-icons" style="font-size:32px;color:red">mode_edit</i></a>
                    </td>
                    <td>
                    <form method="post" action="">
                        @method('delete')
                        @csrf
                        <button><i class="material-icons" title="Delete">&#xE872;</i></button>
                    </form>
                </td>
                </tr>
                <tr>
                    <th scope="row">02</th>
                    <td>Lavadora Whirlpool Carga Superior</td>
                    <td>WW20LTAHLA Gris</td>
                    <td>$1.979.900-</td>
                    <td>20 KG</td>
                    <td>Electrodomesticos Hogar</td>
                    <td>50</td>
                    <td>
                        <a href="" data-toggle="modal"><i class="material-icons" style="font-size:32px;color:red">mode_edit</i></a>
                    </td>
                    <td>
                    <form method="post" action="">
                        @method('delete')
                        @csrf
                        <button><i class="material-icons" title="Delete">&#xE872;</i></button>
                    </form>
                </td>
                </tr>
                <tr>
                    <th scope="row">03</th>
                    <td>Lavadora LG Carga Superior</td>
                    <td>WT19BSB Negro</td>
                    <td>$2.357.800-</td>
                    <td>19 KG</td>
                    <td>Electrodomesticos Hogar</td>
                    <td>13</td>
                    <td>
                        <a href="" data-toggle="modal"><i class="material-icons" style="font-size:32px;color:red">mode_edit</i></a>
                    </td>
                    <td>
                    <form method="post" action="">
                        @method('delete')
                        @csrf
                        <button><i class="material-icons" title="Delete">&#xE872;</i></button>
                    </form>
                </td>
                </tr>
                <tr>
                    <th scope="row">01</th>
                    <td>Horno Microondas KALLEY</td>
                    <td>REF 3245aZ</td>
                    <td>$299.999-</td>
                    <td>1850 gramos</td>
                    <td>Electrodomesticos Hogar</td>
                    <td>30</td>
                    <td>
                        <a href="" data-toggle="modal"><i class="material-icons" style="font-size:32px;color:red">mode_edit</i></a>
                    </td>
                    <td>
                    <form method="post" action="">
                        @method('delete')
                        @csrf
                        <button><i class="material-icons" title="Delete">&#xE872;</i></button>
                    </form>
                </td>
                </tr>
                <tr>
                    <th scope="row">01</th>
                    <td>Horno Microondas SAMSUNG</td>
                    <td>REF 3245aZ</td>
                    <td>$429.999-</td>
                    <td>1850 gramos</td>
                    <td>Electrodomesticos Hogar</td>
                    <td>100</td>
                    <td>
                        <a href="" data-toggle="modal"><i class="material-icons" style="font-size:32px;color:red">mode_edit</i></a>
                    </td>
                    <td>
                    <form method="post" action="">
                        @method('delete')
                        @csrf
                        <button><i class="material-icons" title="Delete">&#xE872;</i></button>
                    </form>
                </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
