<?php

// require_once '/Applications/MAMP/htdocs/dc_work_kyobashi_calendar_php/dbconnect.php'; //Mac用
require_once 'C:\MAMP\htdocs\dc_work_kyobashi_calendar_php\dbconnect.php'; //Win用

class UserLogic
{
    /**
     * ユーザーを登録する
     * @param array $userData
     * @return bool $result
     */

    public static function createUser($userData)
    {
        $result = false;
        $sql = 'INSERT INTO users(name, email,
        password) VALUES (? ,? , ?)';

        //ユーザーデータを配列に入れる
        // var_dump($userData);
        $arr = [];
        $arr[] = $userData['username'];
        $arr[] = $userData['email'];
        $arr[] = password_hash($userData['password'],PASSWORD_DEFAULT);

        try{
            $stmt = connect()->prepare($sql);
            $result = $stmt->execute($arr);
            return $result;
        } catch(\Exception $e){
            return $result;

        }

        
    }
}

?>