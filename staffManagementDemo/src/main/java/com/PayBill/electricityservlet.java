package com.PayBill;

import java.io.IOException;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;


@WebServlet("/electricityservlet")
public class electricityservlet extends HttpServlet {
	private static final long serialVersionUID = 1L;


	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		String date = request.getParameter("date");
		String accno = request.getParameter("accno");
		String duration = request.getParameter("duration");
		String con = request.getParameter("con");
		String amount = request.getParameter("amount");
		
		try {
			
			BillFactory billFactory = new BillFactory();
			PayElectricityBillDbUtil ob = (PayElectricityBillDbUtil) billFactory.getBillType("electricitybil");
			
			
			ob.setDate(date);
			ob.setAccno(accno);
			ob.setDuration(duration);
			ob.setConn(con);
			ob.setAmount(amount);
			
			boolean isTrue;
			
			isTrue =  ob.payBill();
			
			if(isTrue == true) {
				
				RequestDispatcher dis = request.getRequestDispatcher("PayBillSucces.jsp");
				dis.forward(request, response);
				
			}else if(isTrue == false){
				
				RequestDispatcher dis2 = request.getRequestDispatcher("PayBillUnsucces.jsp");
				dis2.forward(request, response);
				
			}
			
		} catch (ClassCastException e) {
			
			e.printStackTrace();
			
		} finally {
			
			System.out.println("Finally");
			
		}

	
	}




}


