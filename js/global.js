$(document).ready(function() {
  $('input#btn-level').on('click', function() {
    var level = $('input#aantal_levels').val();
    $.post('./update.php', {level: level}, function(data) {
      $('span#outputLevels').text(data);
    });
  });

  $('#btn-donatie').on('click', function() {
    var donatie = $('#inputDonatie').val();
    $.post('./update.php', {donatie: donatie}, function(data) {
      $('#outputDonatie').text(data);
    });
  });


});
