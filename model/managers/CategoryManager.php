<?php
    namespace Model\Managers;
    
    use App\Manager;
    use App\DAO;


    class CategoryManager extends Manager{

        protected $className = "Model\Entities\Category";
        protected $tableName = "category";


        public function __construct(){
            parent::connect();
        }

        public function findPostsByCategory($id) {
            $sql = "SELECT *
                    FROM ".$this->tableName." c
                    WHERE c.user_id = :id";

            // var_dump($sql); die;

            return $this->getMultipleResults(
                DAO::select($sql, ['id' => $id]),
                $this->className
            );
        }


    }