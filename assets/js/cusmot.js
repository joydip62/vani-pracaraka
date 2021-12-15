function language(x) {
    if (x == 1) document.getElementById('other-lan').style.display = "block";
    else document.getElementById('other-lan').style.display = "none";
    return;
}



$(function() {
    $("#anotherAddress").on("click",function() {
      $(".otherAddress").toggle(this.checked);
    });
  });