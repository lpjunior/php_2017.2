package poo;

public class AppTeste {
	public static void main(String[] args) {
		/*
		 * Pessoa p - criação da referencia da Pessoa, aonde o 'p' é essa referencia.
		 * 
		 * new Pessoa() - criação da instancia(Objeto), aonde utilizamos a palavra new
		 * para criar.
		 */

		/**
		 * Comentário documental
		 * 
		 * @author Luis Paulo Jr.
		 * @since 2018-05-29
		 */

		/**
		 * @var p - Da acesso aos recursos da classe Pessoa
		 */

		Pessoa p = new Pessoa();

		p.setNome("Claudemir");
		p.setSexo("Masculino");
		p.setCorDaPele("Negro");
		p.setTitulo("Batman");
	}
}
