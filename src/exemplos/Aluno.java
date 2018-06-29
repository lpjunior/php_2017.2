package exemplos;

public class Aluno implements ILogin {

	private long id;
	private String nome;
	private double nota01;
	private double nota02;
	
	public Aluno() {

	}

	public long getId() {
		return id;
	}

	public void setId(long id) {
		this.id = id;
	}

	public String getNome() {
		return nome;
	}

	public void setNome(String nome) {
		this.nome = nome;
	}

	public double getNota01() {
		return nota01;
	}

	public void setNota01(double nota01) {
		this.nota01 = nota01;
	}

	public double getNota02() {
		return nota02;
	}

	public void setNota02(double nota02) {
		this.nota02 = nota02;
	}

	@Override
	public String logar(String senha) {
		if(senha.equals("senac@11515")) {
			return "Aluno logado";
		} else {
			return "Aluno não logado";
		}
	}
}
