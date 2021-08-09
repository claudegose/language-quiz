<?php

class LanguageGame
{
    private array $words = [];
    public string $answer;
    public Word $randomWord;

    public function __construct()
    {

        foreach (Data::words() as $frenchTranslation => $englishTranslation) {
          $word = new Word($frenchTranslation, $englishTranslation);
          array_push($this->words, $word);
        }
    }

    public function run()
    {
        // TODO: check for option A or B

        // Option A: user visits site first time (or wants a new word)
        // TODO: select a random word for the user to translate

        // Option B: user has just submitted an answer
        // TODO: verify the answer (use the verify function in the word class) - you'll need to get the used word from the array first
        // TODO: generate a message for the user that can be shown

    }
}