<?php
    namespace Model\Managers;
    
    use App\Manager;
    use App\DAO;
    use App\Session;

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

        public function lockTopic($id) {

            $sql = "UPDATE topic SET locked = 1 WHERE id_topic = :id";
            DAO::update($sql, ["id" => $id]);
        
            
             $topicManager = new TopicManager();
             $topic = $topicManager->findOneById($id);

             if($_SESSION['user']) {
                $userId = $_SESSION['user']->getId();
                if($userId = $topic->getUser()->getId()) {
                    $topicManager->lockTopic($id);
                    $this->redirectTo("forum", "listTopicsByCategory", $topic->getCategory()->getId());
                }else {
                    Session::addFlash("error", "Forbidden action!");
                    $this->redirectTo("forum", "listPosts", $id);
                }
            
            }else {
                Session::addFlash("error","Forbidden action!");
                $this->redirectTo("forum", "");
            }
        }

        
        

    }