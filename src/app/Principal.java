package app;

import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

import entidade.Produto;
import persistencia.ProdutoDAO;

public class Principal {
	
	private static ProdutoDAO dao;
	
	public Principal() {
		dao = new ProdutoDAO();
	}
	
	
	public static void main(String[] args) {
		
		// try expressivo - auto finaliza o scanner
		try (Scanner scan = new Scanner(System.in)) {
			int opcao;

			Produto produto = new Produto();

			System.out.print("Informe a opção desejada"
					+ "\n"
					+ "1 - salvar\n"
					+ "2 - atualizar\n"
					+ "3 - localizar\n"
					+ "4 - listar\n"
					+ "5 - excluir\n"
					+ "Opção: ");
			opcao = new Integer(scan.nextLine());
			
			switch (opcao) {
			case 1:
				System.out.print("Informe o nome: ");
				produto.setNome(scan.nextLine());

				System.out.print("Informe a quantidade: ");
				produto.setQuantidade(new Integer(scan.nextLine()));

				gravar(produto);
				break;
				
			case 2:
				System.out.print("Informe o nome: ");
				produto.setNome(scan.nextLine());

				produto = localizar(produto.getNome());
				
				System.out.print("Informe o novo nome: ");
				produto.setNome(scan.nextLine());
				
				System.out.print("Informe a nova quantidade: ");
				produto.setQuantidade(new Integer(scan.nextLine()));
				
				atualizar(produto);
				break;
				
			case 3:
				System.out.print("Informe o nome: ");
				produto.setNome(scan.nextLine());

				System.out.println(localizar(produto.getNome()));
				
				break;

			case 4:
				for (Produto p : listar()) {
					System.out.println(p);
				}
				break;
				
			case 5:
				System.out.print("Informe o nome do produto: ");
				produto = localizar(scan.nextLine());
				
				excluir(produto.getId());
				break;

			default:
				System.out.println("Opção inválida");
				break;
			}
		}
	}

	public static void gravar(Produto produto) {
		

		try {
			dao.salvar(produto);
			System.out.println("Produto salvo com sucesso!");
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}
	
	public static void atualizar(Produto produto) {

		try {
			dao.atualizar(produto);
			System.out.println("Produto atualizado com sucesso!");
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}
	
	public static Produto localizar(String nome) {

		try {
			return dao.buscar(nome);
		} catch (SQLException e) {
			e.printStackTrace();
		}
		
		return new Produto();
	}
	
	public static List<Produto> listar() {

		try {
			return dao.listar();
		} catch (SQLException e) {
			e.printStackTrace();
		}
		return new ArrayList<Produto>();
	}
	
	public static void excluir(long id) {

		try {
			dao.excluir(id);
			System.out.println("Removido com sucesso");
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}
}