$(document).ready(function() {
    $("[id$=loginemail]").on("input", function () {
      $("[id$=test]").hide();
    });
});