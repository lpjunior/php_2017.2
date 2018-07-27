package controle;

import java.io.IOException;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import banco.serviceClienteDAO;
import modelo.Cliente;
import modelo.Telefone;

@WebServlet({ "/cadastrar", "/buscar", "/editar", "/deletar" })
public class ServletCliente extends HttpServlet {
	private static final long serialVersionUID = 1L;

	public ServletCliente() {
		super();
	}

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		String uri = 
				request.getServletPath().replace("/", "");
		
		if(uri.equalsIgnoreCase("buscar")) {
			response.getWriter().append("requisição via rota 'buscar' método GET");
		} else if(uri.equalsIgnoreCase("deletar")) {
			response.getWriter().append("requisição via rota 'deletar' método GET");
		} else {
			response.getWriter().append("400 bad request.");
		}
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		String uri = 
				request.getServletPath().replace("/", "");
		
		if(uri.equalsIgnoreCase("cadastrar")) {
			String msg;
			if(gravar(request, response)) {
				msg = "Gravado com sucesso";
			} else {
				msg = "Ocorreu um erro ao gravar";
			}
			request.setAttribute("msg", msg);
			request.getRequestDispatcher("cadastrar.jsp").forward(request, response);
		} else if(uri.equalsIgnoreCase("editar")) {
			response.getWriter().append("requisição via rota 'editar' método POST");
		} else {
			response.getWriter().append("400 bad request.");
		}
	}
	
	private boolean gravar(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		if(true)
			return false;
		// resgatar os dados do formulário
		String nome = request.getParameter("txtNome");
		String telefone = request.getParameter("txtTelefone");
		
		// carregar o objeto de cliente com os dados
		Cliente cliente = new Cliente();
		
		cliente.setNome(nome);
		cliente.setTelefone(new Telefone());
		cliente.getTelefone().setNumero(telefone);
		
		// persistir os dados no banco
		serviceClienteDAO sdao = new serviceClienteDAO();
		
		if(sdao.registrar(cliente)) {
			return true;
		}
		
		return false;
	}
}
