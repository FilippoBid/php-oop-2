<?php
    /* creo la classe e il construct */

    class product {
        private $id;
        protected $name;
        protected $category;
        protected $available;
        protected $quantity;
        protected $img;


        function __construct($_name,$_category,$_available,$_quantity,$_img)
                
        {
            $this->setName($_name);
            $this->setCategory($_category);
            $this->setAvailable($_available);
            $this->setQuantity($_quantity);
            $this->setImg($_img);
            
        }

        /**
         * Get the value of img
         */
        public function getImg()
        {
                return $this->img;
        }

        /**
         * Set the value of img
         */
        public function setImg($img)
        {
                $this->img = $img;

                return $this;
        }

        /**
         * Get the value of quantity
         */
        public function getQuantity()
        {
                return $this->quantity;
        }

        /**
         * Set the value of quantity
         */
        public function setQuantity($quantity)
        {
                $this->quantity = $quantity;

                return $this;
        }

        /**
         * Get the value of available
         */
        public function getAvailable()
        {
                return $this->available;
        }

        /**
         * Set the value of available
         */
        public function setAvailable($available)
                $this->available = $available;

                return $this;
        }

        /**
         * Get the value of category
         */
        public function getCategory()
        {
                return $this->category;
        }

        /**
         * Set the value of category
         */
        public function setCategory($category)
        {
                $this->category = $category;

                return $this;
        }

        /**
         * Get the value of name
         */
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         */
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of id
         */
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         */
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }
    }
    
    