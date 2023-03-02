<?php
  require_once 'class.customer.php';
  $cust = new customer();
?>
<body onload="Showpage(5)">
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
  <select id="opt" name="opt" onchange="prepare_page(1)">
    <option value="5" selected>5</option>
    <option value="10">10</option>
    <option value="15">15</option>
    <option value="25">25</option>
  </select>
  <div>
  <button type="button" name="button" id="myBtn">+ins</button>
  <table border='1'>
    <tbody id="content"></tbody>
  </table>
  </div>
  <div id="pages"></div>
</body>
<!-- Start insert Customers Section  -->
<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body">
      <p><input type="text" name="CustomerName" placeholder="Enter Customer Name" value=""></p>
      <p><input type="text" name="ContactName" placeholder="Enter ContactName" value=""></p>
      <p><input type="text" name="Address" placeholder="Entry Address" value=""></p>
      <p><input type="text" name="City" placeholder="pranchine" value=""></p>
      <p><input type="text" name="PostalCode" placeholder="xxxxx" value=""></p>
      <p><input type="text" name="Country" placeholder="Ex. Thailand" value=""></p>
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
      <button type="button" name="btnSave" onclick="todo_add()">Save</button>
    </div>
  </div>
</div>
<!-- End insert Customers Section  -->
<script>
    function Showpage(perpage){
    page = <?= $cust->count(); ?>;
    totalpage = Math.ceil(page/perpage);
    contents = "";
    for (var i = 1; i <= totalpage; i++) {
      contents += "<button onclick='Page("+i+","+perpage+")'>"+i+"</button>";
    }
    document.getElementById('pages').innerHTML = contents;
  }

  function prepare_page(index) {
    perpage = document.getElementById('opt').value;
    Page(index, perpage);
    Showpage(perpage);
  }

  async function Page(index, perpage){
    try{
      const response = await fetch("rest.php?page="+index+"&perpage="+perpage,
      {method: "get"});
      const data = await response.json();
      info = data.response;
      console.log(info);
      contents = "";
      for (var i = 0; i < info.length; i++) {
        contents += "<tr>";
        for(var obj in info[i]){
          contents += "<td>"+info[i][obj]+"</td>";
        }
        contents += "<td><button>update</button>";
        contents += "<button>delete</button></td>";
        contents += "</tr>";
      }
      document.getElementById('content').innerHTML = contents;

    }catch(error){
      console.log("Error "+error);
    }
  }


  function todo_add() {
    add_customer();
    modal.style.display = "none";
  }

  async function add_customer() {
    const post_Data =  {
      ':CustomerName':document.getElementsByName("CustomerName")[0].value,
      ':ContactName' :document.getElementsByName("ContactName")[0].value,
      ':Address'     :document.getElementsByName("Address")[0].value,
      ':City'        :document.getElementsByName("City")[0].value,
      ':PostalCode'  :document.getElementsByName("PostalCode")[0].value,
      ':Country'     :document.getElementsByName("Country")[0].value
    };
    try{
      const response = await fetch("rest.php",
        { method : "POST",
          headers: {"Content-Type":"application/json"},
          body   : JSON.stringify(post_Data)
        });
        if(!response.ok){
          const message = "Error with "+response.status;
          throw new Error(message);
        }
        const data = await response.json();
        console.log(data);
    }catch(error){
      console.log("Error"+error);
    }
  }


</script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>