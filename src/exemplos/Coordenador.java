package exemplos;

import java.util.Arrays;
import java.util.List;

public class Coordenador extends Funcionario {

	public String unidade;
	
	public List<String> professores() {
		return Arrays.asList("TI", "Design de Games");
	}
}
