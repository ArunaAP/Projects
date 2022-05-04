package com.DepartmentManager;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

import com.staffManagement.DBconnection;
import com.staffManagement.StaffMember;

public class DepartmentManagerDbUtill {
	
	private static boolean isSuccess;
	private static Connection con = null;
	private static Statement st = null;
	private static ResultSet rs = null;
	
	
	//add new memeber details for member form 
	
	public static boolean insertNewMemberForm (String name , String email , String pno , String uname , String password ){
		
	    isSuccess = false;

	    
	    try {
	   
	    	con = DBconnection.getConnection();
	    	st = con.createStatement();
	    	
	    	String sql = "insert into details values(0,'"+name+"' ,'"+email+"' , '"+pno+"' , '"+uname+"' , '"+password+"')";
	    	int rs = st.executeUpdate(sql);
	    	
	    	if(rs > 0 ) {
	    		isSuccess = true;
	    	}else {
	    		isSuccess = false;
	    	}
	    	
		} catch (SQLException e) {
			
			e.printStackTrace();
			
		} finally {
			
			System.out.println("Finally");
			
		}
	    

		return isSuccess;

	
	}
	
	
	//update staff member table
	
    public static boolean updateStaffMember(String id , String name , String email , String phone , String username , String password) {
  	  
  	  try {
  		  
	    	con = DBconnection.getConnection();
	    	st = con.createStatement();
	    	
	    	String sql = "update details set name = '"+name+"', email = '"+email+"' , phone = '"+phone+"' , username = '"+username+"' , password = '"+password+"'"+ "where id = '"+id+"'";
	    	int rs = st.executeUpdate(sql);
	    	
	    	if(rs > 0 ) {
	    		isSuccess = true;
	    	}else {
	    		isSuccess = false;
	    	}
	    	
	    	
	    	
			
		} catch (SQLException e) {
			
			e.printStackTrace();
			
		} finally {
			
			System.out.println("Finally");
			
		}

  	  
  	  
  	  
  	  return isSuccess;
    }
	
	
	
    //view staff member details
    
    
    public static List<StaffMember> getStaffMemberDetails(String Id){
  	  
  	  int convertedid = Integer.parseInt(Id);
  	  
  	  ArrayList<StaffMember> sf = new ArrayList<>();
  	  
  	  try {
  		  
  		  
	    	con = DBconnection.getConnection();
	    	st = con.createStatement();
	    	
	    	String sql = "select * from details where id = '"+convertedid+"'";
	        rs = st.executeQuery(sql);
	        
	        while(rs.next()) {
	        	
	        	int id = rs.getInt(1);
	        	String name = rs.getString(2);
	        	String email = rs.getString(3);
	        	String phone = rs.getString(4);
	        	String username = rs.getString(5);
	        	String password = rs.getString(6);
	        	
	        	StaffMember staf = new StaffMember(id,name,email,phone,username,password);
	        	sf.add(staf);
	        	
	        }
   
			
		} catch (SQLException e) {
			
			e.printStackTrace();
			
		} finally {
			
			System.out.println("Finally");
			
		}
  	  
	 //return array list 
	 return sf;
		
    }
    
    
        //delete staff member details
    
    
		public static boolean deleteStaffMember(String Id) {
  	  
			int convertId = Integer.parseInt(Id);
			
			try {
	    		  
	  	    	con = DBconnection.getConnection();
	  	    	st = con.createStatement();
	  	    	
	  	    	String sql = "delete from details where id = '"+convertId+"'";
	  	    	int rs = st.executeUpdate(sql);
	  	    	
	  	    	if(rs>0) {
	  	    		
	  	    		isSuccess = true;
	  	    	}else {
	  	    		
	  	    		isSuccess = false;
	  	    	}
				
				
			} catch (SQLException e) {
				
				e.printStackTrace();
				
			} finally {
				
				System.out.println("Finally");
				
			}
			
			
			return isSuccess;
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
				
			} finally {
				
				System.out.println("Finally");
				
			}
		    

			return isSuccess;

		}
    
    
 
    
    
}  