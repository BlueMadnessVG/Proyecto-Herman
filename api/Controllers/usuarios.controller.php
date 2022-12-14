<?php
class UsuarioController{

    public function Error( $e ) {
        header( 'HTTP/1.0 500' );
        //Cabecera que Indica que hay un error en el Servidor
        $json = array( 'message' => '¡Hubo un Error!', 'status'=>500, 'data' => $e->getMessage() );
        echo json_encode( $json );
        return ;
    }



    static public function pruebaget() {
        try {

            $datos = UsuarioModel :: pruebaget();

            $json = array( 'message'=>'¡Operacion Exitosa!', 'status'=>200, 'data'=> $datos );
            echo json_encode( $json );
            return ;
        } catch( Exception $e1 ) {
            self::Error( $e1 );
        }
    }

    // --------------------------------------    MUSICA    --------------------------------------

    static public function obtenerMusicaPlayList( $data ) {

        try {
                if ( isset( $data[ 'id_playlist' ] ) ) {

                    $data = UsuarioModel :: obtenerMusicaPlayList( $data );

                    $json = array ( 'message' => '¡ Operacion Exitosa !', 'status' => 200, 'data' => $data  );
                    echo json_encode( $json );
                    return;

                }
        }
        catch ( Exeption $e ) {
                    $json = array( 'message' => 'Le faltan datos compalero', 'status' => 500, 'data' => $e );
        }

    }

    static public function obtenerMusicaUsuario( $data ) {

        try {
                if ( isset( $data[ 'id_usr' ] ) ) {

                    $data = UsuarioModel :: obtenerMusicaUsuario( $data );

                    $json = array ( 'message' => '¡ Operacion Exitosa !', 'status' => 200, 'data' => $data  );
                    echo json_encode( $json );
                    return;

                }
        }
        catch ( Exeption $e ) {
                    $json = array( 'message' => 'Le faltan datos compalero', 'status' => 500, 'data' => $e );
        }

    }

    
    static public function obtenerUsuarioPlayList( $data ) {

        try {
                if ( isset( $data[ 'id_usr' ] ) ) {

                    $data = UsuarioModel :: obtenerUsuarioPlayList( $data );

                    $json = array ( 'message' => '¡ Operacion Exitosa !', 'status' => 200, 'data' => $data  );
                    echo json_encode( $json );
                    return;

                }
        }
        catch ( Exeption $e ) {
                    $json = array( 'message' => 'Le faltan datos compalero', 'status' => 500, 'data' => $e );
        }

    }

    static public function agregarPlayList( $data ) {

        try {
                if ( isset( $data[ 'id_usr' ] ) && isset( $data[ 'id_playlist' ] ) ) {

                    $data = UsuarioModel :: agregarPlayList( $data );

                    $json = array ( 'message' => '¡ Operacion Exitosa !', 'status' => 200, 'data' => $data  );
                    echo json_encode( $json );
                    return;

                }
        }
        catch ( Exeption $e ) {
                    $json = array( 'message' => 'Le faltan datos compalero', 'status' => 500, 'data' => $e );
        }

    }

    static public function obtenerListaAmigos( $data ) {

        try {
                if ( isset( $data[ 'id_usr' ] ) ) {

                    $data = UsuarioModel :: obtenerListaAmigos( $data );

                    $json = array ( 'message' => '¡ Operacion Exitosa !', 'status' => 200, 'data' => $data  );
                    echo json_encode( $json );
                    return;

                }
        }
        catch ( Exeption $e ) {
                    $json = array( 'message' => 'Le faltan datos compalero', 'status' => 500, 'data' => $e );
        }

    }

    static public function obtenerLista( $data ) {

        try {
                if ( isset( $data[ 'id_usr' ] ) ) {

                    $data = UsuarioModel :: obtenerLista( $data );

                    $json = array ( 'message' => '¡ Operacion Exitosa !', 'status' => 200, 'data' => $data  );
                    echo json_encode( $json );
                    return;

                }
        }
        catch ( Exeption $e ) {
                    $json = array( 'message' => 'Le faltan datos compalero', 'status' => 500, 'data' => $e );
        }

    }

    static public function agregarAmigos( $data ) {

        try {
                if ( isset( $data[ 'id_usr' ] ) && isset( $data[ 'id_lista' ] ) ) {

                    $data = UsuarioModel :: agregarAmigos( $data );

                    $json = array ( 'message' => '¡ Operacion Exitosa !', 'status' => 200, 'data' => $data  );
                    echo json_encode( $json );
                    return;

                }
        }
        catch ( Exeption $e ) {
                    $json = array( 'message' => 'Le faltan datos compalero', 'status' => 500, 'data' => $e );
        }

    }

