package util;

import java.io.File;
import java.io.FileNotFoundException;
import java.sql.Connection;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.Scanner;

import javax.swing.JOptionPane;

import banco.FabricaDeConexao;

public class CriaEstruturaDoBanco {

	public static void main(String[] args) {
		Connection conexao = new FabricaDeConexao().pegaConexao();
		File sqlFile = new File("C:\\Users\\luis.junior\\eclipse-workspace\\aula18\\src\\banco\\script_db.sql");

		new CriaEstruturaDoBanco().criaTabelas(conexao, sqlFile);
		JOptionPane.showMessageDialog(null, "Tabelas criadas com sucesso", "Informe", JOptionPane.INFORMATION_MESSAGE);
	}

	@SuppressWarnings("resource")
	public void criaTabelas(Connection conn, File inputFile) {
		// Delimitador
		String delimiter = ";";

		Scanner scanner;
		try {
			scanner = new Scanner(inputFile).useDelimiter(delimiter);
		} catch (FileNotFoundException e) {
			e.printStackTrace();
			return;
		}

		Statement stmt = null;
		while (scanner.hasNext()) {

			String linhaDeInstrucao = scanner.next() + delimiter;
			try {

				stmt = conn.createStatement();
				stmt.execute(linhaDeInstrucao);
			} catch (SQLException e) {
				e.printStackTrace();
			} finally {
				if (stmt != null) {
					try {
						stmt.close();
					} catch (SQLException e) {
						e.printStackTrace();
					}
				}
				stmt = null;
			}
		}
	}
}
