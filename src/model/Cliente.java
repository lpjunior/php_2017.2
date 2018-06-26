package model;

import java.util.List;

public class Cliente extends Pessoa {

	private static final long serialVersionUID = 1L;

	private String formaDePagamento;
	private List<String> categorias;
	
	public Cliente() {
		super();
	}

	public Cliente(String nome, String cpf, String telefone, String logradouro, String bairro, String cidade,
			String estado, String cep, String formaDePagamento, List<String> categorias) {
		super(nome, cpf, telefone, new Endereco(logradouro, bairro, cidade, estado, cep));
		this.formaDePagamento = formaDePagamento;
		this.categorias = categorias;
	}

	public Cliente(long id, String nome, String cpf, String telefone, String logradouro, String bairro, String cidade,
			String estado, String cep, String formaDePagamento, List<String> categorias) {
		super(id, nome, cpf, telefone, new Endereco(logradouro, bairro, cidade, estado, cep));
		this.formaDePagamento = formaDePagamento;
		this.categorias = categorias;
	}

	public String getFormaDePagamento() {
		return formaDePagamento;
	}

	public void setFormaDePagamento(String formaDePagamento) {
		this.formaDePagamento = formaDePagamento;
	}

	public List<String> getCategorias() {
		return categorias;
	}

	public void setCategorias(List<String> categorias) {
		this.categorias = categorias;
	}

	@Override
	public String toString() {
		return " Cliente " + super.toString() + ", formaDePagamento=" + formaDePagamento + ", categorias="
				+ categorias;
	}
}
