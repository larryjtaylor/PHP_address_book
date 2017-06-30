<?php
    class Jobs
    {

        private $name;
        private $phone;
        private $street;
        private $location;

        function __construct($name, $phone, $street, $location)
        {
            $this->name = $name;
            $this->phone = $phone;
            $this->street = $street;
            $this->location = $location;
        }

        function setName($name)
        {
            $this->name = (string)$name;
        }

        function getName()
        {
            return $this->name;
        }

        function setPhone($phone)
        {
            $this->phone = (string)$phone;
        }

        function getPhone()
        {
            return $this->phone;
        }

        function setStreet($street)
        {
            $this->street = (string)$street;
        }

        function getStreet()
        {
            return $this->street;
        }

        function setLocation($location)
        {
            $this->location = (string)$location;
        }

        function getLocation()
        {
            return $this->location;
        }


        function save()
        {
            array_push($_SESSION['list_of_contacts'], $this);
        }
        static function getAll()
        {
            return $_SESSION['list_of_contacts'];
        }
        static function deleteAll()
        {
            $_SESSION['list_of_contacts'] = array();
        }
    }
?>
