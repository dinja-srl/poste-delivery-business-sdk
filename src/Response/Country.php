<?php

namespace Dinja\PosteDeliveryBusinessSDK\Response;

class Country
{
    /**
     *
     * @var string
     */
    private $iso4;

    /**
     *
     * @var string
     */
    private $iso2;

    /**
     *
     * @var boolean
     */
    private $active;

    /**
     *
     * @var string
     */
    private $name;

    /**
     *
     * @var string
     */
    private $intName;

    /**
     *
     * @var boolean
     */
    private $extraue;

    /**
     *
     * @var array
     */
    private $states;

    /**
     *
     * @var int
     */
    private $news;

    /**
     *
     * @var array
     */
    private $products;


    public function __construct($iso4, $iso2, $active, $name, $intName, $extraue, $states, $news, $products)
    {
        $this->iso4 = $iso4;
        $this->iso2 = $iso2;
        $this->active = $active;
        $this->name = $name;
        $this->intName = $intName;
        $this->extraue = $extraue;
        $this->states = $states;
        $this->news = $news;
        $this->products = $products;
    }

    /**
     * Get the value of iso4
     *
     * @return  string
     */ 
    public function getIso4()
    {
        return $this->iso4;
    }

    /**
     * Set the value of iso4
     *
     * @param  string  $iso4
     *
     * @return  self
     */ 
    public function setIso4(string $iso4)
    {
        $this->iso4 = $iso4;

        return $this;
    }

    /**
     * Get the value of iso2
     *
     * @return  string
     */ 
    public function getIso2()
    {
        return $this->iso2;
    }

    /**
     * Set the value of iso2
     *
     * @param  string  $iso2
     *
     * @return  self
     */ 
    public function setIso2(string $iso2)
    {
        $this->iso2 = $iso2;

        return $this;
    }

    /**
     * Get the value of active
     *
     * @return  boolean
     */ 
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set the value of active
     *
     * @param  boolean  $active
     *
     * @return  self
     */ 
    public function setActive(boolean $active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of intName
     *
     * @return  string
     */ 
    public function getIntName()
    {
        return $this->intName;
    }

    /**
     * Set the value of intName
     *
     * @param  string  $intName
     *
     * @return  self
     */ 
    public function setIntName(string $intName)
    {
        $this->intName = $intName;

        return $this;
    }

    /**
     * Get the value of extraue
     *
     * @return  boolean
     */ 
    public function getExtraue()
    {
        return $this->extraue;
    }

    /**
     * Set the value of extraue
     *
     * @param  boolean  $extraue
     *
     * @return  self
     */ 
    public function setExtraue(boolean $extraue)
    {
        $this->extraue = $extraue;

        return $this;
    }

    /**
     * Get the value of states
     *
     * @return  array
     */ 
    public function getStates()
    {
        return $this->states;
    }

    /**
     * Set the value of states
     *
     * @param  array  $states
     *
     * @return  self
     */ 
    public function setStates(array $states)
    {
        $this->states = $states;

        return $this;
    }

    /**
     * Get the value of news
     *
     * @return  int
     */ 
    public function getNews()
    {
        return $this->news;
    }

    /**
     * Set the value of news
     *
     * @param  int  $news
     *
     * @return  self
     */ 
    public function setNews(int $news)
    {
        $this->news = $news;

        return $this;
    }

    /**
     * Get the value of products
     *
     * @return  array
     */ 
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set the value of products
     *
     * @param  array  $products
     *
     * @return  self
     */ 
    public function setProducts(array $products)
    {
        $this->products = $products;

        return $this;
    }

}