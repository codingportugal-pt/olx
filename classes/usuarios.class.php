<?php 
class Usuarios {

	public function cadastrar($nome, $email, $senha, $telemovel) {

		global $pdo;
		$sql =$pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
		$sql->bindvalue(":email", $email);
		$sql->execute();

		if($sql->rowCount() == 0) {

			$sql = $pdo->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha, telemovel = :telemovel");
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":senha", md5($senha));
			$sql->bindValue(":telemovel", $telemovel);
			$sql->execute();

			return true;

		} else {
			return false;
		}
	}
}
?>
