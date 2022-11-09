<?php
    namespace Model\Entities;

    use App\Entity;

    final class Category extends Entity{

        private $id;
        private $categoryName;
    
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
         * Get the value of categoryName
         */ 
        public function getcategoryName()
        {
                return $this->categoryName;
        }

        /**
         * Set the value of categoryName
         *
         * @return  self
         */ 
        public function setcategoryName($categoryName)
        {
                $this->categoryName = $categoryName;

                return $this;
        }

        
    }