    static public function eliminarAmigo( $data ) {

        try {
                if ( isset( $data[ 'id_usr' ] ) && isset( $data[ 'id_lista' ] ) ) {

                    $data = UsuarioModel :: eliminarAmigo( $data );

                    $json = array ( 'message' => '¡ Operacion Exitosa !', 'status' => 200, 'data' => $data  );
                    echo json_encode( $json );
                    return;

                }
        }
        catch ( Exeption $e ) {
                    $json = array( 'message' => 'Le faltan datos compalero', 'status' => 500, 'data' => $e );
        }

    }


    static public function agregarMusicaPlayList( $data ) {

        try {
                if ( isset( $data[ 'id_musica' ] ) && isset( $data[ 'id_playlist' ] ) ) {

                    $data = UsuarioModel :: agregarMusicaPlayList( $data );

                    $json = array ( 'message' => '¡ Operacion Exitosa !', 'status' => 200, 'data' => $data  );
                    echo json_encode( $json );
                    return;

                }
        }
        catch ( Exeption $e ) {
                    $json = array( 'message' => 'Le faltan datos compalero', 'status' => 500, 'data' => $e );
        }

    }

    // --------------------------------------    MENSAJES    --------------------------------------

    static public function enviarMensaje( $data ) {

        try {

                if ( isset( $data[ 'id_usr' ] ) && isset( $data[ 'mensaje' ] ) && isset( $data[ 'id_amigo' ] ) ) {
                    
                    $data = UsuarioModel :: enviarMensaje( $data );

                    $json = array ( 'message' => '¡ Operacion Exitosa !', 'status' => 200, 'data' => $data  );
                    echo json_encode( $json );
                    return;
                }

        }
        catch ( Exeption $e ) {
                    $json = array( 'message' => 'Le faltan datos compalero', 'status' => 500, 'data' => $e );
        }

    }

    static public function obtenerChat( $data ) {

        try {
                if ( isset( $data[ 'id_usr' ] ) && isset( $data[ 'id_amigo' ] ) ) {

                    $data = UsuarioModel :: obtenerChat( $data );

                    $json = array ( 'message' => '¡ Operacion Exitosa !', 'status' => 200, 'data' => $data  );
                    echo json_encode( $json );
                    return;

                }
        }
        catch ( Exeption $e ) {
                    $json = array( 'message' => 'Le faltan datos compalero', 'status' => 500, 'data' => $e );
        }

    }

    static public function obtenerChatId( $data ) {

        try {
                if ( isset( $data[ 'id_usr' ] ) && isset( $data[ 'id_amigo' ] ) ) {

                    $data = UsuarioModel :: obtenerChatId( $data );

                    $json = array ( 'message' => '¡ Operacion Exitosa !', 'status' => 200, 'data' => $data  );
                    echo json_encode( $json );
                    return;

                }
        }
        catch ( Exeption $e ) {
                    $json = array( 'message' => 'Le faltan datos compalero', 'status' => 500, 'data' => $e );
        }

    }

    // --------------------------------------    AMIGOS    --------------------------------------

    static public function obtenerAmigos( $data ) {

        try {
                if ( isset( $data[ 'id_usr' ] ) ) {

                    $data = UsuarioModel :: obtenerAmigos( $data );

                    $json = array ( 'message' => '¡ Operacion Exitosa !', 'status' => 200, 'data' => $data  );
                    echo json_encode( $json );
                    return;

                }
        }
        catch ( Exeption $e ) {
                    $json = array( 'message' => 'Le faltan datos compalero', 'status' => 500, 'data' => $e );
        }

    }

    static public function infoUsuario( $data ) {

        try {
                if ( isset( $data[ 'id_usr' ] ) ) {

                    $data = UsuarioModel :: infoUsuario( $data );

                    $json = array ( 'message' => '¡ Operacion Exitosa !', 'status' => 200, 'data' => $data  );
                    echo json_encode( $json );
                    return;

                }
        }
        catch ( Exeption $e ) {
                    $json = array( 'message' => 'Le faltan datos compalero', 'status' => 500, 'data' => $e );
        }

    }

    // --------------------------------------    PUBLICACIONES    --------------------------------------

    static public function Usr_registrarPost( $data ) {

        try {
                if ( isset( $data[ 'id_usr' ] ) && isset( $data[ 'comment' ] ) && isset( $data[ 'id_music' ] ) ) {

                    $data = UsuarioModel :: Usr_registrarPost( $data );

                    $json = array ( 'message' => '¡ Operacion Exitosa !', 'status' => 200, 'data' => $data  );
                    echo json_encode( $json );
                    return;
                }
        }
        catch ( Exception $e1 ) {
                $json = array( 'message' => 'Le faltan datos compañero', 'status' => 500, 'data' => $e1 );
                echo json_encode( $json );
        }

    }

