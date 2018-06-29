package exemplos;

public class Exemplo {

	public static void main(String[] args) {
		
		Aluno rogerio = new Aluno();
		Funcionario bergson = new Funcionario();
		Professor luis = new Professor();
		Coordenador ricardo = new Coordenador();
		Secretaria andreia = new Secretaria();
		
		// poliformismo
		Funcionario cristiano = new Coordenador();
		Funcionario fabiano = new Professor();
		//Funcionario andre = new Aluno();
		//Secretaria mariana = new Funcionario();

		// instancias e refencias do mesmo tipo 
		rogerio.setNota01(7.5);
		luis.turma = "Java";
		ricardo.unidade = "niterói";
		andreia.setor = "secretaria";
		System.out.println("Grupo de instrutores do Ricardo: " + ricardo.professores());
		
		// casting
		System.out.println("Grupo de instrutores do Cristiano: " + ( (Coordenador) cristiano).professores());
		
		// conversão do tipo de objeto
		Coordenador cristiano2 = (Coordenador) cristiano;
		
		System.out.println(cristiano2.professores());
		cristiano2.unidade = "Niterói";

		System.out.println(Funcionario.verificaIntancia(rogerio));
		
		System.out.println(luis.logar("senac@1234"));
	}
}
