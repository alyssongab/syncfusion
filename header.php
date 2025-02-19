<!--element which is going to render-->
<div class="control-container">
  <header id="appbar">
    <button id="defaultButtonMenu"></button>
    <span class="regular" style="margin:0 5px">Nuvio</span>
    <div class="e-appbar-spacer"></div>
    <button id="defaultButtonLogin"></button>
  </header>
</div>

<script>
  var appbarObj = new ej.navigations.AppBar({
    colorMode: 'Primary'
  });
  appbarObj.appendTo("#appbar");

  var defaultButtonMenuObj = new ej.buttons.Button({ cssClass: 'e-inherit', iconCss: 'e-icons e-menu' });
  defaultButtonMenuObj.appendTo('#defaultButtonMenu');

  var defaultButtonLoginObj = new ej.buttons.Button({ cssClass: 'e-inherit', content: 'Logout' });
  defaultButtonLoginObj.appendTo('#defaultButtonLogin');
</script>