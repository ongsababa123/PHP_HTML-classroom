<?php
  require_once 'class.customer.php';
  $cust = new customer();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body onload="Showpage(5)">
    <button type="button" name="ins" onclick="insert_data()">INSERT</button>
    <!-- button type="button" name="edit" onclick="edit_data()">UPDATE</button>
    <button type="button" name="del" onclick="delete_data()">DELETE</button>
    <button type="button" name="sel" onclick="getpage(1,5)">SELECT</button -->
    <table border="1">
      <tbody id="content"></tbody>
    </table>
    <div id="pages"></div>

    <script>
      function Showpage(perpage){
        page = <?= $cust->count(); ?>;
        totalpage = Math.ceil(page/perpage);
        contents = "";
        for (var i = 1; i <= totalpage; i++) {
          contents += "<button onclick='getpage("+i+","+perpage+")'>"+i+"</button>";
        }
        document.getElementById('pages').innerHTML = contents;
      }

      async function insert_data(){
        const postData = {
          "name":"Nopphagaw",
          "decription": "Lecturer",
        };
        try {
          const response = await fetch("xmltest.php?id=1",{
            method  : "post",
            headers : {"Content-Type":"application/json" },
            body: JSON.stringify(postData)
          });
          if(!response.ok){
            const message = "Error with "+ response.status;
            throw new Error(message);
          }
          const data = await response.json();
          document.getElementById("content").innerHTML = data["name"];
          console.log(data);
        }catch (error) {
          console.log('Error'+error);
        }
    }

    async function edit_data(){
      const postData = {
        "name":"Nopphagaw",
        "decription": "Lecturer",
      };
      try {
        const response = await fetch("xmltest.php?id=1",{
          method  : "put",
          headers : {"Content-Type":"application/json" },
          body: JSON.stringify(postData)
        });
        if(!response.ok){
          const message = "Error with "+ response.status;
          throw new Error(message);
        }
        const data = await response.json();
        document.getElementById("content").innerHTML = data["name"];
        console.log(data);
      }catch (error) {
        console.log('Error'+error);
      }
    }

    async function delete_data(){
      try {
        const response = await fetch("xmltest.php?id=1",{
          method  : "delete",
        });
        if(!response.ok){
          const message = "Error with "+ response.status;
          throw new Error(message);
        }
        const data = await response.json();
        document.getElementById("content").innerHTML = data["name"];
        console.log(data);
      }catch (error) {
        console.log('Error'+error);
      }
    }

    async function getpage(page,perpage){
      try {
        const response = await fetch("xmltest.php?page="+page+"&perpage="+perpage,{
          method  : "get",
        });
        if(!response.ok){
          const message = "Error with "+ response.status;
          throw new Error(message);
        }
        const data = await response.json();
        txt = "";
        for (var i = 0; i < data.respone.length; i++) {
          txt += "<tr>";
          for(var obj in data.respone[i]){
            txt += "<td>"+data.respone[i][obj]+"</td>";
          }
          txt += "<td>update</td>";
          txt += "<td><button type='button' name='del'"+
                 " onclick='delete_data("+data.respone[i]["CustomerID"]+")'>DELETE</button></td>";
          txt += "</tr>";
        }
        document.getElementById("content").innerHTML = txt;
        console.log(data);
      }catch (error) {
        console.log('Error'+error);
      }
  }
    </script>

  </body>
</html>
