package com.staffManagement;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;





public class staffmemberDbUtil {
	
	private static Connection con = null;
	private static Statement st = null;
	private static ResultSet rs = null;
	
	
	
	//validate and view user details
	
	public static List<StaffMember> Validate (String username , String password){
		
		ArrayList<StaffMember> Stm = new ArrayList<>();
		

	    try {
	    	
	    	con = DBconnection.getConnection();
	    	st = con.createStatement();

	    	
	    	String sql = "select * from details where username = '"+username+"' and password = '"+password+"'";
	    	rs = st.executeQuery(sql);
	    	
	    	if(rs.next()) {
	    		
	    		int id = rs.getInt(1);
	    		String name = rs.getString(2);
	    		String email = rs.getString(3);
	    		String phone = rs.getString(4);
	    		String userName = rs.getString(5);
	    		String pwd = rs.getString(6);
	    		
	    		
	    		StaffMember sf = new StaffMember(id,name,email,phone,userName,pwd);
	    		Stm.add(sf);
	    	}
	    		
			
		} catch (SQLException | NullPointerException e) {
			
			e.printStackTrace();
			
		} finally {
			
			System.out.println("Finally");
			
		}
		
			
		return Stm;
	}
	
	//validate user 
	
	public static boolean FrontEndValidate (String username , String password){
		
		boolean isSuccess = false;

	    
	    try {
	   
	    	con = DBconnection.getConnection();
	    	st = con.createStatement();
	    	
	    	String sql = "select * from details where username = '"+username+"' and password = '"+password+"' ";
	    	 rs = st.executeQuery(sql);
	    	
	    	if(rs.next() ) {
	    		isSuccess = true;
	    	}else {
	    		isSuccess = false;
	    	}
	    	
		} catch (SQLException e) {
			
			e.printStackTrace();
			
		}  finally {
			
			System.out.println("Finally");
			
		}
	    

		return isSuccess;

	}
	
	


}
