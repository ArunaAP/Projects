package com.Salary;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;


import com.staffManagement.DBconnection;


public class SalaryDbUtill {
	
	
	private static boolean isSuccess;
	private static Connection con = null;
	private static Statement st = null;
	private static ResultSet rs = null;

	//generate total value
	
	public static double generateSalary(double basic , double all , double bonus , double fuel , double ot , double epf , double donation , double fee , double tax) {
		
		double total = 0.00;
		
		total = (basic + all + bonus + fuel + ot) - (epf + donation + fee + tax);
		

		return total;
	
	}
	
	
	
	//insert salary details for salary table
	
	public static boolean insertSalaryForm (String id , String month , double basic , double all , double bonus , double fuel , double ot , double epf , double donation , double fee , double tax , double total){
		
		isSuccess = false;

	    
	    try {
	   
	    	con = DBconnection.getConnection();
	    	st = con.createStatement();
	    	
	    	String sql = "insert into salary values(0,'"+id+"' ,'"+month+"' , '"+basic+"' , '"+all+"' , '"+bonus+"' , '"+fuel+"' , '"+ot+"' , '"+epf+"' , '"+donation+"' , '"+fee+"' , '"+tax+"' , '"+total+"')";
	    	int rs = st.executeUpdate(sql);
	    	
	    	if(rs > 0 ) {
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
	
	//validate payslip
	
	public static List<payslip> validate(String id , String month){
		
		
		ArrayList<payslip> pay = new ArrayList<payslip>();
		
		
	    try {
	    	
	    	con = DBconnection.getConnection();
	    	st = con.createStatement();

	    	
	    	String sql = "select * from salary where sfmemberid = '"+id+"' and month = '"+month+"'";
	    	rs = st.executeQuery(sql);
	    	
	    	if(rs.next()) {
	    		
	    		
	    		int sid = rs.getInt(1);
	    		String sfmemberid = rs.getString(2);
	    		String Month = rs.getString(3);
	    		double basic = rs.getDouble(4);
	    		double allowance = rs.getDouble(5);
	    		double bonus = rs.getDouble(6);
	    		double fuel = rs.getDouble(7);
	    	    double ot =rs.getDouble(8);
	    	    double epf = rs.getDouble(9);
	    	    double donation = rs.getDouble(10);
	    	    double fee = rs.getDouble(11);
	    	    double tax = rs.getDouble(12);
	    	    double total = rs.getDouble(13);
	    		
	    		
	    	    payslip slip = new payslip(sid,sfmemberid,Month,basic,allowance,bonus,fuel,ot,epf,donation,fee,tax,total);
	    		pay.add(slip);
	    	}
	    		
			
		} catch (SQLException e) {
			
			e.printStackTrace();
			
		} finally {
			
			System.out.println("Finally");
			
		}
		

		return pay;
		

	}
	
	
	
	//update salary details
	
    public static boolean updateSalary(int sid , String id , String month , double basic , double all , double bonus , double fuel , double ot , double epf , double donation , double fee , double tax , double total) {
  	  
  	  try {
  		  
	    	con = DBconnection.getConnection();
	    	st = con.createStatement();
	    	
	    	String sql = "update salary set sid = '"+sid+"', sfmemberid = '"+id+"' , month = '"+month+"' , basicsalary = '"+basic+"' , allowance = '"+all+"' , bonus = '"+bonus+"' , fuel = '"+fuel+"' , otsalary = '"+ot+"' , epf = '"+epf+"' , deaddonation = '"+donation+"' , walfarefee = '"+fee+"' , tax = '"+tax+"' , total = '"+total+"' " + "where sid = '"+sid+"'";
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
    
    
    

    // view pay slip details
    
    public static List<payslip> getPaySlipDetails(String ssid){
  	  
  	  int convertedSid = Integer.parseInt(ssid);
  	  
  	  ArrayList<payslip> pay = new ArrayList<>();
  	  
  	  try {
  		  
  		  
	    	con = DBconnection.getConnection();
	    	st = con.createStatement();
	    	
	    	String sql = "select * from salary where sid = '"+convertedSid+"'";
	        rs = st.executeQuery(sql);
	        
	        while(rs.next()) {
	        	
	    		int sid = rs.getInt(1);
	    		String sfmemberid = rs.getString(2);
	    		String Month = rs.getString(3);
	    		double basic = rs.getDouble(4);
	    		double allowance = rs.getDouble(5);
	    		double bonus = rs.getDouble(6);
	    		double fuel = rs.getDouble(7);
	    	    double ot =rs.getDouble(8);
	    	    double epf = rs.getDouble(9);
	    	    double donation = rs.getDouble(10);
	    	    double fee = rs.getDouble(11);
	    	    double tax = rs.getDouble(12);
	    	    double total = rs.getDouble(13);
	        	
	    	    payslip slip = new payslip(sid,sfmemberid,Month,basic,allowance,bonus,fuel,ot,epf,donation,fee,tax,total);
	        	pay.add(slip);
	        	
	        }
  		  
  		   
			
		} catch (SQLException e) {
			
			e.printStackTrace();
			
		} finally {
			
			System.out.println("Finally");
			
		}
  	  
	  
		return pay;
		
    }
	


}
