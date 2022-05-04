package com.Salary;

import java.io.IOException;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;


@WebServlet("/GenerateSalaryServlet")
public class GenerateSalaryServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
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
		
		
		double convertBasic = Double.parseDouble(basic);
		double convertall = Double.parseDouble(all);
		double convertbonus = Double.parseDouble(bonus);
		double convertfuel = Double.parseDouble(fuel);
		double convertot = Double.parseDouble(ot);
		double convertepf = Double.parseDouble(epf);
		double convertdonation = Double.parseDouble(donation);
		double convertfee = Double.parseDouble(fee);
		double convertax = Double.parseDouble(tax);
		
		
	    double total =	SalaryDbUtill.generateSalary(convertBasic, convertall, convertbonus, convertfuel, convertot, convertepf, convertdonation, convertfee, convertax);
		
		boolean isTrue;
		
		isTrue = SalaryDbUtill.insertSalaryForm(id, month, convertBasic, convertall, convertbonus, convertfuel, convertot, convertepf, convertdonation, convertfee, convertax, total);
		
		if(isTrue == true) {
			
			RequestDispatcher dis = request.getRequestDispatcher("generateSuccess.jsp");
			dis.forward(request, response);
			
		}else if(isTrue == false){
			
			RequestDispatcher dis2 = request.getRequestDispatcher("generateUnsuccess.jsp");
			dis2.forward(request, response);
			
		}
		
	
		
	}

}
