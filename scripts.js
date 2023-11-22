$(document).ready(function() {
  $('#travelForm').submit(function(e) {
    e.preventDefault();
    var destination = $('#destination').val();
    var experience = $('#experience').val();

    $.ajax({
      type: 'POST',
      url: 'save_data.php',
      data: {
        destination: destination,
        experience: experience
      },
      success: function(response) {
        $('#result').html(response);
        $('#destination').val('');
        $('#experience').val('');
      }
    });
  });
});
