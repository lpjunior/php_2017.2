package poo;

// caracteristicas
// ações
public class Pessoa {

	/*
	 * Os atributos definem as caracteriscas de uma pessoa
	 */
	private String nome;
	private String corDaPele;
	private Double altura;
	private Double peso;
	private Integer idade;
	private String sexo;
	private String titulo;

	/* Os métodos definem as ações de uma pessoa */
	void andar() {
	}

	void correr() {
	}

	void comer() {
	}

	String falar() {
		return "";
	}
	// void verificarLogin() {} -- não faz sentido

	// métodos gets - servem para resgatar a valor do atributo
	public String getNome() {
		return nome;
	}

	public String getCorDaPele() {
		return corDaPele;
	}

	public Double getAltura() {
		return altura;
	}

	public Double getPeso() {
		return peso;
	}

	public Integer getIdade() {
		return idade;
	}

	public String getSexo() {
		return sexo;
	}

	public String getTitulo() {
		return titulo;
	}

	// métodos sets - servem para atribuir(inserir) o valor do atributo
	public void setNome(String nome) {
		this.nome = nome;
	}

	public void setCorDaPele(String corDaPele) {
		this.corDaPele = corDaPele;
	}

	public void setAltura(Double altura) {
		this.altura = altura;
	}

	public void setPeso(Double peso) {
		this.peso = peso;
	}

	public void setIdade(Integer idade) {
		this.idade = idade;
	}

	public void setSexo(String sexo) {
		this.sexo = sexo;
	}

	public void setTitulo(String titulo) {
		this.titulo = titulo;
	}
}
