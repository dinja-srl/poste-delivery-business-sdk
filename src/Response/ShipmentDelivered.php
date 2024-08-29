<?php

namespace Dinja\PosteDeliveryBusinessSDK\Response;

class ShipmentDelivered
{
    /**
     *
     * @var string
     */
    private $data;

    /**
     *
     * @var string
     */
    private $statusDescription;

    /**
     *
     * @var string
     */
    private $customerStatusDescription;

    /**
     *
     * @var string
     */
    private $status;

    /**
     *
     * @var string
     */
    private $descrizioneStato;

    /**
     *
     * @var string
     */
    private $descrizioneStatoCliente;

    /**
     *
     * @var string
     */
    private $stato;

    public function __construct($data, $statusDescription, $customerStatusDescription, $status, $descrizioneStato, $descrizioneStatoCliente, $stato)
    {
        $this->data = $data;
        $this->statusDescription = $statusDescription;
        $this->customerStatusDescription = $customerStatusDescription;
        $this->status = $status;
        $this->descrizioneStato = $descrizioneStato;
        $this->descrizioneStatoCliente = $descrizioneStatoCliente;
        $this->stato = $stato;
    }

    /**
     * Get the value of data
     *
     * @return  string
     */ 
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @param  string  $data
     *
     * @return  self
     */ 
    public function setData(string $data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get the value of statusDescription
     *
     * @return  string
     */ 
    public function getStatusDescription()
    {
        return $this->statusDescription;
    }

    /**
     * Set the value of statusDescription
     *
     * @param  string  $statusDescription
     *
     * @return  self
     */ 
    public function setStatusDescription(string $statusDescription)
    {
        $this->statusDescription = $statusDescription;

        return $this;
    }

    /**
     * Get the value of customerStatusDescription
     *
     * @return  string
     */ 
    public function getCustomerStatusDescription()
    {
        return $this->customerStatusDescription;
    }

    /**
     * Set the value of customerStatusDescription
     *
     * @param  string  $customerStatusDescription
     *
     * @return  self
     */ 
    public function setCustomerStatusDescription(string $customerStatusDescription)
    {
        $this->customerStatusDescription = $customerStatusDescription;

        return $this;
    }

    /**
     * Get the value of status
     *
     * @return  string
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @param  string  $status
     *
     * @return  self
     */ 
    public function setStatus(string $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of descrizioneStato
     *
     * @return  string
     */ 
    public function getDescrizioneStato()
    {
        return $this->descrizioneStato;
    }

    /**
     * Set the value of descrizioneStato
     *
     * @param  string  $descrizioneStato
     *
     * @return  self
     */ 
    public function setDescrizioneStato(string $descrizioneStato)
    {
        $this->descrizioneStato = $descrizioneStato;

        return $this;
    }

    /**
     * Get the value of descrizioneStatoCliente
     *
     * @return  string
     */ 
    public function getDescrizioneStatoCliente()
    {
        return $this->descrizioneStatoCliente;
    }

    /**
     * Set the value of descrizioneStatoCliente
     *
     * @param  string  $descrizioneStatoCliente
     *
     * @return  self
     */ 
    public function setDescrizioneStatoCliente(string $descrizioneStatoCliente)
    {
        $this->descrizioneStatoCliente = $descrizioneStatoCliente;

        return $this;
    }

    /**
     * Get the value of stato
     *
     * @return  string
     */ 
    public function getStato()
    {
        return $this->stato;
    }

    /**
     * Set the value of stato
     *
     * @param  string  $stato
     *
     * @return  self
     */ 
    public function setStato(string $stato)
    {
        $this->stato = $stato;

        return $this;
    }

}