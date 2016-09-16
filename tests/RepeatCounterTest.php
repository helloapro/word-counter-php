<?php
    require_once 'src/RepeatCounter.php';

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_countRepeats_return()
        {
            $test_RepeatCounter = new RepeatCounter;
            $input_text = 'a';
            $input_word = 'b';

            $result = $test_RepeatCounter->countRepeats($input_text, $input_word);

            $this->assertEquals(0, $result);
        }

        function test_countRepeats_match()
        {
            $test_RepeatCounter = new RepeatCounter;
            $input_text = 'a';
            $input_word = 'a';

            $result = $test_RepeatCounter->countRepeats($input_text, $input_word);

            $this->assertEquals(1, $result);
        }

        function test_countRepeats_find()
        {
            $test_RepeatCounter = new RepeatCounter;
            $input_text = 'the cat is cute';
            $input_word = 'cat';

            $result = $test_RepeatCounter->countRepeats($input_text, $input_word);

            $this->assertEquals(1, $result);
        }

        function test_countRepeats_multiples()
        {
            $test_RepeatCounter = new RepeatCounter;
            $input_text = 'the cat plays with the ball';
            $input_word = 'the';

            $result = $test_RepeatCounter->countRepeats($input_text, $input_word);

            $this->assertEquals(2, $result);
        }

        function test_countRepeats_case()
        {
            $test_RepeatCounter = new RepeatCounter;
            $input_text = 'The cat plays with the ball';
            $input_word = 'the';

            $result = $test_RepeatCounter->countRepeats($input_text, $input_word);

            $this->assertEquals(2, $result);
        }
    }
?>
