package model;

public class TestePessoa {
	// main() -> escreve main + ctrl + espa�o
	// identar o c�digo -> ctrl + shift + F
	public static void main(String[] args) {
		Pessoa claudemir = new Pessoa();
		claudemir.setId(1);
		claudemir.setNome("Claudemir");
		claudemir.setCpf("123.456.789-00");

		Pessoa mirmirzinho = new Pessoa();
		mirmirzinho.setId(1);
		mirmirzinho.setNome("Claudemir");
		mirmirzinho.setCpf("123.456.789-00");

		Pessoa claudemilson = claudemir;
		claudemilson.setId(1);
		claudemilson.setNome("Claudemir");
		claudemilson.setCpf("123.456.789-00");
		
		if (claudemir.equals(mirmirzinho))
			System.out.println("� Mirmirzinho");
		else if (claudemir.equals(claudemilson))
			System.out.println("� Mirmirzinho");
		else
			System.out.println("N�o � o Mirmirzinho");

	
		System.out.println(claudemir);
		System.out.println(claudemilson);
	}
}
