<?php
    class Category{
        protected $name; 
        protected $icon = "fa-solid fa-xmark";

        function __construct($_name,$_icon = null){
            $this->setname($_name);
            $this->seticon($_icon);
        }
                /**
         * Get the value of name
         */
        public function getName() {
            return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */
        public function setName($name) {
            $this->name = $name;

            return $this;
        }

        /**
         * Get the value of icon
         */
        public function getIcon() {
            return $this->icon;
        }

        /**
         * Set the value of icon
         *
         * @return  self
         */
        public function setIcon($icon) {
            if (empty($icon)) {
            return;
            }

            $this->icon = $icon;

            return $this;
        }


    }


?>



