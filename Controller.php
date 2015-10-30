<?php 
class Controller{
    public $templates;

    public function __construct()
    {
        $this->templates = new \League\Plates\Engine('templates');
// Load URI extension using global variable
$this->templates->loadExtension(new \League\Plates\Extension\URI($_SERVER['PATH_INFO']));

    }

public function index(){	
echo $this->templates->render('index', [
'name' => User::find(1)->email
]);
}
public function about(){
echo $this->templates->render('about');
}
public function contacts(){
echo $this->templates->render('contacts', ['name' => 'Jonathan']);
}
public function notFound(){
echo $this->templates->render('404');
}

}
