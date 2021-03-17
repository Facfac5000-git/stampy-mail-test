<?php

class UserController{


    public function __construct(){
        require_once "assets/models/UserModel.php";
    }

    public function login(){
        require_once "assets/views/authenticate/login.php";
    }

    public function authenticate(){
         
        $username = $_POST['user'];
        $pass = $_POST['pass'];
                
        $user = new UserModel();
        $user_data = $user->login($username);
       
        if($user_data && password_verify($pass, $user_data['password'])){
            $_SESSION['username'] = $user_data['username'];
            $_SESSION['name'] = $user_data['name'];
            $_SESSION['email'] = $user_data['email'];
            $this->index();
        }else{
            $data['message'] = 'El usuario, email o contraseña ingresados no son correctos.'; 
            require_once "assets/views/authenticate/login.php";
        }
    }

    public function logout(){
        session_destroy();
        $this->login();
    }

    public function index(){
        
        $user = new UserModel();
        $data['users'] = $user->all();
        require_once "assets/views/users/index.php";
    }

    public function create(){
        require_once "assets/views/users/create.php";
    }

    public function store(){

        $username = $_POST['username'];
        $email = $_POST['email'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $password_confirm = $_POST['password_confirm'];

        if($password == $password_confirm){
            $hash_password = password_hash($password, PASSWORD_BCRYPT);

            $user = new UserModel();
            $result = $user->store($username, $email, $name, $hash_password);
    
            if($result == 1){
                $this->index();    
            }else{
                $data['message'] = 'El username o email ya se encuentran registrados en la base de datos.'; 
                require_once "assets/views/users/create.php";
            }    
        }else {
            $data['message'] = 'Las contraseñas ingresadas no coinciden entre sí.'; 
            require_once "assets/views/users/create.php";
        }



    }

    public function edit(){

        $user_id = $_GET['id'];
        $user = new UserModel();

        $data['user'] = $user->find($user_id);        
        require_once "assets/views/users/edit.php";

    }

    public function update(){

        $user_id = $_POST['user_id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $name = $_POST['name'];

        $user = new UserModel();
        $result = $user->update($user_id, $username, $email, $name);

        if($result == 1){
            $this->index();    
        }else{
            $data['message'] = 'El username o email a actualizar ya se encuentra en la base de datos.';
            $data['user'] = $user->find($user_id);
            require_once "assets/views/users/edit.php";
        }   
    }


    public function destroy(){

        $user_id = $_GET['id'];
        
        $user = new UserModel();
        $user->destroy($user_id);

        $data['message'] = '¡Usuario eliminado con éxito!'; 
        $this->index();
    }

}


?>