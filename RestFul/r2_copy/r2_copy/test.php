<?php
  require_once 'class.customer.php';
  $cust = new customer();
?>
<body onload="Showpage(5)">
  <select id="opt" name="opt" onchange="prepare_page(1)">
    <option value="5" selected>5</option>
    <option value="10">10</option>
    <option value="15">15</option>
    <option value="25">25</option>
  </select>
  <div>
    <button type="button" name="button">+ins</button>
  <table border='1'>
    <tbody id="content"></tbody>
  </table>
  </div>
  <div id="pages"></div>
</body>
<script>
  function Showpage(perpage){
    page = <?= $cust->count(); ?>;
    totalpage = Math.ceil(page/perpage);
    contents = "";
    for (var i = 1; i <= totalpage; i++) {
      contents += "<button onclick='Page("+i+","+perpage+")'>"+i+"</button>";
    }
    document.getElementById('pages').innerHTML = contents;
    prepare_page(1);
  }
  function prepare_page(index) {
    perpage = document.getElementById('opt').value;
    Page(index, perpage);
  }

  function Page(index, perpage){
    xhttp = new XMLHttpRequest();
    xhttp.open("GET", "rest.php?page="+index+"&perpage="+perpage, true);
    xhttp.send();
    xhttp.onreadystatechange = function(){
      if(xhttp.readyState ==4 && xhttp.status==200){
        data = JSON.parse(this.responseText);
        contents = "";
        for (var i = 0; i < data.respone.length; i++) {
          contents += "<tr>";
          for(var obj in data.respone[i]){
            contents += "<td>"+data.respone[i][obj]+"</td>";
          }
          contents += "<td><button>update</button>";
          contents += "<button>delete</button></td>";
          contents += "</tr>";
        }
        document.getElementById('content').innerHTML = contents;
      }
    }
  }
</script>