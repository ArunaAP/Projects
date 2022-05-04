package com.PayBill;

import java.sql.Connection;
import java.sql.SQLException;
import java.sql.Statement;

import com.staffManagement.DBconnection;


//Electric bill implementation

public class PayElectricityBillDbUtil implements PayBillDbUtil {
	
	private static boolean isSuccess;
	private static Connection con = null;
	private static Statement st = null;

	
	String date;
	String accno;
	String duration;
	String conn;
	String amount;
	
	//set methods
	
	public void setDate(String date) {
		this.date = date;
	}





	public void setAccno(String accno) {
		this.accno = accno;
	}





	public void setDuration(String duration) {
		this.duration = duration;
	}





	public void setConn(String conn) {
		this.conn = conn;
	}





	public void setAmount(String amount) {
		this.amount = amount;
	}
	
	// insert electricity bil details into electricitybil table

	@Override
	public boolean payBill() {
		
		 isSuccess = false;
		

		
	    try {
	 	    //create connection
	    	
	    	con = DBconnection.getConnection();
	    	st = con.createStatement();
	    	
	    	String sql = "insert into electricitybill values(0,'"+date+"' ,'"+accno+"' , '"+duration+"' , '"+conn+"' , '"+amount+"')";
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



}
