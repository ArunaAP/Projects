package com.Salary;

import java.io.IOException;
import java.util.List;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;




@WebServlet("/viewPaySlipServlet")
public class viewPaySlipServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;


	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		String id = request.getParameter("id");
		String month = request.getParameter("month");
		
		
		try {
			List<payslip> paydetails = SalaryDbUtill.validate(id, month);
			request.setAttribute("paydetails", paydetails);
			
		} catch (Exception e) {
			e.printStackTrace();
		}
		
		
		RequestDispatcher dis = request.getRequestDispatcher("paySlip.jsp");
		dis.forward(request, response);
		

		
		
	}

}
