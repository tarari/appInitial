<?php

    function router(string $uri):array {
        if($uri=="/"){
            $controller='home';
        }else{
            $url=explode('/',trim($uri));

            $url_new=array_values(
                array_filter(
                    $url,function($v){
                        return $v != "";
            }));
            $controller=$url_new[0]??'index';
            $action=$url_new[1]??'index';
            $id=$url_new[2]??null;
        }
        return [$controller,$action,$id];
    }