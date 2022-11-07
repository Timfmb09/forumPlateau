<?php
    namespace Model\Entities;

    use App\Entity;

    final class Category extends Entity{

        private $id;
        private $categoryname;
    
        public function __construct($data){         
            $this->hydrate($data);        
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
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of categoryname
         */ 
        public function getCategoryname()
        {
                return $this->categoryname;
        }

        /**
         * Set the value of categoryname
         *
         * @return  self
         */ 
        public function setCategoryname($categoryname)
        {
                $this->categoryname = $categoryname;

                return $this;
        }

        
    }
