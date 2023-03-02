function doit(p_id, title, imgsrc, price) {
  // mydiv = document.getElementById('mydiv');
  // mydiv.innerHTML +=
  var mydiv =
  `<div class="card">
      <div class="card__header">
        <center>
          <img src="`+imgsrc+`" alt="card__image" class="card__image" width="300">
        </center>
      </div>
      <div class="card__body">
        <span class="tag tag-blue">อาหารเมนูคาวหวาน</span>
        <h4 id='menu_name'>`+`<input type="checkbox" id = "`+p_id+`" name="checkbox" value="`+title+`" onchange="showStateClick()">`+title+`</h4>
        <p name = 'menu_price'  value = "`+price+`">`+price+`</p>
        <input type="hidden" name="price_hid" value = "`+price+`">
      </div>
      <div class="card__footer">
        <div class="user">
          <div class="user__info">
            <h5 id='cost'>จำนวน <input type="number" name="quantity" min='0' max='55'> จาน </h5>
          </div>
        </div>
      </div>
    </div>`;

    return mydiv;

    
}
