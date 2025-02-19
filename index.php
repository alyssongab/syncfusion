<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Essential JS 2 Grid</title>
    <link href="resources/styles/material.css" rel="stylesheet" type="text/css"/>
    <script src="resources/scripts/ej2.min.js" type="text/javascript"></script>
    <script>ej.base.registerLicense('Ngo9BigBOggjHTQxAR8/V1NMaF1cXmhKYVF2WmFZfVtgc19DYFZQR2YuP1ZhSXxWdkdiUX1cdX1UQmBaVEw=')</script>
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

    <head> <?php include('hdr.php') ?> </head>
    <div> <?php include('header.php') ?> </div>
    
    <main>
        <h2>Componente Grid</h2>

            <!-- Add the HTML <div> element  -->
            <div id="element">
                <div class="e-tab-header">
                <div> Grid 2 </div>
                <div> Grid 3 </div>
            </div>
            <div class="e-content">
                <div id="Grid">
                    <script src="es5-datasource.js" type="text/javascript"></script>
                    <script src="grid1.js"></script>
                </div>
                <div id="Grid2">
                    <script src="grid2.js"></script>
                </div>
            </div>
            </div>

            <script>
            var tabObj = new ej.navigations.Tab();

            //Render initialized Tab component
            tabObj.appendTo('#element');
            </script>
        </main>
</body>
</html>