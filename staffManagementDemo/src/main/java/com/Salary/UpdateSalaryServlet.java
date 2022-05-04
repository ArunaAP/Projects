package com.Salary;

import java.io.IOException;
import java.util.List;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;






@WebServlet("/UpdateSalaryServlet")
public class UpdateSalaryServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;


	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		String sid = request.getParameter("sid");
		String id = request.getParameter("id");
		String month = request.getParameter("month");
		String basic = request.getParameter("basic");
		String all = request.getParameter("all");
		String bonus = request.getParameter("bonus");
		String fuel = request.getParameter("fuel");
		String ot = request.getParameter("ot");
		String epf = request.getParameter("epf");
		String donation = request.getParameter("donation");
		String fee = request.getParameter("fee");
		String tax = request.getParameter("tax");
		
		
		int convertedsid = Integer.parseInt(sid);
		double convertBasic = Double.parseDouble(basic);
		double convertall = Double.parseDouble(all);
		double convertbonus = Double.parseDouble(bonus);
		double convertfuel = Double.parseDouble(fuel);
		double convertot = Double.parseDouble(ot);
		double convertepf = Double.parseDouble(epf);
		double convertdonation = Double.parseDouble(donation);
		double convertfee = Double.parseDouble(fee);
		double convertax = Double.parseDouble(tax);
		
		double Newtotal =	SalaryDbUtill.generateSalary(convertBasic, convertall, convertbonus, convertfuel, convertot, convertepf, convertdonation, convertfee, convertax);
		
		boolean isTrue;
		
		isTrue = SalaryDbUtill.updateSalary(convertedsid, id, month, convertBasic, convertall, convertbonus, convertfuel, convertot, convertepf, convertdonation, convertfee, convertax, Newtotal);
		
		
		
		if(isTrue==true) {
			
			List<payslip> paydetails = SalaryDbUtill.getPaySlipDetails(sid);
			request.setAttribute("paydetails", paydetails);
			
			RequestDispatcher dis = request.getRequestDispatcher("paySlip.jsp");
			dis.forward(request, response);
			
		}else {
				
			List<payslip> paydetails = SalaryDbUtill.getPaySlipDetails(sid);
			request.setAttribute("paydetails", paydetails);
			
			RequestDispatcher dis = request.getRequestDispatcher("paySlip.jsp");
			dis.forward(request, response);
			
		}
		
		
		
	}

}
