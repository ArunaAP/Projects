package com.ApplyLeave;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;


import com.staffManagement.DBconnection;

public class applyLeaveDbUtill {
	
	private static boolean isSuccess;
	private static Connection con = null;
	private static Statement st = null;
	private static ResultSet rs = null;
	
	//for insert leave form for leave table
	
	public static boolean insertLeaveForm (String name , String id , String type , String date , String reason ){
		
		boolean isSuccess = false;

	    
	    try {
	   
	    	con = DBconnection.getConnection();
	    	st = con.createStatement();
	    	
	    	String sql = "insert into leaveform values(0,'"+name+"' ,'"+id+"' , '"+type+"' , '"+date+"' , '"+reason+"')";
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
	
	
	
	
	
	  // view date from leave table 
	
      public static List<viewleave> Validate (String id , String date){
		
		ArrayList<viewleave> vl = new ArrayList<>();
		

	    try {
	    	
	    	con = DBconnection.getConnection();
	    	st = con.createStatement();
	    	
	    	
	    	
            //validate leave
	    	
	    	String sql = "select * from leaveform where id = '"+id+"' and date= '"+date+"'";
	    	rs = st.executeQuery(sql);
	    	
	    	if(rs.next()) {
	    		
	    		int count = rs.getInt(1);
	    		String name = rs.getString(2);
	    		String lid = rs.getString(3);
	    		String type = rs.getString(4);
	    		String ldate = rs.getString(5);
	    		String reason = rs.getString(6);
	    		
	    		
	    		viewleave vle = new viewleave(count,name,lid,type,ldate,reason);
	    		vl.add(vle);
	    	}
	    		
			
		} catch (SQLException e) {
			
			e.printStackTrace();
			
		} finally {
			
			System.out.println("Finally");
			
		}
	    
		
			
		return vl;
	}

	
	
	

      
      
	//update leave table 
      
      public static boolean updateLeave(String count , String name , String id , String type , String date , String reason) {
    	  
    	  try {
    		  
  	    	con = DBconnection.getConnection();
  	    	st = con.createStatement();
  	    	
  	    	String sql = "update leaveform set name = '"+name+"', id = '"+id+"' , type = '"+type+"' , date = '"+date+"' , reason = '"+reason+"'"+ "where count = '"+count+"'";
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
	
	

      // retrieve date from leave table 
      
      public static List<viewleave> getLeaveDetails(String Count){
    	  
    	  int convertedCount = Integer.parseInt(Count);
    	  
    	  ArrayList<viewleave> vl = new ArrayList<>();
    	  
    	  try {
    		  
    		//create Db Connection
    		  
  	    	con = DBconnection.getConnection();
  	    	st = con.createStatement();
  	    	
  	    	String sql = "select * from leaveform where count = '"+convertedCount+"'";
	        rs = st.executeQuery(sql);
	        
	        while(rs.next()) {
	        	
	        	int count = rs.getInt(1);
	        	String name = rs.getString(2);
	        	String id = rs.getString(3);
	        	String type = rs.getString(4);
	        	String date = rs.getString(5);
	        	String reason = rs.getString(6);
	        	
	        	viewleave vil = new viewleave(count, name, id, type, date, reason);
	        	vl.add(vil);
	        	
	        }
    		  
    		   
			
		} catch (SQLException e) {
			
			e.printStackTrace();
			
		} finally {
			
			System.out.println("Finally");
			
		}
    	  
	  
		return vl;
		
      }
      
      
      
      
      
      
        //delete leave details from leave table
      
		public static boolean deleteLeave(String count) {
    	  
			int convertCount = Integer.parseInt(count);
			
			try {
	    		  
	  	    	con = DBconnection.getConnection();
	  	    	st = con.createStatement();
	  	    	
	  	    	String sql = "delete from leaveform where count = '"+convertCount+"'";
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
		
		
		
		
		//Front validate
		
		public static boolean FrontEndValidate (String id , String date){
			
			boolean isSuccess = false;

		    
		    try {
		   
		    	con = DBconnection.getConnection();
		    	st = con.createStatement();
		    	
		    	String sql = "select * from leaveform where id = '"+id+"' and date = '"+date+"' ";
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
