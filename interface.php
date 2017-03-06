<?php

interface Logger{}

class LogToFile{

	public function execute($message){

		var_dump('log the message to a file : '.$message);
	}

}

class LogToDatabase{

	public function execute($message){

		var_dump('log the message to a database : '.$message);
	}

}


class UserController{

	protected $logger;

	public function __construct(LogToFile $logger){
		$this->logger = $logger;
	}

	public function show(){
		$user = "Sabbir Rahman";
		$this->logger->execute($user);
	}

}



(new UserController(new LogToFile))->show();
