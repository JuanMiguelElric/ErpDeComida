<?php 
namespace src;
use src\Request;
use src\Dispacher;
use src\RouteCollection;

class Router
{
    protected $route_collection;
    public function __construct()
    {
        $this->route_collection = new RouteCollection;
        $this->dispacher = new Dispacher;
    }
    public function get($pattern, $callback){
        $this->route_collection->add('get',$pattern, $callback);
        return $this;

    }
    public function post($pattern,$callback)
    {
        $this->route_collection->add('post',$pattern, $callback);
        return $this;
    }
    public function put($pattern, $callback)
    {
        $this->route_collection->add('put',$pattern, $callback);
        return $this;
    }
    public function delete($pattern, $callback)
    {
        $this->route_collection->add('delete', $pattern, $callback);
        return $this;
    }
    public function find($pattern,$callback){
        return $this->route_collection->Where($pattern, $callback);
    }
}