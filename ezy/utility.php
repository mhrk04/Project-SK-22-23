<!-- butang tukar saiz & warna -->
<button onclick="zoomIn()">A</button>
<button onclick="zoomOut">a</button>
<button id="color">WARNA</button>


<script>
  document.getElementById('color').onclick = changeColor;
  var currentColor = "red";

  function changeColor() {
    if (currentColor == "red") {
      document.body.style.color = "blue";
      currentColor = "blue";
    } else {
      document.body.style.color = "red";
      currentColor = "red";
    }
  }


  // coding saiz
  var fontSize = 1;

  function zoomIn() {
    fontSize += 0.1;
    document.body.style.fontSize = fontSize + "em";
  }

  function zoomOut() {
    fontSize -= 0.1;
    document.body.style.fontSize = fontSize + "em";
  }
</script>