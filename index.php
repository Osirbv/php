<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="index.php">
           <input type='text'  name="first_number">
           <input type="text"  name="second_number">
    <p>plus<input type="radio" name="switch" value="plus"></p>
    <p>minus<input type="radio" name="switch" value="minus"></p>
    <p>mul<input type="radio" name="switch" value="mul"></p>
    <p>div<input type="radio" name="switch" value="div"></p>
           <input type="submit">
</form>
</body>
</html>
<?php
$first_number = $_POST['first_number'];
$second_number= $_POST['second_number'];
$operation = $_POST['switch'];

interface Itempate{
    public function plus($name,$var);
    public function minus($name,$var);
    public function mul($name,$var);
    public function div($name,$var);
}
class Temples implements iTempatTemplate {
public $get_number;
    public function plus($name,$var)
    {
       return $this->get_number = $name+$var;
    }
    public function minus($name,$var)
    {
        return $this->get_number = $name+$var;
    }
    public function mul($name, $var)
    {
        return $this->get_number = $name+$var;
    }
    public function div($name, $var)
    {
        return $this->get_number = $name+$var;
    }
}
  class round extends Te{
    private function rounds($a){

    }

}
class cls_round extends round {
    public function rounds($a)
    {
    }
}
abstract class answer extends Templete
{
    public function answers(){
        echo $this->gettable;
    }
}
class get_answer extends answer
{
 public function answers()
 {
  echo $this->gettable;
 }
}
$class = new Temples();
$rounds = new cls_round();
strval($operation);
$class_rounds = 'cls_round';
 $set = 'round';
$answer = $class->$operation($first_number,$second_number);
$answer = $rounds->rounds(2);
echo $answer;
