<?php
class Registry{
  /**
  * The array of objects being stored within the registry
  * @access private
  */
  private static $objects = array();




  /**
	 * The instance of the registry
	 * @access private
	 */
	private static $instance;

  private static $urlPath;
  private static $urlBits = array();

  /**
  * singleton method used to access the object
  * @access public
  * @return
  */
  public static function singleton()
  {
      if( !isset( self::$instance ) )
      {
            $obj = __CLASS__;
            self::$instance = new $obj;
      }
      return self::$instance;
  }
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


      /**
	 * Gets data from the current URL
	 * @return void
	 */
	public function getURLData()
	{
     $urldata = (isset($_GET['page'])) ? $_GET['page'] : '' ;
		self::$urlPath = $urldata;
		if( $urldata == '' )
		{
			self::$urlBits[] = 'home';
			self::$urlPath = 'home';
		}
		else
		{
			$data = explode( '/', $urldata );
        print_r( $data);
			while ( !empty( $data ) && strlen( reset( $data ) ) === 0 )
			{
		    	array_shift( $data );
		    }
		    while ( !empty( $data ) && strlen( end( $data ) ) === 0)
		    {
		        array_pop($data);
		    }
			 self::$urlBits = $this->array_trim( $data );
      print_r( self::$urlBits);
		}
	}

  private function array_trim( $array )
	{
	    while ( ! empty( $array ) && strlen( reset( $array ) ) === 0)
	    {
	        array_shift( $array );
	    }

	    while ( !empty( $array ) && strlen( end( $array ) ) === 0)
	    {
	        array_pop( $array );
	    }
    echo "this is from trim";
    print_r($array);
	    return $array;
	}

}
?>
