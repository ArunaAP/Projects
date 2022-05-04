package com.PayBill;

import java.sql.Connection;
import java.sql.SQLException;
import java.sql.Statement;

import com.staffManagement.DBconnection;


// water bill implementation

public class PayWaterBillDbUtil implements PayBillDbUtil{
	
	private static boolean isSuccess;
	private static Connection con = null;
	private static Statement st = null;
	

	String accno;
	String duration;
	String dis;
	String tff;
	String amount;
	



	public void setAccno(String accno) {
		this.accno = accno;
	}




	public void setDuration(String duration) {
		this.duration = duration;
	}





	public void setDis(String dis) {
		this.dis = dis;
	}





	public void setTff(String tff) {
		this.tff = tff;
	}





	public void setAmount(String amount) {
		this.amount = amount;
	}



	@Override
	public boolean payBill() {
		

		
		isSuccess = false;

	    
	    try {
	   
	    	con = DBconnection.getConnection();
	    	st = con.createStatement();
	    	
	    	String sql = "insert into waterbill values(0,'"+accno+"' ,'"+duration+"' , '"+dis+"' , '"+tff+"' , '"+amount+"')";
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
