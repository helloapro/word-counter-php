<?php
    class RepeatCounter
    {
        function countRepeats($input_text, $input_word)
        {
            $wordCount = 0;
            $input_word = strtolower($input_word);
            $input_array = explode(" ", strtolower($input_text));

            foreach ($input_array as $word) {
                if ($word == $input_word) {
                    $wordCount += 1;
                }
            }

            return $wordCount;
        }
    }
?>
