<?php 
/**
* 模型基类
*/
class Model
{
    
    function __construct()
    {
        
    }
    //查询单个管理员
    protected function getOne($sql){
        $managers=array();
        $mysqli=DB::getDb();
        $result=$mysqli->query($sql);
        $objects=$result->fetch_object() ;
        @DB::unDb($result = null,$mysqli);
        return $objects;
    }
    //查询全部管理员
    protected function getAll($sql){
        $managers=array();
        $mysqli=DB::getDb();
        $result=$mysqli->query($sql);
        while ($objects=$result->fetch_object()) {
            $managers[]=$objects;
        }
        @DB::unDb($result = null,$mysqli);
        return $managers;
    }
    //增改删操作
    protected function aud($sql){
        $mysqli=DB::getDb();
        $mysqli->query($sql);
        $affected_rows=$mysqli->affected_rows;
        @DB::unDb($result = null,$mysqli);
        return $affected_rows;
    }
}