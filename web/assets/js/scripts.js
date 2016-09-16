$(function() {
    var wordArray = $('#text').text().split(' ');
    var searchTerm = $('#word').text();

    $.each(wordArray, function(i, word) {
        if (word.toLowerCase() == searchTerm.toLowerCase()) {
            wordArray[i] = '<strong>' + word + '</strong>';
        }
    });

    var newText = wordArray.join(' ');
    $('#text').html(newText);
});
