<?php
class Registry{
  /**
  * The array of objects being stored within the registry
  * @access private
  */
  private static $objects = array();

public function storeObject( $object, $key )
      {
          if( strpos( $object, 'database' ) !== false )
          {
              $object_a=str_replace( '.database', 'database', $object);

                $object = str_replace( '.database', '', $object);
                require_once('databaseobjects/' . $object. '.database.class.php');
                //oerwriting is working here
                  $object=    $object_a;
          }
          else
          {
                require_once('objects/' . $object . '.class.php');
          }
                self::$objects[ $key ] = new $object( );
      }

      /**
      * Gets an object from within the registry
      * @param String $key the array key used to store the object
      * @return object - the object
      */
  public function getObject( $key )
      {
            if( is_object ( self::$objects[ $key ] ) )
            {
            return self::$objects[ $key ];
             }
      }

}
?>
