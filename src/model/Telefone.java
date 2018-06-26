package model;

import java.io.Serializable;

public class Telefone implements Serializable {

	private static final long serialVersionUID = 1L;
	
	private long id;
	private String telefone;

	public Telefone() {
	}

	public Telefone(String telefone) {
		this.telefone = telefone;
	}

	public Telefone(long id, String telefone) {
		this.id = id;
		this.telefone = telefone;
	}

	public String getTelefone() {
		return telefone;
	}

	public void setTelefone(String telefone) {
		this.telefone = telefone;
	}

	public long getId() {
		return id;
	}

	public void setId(long id) {
		this.id = id;
	}
}