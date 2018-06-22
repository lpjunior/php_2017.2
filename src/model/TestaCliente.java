package model;

public class TestaCliente {

	public static void main(String[] args) {
		// cliente sem polimorfismo
		Cliente cliente1 = new Cliente();
		cliente1.setNome("Marcelo 71");
		
		// Polimorfismo
		Pessoa cliente2 = new Cliente();
		((Cliente)cliente2).setFormaDePagamento("boleto");
	}
}
