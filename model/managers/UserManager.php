<?php
    namespace Model\Managers;
    
    use App\Manager;
    use App\DAO;

    class UserManager extends Manager{

        protected $className = "Model\Entities\User";
        protected $tableName = "user";


        public function __construct(){
            parent::connect();
        }

        public function findOneByUser($nickname) {
            $sql = "SELECT *
                    FROM ".$this->tableName." u
                    WHERE u.nickname = :nickname";

            // var_dump($sql); die;

            return $this->getOneOrNullResult(
                DAO::select($sql, ['nickname' => $nickname], false),
                $this->className
            );
        }

        public function findOneByEmail($email) {
            $sql = "SELECT *
                    FROM ".$this->tableName." u
                    WHERE u.email= :email";

            // var_dump($sql); die;

            return $this->getOneOrNullResult(
                DAO::select($sql, ['email' => $email], false),
                $this->className
            );
        }


    }