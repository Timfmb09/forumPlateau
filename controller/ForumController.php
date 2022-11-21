<?php
// exemple pré conçu pour savoir comment le controller interagit avec la vue (ici "listTopics.php")
    namespace Controller;

    use App\Session;
    use App\AbstractController;
    use App\ControllerInterface;
    use Model\Managers\CategoryManager;
    use Model\Managers\TopicManager;
    use Model\Managers\PostManager;
    use Model\Managers\UserManager;

    
    class ForumController extends AbstractController implements ControllerInterface{

        public function index(){

            $topicManager = new TopicManager();
               
                return [
                    "view" => VIEW_DIR."forum/listTopics.php",
                    // la méthode "findAll" est une méthode générique qui provient de l'AbstractController (dont hérite chaque controller de l'application)
                    "data" => [
                        "topics" => $topicManager->findAll(["creationDate", "ASC"])
                    ]
                ];
        }   
            
        // Affiche la liste des catégories      
        public function listCategories(){

            $categoryManager = new CategoryManager();

            return [
                "view" => VIEW_DIR."forum/listCategories.php",
                // la méthode "findAll" est une méthode générique qui provient de l'AbstractController (dont hérite chaque controller de l'application)
                "data" => [
                    "categories" => $categoryManager->findAll(["categoryName" , "ASC"])
                ]
            ];
        }
                 

        // Affiche la liste des topics/sujets par catégorie  
        public function findTopicsByCategory($id) {
            $topicManager = new TopicManager();
            // $categoryManager = new CategoryManager();
            $topics = $topicManager->findTopicsByCategory($id);

            return [
                "view" => VIEW_DIR."forum/listTopics.php",
                // la méthode "findAll" est une méthode générique qui provient de l'AbstractController (dont hérite chaque controller de l'application)
                "data" => [
                    "topics" => $topics,
                    "id_category" =>$id

                    // "category" => $categoryManager->findOneById($id)
                ]
            ];
        
        }

        // Affiche la liste des posts/messages par topic/sujet  
        public function findPostsByTopic($id) {
            $postManager = new PostManager();
            $topicManager = new TopicManager();
            $posts = $postManager->findPostsByTopic($id);
            
            return [
                "view" => VIEW_DIR."forum/listPosts.php",
                // la méthode "findAll" est une méthode générique qui provient de l'AbstractController (dont hérite chaque controller de l'application)
                "data" => [
                    "posts" => $posts,
                    "topic" => $topicManager->findOneById($id)
                ]
            ];

        }

        //Ajout d'un post/message
        public function addPost($idtopic){

            $postManager = new PostManager();
            $message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $userid = 10;

            if($message) {
                
                $postManager->add(["message"=>$message, "user_id" => $userid, "topic_id" => $idtopic]);
                header("Location: index.php?ctrl=forum&action=findPostsByTopic&id=$idtopic");
            }
        }
        
        //Ajout d'un topic/sujet
        public function addTopic($idcategory){

            $topicManager = new TopicManager();
            $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $userid = 11;

            if($title) {
                
                $topicManager->add(["title"=>$title, "user_id" => $userid, "category_id" => $idcategory]);
                header("Location: index.php?ctrl=forum&action=findTopicsByCategory&id=$idcategory");
            }
        }

        public function listUsers(){

            $userManager = new UserManager();

            return [
                "view" => VIEW_DIR."forum/listUsers.php",
                // la méthode "findAll" est une méthode générique qui provient de l'AbstractController (dont hérite chaque controller de l'application)
                "data" => [
                    "users" => $userManager->findAll(["nickname" , "ASC"])
                ]
                ];

        }
        
        // Affiche la liste des posts/messages par user  
        public function findPostsByUser($id) {
            $postManager = new PostManager();
            $userManager = new UserManager();

            return [
                "view" => VIEW_DIR."forum/detailsUsers.php",
                // la méthode "findAll" est une méthode générique qui provient de l'AbstractController (dont hérite chaque controller de l'application)
                "data" => [
                    "posts" => $postManager->findPostsByUser($id),
                    "user" => $userManager->findOneById($id)
                ]
            ];

        }

        public function lockTopic(){

            $topicManager = new TopicManager();

            return [
                "view" => VIEW_DIR."forum/listTopics.php",
                // la méthode "findAll" est une méthode générique qui provient de l'AbstractController (dont hérite chaque controller de l'application)
                "data" => [
                    "users" => $topicManager->findAll(["title" , "ASC"])
                ]
            ];
        }


                        // //Ajout d'une categorie
        // public function addCategory($idcategory){

        //     $categoryManager = new CategoryManager();
        //     $categoryName = filter_input(INPUT_POST, "categoryName", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        
        //     if($categoryName) {
                
        //         $categoryManager->add(["categoryName"=>$categoryName, "category_id=>$idcategory"]);
        //         header("Location: index.php?ctrl=forum&action=ListCategories&id=$idcategory");
        //     }
        // }


    }
