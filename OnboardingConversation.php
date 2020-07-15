<?php

use BotMan\BotMan\Messages\Conversations\Conversation;

class OnboardingConversation extends Conversation
{

    protected $firstname;

    public function askFirstname()
    {
        $this->ask('comment vous vous appelez', function($answer) {
            $firstName = $answer->getText();
            $this->say('ravis de vous connaitre '.$firstName);
        });
    }


    public function run()
    {
        $this->askFirstname();
    }
}
