<?php
namespace ism\lib;

class Role{
    public static function estConnect():bool{
        return isset($_SESSION["user_connect"]);
    }
    public static function estAdmin():bool{
        return self::estConnect() && $_SESSION["user_connect"]["role"] == "ROLE_ADMIN";
    }
    public static function estModerateur():bool{
        return self::estConnect() && $_SESSION["user_connect"]["role"] == "ROLE_ETUDIANT";
    }
    public static function estClient():bool{
        return self::estConnect() && $_SESSION["user_connect"]["role"] == "ROLE_RESPONSABLE_PEDAGOGIQUE";
    }
}