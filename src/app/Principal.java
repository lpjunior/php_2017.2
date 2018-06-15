package app;

import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

import entidade.Produto;
import persistencia.ProdutoDAO;

public class Principal {
	public static void main(String[] args) {

		try (Scanner scan = new Scanner(System.in)) {
			String opcao = "";

			Produto produto = new Produto();
			
			System.out.print("Informe a opção desejada\n(salvar | atualizar | localizar | listar | excluir):");
			opcao = scan.nextLine();
			switch (opcao) {
			case "salvar":
				System.out.print("Informe o nome: ");
				produto.setNome(scan.nextLine());

				System.out.print("Informe a quantidade: ");
				produto.setQuantidade(new Integer(scan.nextLine()));

				gravar(produto);
				break;
				
			case "atualizar":
				System.out.print("Informe o nome: ");
				produto.setNome(scan.nextLine());

				produto = localizar(produto.getNome());
				
				System.out.print("Informe o novo nome: ");
				produto.setNome(scan.nextLine());
				
				System.out.print("Informe a nova quantidade: ");
				produto.setQuantidade(new Integer(scan.nextLine()));
				
				atualizar(produto);
				break;
				
			case "localizar":
				System.out.print("Informe o nome: ");
				produto.setNome(scan.nextLine());

				System.out.println(localizar(produto.getNome()));
				
				break;

			case "listar":
				for (Produto p : listar()) {
					System.out.println(p);
				}
				break;
				
			case "excluir":
				System.out.print("Informe o nome do produto: ");
				produto = localizar(scan.nextLine());
				
				excluir(produto.getId());
				break;

			default:
				break;
			}
		}
	}

	public static void gravar(Produto produto) {
		ProdutoDAO dao = new ProdutoDAO();

		try {
			dao.salvar(produto);
			System.out.println("Produto salvo com sucesso!");
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}
	
	public static void atualizar(Produto produto) {
		ProdutoDAO dao = new ProdutoDAO();

		try {
			dao.atualizar(produto);
			System.out.println("Produto atualizado com sucesso!");
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}
	
	public static Produto localizar(String nome) {
		ProdutoDAO dao = new ProdutoDAO();

		try {
			return dao.buscar(nome);
		} catch (SQLException e) {
			e.printStackTrace();
		}
		
		return new Produto();
	}
	
	public static List<Produto> listar() {
		ProdutoDAO dao = new ProdutoDAO();

		try {
			return dao.listar();
		} catch (SQLException e) {
			e.printStackTrace();
		}
		return new ArrayList<Produto>();
	}
	
	public static void excluir(long id) {
		ProdutoDAO dao = new ProdutoDAO();

		try {
			dao.excluir(id);
			System.out.println("Removido com sucesso");
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}
}