package persistencia;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

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
			System.out.println("Erro ao abri a conexão no " + getClass().getName() + "\nO erro ocorrido foi: " + e.getMessage());
		}
	}

	public void salvar(Produto p) throws SQLException {
		PreparedStatement stmt = null;

		try {
			stmt = conn.prepareStatement("insert into produto values (null, ?, ?)");

			stmt.setString(1, p.getNome());
			stmt.setInt(2, p.getQuantidade());

			// stmt.execute();
			int flag = stmt.executeUpdate();
			/*
			 * stmt.executeUpdate() - dispara a instrução para o banco e retornar um valor
			 * (0 ou 1) informando se executou com sucesso. Aonde 1 é o retorno de sucesso e
			 * 0 é o retorno de falha.
			 */

			if (flag == 0)
				throw new SQLException("Erro ao gravar o produto no banco");

		} finally {
			/*
			 * (==) - igualdade 
			 * (!=) - diferença
			 */
			if (conn != null)
				conn.close();
			if (stmt != null)
				stmt.close();
		}
	}

	public void excluir(long id) throws SQLException {
		PreparedStatement stmt = null;

		try {
			stmt = conn.prepareStatement("delete from produto where id = ?");

			stmt.setLong(1, id);

			int flag = stmt.executeUpdate();

			if (flag == 0)
				throw new SQLException("Houve um erro ao excluir o registro de produto no banco.");

		} finally {
			if (conn != null)
				conn.close();
			if (stmt != null)
				stmt.close();
		}
	}

	public void atualizar(Produto p) throws SQLException {
		PreparedStatement stmt = null;

		try {

			stmt = conn.prepareStatement("update produto set nome = ?, quantidade = ? where id = ?");

			stmt.setString(1, p.getNome());
			stmt.setInt(2, p.getQuantidade());
			stmt.setLong(3, p.getId());

			int flag = stmt.executeUpdate();

			if (flag == 0)
				throw new SQLException("Erro ao atualizar o produto no banco.");

		} finally {
			if (conn != null)
				conn.close();
			if (stmt != null)
				stmt.close();
		}
	}

	public Produto buscar(String nome) throws SQLException {

		PreparedStatement stmt = null;
		ResultSet rs = null;
		try {

			stmt = conn.prepareStatement("select * from produto where nome like ?");

			stmt.setString(1, '%' + nome + '%');
			
			rs = stmt.executeQuery();
			Produto produto = null;
			if (rs.next()) {
				produto = criaProduto(rs);
			}

			return produto;
		} finally {
			if (conn != null)
				conn.close();
			if (stmt != null)
				stmt.close();
			if (rs != null)
				rs.close();
		}
	}

	public List<Produto> listar() throws SQLException {
		PreparedStatement stmt = null;
		ResultSet rs = null;
		try {

			stmt = conn.prepareStatement("select * from produto");

			rs = stmt.executeQuery();
			List<Produto> produtos = new ArrayList<Produto>();
			while (rs.next()) {
				produtos.add(criaProduto(rs));
			}

			return produtos;
		} finally {
			if (conn != null)
				conn.close();
			if (stmt != null)
				stmt.close();
			if (rs != null)
				rs.close();
		}
	}

	private Produto criaProduto(ResultSet rs) throws SQLException {
		Produto produto = new Produto();
		produto.setId(rs.getInt(1));
		produto.setNome(rs.getString(2));
		produto.setQuantidade(rs.getInt(3));

		return produto;
		
		/*
		 * return new Produto(rs.getInt(1), rs.getString(2), rs.getInt(3));
		 * */
	}
}
