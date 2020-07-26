<?php

require_once "../app/models/Word.php";


class Home extends Controller {
    
    public function index () {
        
       //$word = new Word;
       $word = $this->model("Word");

	    $data = $word->row("SELECT * FROM word");

		$this->view("home/index", $data);
    }

}