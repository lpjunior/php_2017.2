package exercicio;

import java.util.Scanner;

public class ExercicioSlide {
	public static void main(String[] args) {

		Scanner scan = new Scanner(System.in);

		double numero; // variavel a receber o valor digitado
		double soma = 0; // o acumulador

		do {
			System.out.print("Informe um número: ");
			numero = scan.nextDouble();

			if (numero == 0) {
				break;
			}
			soma += numero;
		} while (true); // loop infinito
		scan.close();
		System.out.println("A soma dos valores digitados é: " + soma);
	}
}
