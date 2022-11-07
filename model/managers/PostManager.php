<?php
    namespace Model\Managers;
    
    use App\Manager;
    use App\DAO;
    use Model\Managers\PostManager;

    class PostManager extends Manager{

        protected $className = "Model\Entities\Post";
        protected $tableName = "post";

        public function _construct(){
            parent::connect();
        }

        public function findPostsByTopic($id) {
            $sql = "SELECT *
                    FROM ".$this->tableName." p
                    WHERE p.topic_id = :id";

            // var_dump($sql); die;

            return $this->getMultipleResults(
                DAO::select($sql, ['id' => $id]),
                $this->className
            );
        }
    }