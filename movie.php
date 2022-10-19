<?php
    class Movies{
        private $name;
        private $isan;
        private $year;
        private $points;
        private $movies = [];

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

        public function getMovies(){
            return $this->movies;
        }

        public function toString(){
            return "'" . $this->name . "' from " . $this->year;
        }

        public function addMovie($code, $p1){
            $this->movies[$code] = $p1;
        }

        public function showMovies(){
            foreach($this->movies as $key => $value){
                echo $value->getName();
            }
        }
    }
    $p1 = new Movies("General", "general", 2022, 5);
?>