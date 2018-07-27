package banco;

import java.sql.SQLException;

import modelo.Cliente;

public class serviceClienteDAO {

	private ClienteDAO dao;
	
	public serviceClienteDAO() {
		dao = new ClienteDAO();
	}
	
	public boolean registrar(Cliente c) {
		try {
			dao.gravar(c);
			return true;
		} catch (SQLException e) {
			e.printStackTrace();
		}
		return false;
	}
}
