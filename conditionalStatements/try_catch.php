<?php
// try {

// 	throw new Exception("Erro ", 400);

// } catch (Exception $e) {

// 	echo json_encode(
// 		array(
// 			"message"=>$e->getMessage(),
// 			"line"=>$e->getLine(),
// 			"file"=>$e->getFile(),
// 			"code"=>$e->getCode()
// 		)
// 	);
// }

function trataNome($name) {
	if (!$name) {
		throw new Exception("Nenhum nome foi informado", 1);
	}
	echo ucfirst($name) . "<br>";
}

try {
	trataNome("Joao");
	trataNome("");
} catch (Exception $e) {
	echo $e->getMessage();
} finally {
	echo "Executou o bloco Try!";
}

?>