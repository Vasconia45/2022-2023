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

        public function addMovie($p1){
            $this->movies[] = $p1;
        }

        public function compareMovie($movie){
            echo $movie . "<br>";
            $str = "";
            for($i = 0; $i < count($this->movies); $i++){
                $str .= $this->movies[$i];
            }
            echo $str;
        }

        public function returnMovie(){

        }

        public function showMovies(){
            $str = "";
            for($i = 0; $i < count($this->movies); $i++){
                $str .= $this->movies[$i];
            }
            return $str;
        }
    }
?>