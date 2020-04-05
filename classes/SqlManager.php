<?php
    require_once 'Connection.php';
    class SqlManager extends Connection {
        private $where, $sql_query;

        // Função construtora - Deverá ser passado como parâmetro o nome do banco.
        public function __construct($dbname){
            parent::__construct($dbname);
        }
        
        /** Função SelectQuery
         * Parâmetros da função:
         *  $column -  A(s) coluna(s) que será(ão) selecionada(s), 
         *  $table  - nome da(s) tabela(s) a ser(em) selecionada(s).
         *  $where - condição para a seleção.
         *  Obs: Se não houver condição deverá ser colocado o número 1.
        */
        
        public function SelectQuery($column, $table, $where){
            $this->setSql_query($this->getPdo()->prepare('SELECT '.$column.' FROM '.$table.' WHERE '.$where));
            $this->sql_query->execute();
        }

        /* Função FetchOptions
        *   Será utilizado para trazer as opções dentro de uma tag select.
        *   Será necessário passar como parâmetro o nome do campo de onde virá as informações.
        *   A chave primária precisa estar nomeada como id.
        */
        
        public function fetchOptions($data){ 
            $fetch = $this->getSql_query()->fetchAll();
            foreach ($fetch as $value){
                echo '<option value='.$value['id'].'>'.$value[$data].'</option>';
            }
        }

        /*  GETTERS E SETTERS*/

        public function getSql_query(){
            return $this->sql_query; 
        }

        public function getWhere(){
            return $this->where;
        }

        public function setSql_query($sql_query){ 
            $this->sql_query = $sql_query;
        }

        public function setWhere($where){ 
            $this->where = $where; 
        }
    }