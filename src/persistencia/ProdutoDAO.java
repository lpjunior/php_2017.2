package persistencia;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;

import entidade.Produto;

// ProdutoDAO herdara os métodos de DAO
public class ProdutoDAO extends DAO {

	private Connection conn;
	
	public ProdutoDAO() {
		// atribui a conexão aberta ao atributo conn
		try {
			conn = abreConexao();
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}
	
	public void salvar(Produto p) throws SQLException {
		PreparedStatement stmt = null;
		
		try {
			stmt = conn.prepareStatement("insert into produto values (null, ?, ?)");
			
			stmt.setString(1, p.getNome());
			stmt.setInt(2, p.getQuantidade());
			
			int flag = stmt.executeUpdate();
			
			if(flag == 0) 
				throw new SQLException("Erro ao gravar no banco"); 
				
		} finally {
			if(conn != null)
				conn.close();
			if(stmt != null)
				stmt.close();
		}
	}
	
	public static void main(String[] args) {
		ProdutoDAO dao = new ProdutoDAO();
		
		Produto produto = new Produto();
		produto.setNome("iPhone 7");
		produto.setQuantidade(10);
		
		try {
			dao.salvar(produto);
			System.out.println("Produto salvo com sucesso!");
		} catch (SQLException e) {
			e.printStackTrace();
		}
		
	}
}
