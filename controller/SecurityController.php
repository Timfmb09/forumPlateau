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




        //Creation of an user
        // public function addUser($iduser){
        //     $userManager = new UserManager();
        //     $post = array(); //contient les donnéees du formulaire 
        //     $errors = array(); //contient les erreurs s'il y a 
        //     $showErrors = false; // affichage des erreurs
        //     $sucess = false; // affiche quand cela fonctionne
        //     $nickname = filter_input(INPUT_POST, "nickname", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        //     $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        //     $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        //     //Hashage du mot de passe
        //     // $password = password_hash($password['password'], PASSWORD_DEFAULT);
        //     //Add in BDD
        //     // $userManager->add(["nickname"=>$nickname, "email"=>$email, "password"=>$password, "user_id" => $iduser]);
            
        //     if (!empty($_POST)) {
        //         foreach ($_POST as $key => $value) { // Nettoyage des données
        //             $post[$key] = trim(strip_tags($value)); // récupération du _POST dans un tableau
        //         }
        //     if(strlen($post['nickname']) < 2 || strlen($post['nickname']) > 50){ // on défini les propriétés de 'nickname'
        //       $errors[] = '<div class="alert alert-danger" role="alert">Votre pseudo doit comporter entre 2 et 50 caractères</div>';
        //         }
                 
        //     if(!isset($post['password']) && !empty($post['password'])) {
        //       $errors[] = '<div class="alert alert-danger" role="alert">Votre mot de passe n\'est pas valide</div>';
        //       }
              
        //     if(count($errors) > 0){ // On compte les erreurs, si il y en as (supérieur a 0), on passera la variable $showErrors à true.
        //             $showErrors = true; // valeur booleen // permettra d'afficher nos erreurs s'il y en a
        //             $nickname = $post['nickname'];
        //             $password = $post['password'];
        //     }

        //     else {
        //         // On sécurise notre password en le hashant
        //          // IMPORTANT : On ne stocke jamais de mot de passe en clair en pdo
        //         $password = password_hash($post['password'], PASSWORD_DEFAULT);
        //     }
      
        //     if($res->execute()){
        //         $success = true; // Pour afficher le message de réussite si tout est bon
        //     }
        //     else {
        //         die(var_dump($res->errorInfo()));
        //         }
        //     }
            
        //     return [
        //         "view" => VIEW_DIR."view/security/register.php"
        //            ];
                       

        // }

        // //Connexion
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
            
            // return ["view" => VIEW_DIR."security/login.php"];

        }









        
    }