    static public function Usr_modificarPost( $data ) {

        try {
                if (  isset( $data[ 'id_post' ] ) && isset( $data[ 'comentario' ] ) && isset( $data[ 'id_musica' ] ) && isset( $data[ 'id_album' ] ) ) {

                    $data = UsuarioModel :: Usr_modificarPost( $data );

                    $json = array ( 'message' => '¡ Operacion Exitosa !', 'status' => 200, 'data' => $data  );
                    echo json_encode( $json );
                    return;
                }
        }
        catch ( Exception $e1 ) {
                $json = array( 'message' => 'Le faltan datos compañero', 'status' => 500, 'data' => $e1 );
                echo json_encode( $json );
        }

    }

    // --------------------------------------    DAR DE BAJA    --------------------------------------

    static public function Usr_bajaPost( $data ) {

        try {
                if ( isset( $data[ 'id_post' ] ) ) {
                    
                    $data = UsuarioModel :: Usr_bajaPost( $data );

                    $json = array ( 'message' => '¡ Operacion Exitosa !', 'status' => 200, 'data' => $data );
                    echo json_encode( $json );
                    return;
                }
        }
        catch ( Exception $e1 ) {
                $json = array( 'message' => 'Le faltan datos compañero', 'status' => 500, 'data' => $e1 );
                echo json_encode( $json );
        }
    }
    
    static public function login($data){

        $datos=UsuarioModel::login($data);

    }
    


    static public function registrarse($data){
        try{
            if(isset( $data[ "nombre_usu" ]) &&  isset( $data["correo"]) && isset( $data["pass"]) &&isset( $data["fecha_nac"]) && isset( $data["img"]) && isset( $data["descripcion"])){
                $datos=UsuarioModel::registrarse($data);
                $json = array( 'message'=>'¡Operacion Exitosa!', 'status'=>200, 'data'=> $datos );
                echo json_encode( $json );
                return;
            }
        }catch(Exception $e){

            self::Error($e);


        }
    }

    static public function darbajausu($data){
        try{

            if(isset($data["id_usuario"])){
                $datos=UsuarioModel::darbajausu($data);
                $json = array( 'message'=>'¡Operacion Exitosa!', 'status'=>200, 'data'=> $datos );
                echo json_encode( $json );
                return;
            }


        }catch(Exception $e){
            self::Error($e);
        }
    }

    static public function comentarpost($data){

        try{
            if(isset($data["id_post"]) && isset($data["id_usuario"]) && isset($data["comentario"])){

                $datos=UsuarioModel::comentarpost($data);
                $json = array( 'message'=>'¡Operacion Exitosa!', 'status'=>200, 'data'=> $datos );
                echo json_encode( $json );
                return;


            }

        }catch(Exception $e){
            self::Error($e);
        }

    }

    static public function Usr_bajaMus( $data ) {

        try {
                if ( isset( $data[ 'id_musica' ] ) ) {
                    
                    $data = UsuarioModel :: Usr_bajaMus( $data );

                    $json = array ( 'message' => '¡ Operacion Exitosa !', 'status' => 200, 'data' => $data );
                    echo json_encode( $json );
                    return;
                }
        }
        catch ( Exception $e1 ) {
                $json = array( 'message' => 'Le faltan datos compañero', 'status' => 500, 'data' => $e1 );
                echo json_encode( $json );
        }
    }
    static public function reaccionarpost($data){

        try{
            if(isset($data["id_post"])&& isset($data["id_usuario"])){
                $datos=UsuarioModel::reaccionarpost($data);
                $json = array( 'message'=>'¡Operacion Exitosa!', 'status'=>200, 'data'=> $datos );
                echo json_encode( $json );
                return;
            }else{
                header( 'HTTP/1.0 500 ' );
                    echo 'Datos incompletos';
            }


        }catch(Exception $e){
            self::Error($e);
        }


    }

    

    static public function reaccionarcomentario($data){

        try{
            if(isset($data["id_comm"])&& isset($data["id_usuario"])){
                $datos=UsuarioModel::reaccionarcomentario($data);
                $json = array( 'message'=>'¡Operacion Exitosa!', 'status'=>200, 'data'=> $datos );
                echo json_encode( $json );
                return;
            }else{
                header( 'HTTP/1.0 500 ' );
                    echo 'Datos incompletos';
            }


        }catch(Exception $e){
            self::Error($e);
        }


    }

