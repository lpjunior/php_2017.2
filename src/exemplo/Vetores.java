package exemplo;

public class Vetores {
	public static void main(String[] args) {
		// criação do vetor
		String[] nomes = new String[11];
		
		// atribuição dos valores ao vetor
		nomes[0] = "Claudemir";
		nomes[1] = "Glauco";
		nomes[2] = "Gabriel";
		nomes[3] = "Jonathan";
		nomes[4] = "Rogério";
		nomes[5] = "Luiz";
		nomes[6] = "André";
		nomes[7] = "Paulo";
		nomes[8] = "Willian";
		nomes[9] = "Bergson";
		nomes[10] = "Mariana";
		
		// impressão usando for
		for(int i = 0; i < nomes.length; i++)
			System.out.println(nomes[i]);
		
		System.out.println("----------- separador -----------");
		
		// impressão usando foreach
		for(String n : nomes)
			System.out.println(n);
	}
}
