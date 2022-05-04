package com.staffManagement;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class DBconnection {
	
	private static String url = "jdbc:mysql://localhost:3306/staffmember";
	private static String Uname = "root";
	private static String Pass = "Aruna1999";
	private static Connection con;
	
	//open connection
	public static Connection getConnection(){
		try {
			
	    	Class.forName("com.mysql.jdbc.Driver"); //drivar manager
	    	con = DriverManager.getConnection(url,Uname,Pass);
	    	
			
		} catch (LinkageError | ClassNotFoundException | SQLException e ) {
			
			System.out.println("database connection lost");
			
		} finally {
			
			System.out.println("Finally");
			
		}
		
		
		return con;
		
	}

}
