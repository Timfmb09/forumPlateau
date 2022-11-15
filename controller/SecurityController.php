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

        // Creation of an user
        public function addUser(){
            $userManager = new UserManager();
            // $post = array(); //contient les donnéees du formulaire 
            // $errors = array(); //contient les erreurs s'il y a 
            // $showErrors = false; // affichage des erreurs
            // $sucess = false; // affiche quand cela fonctionne
            $nickname = filter_input(INPUT_POST, "nickname", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
            $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            // Hashage du mot de passe
            $password = password_hash($password, PASSWORD_DEFAULT);
            // Add in BDD
            // $userManager->add(["nickname"=>$nickname, "email"=>$email, "password"=>$password ]);
            
            if($nickname && $email && $password){
                $data=['nickname'=>$nickname, 'email'=>$email, 'password'=> $password];
              
                $userManager->add($data);
                $this->redirectTo('security', 'login');
            }

           
        }



        //Connexion
        public function login(){
            // $userManager = new UserManager();
            // $email = filter_input(INPUT_POST, "nickname", FILTER_SANITIZE_EMAIL);
            // $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            
            // if($email){

            //     $userManager->getPassword($password) ->getUser($email);
            //     $password = password_verify("password"=>$password);

            // if($password){


            // }    
    
            // }
            
            return ["view" => VIEW_DIR."security/login.php"];

        }

        public function register(){
       
            
            return ["view" => VIEW_DIR."security/register.php"];

        }









        
    }