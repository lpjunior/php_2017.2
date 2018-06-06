package vetores;

public class AppArray {
	public static void main(String[] args) {
		// declaração do vetor
		int[] lista = new int[5];
		
		// Atribuição dos valores ao vetor
		
		lista[0] = 7;
		lista[1] = 11;
		lista[2] = 1;
		lista[3] = 2;
		lista[4] = 5;
		
		// impressão a partir de cada posição
		System.out.println(lista[0]);
		System.out.println(lista[1]);
		System.out.println(lista[2]);
		System.out.println(lista[3]);
		System.out.println(lista[4]);
		
		// impressão "automatizada", usando estrutura de repetição
		for(int i = 0; i < 5; i++) {
			System.out.println(lista[i]);
		}
		
		// definindo o tamanho do vetor na condicional dinamico
		for(int i = 0; i < lista.length; i++) {
			System.out.println(lista[i]);
		}
	}
}
