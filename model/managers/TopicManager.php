<?php
    namespace Model\Managers;
    
    use App\Manager;
    use App\DAO;

    class TopicManager extends Manager{

        protected $className = "Model\Entities\Topic";
        protected $tableName = "topic";

        public function __construct(){
            parent::connect();
        }

        public function findTopicsByCategory($id) {
            $sql = "SELECT *
                    FROM ".$this->tableName." t
                    WHERE t.category_id = :id
                    ORDER BY creationDate DESC";

            // var_dump($sql); die;

            return $this->getMultipleResults(
                DAO::select($sql, ['id' => $id]),
                $this->className
            );
        }


    }