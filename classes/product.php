<?php
    /* creo la classe e il construct */
    require_once __DIR__ . "/Category.php";
    class product {
        private $id;
        protected $name;
        protected $category;
        protected $available = false;
        protected $quantity = 0;
        protected $img = "https://picsum.photos/300";


        function __construct($_name,Category $_category,$_available=null,$_quantity=null,$_img=null)
                
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
            if (is_null($img)) {
                return;
            
            }
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
            if (is_null($quantity)) {
                return;
            
            }
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
        {
            if (is_null($available)) {
                return;
            
            }
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
    
    