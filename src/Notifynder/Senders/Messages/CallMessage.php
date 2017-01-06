<?php

namespace Astrotomic\Notifynder\Senders\Messages;

class CallMessage
{
    protected $originator;
    protected $recipient;
    protected $body;
    protected $language;
    protected $gender;

    public function from($originator)
    {
        $this->setOriginator($originator);
        return $this;
    }

    public function to($recipient)
    {
        $this->setRecipient($recipient);
        return $this;
    }

    public function text($body)
    {
        $this->setBody($body);
        return $this;
    }

    public function lang($language)
    {
        $this->setLanguage($language);
        return $this;
    }

    public function gender($gender)
    {
        $this->setGender($gender);
        return $this;
    }

    public function setOriginator($originator)
    {
        $this->originator = $originator;
    }

    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getOriginator()
    {
        return $this->originator;
    }

    public function getRecipient()
    {
        return $this->recipient;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function getGender()
    {
        return $this->gender;
    }
}
