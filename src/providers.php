<?php

class Item extends CurlService {
    
    public function getList($page = 0){
       $ids = $this->get('topstories');
       $data = array();
       for($i = $page; $i < $page + 10; $i++ ) {
           $response      = $this->get("item/".$ids[$i]);
           $host          = parse_url($response->url);
           $response->host= $host["host"];
           $data[]        = $response;
       }
       
       return $data;
    }
    
    public function getItemById($id) {
        $data       = $this->get("item/".$id);
        $host       = parse_url($data->url);
        $data->host = $host["host"];
        $comments   = $this->getLastComments($data->kids);
        return array("data" => $data, "comments" => $comments);
    }
    
    public function getLastComments($kids) {
        $data = array();
        foreach ($kids as $kid) {
            $response = $this->get("item/".$kid);
            if(!isset($response->deleted)){
                $data[] = $response;
            }
        }
        return $data;
    }
}

class CurlService {
    
    public function get($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://hacker-news.firebaseio.com/v0/$url.json");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json')); // Assuming you're requesting JSON
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        return json_decode($response);
    }
}