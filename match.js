var id, num, id_, val_info, style_new, style, styleI, val, array;
//defaultDate();

function get(element) {
    val = element.getAttribute("name");
    array = val.split(" ");
    id = array[0];
    num = array[1];
    id_ = array[2];
    
    document.getElementById("mid_div").style.display = "block";
    
    createCookie("id", id, "1");
    createCookie("num", num, "1");
    createCookie("id_", id_, "1");
}

function show_desc(element) {
    createCookie("desc", element.innerHTML, "1");
    style_new = document.getElementById("mid_div-desc").style.display;
    style_new = "block";
}

function show(element) {
    id = element.id;
    id_new = parseInt(id.substr(3));
    new_str = "msg".concat(--id_new);
    style = document.getElementById(new_str).style;
    css(style);
}

function show_info(element) {
    val_info = element.getAttribute("name");
    createCookie("val_info", val_info, "1");
    id = element.id;
    id_new = parseInt(id.substr(3));
    new_str = "msg_info".concat(--id_new);
    styleI = document.getElementById(new_str).style;
    css(styleI);
}

function change() {
    style.display = "none";
}

function change_info() {
    location.reload();  
}

function changeI() {
    styleI.display = "none";
}

function css(style) {
    style.display = "block";
    style.position = "absolute";
    style.top = "50%";
    style.left = "50%";
    style.transform = "translate(-50%, -50%)";
    style.width = "40%";
    style.border = "2px solid #000";
    style.borderRadius = "10px";
    style.padding = "10px 40px";
    style.background = "#145374";
    style.minHeight = "50px"; 
}

function createCookie(name, value, days) {
  var expires;
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    expires = "; expires=" + date.toGMTString();
  } else {
   expires = "";
  }
  document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
}