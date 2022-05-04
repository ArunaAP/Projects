package com.PayBill;

import java.io.IOException;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;


@WebServlet("/waterservlet")
public class waterservlet extends HttpServlet {
	private static final long serialVersionUID = 1L;

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		String accno = request.getParameter("accno");
		String duration = request.getParameter("duration");
		String dis = request.getParameter("dis");
		String tff = request.getParameter("tff");
		String amount = request.getParameter("amount");
		
		
		try {
			BillFactory billFactory = new BillFactory();
			
			PayWaterBillDbUtil ob = (PayWaterBillDbUtil) billFactory.getBillType("waterbil");
			
			ob.setAccno(accno);
			ob.setDuration(duration);
			ob.setDis(dis);
			ob.setTff(tff);
			ob.setAmount(amount);
			
			boolean isTrue;
			
			 isTrue =ob.payBill();
			
				if(isTrue == true) {
					
					RequestDispatcher dis1 = request.getRequestDispatcher("PayBillSucces.jsp");
					dis1.forward(request, response);
					
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
