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

        public function registerView(){
                    
            return ["view" => VIEW_DIR."security/register.php"];
        }

        public function loginView(){
            return ["view" => VIEW_DIR."security/login.php"];

        }
               

        // Creation of an user
        public function register(){
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
                    $this->redirectTo('security', 'loginView');
                } else {
                    $this->redirectTo('security', 'registerView');
                }
            }
           
        }

        //Connexion
        public function login(){
            //Lien avec le UserManager
            $userManager = new UserManager();
            //verification des valeurs
            if(isset($_POST['login'])){
                
            //filtre des données
            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL, FILTER_VALIDATE_EMAIL);
            $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                                 
            if($email && $password){
                //   var_dump("ok");die; 
                //Ici on fait le lien entre email et mot de passe
                $user = $userManager->findOneByEmail($email);
                if($user){                    
                $passwordhash = $userManager->findOneByEmail($email)->getPassword();
                //Verification du mot de passe
                if(password_verify($password, $passwordhash)){
                    //Connexion User
                   Session::setUser($user);
                   Session::addFlash('success', 'Welcome');
                   $this->redirectTo('index.php?ctrl=forum&action=home');
                } else Session::addFlash('error', 'Mot de passe incorrect');
             } else Session::addFlash('error', 'Email incorrect');
        }
                  
            return ["view" => VIEW_DIR."security/login.php"];
        }
    }
    
       
            // Logout
            public function logout(){
                if(isset($_POST['logout'])){
                    session_destroy();
                }
                
                


                return ["view" => VIEW_DIR."security/login.php"];
        
            }
        
        }            

        
    ?>