<?php
class Room {
        public $number;
        public $plan;
        public $beds;
        public $type;
        function __construct($type) {
            $this->type = $type;
        }
        public function room_output(){
            return 'La stanza numero '.$this->number.' si trova al piano '.$this->plan.', la tipologia di stanza è '.$this->type.' è contiene '.$this->beds.' letti.'; 
        }
    }


    $room1 = new Room('Suite');
    $room1->beds = "2";
    $room1->plan = "3";
    $room1->number = "1";

    echo $room1->room_output();


    ?>