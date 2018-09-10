<?php

function test1(){

    //Exception 只能捕获Exception
    try{
        throw new Exception('opps,exception',100);
    }catch (Exception $e){
        echo $e->getMessage(),'<br>',$e->getCode();
    }
}

function test2(){
    //Throwable 捕获Error、Exception
    try{

        trigger_error('trigger_error set error',E_USER_ERROR);//自定义用户等级错误 E_USER_NOTICE E_USER_WARNING E_USER_ERROR
        no_exist_method();//系统级错误

    }catch (Throwable $e){
        echo $e->getMessage(),'<br>',$e->getCode();
    }
}




test2();