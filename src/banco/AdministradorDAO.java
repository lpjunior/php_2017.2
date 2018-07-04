package banco;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import modelo.Administrador;

public class AdministradorDAO {

	private Connection conexao;

	public AdministradorDAO() {
		conexao = new FabricaDeConexao().pegaConexao();
	}

	public void gravar(Administrador admin) throws SQLException {
		PreparedStatement stmt = null;

		try {
			stmt = conexao.prepareStatement("insert into administrador values(null, ?, ?, md5(?))");

			stmt.setString(1, admin.getNome());
			stmt.setString(2, admin.getLogin());
			stmt.setString(3, admin.getSenha());

			stmt.executeUpdate();
		} finally {
			if (stmt != null)
				stmt.close();
			if (conexao != null)
				conexao.close();
		}
	}

	public Administrador efetuarLogin(String login, String senha) throws SQLException {
		PreparedStatement stmt = null;
		ResultSet rs = null;
		try {
			stmt = conexao
					.prepareStatement("select id, nome, login from administrador where login = ? and senha =  md5(?)");

			stmt.setString(1, login);
			stmt.setString(2, senha);

			rs = stmt.executeQuery();

			Administrador admin = null;

			if (rs.next()) {
				admin = criaAdmin(rs);
			}

			return admin;

		} finally {
			if (stmt != null)
				stmt.close();
			if (conexao != null)
				conexao.close();
			if (rs != null)
				rs.close();
		}
	}

	public void alteraSenha(String newSenha, String oldSenha) throws SQLException {
		PreparedStatement stmt = null;

		try {
			stmt = conexao.prepareStatement("update administrador set senha = md5(?) where senha = md5(?)");

			stmt.setString(1, newSenha);
			stmt.setString(2, oldSenha);

			stmt.executeUpdate();
		} finally {
			if (stmt != null)
				stmt.close();
			if (conexao != null)
				conexao.close();
		}
	}

	private Administrador criaAdmin(ResultSet rs) {

		Administrador admin = null;

		try {
			admin = new Administrador();

			admin.setId(rs.getLong(1));
			admin.setNome(rs.getString(2));
			admin.setLogin(rs.getString(3));

		} catch (SQLException e) {
			e.printStackTrace();
			System.out.println("Erro ao criar o objeto de administrador --> " + e);
		}
		return admin;
	}
}
