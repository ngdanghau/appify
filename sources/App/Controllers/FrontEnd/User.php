<?php
class User
{
    public function index()
    {
    	$stmt = User_Model::get();
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //include View::Template('welcome');
        print_r($user);
    }

    public function show($id)
    {
    	$item = User_Model::show($id);
		return $item;
    }

    public function create($data)
    {
    	$data = (array) $data;
    	$stmt = User_Model::create($data);
        print_r($data);
    }

    public function update($data)
    {
    	//$data = (array) $data;
        $data = array(':name' => 'LifeAndLines',':id' => 1);
    	$stmt = User_Model::update($data);
        echo 'done';
    }

    public function delete($id)
    {
        $stmt = User_Model::delete($id);
        echo 'dones';
    }
    

}