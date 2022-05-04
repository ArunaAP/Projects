package com.PayBill;

import java.io.IOException;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;


@WebServlet("/phoneservlet")
public class phoneservlet extends HttpServlet {
	private static final long serialVersionUID = 1L;


	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		String bildate = request.getParameter("bildate");
		String accno = request.getParameter("accno");
		String spro = request.getParameter("spro");
		String pno = request.getParameter("pno");
		String amount = request.getParameter("amount");
		
		
		try {
			
			BillFactory billFactory = new BillFactory();
			
			PayPhoneBillDbUtil ob = (PayPhoneBillDbUtil) billFactory.getBillType("phonebil");
			
			ob.setBillingdate(bildate);
			ob.setAccno(accno);
			ob.setSpro(spro);
			ob.setPno(pno);
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
