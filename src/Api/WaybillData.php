<?php

namespace Dinja\PosteDeliveryBusinessSDK\Api;

class WaybillData
{
    /** @var array */
    private $declared;

    /** @var string */
    private $content;

    /** @var WaybillDataServices */
    private $services;

    /** @var WaybillDataContact */
    private $sender;

    /** @var WaybillDataContact */
    private $receiver;

    public function toArray()
    {
        $declaredArr = array();
        foreach($this->declared as $declaredObj) {
            array_push($declaredArr, $declaredObj->toArray());
        }
        return [
            'declared' => $declaredArr,
            'content' => $this->content,
            'services' => $this->services->toArray(),
            'sender' => $this->sender->toArray(),
            'receiver' => $this->receiver->toArray()
        ];
    }


    /**
     * Get the value of declared
     */ 
    public function getDeclared()
    {
        return $this->declared;
    }

    /**
     * Set the value of declared
     *
     * @return  self
     */ 
    public function setDeclared($declared)
    {
        $this->declared = $declared;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of services
     */ 
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Set the value of services
     *
     * @return  self
     */ 
    public function setServices($services)
    {
        $this->services = $services;

        return $this;
    }

    /**
     * Get the value of sender
     */ 
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set the value of sender
     *
     * @return  self
     */ 
    public function setSender($sender)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get the value of receiver
     */ 
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Set the value of receiver
     *
     * @return  self
     */ 
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;

        return $this;
    }

}
