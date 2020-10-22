<?php
    class ArrayWorker{
        public $arr = [30];

        private function fill(){
            for ($i=0; $i<30; $i++)
              $this->$arr[$i] = rand(1,100); 
            return $this->$arr;
        }

        private function reindex(){
          $maxIndex = array_search(max($this->$arr), $this->$arr);
          $minIndex = array_search(min($this->$arr), $this->$arr);
          $temp = $this->$arr[$maxIndex];
          $this->$arr[$maxIndex] = $this->$arr[$minIndex];
          $this->$arr[$minIndex] = $temp;
        }

        public function dump(){
           echo $this->$arr[array_search(max($this->$arr), $this->$arr)] + $this->$arr[array_search(min($this->$arr), $this->$arr)];
        }

        function __construct()
        {
           $this->fill();
           $this->reindex();
        }
    }
?>