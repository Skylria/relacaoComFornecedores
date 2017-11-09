<?php 
	session_start();
	$dbname = "id2846308_projeto1";
	$usuario = "id2846308_pep1";
    $senha = "@lunoifpe";
	try {
	  	$conn = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $senha);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}
	$remetente = $_SESSION["perfil"];
	$mensagem = $_POST["conteudo"];
	$destinatario = $_SESSION['dest'];

	$sql = "INSERT INTO mensagens(MEN_REMETENTE, MEN_DESTINATARIO, MEN_CONTEUDO) 
		VALUES(:remetente, :destinatario, :mensagem)";	
	$stmt = $conn->prepare( $sql );
	$stmt->bindParam( ':remetente', $remetente );
	$stmt->bindParam( ':destinatario',$destinatario  );
	$stmt->bindParam( ':mensagem',$mensagem  );
	
	$result = $stmt->execute();

	if ( ! $result ){
	    var_dump( $stmt->errorInfo() );
	    exit;
	}
	header("location: ../mensagens.php?id=$destinatario");
?>



 ?>