<?php 
    class Movie {
        public string $title;
        public int $year;
        public array $genre;
        public string $actors;
        public string $production;
    
        public function __construct(string $title, string $year, array $genre, string $actors, string $production) {
        
            $this->title = $title;
            $this->year = $year;
            $this->genre = $genre;
            $this->actors = $actors;
            $this->production = $production;
        }
    
    
    
    }