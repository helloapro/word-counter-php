# Word Counter #

#### An application to practice BDD in PHP, September 16th, 2016

#### By Mark Lawson

## Description ##

This application is a tool that counts the frequency of a word in a given string. Users enter a string to search in and a word to look for in that string. The output is the frequency of the searched word in that string. The application is built with PHP, using the Silex framework, Twig templates, and Bootstrap for styling.

## Setup/Installation Instructions ##

* Clone the repository
* Using the command line, navigate to the project's root directory
* Install dependencies by running $ composer install
* Navigate to the /web directory and start a local server with $ php -S localhost:8000
* Open a browser and go to the address http://localhost:8000 to view the application

## Specifications

* Entering two strings will return a number
    * Example input: a & b
    * Example output: 0
    * Description: These inputs are simple unique letters to test that the default value of zero is returned.

* Entering two identical letters will return one
    * Example input: a & a
    * Example output: 1
    * Description: Matching a letter to a letter is the simplest string match. An if statement will evaluate and return 1 if they match.

* Entering a sentence and a word from the sentence will return one
    * Example input: the cat is cute & cat
    * Example output: 1
    * Description: Once the sentence is split into an array, words behave the same as letters. An if statement will evaluate if each array index is equal to the inputted word and return 1.

* Entering a sentence and a word occurring twice in the sentence will return 2
    * Example input: the cat plays with the ball & the
    * Example output: 2
    * Description: As the array is looped to find matches, a counter will be incremented to hold the total number of matches.

* It matches words regardless of case
    * Example input: The cat plays with the ball & the
    * Example output: 2
    * Description: Both strings will be completely lower-cased prior to searching to ensure all matches are found.

* It matches words regardless of punctuation
    * Example input: The cat plays with another cat. & cat
    * Example output: 2
    * Description: While looping through words, search and remove any punctuation from words prior to comparing to search term.

## Known Bugs ##

There are no known bugs at this time.

## Support and Contact Details ##

Please report any bugs or issues to mlawson3691@gmail.com.

## Languages/Technologies Used ##

* PHP
* Silex
* Twig
* Bootstrap

### License ###

*This application is licensed under the MIT license.*

Copyright (c) 2016 Mark Lawson
