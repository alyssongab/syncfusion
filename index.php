<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Essential JS 2 Grid</title>
    <link href="resources/styles/material.css" rel="stylesheet" type="text/css"/>
    <script src="resources/scripts/ej2.min.js" type="text/javascript"></script>
    <script>ej.base.registerLicense('Ngo9BigBOggjHTQxAR8/V1NMaF1cXmhKYVF2WmFZfVtgc19DYFZQR2YuP1ZhSXxWdkdiUX1cdX1UQmBaVEw=')</script>
</head>
<body>

    <header> <?php include('header.php') ?> </header>

    <h2>Componente Grid</h2>
    <!-- Add the HTML <div> element for grid  -->
    <div id="Grid"></div>
    <script src="es5-datasource.js" type="text/javascript"></script>
    <script>
        ej.grids.Grid.Inject(ej.grids.Page);
        var grid = new ej.grids.Grid({
            dataSource: data,
            columns: [
                        { field: 'OrderID', headerText: 'ID Pedido', textAlign: 'Right', width: 120, type: 'number' },
                        { field: 'CustomerID', width: 140, headerText: 'ID do Cliente', type: 'string' },
                        { field: 'Freight', headerText: 'Frete', textAlign: 'Right', width: 120, format: 'C' },
                        { field: 'OrderDate', headerText: 'Data do Pedido', width: 140, format: 'dd/MM/yyyy' }
            ],
            allowPaging: true,
            pageSettings: { pageSize: 7 }
        });

        grid.appendTo('#Grid');
    </script>
</body>
</html>