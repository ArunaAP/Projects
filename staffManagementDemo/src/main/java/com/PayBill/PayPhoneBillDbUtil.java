package com.PayBill;

import java.sql.Connection;
import java.sql.SQLException;
import java.sql.Statement;

import com.staffManagement.DBconnection;


//phone bill implementation

public class PayPhoneBillDbUtil implements PayBillDbUtil {
	
	
	private static boolean isSuccess;
	private static Connection con = null;
	private static Statement st = null;
	
	String billingdate;
	String accno;
	String spro;
	String pno;
	String amount;
	

	public void setBillingdate(String billingdate) {
		this.billingdate = billingdate;
	}



	public void setAccno(String accno) {
		this.accno = accno;
	}


	public void setSpro(String spro) {
		this.spro = spro;
	}


	public void setPno(String pno) {
		this.pno = pno;
	}


	public void setAmount(String amount) {
		this.amount = amount;
	}

	// insert phone bil details into phone table
	
	@Override
	public boolean payBill() {
		
		
		 isSuccess = false;
			

			
		    try {
		 	   
		    	con = DBconnection.getConnection();
		    	st = con.createStatement();
		    	
		    	String sql = "insert into phonebill values(0,'"+billingdate+"' ,'"+accno+"' , '"+spro+"' , '"+pno+"' , '"+amount+"')";
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
