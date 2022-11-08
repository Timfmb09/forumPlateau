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

        public function index(){

            $categoryManager = new CategoryManager();

            return [
                "view" => VIEW_DIR."forum/listCategorys.php",
                // la méthode "findAll" est une méthode générique qui provient de l'AbstractController (dont hérite chaque controller de l'application)
                "data" => [
                    "categorys" => $categoryManager->findAll(["categoryname"])
                ]
            ];

         
           $topicManager = new TopicManager();

            return [
                "view" => VIEW_DIR."forum/listTopics.php",
                // la méthode "findAll" est une méthode générique qui provient de l'AbstractController (dont hérite chaque controller de l'application)
                "data" => [
                    "topics" => $topicManager->findAll(["creationdate", "ASC"])
                ]
            ];
        

            $postManager = new PostManager();
 
             return [
                 "view" => VIEW_DIR."forum/listPosts.php",
                 // la méthode "findAll" est une méthode générique qui provient de l'AbstractController (dont hérite chaque controller de l'application)
                 "data" => [
                     "posts" => $postManager->findAll(["message"])
                 ]
             ];
         
         }

        

    }
