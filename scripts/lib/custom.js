// put your custom js in the file

//Note: selectors should use jquery style selecting only

/**
  * Sidebar toggle
  */
$(".toggle-sidebar-btn").on('click', function () {
  $('.sidebar, .main-part').toggleClass('toggle-sidebar')
})


/* Modal part toggle */
$(".overview").on("click", function () {
  $(".modal-part").addClass("show-modal")
  $(".overview").addClass("active")
  $(".overlay").addClass("active")

})

