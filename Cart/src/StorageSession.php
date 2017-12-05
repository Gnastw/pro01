<?php namespace Fruit;

class StorageSession implements iStorage
{

    protected $sessionName;

    public function __construct($sessionName = 'product')
    {
        session_start();

        if (!isset($_SESSION[$sessionName])) {
            $_SESSION[$sessionName] = [];
        }

        $this->sessionName = $sessionName;
    }

    /**
     * @param $name
     * @param $value
     */
    public function setValue(string $name, $value)
    {
        if (empty($_SESSION[$this->sessionName][$name])) $_SESSION[$this->sessionName][$name] = 0;

        $_SESSION[$this->sessionName][$name] += $value;

    }

    public function getValue(string $name)
    {
        if (!empty($_SESSION[$this->sessionName][$name])) {
            return $_SESSION[$this->sessionName][$name];
        }
    }

    /**
     * @param $name
     */
    public function restore(string $name)
    {
        if (!empty($_SESSION[$this->sessionName][$name])) {
            unset($_SESSION[$this->sessionName][$name]);
        }
    }

    /**
     * @return number
     */
    public function total()
    {
        return array_sum($_SESSION[$this->sessionName]);
    }

    /**
     * restore Cart
     */
    public function reset()
    {
        $_SESSION[$this->sessionName] = [];
    }

}
