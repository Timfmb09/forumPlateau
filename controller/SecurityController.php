<?php

    namespace Controller;

    use App\Session;
    use App\AbstractController;
    use App\ControllerInterface;
    use Model\Managers\UserManager;
    use Model\Managers\TopicManager;
    use Model\Managers\PostManager;
    use Model\Managers\CategoryManager;
    
    class SecurityController extends AbstractController implements ControllerInterface{

        public function index(){}


        //Add an user
        public function addUser($iduser){
            $userManager = new UserManager();
            $nickname = filter_input(INPUT_POST, "nickname", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, "nickname", FILTER_SANITIZE_EMAIL);
            $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            
            //Hashage du mot de passe
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            //Add in BDD
                $userManager->add(["nickname"=>$nickname, "email"=>$email, "password"=>$passwordHash]);
        

            return ["view" => VIEW_DIR."forum/home.php"];

        }

        //Connexion
        public function login($iduser){
            $userManager = new UserManager();
            $email = filter_input(INPUT_POST, "nickname", FILTER_SANITIZE_EMAIL);
            $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            
            if 
            






            return ["view" => VIEW_DIR."view/security/login.php"];

        }









        
    }