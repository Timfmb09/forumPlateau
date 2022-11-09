<?php
// exemple pré conçu pour savoir comment le controller interagit avec la vue (ici "listTopics.php")
    namespace Controller;

    use App\Session;
    use App\AbstractController;
    use App\ControllerInterface;
    use Model\Managers\CategoryManager;
    use Model\Managers\TopicManager;
    use Model\Managers\PostManager;

    
    class ForumController extends AbstractController implements ControllerInterface{

        public function index(){}   
            
              
        public function listCategorys(){

            $categoryManager = new CategoryManager();

            return [
                "view" => VIEW_DIR."forum/listCategorys.php",
                // la méthode "findAll" est une méthode générique qui provient de l'AbstractController (dont hérite chaque controller de l'application)
                "data" => [
                    "categorys" => $categoryManager->findAll(["categoryName" , "ASC"])
                ]
            ];
        }
        
         
        //    $topicManager = new TopicManager();
        //    $topics = $topicManagaer->findAllTopics(['creationDate', 'DESC']);

        //     return [
        //         "view" => VIEW_DIR."forum/listTopics.php",
        //         // la méthode "findAll" est une méthode générique qui provient de l'AbstractController (dont hérite chaque controller de l'application)
        //         "data" => [
        //             "topics" => $topicManager->findAll(["creationDate", "ASC"])
        //         ]
        //     ];
        
        // public function listPosts($id){

        //     $postManager = new PostManager();
 
        //      return [
        //          "view" => VIEW_DIR."forum/listPosts.php",
        //          // la méthode "findAll" est une méthode générique qui provient de l'AbstractController (dont hérite chaque controller de l'application)
        //          "data" => [
        //              "posts" => $postManager->findAll(["message"])
        //          ]
        //      ];
         
        //  }

        public function findTopicsByCategory($id) {
            $topicManager = new TopicManager();
            $topics = $topicManager->findTopicsByCategory($id);

            return [
                "view" => VIEW_DIR."forum/listTopics.php",
                // la méthode "findAll" est une méthode générique qui provient de l'AbstractController (dont hérite chaque controller de l'application)
                "data" => [
                    "topics" => $topics
                ]
            ];
        
        }

        public function findPostsByTopic($id) {
            $postManager = new PostManager();
            $posts = $postManager->findPostsByTopic($id);

            return [
                "view" => VIEW_DIR."forum/listPosts.php",
                // la méthode "findAll" est une méthode générique qui provient de l'AbstractController (dont hérite chaque controller de l'application)
                "data" => [
                    "posts" => $posts
                ]
            ];

        }


    }
