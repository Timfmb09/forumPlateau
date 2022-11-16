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
            $nickname = filter_input(INPUT_POST, "nickname", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
            $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $password2 = filter_input(INPUT_POST, "password2", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                 
            // Add in BDD
            // $userManager->add(["nickname"=>$nickname, "email"=>$email, "password"=>$password ]);
            if($nickname && $email && $password && $password2){
                
                //Ici on verifie s'il existe déjà ou pas.
                if(!$userManager->findOneByUser($nickname) && !$userManager->findOneByEmail($email) && ($password == $password2)){
                    // var_dump("ok");die;
                    $passwordhash = password_hash($password, PASSWORD_DEFAULT);
                    // Hashage du mot de passe
                    $data=['nickname'=>$nickname, 'email'=>$email, 'password'=> $passwordhash];
                    
                    $userManager->add($data);
                    $this->redirectTo('security', 'login');
                } else {
                    $this->redirectTo('security', 'addUser');
                }
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


        // Inscription
        public function register(){
       



            
            return ["view" => VIEW_DIR."security/register.php"];

        }









        
    }