
<?php

class Registry{

  public function __construct(){

  }

 function getUrl(){
          $urldata = $_GET['page'];
          echo   $urldata ."<br/>";
          $urlPath = $urldata;
  //  if( $urldata == '' )
  //  {
  //   $this->urlBits[] = 'home';
  //   }   else
    //    {

      $data = explode( '/', $urldata );
        var_dump($data);
        echo  "<br/>";
    while ( !empty( $data ) && strlen( reset( $data ) ) === 0 )
      {
        array_shift( $data );
      }
    while ( !empty( $data ) && strlen( end( $data ) ) === 0)
     {
        array_pop($data);
     }
       var_dump($data);
   }
   function getSum($num1, $num2){
  $sum = $num1 + $num2;
  echo "Sum of the two numbers $num1 and $num2 is : $sum";
}



}



  ?>
