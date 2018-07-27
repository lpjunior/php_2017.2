package banco;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class DAO {

    public DAO () {
        try {
            Class.forName("com.mysql.jdbc.Driver");
        } catch(ClassNotFoundException e) {
            e.printStackTrace();
            System.out.println(e.getMessage());
        }
    }

    public Connection getConnection() throws SQLException {
        return DriverManager.getConnection("jdbc:mysql://localhost:3306/aula19", "root", "");
    }
}