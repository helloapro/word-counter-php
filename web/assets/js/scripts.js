$(function() {
    var wordArray = $('#text').text().split(' ');
    var searchTerm = $('#word').text();
    var commonPunctuation = ['.', ',', '?', '!', ';', ':', '-', '/', '"', "'"];
    var compareWord;

    $.each(wordArray, function(i, word) {
        compareWord = word;
        $.each(commonPunctuation, function(i, mark) {
            if (word.indexOf(mark) >= 0) {
                var str1 = word.substring(0, word.indexOf(mark));
                var str2 = word.substring(word.indexOf(mark)+1, word.length);
                compareWord = str1 + str2;
            }
        });
        if (compareWord.toLowerCase() == searchTerm.toLowerCase()) {
            wordArray[i] = '<strong>' + word + '</strong>';
        }
    });

    var newText = wordArray.join(' ');
    $('#text').html(newText);
});
