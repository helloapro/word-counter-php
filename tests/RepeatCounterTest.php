<?php
    require_once 'src/RepeatCounter.php';

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_countRepeats_return()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_text = 'a';
            $input_word = 'b';

            // Act
            $result = $test_RepeatCounter->countRepeats($input_text, $input_word);

            // Assert
            $this->assertEquals(0, $result);
        }
    }
?>
