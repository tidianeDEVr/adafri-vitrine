<?php

namespace ism\controllers;
use ism\lib\Role;
use ism\lib\Request;
use ism\lib\Session;
use ism\lib\Response;
use ism\models\UtilisateurModel;
use ism\lib\AbstractController;
use ism\lib\DataBase;
use ism\models\EtudiantModel;

/**
 * Undocumented class
 */
class SecurityController extends AbstractController{

public function login(Request $request){
    if($request->isPost()){
        $data= $request->getBody();
    if(!$this->validator->estVide($data["login"], "login")){
        $this->validator->estMail($data["login"], "login");
    }
    $this->validator->estVide($data["password"], "password");
    if($this->validator->formValide()){
        // login et mot de passe correct
        $model= new UtilisateurModel();
        $user = $model->selectUserByLogin($data["login"] );
        if(empty($user)){
            $this->validator->setErrors("error_login","Login ou mot de passe incorrect");
            Session::setSession("array_error",$this->validator->getErrors());
            Response::redirectUrl("security/login");
        }else{
            if($data["password"]==$user["password"]){
                Session::setSession("user_connect",$user);     
                if($user["role"]=="ROLE_ADMIN"){
                    Response::redirectUrl("security/showuserscards");
                }
                if($user["role"]=="ROLE_USER"){
                    Response::redirectUrl("security/showuserscards");
                }
                if($user["role"]=="ROLE_DEMANDEUR_EMPLOI"){
                    Response::redirectUrl("security/showuserscards");
                }
                elseif($user["role"]=="ROLE_EMPLOYEUR"){
                    Response::redirectUrl("etudiant/showetudiantscards");
                }
            }else{
                $this->validator->setErrors("error_login","login ou mot de passe incorrect");
                Session::setSession("array_error",$this->validator->getErrors());
                Response::redirectUrl("security/login");
            }
        }
    }else {
        Session::SetSession("array_error",$this->validator->getErrors());
        Response::redirectUrl("security/login");
        }
    }
    $this->render("security/login");
}

public function register(Request $request){
    if($request->isPost()){
        $model= new UtilisateurModel();
        $data=$request->getBody();
        $this->validator->estVide($data["nom"], "nom");
        $this->validator->estVide($data["prenom"], "prenom");
        if(!$this->validator->estVide($data["login"], "login")){
            if($this->validator->estMail($data["login"], "login")){
                if($model->loginExiste($data["login"])){
                    $this->validator->setErrors("login","ce login existe deja dans le systeme");
                }
            }
        }
    
        $this->validator->estVide($data["password"], "password");
        if($data["password"]!=$data["confirm_password"]){
            $this->validator->setErrors("confirm_password","les mots de passe ne correspondent pas");
            
        }
       if($this->validator->formValide()){
            $data["avatar"]="";
            $array_ext_img=array("png", "jpeg", "jpg");
            $array_avatar = explode(".", $_FILES["avatar"]["name"]);
            $data["nom_complet"] = $data["nom"]." ".$data["prenom"];
            if(!in_array(end($array_avatar), $array_ext_img)){
                $data["avatar"]="default.png";
            }else{
                $filename = $_FILES["avatar"]["name"];
                $tempname = $_FILES["avatar"]["tmp_name"];   
                $folder = "media/users_avatars/".$filename;
                move_uploaded_file($tempname, $folder);
                $data["avatar"] = $filename;
            }
            unset($data["nom"]);
            unset($data["prenom"]);
            unset($data["confirm_password"]);
            $model->insert($data);
            Response::redirectUrl("security/login");
        }else{
            Session::SetSession("array_error",$this->validator->getErrors());
            Session::SetSession("array_post",$data);
            Response::redirectUrl("security/register");  
        }
    }
    $this->render("security/register");
}

public function adminRegister(Request $request){
    if(!Role::estAdmin()){
        Response::redirectUrl("security/logout");
    }
    if($request->isPost()){
        $model= new UtilisateurModel();
        $data=$request->getBody();
        $this->validator->estVide($data["nom"], "nom");
        $this->validator->estVide($data["prenom"], "prenom");
        if(!$this->validator->estVide($data["login"], "login")){
            if($this->validator->estMail($data["login"], "login")){
                if($model->loginExiste($data["login"])){
                    $this->validator->setErrors("login","ce login existe deja dans le systeme");
                }
            }
        }
    
        $this->validator->estVide($data["password"], "password");
        if($data["password"]!=$data["confirm_password"]){
            $this->validator->setErrors("confirm_password","les mots de passe ne correspondent pas");
            
        }
       if($this->validator->formValide()){
            $data["avatar"]="";
            $array_ext_img=array("png", "jpeg", "jpg");
            $array_avatar = explode(".", $_FILES["avatar"]["name"]);
            $data["nom_complet"] = $data["nom"]." ".$data["prenom"];
            if(!in_array(end($array_avatar), $array_ext_img)){
                $data["avatar"]="default.png";
            }else{
                $filename = $_FILES["avatar"]["name"];
                $tempname = $_FILES["avatar"]["tmp_name"];   
                $folder = "media/users_avatars/".$filename;
                move_uploaded_file($tempname, $folder);
                $data["avatar"] = $filename;
            }
            unset($data["nom"]);
            unset($data["prenom"]);
            unset($data["confirm_password"]);
            $model->insert($data);
            Response::redirectUrl("security/login");
        }else{
            Session::SetSession("array_error",$this->validator->getErrors());
            Session::SetSession("array_post",$data);
            Response::redirectUrl("security/adminregister");  
        }
    }
    $this->render("security/adminregister");
}

public function logout(){
    Session::destroySession();
    Response::redirectUrl("security/login");
}

public function showUser(){
    if(!Role::estAdmin())Response::redirectUrl("security/logout");
    $model=new UtilisateurModel();
    $data=$model->selectAll();
    //dd($data);
    $this->render("security/show.user",["users"=> $data]);

}

public function modifyAccount(Request $request){
    if(!Role::estConnect())Response::redirectUrl("security/login");
    $model=new UtilisateurModel();
    $user=$model->selectUserByLogin($_SESSION["user_connect"]["login"]);
    if($request->isPost()){
        $model= new UtilisateurModel();
        $data=$request->getBody();
        if($data["password"]!=$_SESSION["user_connect"]["password"]){
            $this->validator->setErrors("password","Le mot de passe est incorrecte !");
        }
        if($data["new_password"]!=$data["confirm_new_password"]){
            $this->validator->setErrors("confirm_password","Les mots de passe ne correspondent pas !");
        }
       if($this->validator->formValide()){
            $array_ext_img=array("png", "jpeg", "jpg");
            $array_avatar = explode(".", $_FILES["avatar"]["name"]);
            if(!in_array(end($array_avatar), $array_ext_img)){
                $data["avatar"]="default.png";
            }else{
                $filename = $_FILES["avatar"]["name"];
                $tempname = $_FILES["avatar"]["tmp_name"];   
                $folder = "media/users_avatars/".$filename;
                move_uploaded_file($tempname, $folder);
                $data["avatar"] = $filename;
            }
            unset($data["password"]);
            unset($data["confirm_new_password"]);
            $user["password"]=$data["new_password"];
            $_SESSION["user_connect"]["password"] = $data["new_password"]; 
            $pwd = $data["new_password"];
            $login = $_SESSION["user_connect"]["login"];
            $sql = "UPDATE `utilisateur` SET `password` = '$pwd' WHERE `utilisateur`.`login` = '$login';";
            $model->modifiercompte($user, $sql);
            Response::redirectUrl("security/modifyaccount");
        }else{
            Session::SetSession("array_error",$this->validator->getErrors());
            Session::SetSession("array_post",$data);
            Response::redirectUrl("security/modifyaccount");  
        }
    }
    $this->render("security/modifyaccount",["user"=> $user]);
    }
}