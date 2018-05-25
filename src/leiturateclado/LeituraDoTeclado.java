package leiturateclado;

import java.util.Scanner;

public class LeituraDoTeclado {
	public static void main(String[] args) {

		String nome;
		String email;
		
		Scanner leitura = new Scanner(System.in);
		
		System.out.print("Informe o nome: ");
		nome = leitura.nextLine();
		
		System.out.print("Informe o email: ");
		email = leitura.nextLine();
		
		leitura.close();
		
		System.out.println("O nome informado foi: " + nome);
		System.out.println("O email informado foi: " + email);
	}
}