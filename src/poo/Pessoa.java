package poo;

// caracteristicas
// ações
public class Pessoa {

	/*
	 * Os atributos definem as caracteriscas de 
	 * uma pessoa
	 */
	private String nome;
	private String corDaPele;
	private Double altura;
	private Double peso;
	private Integer idade;
	private String sexo;
	private String titulo;

	/* Os métodos definem as ações de uma pessoa */
	void andar() {}
	void correr() {}
	void comer() {}
	String falar() { return ""; }
	// void verificarLogin() {} -- não faz sentido
	
	// métodos gets - servem para resgatar a valor do atributo
	public String getNome() {
		return nome;
	}
	
	// métodos sets - servem para atribuir(inserir) o valor do atributo
	public void setNome(String nome) {
		this.nome = nome;
	}
}
