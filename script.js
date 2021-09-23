function salin() {
  /* Get the text field */
  var text = document.getElementById("url");
  text.select();
  document.execCommand("copy");
}