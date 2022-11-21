<?php
    namespace Model\Managers;
    
    use App\Manager;
    use App\DAO;

    class PostManager extends Manager{

        protected $className = "Model\Entities\Post";
        protected $tableName = "post";

        public function __construct(){
            parent::connect();
        }

        public function findPostsByTopic($id) {

            $sql = "SELECT * 
                    FROM ".$this->tableName." p 
                    WHERE p.topic_id = :id ORDER BY datePost";
        
            return $this->getMultipleResults(
                DAO::select($sql, ['id' => $id]),
                $this->className
            );
        }
        //$data = ['username' => 'Squalli', 'password' => 'dfsyfshfbzeifbqefbq', 'email' => 'sql@gmail.com'];

        public function findPostsByUser($id) {
            $sql = "SELECT message 
                    FROM ".$this->tableName." u
                    WHERE u.user_id = :id";

            // var_dump($sql); die;

            return $this->getMultipleResults(
                DAO::select($sql, ['id' => $id]),
                $this->className
            );
        }
        
        public function delete($id) {
            $sql = "DELETE FROM ".$this->tableName."
            WHERE id_".$this->tableName." = :id
            ";

            return DAO::delete($sql, ['id' => $id]); 
        }
                   
        //     //Sinon la sanction est terrible :p
        //     if ($id != $data['mp_receveur']) erreur(ERR_WRONG_USER);
        //     $query->CloseCursor(); 

        //     //2 cas pour cette partie : on est sûr de supprimer ou alors on ne l'est pas
        //     $sur = (int) $_GET['sur'];
        //     //Pas encore certain
        //     if ($sur == 0)
        //     {
        //     echo'<p>Etes-vous certain de vouloir supprimer ce message ?<br />
        //     <a href="./messagesprives.php?action=supprimer&amp;id='.$id_mess.'&amp;sur=1">
        //     Oui</a> - <a href="./messagesprives.php">Non</a></p>';
        //     }
        //     //Certain
        //     else
        //     {
        //         $query=$db->prepare('DELETE from forum_mp WHERE mp_id = :id');
        //         $query->bindValue(':id',$id_mess,PDO::PARAM_INT);
        //         $query->execute();
        //         $query->CloseCursor(); 
        //         echo'<p>Le message a bien été supprimé.<br />
        //         Cliquez <a href="./messagesprives.php">ici</a> pour revenir à la boite
        //         de messagerie.</p>';
        //     }

             
        // }

    }
         

