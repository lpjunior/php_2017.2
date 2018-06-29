package exemplos;

public class Funcionario implements ILogin {

	String nome;

	/**
	 * O m�todo tera o seu retorno como uma msg sobre a instancia de objeto passado
	 **/
	public static String verificaIntancia(Object f) {
		
		if(f instanceof Professor) {
			return "� um objeto especializado de Funcion�rio do tipo professor";
		} else if(f instanceof Coordenador) {
			return "� um objeto especializado de Funcion�rio do tipo coordenador";
		} else if(f instanceof Secretaria) {
			return "� um objeto especializado de Funcion�rio do tipo secretaria";
		} else if(f instanceof Funcionario) {
			return "� um objeto simples de funcion�rio, sem especializa��o";
		} else {
			return "N�o � uma instancia de Funcionario";
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
