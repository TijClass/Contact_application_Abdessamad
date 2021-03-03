$(document).ready(function() {
    $("[id$=loginemail]").on("input", function () {
      $("[id$=test]").hide();
    });
});

var $rows = $("#table tr");
$("#search").keyup(function () {
  var val = $.trim($(this).val()).replace(/ +/g, " ").toLowerCase();

  $rows
    .show()
    .filter(function () {
      var text = $(this).text().replace(/\s+/g, " ").toLowerCase();
      return !~text.indexOf(val);
    })
    .hide();
});