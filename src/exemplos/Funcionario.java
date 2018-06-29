package exemplos;

public class Funcionario implements ILogin {

	String nome;

	/**
	 * O método tera o seu retorno como uma msg sobre a instancia de objeto passado
	 **/
	public static String verificaIntancia(Object f) {
		
		if(f instanceof Professor) {
			return "É um objeto especializado de Funcionário do tipo professor";
		} else if(f instanceof Coordenador) {
			return "É um objeto especializado de Funcionário do tipo coordenador";
		} else if(f instanceof Secretaria) {
			return "É um objeto especializado de Funcionário do tipo secretaria";
		} else if(f instanceof Funcionario) {
			return "É um objeto simples de funcionário, sem especialização";
		} else {
			return "Não é uma instancia de Funcionario";
		}
	}

	@Override
	public String logar(String senha) {

		if(senha.equals("senac@123")) {
			return "Logado com sucesso!";
		} else {
			return "Senha incorreta";
		}
	}
}
