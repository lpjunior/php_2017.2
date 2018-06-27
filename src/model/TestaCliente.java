package model;

import java.util.Arrays;

public class TestaCliente {

	public static void main(String[] args) {
		// cliente sem polimorfismo
		Cliente cliente1 = new Cliente();
		cliente1.setNome("Marcelo 71");
		cliente1.setEndereco(new Endereco());
		cliente1.getEndereco().setLogradouro("Rua 1");
		cliente1.getEndereco().setBairro("Centro do Batuque");
		cliente1.getEndereco().setCidade("Niterói");
		cliente1.getEndereco().setEstado("Rio de Janeiro");
		
		// outra forma
		
		Endereco end = new Endereco();
		end.setLogradouro("Rua 1");
		end.setBairro("Centro do Batuque");
		end.setCidade("Niterói");
		end.setEstado("Rio de Janeiro");

		Cliente cliente3 = new Cliente("Thiago", "123.456.879-0", "2121-2121", end, "dinheiro", Arrays.asList("Tarô", "Buzios"));
		
		// Polimorfismo
		Pessoa cliente2 = new Cliente();
		((Cliente)cliente2).setFormaDePagamento("boleto");
	}
}