    static public function delcomentario($data){

        try{
            if(isset($data["id_comm"])){
                $datos=UsuarioModel::delcomentario($data);
                $json = array( 'message'=>'¡Operacion Exitosa!', 'status'=>200, 'data'=> $datos );
                echo json_encode( $json );
                return;
            }else{
                header( 'HTTP/1.0 500 ' );
                    echo 'Datos incompletos';
            }


        }catch(Exception $e){
            self::Error($e);
        }


    }
    static public function delreacpost($data){

        try{
            if(isset($data["id_post"]) && isset($data["id_usuario"])){
                $datos=UsuarioModel::delreacpost($data);
                $json = array( 'message'=>'¡Operacion Exitosa!', 'status'=>200, 'data'=> $datos );
                echo json_encode( $json );
                return;
            }else{
                header( 'HTTP/1.0 500 ' );
                    echo 'Datos incompletos';
            }


        }catch(Exception $e){
            self::Error($e);
        }


    }
    static public function delreaccomm($data){

        try{
            if(isset($data["id_comm"]) && isset($data["id_usu"])){
                $datos=UsuarioModel::delreaccomm($data);
                $json = array( 'message'=>'¡Operacion Exitosa!', 'status'=>200, 'data'=> $datos );
                echo json_encode( $json );
                return;
            }else{
                header( 'HTTP/1.0 500 ' );
                    echo 'Datos incompletos';
            }


        }catch(Exception $e){
            self::Error($e);
        }


    }

    static public function delpost($data){

        try{
            if(isset($data["id_post"]) && isset($data['id_usuario']) && isset($data['nombre_post']) && isset($data['correo']) && isset($data['motivo'])){
                $datos=UsuarioModel::delpost($data);
                $json = array( 'message'=>'¡Operacion Exitosa!', 'status'=>200, 'data'=> $datos );
                echo json_encode( $json );
                return $json;
            }else{
                header( 'HTTP/1.0 500 ' );
                    echo 'Datos incompletos';
            }


        }catch(Exception $e){
            self::Error($e);
        }


    }

    static public function cambiopwd($data){
        try{
            if(isset($data["ID_USUARIO"]) && isset($data["Pass"]) && isset($data["Passold"])){
                if(UsuarioModel::veroldpwd($data)){
                    $datos=UsuarioModel::Modpwd($data);
                    $json = array( 'message'=>'¡Operacion Exitosa!', 'status'=>200, 'data'=> $datos );
                echo json_encode( $json );
                return;
                }
            }else{
                header( 'HTTP/1.0 500 ' );
                    echo 'Datos incompletos';
            }
        }catch(Exception $e){
            self::Error($e);
        }
    }

    static public function obtenerReacciones($data){
        try{
            if(isset($data["id_usr"])){
                $datos=UsuarioModel::obtenerReacciones($data);
                $json = array( 'message'=>'¡Operacion Exitosa!', 'status'=>200, 'data'=> $datos );
                echo json_encode( $json );
                return;
            }else{
                header( 'HTTP/1.0 500 ' );
                    echo 'Datos incompletos';
            }
        }catch(Exception $e){
            self::Error($e);
        }
    }

    static public function eliminarMusicaPlaylist( $data ) {

        try{
            if( isset($data["id_music"]) && isset( $data["id_playlist"] ) ){
                $datos=UsuarioModel::eliminarMusicaPlaylist($data);
                $json = array( 'message'=>'¡Operacion Exitosa!', 'status'=>200, 'data'=> $datos );
                echo json_encode( $json );
                return;
            }else{
                header( 'HTTP/1.0 500 ' );
                    echo 'Datos incompletos';
            }
        }catch(Exception $e){
            self::Error($e);
        }

    }

    
    static public function obtenerFeed($data){
        try{

            $datos=UsuarioModel::obtenerFeed($data);
            $json = array( 'message'=>'¡Operacion Exitosa!', 'status'=>200, 'data'=> $datos );
            echo json_encode( $json );
            return;

        }catch(Exception $e){
            self::Error($e);
        }
    }

    static public function obtenerFeedAmigos($data){
        try{

            $datos=UsuarioModel::obtenerFeedAmigos($data);
            $json = array( 'message'=>'¡Operacion Exitosa!', 'status'=>200, 'data'=> $datos );
            echo json_encode( $json );
            return;

        }catch(Exception $e){
            self::Error($e);
        }
    }

    static public function getcomentarios( $data ) {

        try {
                if ( isset( $data[ 'id_post' ] ) ) {

                    $data = UsuarioModel :: getcomentarios( $data );

                    $json = array ( 'message' => '¡ Operacion Exitosa con los comentarios !', 'status' => 200, 'data' => $data  );
                    echo json_encode( $json );
                    return;

                }
        }
        catch ( Exception $e ) {
                    $json = array( 'message' => 'Le faltan datos compalero', 'status' => 500, 'data' => $e );
        }

    }



}






?>