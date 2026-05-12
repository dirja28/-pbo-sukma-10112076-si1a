<?php
class  Str {
    private static $mthods=[
        'upper'=>'strtoupper',
        'lower'=>'strtolower',
        'len'=>'strlen'
    ];

    public static function __Callstatic($method, $args){
        if(!in_array($method, array_keys(self::$mthods))){
            throw new BadMethodCallException();
        }

        array_unshift($args, $this->s);

        return call_user_func_array(self::$mthods[$method], $args);
    }

}
echo Str::upper('Hello, World!') . '<br>';
echo Str::lower('Hello, World!') . '<br>';
echo Str::len('Hello, World!') . '<br>';

?>
