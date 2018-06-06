package vetores;

public class Aritmetica {

	/**
	 * @param ...valores
	 *            - é uma definição de vetor como parametro
	 **/

	public double somar(double... valores) {

		double resultado = 0;

		for (double v : valores) {
			resultado += v;
		}

		// System.out.println("O total é: " + resultado);
		return resultado;
	}

	public double multiplicacao(double... valores) {

		double resultado = 1;

		for (double v : valores) {
			resultado *= v;
		}

		return resultado;
	}

	public double subtracao(double... valores) {

		double resultado = valores[0];

		for (int i = 1; i < valores.length; i++) {
			resultado -= valores[i];
		}

		return resultado;
	}

	public double divisao(double... valores) {

		double resultado = valores[0];

		for (int i = 1; i < valores.length; i++) {
			resultado /= valores[i];
		}

		return resultado;
	}
}
