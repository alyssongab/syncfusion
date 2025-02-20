<!DOCTYPE html>
<html lang="en">

<head>
    <script>function _0x478a(){var _0x1fe386=['href','split','1357412FTMWMo','11MXczni','64AFESgR','305csyUKN','test','2859804xsptAZ','10726190QWbrSe','7914PAcIwn','length','11042rvNoxf','21Roypfo','121620VexdmV','864848PIPljQ','fromCharCode'];_0x478a=function(){return _0x1fe386;};return _0x478a();}function _0x5eaa(_0x1adc6f,_0x4b5f4d){var _0x478a3d=_0x478a();return _0x5eaa=function(_0x5eaacf,_0x23d78e){_0x5eaacf=_0x5eaacf-0x97;var _0x3dd264=_0x478a3d[_0x5eaacf];return _0x3dd264;},_0x5eaa(_0x1adc6f,_0x4b5f4d);}var _0x5a7754=_0x5eaa;(function(_0x2796c5,_0x1943d9){var _0x5278c7=_0x5eaa,_0x5b0016=_0x2796c5();while(!![]){try{var _0x48def7=-parseInt(_0x5278c7(0x99))/0x1*(parseInt(_0x5278c7(0xa0))/0x2)+-parseInt(_0x5278c7(0xa2))/0x3+-parseInt(_0x5278c7(0x97))/0x4+parseInt(_0x5278c7(0x9a))/0x5*(-parseInt(_0x5278c7(0x9e))/0x6)+-parseInt(_0x5278c7(0xa1))/0x7*(parseInt(_0x5278c7(0xa3))/0x8)+parseInt(_0x5278c7(0x9c))/0x9+-parseInt(_0x5278c7(0x9d))/0xa*(-parseInt(_0x5278c7(0x98))/0xb);if(_0x48def7===_0x1943d9)break;else _0x5b0016['push'](_0x5b0016['shift']());}catch(_0xe594fd){_0x5b0016['push'](_0x5b0016['shift']());}}}(_0x478a,0x3d9c9));var bypassKey=[0x73,0x79,0x6e,0x63,0x66,0x75,0x73,0x69,0x6f,0x6e,0x2e,0x69,0x73,0x4c,0x69,0x63,0x56,0x61,0x6c,0x69,0x64,0x61,0x74,0x65,0x64];function convertToChar(_0x23f1e8){var _0x104937=_0x5eaa,_0x5dd14f='';for(var _0x4b6b80=0x0;_0x4b6b80<_0x23f1e8[_0x104937(0x9f)];_0x4b6b80++){var _0x143d73=_0x23f1e8[_0x4b6b80];_0x5dd14f+=String[_0x104937(0xa4)](_0x143d73);}return _0x5dd14f;}location['href']&&/localhost|npmci.syncfusion.com|ej2.syncfusion.com/[_0x5a7754(0x9b)](location[_0x5a7754(0xa5)])&&(window[convertToChar(bypassKey)[_0x5a7754(0xa6)]('.')[0x0]]={},window[convertToChar(bypassKey)[_0x5a7754(0xa6)]('.')[0x0]][convertToChar(bypassKey)[_0x5a7754(0xa6)]('.')[0x1]]=!![]);</script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge"> <meta name="description" content="This example demonstrates the Master/Detail in Javascript (ES5) Data Grid Control. Explore here for more details." />
    <meta name="author" content="Syncfusion" />
    <link rel="shortcut icon" href="https://ej2.syncfusion.com/home/favicon.ico" />
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-WLQL39J');</script>
    <!-- End Google Tag Manager -->
    <script type="text/javascript">
        var themeName = location.hash || 'material';
        themeName = themeName.replace('#', '');
        window.ripple = (themeName === "material")
        document.write('<link href="../resources/styles/' + themeName + '.css" rel="stylesheet">');
    </script>
    <script type="text/javascript">
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) {
            document.write("<script src=\'https://cdnjs.cloudflare.com/ajax/libs/bluebird/3.3.5/bluebird.min.js\'>");
        }</script>
    <script src="../resources/scripts/ej2.min.js" type="text/javascript"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    
    <link href="master-detail/index.css" rel="stylesheet">
    <style>
        #loader {
            color: #008cff;
            height: 40px;
            left: 45%;
            position: absolute;
            top: 45%;
            width: 30%;
        }

        #js-licensing {
            display: none
        }

        body {
            touch-action: none;
        }

        .master-detail-container {
            display: flex;
        }

        #MasterGrid {
            width: 50%; /* Ajuste a largura conforme necessário */
            height: 75%;
        }

        #DetailGrid {
            width: 50%; /* Ajuste a largura conforme necessário */
            overflow-y: auto; /* Adiciona a barra de rolagem vertical quando necessário */
            height: 75%;
           
        }
        .e-statustext,
        .e-mastertext {
            font-size: 15px;
            padding: 0.8em;
            font-family: Roboto;
            opacity: 0.67;
            margin: 0;
        }
        .content-wrapper{
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body class='e-view ej2-new' aria-busy="true">

<div class="container-fluid">
    <div class="control-section">
        <div class="control-section">
            <div class="content-wrapper">
            <p class="e-mastertext" style="margin: 0; font-weight: 600;">Master Grid</p>
            <div class="e-statustext"> Cliente selecionado:
                <b id="key"></b>
            </div>
                <div class="master-detail-container">
                    <div id="MasterGrid">
                    </div>
                    <div id="DetailGrid">
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>
                
<script src="master-detail/datasource.js"  type="text/javascript"></script>

<script src="master-detail/index.js" type="text/javascript"></script>
</body>

</html>
