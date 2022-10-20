<?php
    class Movie{
        private $name;
        private $isan;
        private $year;
        private $points;

        public function __construct($name, $isan, $year, $points){
            $this->name = $name;
            $this->isan = $isan;
            $this->year = $year;
            $this->points = $points;
        }

        public function getName(){
            return $this->name;
        }

        public function getIsan(){
            return $this->isan;
        }

        public function getYear(){
            return $this->year;
        }

        public function getPoints(){
            return $this->points;
        }

        public function __toString(){
            return  $this->name . "-" . $this->isan . "-" . $this->year . "-" . $this->points;   
        }
    }

    class Movies {

        private $movies = [];

        public function getMovies(){
            return count($this->movies);
        }

        public function addMovie($p1){
            if(($p1->getName() == "") && ($p1->getIsan() == "")){
                echo "The name and isan fields are empty.";
            }
            else{
                foreach($this->movies as $key => $value){
                    if($key == $p1->getIsan()){
                        if($p1->getName() == ""){
                            unset($this->movies[$p1->getIsan()]);
                        }
                        else{
                            if(($p1->getName() != "") && ($p1->getIsan() == "")){
                                if(str_contains($value->getName(), $p1->getName())){
                                    echo "ok";
                                    unset($this->movies[null]);
                                }
                            }
                            else{
                                $this->movies[$p1->getIsan()] = $p1;
                            }
                        }
                    }
                }
            }
        }

        public function compareMovie($movie){
            
        }

        public function returnMovie(){
            $total = "";
            $str = "hello /";
            $total = $total . $str;
            return $total;
        }

        //Simple metodo para comprobar si se guardan los valores en el array movies.
        public function showMovies(){
            $str = "";
            for($i = 0; $i < count($this->movies); $i++){
                $str .= $this->movies[$i];
            }
            return $str;
        }
    }
?>