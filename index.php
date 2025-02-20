<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Exemplo componentes</title>
    <link href="resources/styles/material.css" rel="stylesheet" type="text/css"/>
    <script src="resources/scripts/ej2.min.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="https://ej2.syncfusion.com/home/favicon.ico" />
    <script>ej.base.registerLicense('Ngo9BigBOggjHTQxAR8/V1NMaF1cXmhKYVF2WmFZfVtgc19DYFZQR2YuP1ZhSXxWdkdiUX1cdX1UQmBaVEw=')</script>
    <link rel="stylesheet" href="master-detail/index.css">
    <script src="master-detail/index.js"></script>
    <script src="master-detail/datasource.js"></script>
    <style>
        *{
            padding: 0;
            margin: 0;
        }

        main{
            padding: 10px;
        }
    </style>
</head>
<body>

    <header> <?php include('header.php') ?> </header>
    <div> <?php include('menu.php') ?> </div>
    
    <main>
        <h2>Componente Grid</h2>

            <!-- Add the HTML <div> element  -->
            <div id="element">
                <div class="e-tab-header">
                <div> Grid 1 </div>
                <div> Grid 2 </div>
            </div>
            <div class="e-content">
                <div id="masterdetail">
                    <?php include('master.php') ?>
                </div>
                <div id="Grid2">
                    teste de tab
                </div>
            </div>
            </div>

            <script>
            var tabObj = new ej.navigations.Tab({
                enablePersistence: true,
            });

            //Render initialized Tab component
            tabObj.appendTo('#element');
            </script>
        </main>
</body>
</html>