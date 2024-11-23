$("#close-menu").click(function () {
    $("#sidebar").addClass("active");
    $("#main-content").addClass("active");
    $("#hamburger-menu").show(); // Show the hamburger button
  });
  
  $("#hamburger-menu").click(function () {
    $("#sidebar").removeClass("active");
    $("#main-content").removeClass("active");
    $("#hamburger-menu").hide();
  });
  
  $(document).ready(function () {
    $("#hamburger-menu").hide(); // Hide hamburger menu on page load
  });
  