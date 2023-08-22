$(document).ready(function() {
  // Fetch service provider names from the PHP script
  $.getJSON("../php/index.php", function(data) {
    // Dynamically populate the dropdown menu
    var dropdownMenu = $("#serviceProvidersDropdown");

    // Create a container for the service provider links
    var linksContainer = $("<div>");

    // Append individual service provider links to the container
    $.each(data, function(index, serviceProvider) {
      var link = $("<a>")
        .attr("href", "index.html?provider=" + encodeURIComponent(serviceProvider))
        .addClass("dropdown-item")
        .text(serviceProvider);
      linksContainer.append(link);
    });

    // Append the container with the service provider links to the dropdown menu
    dropdownMenu.append(linksContainer);

    // Create the "View More" link and append it to the dropdown menu
    var viewMoreLink = $("<a>")
      .attr("href", "../html/serviceProvidersPage.html") // Set href to "#" for now
      .addClass("dropdown-item view-more") // Add the "view-more" class
      .text("View More");
      
    dropdownMenu.append(viewMoreLink);
  });

 
});


