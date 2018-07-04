package banco;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class FabricaDeConexao {

	private static final String HOST = "jdbc:mysql://localhost/aula18?createDatabaseIfNotExist=true";
	private static final String USER = "root";
	private static final String PASS = "";

	public Connection pegaConexao() {

		try {
			return DriverManager.getConnection(HOST, USER, PASS);
		} catch (SQLException e) {
			throw new RuntimeException(e);
		}
	}
}
