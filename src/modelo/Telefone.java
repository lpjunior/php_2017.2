package modelo;

public class Telefone {

    private int id;
    private int cid;
    private String numero;
    private Cliente cliente;

    public Telefone (){

    }
  
    public Telefone (int id, int cid, String numero, Cliente cliente){
        this.id = id;
        this.cid = cid;
        this.numero = numero;
        this.cliente = cliente;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getCid() {
        return cid;
    }

    public void setCid(int cid) {
        this.cid = cid;
    }

    public String getNumero() {
        return numero;
    }

    public void setNumero(String numero) {
        this.numero = numero;
    }

	public Cliente getCliente() {
		return cliente;
	}

	public void setCliente(Cliente cliente) {
		this.cliente = cliente;
	}
}