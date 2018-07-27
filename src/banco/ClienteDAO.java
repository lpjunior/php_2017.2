package banco;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

import modelo.Cliente;

public class ClienteDAO {

	private Connection conn;

	public ClienteDAO() {
		try {
			conn = new DAO().getConnection();
		} catch (SQLException e) {
			e.printStackTrace();
			System.out.println(e.getMessage());
		}
	}

	@SuppressWarnings("resource")
	public void gravar(Cliente c) throws SQLException {
        PreparedStatement stmt = null;
        try {
            stmt = conn.prepareStatement("insert into cliente values(null, ?)", Statement.RETURN_GENERATED_KEYS);
            stmt.setString(1, c.getNome());

          	int affectedRows = stmt.executeUpdate();

            if (affectedRows == 0) {
                throw new SQLException("A criação do cliente falhou.");
            }
          
            try (ResultSet generatedKeys = stmt.getGeneratedKeys()) {
                if (generatedKeys.next()) {
                    c.setId(generatedKeys.getInt(1));
    				stmt = conn.prepareStatement("insert into telefone values(null, ?, ?)");
    				stmt.setInt(1, c.getId());
                  	stmt.setString(2, c.getTelefone().getNumero());
                  	
                  	stmt.executeUpdate();
                }
                else {
                    throw new SQLException("Creating user failed, no ID obtained.");
                }
            }          	
        } finally {
        	if(conn != null)
        		conn.close();
    		if(stmt != null)
    			stmt.close();
        }
    }
}