<?php
    class RepeatCounter
    {
        function countRepeats($input_text, $input_word)
        {
            $wordCount = 0;
            $input_word = strtolower($input_word);
            $input_array = explode(" ", strtolower($input_text));
            $common_punctuation = array('.', ',', '?', '!', ';', ':', '-', '/', '"', "'");

            foreach ($input_array as $word) {
                foreach ($common_punctuation as $mark) {
                    if (strpos($word, $mark) !== false) {
                        $word = substr_replace($word, '', strpos($word, $mark), 1);
                    }
                }
                if ($word == $input_word) {
                    $wordCount += 1;
                }
            }

            return $wordCount;
        }
    }
?>
