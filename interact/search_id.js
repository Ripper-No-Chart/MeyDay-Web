$("#tableMain").on("click", "a", function Display() {
  var ptsID = $(this)
    .closest("tr")
    .find("td:first")
    .text();
  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("tableMain").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "search_id.php?id=" + ptsID, true);
  xmlhttp.send();
});
