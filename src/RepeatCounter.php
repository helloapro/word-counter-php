<?php
    class RepeatCounter
    {
        function countRepeats($input_text, $input_word)
        {
            $output = 0;

            if ($input_text == $input_word) {
                $output = 1;
            }

            return $output;
        }
    }
?>
